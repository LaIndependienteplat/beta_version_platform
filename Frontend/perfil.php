<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La independiente</title>

        <!-- Bootstrap -->
        <link href="./bootstrap-5.3.0-alpha3/assets/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- <link href="./files/bootstrap.min.css" rel="stylesheet"> -->
        <!-- custom css -->
        <link href="./files/style.css" rel="stylesheet" type="text/css" media="screen">
        <!-- font awesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> <!-- <link href="./files/font-awesome.min.css" rel="stylesheet"> -->
        <!--flex slider-->
        <link href="./files/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="./files/animate.css" rel="stylesheet" type="text/css" media="screen">
        <!--web fonts-->      
        <link href="./files/css" rel="stylesheet" type="text/css">
        <link href="./files/css(1)" rel="stylesheet" type="text/css">
        <link href="./product.css" rel="stylesheet">
        <link href="./carousel.css" rel="stylesheet">
        <link href="./style.css" rel="stylesheet">
        
        <!--owl carousel css-->
        <link href="./files/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="./files/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--popups css-->
        <link href="./files/magnific-popup.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->  
        
        <!--owl carousel css-->
        <link href="./files/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="./files/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--popups css-->
        <link href="./files/magnific-popup.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <style>
            @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
            body {
                font-family: 'Poppins', sans-serif;
                background: #fafafa;
            }
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            .b-example-divider {
                width: 100%;
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }
            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }
            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }
            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }
            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
            .btn-bd-primary {
                --bd-violet-bg: #712cf9;
                --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-violet-bg);
                --bs-btn-border-color: var(--bd-violet-bg);
                --bs-btn-hover-color: var(--bs-white);
                --bs-btn-hover-bg: #6528e0;
                --bs-btn-hover-border-color: #6528e0;
                --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #5a23c8;
                --bs-btn-active-border-color: #5a23c8;
            }
            .bd-mode-toggle {
                z-index: 1500;
            }
            .header {
                min-height: 100vh;
                width: 100%;
                background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(images/fondo.png);
                background-position: center;
                background-size: cover;
                position:relative;
            }
            /* Estrellas */
            .rating {
                direction: rtl;
                unicode-bidi: bidi-override;
                color: #ddd; /* Personal choice */
            }
            .rating input {
                display: none;
            }
            .rating label:hover,
            .rating label:hover ~ label,
            .rating input:checked + label,
            .rating input:checked + label ~ label {
                color: #ffc107; /* Personal color choice. Lifted from Bootstrap 4 */
            }
        </style>
        <link href="product.css" rel="stylesheet">
        <link href="carousel.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="calendar.css" rel="stylesheet">
    </head>
    <?php
    include('./nav.php');
    ?>
    <body>
        <?php
        include("./m/funciones.php");
        $user = $_COOKIE["usr_lamas"];
        $query = "SELECT * FROM users WHERE username = '$user'";
        $consulta = select($query);
        // Usuario existe
        if (count($consulta) != 0) {
            $name = $consulta[0]['name'];
            $email = $consulta[0]['email'];
            $birthday = $consulta[0]['birthday'];
            $gender = $consulta[0]['gender'];
            $nationality = $consulta[0]['nationality'];
        }
        ?>
        <section style="background-color: #eee">
            <div class="py-1">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-user fa-fade fa-2xl"></i>&nbsp;
                                <h5 class="my-3"><?= $name; ?></h5>
                                <h5 class="my-3"><?= $email; ?></h5>
                                <h5 class="my-3"><?= $birthday; ?></h5>
                                <h5 class="my-3"><?= $gender; ?></h5>
                                <h5 class="my-3"><?= $nationality; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="images/cuidado.jpg" class="img-fluid" alt="Centro de consejos">
                                <div class="layer">
                                    <h3 style="color: #FFCC15;"><br><br><a href="./consejos.php" style="color:white">Centro de consejos</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="images/comunidad.jpg" class="img-fluid" alt="Encuentra comunidad">
                                <div class="layer">
                                    <h3 style="color: #FFCC15;"><br><br><a href="./comunidades.php?id=1" style="color:white">Encuentra comunidad</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="calendar"></div>
                        <button id="limpiar" type="button" class="btn" style="background-color: #FFCC15;">Editar perfil <i class="fa-solid fa-pen-to-square"></i></i></button>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include('./footer.php');
        ?>
        <script src="./bootstrap-5.3.0-alpha3/assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./js/calendar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
