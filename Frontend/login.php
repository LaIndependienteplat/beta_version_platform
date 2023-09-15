<?php
include("./m/funciones.php");
// Queremos iniciar sesión.
$user = $_COOKIE["usr_lamas"];
if($user) {
    header("Location: perfil.php");
} else {
?>
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

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <link href="./bootstrap-5.3.0-alpha3/assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="./bootstrap-5.3.0-alpha3/assets/dist/js/bootstrap.bundle.min.js"></script>

        <style>
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
        </style>
        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <div class="card text-center">
                <div class="card-body">
                    <?php
                    // Queremos iniciar sesión.
                    if (isset($_POST["oculto"])) {
                        $user = $_POST["user"];
                        $pass = $_POST["pass"];

                        // Limpiamos las cadenas de SQl injection.
                        $user = str_replace("'", "/", $user);
                        $user = str_replace("-", "/", $user);
                        $pass = str_replace("'", "/", $pass);
                        $pass = str_replace("-", "/", $pass);

                        $query = "SELECT * FROM users WHERE username = '$user'";
                        $consulta = select($query);
                        // Usuario existe
                        if (count($consulta) != 0) {
                            $consulta = password_verify($pass, $consulta[0]['upassword']);
                            // El usuario se equivocó en la contraseña.
                            if ($consulta == 0) {
                                echo "<p style='color:red;'>DATOS INCORRECTOS</p>";
                            // Accede bien.
                            } else {
                                // Crear sesión con una cookie.
                                setcookie('usr_lamas', $user, time() + (7200), "/");
                                header("Location: perfil.php");
                            }
                        } else {
                            echo "<p style='color:red;'>DATOS INCORRECTOS</p>";
                        }
                    }
                    ?>
                    <form class="form-signin" role="form" method="POST" action="#">
                        <i class="fa-solid fa-briefcase fa-fade fa-2xl mb-4" style="color: #00A28E;"></i>
                        <h4 class="form-signin-heading">Iniciar sesión</h4>
                        <div class="form-floating">
                            <div class="input-group has-validation">
                                <span class="input-group-text"><i class="fa-solid fa-at fa-fade" style="color: #804CAE;"></i></span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="user" name="user" placeholder="Username" required="">
                                    <label for="user">Usuario</label>
                                </div>
                                <div class="invalid-feedback">
                                    Agrega tu nombre de usuario.
                                </div>
                            </div>
                        </div>
                        <div class="col-md mb-4">
                            <div class="form-floating">
                                <div class="input-group has-validation">
                                    <span class="input-group-text"><i class="fa-solid fa-lock fa-fade" style="color: #804CAE;"></i></span>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Username" required="">
                                        <label for="pass">Contraseña</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Agrega tu contraseña.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="hero-btn" type="submit">Iniciar sesión</button>
                        <br>
                        <br>
                        <br>
                        <label class="form-check-label" for="flexCheckDefault">
                            Aún no soy miembro<br><a href="./signup.php">Registro</a>
                        </label>
                        <br>
                        <br>
                        <br>
                        <label class="form-check-label" for="flexCheckDefault">
                            Al confirmar, estás de acuerdo con los <a href="./terminos.php">términos de la platforma</a> y la <a href="./politicas.php">política de privacidad</a>
                        </label>
                        <input type="hidden" name="oculto" value="oculto">
                    </form>
                </div>
            </div>
        </main>
        
    </body>
</html>
<?php
}
?>