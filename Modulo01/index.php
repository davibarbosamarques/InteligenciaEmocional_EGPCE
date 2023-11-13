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
                        <h2 class="Titulo fw-bolde scrool">Apresentação</h2>
                        <!-- Título -->

                        <p class="scrool">
                            Bem-vindo ao curso sobre <strong>Inteligência Emocional e Trabalho em Equipe</strong>. Se
                            você, em qualquer momento da sua vida, já entrou em conflito com pessoas queridas, já se viu
                            sem conseguir ter uma relação afetiva saudável com alguém importante, ou ainda, já teve
                            problemas para se relacionar com colegas de trabalho, então provavelmente se beneficiará
                            enormemente do conteúdo que apresentarei aqui. Além disso, esse curso será de grande valia
                            para pessoas que já enfrentaram problemas tais como depressão, ansiedade, ataques de pânico
                            e irritação constante.
                        </p>

                        <p class="scrool">
                            Durante as próximas horas, eu, <strong>Kamila Nascimento</strong>, lhe conduzirei em uma
                            jornada de autoconhecimento que lhe permitirá conhecer a si mesmo e aos demais por meio de
                            uma nova perspectiva. Há mais de uma década, venho estudando os seres humanos e seus
                            relacionamentos na sociedade. Essa interação entre o “eu” e o “outro” tem sido o coração dos
                            estudos das ciências sociais e da psicologia desde seus primórdios. A partir de inúmeros
                            experimentos e observações, os pesquisadores buscaram analisar, do ponto de vista individual
                            e coletivo, como essa interação ocorre e de que modo ela pode ser aperfeiçoada a fim de
                            contribuir com a nossa felicidade.
                        </p>

                        <div class="container">
                            <div class="cards">
                                <label id="summary">
                                    <input type="checkbox"/>
                                    <article>
                                        <div class="front">
                                            <h3>Clique 
                                                <span class="material-symbols-outlined"> <i class="fa-solid fa-hand-pointer fa-beat-fade"></i></span>
                                            </h3>

                                        </div>
                                        <div class="back">
                                            <div class="text-left">
                                                <p>
                                                    A felicidade é o aspecto mais importante deste curso. A Inteligência Emocional é um caminho que podemos utilizar para melhorar a nossa qualidade de vida e nossas relações, visto que nossos relacionamentos interferem de modo direto em nossa felicidade. Refiro-me aqui aos relacionamentos afetivos pessoais, bem como àqueles que desenvolvemos no nosso ambiente de trabalho, onde passamos praticamente um terço de nossa vida mais ativa.
                                                </p>
                                            </div>

                                        </div>
                                    </article>
                                </label>
                            </div>
                        </div>

                        <p class="scrool">
                            Nesta primeira parte, falarei dos aspectos mais gerais da Inteligência Emocional.
                            Apresentarei sua conceituação e abordarei os diversos tipos de inteligência e como a
                            Inteligência Emocional se destaca como habilidade essencial para todos os indivíduos. Também
                            lhe mostrarei de que modo você pode utilizar a Inteligência Emocional em benefício próprio,
                            tornando sua própria vida mais feliz e positiva.
                        </p>

                        <p class="scrool fs-6 mt-5">
                            <i class="fa-solid fa-arrow-right" style="color: #33833d;"></i>
                            <strong>Kamila Nascimento</strong> é professora universitária, atuando em diversas disciplinas de Sociologia e Gestão de Pessoas. Formada em Ciência Sociais, Mestre e Doutora em Ciência Política.
                        </p>


                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
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