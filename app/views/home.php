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
</main>

</body>
</html>