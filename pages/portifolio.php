<?php
    global $tituloPage;
    $tituloPage = "Portifólio";
    include('../parts/cabecalho.php'); 
?>
        <header class="page-cabecalho">
            <h1 class="page-cabecalho-titulo">Portifólio</h1>
        </header>
        <section class="page-conteudo">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Consequuntur explicabo fugiat cumque earum consequatur unde provident ab porro!<br> Officia eos accusamus eveniet reprehenderit fuga explicabo dolores repellendus dolor porro sequi.</p>
            <nav>
                <ul class="lista-trabalho">
                    <li class="lista-trabalho-item">
                        <a data-fancybox="gallery" href="../img/portfolio/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalho-img" src="../img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="">
                            <h2 class="lista-trabalho-titulo">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalho-item">
                        <a data-fancybox="gallery" href="../img/portfolio/gear-2291916_1280.jpg">
                            <img class="lista-trabalho-img" src="../img/portfolio/miniaturas/gear-2291916_min.jpg" alt="">
                            <h2 class="lista-trabalho-titulo">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalho-item">
                        <a data-fancybox="gallery" href="../img/portfolio/hong-kong-1990268_1280.jpg">
                            <img class="lista-trabalho-img" src="../img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="">
                            <h2 class="lista-trabalho-titulo">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalho-item">
                        <a data-fancybox="gallery" href="../img/portfolio/landscape-2268775_1280.jpg">
                            <img class="lista-trabalho-img" src="../img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="">
                            <h2 class="lista-trabalho-titulo">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalho-item">
                        <a data-fancybox="gallery" href="../img/portfolio/saddle-2614038_1280.jpg">
                            <img class="lista-trabalho-img" src="../img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="">
                            <h2 class="lista-trabalho-titulo">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalho-item">
                        <a data-fancybox="gallery" href="../img/portfolio/town-2430571_1920.jpg">
                            <img class="lista-trabalho-img" src="../img/portfolio/miniaturas/town-2430571_min.jpg" alt="">
                            <h2 class="lista-trabalho-titulo">Nome do trabalho</h2>
                        </a>
                    </li>

                </ul>
            </nav>
        </section>
<?php include('../parts/rodape.php'); ?>