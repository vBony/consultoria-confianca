<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./app/assets/libraries/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./app/assets/css/cgi.css">
    <link rel="stylesheet" href="./app/assets/css/home.css">
    <link rel="stylesheet" href="./app/assets/css/template.css">
    <link rel="stylesheet" href="./app/assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./app/assets/js/cgi.js"></script>
    <script src="./app/assets/libraries/glide-3.4.1/dist/glide.min.js"></script>
    <link rel="stylesheet" href="./app/assets/libraries/glide-3.4.1/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="./app/assets/libraries/glide-3.4.1/dist/css/glide.theme.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <title>Confiança Consultoria em Crédito Imobiliário Eireli</title>

    <meta name="description" content="Financie seu imóvel com as melhores taxas de juros do mercado. Solicite uma simulação personalizada e vamos encontrar juntos as melhores opções para você.">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $baseUrl ?>">
    <meta property="og:title" content="Confiança Consultoria em Crédito Imobiliário Eireli">
    <meta property="og:description" content="Financie seu imóvel com as melhores taxas de juros do mercado. Solicite uma simulação personalizada e vamos encontrar juntos as melhores opções para você, com parcelas que cabem no seu bolso.">
    <meta property="og:image" content="<?=$baseUrl?>app/assets/imgs/app/thumb/thumb-default.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="<?=$baseUrl?>app/assets/imgs/app/thumb/thumb-default.jpg">
    <meta property="twitter:url" content="<?= $baseUrl ?>">
    <meta property="twitter:title" content="Confiança Consultoria em Crédito Imobiliário Eireli">
    <meta property="twitter:description" content="Financie seu imóvel com as melhores taxas de juros do mercado. Solicite uma simulação personalizada e vamos encontrar juntos as melhores opções para você, com parcelas que cabem no seu bolso.">
    <meta property="twitter:image" content="<?=$baseUrl?>app/assets/imgs/app/thumb/thumb-default.jpg">

    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Portuguese">

    <meta name="google-site-verification" content="P5MwvEL7Gey2HwwsmrvPWOvXdUWSauFNRB2C1PIdwaM" />

    <link rel="icon" type="image/png" href="<?=$baseUrl?>app/assets/imgs/app/logo-black.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

    <meta name="robots" content="noindex, nofollow">
</head>
<body>
<?php $this->loadTemplate($templateData, true); ?>

<section id="inicio">
    <div class="container d-flex flex-column align-content-between box-submenu">
        <div class="d-flex flex-wrap-reverse">
            <div class="col-lg-5 col-md-12 col-sm-12 mt-md-4 mt-sm-4 texts-inicio-area pe-lg-4">
                <h1 class="text-inicio mb-4" id="title-ti">
                    Chegou a hora de tirar seus projetos do papel!
                </h1>
        
                <div class="btn-ti-area">
                    <a href="<?=$baseUrl?>financiamento" target="_blank" class="clean-link">
                        <button class="default-button d-flex flex-row align-items-center justify-content-center" id="btn-ti"> 
                            <div>Quero saber mais</div>
                            <div class="ms-2" style="margin-top:2.3px"><i class="fas fa-angle-down"></i></div>
                        </button>
                    </a>
                </div>
            </div>
    
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="img-inicio">
                    <img class="img-fluid rounded" src="<?=$baseUrl?>app/assets/imgs/app/submenu-cgi.jpg" alt="raining money">
                </div>
            </div>
        </div>
    </div>
</section>

<main>
<section id="sobre">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <h2><strong class="text-primary"> O que está te impedindo?</strong></h2> 
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 text-start s-title">
                <p>
                    A cada virada de ano nos últimos anos muitas pessoas fizeram diversas 
                    promessas para MUDAR DE VIDA. Teve gente que pulou 7 ondinhas, alguns 
                    comeram arroz com lentilha, usaram roupas amarelas e outros disseram: 
                    <b>AGORA VAI!</b>
                </p>  
                <p>
                    Acontece que os anos se passaram e a maioria não fez nada a respeito. 
                    De cara já vamos te deixar uma dica: <br>
                    <b>
                        Se você não fizer algo diferente, continuará a ter os mesmos resultados 
                        de sempre.
                    </b>
                </p>
    
                <p>
                    Se a gente te desse um empurrãozinho, como já fizemos com centenas de 
                    pessoas para te ajudar a tirar seus projetos do papel e colher resultados 
                    diferentes, você gostaria de saber como?<br>
                    <div class="aolado indicador-sobre text-center">Veja ao lado <i class="fas fa-angle-right"></i></div>
                    <div class="abaixo indicador-sobre text-center">Veja abaixo <i class="fas fa-angle-down"></i></div>
                    
                </p>
            </div>
    
            <div class="col-lg-6 col-md-12 col-sm-12 text-start s-title">
                <ul class="list-unstyled">
                    <li class="mb-4">
                        <i class="fas fa-hand-point-right me-1 icon-acc"></i>
                        <b>
                            Já pensou como seria ótimo se você pudesse agora mesmo montar o 
                            seu próprio negócio e se tornar empresário?
                        </b>
                    </li>
    
                    <li class="mb-4">
                        <i class="fas fa-hand-point-right me-1 icon-acc"></i>
                        <b>
                            E se você pudesse ampliar sua empresa para faturar mais?
                        </b>
                    </li>
    
                    <li class="mb-4">
                        <i class="fas fa-hand-point-right me-1 icon-acc"></i>
                        <b>
                            E se de repente, você tirasse do papel aquele projeto de reforma ou 
                            construção da sua casa e a deixasse do jeitinho que você sempre imaginou?
                        </b>
                    </li>
    
                    <li class="mb-4">
                        <i class="fas fa-hand-point-right me-1 icon-acc"></i>
                        <b>
                            Já imaginou fazer a viagem dos sonhos com sua família, para aquele 
                            local paradisíaco que parece coisa de cinema, sem ter que se preocupar?
                        </b>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <h2 class="mb-3">
                <strong class="text-primary">
                    Independente de qual é o seu <b>projeto, sonho ou objetivo, você pode
                    realizar!</b>
                </strong>
            </h2> 

            <div class="col-lg-6 col-md-12 col-sm-12 text-start s-title">
                <h5>
                    <b>
                        Saiba agora mesmo o que várias pessoas estão fazendo para realizar seus 
                        objetivos, como estão levantando dinheiro, onde estão obtendo ajuda, qual
                        o passo a passo para isso e faça o mesmo você também!
                    </b>
                </h5>

                <p>
                    Nós somos a uma empresa sediada em Goiânia, com atuação a nível nacional e uma 
                    equipe de especialistas que já ajudou centenas de pessoas a realizarem seus 
                    sonhos, projetos e objetivos, levando para essas pessoas um tipo de crédito que 
                    o seu banco não gosta odeia te oferecer.
                </p>

                <p>
                    É isso mesmo. Os bancos te oferecem sempre as modalidades de crédito mais caras e 
                    burocráticas que existem no mercado e no final das contas você acaba pagando mais 
                    caro e não conseguindo o tanto que gostaria. Isso quando te emprestam...
                </p>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 text-start s-title">
                <h5>
                    <b>
                        Bom, isso não será mais um problema para você!
                    </b>
                </h5>

                <p>
                    Agora que você conhece a gente, saiba que nossa equipe de especialistas está aqui 
                    para te ajudar a realizar tudo que você sempre quis, adquirindo um crédito com uma 
                    taxa de juros ridícula que já fez milhares de agiotas pararem de emprestar dinheiro 
                    por aí e que seu banco faz o máximo de esforço para que você não descubra!
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
               <h3><b> Se fez algum sentido para você, SUGIRO FORTEMENTE que CONTINUE LENDO! </b></h3>
               <i class="fas fa-angle-down"></i>
            </div>
        </div>
    </div>
</section>

<section id="beneficios">
    <div class="container">
        <div class="row">
            <h2 class="text-primary text-center text-bold mt-4">
                Continue lendo e entenda os benefícios desse CRÉDITO MISTERIOSO que ninguém quer que você saiba
            </h2>
    
            <div class="row mt-4">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5><span class="text-bold">Crédito</span> de 50 mil até 4 milhões de reais;</h5>
                    </div>        

                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5><span class="text-bold">Menores taxas</span> de juros do mercado;</h5>
                    </div>     

                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5>
                            <span class="text-bold">Carência</span> de até <span class="text-bold">6 meses </span> 
                            para pagar a primeira parcela em casos de <span class="text-bold">abertura de franquias;</span>
                        </h5>
                    </div>        

                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5>
                            <span class="text-bold">Agilidade</span> em todas as etapas;
                        </h5>
                    </div>        

                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5>
                            <span class="text-bold">Comodidade</span> em poder realizar análise de crédito online e sem custos;
                        </h5>
                    </div>   

                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5>
                            <span class="text-bold">Local físico</span> em Goiânia para tirar dúvidas, fazer simulações e conhecer tudo de perto;
                        </h5>
                    </div>   
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5><span class="text-bold">Parcelamento</span> em até 20 anos (240 meses);</h5>
                    </div>
                    
                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5>Análise de crédito flexível com <span class="text-bold">ajuda</span> na <span class="text-bold">aprovação</strong>;</h5>
                    </div>

                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5><span class="text-bold">Carência</span> de até <span class="text-bold">3 meses</span> para pagar a primeira parcela, <span class="text-bold">independente</span> do motivo do crédito;</h5>
                    </div>

                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5><span class="text-bold">Liberdade</span> para você fazer o que quiser com o seu dinheiro;</h5>
                    </div>

                    <div class="col-12 beneficios-list-item">
                        <i class="fas fa-check-circle"></i>
                        <h5>Processo <span class="text-bold">transparente</span> que pode ser acompanhado tanto <span class="text-bold">online</span> quanto <span class="text-bold">presencialmente</span>;</h5>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <a href="<?=$baseUrl?>financiamento" target="_blank" class="clean-link">
                    <button class="default-button"> 
                        Quero entrar na fila para que um especialista entre em contato comigo
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="fundador">
    <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <img class="img-fluid rounded" id="img-fundador" src="<?=$baseUrl?>app/assets/imgs/app/fundador/wander_2.jpg" alt="Wander Leite">
                </div>
    
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <h2 class="text-bold mb-4">
                        Conheça melhor nosso fundador
                    </h2>
                    <p>
                        Wander Leite, empresário, administrador de empresas e gestor, sempre foi apaixonado por 
                        empreendedorismo, abrindo seu primeiro negócio aos 19 anos de idade. Especialista em 
                        crédito, é diretor fundador de duas empresas que atuam diretamente junto aos bancos, 
                        buscando sempre as melhores opções para os clientes conseguirem o crédito que precisam 
                        aliado a menor taxa de juros do mercado, tendo ajudado centenas de pessoas a realizarem 
                        seus sonhos, planos e objetivos. Em sua filosofia acredita que cada cliente é especial e 
                        até nos casos mais difíceis sempre luta com todas as possibilidades para ajudar todos os 
                        clientes a realizarem seus sonhos. Também acredita muito que o conhecimento é a chave 
                        para o sucesso e ministra diversos treinamentos e capacitações na área de desenvolvimento 
                        pessoal, inteligência financeira e crédito.
                    </p>
                </div>
            </div>
    </div>
</section>
<section id="depoimentos">
    
</section>
</main>

</body>
</html>
