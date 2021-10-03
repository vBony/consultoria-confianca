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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./app/assets/js/home.js"></script>
    <script src="./app/assets/libraries/glide-3.4.1/dist/glide.min.js"></script>
    <link rel="stylesheet" href="./app/assets/libraries/glide-3.4.1/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="./app/assets/libraries/glide-3.4.1/dist/css/glide.theme.min.css">
    <title>Document</title>
</head>
<body>
<?php $this->loadTemplate($template); ?>

<!-- sessão sub-header -->
<section id="inicio" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
        <h1 class="text-inicio mb-4">
            Chegou a hora de tirar seus projetos do papel!
        </h1>

        <h2 class="text-inicio" id="sub-titulo-ti">
            Nós somos a uma empresa sediada em Goiânia, 
            com atuação a nível nacional e uma equipe de 
            especialistas que já ajudou centenas de pessoas a 
            realizarem seus sonhos, projetos e objetivos, 
            levando para essas pessoas um tipo de crédito 
            que o seu banco não gosta odeia te oferecer.
        </h2>

        <a href="#about" class="btn-conheca scrollto">Conheça</a>
    </div>
</section>

<main>
    <section id="clientes" class="clientes section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="./app/assets/imgs/app/clients/client-1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="./app/assets/imgs/app/clients/client-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="./app/assets/imgs/app/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="./app/assets/imgs/app/clients/client-4.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="./app/assets/imgs/app/clients/client-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="./app/assets/imgs/app/clients/client-6.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><img class="img-fluid" src="./app/assets/imgs/app/about.jpg"></div>
                <div class="col-lg-6 pt pt-lg-0">
                    <h2>Chegou a hora de tirar seus projetos do papel!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit</p>
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
                <h2>Services</h2>
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
    
</main>

</body>
</html>