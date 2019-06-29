<?php 
require_once 'classes/pwd_generator_class.php';

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
                                            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password-signin" type="password" class="validate">
                                            <label for="password-signin">Password</label>
                                        </div>
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
            
        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.tabs').tabs();
            });

            function checkForm() {
                // Fetching values from all input fields and storing them in variables.
                var user = document.getElementById("email-signin").value;
                var password = document.getElementById("password-signin").value;
                //Check input Fields Should not be blanks.
                if (user == '' || password == '') {
                    alert("Devi riempire tutti i campi per procedere");
                } else {
                    //Notifying error fields
                    var username1 = document.getElementById("username");
                    var password1 = document.getElementById("password");
                    var email1 = document.getElementById("email");
                    var website1 = document.getElementById("website");
                    //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
                    if (username1.innerHTML == 'Must be 3+ letters' || password1.innerHTML == 'Password too short' || email1.innerHTML == 'Invalid email' || website1.innerHTML == 'Invalid website') {
                        alert("Fill Valid Information");
                    } else {
                        //Submit Form When All values are valid.
                        document.getElementById("myForm").submit();
                    }
                }
            }
            // AJAX code to check input field values when onblur event triggerd.
            function validate(field, query) {
                var xmlhttp;
                if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
                        document.getElementById(field).innerHTML = "Validating..";
                    } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById(field).innerHTML = xmlhttp.responseText;
                    } else {
                        document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
                    }
                }
                xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
                xmlhttp.send();
            }









        </script>
    </body>
</html>