<?php 

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

		if(($_SESSION['loggato'])) {
			session_unset();
			setcookie("PHPSESSID", "", time() - 3600, "/");
			session_destroy();
			echo '<p>Logout eseguito con successo. A presto!';
		
		}
		else{
			header("Location: session_index.php");
			exit;	
		}
		?>
            
           
        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        
    </body>
</html>
