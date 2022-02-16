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
    <script src="<?=$baseUrl?>app/assets/js/financiamento.js"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <section id="simulacao-financiamento">
            <div class="container">
                <div class="col-12" id="header">
                    <div id="logo-area" class="my-auto">
                        <img src="<?=$baseUrl?>app/assets/imgs/app/logo-black.png" class="me-3" alt="">
                        <h1 class="default-title"><strong> Consultoria Confiança </strong></h1>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-12 d-flex" id="img-area">
                            <img class="img img-fluid" src="<?=$baseUrl?>app/assets/imgs/app/simulation.jpg" alt="">
                        </div>

                        <div class="col-lg-7 col-md-12 col-sm-12 p-4">
                            <div class="loading-bg"></div>

                            <div id="step-1" class="steps">
                                <div>
                                    <div class="mb-4">
                                        <div class="progress" id="progress-financiamento">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted mt-1" id="breadcrumb">Passo 1 de 2 - Sobre o imóvel</div>
                                        </div>
                                    </div>
                                    <h3 class="default-title">Dados para a simulação</h3>
                                    <p class="text-secondary">Para começar, conta pra gente algumas informações para calcularmos seu financiamento.</p>
                                </div>
    
                                <div class="mt-4">
                                    <form id="form-step-2">
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Tipo de imóvel</div>
                                                <select class="form-control default-input">
                                                    <option>Selecione</option>
                                                    <option>1</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>
    
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Estado do imóvel</div>
                                                <select class="form-control default-input">
                                                    <option>Selecione</option>
                                                    <option>1</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>
    
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Valor do Imóvel</div>
                                                <input type="text" class="form-control default-input" placeholder="R$ 0,00">
                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>
    
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Valor pretendido de financiamento</div>
                                                <input type="text" class="form-control default-input" placeholder="R$ 0,00">
                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>
    
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Prazo em meses</div>
                                                <input type="text" class="form-control default-input" placeholder="0">
                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="form-group" id="btn-area">
                                                <button class="default-button btnSubmit" id="submitStep1">Continuar</button>
                                                <button class="default-button btnSubmitLoading" disabled>Aguarde...</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="step-2" class="row p-2 steps">
                                <div>
                                    <div class="mb-2">
                                        <div class="progress" id="progress-financiamento">
                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-muted mt-1" id="breadcrumb">Passo 2 de 2 - Sobre você</div>
                                        </div>
                                    </div>
                                    <h3 class="default-title">Dados para contato</h3>
                                    <p class="text-secondary mb-1">Já estamos quase no fim. Para terminar essa etapa informe seus dados pessoais.</p>
                                </div>

                                <div class="mt-2">
                                    <form id="form-step-2">
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Nome completo</div>
                                                <input type="text" class="form-control default-input" placeholder="Nome Completo">
                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>

                                        <div class="row mb-2 form-group" style="padding: 0px 12px">
                                            <div class="py-2 row mx-auto border">
                                                <div class="col-12 mb-2">
                                                    <div class="input-label-info">
                                                        Nos informando o seu <b>CPF</b>, podemos
                                                        verificar a possibilidade de 
                                                        financiamento junto aos bancos
                                                        com antecedência.
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="input-label">CPF <div class="input-label-info">(opcional)</div></div>
                                                        <input type="text" class="form-control default-input" placeholder="000.000.000-00">
                                                        <div class="invalid-msg"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="input-label">CPF do cônjuge <div class="input-label-info">(opcional)</div></div>
                                                        <input type="text" class="form-control default-input" placeholder="000.000.000-00">
                                                        <div class="invalid-msg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Telefone</div>
                                                <input type="text" class="form-control default-input" placeholder="(00) 00000-0000">
                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>
    
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label">Email</div>
                                                <input type="text" class="form-control default-input">
                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <div class="input-label mb-2">Qual a melhor forma de falar com você?</div>

                                                <div class="contact-input-area mb-1">
                                                    <i class="fa-brands fa-whatsapp default-title me-2"></i>
                                                    <div class="desc-contact">Whatsapp</div>
                                                    <input type="checkbox"  class="check-contact">
                                                </div>

                                                <div class="contact-input-area">
                                                    <i class="fa-brands fa-envelope default-title me-2"></i>
                                                    <div class="desc-contact">E-mail</div>
                                                    <input type="checkbox" class="check-contact">
                                                </div>

                                                <div class="invalid-msg"></div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="form-group" id="btn-area">
                                                <button class="default-button btnSubmit" id="submitStep2">Continuar</button>
                                                <button class="default-button btnSubmitLoading" disabled>Aguarde...</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>