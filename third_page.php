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

        <ul id="slide-out" class="sidenav sidenav-fixed">
            <li class="grey darken-3 "><a class="white-text" style="text-align:right" href="#">Logout</a></li>
            <li><a href="intro.php">00. Intro </a></li>
            <li><a href="first_page.php">01. First Page</a></li>
            <li><a href="second_page.php">02. Second Page</a></li>
            <li><a class="cyan" href="third_page.php">03. Third Page</a></li>
        </ul>

        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>


        <div class="container pages">
            
             <?php
            if(!isset($_COOKIE["PageOne"])) {
                echo '<span class="red-text text-darken-4">'.'Sarebbe meglio leggere prima l\'intro ' .'</span>'.'<br>';
            }
            if(!isset($_COOKIE["PageTwo"])) {
                echo '<span class="red-text text-darken-4">'.'Sarebbe meglio leggere prima la prima pagina' .'</span>';
            }
            if(!isset($_COOKIE["PageTwo"])) {
                echo '<span class="red-text text-darken-4">'.'Sarebbe meglio leggere prima la seconda pagina' .'</span>';
            }
            ?>
            
            <div class="row " >
                <h1>Third Page</h1>

                <p>
                    Biscuit tiramisu tart lollipop gingerbread. Ice cream sweet dessert topping cookie caramels tootsie roll apple pie. Gingerbread tiramisu bear claw carrot cake. Gummi bears donut candy canes fruitcake bonbon brownie candy toffee.
                    <br><br>Sesame snaps chupa chups jujubes cupcake. Chocolate bar lollipop brownie sesame snaps dessert cotton candy. Lemon drops donut pastry liquorice jujubes sugar plum. 
                </p>
                <p>
                    Biscuit tiramisu tart lollipop gingerbread. Ice cream sweet dessert topping cookie caramels tootsie roll apple pie. Gingerbread tiramisu bear claw carrot cake. Gummi bears donut candy canes fruitcake bonbon brownie candy toffee.
                    <br><br>Sesame snaps chupa chups jujubes cupcake. Chocolate bar lollipop brownie sesame snaps dessert cotton candy. Lemon drops donut pastry liquorice jujubes sugar plum. 
                </p>
                <p>
                    Biscuit tiramisu tart lollipop gingerbread. Ice cream sweet dessert topping cookie caramels tootsie roll apple pie. Gingerbread tiramisu bear claw carrot cake. Gummi bears donut candy canes fruitcake bonbon brownie candy toffee.
                    <br><br>Sesame snaps chupa chups jujubes cupcake. Chocolate bar lollipop brownie sesame snaps dessert cotton candy. Lemon drops donut pastry liquorice jujubes sugar plum. 
                </p>
            </div>

            <?php
            if(!isset($_COOKIE["PageOne"])) {
        
                echo 'alert("message successfully sent")';
   
            }
            ?>
        </div>

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