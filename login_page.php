<?php
session_start();
require __DIR__ . "/connection.php";

//controllo se è stato inviato il modulo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //controllo se i campi email e password non sono vuoti
    if (!empty($_POST["user_email"]) && !empty($_POST["user_password"])) {
        //assegno a variabili
        $email = $_POST["user_email"];
        $pw = $_POST["user_password"];

        //faccio una richiesta al database: seleziona tutti i risultati in users dove l'email è uguale all'email inviata con la richiesta post
        $query = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = mysqli_query($connection, $query);
        //var_dump($result);
        //recupero la riga del risultato come array associativo
        $row = mysqli_fetch_assoc($result);
        //var_dump($row);

        if ($result) {

            //se la password che ho inviato col form è uguale a quella del risultato recuperato, registro che l'utente è loggato nella session e vado sulla pagina principale
            if ($pw == $row["password"]) {
                echo "password ok";
                $_SESSION["isLogged"] = true;
                header("Location: ./index.php");
                die();
            } else {
                echo "password non valida";
                header("Location: ./login_page.php");
                die();
            };
        };
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="email" name="user_email">
        <input type="password" name="user_password">
        <button type="submit">Login</button>
    </form>
</body>

</html>