<!-- heade -->
<?php
    include( 'layout/head.php' );
    ?>

<body>
    <!-- nav -->
    <?php
    include( 'layout/nav.php' );
    ?>

    <!-- menu -->
    <?php
    include( 'layout/menu.php');
    ?>


    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">

                <!-- imagem  -->
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!-- Título -->
                        <h2 class="Titulo fw-bolde wow fadeIn" data-wow-delay="0.3s">01 - Inteligência Intrapessoal</h2>
                        <!-- Título -->

                        <div class="row">
                        <div class="col-md-6">
                            <!-- Titulo Figura -->
                            <div class="text-center img-01 wow animate__zoomIn">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                    Representação de estados emocionais</p>
                                <div class="zoom">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal"
                                        data-bs-target="#Imagem01">
                                        <img class="w-75" src="imgs/topico01/Figura01.jpg"
                                            alt="Imagem que remete a organização" id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> banco de
                                    imagens
                                    gratuitas do canvas, 2020</p>
                            </div>
                        </div>
                            <!-- Imagem 01 - MODAL (Audi)-->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-50">
                                        <img class="img-fluid" src="imgs/topico01/Figura01.jpg"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-50 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong> banco de imagens
                                            gratuitas do canvas, 2020</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 01 - End  (Audi)-->

                            <div class="col-md-6">
                                <p class="wow fadeInRight" data-wow-delay="0.5s">Gerenciar as próprias emoções é fundamental para que qualquer pessoa possa encontrar estados mentais de paz e felicidade. Para alguns autores, trata-se de dominar o próprio ser e controlar as emoções. Defenderei aqui uma abordagem ligeiramente diferente que está relacionada com o autoconhecimento e a aceitação.</p>

                            </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center wow fadeIn" data-wow-delay="0.3s">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="fa-solid fa-chevron-right"></i></a>
        </div>

        <!-- barra de progresso embaixo -->
        <div id="progress-bar"></div>
    </div>

    <!-- BUTTON BACK TO TOP (JAMILLE) -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
    <?php
    include('layout/footer.php');
    ?>
</body>

</html>