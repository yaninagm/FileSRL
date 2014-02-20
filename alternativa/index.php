<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- CSS -->
        <link rel="stylesheet" href="../js/bxslider/jquery.bxslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="estilos.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/pestanias.css" type="text/css" media="screen" />
        <!--[if IE 8]>
                <link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
        <![endif]-->
        <!-- ENDS CSS -->	

        <!-- GOOGLE FONTS 
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->

        <!-- JS -->
        <script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.8.13.custom.min.js"></script>
        <script type="text/javascript" src="../js/easing.js"></script>
        <script type="text/javascript" src="../js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="../js/custom.js"></script>

        <!-- Isotope -->
        <script src="../js/jquery.isotope.min.js"></script>

        <!--[if IE]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!--[if IE 6]>
                <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
                <script>
                /* EXAMPLE */
                //DD_belatedPNG.fix('*');
        </script>
        <![endif]-->
        <!-- ENDS JS -->
        <!-- acordion -->
        <meta charset="utf-8">
        <title>jQuery UI Accordion - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
            $(function() {
                $("#accordion").accordion();
            });
        </script>
        <!-- fin acordion -->
    </head>

    <body>
        <div id="contenedor">
       
        <div id="encabezado" >
            
            <div id="cinta1"></div>
            <div id="iso"></div>
            <div id="encabezado2"></div>
            <div id="cinta2"></div>
        </div>
                   
        <div id="cuerpo">
            <!-- ficheros -->
            <div class="tabs" >
                <div class="tab">
                    <input type="radio" id="tab-1" name="tab-group-1" checked>
                    <label class="menu_boton" for="tab-1">Inicio </label>
                    <div class="content"> 
                        <!-- Slider -->
                        <div id="slider-block">
                            <div id="slider-holder">
                                <div id="slider">
                                    <img src="images/01.jpg" title="" alt="" />
                                    <img src="images/02.jpg" title="" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- ENDS Slider -->               
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" id="tab-2" name="tab-group-1">
                    <label  class="menu_boton" for="tab-2">Servicios</label>
                    <div class="content">
                        <?php include '../box/acordion.php';?>
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" id="tab-3" name="tab-group-1">
                    <label class="menu_boton" for="tab-3">Contacto</label>
                    <div class="content"> el contenido de la pestaña 3 </div>
                </div>
                <div class="tab">
                    <input type="radio" id="tab-4" name="tab-group-1">
                    <label class="menu_boton" for="tab-4">Novedades</label>
                    <div class="content"> el contenido de la pestaña 3 </div>
                </div>
            </div>
            <!-- Fin Fichero -->
        </div>
            <?php include '../box/pie.php';?>
        </div>
    </body>
</html>
