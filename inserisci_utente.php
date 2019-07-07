<?php 

include('function.php');

if(isset($_POST['submit'])){
    $email = $_POST['email-signin'];
    $password = $_POST['password-signin'];
    $secret_key = "6Lf2cKwUAAAAAHSXjwLl_9z1XJ8NmAcHwUqBwQyx";
    $response_key = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    
    $url= "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response_key&remoteip=$userIP";
    $response = file_get_contents($url);
    
}
else{
    echo '<div >
				<strong>Compila tutti i campi, grazie.</strong>
			  </div>';
    header( "refresh:3;url=index.php" );
}


?>
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

    <body >
        <div class="container">
            <?php
            //controllo campi completati
            if($email != "" && $password != "" && (strpos($response, '"success": true') !== FALSE)){
                
                if(isUserInDatabase($email)){
                    echo '<div >
				<strong>Questa email è già presente nel database.<br>
                Effettua il login o cambia email.</strong>
			  </div>';
                header( "refresh:3;url=index.php" );
                }else{
                storePassword($email, $password);
                }
            }
            else{
                 echo '<div >
				<strong>Asscicurati di selezionare la checkbox del Captcha</strong>
			  </div>';
                
                echo '<div class="alert alert-danger">
				<strong>Compila tutti i campi, grazie.</strong>
			  </div>';
                header( "refresh:3;url=index.php" );
            }
            ?>

        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.tabs').tabs();
            });
        </script>
    </body>
</html>
