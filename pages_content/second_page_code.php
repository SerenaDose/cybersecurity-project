
<ul id="slide-out" class="sidenav sidenav-fixed">
    <li class="grey darken-3 "><a class="white-text" style="text-align:right" href="logout.php">Logout</a></li>
    <li class="grey darken-3 "><a class="white-text" style="text-align:right" href="restore-password.php">Recupera password</a></li>
    <li><a href="intro.php">00. Intro </a></li>
    <li><a href="first_page.php">01. First Page</a></li>
    <li><a class="cyan" href="second_page.php">02. Second Page</a></li>
    <li><a href="third_page.php">03. Third Page</a></li>
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
    ?>

    <div class="row " >
        <h1>Second Page</h1>

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

</div>