<?php
class RelatorioAcessos extends modelHelper{
    private $tabela = "relatorio_acessos";

    public function buscar($id = null){
        $sql = "SELECT * FROM $this->tabela ";
        if(!empty($id)){
            $sql .= " WHERE ra_id = :id ";
        }

        $sql .= " ORDER BY ra_id DESC ";

        $sql = $this->db->prepare($sql);
        if(!empty($id)){
            $sql->bindValue(":id", $id);
        }

        $sql->execute();

        if($sql->rowCount() > 0 && $sql->rowCount() > 1){
            $relatorio = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $this->adaptarRelatorio($relatorio);
        }elseif($sql->rowCount() == 1){
            $relatorios = $sql->fetch(PDO::FETCH_ASSOC);
            return $relatorios;
        }
    }

    public function getCount(){
        $sql = "SELECT COUNT(*) as contagem FROM $this->tabela";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    private function adaptarRelatorio($relatorio){
        $retorno = array();

        foreach($relatorio as $dado){
            $dado['hora'] = date("H:i:s", strtotime($dado['ra_data_hora']));
            $dado['data'] = date("d/m/Y", strtotime($dado['ra_data_hora']));
            array_push($retorno, $dado);
        }

        return $retorno;
    }
}