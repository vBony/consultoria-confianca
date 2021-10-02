<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./app/assets/css/home.css">
    <link rel="stylesheet" href="./app/assets/css/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</body>
</html>