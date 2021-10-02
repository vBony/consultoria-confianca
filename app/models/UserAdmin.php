<?php
class UserAdmin extends modelHelper{
    private $table = "u316339274_emprego_hg.admin_user";
    private $pre_fix = "u316339274_emprego_hg";

    public function getColunas(){
        return [
            'nome' => 'nome',
            'url' => 'url',
            'url_avatar_web' => 'url_avatar_web',
            'url_avatar' => 'url_avatar',
            'id_git' => 'id_git',
            'login_git' => 'login_git',
            'status' => 'status',
            'cargo' => 'cargo',
            'last_login' => 'last_login',
            'email' => 'email_git'
        ];
    }

    public function getCargo($idCargo){
        $cargos = [
            0 => 'Programador',
            1 => 'Líder de projeto'
        ];

        if(isset($cargos[$idCargo])){
            return $cargos[$idCargo];
        }
    }

    /**
     * Insere o usuário no banco de dados
     */
    public function insert($user_data){
        $sql = "INSERT INTO " . $this->table . "(id, nome, url, url_avatar_web, url_avatar, email, id_git, login_git, status, cargo)
                VALUES (
                    NULL,
                    :nome,
                    :url,
                    :url_avatar_web,
                    NULL,
                    :email,
                    :id_git,
                    :login_git,
                    0,
                    0
                )";
        
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nome", $user_data['nome']);
        $sql->bindValue(":url", $user_data['url']);
        $sql->bindValue(":url_avatar_web", $user_data['url_avatar_web']);
        $sql->bindValue(":email", $user_data['email_git']);
        $sql->bindValue(':id_git', $user_data['id_git']);
        $sql->bindValue(":login_git", $user_data['login_git']);
        $sql->execute();

        return $this->db->lastInsertId();
    }

    /**
     * Atualiza o usuário no banco de dados
     */
    public function update($user_data){
        try{
            $sql = "UPDATE 
                        $this->table 
                    SET 
                        nome = :nome, 
                        email = :email, 
                        login_git = :login_git 
                    WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":nome", $user_data['nome']);
            $sql->bindValue(":email", $user_data['email_git']);
            $sql->bindValue(":login_git", $user_data['login_git']);
            $sql->bindValue(":id", $user_data['id']);
            $sql->execute();
            
        }catch(Exception $e){
            return 'nao foi';
        }
    }

    /**
     * Verifica se o usuário vindo do github já existe no banco de dados
     */
    public function verify_user_git($git_id){
        intval($git_id);

        $sql = "SELECT * FROM " . $this->table . " WHERE id_git = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $git_id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            return $dados;
        }else{
            return null;
        }
    }

    public function get_user_data($id){
        intval($id);

        $sql = "SELECT * FROM " . $this->table . " WHERE id = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);

            $dados['cargo'] = $this->getCargo($dados['cargo']);
            $dados['primeiro_nome'] = $this->getPrimeiroNome($dados['nome']);

            return $dados;
        }else{
            return null;
        }
    }

    public function getPrimeiroNome($nomeCompleto){
        $arr = explode(' ', $nomeCompleto);
        return $arr[0];
    }

    public function salvarUltimoLogin($id, $data){
        $sql = " UPDATE " . $this->table . " SET last_login = :data WHERE id = :id " ;
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":data", $data);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function salvarUltimoIp($id, $ip){
        $sql = " UPDATE " . $this->table . " SET last_ip = :ip WHERE id = :id " ;

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":ip", $ip);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function buscar($id = null){
        if(empty($id)){
            $idUser = $_SESSION['token']['id'];
            $sql = "SELECT * FROM $this->table 
                        INNER JOIN $this->pre_fix.cargos
                            on cargos.c_id = admin_user.cargo
                        WHERE admin_user.id != :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $idUser);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $users = $sql->fetchAll(PDO::FETCH_ASSOC);

                /**
                 * Verifica a hora do ultimo login do usuario com o tempo atual para ver se os usuários estão online
                 */
                foreach($users as $chave => $user){
                    $token_valid_at =  date("Y-m-d H:i:s", strtotime($user['last_login']." +40 minutes"));
                    $now = date("Y-m-d H:i:s");

                    if($now > $token_valid_at){
                        $users[$chave]['disp_status'] = 'offline';
                    }elseif($now < $token_valid_at){
                        $users[$chave]['disp_status'] = 'online';
                    }

                    // Verificando se o usuário inseriu alguma foto, caso contrário é importada a foto padrão
                    if(!empty($user['url_avatar'])){
                        $users[$chave]['photo'] = $user['url_avatar'];
                    }elseif(!empty($user['url_avatar_web'])){
                        $users[$chave]['photo'] = $user['url_avatar_web'];
                    }else{
                        $users[$chave]['photo'] = $_ENV['BASE_URL'].'app/assets/imgs/default-user-image.png';
                    }
                }

                return $users;
            }
        }else{
            $sql = "SELECT * FROM $this->table 
                        INNER JOIN $this->pre_fix.cargos
                            on cargos.c_id = admin_user.cargo
                        WHERE admin_user.id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $user = $sql->fetch(PDO::FETCH_ASSOC);

                $token_valid_at =  date("Y-m-d H:i:s", strtotime($user['last_login']." +40 minutes"));
                $now = date("Y-m-d H:i:s");

                if($now > $token_valid_at){
                    $user['disp_status'] = 'offline';
                }elseif($now < $token_valid_at){
                    $user['disp_status'] = 'online';
                }

                // Verificando se o usuário inseriu alguma foto, caso contrário é importada a foto padrão
                if(!empty($user['url_avatar'])){
                    $user['photo'] = $user['url_avatar'];
                }elseif(!empty($user['url_avatar_web'])){
                    $user['photo'] = $user['url_avatar_web'];
                }else{
                    $user['photo'] = $_ENV['BASE_URL'].'app/assets/imgs/default-user-image.png';
                }

                $nomeArr = explode(' ', $user['nome']);
                $user['primeiro_nome'] = $nomeArr[0];

                return $user;
            }
        }
    }


    /**
     * Função para os lideres de projeto atualizar os dados permitidos do colaborador
     */
    public function leaderUpdateUser($cargo, $banned, $id){
        $banned = $banned == 'true' ? 1 : 0;

        try{
            $sql = " UPDATE $this->table SET 
            cargo = :cargo,
            status = :banned
            WHERE id = :id";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':cargo', $cargo);
            $sql->bindValue(':banned', $banned);
            $sql->bindValue(':id', $id);
            $sql->execute();
        }catch(Exception $e){
            return 'Erro: '.$e->getMessage();
        }
        
    }


    // VALIDAÇÕES
    public function validar($dados){

        // Colunas
        extract($this->getColunas());

        $erros = array();

        if($this->validarNome($dados[$nome]) != null){ 
            $erros['erros'][$nome] = $this->validarNome($dados[$nome]); 
        }

        if($this->validarEmail($dados[$email]) != null){ 
            $erros['erros'][$email] = $this->validarEmail($dados[$email]); 
        }

        if($this->validarLoginGit($dados[$login_git])){
            $erros['erros'][$login_git] = $this->validarLoginGit($dados[$login_git]);
        }

        if(!empty($erros)){
            return $erros;
        }else{
            return null;
        }

    }

    private function validarNome($nome){
        if(empty($nome)){
            return "Nome é obrigatório";
        }

        if(!preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/",$nome)){
            return "Digite um nome válido";
        }

        if(strrpos($nome, " ") === false){
            return "Digite seu nome completo";
        }

        if(strlen($nome) > 40){
            return "Digite um nome menor que 40 caracteres";
        }
    }

    private function validarEmail($email){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(!empty($email)){  //Campo não obrigatório
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return 'Digite um e-mail válido';
            }
        }else{
            return null;
        }
    }

    private function validarLoginGit($login_git){
        if(empty($login_git)){
            return "Nome de usuário é obrigatório";
        }

        if(strlen($login_git) > 40){
            return "Digite um nome menor que 40 caracteres";
        }
    }
}


?>