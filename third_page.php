<?php 

$cookie_name = "PageFour";
$cookie_value = "1";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-learning | Intro</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <?php
        session_start();
        if(!isset($_SESSION['loggato'])) {
            //distruggo la sessione
            session_destroy();

            echo '<div class="container">';
            echo '<p>Devi fare il login per accedere a questa pagina<p>';
            echo '<p> Ora verrai reindirizzato alla pagina di login</p>';
            echo '</div>';
            header("Refresh:3;url=index.php");

        }
        else{
            include('pages_content/third_page_code.php');
        }

        ?>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.tabs').tabs();
                $('.sidenav').sidenav();
            });

        </script>


    </body>
</html>