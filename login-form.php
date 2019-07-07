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
                    <form action="verifica_utente.php" name='form-login' method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name='email' type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name='password' type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <input type='submit' name ='entra' value='entra' class="waves-effect waves-light btn cyan col l12"/>
                        </div>
                        <div class="row">
                            <p>Hai dimenticato la password?<br> 
                                <a href="restore-password.php">Recupera password!</a></p>
                            <p>Non hai ancora un account?<br> Iscriviti!</p>
                        </div>
                    </form>
                </div>
                <!-- End login form -->
                <!-- Sign in form -->
                <div id="sign-in">
                    <form action="inserisci_utente.php" name='form-signin' method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email-signin" name='email-signin' type="email" class="validate">
                                <label for="email-signin">Email</label>
                                <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password-signin" name='password-signin' type="password" class="validate">
                                <label for="password-signin">Password</label>
                            </div>
                            Vuoi una password sicura generata automaticamente?<br> <a  class="cyan-text" href="index_return_password.php#sign-in">Genera password</a>
                        </div>
                        <div class="row">
                            <input type='submit' name ='submit' value='iscriviti' class="waves-effect waves-light btn cyan col l12"/>
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