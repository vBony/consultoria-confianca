<!DOCTYPE html>
<html lang="en">
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
    <title>Document</title>
</head>
<body>
<?php $this->loadTemplate(); ?>

<!-- sessão sub-header -->
<section id="inicio">
    <div class="container d-flex flex-column align-content-between box-submenu">
        <div class="d-flex flex-wrap-reverse">
            <div class="col-lg-5 col-md-12 col-sm-12 mt-md-4 mt-sm-4 texts-inicio-area px-lg-4">
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
                    <button class="default-button d-flex flex-row align-items-center justify-content-center" id="btn-ti"> 
                        <div>Simular meu financiamento</div>
                        <div class="ms-2" style="margin-top:2.3px"><i class="fas fa-angle-right"></i></div>
                    </button>
                </div>
            </div>
    
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="img-inicio">
                    <img class="img-fluid rounded" src="<?=$baseUrl?>app/assets/imgs/app/submenu.png" alt="">
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

    <section class="about">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6"><img class="img-fluid" src="http://lorempixel.com/1280/720"></div> -->
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h2>O que está te impedindo ?</h2>
                    <p>A cada virada de ano nos últimos anos muitas pessoas fizeram diversas promessas para MUDAR DE VIDA. Teve gente que pulou 7 ondinhas, alguns comeram arroz com lentilha, usaram roupas amarelas e outros disseram: AGORA VAI! Acontece que os anos se passaram e a maioria não fez nada a respeito. De cara já vamos te deixar uma dica: Se você não fizer algo diferente, continuará a ter os mesmos resultados de sempre. Se a gente te desse um empurrãozinho, como já fizemos com centenas de pessoas para te ajudar a tirar seus projetos do papel e colher resultados diferentes</p>
                    <div class="row">
                        <div class="col-md-6">
                            <i class="far fa-file-alt"></i>
                            <h4>Corporis voluptates sit</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                        <div class="col-md-6">
                            <i class="fas fa-cube"></i>
                            <h4>Ullamco laboris nisi</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Serviços</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box iconbox-blue" data-cor="#47aeff">
                        <div class="icon">
                            <i class="fas fa-basketball-ball"></i>
                        </div>
                        <h4><a>Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box iconbox-orange" data-cor="#ffa76e">
                        <div class="icon">
                            <i class="far fa-file-alt"></i>
                        </div>
                        <h4><a>Sed Perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box iconbox-pink" data-cor="#e80368">
                        <div class="icon">
                            <i class="far fa-comment-dots"></i>
                        </div>
                        <h4><a>Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box iconbox-yellow" data-cor="#ffbb2c">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4><a>Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box iconbox-red" data-cor="#ff5828">
                        <div class="icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h4><a>Dele Cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box iconbox-teal" data-cor="#11dbcf">
                        <div class="icon">
                            <i class="fas fa-archway"></i>
                        </div>
                        <h4><a>Divera Don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="acao">
        <div class="container">
            <div class="text-center text-white">
                <h3>Não perca tempo!</h3>
                <p> Estamos com uma promoção de início de ano, para ajudar você a tirar seus projetos do papel, com um desconto imperdível na taxa de juros. </p>
                <p> <b> Clique agora </b> no botão abaixo e <b> fale diretamente </b> com nosso <b> diretor! </b> </p>
                <a class="btn-acao" href="#">Entrar em contato</a>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2>Depoimentos</h2>
          <p>Confira os depoimentos de algumas das centenas de pessoas que já foram nossos clientes</p>
        </div>

        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides p-4 mb-4">
                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <i class="fas fa-quote-right quote-icon"></i>

                            Através do Wander e de sua empresa foi possível 
                            realizarmos o sonho da nossa vida e adquirimos 
                            nossa tão sonhada franquia, ainda com carência 
                            de 6 meses para a primeira parcela. Quando 
                            parecia que ninguém conseguiria nos ajudar, 
                            ele chegou e nos deu a solução. Recomendo 100%

                            <i class="fas fa-quote-right quote-icon"></i>

                            <div class="mt-3">
                                <h3>Luiza Souza</h3>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <i class="fas fa-quote-right quote-icon"></i>
                            Minha construtora precisava levantar um recurso 
                            para concluir uma obra. Recorri a ajuda e em pouco 
                            tempo estava com o dinheiro na mão. Concluí minha 
                            obra, vendi algumas unidades e já quitei o empréstimo. 
                            Foi ótimo e com certeza eu pegaria novamente se fosse necessário!
                            <i class="fas fa-quote-right quote-icon"></i>

                            <div class="mt-3">
                                <h3>Bruno Oliveira</h3>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <i class="fas fa-quote-right quote-icon"></i>
                            O Wander me disse que se algo não der certo na mão dele, 
                            não da certo na mão de mais ninguém. Realmente pude provar isso. 
                            Quando todos os gerentes disseram que meu caso era impossível de 
                            resolver, ele resolveu e me entregou tudo pronto.
                            <i class="fas fa-quote-right quote-icon"></i>

                            <div class="mt-3">
                                <h3>Adriana Silva</h3>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <i class="fas fa-quote-right quote-icon"></i>
                            Fui muito bem atendido e assistido, e o processo foi extremamente 
                            rápido, isso foi muito bom.
                            <i class="fas fa-quote-right quote-icon"></i>

                            <div class="mt-3">
                                <h3>Paulo Cesar</h3>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <i class="fas fa-quote-right quote-icon"></i>
                            Atendimento sensacional. Toda a equipe foi muito profissional e 
                            humana em me ajudar a realizar meu sonho. Consegui economizar 
                            bastante. Obrigado
                            <i class="fas fa-quote-right quote-icon"></i>

                            <div class="mt-3">
                                <h3>Leonardo Gomes</h3>
                            </div>
                        </div>
                    </li>

                    <li class="glide__slide">
                        <div class="testemunha-item">
                            <i class="fas fa-quote-right quote-icon"></i>
                            Mesmo eu morando no exterior consegui a minha aprovação de crédito. 
                            Adorei!
                            <i class="fas fa-quote-right quote-icon"></i>

                            <div class="mt-3">
                                <h3>Claudia Lima</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <br>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=3"></button>
                <button class="glide__bullet" data-glide-dir="=4"></button>
                <button class="glide__bullet" data-glide-dir="=5"></button>
            </div>
        </div>
    </section>

    <section id="team" class="team section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Fundador</h2>
                <p>
                    Wander Leite, empresário, administrador de empresas, sempre foi apaixonado por empreendedorismo, 
                    abrindo seu primeiro negócio aos 19 anos de idade. Especialista em crédito, hoje é diretor 
                    fundador de uma empresa que atua diretamente junto aos bancos, buscando sempre as melhores opções 
                    para os clientes conseguirem o crédito que precisam aliado a menor taxa de juros do mercado, tendo 
                    ajudado centenas de pessoas a realizarem seus sonhos, planos e objetivos. Em sua filosofia acredita 
                    que cada cliente é especial e até nos casos mais difíceis sempre luta com todas as possibilidades 
                    para ajudar todos os clientes a realizarem seus sonhos. Também acredita muito que o conhecimento é 
                    a chave para o sucesso e ministra diversos treinamentos e capacitações na área de desenvolvimento 
                    pessoal, inteligência financeira e crédito.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mx-auto">
                    <div class="member">
                        <div class="member-img">
                            <img src="./app/assets/imgs/app/fundador/wander_2.jpg" class="img-fluid">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Wander Leite</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container">

            <div class="section-title">
                <h2>Dúvidas frequentes</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Lorem Ipsum is simply </b> </div>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong> Lorem Ipsum is simply dummy text </strong> of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Lorem Ipsum is simply </b> </div>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong> Lorem Ipsum is simply dummy text </strong> of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                        </div>
                    </div>
                </div>
                <div class="accordion-item faq-acc-item shadow-sm">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed d-flex align-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="far fa-question-circle me-3 icon-acc"></i> <div> <b> Lorem Ipsum is simply </b> </div>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong> Lorem Ipsum is simply dummy text </strong> of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contato</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Endereço</h3>
                                <p>Av. Goiás, 5673 - Segundo Andar - Sala 04 - St. Urias Magalhães, Goiânia - GO, 74565-250</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fas fa-envelope"></i>
                                <h3>Nosso e-mail</h3>
                                <p>wander@consultoriaconfianca.com.br</p>
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
                <div class="col-lg-6">
                    <form method="POST" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="f-color form-control" placeholder="Nome" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="f-color form-control" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="f-color form-control" placeholder="Assunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="f-color textarea form-control" name="message" rows="5" placeholder="Menssagem" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Carregando</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
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
                        Av. Goiás, 5673 <br>
                        Segundo Andar - Sala 04 <br> 
                        St. Urias Magalhães <br> 
                        Goiânia - GO, 74565-250 <br><br>
                        <strong>Telefone:</strong> (62) 3636-3467 <br>
                        <strong>Email:</strong> <span style="font-size: 12px !important;">wander@consultoriaconfianca.com.br</span> <br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links úteis</h4>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Início</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Sobre</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Serviços</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Contato</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nossos serviços</h4>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#">Lorem</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Assine nossa newsletter</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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