<?php
session_start();
require __DIR__ . "/connection.php";

//var_dump($_SESSION);
//var_dump($_SERVER);
//var_dump($_POST["email"]);
//var_dump($_POST["password"]);
//var_dump($_SERVER["REQUEST_METHOD"] == "POST");

//controllo se è stato inviato il modulo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //controllo se i campi email e password non sono vuoti
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        //assegno a variabili
        $email = $_POST["email"];
        $pw = $_POST["password"];

        //faccio una richiesta al database: seleziona tutti i risultati in employees dove l'email è uguale all'email inviata con la richiesta post
        $query = "SELECT * FROM `employees` WHERE `email` = '$email'";
        $result = mysqli_query($connection, $query);
        //var_dump($result);
        //recupero la riga del risultato come array associativo
        $row = mysqli_fetch_assoc($result);
        //var_dump($row);

        if ($result) {
            //var_dump($row["password"]);
            //var_dump($pw);
            //var_dump(password_verify($pw, $row["password"]));
            //se la password che ho inviato col form è uguale a quella del risultato recuperato, registro che l'impiegato è loggato (isLogged) nella session e vado sulla pagina di aggiunta cani, altrimenti torno alla homepage
            if ($pw == $row["password"]) {
                echo "password ok";
                $_SESSION["isLogged"] = true;
                $_SESSION["name"] = $row["name"];
                $_SESSION["admin"] = true;
                header("Location: ./index.php");
                die();
            } else {
                echo "password non valida";
                header("Location: ./index.php");
                die();
            };
        };
    }
}
