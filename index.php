<?php 
require_once 'classes/pwd_generator_class.php'
    
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

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
        <div class="container">
            <div class="row padding-top" >
                <!-- Column left -->
                <div class="col s12 l6">
                    <h1>E-learning</h1>
                    <p>
                        Biscuit tiramisu tart lollipop gingerbread. Ice cream sweet dessert topping cookie caramels tootsie roll apple pie. Gingerbread tiramisu bear claw carrot cake. Gummi bears donut candy canes fruitcake bonbon brownie candy toffee.
                        <br><br>Sesame snaps chupa chups jujubes cupcake. Chocolate bar lollipop brownie sesame snaps dessert cotton candy. Lemon drops donut pastry liquorice jujubes sugar plum. 
                    </p>
                </div>
                <!-- End column left -->
                <!-- Column right -->
                <div class="grid-example col s12 l6">
                    <div class="card">
                        <div class="card-content">
                            <!-- Login form -->
                            <div id="log-in">
                                <form action="#">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email" type="email" class="validate">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" class="validate">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <a class="waves-effect waves-light btn cyan col l12">ENTRA</a>
                                    </div>
                                    <div class="row">
                                        <p>Non hai ancora un account?<br> Iscriviti!</p>
                                    </div>
                                </form>
                            </div>
                            <!-- End login form -->
                            <!-- Sign in form -->
                            <div id="sign-in">
                                <form action="#">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email-signin" type="email" class="validate">
                                            <label for="email-signin">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password-signin" type="password" class="validate">
                                            <label for="password-signin">Password</label>
                                        </div>
                                        <div id="region">Test</div>
                                        Vuoi una password sicura generata automaticamente?<br> <a  class="cyan-text" href="index_return_password.php#sign-in">Genera password</a>
                                    </div>
                                    <div class="row">
                                        <a class="waves-effect waves-light btn cyan col l12">ISCRIVITI</a>
                                    </div></form>
                            </div>
                            <!-- End sign in form -->
                        </div>
                        <!-- Tabs -->
                        <div class="card-tabs teal lighten-2">
                            <ul class="tabs tabs-fixed-width">
                                <li class="tab"><a class="active" href="#log-in">ENTRA</a></li>
                                <li class="tab"><a href="#sign-in">ISCRIVITI</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- End column right -->
            </div>
            		<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
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

            $( "#region" ).click(function() {
                $( "region" ).replaceWith( "<h2>New heading</h2>" );
            });

        </script>
    </body>
</html>