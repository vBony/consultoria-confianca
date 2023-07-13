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

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Portuguese">

    <link rel="icon" type="image/png" href="<?=$baseUrl?>app/assets/imgs/app/logo-black.png">

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '630733410831151');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=630733410831151&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Meta Pixel Code -->

    <!-- <meta name="robots" content="noindex, nofollow"> -->
</head>
<body>
<?php $this->loadTemplate($templateData); ?>

<div class="container mt-4">
    <h1 class="text-center">Página não encontrada</h1>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 d-flex align-items-center justify-content-center">
            <a href="<?=$baseUrl?>" class="btn btn-success w-100">
                <i class="fa-solid fa-home me-2"></i>
                Voltar ao início
            </a>
        </div>
    </div>
</div>



</body>
</html>