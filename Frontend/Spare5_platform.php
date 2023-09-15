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
        </style>

        
        <!-- Custom styles for this template -->
        <link href="product.css" rel="stylesheet">
        <link href="carousel.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <svg xmlns="http://https://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
        </symbol>
        </svg>

        <div class="dropdown position-fixed bottom-0 end-0 mb-4 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                Light
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
            </li>
            <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                Dark
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
            </li>
            <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
                Auto
                <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
            </li>
        </ul>
        </div>

    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between nav_links">
            <a class="py-2 d-none d-md-inline-block" href="./index.html"><i class="fa-solid fa-house fa-fade" style="color: #F00;"></i> INICIO</a>
            <a class="py-2 d-none d-md-inline-block" href="./comunidades.html" style="color: #F00;"><i class="fa-solid fa-person fa-fade" style="color: #F00;"></i> COMUNIDADES</a>
            <a class="py-2 d-none d-md-inline-block" href="./consejos.html"><i class="fa-solid fa-comment-dots fa-fade" style="color: #F00;"></i> CONSEJOS</a>
            <a class="py-2 d-none d-md-inline-block" href="./about.html"><i class="fa-solid fa-question fa-fade" style="color: #F00;"></i> ACERCA DE</a>
            <a class="py-2 d-none d-md-inline-block" href="./login.html"><i class="fa-solid fa-right-to-bracket fa-fade" style="color: #F00;"></i> INGRESO</a>
        </nav>
    </header>

    <main>
        <div class="px-4 py-5 text-center sub-header">
            <!-- <i class="fa-solid fa-info fa-fade fa-2xl mb-4" style="color: #ff0000;" style="color: #ff0000;"></i> -->
            <h1 class="display-5 fw-bold">Comunidades</h1>
            <!-- <div class="col-lg-6 mx-auto">
                <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div> -->
        </div>

		<div class="px-4  my-5 text-center">
            <i class="fa-solid fa-share fa-fade fa-2xl mb-4" style="color: #ff0000;" style="color: #ff0000;"></i>
            <h1 class="display-5 fw-bold text-body-emphasis">Las experiencias en la plataforma Spare5</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
		</div>
		
        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
					<div class="blog-left">
						<div class="testimonial-col">
							<img src="images/perfil.png">
							<div>
								<p>Excepteur reprehenderit nulla ut ad sunt ullamco labore excepteur mollit est laborum tempor incididunt elit irure non sed voluptate cillum adipisicing cupidatat sit enim est commodo consequat in nostrud nostrud laboris.</p>
								<h3>Cristina Lara</h3>
								<i class="fa-solid fa-star fa-fade" style="color: #ff0000;"></i> 
								<i class="fa-solid fa-star fa-fade" style="color: #ff0000;"></i>
								<i class="fa-solid fa-star fa-fade" style="color: #ff0000;"></i>
								<i class="fa-solid fa-star fa-fade" style="color: #ff0000;"></i>
								<i class="fa-regular fa-star fa-fade" style="color: #ff0000;"></i>
							</div>
						</div>
		
						<div class="testimonial-col">
							<img src="images/perfil.png">
							<div>
								<p>Lorem ipsum veniam cupidatat dolore exercitation sint voluptate est deserunt commodo minim minim deserunt labore occaecat est ad ex quis ut incididunt incididunt deserunt exercitation pariatur sint officia officia duis ut.</p>
								<h3>Abigail Gomez</h3>
								<i class="fa-solid fa-star fa-fade" style="color: #ff0000;"></i> 
								<i class="fa-solid fa-star fa-fade" style="color: #ff0000;"></i>
								<i class="fa-solid fa-star fa-fade" style="color: #ff0000;"></i>
								<i class="fa-solid fa-star fa-fade" style="color: #ff0000;"></i>
								<i class="fa-solid fa-star-half-stroke fa-fade" style="color: #ff0000;"></i>
							</div>
						</div>
					</div>
                </div>
            </div>
            <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 py-3">
                    <div class="blog-right">
                        <h3>Plataformas de trabajo colectivo</h3>
        
                        <div>
                          <span>
                                <strong>
                                    <a href="Amazon_platform.html"> Amazon Mechanical Turk </a>
                                </strong>
                            </span>
                            <span> 5 </span>
                        </div>
        
                        <div>
                            <span>
                                <strong>
                                    <a href="Hivework_platform.html"> HiveWork </a>
                                </strong>
                            </span>
                            <span> 6 </span>
                        </div>
                         
                        <div>
                            <span>
                                <strong>
                                    <a href="Remotetask_platform.html"> Remotetask </a>
                                </strong>
                            </span>
                            <span> 4 </span>
                        </div>
                        
                        <div>
                            <span>
                                <strong>
                                    <a href="Spare5_platform.html"> Spare5 </a>
                                </strong>
                            </span>    
                            <span> 8 </span>
                        </div>
                        
                        <div>
                            <span>	
                                <strong>
                                    <a href="Toloka_platform.html"> Toloka </a>
                                </strong>
                            </span>
                            <span> 9 </span>
                        </div>
        
                        <div>
                            <span>	
                                <strong>
                                    <a href="#chatbot"> Nuestro Chatbot </a>
                                </strong>
                            </span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
        <!-- Facebook -->
        <a
            class="btn text-white btn-floating m-1"
            style="background-color: #3b5998;"
            href="https://www.facebook.com"
            role="button"
            ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
            class="btn text-white btn-floating m-1"
            style="background-color: #55acee;"
            href="https://www.twitter.com"
            role="button"
            ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
            class="btn text-white btn-floating m-1"
            style="background-color: #dd4b39;"
            href="https://www.google.com"
            role="button"
            ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
            class="btn text-white btn-floating m-1"
            style="background-color: #ac2bac;"
            href="https://www.instagram.com"
            role="button"
            ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
            class="btn text-white btn-floating m-1"
            style="background-color: #0082ca;"
            href="https://mx.linkedin.com/"
            role="button"
            ><i class="fab fa-linkedin-in"></i
        ></a>
        <!-- Github -->
        <a
            class="btn text-white btn-floating m-1"
            style="background-color: #333333;"
            href="https://github.com/"
            role="button"
            ><i class="fab fa-github"></i
        ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="color: #FFF; background-color: rgba(0, 0, 0);">
        &copy; 2023
    </div>
    <!-- Copyright -->
    </footer>

    <script src="./bootstrap-5.3.0-alpha3/assets/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>
