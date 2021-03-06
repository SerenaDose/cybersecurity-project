<?php 

include('function.php');

if(isset($_POST['reimposta-password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
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
            if($email != "" && $password != ""){
            updateUserPassword($email, $password);
            }
            else{
                echo '<div >
				<strong>Qualcosa non va, verifica di aver completato i campi in modo corretto</strong>
			  </div>';
                echo header( "refresh:3;url=restore-password.php" );
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
