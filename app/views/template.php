<header id="header" class="header-transparent">
    <nav class="navbar navbar-expand-lg navbar-light menu-box">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="logo">
                    <div class="logo-box">
                        <div class="img-logo-area">
                            <img class="logo-header" src="<?=$baseUrl?>app/assets/imgs/app/logo-primary.png" id="logo-header-white" alt="">
                        </div>
                        <div class="logo-title-area">
                            <div class="logo-title">CONFIANÇA</div>
                            <div class="logo-sub-title">Consultoria em crédito imobiliário</div>
                        </div>
                    </div>
                </div>
            </a>

            <div id="btn-mobile-menu" class="menu-btn" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <div class="bars bar1"></div>
                <div class="bars bar2"></div>
                <div class="bars bar3"></div>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item opt">
                        <a href="#" class="nav-link active nav-opt header-font" aria-current="page">Início</a>
                    </li>

                    <li class="nav-item opt">
                        <a href="#" class="nav-link active nav-opt header-font" aria-current="page">Sobre</a>
                    </li>

                    <li class="nav-item opt">
                        <a href="#" class="nav-link active nav-opt header-font" aria-current="page">Serviços</a>
                    </li>

                    <li class="nav-item opt">
                        <a href="#" class="nav-link active nav-opt header-font" aria-current="page" onclick="window.location.href='<?=$baseUrl?>contato'">Contato</a>
                    </li>
                    
                    <li class="nav-item d-flex align-items-center btn-simu-area">
                        <button type="submit" id="simular-btn" class="default-button primary-button" onclick="window.location.href='<?=$baseUrl?>financiamento'">Simular</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>