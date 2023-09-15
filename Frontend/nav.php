<style>
    .site-header {
        background: linear-gradient(to right, #804CAE, #820465, #3E73B7);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px);
    }
    .site-header a {
        color: #8e8e8e;
        transition: color .15s ease-in-out;
    }
    .site-header a:hover {
        color: #FFFFFF;
        text-decoration: none;
    }
</style>
<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row nav_links">
        <a class="py-1 d-md-inline-block" href="./index.php"><i class="fa-solid fa-house fa-fade" style="color: #FFF;"></i> INICIO</a>
        <a class="py-1 d-md-inline-block" href="./comunidades.php?id=1"><i class="fa-solid fa-person fa-fade" style="color: #FFF;"></i> COMUNIDADES</a>
        <a class="py-1 d-md-inline-block" href="./consejos.php"><i class="fa-solid fa-comment-dots fa-fade" style="color: #FFF;"></i> CONSEJOS</a>
        <a class="py-1 d-md-inline-block" href="./about.php"><i class="fa-solid fa-question fa-fade" style="color: #FFF;"></i> ACERCA DE</a>
        <?php
        $user = $_COOKIE["usr_lamas"];
        if(!$user) {
        ?>
        <a class="py-1 d-md-inline-block" href="./login.php"><i class="fa-solid fa-user fa-fade" style="color: #FFF;"></i> INGRESO</a>
        <?php
        } else {
        ?>
        <a class="py-1 d-md-inline-block" href="./login.php"><i class="fa-solid fa-user fa-fade" style="color: #FFF;"></i> PERFIL</a>
        <a class="py-1 d-md-inline-block" href="./logout.php"><i class="fa-solid fa-right-to-bracket fa-fade" style="color: #FFF;"></i> CERRAR SESIÓN</a>
        <?php
        }
        ?>
    </nav>
</header>