<!-- NAV  -->
<!-- coloquei um id pra chamar la no js --jayron-- -->
<nav class="navbar shadow-sm" id="navmenu">
    <div class="container-fluid">

        <!-- RESPONSIVIDADE -->

        <!-- MENU HAMBURGUER -->
        <button class="btn" id="btn_menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars fs-2"></i></button>
        <!-- FIM DO MENU HAMBURGUER -->

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header text-center">
                <h5 class="offcanvas-title " id="offcanvasScrollingLabel"><img src="imgs/logoEGP2.png" alt="logo"
                        id="img_logo">
                </h5>
                <button type="button" class="btn-close" id="close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <!-- CONTEÚDO DO MENU LATERAL RESPONSIVO -->
                <nav class="menulateral-responsivo">
                    <ul>
                        <li class="menu">
                            <a href="index.php">
                                <span class="icon space"><i class="bi bi-person-workspace"></i></span>
                                <span class="txt">Apresentação</span>
                            </a>
                        </li>

                        <!-- 1º topico com subtópico -->
                        <button class="dropdown-btn">
                            <li class="menu">
                                <a data-valor="topico01.php">
                                    <span class="icon space"><i class="bi bi-1-circle"></i></span>
                                    <span class="txt">Conhecendo a interface do Calc <i
                                            class="bi bi-caret-down-fill barra-sub"></i></span>
                                </a>
                            </li>
                        </button>
                        <!-- subtopicos aqui  -->
                        <div class="dropdown-container" id="spy">
                            <a href="topico01.php">
                                <i class="fa-regular fa-pen-to-square circulo"></i>Inicío</a>

                            <a href="#item1">
                                <i class="fa-regular fa-pen-to-square circulo"></i>01.2 O que é o Calc?</a>

                            <a href="#item2">
                                <i class="fa-regular fa-pen-to-square circulo"></i>01.3 Instalação da Suíte
                                LibreOffice</a>

                            <a href="#item3">
                                <i class="fa-regular fa-pen-to-square circulo"></i>01.4 Elementos básicos de uma
                                planilha no Calc</a>

                            <a href="#item4">
                                <i class="fa-regular fa-pen-to-square circulo"></i> 01.5 Interface do Calc</a>
                        </div>

                        <!-- 2º topico com Subtópico -->
                        <button class="dropdown-btn">
                            <li class="menu">
                                <a data-valor="topico02.php">
                                    <span class="icon space"><i class="bi bi-2-circle"></i></span>
                                    <span class="txt">Células, Colunas, Linhas e Folhas de Cálculo<i
                                            class="bi bi-caret-down-fill barra-sub"></i></span>
                                </a>
                            </li>
                        </button>
                        <!-- subtopicos aqui  -->
                        <div class="dropdown-container" id="spy">
                            <a href="topico02.php">
                                <i class="fa-regular fa-pen-to-square circulo"></i>Inicío</a>

                            <a href="#item5">
                                <i class="fa-regular fa-pen-to-square circulo"></i> 02.2 Seleção de células, colunas,
                                linhas e folhas</a>

                            <a href="#item6">
                                <i class="fa-regular fa-pen-to-square circulo"></i> 02.3 Inserção de colunas ou
                                linhas</a>

                            <a href="#item7">
                                <i class="fa-regular fa-pen-to-square circulo"></i> 02.4 Exclusão de colunas ou
                                linhas</a>

                            <a href="#item8">
                                <i class="fa-regular fa-pen-to-square circulo"></i> 02.5 Trabalho com folhas de
                                cálculo</a>
                        </div>

                        <li class="menu">
                            <a href="topico03.php">
                                <span class="icon"><i class="bi bi-3-circle"></i></span>
                                <span class="txt">Disciplina de UX</span>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="referencias.php">
                                <span class="icon"><i class="bi bi-book-half"></i></span>
                                <span class="txt">Referências</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- FIM DA RESPONSIVIDADE -->

        <!-- CONTEÚDO DA NAV -->
        <a class="navbar-brand"></a>
        <form class="form" role="search">
            <a class="nav-link active nonedec me-3" aria-current="page" href="#">Nome_Completo</a>

            <button type="button" class="btn btn-outline-success" id="moodle">Ir para o Moodle</button>

            <!--BOTÃO MODO ESCURO -->
            <button type="button" id="btn_tema">
                <div id="icone"></div>
                <div id="txtBtn"> Mudar Tema</div>
            </button>
            <!--BOTÃO MODO ESCURO -->

        </form>
    </div>
</nav>
<!-- FIM DA NAV -->