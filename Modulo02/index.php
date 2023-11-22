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
                        <h2 class="Titulo fw-bolde wow fadeIn" data-wow-delay="0.3s">Apresentação</h2>
                        <!-- Título -->

                        <div class="tudo">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-5 img-index">
                                    <img src="imgs/img-comeco.png" alt="Imagem que remete a organização" id="img-1" class="w-75 wow animate__zoomIn img-apresentacao">
                                </div>

                                <div class="col-sm-12 col-md-7 mb-5">
                                    <div class="row container mt-6 wow animate__zoomIn">
                                        <div class="mensagem">
                                        <p class=" text-left paragrafo mb-4">
                                       <strong>Olá [Nome Completo],
                                        Parabéns por avançar para o Módulo 02 do curso!</strong> É uma conquista notável e demonstra seu comprometimento e dedicação ao aprendizado.
                                        </p>
                                        <p class=" text-left paragrafo mb-4">
                                        Vamos ver se você entendeu sobre o Módulo 01 do curso. No módulo anterior, exploramos os aspectos fundamentais da Inteligência Emocional. Você aprendeu que o desenvolvimento da Inteligência Emocional é crucial para todos e que cada indivíduo possui a capacidade intrínseca de cultivar sua própria felicidade.
                                        </p>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                        Você também já aprendeu que a Inteligência Emocional abrange as inteligências intrapessoal e interpessoal, ou seja, a habilidade de gerenciar as próprias emoções e também de lidar com as outras pessoas. Gerenciar as próprias emoções significa prestar atenção às próprias necessidades, exercitando o autoconhecimento e o autocuidado. Lidar com os sentimentos dos outros significa ter o aprendizado da empatia, responsabilidade social e a compreensão de que cada ser é único e possui um ponto de vista particular.
                        </p>

                        <div class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            <h5>O que você verá agora?</h5>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                        Nesta segunda parte, eu lhe conduzirei de forma mais profunda na compreensão do seu eu interior e na reflexão sobre seu relacionamento com os demais. O objetivo da minha abordagem será mostrar que, exercitando a sua Inteligência Emocional, você poderá conectar-se melhor consigo mesmo, prevenindo-se de problemas como estresse, depressão, ansiedades, entre outros, e também poderá ter relacionamentos afetivos e profissionais bem sucedidos.
                                        </div>
                                    </div>
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