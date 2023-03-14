<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Last of Us - Série (Bootstrap)</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- <link rel="stylesheet" href="./src/css/master.css"> -->
    <link rel="stylesheet" href="./src/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/style.css">

</head>

<body>
    <main class="position-fixed min-vh-100 vw-100 z-n1">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./src/img/tlou-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/tlou-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/tlou-1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

            <div class="carousel-indicators botao">
                <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="botao active" aria-current="true" aria-label="Slide 1"></button>
                <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="botao" aria-label="Slide 2"></button>
                <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="botao" aria-label="Slide 3"></button>
            </div>

        </div>
        <!-- <div class="carrossel">
            <img class="img ativa" src="./src/img/tlou-1.jpg" alt="Ellie e Joel abraçados">

            <img class="mw-100 img" src="./src/img/tlou-2.jpg" alt="Personagens The Last of Us">

            <img class="mw-100 img" src="./src/img/tlou-3.jpg" alt="Joel olhando pela janela">

            <img class="mw-100 img" src="./src/img/tlou-4.jpg" alt="Ellie e Tess se olhando">

            <img class="mw-100 img" src="./src/img/tlou-5.jpg" alt="Ellie e Joel caminhando em uma cidade destruída">

            <img class="mw-100 img" src="./src/img/tlou-6.jpg" alt="Joel segurando uma lanterna ligada na mão direita">
        </div> -->

        <div class="container d-flex flex-column min-vh-100 justify-content-evenly">
            <div class="informacoes">
                <img class="logo" src="./src/img/logo.png" alt="logo The Last of Us">

                <p class="descricao lh-sm col-md-6">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur repellendus ratione iusto doloribus aliquam ullam minus, molestiae minima iure at dicta eum expedita sunt non animi beatae, provident nulla totam.
                </p>
            </div>

            <!-- <div class="botoes-carrossel">
                <button class="botao selecionado"></button>
                <button class="botao"></button>
                <button class="botao"></button>
                <button class="botao"></button>
                <button class="botao"></button>
                <button class="botao"></button>
            </div> -->
        </div>

        <aside class="menu-lateral">
            <ul>
                <li>
                    <a href="#" target="_blank">
                        <img src="./src/img/github.svg" alt="ícone GitHub" class="icone">
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <img src="./src/img/linkedin-in.svg" alt="ícone LinkedIn" class="icone">
                    </a>
                </li>
            </ul>
        </aside>
    </main>

    <!-- <script src="./src/js/script.js"></script> -->
    <script src="./src/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>