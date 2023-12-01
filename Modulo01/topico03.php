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

                        <h2 class="Titulo fw-bolder">03 - Você se considera emocionalmente inteligente?</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <p class="wow fadeInLeft" data-wow-delay="0.5s">Poucos de nós fomos ensinados a
                                    questionar sobre a nossa capacidade de compreender a nós mesmos e aos outros. Seus
                                    cuidadores na infância provavelmente lhe ensinaram a respeitar as outras pessoas,
                                    especialmente as mais velhas e as figuras hierárquicas, e também a amar o próximo e
                                    a tratar os demais com gentileza.</p>
                                <br>
                                <p class="wow fadeInLeft" data-wow-delay="0.8s">Infelizmente, poucas pessoas estimuladas
                                    a respeitarem a si mesmas e a se tratarem com a mesma gentileza. O autorrespeito e o
                                    autocuidado são tomados como certos, como algo natural e, por isso, muitos pensam
                                    que eles não necessitam ser ensinados. Porém, se isso fosse verdade, não veríamos
                                    tantos casos de pessoas envolvidas em relações tóxicas.</p>
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center img-01 wow animate__zoomIn">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                        Representação
                                        do tempo na mente humana</p>
                                    <div class="zoom">
                                        <a href="imagens/Figura01.png" data-bs-toggle="modal"
                                            data-bs-target="#Imagem01">
                                            <img src="imgs/topico03/Figura03.jpg" alt="Imagem que remete a organização"
                                                id="img-1">
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
                                            <img class="img-fluid" src="imgs/topico03/Figura03.jpg"
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
                        <p class="wow fadeIn" data-wow-delay="0.3s">É bastante comum que os pais ensinem aos filhos a se
                            protegerem dos perigos externos. Ainda, mesmo que as crianças saibam como “jamais levar
                            desaforo para casa” ou “nunca apanhar das outras crianças”, isso pode, em alguma medida, ser
                            considerado como autocuidado. Também é bastante óbvio que atender às nossas necessidades
                            biológicas - tais como comer, beber e dormir - é um cuidado que temos com o nosso corpo.</p>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">No entanto, mesmo nesses aspectos mais básicos da
                                            vida, podemos perceber que poucos de nós fomos ensinados a refletir sobre
                                            como o que comemos, bebemos ou o modo como dormimos, afeta a nossa
                                            felicidade ou bem-estar, por exemplo. Em alguns ambientes familiares, nossos
                                            pais ou companheiros são bastantes gentis e nos questionam, por exemplo,
                                            sobre a qualidade do nosso sono ao amanhecer, mas você provavelmente nunca
                                            acordou e conversou consigo mesmo sobre o quão bem ou mal dormiu. Talvez
                                            você jamais tenha pensado sobre isso.
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->


                        <div class="container wow animate__zoomIn">
                            <div class="cards">
                                <label id="summary">
                                    <input type="checkbox" />
                                    <article>
                                        <div class="front">
                                            <header>
                                                <h2>Clique para saber mais</h2>
                                                <span class="material-symbols-outlined"><i
                                                        class="fa-regular fa-hand-pointer"
                                                        style="color:white"></i></span>
                                            </header>

                                            <p class="fs-6 text-left">Mesmo no imaginário popular existe o desestímulo a tal
                                                prática, e quem descobrir que você está conversando consigo mesmo
                                                perguntará se está em seu pleno juízo ou se ficou louco. Este tipo de
                                                ideia é extremamente prejudicial, pois nos torna dependentes da
                                                gentileza das outras pessoas para verificarmos como estão as nossas
                                                emoções e qualidade de vida. Porém, temos total capacidade de
                                                conhecermos a nós mesmos. Além disso, terceirizar esses questionamentos
                                                nos coloca na expectativa com relação aos gestos das outras pessoas e
                                                nos frustra quando pensamos que o outro “não está nem aí pra nós”.</p>

                                        </div>
                                        <div class="back">
                                            <header>
                                                <h2>Clique para voltar</h2>

                                                <span class="material-symbols-outlined"><i
                                                        class="fa-regular fa-hand-pointer"
                                                        style="color:white"></i></span>
                                            </header>
                                            <div class="text-left">
                                                <p class="fs-6">Em contrapartida, é bastante importante que consigamos
                                                    compreender que cada um é responsável por si mesmo e pelo próprio
                                                    bem-estar. Ao entendermos esta realidade, somos empoderados com a
                                                    capacidade de tornarmos a nós mesmos pessoas mais felizes ao
                                                    focalizarmos a nossa atenção em nós mesmos, compreendendo nossas
                                                    emoções e necessidades. Para tanto, precisamos apenas interrogar o
                                                    nosso eu, conversando conosco, com o nosso ser. Esta é, sem dúvida,
                                                    a mais saudável conversação que você encontrará. Aqui, eu gostaria
                                                    de chamar sua atenção para uma questão muito importante:</p>
                                            </div>

                                        </div>
                                    </article>
                                </label>
                            </div>
                        </div>

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success bd-topico04-2 m-3">
                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p><strong>Se você não consegue compreender a si mesmo, como poderá comunicar sobre
                                            você às outras pessoas?</strong></p>
                                </blockquote>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Você já deve ter observado que é comum que as
                            pessoas se sintam desconfortáveis quando em uma entrevista ou conversa inicial alguém lhes
                            faz perguntas que levam à reflexão interna. Separei aqui algumas perguntas que são
                            frequentes em ocasiões como essas e gostaria que você verificasse quantos desses
                            questionamentos é capaz de responder imediatamente.</p>

                        <div class="container">
                            <div class="caderno">
                                <p class="dica">Pegue uma folha em branco e escreva essas perguntas e em seguida
                                    responda. Ao final faça uma reflexão e dê continuidade ao curso.</p>
                                <ol class="listacaderno">

                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="0.1s">Você pode falar um
                                        pouco sobre você?</li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="0.3s">Por que você quer
                                        este trabalho?</li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="0.5s">Quais são os seus
                                        pontos fortes?</li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="0.7s">Qual é a sua cor
                                        favorita?</li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="0.9s">Como você lida com
                                        pressões ou situações estressantes?</li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="1.1s">Como você reage às
                                        críticas?</li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="1.3s">Que hobbies você
                                        tem fora do trabalho?</li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="1.5s">O que lhe motiva?
                                    </li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="1.7s">Qual o seu maior
                                        fracasso?</li>
                                    <li class="itemlistacaderno wow fadeInLeft" data-wow-delay="1.9s">O que lhe deixa
                                        desconfortável?</li>

                                </ol>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">Estas perguntas estão entre as mais comuns quando
                            alguém tem a intenção de nos conhecer. Ora, a única forma que aquele ser humano desconhecido
                            tem de saber sobre você é lhe interrogando. E você, como conhece a si mesmo? Certamente não
                            é pela simples convivência que tem consigo pois, se fosse assim, seria muito fácil responder
                            a estas perguntas.</p>

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success m-3 wow fadeIn" data-wow-delay="0.3s">

                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p> Conhecer a si mesmo implica questionar-se, fazer estas perguntas na sua
                                        intimidade, pois a simples convivência leva ao efeito contrário. Convivemos
                                        tanto tempo com nós mesmos que nos tornamos familiarizados a ponto de não
                                        conversarmos conosco, e acabamos por dar ouvidos ao que outras pessoas nos dizem
                                        sobre nós. Por melhor que seja a intenção dessas pessoas, ninguém pode de fato
                                        lhe conhecer e cada impressão pessoal pode lhe tornar confuso, pois a tendência
                                        é que cada um lhe dê um feedback diferente sobre você.</p>
                                </blockquote>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">É fundamental que você conheça a si mesmo, e que
                            faça com que seus olhos que olham para fora sejam direcionados para dentro. Quando abrimos
                            os olhos, vemos o mundo, mas quando os fechamos, vemos a nós mesmos. Para alguns, fechar os
                            olhos é ver apenas escuridão ou nada ver; porém qualquer um que, algum dia, tenha feito uma
                            meditação, por exemplo, entende que, ao fecharmos os olhos, nos voltamos para o nosso
                            universo e ele é tão ilimitado que podemos imaginá-lo sendo escuro ou sendo o lugar mais
                            iluminado que existe.</p>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container">
                            <div class="accordion">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloimportante">
                                        <div class="div_teste">
                                            <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="importante">
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">Eu gostaria que você prestasse bastante atenção
                                            nesse ponto: o mundo exterior, aquele que olhamos enquanto estamos com os
                                            olhos abertos, é um mundo limitado e, conforme expliquei antes, restringe
                                            nossas ações a todo momento. Por outro lado, nosso mundo interior, aquele
                                            que observamos enquanto fechamos os olhos, é ilimitado e completamente
                                            acessível, dependendo exclusivamente da nossa própria vontade. Sendo assim,
                                            em qual desses mundos você imagina que um ser humano pode se sentir mais
                                            confortável e emocionalmente seguro? No mundo exterior - em que ele é, a
                                            todo momento, limitado em suas ações - ou no mundo interior - onde ele está
                                            absolutamente sobre o seu próprio domínio?</p> <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">O mundo exterior não atende às nossas vontades, pois
                            não podemos modificá-lo ao nosso prazer. Contudo, de certo modo, podemos sim mudar a
                            realidade - pelo menos aquela que olhamos com a nossa perspectiva - estando sempre
                            conscientes de que esta será sempre a nossa visão particular da realidade e não a realidade
                            em si. Trata-se de adaptar a nossa perspectiva sobre a realidade, sem tentar impor esta
                            mesma visão aos demais ou cair na ilusão de que nossa visão é a correta e verdadeira,
                            desmerecendo todas as outras perspectivas.</p>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container">
                            <div class="accordion">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloimportante">
                                        <div class="div_teste">
                                            <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="importante">
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">Quanto a isto, gostaria que você prestasse
                                            atenção em uma história que reflete exatamente como cada pessoa pode criar o
                                            seu próprio paraíso e também o seu próprio inferno interior. Conscientes
                                            disso, podemos adicionar prazer e felicidade em nossas vidas, ou, quando não
                                            estamos em alerta sobre isso, podemos ficar a mercê de todo tipo de
                                            acontecimento aleatório e fruto de medos e padrões negativos.</p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->
                    </div>
                </div>


                <!-- Botões de navegação -->
                <div class="text-center wow fadeIn" data-wow-delay="0.3s">
                    <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                            class="fa-solid fa-chevron-left"></i> Voltar </a>
                    <a href="topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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