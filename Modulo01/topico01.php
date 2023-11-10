<?php
include('layout/head.php');
 ?>
<body>
<!-- ola -->
    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>

    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">



                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">01 - Inteligência Emocional</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->

                        <div class="row">
                            <div class="col-md-6">
                                <p class="img-fluid wow fadeInLeft" data-wow-delay="0.5s"> Antes de iniciarmos a jornada que leva à felicidade pessoal, preciso esclarecer o que estou chamando aqui de Inteligência Emocional. De modo simplificado, a Inteligência Emocional pode ser definida como a habilidade de lidar adequadamente com as próprias emoções e de compreender as emoções das outras pessoas, de modo a alcançar relações intrapessoais e interpessoais satisfatórias. Desse modo, pode ser compreendida como uma habilidade que é mobilizada tanto para o autoconhecimento como para que possamos nos relacionar com as outras pessoas.</p>

                            </div>
                            <div class="col-md-6">
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura01.jpg" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura01.jpg" width="300" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura01.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 01:</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 01 - End -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="bi bi-chevron-right"></i></a>
        </div>


        <div id="progress-bar"></div>
    </div>
    
<?php
include('layout/footer.php');
?>
</body>

</html>