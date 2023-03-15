<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Last of Us - Série (Bootstrap)</title>
    <!-- CARREGAR FONT POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
    <!-- PÁGINA DE ESTILOS PERSONALIZADA -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- PÁGINA DE ESTILOS DO BOOTSTRAP 5 -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <main class="position-fixed min-vh-100 vw-100">
        <!-- CAROUSEL -->
        <div id="carouselIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner z-n1">
                <div class="carousel-item active">
                    <img src="./assets/img/tlou-1.jpg" class="w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/tlou-2.jpg" class="w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/tlou-3.jpg" class="w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/tlou-4.jpg" class="w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/tlou-5.jpg" class="w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/tlou-6.jpg" class="w-100 vh-100 object-fit-cover">
                </div>
            </div>
            <!-- BOTÕES E TEXTO DA PÁGINA -->
            <div class="fixed-top position-fixed d-flex flex-column min-vh-100 justify-content-md-evenly align-items-md-start justify-content-center align-items-center">
                <div class="info col-md-6 ms-md-5 col-8">
                    <img class="logo col-lg-6 col-10" src="./assets/img/logo.png" alt="logo The Last of Us">
                    <p class="description lh-sm text-white text-sm-start">
                        The Last of Us é uma série distópica da HBO baseada na franquia de jogos de videogame de mesmo nome criada por Neil Druckmann.
                        O drama narra um futuro pandêmico que foi devastador para humanidade, deixando os seres humanos à beira da extinção.
                    </p>
                </div>
                <div class="carousel-indicators gap-3">
                    <button data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button data-bs-target="#carouselIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
            </div>
            <!-- END BOTÕES E TEXTO DA PÁGINA -->
        </div>
        <!-- END CAROUSEL -->

        <!-- MENU LATERAL -->
        <div class="menu-lateral">
            <div class=" offset-11 me-4 position-fixed fixed-top d-flex justify-content-end align-items-center min-vh-100">
                <ul class="d-flex flex-column list-unstyled">
                    <li>
                        <a href="#" target="_blank">
                            <img src="./assets/img/github.svg" alt="ícone GitHub" class="icone mb-4">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <img src="./assets/img/linkedin-in.svg" alt="ícone LinkedIn" class="icone">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END MENU LATERAL -->
    </main>
    <!-- JAVASCRIPT BOOTSTRAP 5 -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>