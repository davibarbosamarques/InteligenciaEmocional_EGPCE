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
                        <h2 class="Titulo fw-bolde wow fadeIn" data-wow-delay="0.3s">02 - Qual é a melhor inteligência?
                        </h2>
                        <!-- Título -->

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success m-5 wow fadeIn" data-wow-delay="0.3s">

                            <!-- blockquote do bootstrap -->
                            <figure class="d-flex justify-content-evenly">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="d-flex align-items-center">
                                            Se não podemos possuir o máximo grau de inteligência nos <br>
                                            nove tipos citados acima, talvez você tenha se questionado <br>
                                            quais deles você deveria optar por desenvolver, ou seja, <br>
                                            quais desses tipos de inteligência dão mais vantagens <br>
                                            aos indivíduos?
                                        </p>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <blockquote class="blockquote">
                                            <!-- Imagem - Inicio -->
                                            <div class="text-center img-01 wow animate__zoomIn">
                                                <p class="TituloFigura FonteMenor text-secondary p-2">
                                                    <strong>Figura 02:</strong>
                                                    Representação do cérebro racional e emocional
                                                </p>
                                                <div class="zoom">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#Imagem2">
                                                        <img src="imgs/topico02/Figura02.png"
                                                            alt="Imagem que remete a organização" id="img-1">
                                                    </a>
                                                </div>
                                                <p class="FonteFigura FonteMenor text-secondary">
                                                    <strong>Fonte:</strong> banco de imagens gratuitas, Canvas, 2020.
                                                </p>
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
                                                        <p class="text-secondary"><strong>Fonte:</strong> banco de
                                                            imagens
                                                            gratuitas, Canvas, 2020.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Imagem - End-->
                                    </div>
                                </div>
                                </blockquote>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->


                        <div class="container mt-4 wow animate__zoomIn">
                            <div class="cards card1">
                                <label id="summary">
                                    <input type="checkbox" />
                                    <article>
                                        <div class="front">
                                            <header>
                                                <h2><strong>Clique para saber mais</strong></h2>
                                                <span class="material-symbols-outlined"> <i
                                                        class="fa-regular fa-hand-pointer"
                                                        style="color: #fff"></i></span>
                                            </header>

                                            <p class="text-left paragrafo1">
                                                A resposta para esta pergunta é que o tipo de inteligência que você
                                                deseja possuir está
                                                relacionada ao tipo de atividade que pratica ou deseja praticar. Um
                                                indivíduo pode correr
                                                tão rápido quanto Usain Bolt, embora não seja capaz de influenciar
                                                milhares de pessoas como
                                                uma Oprah Winfrey. Outro pode desenvolver teorias utilizando física
                                                e matemática como Albert
                                                Einstein, mas esse mesmo indivíduo dificilmente conseguirá tocar ou
                                                compor como Amadeus
                                                Mozart. Ainda, alguém poderia construir monumentos e edifícios como
                                                Oscar Niemeyer, e ainda
                                                assim não ser capaz de copiar um único salto ornamental da Daiane
                                                dos Santos. Em resumo, não
                                                importa o quão genial uma pessoa possa ser em algo específico, ela
                                                jamais será capaz de se
                                                destacar em tudo.
                                            </p>

                                        </div>
                                        <div class="back">
                                            <header>
                                                <h2><strong>Clique para saber mais</strong></h2>
                                                <i class="fa-regular fa-hand-pointer" style="color: #fff"></i>
                                            </header>
                                            <div class="text-left">
                                                <p class="paragrafo fs-6">No entanto, a Inteligência Emocional, que
                                                    abrange
                                                    as inteligências
                                                    intrapessoal e
                                                    interpessoal, é fundamental em quaisquer tipos de trabalhos ou
                                                    atividades e, por esse
                                                    motivo, precisam ser desenvolvidas por todos. De fato, a
                                                    Inteligência Emocional é
                                                    considerada pelo <a
                                                        href="https://www.weforum.org/agenda/2020/02/emotional-intelligence-career-life-personal-development/"
                                                        target="_blank" class="aref">Fórum Econômico Mundial</a> como
                                                    uma das dez habilidades
                                                    mais importantes para a carreira, bem como um fator decisivo para
                                                    explicar a alta
                                                    performance e o sucesso da maioria dos profissionais (RATCHEVA,
                                                    LEOPOLD e SAA ZAHIDI, 2020).
                                                </p>
                                            </div>

                                        </div>
                                    </article>
                                </label>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Nossa sociedade, por muitas décadas, e mesmo nos dias atuais, tratou
                            de destacar
                            especialmente as inteligências ligadas à lógica matemática e
                            linguística, as quais costumam
                            ser muito importantes para as habilidades profissionais e técnicas
                            (OSHO, 2016).
                        </p>

                        <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
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
                                            Um exemplo que destaca bem essa preferência são os testes de QI que
                                            avaliavam as habilidades técnicas e cognitivas dos indivíduos relacionadas
                                            ao pensamento lógico, resolução de problemas, memorização, habilidades
                                            verbais, entre outras.

                                            <br><br>


                                        </p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <div class="alert alert-warning d-flex justify-content-center" role="alert">
                            <p class="fs-6">
                                Assista ao vídeo de Teste de QI de 5 Perguntas que Vai Detectar o Seu
                                Intelecto, do canal INCRÍVEL.
                            </p>
                        </div>

                        <!-- Iframe - video -->
                        <div class="container iframe-container wow animate__zoomIn" data-wow-delay="0.3s">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/bjdOErjaUeY?si=-UTzGSeG9XceeC51"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <!-- fim do Iframe -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Não por acaso, os pesquisadores acabaram formulando teorias que demonstravam que
                            apenas
                            uma pequena parcela da população era “muito inteligente”, sendo que a grande
                            maioria
                            estava na média ou mesmo abaixo dela. Ora, se nossas inteligências estão
                            distribuídas de
                            modo aleatório, obviamente apenas um pequeno grupo de pessoas será extremamente
                            eficiente em uma ou mais delas.
                        </p>

                        <!-- <p class="wow fadeIn" data-wow-delay="0.3s">
                            A partir desses resultados, percebeu-se que estes tipos de testes eram
                            extremamente
                            limitados e preconceituosos, visto que destacavam apenas um pequeno número de
                            habilidades humanas que não reflete a diversidade dos seres. Conforme destacado
                            acima,
                            cada tipo de atividade que um ser humano queira exercer estará relacionado a um
                            tipo de
                            inteligência distinta. Bill Gates, por exemplo, talvez não fizesse bom uso das
                            habilidades de um grande corredor, enquanto um esportista provavelmente não
                            precisa das
                            habilidades de um empreendedor.
                        </p> -->

                        <h5 class="text-center"><span class="badge bg-warning"><i class="bi bi-lightbulb-fill"></i> Clique para saber mais</span></h5>

                        <div class="container">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <h5>A partir desses resultados...</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">percebeu-se que estes tipos de testes eram
                                            extremamente
                                            limitados e preconceituosos, visto que destacavam apenas um pequeno número
                                            de
                                            habilidades humanas que não reflete a diversidade dos seres. Conforme
                                            destacado
                                            acima,
                                            cada tipo de atividade que um ser humano queira exercer estará relacionado a
                                            um
                                            tipo de
                                            inteligência distinta. Bill Gates, por exemplo, talvez não fizesse bom uso
                                            das
                                            habilidades de um grande corredor, enquanto um esportista provavelmente não
                                            precisa das
                                            habilidades de um empreendedor.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h5>Entretanto...</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">isso de modo algum nos autoriza a pensar que as
                                            habilidades de um milionário
                                            sejam mais importantes que as de um atleta. No entanto, socialmente, fomos
                                            condicionados a
                                            valorizar mais alguns tipos de habilidades - como as lógico-matemáticas - em
                                            prejuízo de
                                            outras - como as motoras e musicais.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <p class="wow fadeIn mt-2" data-wow-delay="0.3s">
                            Entretanto, isso de modo algum nos autoriza a pensar que as habilidades de um milionário
                            sejam mais importantes que as de um atleta. No entanto, socialmente, fomos condicionados a
                            valorizar mais alguns tipos de habilidades - como as lógico-matemáticas - em prejuízo de
                            outras - como as motoras e musicais.
                        </p> -->

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
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
                                            Um primeiro passo para corrigir essa desvalorização foi a criação de quadros
                                            de inteligências muito mais abrangentes, como o que já foi mencionado acima,
                                            proposto por Howard Gardner. Neste caso, quando adota-se o ponto de vista
                                            das múltiplas inteligências, um indivíduo “muito inteligente” seria aquele
                                            que pudesse mobilizar de forma eficiente o maior número de inteligências, e
                                            não apenas ser muito bom em algo. O motivo disso é que há vários exemplos de
                                            indivíduos extremamente habilidosos em um tipo de tarefa, mas que falham em
                                            tantas outras que são consideradas relativamente fáceis para a maioria dos
                                            indivíduos (HOWARD, 1999).
                                        </p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->

                        <P class="text-start">
                            No caso específico da Inteligência Emocional, é preciso considerar que,
                            independente da
                            capacidade que um indivíduo tenha para correr, dançar, escrever, cantar ou
                            resolver fórmulas
                            matemáticas, todos os seres humanos, para se construírem como indivíduos e se
                            relacionarem
                            com os demais, necessitam mobilizar as inteligências intrapessoal e
                            interpessoal, sendo elas
                            indispensáveis à convivência social.
                        </P>


                        <!-- <p class="text-right">
                            Como resultado disso, os indivíduos que não possuem nenhuma dessas inteligências
                            como
                            preponderantes necessitam aprender como desenvolvê-las. Talvez, por esta razão,
                            os livros e
                            treinamentos sobre o tema da inteligência emocional vêm sendo cada dia mais
                            disseminados.
                            Inclusive, você que se matriculou neste curso provavelmente está em busca de
                            aprender novas
                            técnicas que lhe possibilite dominar habilidades de desenvolvimento pessoal.
                        </p> -->

                        <h5 class="text-center"><span class="badge bg-warning"><i class="bi bi-lightbulb-fill"></i> Clique para saber mais</span></h5>

                        <div class="container">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            <h5>Como resultado disso...</h5>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                        os indivíduos que não possuem nenhuma dessas inteligências
                            como
                            preponderantes necessitam aprender como desenvolvê-las. Talvez, por esta razão,
                            os livros e
                            treinamentos sobre o tema da inteligência emocional vêm sendo cada dia mais
                            disseminados.
                            Inclusive, você que se matriculou neste curso provavelmente está em busca de
                            aprender novas
                            técnicas que lhe possibilite dominar habilidades de desenvolvimento pessoal.
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-light collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <h5>Como resultado disso...</h5>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">os indivíduos que não possuem nenhuma dessas inteligências
                            como
                            preponderantes necessitam aprender como desenvolvê-las. Talvez, por esta razão,
                            os livros e
                            treinamentos sobre o tema da inteligência emocional vêm sendo cada dia mais
                            disseminados.
                            Inclusive, você que se matriculou neste curso provavelmente está em busca de
                            aprender novas
                            técnicas que lhe possibilite dominar habilidades de desenvolvimento pessoal.</div>
                                </div>
                            </div> -->

                                <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                                <section class="container wow fadeIn" data-wow-delay="0.3s">
                                    <div class="accordion ">
                                        <section id="content">
                                            <div class="caixaprincipal" id="titulofiqueatento">
                                                <div class="div_teste">
                                                    <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE
                                                        ATENTO
                                                    </div>
                                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                                </div>
                                            </div> <!--caixa Principal-->
                                            <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                                    </strong>
                                                </p>
                                                <p class="txt-caixasecundaria">
                                                    A Inteligência Emocional inclui a flexibilidade emocional, empatia,
                                                    capacidade de gerenciar o estresse, autoconhecimento, autoestima,
                                                    entre
                                                    outros. Estas são habilidades que nos auxiliam a lidar com as nossas
                                                    emoções
                                                    e com as dos demais no dia a dia, e são especialmente úteis em
                                                    situações de
                                                    mudanças de ambiente e contexto (CURY, 2007).
                                                </p>
                                            </div>
                                        </section>
                                </section>
                                <!-- FIM DA CAIXA FIQUE ATENTO -->

                                <div class="container mt-4 wow animate__zoomIn">
                                    <div class="cards">
                                        <label id="summary">
                                            <input type="checkbox" />
                                            <article class="article-topico02">
                                                <div class="front">
                                                    <header>
                                                        <h2><strong>Clique para saber mais</strong></h2>
                                                        <span class="material-symbols-outlined"> <i
                                                                class="fa-regular fa-hand-pointer fs-4"
                                                                style="color: #fff"></i>
                                                        </span>
                                                    </header>

                                                    <p class="text-left paragrafo">
                                                        Isto ocorre porque pessoas com alta Inteligência Emocional
                                                        costumam ser
                                                        muito
                                                        eficazes em processos adaptativos, conseguindo facilmente
                                                        perceber
                                                        mudanças e se
                                                        ajustar a elas. Além disso, é bastante provável que elas
                                                        consigam
                                                        facilmente
                                                        conectar-se em novos relacionamentos interpessoais, o que
                                                        explica o fato
                                                        dela
                                                        ser um fator preponderante para quem trabalha com vendas e
                                                        negociações.
                                                    </p>

                                                </div>
                                                <div class="back">
                                                    <header>
                                                        <h2><strong>Clique para saber mais</strong></h2>
                                                        <i class="fa-regular fa-hand-pointer fs-4"
                                                            style="color: #fff"></i>
                                                    </header>
                                                    <div class="text-left">
                                                        <p class="paragrafo">
                                                            Por outro lado, uma baixa Inteligência Emocional pode nos
                                                            levar a
                                                            problemas de
                                                            comunicação, de interação com as novidades, e pode inclusive
                                                            nos
                                                            induzir a tomar
                                                            decisões precipitadas que geram conflitos ou danos contra a
                                                            própria
                                                            pessoa e os
                                                            outros (CURY, 2007).
                                                        </p>
                                                    </div>
                                                </div>
                                            </article>
                                        </label>
                                    </div>
                                </div>

                                <p class="wow fadeIN" data-wow-daley="0.3s">
                                    A baixa capacidade em compreender e lidar com as emoções também está associada a uma
                                    maior
                                    propensão para doenças mentais e físicas. Isto ocorre porque as emoções que não são
                                    bem
                                    processadas pelo indivíduo tendem a se acumular e causar problemas como ansiedade,
                                    estresse
                                    e depressão. Estes, por sua vez, podem prejudicar o sistema imunológico e causar
                                    outros
                                    tipos de doenças.
                                </p>

                                <p class="wow fadeIN" data-wow-daley="0.3s">
                                    Gerenciar as emoções não significa reprimir tudo aquilo que se apresenta
                                    imediatamente como
                                    negativo a fim de viver apenas as emoções positivas. Essa atitude nos levaria a
                                    ignorar
                                    parte da nossa existência e, na verdade, logo em seguida ela voltaria a se
                                    apresentar (CURY,
                                    2007).
                                </p>

                                <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                                <section class="container wow fadeIn" data-wow-delay="0.3s">
                                    <div class="accordion ">
                                        <section id="content">
                                            <div class="caixaprincipal" id="titulofiqueatento">
                                                <div class="div_teste">
                                                    <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE
                                                        ATENTO
                                                    </div>
                                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                                </div>
                                            </div> <!--caixa Principal-->
                                            <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                                    </strong>
                                                </p>
                                                <p class="txt-caixasecundaria">
                                                    A Inteligência Emocional está relacionada ao reconhecimento da nossa
                                                    posição
                                                    no mundo de uma forma que nos empodere em vez de nos limitar. Os
                                                    maiores
                                                    obstáculos para alcançar este estado emocional são justamente negar
                                                    a
                                                    realidade ou buscar manejá-la de acordo com nosso entendimento
                                                    pessoal. Ora,
                                                    a realidade não se adapta aos nossos desejos individuais, ao
                                                    contrário,
                                                    somos nós que devemos desenvolver as habilidades necessárias para
                                                    nos
                                                    adaptarmos ao nosso contexto.
                                                </p>
                                            </div>
                                        </section>
                                </section>
                                <!-- FIM DA CAIXA FIQUE ATENTO -->

                            </div>

                        </div>

                    </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center wow fadeIn" data-wow-delay="0.3s">
            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i
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