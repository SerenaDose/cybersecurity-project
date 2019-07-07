<?php 
require_once 'classes/pwd_generator_class.php';
include('function.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>E-learning | Login</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div class="container">
            
            <?php

            session_start();

            //Se la sessione è attiva reinderizza all'intro, altrimenti mostra il form di login
            if( !isset($_SESSION['loggato']) ){

                include('login-form-generate-password.php');

            }else{
                
                echo '<div class="alert alert-danger">
				<strong>Hai già effettuato il login, ti sto reindirizzando al tuo materiale</strong>
			  </div>';
                header( "refresh:3;url=intro.php" );
            }                                  
            ?>      
       
        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.tabs').tabs();
            });

        </script>


    </body>
</html>