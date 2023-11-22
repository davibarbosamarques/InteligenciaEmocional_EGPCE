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
                        <h2 class="Titulo fw-bolde wow fadeIn" data-wow-daley="0.3s">02 - Testando a Inteligência Emocional</h2>
                        <!-- Título -->

                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-sm-12 col-md-6">
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 wow animate__zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary"><strong>Figura 02:</strong>
                                        Representação de um teste</p>
                                    <div class="zoom">
                                        <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem2">
                                            <img src="imgs/topico02/Figura02.png" alt="Imagem que remete a organização"
                                                id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Banco de
                                        imagens gratuitas do canvas, 2020.</p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem2" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/topico02/Figura02.png"
                                                alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte:</strong> Banco de imagens gratuitas
                                                do canvas, 2020.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem - End-->
                            </div>

                            <div class="col-sm-12 col-md-6 wow fadeInRight" data-wow-delay="0.5s">
                                <p>
                                    Para que se tenha um melhor diagnóstico da sua atual situação em relação à
                                    inteligência emocional, <a
                                        href="https://docs.google.com/spreadsheets/d/1GeGiCKR_YfmnIxVCMUDzmg90i-GIPUfYGQW6AssDiYU/edit?pli=1#gid=1195372100"
                                        target="_blank">clique aqui</a> para ir até a biblioteca e baixar a planilha
                                    para que você responda o teste com total honestidade e já buscando refletir sobre
                                    todas as questões contidas nele. Logo após responder a planilha leia o resultado
                                    abaixo baseado em suas respostas.
                                </p>
                            </div>
                        </div>

                        <h5 class="text-center wow fadeIn mt-2" data-wow-delay="0.3s"><span
                                class="badge bg-warning p-2"><i class="bi bi-lightbulb-fill"></i>
                                Clique para saber mais</span></h5>

                            <div class="container wow animate__zoomIn">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-light collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                <h5>A maior parte de suas respostas foram “nunca” ou “às vezes”?...</h5>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Então é bastante provável que você tenha
                                                dificuldades em confiar em si mesmo ou até que não se sinta merecedor de
                                                amor e de uma vida feliz. Há também a possibilidade de você não ter
                                                desenvolvido uma boa resiliência em relação aos problemas, acabando por
                                                adotar uma postura de negatividade e percebendo a vida como um local de
                                                provações e sofrimento.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button text-light collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <h5>A maior parte de suas respostas foram “sempre” ou “muitas vezes”?...
                                                </h5>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Pessoas que tiveram todas ou grande parte das respostas como “sempre” ou
                                                “muitas vezes”, provavelmente têm atitudes mais positivas em relação à
                                                vida e uma autoestima bem desenvolvida. Possivelmente elas confiam em si
                                                mesmas e trabalham para se manterem ativas e produtivas.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                        <section class="container wow animate__zoomIn">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="titulofiqueatento">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO
                                            </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">
                                            Nos dois casos, é preciso investigar se o excesso ou a falta de positividade e autoestima são frutos da sua conexão com seu próprio ser ou se você está sendo manipulado pelo ego a ponto de perceber a realidade de forma forjada. Muitas vezes, pessoas que aparentam ser muito confiantes desabam diante de qualquer resposta negativa do ambiente, pois sua confiança não era real, mas um efeito do ego para esconder a baixa autoestima do indivíduo. A forma relativamente segura de saber se seus sentimentos são reais ou fictícios é saber se você se mantém em equilíbrio frente às diversidades.
                                        </p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <p class="wow fadeIn" data-wow-daley="0.3s">
                            O ambiente em que um indivíduo está inserido pode incentivar a paz ou ativar diversos gatilhos mentais. Esses gatilhos estão relacionados ao que dissemos sobre a educação que nos foi ensinada com relação ao que é certo e errado, e também conecta-se com nossas crenças, cultura e traumas pessoais. A gestão das emoções não significa que o indivíduo passará a ter apenas emoções positivas. Nossas emoções são partes do nosso sistema e em si não são positivas ou negativas. A Inteligência Emocional nos indica que podemos, mesmo diante de emoções aparentemente negativas, reagir de forma positiva, evitando desencadear pensamentos obsessivos e nocivos ao indivíduo (CURY, 2007).
                        </p>
                        
                        <p class="wow fadeIn" data-wow-daley="0.3s">
                            Também não tenho a pretensão de defender que o indivíduo deverá passar a permitir que o ambiente em que está inserido lhe provoque emoções que lhe causam dor e que ele deve apenas pensar positivo em relação a elas. Na verdade, quando uma pessoa começa a nutrir profundo apreço por ela mesma, é bastante comum que ela passe a se afastar de vários tipos de situações e pessoas. Entretanto, sempre que isso não for possível, a pessoa ainda assim poderá administrar os conflitos da melhor forma possível caso desenvolva sua Inteligência Emocional.
                        </p>


                    </div>

                </div>

            </div>

        </section>

        <script>
            AOS.init();
        </script>

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