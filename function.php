<?php 

error_reporting(0);


//funzione per la connessione al database
function dbConnect() {
    $conn = mysql_connect('localhost', 'cybersecurityproject','' , 'my_cybersecurityproject') or die 
        ('Impossibile connettersi al database'); //Returns a MySQL link identifier on success or FALSE on failure
    mysql_selectdb('my_cybersecurityproject') or die ('Errore nella selezione del db');
    return $conn;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
}



function storePassword($email, $password){

    $conn = dbConnect();

    $password_string = mysqli_real_escape_string($password);

    $password_hash = password_hash($password_string, PASSWORD_BCRYPT);


    $mysql_query = "INSERT INTO cy_users (email, password)
                  VALUES ('".$email ."', '". $password_hash ."')";

    if(!mysql_query($mysql_query)){  //stampo un errore
        echo '<div class="alert alert-danger"><strong>Attenzione errore nella query:</strong> ' . $sql . "\n" . mysql_error() .'</div>';
    }
    else{
        echo '<div >
				<strong>Utente inserito con successo, ora verrai reindirizzato al tuo materiale</strong>
			  </div>';
        header( "refresh:3;url=intro.php" );
    }


    mysqli_query($conn, $mysql_query);

    mysqli_close($conn);
}

function verifyPassword($email, $password){


    $conn = dbConnect();

    $password_string = mysqli_real_escape_string($password);

    $sql = mysql_query("SELECT password FROM cy_users WHERE email = '$email'");
    $row = mysql_fetch_array($sql)or die("Errore nella query: " . $sql . "\n" . mysql_error());
    $hash = $row['password'];

    if (password_verify($password_string, $hash )) {
        return true;

    } else {
        return false;

    }
    mysqli_close($conn);
}

?>

