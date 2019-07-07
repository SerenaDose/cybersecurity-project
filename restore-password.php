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

    <body >
        <div class="row padding-top" >
<div class="col s12 l4">

        </div>
        
    <div class="grid-example col s12 l4">
        <div class="card">
            <div class="card-content">
            <div id="log-in">
                <form action="verifica_restore_password.php" name='form-login' method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name='email' type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div><div class="row">
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name='password' type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <input type='submit' name ='reimposta-password' value='reimposta password' class="waves-effect waves-light btn cyan col l12"/>
                    </div>

                </form>
            </div>     
                   </div>

        <!-- Promo Content 1 goes here -->
      </div>
        </div>
            <div class="col s12 l4">
   
        </div>
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
