<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./app/assets/libraries/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?=$baseUrl?>app/assets/css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$baseUrl?>app/assets/css/financiamento.css">
    <link rel="stylesheet" href="<?=$baseUrl?>app/assets/css/contato.css">
    <link rel="stylesheet" href="<?=$baseUrl?>app/assets/css/logo.css">
    <script src="<?=$baseUrl?>app/assets/js/contato.js"></script>
    <script src="<?=$baseUrl?>app/assets/js/jquery.inputmask.min.js"></script>
    <script src="<?=$baseUrl?>app/assets/js/jquery.maskMoney.min.js"></script>
    <title>Contato | Consultoria Confiança</title>
</head>
<body>
    <main>
        <section id="simulacao-financiamento">
            <div class="container">
                <div class="col-12" id="header">
                    <div class="logo">
                        <div class="logo-box-bg">
                            <div class="img-logo-area">
                                <img class="logo-header" src="<?=$baseUrl?>app/assets/imgs/app/logo-primary.png" id="logo-header-white" alt="">
                            </div>
                            <div class="logo-title-area">
                                <div class="logo-title">Confiança</div>
                                <div class="logo-sub-title">Consultoria em crédito imobiliário</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row card-body steps" id="formulario">
                        <div class="col-12">
                            <div class="loading-bg"></div>

                            <div>
                                <div>
                                    <h3 class="default-title">Seu contato é muito importante pra gente!</h3>
                                    <p class="text-secondary">Nos mande uma mensagem preenchendo os campos abaixo e logo vamos te responder</p>
                                </div>
    
                                <div class="mt-4">
                                    <form id="contatoForm">
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Nome completo</div>
                                                <input type="text" id="nome" name="nome" class="form-control default-input" placeholder="Nome Completo">
                                                <div class="invalid-msg m_nome"></div>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Email</div>
                                                <input type="text" name="email" id="email" class="form-control default-input" placeholder="E-mail">
                                                <div class="invalid-msg m_email"></div>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Telefone</div>
                                                <input type="text" id="telefone" name="telefone" class="form-control default-input" placeholder="(00) 00000-0000">
                                                <div class="invalid-msg m_telefone"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Mensagem</div>
                                                <textarea name="mensagem" class="form-control default-input mt-2" id="mensagem"></textarea>
                                                <div class="invalid-msg m_mensagem"></div>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label mb-2">Qual a melhor forma de falar com você?</div>

                                                <div class="contact-input-area mb-1">
                                                    <i class="fa-brands fa-whatsapp default-title me-2"></i>
                                                    <div class="desc-contact">Whatsapp</div>
                                                    <input type="checkbox" name="formasContato[whatsapp]"  class="check-contact">
                                                </div>

                                                <div class="contact-input-area mb-1">
                                                    <i class="fa-brands fa-envelope default-title me-2"></i>
                                                    <div class="desc-contact">E-mail</div>
                                                    <input type="checkbox" class="check-contact" name="formasContato[email]">
                                                </div>
                                                
                                                <div class="contact-input-area">
                                                    <i class="fas fa-phone-alt default-title me-2"></i>
                                                    <div class="desc-contact">Contato</div>
                                                    <input type="checkbox" class="check-contact" name="formasContato[ligacao]">
                                                </div>

                                                <div class="invalid-msg m_formasContato"></div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="form-group col-lg-6 col-md-6 col-12 mx-auto" id="btn-area">
                                                <button type="submit" class="default-button btnSubmit" id="submitStep1">Enviar</button>
                                                <button class="default-button btnSubmitLoading" disabled>Aguarde...</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row card-body steps" id="success-msg">
                        <div class="col-12 text-center">
                            <h3 class="default-title mb-3">Recebemos a sua mensagem</h3>
                            <p class="default-text">Aguarde, o nosso time entrará em contato o mais rápido possível.</p>
                            <p class="default-text">Fique de olho em seu e-mail e telefone. <span>&#128521;</span></p>
                            <div>
                                <a class="default-button" id="financiamentoToHomeBtn" href="<?=$baseUrl?>">Voltar para página inicial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <input type="hidden" id="baseUrl" value="<?=$baseUrl?>">
</body>
</html>