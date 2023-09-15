<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.111.3">
        <title>La independiente</title>
        <link rel="icon" href="./favicon.png" type="image/x-icon">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">

        <link href="./bootstrap-5.3.0-alpha3/assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

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

        
        <!-- Custom styles for this template -->
        <link href="product.css" rel="stylesheet">
        <link href="carousel.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="calendar.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include('./nav.php');
        ?>
        <main>
            <div class="px-4 py-5 text-center sub-header">
                <!-- <i class="fa-solid fa-info fa-fade fa-2xl mb-4" style="color: #1C798B;"></i> -->
                <h1 class="display-5 fw-bold">Comunidades</h1>
                <!-- <div class="col-lg-6 mx-auto">
                    <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> -->
            </div>

            <div class="px-4 my-5 text-center">
                <i class="fa-solid fa-share fa-fade fa-2xl mb-4" style="color: #1C798B;"></i>
                <h3 class="display-5 fw-bold text-body-emphasis card-color" style="color: #FFCC15 !important;"><br>Las experiencias en la plataforma</h3>
                <div class="col-lg-6 mx-auto">
                    <p class="lead" style="color: #804CAE !important;">HiveWork</p>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="blog-right">
                            <h3>Plataformas de trabajo colectivo</h3>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="./comunidades.php" class="list-group-item list-group-item-action px-3 border-0 ripple">Amazon Mechanical Turk</a>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #FFCC15;">
                                    <a href="./Hivework_platform.php" class="list-group-item list-group-item-action px-3 border-0 activo ripple"
                                    aria-current="true" style="background-color: #FFCC15;">HiveWork</a>
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="./Remotetask_platform.php" class="list-group-item list-group-item-action px-3 border-0 ripple">Remotetask</a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="./chatbot.php" class="list-group-item list-group-item-action px-3 border-0 ripple">Nuestro Chatbot</a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </ul>
                            <!-- <div class="list-group list-group-light">
                                <a href="./comunidades.php" class="list-group-item list-group-item-action px-3 border-0 activo ripple"
                                    aria-current="true" style="background-color: #FFCC15;">Amazon Mechanical Turk</a>
                                <a href="./Hivework_platform.php" class="list-group-item list-group-item-action px-3 border-0 ripple">HiveWork</a>
                                <a href="./Remotetask_platform.php" class="list-group-item list-group-item-action px-3 border-0 ripple">Remotetask</a>
                                <a href="./chatbot" class="list-group-item list-group-item-action px-3 border-0 ripple">Nuestro Chatbot</a>
                            </div> -->
                            <!-- <div>
                            <span>
                                    <strong>
                                        <a href="comunidades.php"> Amazon Mechanical Turk </a>
                                    </strong>
                                </span>
                                <span>(5)</span>
                            </div>
            
                            <div>
                                <span>
                                    <strong>
                                        <a href="Hivework_platform.php"> HiveWork </a>
                                    </strong>
                                </span>
                                <span>(6)</span>
                            </div>
                            
                            <div>
                                <span>
                                    <strong>
                                        <a href="Remotetask_platform.php"> Remotetask </a>
                                    </strong>
                                </span>
                                <span>(4)</span>
                            </div>
                            
                            <div>
                                <span>
                                    <strong>
                                        <a href="Spare5_platform.php"> Spare5 </a>
                                    </strong>
                                </span>    
                                <span>(8)</span>
                            </div>
                            
                            <div>
                                <span>	
                                    <strong>
                                        <a href="Toloka_platform.php"> Toloka </a>
                                    </strong>
                                </span>
                                <span>(9)</span>
                            </div>
            
                            <div>
                                <span>	
                                    <strong>
                                        <a href="./chatbot.php"> Nuestro Chatbot </a>
                                    </strong>
                                </span>
                            </div> -->
                        </div>
                        <div class="calendar"></div>
                    </div>
                    <div class="col-sm-8">
                        <section style="/* background-color: #ad655f; */">
                            <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 col-lg-10">
                                <div class="card text-dark" id="seccion_comentarios" style="height: 500px; overflow-y: scroll;">
                                    <div class="card-body p-4">
                                    <h4 class="mb-0">Comentarios recientes</h4>
                                    <p class="fw-light mb-4 pb-2">Últimos comentarios sección por usuarios</p>
                        
                                    <div class="d-flex flex-start">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60" height="60" />
                                        <div>
                                        <h6 class="fw-bold mb-1">Margarita Morales</h6>
                                        <h6 class="mb-1">El trabajo colaborativo</h6>
                                        <div class="rating" style="width: 20rem">
                                            <input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-4" type="radio" name="rating" value="4" checked /><label for="rating-4"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fas fa fa-star"></i></label>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="mb-0">
                                            Viernes 07 Marzo, 2023
                                            <span class="badge bg-primary">Pendiente</span>
                                            </p>                                            
                                        </div>
                                        <p class="mb-0">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                        
                                    <hr class="my-0" />
                        
                                    <div class="card-body p-4">
                                    <div class="d-flex flex-start">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60" height="60" />
                                        <div>
                                        <h6 class="fw-bold mb-1">Cristina Sánchez</h6>
                                        <h6 class="mb-1">Mi experiencia</h6>
                                        <div class="rating" style="width: 20rem">
                                            <input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-4" type="radio" name="rating" value="4" checked /><label for="rating-4"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fas fa fa-star"></i></label>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="mb-0">
                                            Lunes 15 Febrero, 2023
                                            <span class="badge bg-primary">Aprobado</span>
                                            </p>
                                        </div>
                                        <p class="mb-0">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                            has roots in a piece of classical Latin literature from 45 BC, making it
                                            over 2000 years old. Richard McClintock, a Latin professor at
                                            Hampden-Sydney College in Virginia, looked up one of the more obscure
                                            Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                            the cites.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                        
                                    <hr class="my-0" style="height: 1px;" />
                        
                                    <div class="card-body p-4">
                                    <div class="d-flex flex-start">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(33).webp" alt="avatar" width="60" height="60" />
                                        <div>
                                        <h6 class="fw-bold mb-1">Cecilia Casasola</h6>
                                        <h6 class="mb-1">La vida laboral</h6>
                                        <div class="rating" style="width: 20rem">
                                            <input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-4" type="radio" name="rating" value="4" checked /><label for="rating-4"><i class="fas fa fa-star"></i></label>
                                            <input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fas fa fa-star"></i></label>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="mb-0">
                                            Sábado 24 Enero, 2023
                                            <span class="badge bg-primary">Rechazado</span>
                                            </p>                                            
                                        </div>
                                        <p class="mb-0">
                                            There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure.
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                        
                                    <hr class="my-0" />
                        
                                    <div class="card-body p-4">
                                        <div class="d-flex flex-start">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp" alt="avatar" width="60"
                                            height="60" />
                                            <div>
                                            <h6 class="fw-bold mb-1">María Castellanos</h6>
                                            <h6 class="mb-1">Consejo detallado</h6>
                                            <div class="rating" style="width: 20rem">
                                                <input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa fa-star"></i></label>
                                                <input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa fa-star"></i></label>
                                                <input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa fa-star"></i></label>
                                                <input id="rating-4" type="radio" name="rating" value="4" checked /><label for="rating-4"><i class="fas fa fa-star"></i></label>
                                                <input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fas fa fa-star"></i></label>
                                            </div>
                                            <div class="d-flex align-items-center mb-3">
                                                <p class="mb-0">
                                                Domingo 31 Diciembre, 2023
                                                <span class="badge bg-primary">Pendiente</span>
                                                </p>
                                            </div>
                                            <p class="mb-0">
                                                It uses a dictionary of over 200 Latin words, combined with a handful of
                                                model sentence structures, to generate Lorem Ipsum which looks
                                                reasonable. The generated Lorem Ipsum is therefore always free from
                                                repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                            </div>
                                        </div>
                                    </div>
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
                                        <img class="rounded-circle shadow-1-strong me-3"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="65"
                                        height="65" />
                                        <div class="w-100">
                                        <h5>Agregar un comentario</h5>
                                        <div class="form-outline">
                                            <label class="form-label" for="titulo">Título</label>
                                            <textarea class="form-control" id="titulo" rows="1"></textarea>
                                        </div>
                                        <div class="form-outline">
                                            <label class="form-label" for="contenido">¿Cuál es tu opinión?</label>
                                            <textarea class="form-control" id="contenido" rows="4"></textarea>
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
        </main>
        <?php
        include('./footer.php')
        ?>
        <script
            src="https://code.jquery.com/jquery-3.7.0.js"
            integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
            crossorigin="anonymous"></script>
        <script src="./bootstrap-5.3.0-alpha3/assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./js/calendar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $("#limpiar").on("click", function() {
                $("textarea").val("");
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
                var hoy = new Date();
                var opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                opciones.timeZoneName = 'short';
                var ahora = hoy.toLocaleString('es-MX', opciones);
                var titulo = $('#titulo').val();
                var contenido = $('#contenido').val();
                $("#seccion_comentarios").append('<hr class="my-0" /><div class="card-body p-4"><div class="d-flex flex-start"><img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="60" height="60" /><div><h6 class="fw-bold mb-1">Gatito Llanca</h6><h6 class="fw-bold mb-1">' + titulo + '</h6><div class="rating" style="width: 20rem"><input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa fa-star"></i></label><input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa fa-star"></i></label><input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa fa-star"></i></label><input id="rating-4" type="radio" name="rating" value="4" checked /><label for="rating-4"><i class="fas fa fa-star"></i></label><input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fas fa fa-star"></i></label></div><div class="d-flex align-items-center mb-3"><p class="mb-0">' + ahora + '<span class="badge bg-primary">Pendiente</span></p><a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a><a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a></div><p class="mb-0"> ' + contenido + ' </p></div></div></div>');
            });
        </script>
    </body>
</html>
