1'<!-- heade -->
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
                        <h2 class="Titulo fw-bolde wow fadeIn" data-wow-daley="0.3s">02 - Testando a Inteligência
                            Emocional</h2>
                        <!-- Título -->

                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-sm-12 col-md-6">
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 wow fadeInLeft" data-wow-delay="0.3s">
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

                            <div class="col-sm-12 col-md-6 wow fadeInRight" data-wow-delay="0.3s">
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

                        <h5 class="text-center wow animate__zoomIn mt-2" data-wow-delay="0.3s"><span
                                class="badge bg-warning p-2"><i class="bi bi-lightbulb-fill"></i>
                                Clique para saber mais</span></h5>

                        <div class="container wow animate__zoomIn" data-wow-delay="0.3s">
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
                                            Nos dois casos, é preciso investigar se o excesso ou a falta de positividade
                                            e autoestima são frutos da sua conexão com seu próprio ser ou se você está
                                            sendo manipulado pelo ego a ponto de perceber a realidade de forma forjada.
                                            Muitas vezes, pessoas que aparentam ser muito confiantes desabam diante de
                                            qualquer resposta negativa do ambiente, pois sua confiança não era real, mas
                                            um efeito do ego para esconder a baixa autoestima do indivíduo. A forma
                                            relativamente segura de saber se seus sentimentos são reais ou fictícios é
                                            saber se você se mantém em equilíbrio frente às diversidades.
                                        </p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <div class="row d-flex jusfity-content-between align-items-center div-img">

                            <div class="col-sm-12 col-md-6 wow fadeInLeft" data-wow-delay="0.3s">
                                <p class="wow fadeIn" data-wow-daley="0.3s">
                                    O ambiente em que um indivíduo está inserido pode incentivar a paz ou ativar
                                    diversos
                                    gatilhos mentais. Esses gatilhos estão relacionados ao que dissemos sobre a educação
                                    que nos
                                    foi ensinada com relação ao que é certo e errado, e também conecta-se com nossas
                                    crenças,
                                    cultura e traumas pessoais. A gestão das emoções não significa que o indivíduo
                                    passará a ter
                                    apenas emoções positivas. Nossas emoções são partes do nosso sistema e em si não são
                                    positivas ou negativas. A Inteligência Emocional nos indica que podemos, mesmo
                                    diante de
                                    emoções aparentemente negativas, reagir de forma positiva, evitando desencadear
                                    pensamentos
                                    obsessivos e nocivos ao indivíduo (CURY, 2007).
                                </p>
                            </div>

                            <div class="col-sm-12 col-md-6 img wow fadeInRight" data-wow-delay="0.3s">
                                <img src="imgs-pessoas/Group 2.png" alt="" class="w-100">
                                <div class="text-center">
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Imagem retirada do Freepik</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <p class="d-flex justify-content-center gap-1 mt-5 mb-5 collapse-pai wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="text-collapse body-collpse">
                                        Também não tenho a pretensão de defender que o indivíduo deverá passar a
                                        permitir que o
                                        ambiente em que está inserido lhe provoque emoções que lhe causam dor e que ele
                                        deve
                                        apenas
                                        pensar positivo em relação a elas. Na verdade, quando uma pessoa começa a nutrir
                                        profundo
                                        apreço por ela mesma, é bastante comum que ela passe a se afastar de vários
                                        tipos de
                                        situações e pessoas. Entretanto, sempre que isso não for possível, a pessoa
                                        ainda assim
                                        poderá administrar os conflitos da melhor forma possível caso desenvolva sua
                                        Inteligência
                                        Emocional.
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <p class="d-flex collapse-pai justify-content-center mb-5 gap-1 mt-5 wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample1">
                                    <div class="text-collapse body-collpse">
                                        Não existe, portanto, qualquer intenção de anular emoções “negativas” em favor
                                        de
                                        emoções
                                        que são consideradas positivas, mas de recepcionar igualmente todas as emoções e
                                        compreendê-las de modo que nossas reações diante delas possam ser conscientes e
                                        não
                                        inconscientes e reativas. Como mostramos no 4º (quarto) tópico do 1º (primeiro)
                                        módulo através da parábola da árvore dos
                                        desejos,
                                        nós
                                        criamos as nossas emoções e construímos o nosso próprio mundo.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container wow animate__zoomIN" data-wow-daley="0.3s">
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
                                        <p class="txt-caixasecundaria">
                                            Você deve estar se questionando de que forma pode aumentar a sua
                                            inteligência intrapessoal e promover o encontro com o seu eu interior,
                                            certo?
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <p class="wow fadeIn" data-wow-daley="0.3s">
                            Ao longo do módulo I deste curso, deixei algumas pistas quanto a isso, tais como fechar os
                            olhos e olhar para dentro de si, conversar consigo mesmo, questionar sobre sua própria
                            felicidade e manter um diário. Adicionalmente, gostaria de falar sobre o afastamento do ego
                            como um caminho fundamental para o encontro com o eu.
                        </p>

                        <div class="container mt-4 wow animate__zoomIN">
                            <div class="cards">
                                <label id="summary">
                                    <input type="checkbox" />
                                    <article class="article-index">
                                        <div class="front">
                                            <header>
                                                <h2><strong>Clique para saber mais</strong></h2>
                                                <span class="material-symbols-outlined"> <i
                                                        class="fa-regular fa-hand-pointer fs-4" style="color: #fff"></i>
                                                </span>
                                            </header>

                                            <figure class="text-light mt-4">
                                                <blockquote class="blockquote">
                                                    <p>
                                                        O ego nos engana sobre o nosso eu e isso impede que possamos
                                                        nos enxergar quando
                                                        fechamos os nossos olhos. Ele nos compara com os demais e
                                                        nos impele à
                                                        competição de querermos estar sempre certos sobre tudo, não
                                                        aceitando que as
                                                        outras pessoas tenham perspectivas diferentes da nossa.
                                                    </p>
                                                <figcaption class=" mt-3">
                                                    <cite title="Source Title">Osho, 2016</cite>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="back">
                                            <header>
                                                <h2><strong>Clique para voltar</strong></h2>
                                                <i class="fa-regular fa-hand-pointer fs-4" style="color: #fff"></i>
                                            </header>

                                            <figure class="text-light mt-2">
                                                <blockquote class="blockquote">
                                                    <p class="fs-6 mt-5">
                                                        Podemos pensar no ego como sendo o nosso eu social. Ele é
                                                        formado através da nossa educação e convivência social. É a
                                                        parte de nós que racionaliza e que filtra o nosso agir,
                                                        considerando não apenas os nossos impulsos e desejos pessoais,
                                                        mas também nos impelindo a seguir as regras sociais de educação,
                                                        cultura, religião, etc. O ego não é, portanto, algo nosso, mas
                                                        uma soma de tudo aquilo que nos é ensinado pelas outras pessoas.
                                                    </p>
                                                </blockquote>
                                                <figcaption class=" mt-3">
                                                    <cite title="Source Title">Osho, 2016</cite>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                </label>
                            </div>
                        </div>

                        <p class="wow fadeIn mt-4" data-wow-daley="0.3s">
                            O fato do ego nos ter sido dado de fora para dentro não significa que ele seja algo ruim.
                            Existe uma face do ego que é bastante positiva e está relacionada principalmente ao mundo do
                            trabalho e da convivência social. Desde crianças, somos ensinados a buscar ocupar o nosso
                            próprio lugar no mundo através do incentivo que os nossos cuidadores nos dão para
                            exercitarmos ou aprimorarmos determinadas atividades. Também é através do ego que somos
                            ensinados sobre o respeito e a estima que devemos dar aos outros e a reciprocidade que
                            devemos esperar dos demais.
                        </p>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container wow animate__zoomIn">
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
                                        <p class="txt-caixasecundaria">
                                            No entanto, em uma face um pouco menos positiva, o ego pode acabar se
                                            tornando um empecilho para o encontro do indivíduo com ele mesmo. Conforme
                                            mencionei no módulo I desse curso, nossa educação ocidental direciona nossos
                                            olhos para fora e não nos incentiva a olhar dentro de nós mesmos. Isso
                                            significa que muitos de nós não sabem o que se encontra por debaixo da
                                            máscara do ego, no seu próprio eu.
                                        </p>

                                        <p class="txt-caixasecundaria">
                                            Outro ponto negativo é que o ego frequentemente nos coloca em posição de
                                            comparação com as outras pessoas. Como o ego não olha para dentro, mas para
                                            fora, o indivíduo só consegue se compreender pela comparação com os demais.
                                            Isso pode ser potencialmente danoso em dois casos extremos: aquele em que o
                                            indivíduo se compara com os demais e se coloca sempre na posição de
                                            superior, ou aquele em que na comparação com os outros indivíduos sempre se
                                            sente na posição de inferioridade. Esses casos podem levar ao egocentrismo e
                                            à baixa autoestima.
                                        </p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->

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
                                            Cabe destacar aqui que o mesmo indivíduo que se sente na posição superior
                                            frequentemente possui problemas de baixa autoestima disfarçada de
                                            egocentrismo. Isso pode ser facilmente percebido quando o indivíduo recebe
                                            uma negativa de outra pessoa ou uma crítica em relação ao seu trabalho e se
                                            irrita, pois acha que aquela crítica é injusta e acredita que foi rebaixado.
                                            Nesse caso, temos um exemplo de falsa autoestima.
                                        </p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success m-3 wow fadeIn" data-wow-daley="0.3s">

                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p>
                                        <strong>O que vamos focalizar a partir de agora é na verdadeira autoestima. Ela
                                            advém do
                                            nosso eu interior e independe completamente do julgamento alheio</strong>.
                                        Vamos olhar
                                        para dentro de nós, não para fora. Não devemos nos comparar com os demais, pois
                                        dentro de nós não existe qualquer outro com o qual podemos nos comparar. Isso
                                        faz com que possamos perceber que cada indivíduo é absolutamente único e
                                        singular, impossível de ser comparado.
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer mt-3">
                                    <cite title="Source Title">OSHO, 2016.</cite>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <p class="d-flex justify-content-center gap-1 mt-5 mb-5 collapse-pai wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample2" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample2">
                                    <div class="text-collapse body-collpse">
                                        Também percebemos que somos os únicos capazes de julgarmos a nós mesmos, pois o
                                        outro, aquele que nos julga do lado de fora, não conhece de fato o nosso próprio
                                        ser. Isso nos conduz a uma atitude muito mais tolerante em relação às críticas,
                                        especialmente àquelas que julgamos ser injustas, pois compreendemos que aquele
                                        indivíduo nos critica por não conhecer o nosso verdadeiro interior.
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <p class="d-flex collapse-pai justify-content-center mb-5 gap-1 mt-5 wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample3" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample3">
                                    <div class="text-collapse body-collpse mb-3">
                                        Também é bastante comum que, ao olharmos para o nosso interior, passemos a
                                        assumir uma posição de autoconhecimento e de autovalorização. No nosso eu
                                        verdadeiro, podemos apreciar o nosso ser e todas as nossas características,
                                        sejam elas consideradas qualidades ou defeitos. O ego quer sempre ser melhor e
                                        por isso somos constantemente impelidos a melhorarmos a nós mesmos. Porém,
                                        quando tentamos ser melhores, tendemos a focalizar em tudo que está errado e que
                                        precisa de conserto. Nos tornamos neuróticos em olhar nosso pior lado.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center">
                            <div class="col-sm-12 col-md-6 img wow fadeInLeft" data-wow-delay="0.3s">
                                <img src="imgs-pessoas/Group 6.png" class="w-75" alt="">
                                <div class="text-center">
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Imagem retirada do Freepik</p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 wow fadeInRight" data-wow-delay="0.3s">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    Quando olhamos para dentro, apenas interessados em compreender quem somos, passamos
                                    a
                                    entender que todos os seres humanos são constituídos de pontos fortes e pontos
                                    fracos. Não
                                    focamos naquilo que nos é desfavorável, mas no conjunto geral que nos constitui.
                                </p>

                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    Se quisermos, podemos conscientemente focar nos nossos pontos fortes, utilizando
                                    tudo o que
                                    já aprendemos sobre como construir nossa própria realidade. Isso nos ajudará a
                                    construir uma
                                    autêntica autovalorização que será inabalável, mesmo diante das críticas externas.
                                    Obviamente, isso não fará com que os nossos defeitos sejam apagados, porém, a
                                    próxima vez
                                    que percebemos que falhamos em algo, podemos simplesmente consertar este algo sem
                                    tomarmos
                                    qualquer posição de culpa ou sem que isso nos leve a pensar que somos constituídos
                                    apenas
                                    por defeitos.
                                </p>


                            </div>
                        </div>
                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Aqui é muito importante considerar que a culpa que sentimos geralmente está relacionada ao
                            não atendimento das expectativas das outras pessoas, justamente porque estamos olhando para
                            fora e não para dentro. Quando olhamos o nosso interior, sabemos que aquele defeito é apenas
                            um pequeno pedaço do nosso ser e que há muitos outros motivos para nos valorizarmos. Ainda,
                            percebemos que aquele pequeno ponto em que fomos falhos ou criticados pode ser simplesmente
                            aprimorado sem nenhuma culpa, afinal, todos os indivíduos possuem seus próprios pontos
                            fracos. Olhar para dentro de si significa perceber que todas as pessoas são muito especiais.
                        </p>

                        <!--  divs do conteudo todo -->

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container wow animate__zoomIN" data-wow-delay="0.3s">
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
                                        <p class="txt-caixasecundaria">
                                            Eu gostaria de lhe fazer uma pergunta: como você costuma tratar uma pessoa
                                            muito especial para você? Agora me responda: será que você se trata tão bem
                                            quanto trata essa pessoa?.
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            No módulo I do nosso curso, aprendemos que o nosso olhar para fora nos torna extremamente
                            dependentes das outras pessoas. Voltamos o nosso cuidado e atenção para o outro e esperamos
                            que o outro possa voltar o seu cuidado e atenção para nós, o que nem sempre acontece.
                        </p>


                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout wow fadeIn  m-3" data-wow-delay="0.3s" id="citacao-amarela">

                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p>
                                        Eu gostaria de lhe fazer um convite que vai na direção oposta: comece a cuidar
                                        de si mesmo e a se tratar maravilhosamente bem. Para lhe guiar nessa nova
                                        perspectiva, apresentarei um trecho da Oração de São Francisco. Ela não possui
                                        nenhum conteúdo religioso para este curso, mas possui um valor humano muito
                                        importante pelo seu conteúdo, pois fala de como nos relacionamos com os demais.
                                    </p>

                                    <p>
                                        Resolvi recortar este pequeno trecho pois é uma oração conhecida pela grande
                                        maioria de nós. O trecho diz o seguinte: <strong class="fst-italic">“Onde houver
                                            ódio, que eu leve o amor;
                                            (...) onde houver desespero, que eu leve a esperança; onde houver tristeza,
                                            que
                                            eu leve alegria”</strong>. Percebemos que nesse trecho há alguém com
                                        bastante vontade de
                                        ajudar e levar o bem às outras pessoas, transformando estados emocionais
                                        negativos em positivos. Sem dúvida, seria maravilhoso se todas as pessoas
                                        pudessem levar o espírito desse trecho em suas vidas sociais todos os dias.
                                    </p>
                                </blockquote>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Porém, o desafio que quero lhe fazer neste momento é para que você utilize este mesmo
                            espírito consigo mesmo. Que você olhe para dentro de si sem ódio, sem culpa, sem mágoas, sem
                            tristezas, sem se sentir decepcionado consigo mesmo por tudo aquilo que fez errado. Ao
                            contrário, olhe para dentro de si com amor, com alegria, com esperança e com todos os
                            sentimentos positivos que nós costumamos oferecer para todas as pessoas que consideramos
                            especiais.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            É disso que se trata o amor-próprio. Não faz nenhum sentido que nós nos tratemos pior do que
                            tratamos as outras pessoas porque ninguém é melhor ou pior do que ninguém. Portanto, no
                            mínimo, merecemos tratamento semelhante. Cada um de nós é singular e especial à sua própria
                            maneira.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Um outro texto desta mesma oração nos indica o seguinte: <strong class="fst-italic">“fazei
                                que eu procure mais consolar
                                que ser consolado, compreender que ser compreendido, amar que ser amado, pois, é dando
                                que
                                se recebe”</strong>. Eu gostaria de ressaltar mais uma vez que não estou analisando o
                            valor religioso
                            desta oração. Você tem todo o direito de ter ou não qualquer religião. Mas podemos extrair
                            seu valor social para nos iluminar em relação ao fato de que esta pequena passagem nos
                            ensina a esperar menos das outras pessoas. Agir sem criar expectativas de retorno. Isso é
                            bastante útil para mantermos nossa inteligência emocional equilibrada.
                        </p>

                        <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                        <section class="container wow animate__zoomIN" data-wow-daley="0.3s">
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
                                            Esperar o retorno das outras pessoas pode nos causar frustração, enquanto a
                                            doação desinteressada depende apenas de nós mesmos. Agora imagine se você
                                            conseguir ser tão generoso consigo mesmo quanto é para com as demais
                                            pessoas, que incrível seria, você não acha?.
                                        </p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <p class="wow fadeIn" data-wow-daley="0.3s">
                            Refiro-me à possibilidade que temos de compreendermos a nós mesmos, sem esperar compreensão
                            das outras pessoas. Amar a nós mesmos, ainda que nenhuma outra pessoa nos ame. Doar-nos a
                            nós mesmos. Cuidar da nossa saúde e do nosso bem estar pelo nosso próprio bem.
                        </p>

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success m-3 wow fadeIn" data-wow-daley="0.3s">

                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p>
                                        Você deve estar se questionando nesse ponto qual o valor de todas essas
                                        informações, como tudo isso se relaciona com inteligência intrapessoal, e como
                                        lhe ajudará a resolver os seus problemas como depressão e ansiedade, certo? Uma
                                        informação muito importante com relação a isso é que eu quero que você perceba
                                        que o ego sempre vive no tempo passado ou no tempo futuro, enquanto que o “eu”
                                        só consegue existir no presente.
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer mt-2">
                                    <cite title="Source Title">(OSHO, 2016).</cite>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->

                        <p class="wow fadeIn" data-wow-daley="0.3s">
                            Todas as vezes que pensamos através do registro do ego, tendemos a olhar para o passado nos
                            culpando pelas nossas falhas e, em seguida, olhamos para o futuro para planejar como podemos
                            agir no sentido de melhorar aquilo que fizemos de errado ontem. Por outro lado, o nosso eu
                            sempre existe apenas no momento presente. Nós não buscamos nos conhecer, nos amar e nos
                            encher de alegrias nem no passado e nem no futuro, mas no agora. Me sinto feliz agora. Me
                            amo neste momento.
                        </p>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container wow animate__zoomIN" data-wow-daley="0.3s">
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
                                        <p class="txt-caixasecundaria">
                                            Você já deve ter ouvido falar que a depressão está relacionada com o excesso
                                            de passado, enquanto a ansiedade está relacionada ao excesso de futuro.
                                            Esses estados emocionais nos indicam que o indivíduo tem dificuldade de
                                            viver no presente e de estar completamente focado no agora. Como
                                            consequência, o indivíduo que se sente deprimido ou ansioso coloca sua
                                            atenção naquilo que o ego lhe solicita e não nas necessidades reais do seu
                                            próprio ser (CURY, 2007).
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-sm-12 col-md-6 wow fadeInLeft" data-wow-daley="0.3s">
                                <p>
                                    A pessoa com depressão sofre porque no passado tomou determinadas atitudes ou porque
                                    certas pessoas a magoaram. Às vezes, ela se sente triste por ter sido boa e não ter
                                    recebido bondade em retorno. Nestes casos, ela está focalizando sua energia na culpa
                                    e, muitas vezes, na culpa que nem é dela mesma. Se este é o seu caso, eu gostaria
                                    que compreendesse que pode sair deste estado emocional agora mesmo sem nenhum
                                    esforço. Como? Você deve simplesmente cair no seu próprio ser e perceber que toda a
                                    culpa e mágoa que carrega de si mesmo não tem qualquer sentido.
                                </p>

                                <p>
                                    Se, ao invés de olhar para fora pensando em tudo que passou, você fechar os olhos e
                                    olhar para dentro buscando compreender a si mesmo, reconhecer as próprias qualidades
                                    e se amar no registro da aceitação e não do julgamento e da crítica, seu estado
                                    depressivo perderá qualquer sentido.
                                </p>

                                <p>
                                    É claro que temos aqui que salientar que a nossa mente tende a repetir os nossos
                                    estados emocionais. Isso significa que mesmo que você, por um momento, olhe para
                                    dentro de si e encontre extrema felicidade, seu estado depressivo anterior tenderá a
                                    voltar na sua mente por diversas vezes. Ele é uma espécie de vício da mente do qual
                                    você necessitará se desintoxicar. O modo de afastar a tentação da mente é buscando
                                    voltar a sua atenção sempre para o presente, onde é a morada do seu eu interior.
                                </p>
                            </div>

                            <div class="col-sm-12 col-md-6 wow fadeInRight" data-wow-daley="0.3s">
                                <img src="imgs-pessoas/Group 4.png" alt="" class="w-100">
                                                                <div class="text-center">
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Imagem retirada do Freepik</p>
                                </div>
                            </div>
                        </div>

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout wow fadeIn  m-3" data-wow-delay="0.3s" id="citacao-amarela">

                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p>
                                        Uma ferramenta importantíssima para se manter no presente é a utilização de
                                        meditação. Talvez você já tenha tentado fazer alguma meditação e não tenha
                                        conseguido alcançá-la totalmente. Eu lhe aconselho a buscar as meditações
                                        guiadas ou dirigidas, pois elas nos ajudam a focalizar melhor a nossa atenção. A
                                        meditação tem a capacidade de modificar o nosso estado mental, trazendo mais
                                        equilíbrio e tranquilidade mesmo em momentos de desarmonia ou irritação.
                                    </p>
                                </blockquote>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->

                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-sm-12 col-md-6 wow fadeInLeft" data-wow-daley="0.3s">
                                <img src="imgs-pessoas/Group 11.png" alt="" class="w-100">
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Imagem retirada do Freepik</p>
                            </div>

                            <div class="col-sm-12 col-md-6 wow fadeInRight" data-wow-daley="0.3s">
                                <p>
                                    Quando olhamos para dentro, afastamos de nós toda a distração que estava relacionada
                                    às expectativas que criamos sobre as outras pessoas. Se dedicamos o nosso amor para
                                    alguém e esse alguém não foi recíproco, tudo bem, pois eu mesmo posso dedicar este
                                    mesmo amor para mim. Se alguém tomou uma atitude que foi injusta do seu ponto de
                                    vista, quando você exercita a sua inteligência emocional, percebe que aquele ser
                                    humano apenas agiu de acordo com aquilo que lhe foi ensinado e que qualquer problema
                                    que ele possa ter é um problema dele consigo mesmo e não com você.
                                </p>

                                <p>
                                    Quando você se conhece e se ama verdadeiramente, as outras pessoas não têm a menor
                                    capacidade de abalar a sua felicidade, a não ser momentaneamente. As atitudes do
                                    outro podem nos entristecer, mas se o nosso estado mental estiver direcionado para o
                                    amor-próprio e para a autofelicidade, logo voltaremos a olhar para dentro de nós e
                                    perceberemos toda beleza e abundância que está em nosso interior.
                                </p>
                            </div>
                        </div>

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success m-3 wow fadeIn" data-wow-daley="0.3s">

                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p>
                                        Novamente, quero ressaltar que o autoamor não indica que o indivíduo não vai
                                        buscar o automelhoramento, mas que ele faz isso pelo sentimento de vontade de
                                        mudança e não como um autocrítica e autojulgamento. Ele fará isso sem sentimento
                                        de culpa e ansiedade.
                                    </p>
                                </blockquote>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <p class="d-flex justify-content-center gap-1 mt-5 mb-5 collapse-pai wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample4" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample4">
                                    <div class="text-collapse body-collpse">
                                        A ansiedade é comumente caracterizada como o excesso de futuro. O indivíduo não
                                        olha tanto para o ontem, mas está funcionando com olhos sempre voltados para o
                                        amanhã ou para aquilo que ainda não realizou. O grande problema é que, quando os
                                        nossos olhos estão direcionados para o horizonte do futuro, nós esquecemos de
                                        valorizar o nosso presente e as nossas conquistas. O indivíduo pode trabalhar
                                        muito e ser extremamente bem-sucedido e, ainda assim, não conseguir parar por um
                                        momento para apreciar os frutos do seu próprio esforço, pois estará sempre
                                        pensando no próximo passo e no amanhã (CURY, 2007).
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <p class="d-flex collapse-pai justify-content-center mb-5 gap-1 mt-5 wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample5" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample5">
                                    <div class="text-collapse body-collpse">
                                        O oposto ocorre quando o indivíduo fecha os olhos, olha para dentro de si e se
                                        interroga sobre as suas emoções, pois, nesse caso, ele estará focalizando apenas
                                        no presente. Quando você estiver se sentindo extremamente ansioso, tente parar
                                        por uns instantes, fechar os olhos e se questionar: como eu estou me sentindo
                                        hoje? Estou feliz? Minhas emoções nesse momento são positivas e agradáveis? Se
                                        não são positivas, tenho de fato uma razão real para me sentir dessa forma?
                                        Quando a nossa mente está focalizada no agora, temos uma maior possibilidade de
                                        apreciar tudo aquilo que já possuímos e podemos colocar o nosso estado mental
                                        fora do registro da expectativa e dentro do registro da gratidão.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-daley="0.3s">
                            Obviamente, se quisermos, podemos focalizar em tudo que está errado, pois segundo a parábola
                            da árvore dos desejos, nós sempre podemos criar o nosso próprio céu e o nosso próprio
                            inferno. No entanto, meu conselho é para que você olhe para dentro de si e reconheça tudo
                            aquilo que está certo e errado, mas que, no final das contas, possa focalizar em tudo o que
                            for positivo e agir para mudar tudo aquilo que está negativo, sem qualquer culpa ou
                            julgamento. Essa nova atitude tenderá a nos deixar mais confortáveis conosco e a afastar as
                            expectativas do futuro que nos causam ansiedade.
                        </p>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container wow animate__zoomIN" data-wow-daley="0.3s">
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
                                        <p class="txt-caixasecundaria">
                                            Em síntese, uma inteligência intrapessoal equilibrada pode ser compreendida
                                            como assumir atitudes e padrões mentais que nos direcionam ao
                                            autoconhecimento, autocuidado e autoamor, e que são vividas no tempo
                                            presente. Por outro lado, a baixa inteligência intrapessoal nos leva a
                                            padrões mentais negativos que nos prendem ao passado ou ao futuro, nos
                                            impedindo de viver em felicidade e gratidão.
                                        </p> <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->

                        <div class="row destaque">
                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center col-md-6 img-01">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 03:</strong>
                                        Foto de Augusto Cury.</p>
                                    <div class="zoom">
                                        <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem3">
                                            <img src="imgs/topico02/curry.png" alt="Imagem que remete a organização" id="img-1">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Wikimedia Commons.
                                    </p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem3" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/topico02/curry.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte:</strong> Wikimedia Commons.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem - End-->

                                <!-- FIM DA IMAGEM NO SITE  -->
                        
                                <div class="col-md-6 d-flex align-items-center">
                                <div class="wow fadeInRight">
                                <h4 class="mb-3 mt-3 text-center">Explorando Grandes Mentes</h4>
                                    <p class="" data-wow-delay="0.5s">Augusto Cury é uma verdadeira referência quando se trata de conhecimento sobre a mente humana e emoções. Como renomado médico psiquiatra, psiciterapeuta e escritor, suas palestras são aclamadas por proporcionarem uma visão única e profunda do funcionamento da mente e da inteligência emocional.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <script>
            AOS.init();
        </script>

        <!-- Botões de navegação -->
        <div class="text-center wow fadeIn" data-wow-delay="0.3s">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i
                    class="fa-solid fa-chevron-left"></i> Voltar</a>
                    
            <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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