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
    <body data-spy="scroll" data-offset="80" cz-shortcut-listen="true">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow animated fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="sub-header"></div>
                        <div class="center-heading text-center">
                            <h2>Comunidades</h2>
                            <span class="icon"><i class="fa-solid fa-briefcase fa-bounce fa-lg"></i></span> 
                        </div>
                        <p class="lead margin-btm-30">¿Cómo han sido tus experiencias en las plataformas de trabajo?</p>
                        <!-- <p class="lead margin-btm-30">Unir, conocer y aprender de otros trabajadores colectivos</p>
                        <a class="hero-btn" href="./signup.php">Comienza tu registro ahora</a> -->
                    </div>
                </div>
        </section>
        <?php
        include("./m/funciones.php");
        // Queremos iniciar sesión.
        $user = $_COOKIE["usr_lamas"];
        if ($user) {
            $query = "SELECT * FROM users WHERE username = '$user';";
            $consulta = select($query);
            // Usuario existe
            if (count($consulta) != 0) {
                $get_platform_id = $_GET['id'];
                $query = "SELECT * FROM crowd_work_platforms WHERE id = $get_platform_id;";
                $actual_plataform = select($query);
                $actual_platform_name = $actual_plataform[0]['platform_name'];
                $query = "SELECT * FROM crowd_work_platforms;";
                $plataforms = select($query);
                $query = "SELECT * FROM user_blog_posts WHERE platform_id = $get_platform_id ORDER BY _created DESC;";
                $blog_posts = select($query);
            }
        ?>
        <section id="about1" class="section-padding">
            <div class="container">
                <div class="wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: hidden; animation-duration: 700ms; animation-delay: 300ms; animation-name: none;">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="px-4 my-5 text-center">
                                <i class="fa-solid fa-share fa-fade fa-2xl mb-4" style="color: #1C798B;"></i>
                                <h3 class="display-5 fw-bold text-body-emphasis card-color" style="color: #FFCC15 !important;"><br>Las experiencias en la plataforma</h3>
                                <div class="col-lg-6 mx-auto">
                                    <h4><?= $actual_platform_name; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-right">
                                <h3>Plataformas de trabajo colectivo</h3>
                                <ul class="list-group">
                                <?php
                                foreach($plataforms as $p) {
                                    $id = $p['id'];
                                    $platform_name = $p['platform_name'];
                                    $query = "SELECT * FROM user_blog_posts WHERE platform_id = $id;";
                                    $consulta = select($query);
                                    $count_post = count($consulta);
                                ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center" <?= ($get_platform_id == $id) ? "style='background-color: #FFCC15;'" : ""; ?>>
                                        <a href="./comunidades.php?id=<?= $id; ?>" class="list-group-item list-group-item-action px-3 border-0 ripple" <?= ($get_platform_id == $id) ? "style='background-color: #FFCC15;'" : ""; ?>><?= $platform_name; ?></a>
                                        <span class="badge bg-primary rounded-pill"><?= $count_post; ?></span>
                                    </li>
                                <?php
                                }
                                ?>
                                </ul>
                            </div>
                            <div class="calendar"></div>
                        </div>
                        <div class="col-lg-8">
                            <section>
                                <div class="container">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-12 col-lg-10">
                                            <h4 class="mb-0">Comentarios recientes</h4>
                                            <p class="fw-light mb-4 pb-2">Últimos comentarios sección por usuarios</p>
                                            <div class="card text-dark" id="seccion_comentarios" style="min-height:100px; height:575px; overflow-y: auto;">
                                                <?php
                                                if (count($blog_posts) > 0) {
                                                    foreach($blog_posts as $b) {
                                                        $id = $b['id'];
                                                        $userId = $b['userId'];
                                                        $query = "SELECT * FROM users WHERE id = '$userId';";
                                                        $consulta = select($query);
                                                        $actual_user_name = $consulta[0]['name'];
                                                        $topic = $b['topic'];
                                                        $content = $b['content'];
                                                        $_created = $b['_created'];
                                                    ?>
                                                    <div class="card-body p-4">
                                                        <div class="d-flex flex-start">
                                                            <i class="fa-solid fa-user fa-fade fa-2xl"></i>&nbsp;
                                                            <div>
                                                                <h6 class="fw-bold mb-1"><?= $actual_user_name; ?></h6>
                                                                <h6 class="mb-1"><?= $topic; ?></h6>
                                                                <div class="rating" style="width: 20rem">
                                                                    <input id="<?= $id; ?>-1" type="radio" name="<?= $id; ?>-1" value="1"/><label for="rating-1"><i class="fas fa fa-star"></i></label>
                                                                    <input id="<?= $id; ?>-2" type="radio" name="<?= $id; ?>-2" value="2"/><label for="rating-2"><i class="fas fa fa-star"></i></label>
                                                                    <input id="<?= $id; ?>-3" type="radio" name="<?= $id; ?>-3" value="3"/><label for="rating-3"><i class="fas fa fa-star"></i></label>
                                                                    <input id="<?= $id; ?>-4" type="radio" name="<?= $id; ?>-4" value="4"/><label for="rating-4"><i class="fas fa fa-star"></i></label>
                                                                    <input id="<?= $id; ?>-5" type="radio" name="<?= $id; ?>-5" value="5"/><label for="rating-5"><i class="fas fa fa-star"></i></label>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <p class="mb-0">
                                                                        <?= $_created; ?>
                                                                    <!-- <span class="badge bg-primary"></span> -->
                                                                    </p>                                            
                                                                </div>
                                                                <p class="mb-0"><?= $content; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="my-0" style="height: 1px;" />
                                                    <?php
                                                    }
                                                } else {
                                                ?>
                                                <h5>No hay comentarios en esta sección</h5>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section style="/* background-color: #d94125; */">
                                <div class="container my-1 py-1 text-dark">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-body p-4">
                                        <div class="d-flex flex-start w-100">
                                            <i class="fa-solid fa-user fa-fade fa-2xl"></i>&nbsp;
                                            <div class="w-100">
                                                <h5>Agregar un comentario</h5>
                                                <div class="form-outline">
                                                    <label class="form-label" for="titulo">Título</label>
                                                    <textarea class="form-control" id="titulo" name="titulo" rows="1"></textarea>
                                                </div>
                                                <div class="form-outline">
                                                    <label class="form-label" for="contenido">¿Cuál es tu opinión?</label>
                                                    <textarea class="form-control" id="contenido" name="contenido" rows="4"></textarea>
                                                </div>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <button id="limpiar" type="button" class="btn" style="background-color: #FFCC15;">Limpiar <i class="fa-solid fa-trash"></i></i></button>
                                                    <button id="publicar" type="button" class="btn" style="color: #000000 !important; background-color: #FFCC15;">
                                                    Publicar <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms" style="visibility: hidden; animation-duration: 700ms; animation-delay: 400ms; animation-name: none;">
                    <div class="row">
                        <!-- <div class="col-lg-12 mx-auto">
                            <i class="fa-solid fa-shield-halved fa-beat-fade"></i>
                            <h3>Seguridad en línea <a class="anchor-link" href="#seguridad-linea" aria-label="Enlace a sección"></a></h3>
                        </div> -->
                        <div class="col-lg-8 mx-auto">
                            <div>
                                <p>Somos dynamo fue una comunidad en línea diseñada específicamente para facilitar la acción colectiva de los trabajadores de plataformas de microtareas, como la Amazon Mechanical Turk. Esta comunidad elaboró un listado de buena prácticas para investigadores universitarios, con tasas de pago y códigos de conducta, que se hizo pública a través de una carta abierta firmada por los trabajadores de Amazon Mechanical Turk en el año 2014. Somos dinamo mostró que los trabajadores de plataformas de trabajo colectivo, pueden luchar por sus intereses comunes y hablar con una sola voz a pesar de las distancias geográficas.</p>
                                <p>Turkopticon es un sitio web y complemento de explorador desarrollado por terceros que usan los trabajadores de Amazon Mechanical Turk para evaluar clientes (solicitantes) y tareas. La evaluación es realizada por los trabajadores y se basa en ciertos criterios como lo son la remuneración, la velocidad con se evalúa y remunera el trabajo entregado, la justicia con la que se evalúa el trabajo y la comunicación entre trabajadores y solicitantes. Este tipo de sistema de reputación de “empleadores”, puede beneficiar a ambas partes del mercado de trabajo. Turkopticon es un sistema manejado por voluntarios que no tienen ingresos y por ello, lucha por afrontar de manera durarera algunas problematicas de los trabajadores.</p>
                                <p>Desde 2019 las y los trabajadores de aplicaciones como Rappi en Colombia, han comenzado a denunciar ciertas arbitrariedades de las que han sido víctimas por el manejo de la plataforma, las formas de subordinación que enfrentan y la limitación de su marco de derechos en relación con los que cuentan otras y otros trabajadores en ese país. Esas iniciativas confluyeron con otras en ese país, con lo cual comenzó un proceso de acercamiento para propiciar la conformación de un sindicato.</p>
                                <p>En el otoño de 2017, la nieve cubrió Bolonia. Para los repartidores que entregaban comida a domicilio se volvió una actividad de riesgo. Como trabajadores no contaban ni siquiera con un salario mínimo por hora, con la llegada de otras plataformas el mal tiempo agudizó sus problemas y decidieron convocar a una primera huelga convocando a trabajadores de todas las plataformas. Posteriormente lograron implicar la opinión pública y paso a paso se creó un fuerte vínculo entre los trabajadores y la ciudad, con lo cual se obtuvo el primer logro importante llamado “La Carta de los derechos de los trabajadores digitales del contexto urbano” o “Carta de Bolonia”. Tras la firma de esta carta el gobierno italiano y el ministerio de trabajo se pusieron en contacto con los trabajadores para tratar la problemática del sector.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 mx-auto">
                            <div data-wow-iteration="5" data-wow-duration="0.25s" class="span3 wow pulse" style="visibility: visible; animation-duration: 0.25s; animation-iteration-count: 5; animation-name: pulse;">
                                <img src="./images/Infografía-Comunidades_iniciativa_trabajo_colectivo.png" height="1000px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divided-50"></div>        
        </section>
    <?php
    } else {
    ?>
        <section id="about1" class="section-padding">
            <div class="container">
                <div class="wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: hidden; animation-duration: 700ms; animation-delay: 300ms; animation-name: none;">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="px-4 my-5 text-center">
                                <i class="fa-solid fa-share fa-fade fa-2xl mb-4" style="color: #1C798B;"></i>
                                <h3 class="display-5 fw-bold text-body-emphasis card-color" style="color: #FFCC15 !important;"><br>Las experiencias en la plataforma</h3>
                                <h4 style="color: #804CAE !important; font-family: PoppinsMedium;">Inicia sesión para ingresar en esta sección</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    include('./footer.php');
    ?>
        <!--back to top-->
        <a href="#" class="scrollToTop" style="display: none;"><i class="fa fa-angle-up"></i></a>
        <!--back to top end-->
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="./files/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="./files/bootstrap.min.js" type="text/javascript"></script>
        <!--easing plugin for smooth scroll-->
        <script src="./files/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="./files/jquery.sticky.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="./files/wow.min.js" type="text/javascript"></script> 
        <!--easy pie charts-->
        <script src="./files/waypoints.min.js" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="./files/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="./files/easypiechart.js" type="text/javascript"></script>
        <script src="./files/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="./files/jquery.mixitup.min.js" type="text/javascript"></script>
        <script src="./files/jquery.stellar.min.js" type="text/javascript"></script>
        <!--owl carousel slider-->
        <script src="./files/owl.carousel.min.js" type="text/javascript"></script>
        <!--twitter feed-->
        <script src="./files/tweetie.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="./files/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="./files/jquery.backstretch.min.js" type="text/javascript"></script>
        <!--valid / working contact form js-->
        <script src="./files/contact_me.js" type="text/javascript"></script>
        <script src="./files/jqBootstrapValidation.js" type="text/javascript"></script>
        <!--customizable plugin edit according to your needs-->
        <script src="./files/custom.js" type="text/javascript"></script>
        <script
            src="https://code.jquery.com/jquery-3.7.0.js"
            integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
            crossorigin="anonymous"></script>
        <script src="./bootstrap-5.3.0-alpha3/assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./js/calendar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $("#limpiar").on("click", function() {
                $('#titulo').val('');
                $('#contenido').val('');
                Swal.fire(
                    'Se borraron los campos',
                    'Puedes ver los campos sin texto',
                    'success'
                );
            });
            $("#publicar").on("click", function() {
                Swal.fire(
                    '¡Comentario agregado!',
                    'Puedes verlo publicado en el listado',
                    'success'
                );
                // var hoy = new Date();
                // var opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                // opciones.timeZoneName = 'short';
                // var ahora = hoy.toLocaleString('es-MX', opciones);
                var titulo = $('#titulo').val();
                var contenido = $('#contenido').val();
                <?php
                $query = "SELECT * FROM users WHERE username = '$user';";
                $consulta = select($query);
                ?>
                var user = '<?= $user; ?>';
                var userId = '<?= $consulta[0]['id']; ?>';
                var platform_id = '<?= $_GET['id']; ?>';
                $.ajax({
                    type: "POST",
                    url: "agregarComentario.php",
                    data: {titulo, contenido, user, userId, platform_id},
                    success: function(result) {
                        $("#seccion_comentarios").prepend(result);
                    }
                });
            });
        </script>
    </body>
</html>
