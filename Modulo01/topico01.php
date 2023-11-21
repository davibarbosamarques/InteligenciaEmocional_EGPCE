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

                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">01 - Inteligência Emocional</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->

                        <div class="row">
                            <div class="col-md-6">
                                <p class="wow fadeInLeft" data-wow-delay="0.5s"> Antes de iniciarmos a jornada que leva
                                    à felicidade pessoal, preciso esclarecer o que estou chamando aqui de Inteligência
                                    Emocional. De modo simplificado, a Inteligência Emocional pode ser definida como a
                                    habilidade de lidar adequadamente com as próprias emoções e de compreender as
                                    emoções das outras pessoas, de modo a alcançar relações intrapessoais e
                                    interpessoais satisfatórias. Desse modo, pode ser compreendida como uma habilidade
                                    que é mobilizada tanto para o autoconhecimento como para que possamos nos relacionar
                                    com as outras pessoas.</p>

                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center img-01 wow animate__zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                        Representação de estados emocionais</p>
                                    <div class="zoom">
                                        <a href="imagens/Figura01.png" data-bs-toggle="modal"
                                            data-bs-target="#Imagem01">
                                            <img class="w-50" src="imgs/topico01/Figura01.jpg"
                                                alt="Imagem que remete a organização" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> banco de
                                        imagens
                                        gratuitas do canvas, 2020</p>
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
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">De acordo com a Teoria das Inteligências Múltiplas,
                            desenvolvida pelo psicólogo Howard Gardner, na década de 80, os seres humanos possuem nove
                            tipos de inteligência, as quais podem ser utilizadas em diferentes situações e desafios
                            humanos (HOWARD, 1999). São elas:</p>

                        <div class="text-center wow fadeIn" data-wow-delay="0.3s">
                            <h4><span class="badge bg-warning text-dark-ênfase"><i class="fa fa-lightbulb"
                                        style="color:white"></i> Clique para entender sobre as nove
                                    Inteligências.</span></h4>
                        </div>
                        <div class="storytelling wow fadeIn" data-wow-delay="0.3s">
                            <div class="timeline">
                                <input type="radio" checked class="profile" id="" name="bright">
                                <input type="radio" class="settings" id="" name="bright">
                                <input type="radio" class="posts" id="" name="bright">
                                <input type="radio" class="books" id="" name="bright">
                                <div class="topo">
                                    <ul class="nav">
                                        <li class="st st1">
                                            <h2 class="inner">Lingüística</h2>
                                        </li>
                                        <li class="st st2">
                                            <h2 class="inner">Matemática</h2>
                                        </li>
                                        <li class="st st3">
                                            <h2 class="inner">Espacial</h2>
                                        </li>
                                        <li class="st st4">
                                            <h2 class="inner">Musical</h2>
                                        </li>
                                    </ul>
                                    <div class="line">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="conteudo">
                                    <section class="profile-section" id="secao">
                                        <span></span>
                                        <h3>Inteligência Linguística</h3>
                                        <p>Relacionada à capacidade de trabalhar com as palavras, sendo atribuída
                                            especialmente aos poetas.</p>
                                    </section>
                                    <section class="Account-section" id="secao">
                                        <span></span>
                                        <h3>Inteligência Lógico-Matemática</h3>
                                        <p>Ligada à capacidade para a lógica e matemática, sendo tradicionalmente
                                            utilizada pelos testes de QI.</p>
                                    </section>
                                    <section class="Posts-section" id="secao">
                                        <span></span>
                                        <h3>Inteligência Espacial</h3>
                                        <p>Relacionada à capacidade de visualizar dimensões espaciais, sendo bastante
                                            utilizada por engenheiros, arquitetos, pilotos, etc.</p>
                                    </section>
                                    <section class="Advanced-section" id="secao">
                                        <span></span>
                                        <h3>Inteligência Musical</h3>
                                        <p>Trata-se da habilidade dos músicos e compositores.</p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="storytelling wow fadeIn" data-wow-delay="0.3s">
                            <div class="timeline">
                                <input type="radio" class="quinto" id="" name="bright">
                                <input type="radio" class="sexto" id="" name="bright">
                                <input type="radio" class="setimo" id="" name="bright">
                                <input type="radio" class="oitavo" id="" name="bright">
                                <input type="radio" class="nono" id="" name="bright">
                                <div class="topo">
                                    <ul class="nav">
                                        <li class="st st5">
                                            <h2 class="inner">Corporal</h2>
                                        </li>
                                        <li class="st st6">
                                            <h2 class="inner">Interpessoal</h2>
                                        </li>
                                        <li class="st st7">
                                            <h2 class="inner">Intrapessoal</h2>
                                        </li>
                                        <li class="st st8">
                                            <h2 class="inner">Naturalista</h2>
                                        </li>
                                        <li class="st st9">
                                            <h2 class="inner">Existencial</h2>
                                        </li>
                                    </ul>
                                    <div class="line">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="conteudo">
                                    <section class="profile-quinto" id="secao">
                                        <span></span>
                                        <h3>Inteligência Corporal-Cinestésica</h3>
                                        <p>Atribuída aos atletas, dançarinos e artistas que desenvolvem e trabalham o
                                            próprio corpo.</p>
                                    </section>
                                    <section class="Account-sexto" id="secao">
                                        <span></span>
                                        <h3>Inteligência Interpessoal</h3>
                                        <p>Capacidade de se relacionar com outras pessoas com facilidade. Envolve
                                            aspectos como empatia e escuta ativa e é atribuída a psicólogos, terapeutas,
                                            professores e a pessoas que trabalham com negociações, como vendedores e
                                            políticos.</p>
                                    </section>
                                    <section class="Posts-setimo" id="secao">
                                        <span></span>
                                        <h3>Inteligência Intrapessoal</h3>
                                        <p>Capacidade de se relacionar consigo mesmo e lidar com os próprios sentimentos
                                            e emoções. Relaciona-se com o autoconhecimento e com a autoestima;</p>
                                    </section>
                                    <section class="Advanced-oitavo" id="secao">
                                        <span></span>
                                        <h3>Inteligência Naturalista</h3>
                                        <p>Relacionada com os profissionais que se interessam pelas ciências naturais e
                                            do meio ambiente. É a compreensão da natureza e seu funcionamento;</p>
                                    </section>
                                    <section class="Espace-nono" id="secao">
                                        <span></span>
                                        <h3>Inteligência Existencial</h3>
                                        <p>Atribuída aos profissionais de filosofia, sociologia, antropologia, entre
                                            outros. É a capacidade de investigar e refletir sobre a existência humana,
                                            bem como de questionar a realidade.</p>
                                    </section>
                                </div>
                            </div>
                        </div>



                        <p class="wow fadeIn" data-wow-delay="0.3s">Todos os tipos de inteligência são muito desejáveis
                            e é bem provável que logo após ter lido sobre elas, você tenha se identificado com uma ou
                            mais delas. É normal percebermos que existe em nós uma predominância de algumas dessas
                            inteligências, enquanto outras nos parece um tanto difícil de praticar.</p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">Quanto a isso, é importante destacar que mesmo que
                            tenhamos nos identificado mais com uma delas, todos os seres humanos, a princípio, possuem
                            estas nove inteligências ou a capacidade de desenvolvê-las. Obviamente, nem todos os
                            indivíduos possuem todas na mesma proporção, afinal, elas se apresentam de forma bastante
                            singular em cada pessoa (HOWARD, 1999).</p>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center img-01 wow animate__zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura de Howard
                                            Gardner</strong></p>
                                    <div class="zoom">
                                        <a href="gardner" data-bs-toggle="modal" data-bs-target="#gardner">
                                            <img class="w-75" src="imgs/topico01/gardner.webp"
                                                alt="Imagem que remete a organização" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> <a
                                            target="blank"
                                            href="https://www.inteligenciadevida.com.br/pt/conteudo/quem-e-howard-gardner-especialistas-em-educacao/">Site
                                            Inteligencia de Vida</a></p>
                                </div>
                            </div>

                            <!-- Imagem 01 - MODAL (Audi)-->
                            <div class="modal fade text-center" id="gardner" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-50">
                                        <img class="img-fluid" src="imgs/topico01/gardner.webp"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-50 bg-light justify-content-center">
                                        <p class="FonteFigura FonteMenor text-secondary"><strong>Figura de Howard
                                                Gardner</strong></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 01 - End  (Audi)-->
                            <div class="col-md-6 wow animate__zoomIn">
                                <p> Howard Gardner, nascido em 11 de julho de 1943, é um psicólogo e educador
                                    norte-americano reconhecido por sua teoria das inteligências múltiplas. Professor na
                                    Universidade de Harvard, Gardner propôs que a inteligência não pode ser reduzida a
                                    uma única capacidade, mas se manifesta de várias formas, como linguística,
                                    lógico-matemática, musical, espacial, corporal-cinestésica, interpessoal e
                                    intrapessoal. Sua obra tem influenciado a educação e a compreensão da diversidade de
                                    habilidades cognitivas.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </div>
    </section>


    <!-- Botões de navegação -->
    <div class="text-center wow fadeIn" data-wow-delay="0.3s">
        <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                class="bi bi-chevron-right"></i></a>
    </div>


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