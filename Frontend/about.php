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

    <link href="product.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="cards.css" rel="stylesheet">

    <style>
        /* * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        }
        body {
        background-color: #f1f1f1;
        display: flex;
        font-family: 'Lato', sans-serif;
        font-size: 0.875rem;
        font-weight: 400;
        color: #2c3e50;
        height: 100vh;
        overflow-y: hidden;
        } */
        /* CUSTOM SCROLLBAR FOR CHATBOX */
        .chats::-webkit-scrollbar {
            width: 0.125rem;
        }
        .chats::-webkit-scrollbar-thumb {
            background: #CFD8DC;
        }
        .chats::-webkit-scrollbar-thumb:hover {
            background: #B0BEC5;
        }
        /* INPUT TEXT PLACEHOLDER CUSTOMIZE */
        ::-webkit-input-placeholder {
            color: #B0BEC5;
        }
        ::-moz-placeholder {
            color: #B0BEC5;
        }
        :-ms-input-placeholder {
            color: #B0BEC5;
        }
        :-moz-placeholder {
            color: #B0BEC5;
        }
        #viewport {
            display: flex;
            flex: 1;
            justify-content: center;
            align-items: center;
        }
        #viewport > .chatbox {
            position: relative;
            display: table;
            float: left;
            margin: 1rem;
            width: 50rem;
            height: 36rem;
            background-color: white;
            box-shadow: 0 0.25rem 2rem rgba(38,50,56, 0.1);
            overflow: hidden;
        }
        #viewport > .chatbox > .chats {
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0; 
            display: table-cell;
            vertical-align: bottom;
            padding: 1rem;
            margin-bottom: 2.875rem;
            overflow: auto;
        }
        ul {
            padding: 0;
        }
        ul > li {
            position: relative;
            list-style: none;
            display: block;
            margin-top: 1.5rem;
            margin: 1rem 0;
            transition: 0.5s all;
        }
        ul > li:after {
            display: table;
            content: '';
            clear: both;
        }
        .msg { 
            max-width: 85%;
            display: inline-block;
            padding: 0.5rem 1rem;
            line-height: 1rem;
            min-height: 2rem;
            font-size: 0.875rem;
            border-radius: 1rem;
            margin-bottom: 0.5rem;
            word-break: break-all;
        }
        .msg.him {
            float: left;
            background-color: #1C798B;
            color: #fff;
            border-bottom-left-radius: 0.125rem;
        }
        .msg.you {
            float: right;
            background-color: #ECEFF1;
            color: #607D8B;
            border-bottom-right-radius: 0.125rem;
        }
        .msg.load {
            background-color: #3E73B7; 
            border-bottom-left-radius: 0.125rem;
        }
        .msg > span {
            font-weight: 500;
            position: absolute;
        }
        .msg > span.partner {
            color: #B0BEC5;
            font-size: 0.5rem;
            top: 0;
            font-size: 0.675rem;
            margin-top: -1rem;
        }
        .msg > span.time {
            color: #CFD8DC;
            font-size: 0.5rem;
            bottom: -0.35rem;
            display: none;
        }
        .msg:hover span.time {
            display: block;
        }
        .msg.him > span {
            left: 0;
        }
        .msg.you > span {
            right: 0;
        }
        .sendBox {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
        }
        .sendBox input {
            font-family: 'Lato', sans-serif;
            font-size: 0.875rem;
            display: block;
            width: 100%;
            border: none;
            padding: 0.75rem 0.75rem;
            line-height: 1.25rem;
            border-top: 0.125rem solid #ECEFF1;
            transition: 0.5s ease-in-out;
        }
        input:hover,
        input:focus,
        input:active {
            outline: none!important; 
            border-top: 0.125rem solid #3E73B7;
        }

        /*  LOADING MESSAGE CSS */
        .load .dot {
            display: inline-block;
            width: 0.375rem;
            height: 0.375rem;
            border-radius: 0.25rem;
            margin-right: 0.125rem;
            background-color: rgba(255,255,255,0.75); 
        }
        .load .dot:nth-last-child(1) {
            animation: loadAnim 1s .2s linear infinite;
        }
        .load .dot:nth-last-child(2) {
            animation: loadAnim 1s .4s linear infinite;
        }
        .load .dot:nth-last-child(3) {
            animation: loadAnim 1s .6s linear infinite;
        }
        @keyframes loadAnim {
            0 {transform: translate(0,0);}
            25% {transform: translate(0,-0.25rem);}
            50% {transform: translate(0,0);}
        }
    </style>
</head>
<body data-spy="scroll" data-offset="80" cz-shortcut-listen="true">
    <?php
    include('./nav.php');
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow animated fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="sub-header"></div>
                    <div class="center-heading text-center">
                        <h2>Acerca del agente conversacional</h2>
                        <span class="icon"><i class="fa-solid fa-briefcase fa-bounce fa-lg"></i></span> 
                    </div>
                </div>
            </div>
    </section>
    <section id="about1" class="section-padding">
        <div class="container">
            <div class="service-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: hidden; animation-duration: 700ms; animation-delay: 300ms; animation-name: none;">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="fa-solid fa-comments fa-beat-fade"></i>
                        <!-- <h3>Comunidad de mujeres de trabajo colectivo</h3> -->
                        <p>El agente conversacional o agente chatbot, permite a las usuarias obtener información, que pueda ser de su interés. Para llevar a cabo esta tarea el agente chatbot puede recibir preguntas o búsquedas, posteriormente procesarlas y verificar si cuenta con la información requerida para poder mostrarla a la usuaria.</p>
                        <p>El agente chatbot puede ser usado en tres categorías de búsqueda, el primero de ellos consiste en encontrer perfiles que cumplan con alguna de las características solicitadas. En las siguientes imágenes se muestran ejemplo de esta categoría.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="divided-50"></div>
        <div class="text-center">
            <img src="./images/header_index.png" class="img-fluid" style="width: 700px;" alt="Introducción">
        </div>
    </section>
    <section>
        <?php
        include("./m/funciones.php");
        // Queremos iniciar sesión.
        $user = $_COOKIE["usr_lamas"];
        if ($user) {
        ?>
        <div id="viewport">
            <div class="chatbox">
                <div class="chats">
                    <ul id="chatlist">
                        <li>
                            <div class="msg him">
                                <span class="partner">Paola</span>¡Hola!<span class="time"><?= date("Y-m-d H:i:s"); ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="msg him">
                                <span class="partner">Paola</span>¿Puedo ayudarte en algo?<span class="time"><?= date("Y-m-d H:i:s"); ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="msg him">
                                <span class="partner">Paola</span>Soy un sistema inteligente que puedo ayudarte a:<span class="time"><?= date("Y-m-d H:i:s"); ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="msg him">
                                <span class="partner">Paola</span>Navegar la información de tu trabajo digital.<span class="time"><?= date("Y-m-d H:i:s"); ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="msg him">
                                <span class="partner">Paola</span>Así como conectar con otras colegas.<span class="time"><?= date("Y-m-d H:i:s"); ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <div class="bar">
                    <input id="chatmessage" name="chatmessage" class="searchbar" placeholder="Necesito consejos sobre cómo comunicarme de manera efectiva" type="text" title="Search">
                    <i id="lupa" class="fa-solid fa-magnifying-glass fa-2xl"></i>
                </div> -->
                <div class="sendBox text-center">
                    <input id="chatmessage" name="chatmessage" type="text" placeholder="¡Habla conmigo!" />
                    <!-- <a id="lupa">Enviar <i class="fa-solid fa-magnifying-glass fa-2xl"></i></a> -->
                </div>
            </div>
        </div>
        <?php
        } else {
        ?>
            <div class="container">
                <div class="wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: hidden; animation-duration: 700ms; animation-delay: 300ms; animation-name: none;">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="px-4 my-5 text-center">
                                <div class="col-lg-6 mx-auto">
                                    <h4 style="color: #804CAE !important; font-family: PoppinsMedium;">Inicia sesión para ingresar en esta sección</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 mx-auto">
                <p class="lead mb-5 text-decoration-underline">Conecta con estas mujeres para aprender más acerca de comunicación afectiva:</p>
            </div>
            <div class="container_cards">
                <div class="my_card">
                    <br>
                    <img src="./images/woman1.jpg" class="img-fluid my_card_img" alt="Foto">
                    <br>
                    <div class="my_card_descripcion">
                        <br>
                        <h2 class="text-center" style="color: black;">Amarania Gómez Regalafo</h2>
                        <hr>
                        <div class="text-uppercase">Habilidades y experiencias:</div>
                        <ul>
                            <li class="text-uppercase text-decoration-underline">Comunicación efectiva</li>
                            <li class="text-uppercase">Organizando</li>
                            <li class="text-uppercase">Liderazgo</li>
                        </ul>
                        <div class="text-uppercase">Intereses:</div>
                        <ul>
                            <li class="text-uppercase">Antropología</li>
                            <li class="text-uppercase">Activismo social</li>
                        </ul>
                        <div class="position-relative py-2 px-5">
                            <a class="hero-btn" href="#"><i class="fa-solid fa-plus"></i>&nbsp;Conectar</a>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="my_card">
                    <br>
                    <img src="./images/woman2.jpg" class="img-fluid my_card_img" alt="Foto">
                    <br>
                    <div class="my_card_descripcion">
                        <br>
                        <h2 class="text-center" style="color: black;">María Sabina</h2>
                        <hr>
                        <div class="text-uppercase">Habilidades y experiencias:</div>
                        <ul>
                            <li class="text-uppercase">Desarrollo web</li>
                            <li class="text-uppercase text-decoration-underline">Comunicación efectiva</li>
                            <li class="text-uppercase">Trabajo en equipo</li>
                        </ul>
                        <div class="text-uppercase">Intereses:</div>
                        <ul>
                            <li class="text-uppercase">Cantando</li>
                            <li class="text-uppercase">Programacióm</li>
                        </ul>
                        <div class="position-relative py-2 px-5">
                            <a class="hero-btn" href="#"><i class="fa-solid fa-plus"></i>&nbsp;Conectar</a>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="my_card">
                    <br>
                    <img src="./images/woman3.jpg" class="img-fluid my_card_img" alt="Foto">
                    <br>
                    <div class="my_card_descripcion">
                        <br>
                        <h2 class="text-center" style="color: black;">Kaily Jurado</h2>
                        <hr>
                        <div class="text-uppercase">Habilidades y experiencias:</div>
                        <ul>
                            <li class="text-uppercase">Interpretación de texto</li>
                            <li class="text-uppercase">Comprensión lectora</li>
                            <li class="text-uppercase text-decoration-underline">Comunicación efectiva</li>
                        </ul>
                        <div class="text-uppercase">Intereses:</div>
                        <ul>
                            <li class="text-uppercase">Actuando</li>
                            <li class="text-uppercase">Mercadeo en línea</li>
                        </ul>
                        <div class="position-relative py-2 px-5">
                            <a class="hero-btn" href="#"><i class="fa-solid fa-plus"></i>&nbsp;Conectar</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div> -->
        <?php
        }
        ?>
    </section>
    <?php
    include('./footer.php')
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
        function getDateTime() {
            var month 	= ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];	
            var d 		= new Date(),
                month 	= (month[d.getMonth()]),
                day 	= d.getDate().toString(),
                hour 	= d.getHours().toString(),
                min 		= d.getMinutes().toString();
                (day.length < 2) ? day = '0' + day : '';
                (hour.length < 2) ? hour = '0' + hour : '';
                (min.length < 2) ? min = '0' + min : '';		
            var res = '' + month + ' ' + day + ' ' + hour +  ':'  +  min;
            return res;
        }

        $('#chatmessage').keypress(function(e) {
            if(e.which == 13) {
                var chatmessage = $("#chatmessage").val();
                if (chatmessage !== "") {
                    <?php
                    $query = "SELECT * FROM users WHERE username = '$user';";
                    $consulta = select($query);
                    ?>
                    var user = '<?= $user; ?>';
                    var userId = '<?= $consulta[0]['id']; ?>';
                    var adajson = {
                        mensaje : chatmessage,
                        userid: userId
                    };

                    $("#chatmessage").val("");
                    $("#chatlist").append(
                        '<li>' +
                            '<div class="msg you">' +
                                '<span class="partner">Tú</span>' + chatmessage + '<span class="time">' + getDateTime() + '</span>' +
                            '</div>' +
                        '</li>' +
                        '<li class="pending">' +
                            '<div class="msg load">' +
                                '<div class="dot"></div><div class="dot"></div><div class="dot"></div>' +
                            '</div>' +
                        '</li>'
                    );

                    $.ajax({
                        type: "POST",
                        url: "./chatpy/chatbot.php",
                        data: JSON.stringify(adajson),
                        success: function(result) {                       
                            var bubble = "";
                            var objects = [];
                            var returned = JSON.parse(result);

                            $(".pending").remove();

                            if((returned.category == "1" && returned.response == "Lo siento, no hay alguna candidata con las características solicitadas") || returned.category == "3" || returned.category == "4") {
                                bubble =
                                    '<li>' +
                                        '<div class="msg him">' +
                                            '<span class="partner">Paola</span>' + returned.response + '<span class="time">' + getDateTime() + '</span>' +
                                        '</div>' +
                                    '</li>';
                            } else if(returned.category == "2") {
                                var titulo = "";
                                var contenido = "";
                                var response = "";
                                for(var i in returned.response) {
                                    titulo = returned.response[i][0];
                                    contenido = returned.response[i][1];
                                    response = "<b style='color: #FFCC15; font-weight: bolder;'>" + titulo + "</b> " + contenido;
                                    bubble +=
                                        '<li>' +
                                            '<div class="msg him">' +
                                                '<span class="partner">Paola</span>' + response + '<span class="time">' + getDateTime() + '</span>' +
                                            '</div>' +
                                        '</li>';
                                }
                            } else if(returned.category == "1") {
                                var username = "";
                                var softskills = "";
                                var techskills = "";
                                var platforms = "";
                                var response = "";
                                for(var i in returned.response) {
                                    console.log(returned.response[i]);
                                    username = returned.response[i]['username'];
                                    softskills = returned.response[i]['softskills'];
                                    techskills = returned.response[i]['techskills'];
                                    platforms = returned.response[i]['platforms'];

                                    response = "La usuaria <b style='color: #FFCC15; font-weight: bolder;'>" + username + "</b> con habilidades blandas <b style='color: #FFCC15; font-weight: bolder;'>" + softskills + "</b>, con habilidades técnicas <b style='color: #FFCC15; font-weight: bolder;'>" + techskills + "</b> y en las plataformas <b style='color: #FFCC15; font-weight: bolder;'>" + platforms + "</b> podría serte de ayuda.";
                                    
                                    bubble +=
                                        '<li>' +
                                            '<div class="msg him">' +
                                                '<span class="partner">Paola</span>' + response + '<span class="time">' + getDateTime() + '</span>' +
                                            '</div>' +
                                        '</li>';
                                    
                                    username = "";
                                    softskills = "";
                                    techskills = "";
                                    platforms = "";
                                    response = "";
                                }
                            }
                            $("#chatlist").append(bubble);
                        }
                    });
                }
            }
        });	


        $("#lupa").on("click", function() {
            
        });
    </script>
</body>
</html>
