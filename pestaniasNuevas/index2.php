<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <header>
        <div class="logo"></div>
        <div class="tercerizacion"></div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="../js/bxslider/jquery.bxslider.min.js"></script>
        <link href="../js/bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link href="./css/index.css" rel="stylesheet"/>
        <script type="text/javascript">
            $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
            });
            });
        </script>
    </header>
    <body>
            <ul class="bxslider">
            <li><img src="../images/01.jpg" /></li>
            <li><img src="../images/02.jpg" /></li>
            </ul>
    </body>
    
</html>
