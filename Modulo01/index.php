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
                                    <img src="imgs/img-comeco.png" alt="Imagem que remete a organização" id="img-1"
                                        class="w-75 wow animate__zoomIn img-apresentacao">
                                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Imagem retirada do Freepik</p>
                                </div>

                                <div class="col-sm-12 col-md-7 mt-5">
                                    <div class="row container mt-6 wow animate__zoomIn">
                                        <div class="mensagem md-5">
                                            <p class=" text-left paragrafo mb-4">
                                                <strong>Olá [Nome_Completo]</strong>, bem-vindo ao curso sobre
                                                <strong>Inteligência Emocional e
                                                    Trabalho
                                                    em
                                                    Equipe</strong>. Se
                                                você, em qualquer momento da sua vida, já entrou em conflito
                                                com
                                                pessoas
                                                queridas, já se viu
                                                sem conseguir ter uma relação afetiva saudável com alguém
                                                importante, ou
                                                ainda, já teve
                                                problemas para se relacionar com colegas de trabalho, então
                                                provavelmente se beneficiará
                                                enormemente do conteúdo que apresentarei aqui. Além disso,
                                                esse
                                                curso
                                                será de grande valia
                                                para pessoas que já enfrentaram problemas tais como
                                                depressão,
                                                ansiedade, ataques de pânico
                                                e irritação constante.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <p class="wow fadeIn mt-4" data-wow-daley="0.3s">
                            Durante as próximas horas, eu, <strong>Kamila Nascimento</strong>, lhe conduzirei em uma jornada de autoconhecimento que lhe permitirá conhecer a si mesmo e aos demais por meio de uma nova perspectiva. Há mais de uma década, venho estudando os seres humanos e seus relacionamentos na sociedade. Essa interação entre o “eu” e o “outro” tem sido o coração dos estudos das ciências sociais e da psicologia desde seus primórdios. A partir de inúmeros experimentos e observações, os pesquisadores buscaram analisar, do ponto de vista individual e coletivo, como essa interação ocorre e de que modo ela pode ser aperfeiçoada a fim de contribuir com a nossa felicidade.
                            </p>


                            <!-- Citação com borda verde (esquerda) -->
                            <div class="bd-callout bd-callout-success m-5 wow fadeIn" data-wow-delay="0.3s">

                                <!-- blockquote do bootstrap -->
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>
                                            A felicidade é o aspecto mais importante deste curso. A Inteligência Emocional é um caminho que podemos utilizar para melhorar a nossa qualidade de vida e nossas relações, visto que nossos relacionamentos interferem de modo direto em nossa felicidade. Refiro-me aqui aos relacionamentos afetivos pessoais, bem como àqueles que desenvolvemos no nosso ambiente de trabalho, onde passamos praticamente um terço de nossa vida mais ativa.
                                        </p>
                                    </blockquote>
                                </figure>
                            </div>
                            <!-- Citação com borda verde (esquerda) -->

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                                Nesta primeira parte, falarei dos aspectos mais gerais da Inteligência Emocional. Apresentarei sua conceituação e abordarei os diversos tipos de inteligência e como a Inteligência Emocional se destaca como habilidade essencial para todos os indivíduos. Também lhe mostrarei de que modo você pode utilizar a Inteligência Emocional em benefício próprio, tornando sua própria vida mais feliz e positiva.
                            </p>

                            <p class="fs-6 mt-5 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa-solid fa-arrow-right" style="color: #33833d;"></i>
                                <strong>Kamila Nascimento</strong> é professora universitária, atuando em diversas disciplinas de Sociologia e Gestão de Pessoas. Formada em Ciência Sociais, Mestre e Doutora em Ciência Política e instrutora conteudista deste curso.
                            </p>


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