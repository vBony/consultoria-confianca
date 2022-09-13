<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./app/assets/libraries/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./app/assets/css/home.css">
    <link rel="stylesheet" href="./app/assets/css/template.css">
    <link rel="stylesheet" href="./app/assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./app/assets/js/home.js"></script>
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

    <meta name="robots" content="noindex, nofollow">
</head>
<body>
<?php $this->loadTemplate($templateData); ?>

<!-- sessão sub-header -->
<section id="inicio">
    <div class="container d-flex flex-column align-content-between box-submenu">
        <div class="d-flex flex-wrap-reverse">
            <div class="col-lg-5 col-md-12 col-sm-12 mt-md-4 mt-sm-4 texts-inicio-area pe-lg-4">
                <h1 class="text-inicio mb-4" id="title-ti">
                    Seu financiamento imobiliário com a melhor taxa
                </h1>
        
                <p class="text-inicio mb-3" id="sub-titulo-ti">
                    Financie seu imóvel com as melhores taxas de 
                    juros do mercado. Solicite uma simulação 
                    personalizada e vamos encontrar juntos as 
                    melhores opções para você, com parcelas que 
                    cabem no seu bolso.
                </p>
                <div class="btn-ti-area">
                    <a href="<?=$baseUrl?>financiamento" target="_blank" class="clean-link">
                        <button class="default-button d-flex flex-row align-items-center justify-content-center" id="btn-ti"> 
                            <div>Simular meu financiamento</div>
                            <div class="ms-2" style="margin-top:2.3px"><i class="fas fa-angle-right"></i></div>
                        </button>
                    </a>
                </div>
            </div>
    
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="img-inicio">
                    <img class="img-fluid rounded" src="<?=$baseUrl?>app/assets/imgs/app/submenu.png" alt="Casal em um casa recém adquirida.">
                </div>
            </div>
        </div>

    </div>

    <div class="btn-conheca-mais-area">
        <div class="col-12 d-flex justify-content-center btn-conheca-mais">
            <div class="d-flex align-items-center justify-content-center flex-column">
                <div>Conheça mais</div>
                <div><i class="fas fa-angle-down"></i></div>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="solutions" id="solutions">
        <div class="container">
            <div class="col-lg-6 col-md-8 col-sm-12 text-start s-title">
                <h2><b>Conheça as <strong class="text-primary">soluções</strong> que a <strong class="text-primary">Confiança Consultoria em Crédito Imobiliário</strong> oferece a você</b></h2>   
            </div>

            <div class="glide my-4" id="solutions_c">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides mb-4">
                        <li class="glide__slide">
                            <div class="card sc-card">
                                <img class="card-img-top sc-image" src="<?=$baseUrl?>app/assets/imgs/app/solutions-1.jpg" alt="Casal se abraçando, comemorando a conquista da casa nova">
                                <div class="card-body sc-body">
                                    <h6 class="card-title sc-title">Financiamento Residencial</h6>
                                    <p class="card-text sc-text">Financie sua casa ou apartamento, seja para morar ou investir, mesmo já possuindo outros financiamentos ativos.</p>
                                    <div class="sc-btn">
                                        <a href="<?php $baseUrl ?>financiamento" target="_blank" class="">Clique aqui e simule agora!</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="card sc-card">
                                <img class="card-img-top sc-image" src="<?=$baseUrl?>app/assets/imgs/app/solutions-2.jpg" alt="Terreno limpo">
                                <div class="card-body sc-body">
                                    <h5 class="card-title sc-title">Financiamento de Terreno</h5>
                                    <p class="card-text sc-text">
                                        Financie um terreno e aproveite a oportunidade 
                                        de pagar uma parcela sem surpresas, balões ou 
                                        correções mensais.
                                    </p>
                                    <div class="sc-btn">
                                        <a href="<?php $baseUrl ?>financiamento" target="_blank" class="">Clique aqui e simule agora!</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="card sc-card">
                                <img class="card-img-top sc-image" src="<?=$baseUrl?>app/assets/imgs/app/solutions-3.jpg" alt="Pedreiro trabalhando em uma parede">
                                <div class="card-body sc-body">
                                    <h5 class="card-title sc-title">Financiamento de Construção</h5>
                                    <p class="card-text sc-text">
                                        Faça do seu jeito! É possível adquirir um terreno + 
                                        construção ou somente a construção, conforme sua 
                                        necessidade.
                                    </p>
                                    <div class="sc-btn">
                                        <a href="<?php $baseUrl ?>financiamento" target="_blank" class="">Clique aqui e simule agora!</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="card sc-card">
                                <img class="card-img-top sc-image" src="<?=$baseUrl?>app/assets/imgs/app/solutions-4.jpeg" alt="Sala de escritório com várias pessoas trabalhando">
                                <div class="card-body sc-body">
                                    <h5 class="card-title sc-title">Financiamento Comercial</h5>
                                    <p class="card-text sc-text">
                                        Financie sua sala comercial e 
                                        troque o aluguel do seu negócio 
                                        pela parcela do seu financiamento.
                                    </p>
                                    <div class="sc-btn">
                                        <a href="<?php $baseUrl ?>financiamento" target="_blank" class="">Clique aqui e simule agora!</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="card sc-card">
                                <img class="card-img-top sc-image" src="<?=$baseUrl?>app/assets/imgs/app/solutions-5.jpg" alt="Emprestimo com garantia de imovel">
                                <div class="card-body sc-body">
                                    <div class="card-title sc-title">
                                        Empréstimo com Garantia de Imóvel
                                    </div>
                                    <p class="card-text sc-text">
                                        Use seu imóvel como garantia e pegue até 60% do valor dele 
                                        em dinheiro, para usar como bem entender, sem necessidade 
                                        de prestação de contas do dinheiro ao banco. Faça 
                                        literalmente o que você quiser.
                                    </p>
                                    <div class="sc-btn">
                                        <a href="<?php $baseUrl ?>financiamento" target="_blank" class="">Clique aqui e simule agora!</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="card sc-card">
                                <img class="card-img-top sc-image" src="<?=$baseUrl?>app/assets/imgs/app/solutions-6.jpg" alt="Portabilidade">
                                <div class="card-body sc-body">
                                    <h5 class="card-title sc-title">Portabilidade</h5>
                                    <p class="card-text sc-text">
                                        Reduza a taxa de juros e o valor da 
                                        parcela do seu financiamento já 
                                        existente através da portabilidade.
                                    </p>
                                    <div class="sc-btn">
                                        <a href="<?php $baseUrl ?>financiamento" target="_blank" class="">Clique aqui e simule agora!</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <br><br>
                <div class="glide__bullets sc-bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                    <button class="glide__bullet" data-glide-dir="=4"></button>
                    <button class="glide__bullet" data-glide-dir="=5"></button>
                </div>
            </div>
        </div>
    </section>

    <section class="simulacao" id="simulacao">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-row flex-wrap">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">
                    <div class="">
                        <img class="img-fluid rounded" src="<?=$baseUrl?>app/assets/imgs/app/casal_feliz_recebendo_casa.jpg" alt="Casal feliz recebendo casa">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-md-4 mt-sm-4 d-flex align-items-center flex-column mt-md-4 mt-sm-4 steps-area">
                    <div class="col-12 steps-title">
                        <h2 class="default-title">Veja como é fácil financiar seu imóvel</h2>
                    </div>

                    <div class="timeline">
                        <div class="outer">
                            <div class="card-steps">
                                <div class="info-steps">
                                    <h3 class="title-steps text-grayscale--400 fs-14 fw-600 lh-17 mb-2" data-before-content="1">
                                        Faça sua Simulação
                                    </h3>
                                    <p>
                                        Informe os dados solicitados em nosso formulário 
                                        e receba as melhores propostas personalizadas 
                                        para você.
                                    </p>
                                </div>
                            </div>
                            <div class="card-steps">
                                <div class="info-steps">
                                    <h3 class="title-steps" data-before-content="2">
                                        Juntada de documentos e Aprovação de crédito
                                    </h3>
                                    <p>
                                        Tudo certo com a simulação? Envie a documentação 
                                        solicita por nossos especialistas e cuidaremos 
                                        da sua aprovação de crédito
                                    </p>
                                </div>
                            </div>
                            <div class="card-steps">
                                <div class="info-steps">
                                    <h3 class="title-steps" data-before-content="3">
                                        Vistoria do imóvel
                                    </h3>
                                    <p>
                                        Aqui o banco enviará um engenheiro qualificado para 
                                        avaliar o imóvel que está sendo adquirido e na 
                                        sequência confeccionar o laudo de avaliação.
                                    </p>
                                </div>
                            </div>
                            <div class="card-steps">
                                <div class="info-steps">
                                    <h3 class="title-steps" data-before-content="4">
                                        Análise Jurídica/Emissão do contrato
                                    </h3>
                                    <p>
                                        Nessa última etapa, o banco analisa a documentação 
                                        dos envolvidos e emite o contrato de financiamento 
                                        para assinatura. Após o registro do contrato em 
                                        cartório, o dinheiro é liberado ao(s) vendedor(es).
                                    </p>
                                </div>
                            </div>

                            <div class="btn-steps-area">
                                <button class="default-button" onclick="window.location.href='<?=$baseUrl?>financiamento'">Simular agora</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="mb-2">
                        <img class="img-fluid rounded" src="<?=$baseUrl?>app/assets/imgs/app/callcenter.jpg" alt="callcenter">
                    </div>

                    <div class="col-12">
                        <h2 class="default-title">Mais praticidade e simplicidade para adquirir seu imóvel</h2>
                    </div>

                    <div class="services-text-area text-secondary">
                        Fale agora mesmo com um de nossos especialistas e saiba como podemos te ajudar em seu 
                        financiamento de forma rápida, prática, minimizando a burocracia, descomplicando e 
                        cuidando de absolutamente tudo pra você.
                    </div>

                    <div class="btn-services-area" id="btn-destop-services">
                        <button class="default-button primary-button btn-services" onclick="window.location.href='<?=$baseUrl?>contato'">Fale conosco</button>
                    </div>
                </div>
    
                <div class="col-lg-5 col-md-12 col-sm-12 d-flex flex-row flex-wrap" id="cards-web">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card-services">
                            <h3 class="title-card-services">Parcelas que cabem no seu bolso</h3>
                            <p>
                                Aproveite as melhores taxas de juros do mercado 
                                e saiba também qual a melhor opção de 
                                financiamento se encaixa no seu orçamento.
                            </p>
                        </div>

                        <div class="card-services">
                            <h3 class="title-card-services">Imóveis residenciais, comerciais, terrenos e construção</h3>
                            <p>
                                Seu imóvel pode ser novo ou usado e você também pode adquirir 
                                terreno, terreno com construção ou até mesmo só a construção 
                                em terreno próprio.
                            </p>
                        </div>

                        <div class="card-services">
                            <h3 class="title-card-services">Financie em prazos maiores</h3>
                            <p>
                                É possível financiar em até 30 anos na maioria dos bancos 
                                (360 meses). Alguns deles ainda possibilitam que o prazo 
                                de financiamento chegue a 35 anos (420 meses).
                            </p>
                        </div>

                        <div class="card-services">
                            <h3 class="title-card-services">Financie as despesas de prefeitura e cartório</h3>
                            <p>
                                Em muitos casos é possível financiar também as despesas para pagamento 
                                das transferências junto à prefeitura e cartório.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card-services">
                            <h3 class="title-card-services">Use seu FGTS</h3>
                            <p>
                                Você pode utilizar seu saldo de FGTS para ajudar 
                                no seu financiamento de imóvel residencial ou 
                                construção.
                            </p>
                        </div>

                        <div class="card-services">
                            <h3 class="title-card-services">Financie o máximo possível</h3>
                            <p>
                                Os bancos liberam entre 70, 80 e 90% de financiamento, a 
                                depender do perfil do cliente. Em alguns casos específicos, 
                                conseguimos auxiliar o cliente a financiar até 100% do valor 
                                do imóvel.
                            </p>
                        </div>
                        
                        <div class="card-services">
                            <h3 class="title-card-services">Com ou sem comprovação de renda</h3>
                            <p>
                                Consulte-nos para saber mais a respeito.
                            </p>
                        </div>

                        <div class="card-services">
                            <h3 class="title-card-services">Junte sua renda com amigos e familiares</h3>
                            <p>
                                Se achar necessário, você pode compor renda com mais pessoas, com ou sem vínculo de parentesco.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12" id="cards-mobile">
                    <div class="glide my-4" id="services_c">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides mb-4">
                                <li class="glide__slide">
                                    <div class="card-services">
                                        <h3 class="title-card-services">Parcelas que cabem no seu bolso</h3>
                                        <p>
                                            Aproveite as melhores taxas de juros do mercado 
                                            e saiba também qual a melhor opção de 
                                            financiamento se encaixa no seu orçamento.
                                        </p>
                                    </div>
                                </li>

                                <li class="glide__slide">
                                    <div class="card-services">
                                        <h3 class="title-card-services">Imóveis residenciais, comerciais, terrenos e construção</h3>
                                        <p>
                                            Seu imóvel pode ser novo ou usado e você também pode adquirir 
                                            terreno, terreno com construção ou até mesmo só a construção 
                                            em terreno próprio.
                                        </p>
                                    </div>
                                </li>

                                <li class="glide__slide">
                                    <div class="card-services">
                                        <h3 class="title-card-services">Financie em prazos maiores</h3>
                                        <p>
                                            É possível financiar em até 30 anos na maioria dos bancos 
                                            (360 meses). Alguns deles ainda possibilitam que o prazo 
                                            de financiamento chegue a 35 anos (420 meses).
                                        </p>
                                    </div>
                                </li>

                                <li class="glide__slide">
                                    <div class="card-services">
                                        <h3 class="title-card-services">Financie as despesas de prefeitura e cartório</h3>
                                        <p>
                                            Em muitos casos é possível financiar também as despesas para pagamento 
                                            das transferências junto à prefeitura e cartório.
                                        </p>
                                    </div>
                                </li>

                                <li class="glide__slide">
                                    <div class="card-services">
                                        <h3 class="title-card-services">Use seu FGTS</h3>
                                        <p>
                                            Você pode utilizar seu saldo de FGTS para ajudar 
                                            no seu financiamento de imóvel residencial ou 
                                            construção
                                        </p>
                                    </div>
                                </li>

                                <li class="glide__slide">
                                    <div class="card-services">
                                        <h3 class="title-card-services">Financie o máximo possível</h3>
                                        <p>
                                            Os bancos liberam entre 70, 80 e 90% de financiamento, a 
                                            depender do perfil do cliente. Em alguns casos específicos, 
                                            conseguimos auxiliar o cliente a financiar até 100% do valor 
                                            do imóvel.
                                        </p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="card-services">
                                        <h3 class="title-card-services">Financie o máximo possível</h3>
                                        <p>
                                            Os bancos liberam entre 70, 80 e 90% de financiamento, a 
                                            depender do perfil do cliente. Em alguns casos específicos, 
                                            conseguimos auxiliar o cliente a financiar até 100% do valor 
                                            do imóvel.
                                        </p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="card-services">
                                        <h3 class="title-card-services">Financie o máximo possível</h3>
                                        <p>
                                            Os bancos liberam entre 70, 80 e 90% de financiamento, a 
                                            depender do perfil do cliente. Em alguns casos específicos, 
                                            conseguimos auxiliar o cliente a financiar até 100% do valor 
                                            do imóvel.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <br><br>
                        <div class="glide__bullets sc-bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"></button>
                            <button class="glide__bullet" data-glide-dir="=1"></button>
                            <button class="glide__bullet" data-glide-dir="=2"></button>
                            <button class="glide__bullet" data-glide-dir="=3"></button>
                            <button class="glide__bullet" data-glide-dir="=4"></button>
                            <button class="glide__bullet" data-glide-dir="=5"></button>
                            <button class="glide__bullet" data-glide-dir="=6"></button>
                            <button class="glide__bullet" data-glide-dir="=7"></button>
                        </div>

                    </div>

                    <div class="btn-services-area d-flex justify-content-center">
                        <button class="default-button primary-button btn-services">Fale conosco</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="col-12 my-4">
            <h2 class="default-title">O que dizem os nossos clientes</h2>
            <div class="text-secondary">Confira os depoimentos de algumas das centenas de pessoas que já foram nossos clientes</div>
        </div>

        <div class="glide" id="depoimentos_c">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <div class="row d-flex flex-row align-items-center">
                                <div class="testemunha-avatar col-3">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/testemunhas/2.png" alt="Cliente Carlos Cezar Oliveira">
                                </div>
                                <div class="col-9">
                                    <div class="col-12 name-testemunha"><h3>Carlos Cezar Oliveira</h3></div>
                                    <div class="col-12 rate-testemunha">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-testemunha col-12">
                                Execelente atendimento do Matheus! Graças a Deus tudo fluiu bem e rápido. Indico!
                            </div>

                            <div class="link-google-testemunha col-12 d-flex flex-row align-items-center pt-4">
                                <div class="google-icon-testemunha me-2">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/logo-google.svg" alt="Logo do google">
                                </div>
                                <div class="data-testemunha">
                                    4 meses atrás
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <div class="row d-flex flex-row align-items-center">
                                <div class="testemunha-avatar col-3">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/testemunhas/3.png" alt="Cliente Rodrigo N. Leles">
                                </div>
                                <div class="col-9">
                                    <div class="col-12 name-testemunha"><h3>Rodrigo N. Leles</h3></div>
                                    <div class="col-12 rate-testemunha">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-testemunha col-12">
                                Gente, é o pessoal mais atencioso que eu já 
                                conheci na minha vida para me ajudar a 
                                financiar o meu imóvel. Recomento, sem medo! 
                                O Mateus então, que cara gente fina, humano, 
                                humilde e bacana. Valeu pessoal!
                            </div>

                            <div class="link-google-testemunha col-12 d-flex flex-row align-items-center pt-4">
                                <div class="google-icon-testemunha me-2">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/logo-google.svg" alt="Logo do google">
                                </div>
                                <div class="data-testemunha">
                                    1 ano atrás
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <div class="row d-flex flex-row align-items-center">
                                <div class="testemunha-avatar col-3">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/testemunhas/4.png" alt="Cliente Murilo Moritz Parize">
                                </div>
                                <div class="col-9">
                                    <div class="col-12 name-testemunha"><h3>Murilo Moritz Parize</h3></div>
                                    <div class="col-12 rate-testemunha">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-testemunha col-12">
                                Ótima experiência, profissionais capacitados e 
                                atenciosos buscando sempre agilidade nos 
                                processos necessários. Recomendo a todos que 
                                tem a intenção de adquirir um imóvel. Parabéns 
                                a toda Equipe Confiança Consultoria.
                            </div>

                            <div class="link-google-testemunha col-12 d-flex flex-row align-items-center pt-4">
                                <div class="google-icon-testemunha me-2">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/logo-google.svg" alt="logo do google">
                                </div>
                                <div class="data-testemunha">
                                    1 ano atrás
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <div class="row d-flex flex-row align-items-center">
                                <div class="testemunha-avatar col-3">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/testemunhas/5.png" alt="Cliente Weslley Lima">
                                </div>
                                <div class="col-9">
                                    <div class="col-12 name-testemunha"><h3>Weslley Lima</h3></div>
                                    <div class="col-12 rate-testemunha">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-testemunha col-12">
                                Foi ótimo,  atendimento nota 1000, o Matheus 
                                sempre muito atencioso e competentemente.. 
                                super indico.. Weslley e Keubianny.. Abraço
                            </div>

                            <div class="link-google-testemunha col-12 d-flex flex-row align-items-center pt-4">
                                <div class="google-icon-testemunha me-2">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/logo-google.svg" alt="Logo do google">
                                </div>
                                <div class="data-testemunha">
                                    1 ano atrás
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <div class="row d-flex flex-row align-items-center">
                                <div class="testemunha-avatar col-3">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/testemunhas/6.png" alt="Cliente Paulo Cesar Silva">
                                </div>
                                <div class="col-9">
                                    <div class="col-12 name-testemunha"><h3>Paulo Cesar Silva</h3></div>
                                    <div class="col-12 rate-testemunha">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-testemunha col-12">
                                Fui muito bem atendido e assistido, e o 
                                processo foi extremamente rápido,  para 
                                tramitar todo o processo,  gastaram 
                                apenas 15 dias, isso foi muito bom.
                            </div>

                            <div class="link-google-testemunha col-12 d-flex flex-row align-items-center pt-4">
                                <div class="google-icon-testemunha me-2">
                                    <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/logo-google.svg" alt="logo do google">
                                </div>
                                <div class="data-testemunha">
                                    1 ano atrás
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <br><br>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=3"></button>
                <button class="glide__bullet" data-glide-dir="=4"></button>
                <button class="glide__bullet" data-glide-dir="=5"></button>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container">

            <div>
                <h2 class="default-title">Dúvidas frequentes</h2>
                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Qualquer pessoa pode fazer um financiamento imobiliário? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <b>Sim</b>, desde que seja maior de idade e não possua restrição 
                            junto aos órgãos de proteção ao crédito. As demais questões, cuidamos aqui.
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Sou autônomo(a). Consigo um financiamento imobiliário? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <b>Sim</b>. Existem várias formas  de comprovar sua renda para os bancos. 
                            Nossa especialidade é te ajudar a formalizar sua renda dentro das 
                            exigências do banco e concretizar seu financiamento.
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b>Para que serve a consultoria em um financiamento imobiliário?</b> </div>
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Nosso papel é desburocratizar o processo de finaciamento bancário dos nossos clientes, 
                            trazendo o máximo de conforto, facilidade, tranquilidade, conveniência e reduzindo o 
                            tempo médio do processo. Cuidamos de tudo, desde a simulação, organização de documentos, 
                            aprovação de crédito, vistoria do imóvel, análise jurídica, emissão do contrato e até 
                            mesmo prefeitura e cartório. Temos uma equipe de profissionais que fazem só isso, 
                            possuindo muita expersite no assunto. 
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Preciso pagar pela consultoria de vocês? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <b> Não</b>. Nossa consultoria é 100% gratuita para você até a emissão do contrato de financiamento.
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Posso utilizar meu FGTS no meu  processo de financiamento imobiliário? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>O FGTS pode ser usado no seu financiamento, como entrada, desde que você atenda os seguintes requisitos:</p>
                            <ul>
                                <li>Não possuir financiamento ativo em nenhum local do país;</li>
                                <li>Não possuir imóvel (quitado ou financiado) na cidade ou região limítrofe (que faz divisa) em que você está comprando seu atual imóvel;</li>
                                <li>Possuir 36 meses de carteira assinada ao longo de sua vida;</li>
                                <li>Morar ou trabalhar na cidade ou região limítrofe do imóvel que está sendo adquirido;</li>
                                <li>Caso seja casado(a), o conjuge também deve atender a todos os requisitos, mesmo que não participe da composição da renda;</li>
                            </ul>
                            <p>As regras do uso do FGTS são extensas. Acima citamos as principais delas. Em caso de dúvidas, fale com um de nossos consultores e obtenha um atendimento personalizado e gratuito. </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading6">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Quais as opções de uso do FGTS no meu contrato habitacional? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>É possível utilizar o FGTS nas seguintes opções:</p>
                            <ul>
                                <li>Utilizar como entrada no financiamento;</li>
                                <li>Amortizar o saldo devedo real, reduzindo o prazo do financiamento ou o valor da parcela;</li>
                                <li>Pagar até 80% do valor da prestação;</li>
                                <li>Quitar o saldo devedor.</li>
                            </ul>
                            <p>As regras do uso do FGTS são extensas. Acima citamos as principais delas. Em caso de dúvidas, fale com um de nossos consultores e obtenha um atendimento personalizado e gratuito. </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading7">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Quais os sistemas de amortização do saldo devedor? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p> Os bancos utilizam geralmente 2 sistemas de amortização: </p>
                            <ol>
                                <li>SAC (Sistema de amortização constante): Parcelas decrescentes;</li>
                                <li>TABELA PRICE: Parcelas fixas;</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading8">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Qual a melhor forma de financiamento: Tabela Price ou SAC? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                <b>A escolha, nesse caso, é bastante pessoal</b>. Na Tabela Price o comprador paga 
                                juros maiores e o valor das parcelas tende a aumentar. No entanto, a 
                                primeira prestação é menor. Pelo SAC os juros são menores e as prestações 
                                vão ficando mais baratas, mas a primeira é maior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading9">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> É necessário avalista para a realização de um financiamento imobiliário? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                <b> Não é necessário</b>, pois o próprio imóvel já é dado como garantia.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="heading10">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Tenho que estar com o nome limpo nos órgãos de crédito para fazer um financiamento habitacional? </b> </div>
                        </button>
                    </h2>
                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                <b> Sim</b>, é importante que não haja restrições vinculadas ao CPF dos compradores do imóvel. Caso contrário o financiamento não é aprovado.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Endereço</h3>
                                <p>Av. 83, nº 707 - Setor Sul - CEP: 74083-195 - Goiânia/GO</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fas fa-envelope"></i>
                                <h3>Nosso e-mail</h3>
                                <p>contato@consultoriaconfianca.com.br</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fas fa-phone-alt"></i>
                                <h3>Telefone</h3>
                                <p>(62) 3636-3467</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>


<footer id="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contato">
                    <h4>Consultoria Confiança</h4>
                    <p>
                        Av. 83 <br>
                        nº 707 - Setor Sul <br> 
                        CEP: 74083-195 <br> 
                        Goiânia/GO <br><br>
                        <strong>Telefone:</strong> (62) 3636-3467 <br>
                        <strong>Email:</strong> <span style="font-size: 12px !important;">contato@consultoriaconfianca.com.br</span> <br>
                    </p>
                </div>

                <div class="col-lg-5 col-md-6 footer-links">
                    <h4>Links úteis</h4>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Início</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Sobre</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Serviços</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#" onclick="window.location.href='<?=$baseUrl?>contato'">Contato</a></li>
                    </ul>
                </div>

                <!-- <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nossos serviços</h4>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                    </ul>
                </div> -->

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Assine nossa newsletter</h4>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                    <div class="row g-3">
                        <input type="Email" class="form-control input-newsletter" placeholder="E-mail">
                        <button type="submit" class="btn btn-newsletter">Enviar</button>
                    </div>
                    <form method="post" class="newsletter-form">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="last-footer">
        <div class="container d-md-flex py-4 last-footer">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    © Copyright 2021 - <strong><span>Confiança Consultoria em Crédito Imobiliário Eireli</span></strong> - Todos os Direitos Reservados
                </div>
            </div>
            <div class="redes-sociais-footer text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>