<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Last of Us - Série (Bootstrap)</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./src/bootstrap/css/bootstrap.min.css">

</head>

<body>
    <main class="position-fixed min-vh-100 vw-100">
        <div id="carouselIndicators" class="carousel slide carousel-fade">
            <div class="carousel-inner z-n1">
                <div class="carousel-item active">
                    <img src="./src/img/tlou-1.jpg" class="d-block w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/tlou-2.jpg" class="d-block w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/tlou-3.jpg" class="d-block w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/tlou-4.jpg" class="d-block w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/tlou-5.jpg" class="d-block w-100 vh-100 object-fit-cover">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/tlou-6.jpg" class="d-block w-100 vh-100 object-fit-cover">
                </div>
            </div>

            <div class="carousel-indicators">
                <button data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button data-bs-target="#carouselIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
        </div>

        <div class="row conteudo position-absolute d-flex flex-column min-vh-100 justify-content-evenly">
            <div class="info col-md-4 offset-md-2">
                <img class="logo" src="./src/img/logo.png" alt="logo The Last of Us">

                <p class="description lh-sm ">
                    The Last of Us é uma série distópica da HBO baseada na franquia de jogos de videogame de mesmo nome criada por Neil Druckmann.
                    O drama narra um futuro pandêmico que foi devastador para humanidade, deixando os seres humanos à beira da extinção.
                </p>
            </div>
        </div>

        <div class="menu-lateral">
            <div class=" offset-md-11 me-4 position-fixed fixed-top d-flex justify-content-end align-items-center min-vh-100">
                <ul class="d-flex flex-column list-unstyled">
                    <li>
                        <a href="#" target="_blank">
                            <img src="./src/img/github.svg" alt="ícone GitHub" class="icone mb-4">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <img src="./src/img/linkedin-in.svg" alt="ícone LinkedIn" class="icone">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </main>

    <script src="./src/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>