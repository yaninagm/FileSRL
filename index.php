<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/pestanias.css" type="text/css" media="screen" />
        <!--[if IE 8]>
                <link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
        <![endif]-->
        <!-- ENDS CSS -->	

        <!-- GOOGLE FONTS 
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>

        <!-- Isotope -->
        <script src="js/jquery.isotope.min.js"></script>

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


        <!-- Nivo slider -->
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
        <!-- ENDS Nivo slider -->



        <!-- Fancybox -->
        <link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <!-- ENDS Fancybox -->
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
            <div id="encabezado2">
                
            </div>
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
                        <div id="accordion">
                            <h3>Guarda de archivos</h3>
                            <div>
                                <p>
                                La Guarda de archivos es la ubicación de las 
                                cajas en el espacio físico asignado en nuestras instalaciones y 
                                acondicionado para la óptima conservación de la documentación.    
                                </p>
                            </div>
                            <h3>Digitalización</h3>
                            <div>
                                <p>
                                    La Digitalización es el proceso por el cual un documentos es transformado en una imagen digital.
                                    Pudiendo acceder al mismo desde múltiples ubicaciones sin la necesidad de acudir al documento físico.
                                </p>
                            </div>
                            <h3>Administración de archivos activos</h3>
                            <div>
                                <p>
                                    Se desarrolla en las instalaciones del cliente y consta del diseño,
                                    implementación y gestión de los circuitos documentales de la empresa y contempla 
                                    tanto los archivos físicos (papel) como los electrónicos, con provisión de software y de hardware.
                                </p>
                                <ul>
                                    <li>List item one</li>
                                    <li>List item two</li>
                                    <li>List item three</li>
                                </ul>
                            </div>
                           
                        </div>
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
        <div id="pieDePagina">
            <p> File S.R.L. - Los Alamos 1326 - B° Arizu - Godoy Cruz - Mendoza - Argentina | Tel/Fax.: (0261) 4246079 - 4244424 - 3509570 | Email: comercial@filesrl.com.ar

                -Versión 02 Octubre 2011- </p>



        </div> 
        </div>
    </body>
</html>