<?php
require __DIR__ . "/helpers/functions.php";
require __DIR__ . "/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    //controllo se già esiste un account e, se sì, mando l'utente alla pagina di login
    $control_query = "SELECT * FROM `users` WHERE `email` = '$email'";
    $control_result = mysqli_query($connection, $control_query);
    if (mysqli_num_rows($control_result) > 0) {
        header("Location: ./login_page.php");
        die();
    } else {
        //controllo il corretto inserimento dei dati per la registrazione
        if (!empty($name) && !empty($lastname) && checkValidEmail($email) && checkValidPassword($password)) {
            //inserisco nel db
            $query = "INSERT INTO `users` (`name`, `lastname`, `email`, `password`, `address`, `phone`) VALUES ('$name', '$lastname', '$email', '$password', '$address', '$phone');";
            $result = mysqli_query($connection, $query);
            header("Location: ./index.php");
            die();
        } else {
            echo "errore";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
</head>

<body>
    <form action="" method="post">
        <!-- name -->
        <div>
            <label for="name">Inserisci il tuo:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <!-- lastname -->
        <div>
            <label for="lastname">Inserisci il tuo cognome:</label>
            <input type="text" name="lastname" id="lastname" required>
        </div>
        <!-- email -->
        <div>
            <label for="email">Inserisci il tuo indirizzo email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <!-- pw -->
        <div>
            <label for="password">Inserisci il sesso del una password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <!-- address -->
        <div>
            <label for="address">Inserisci il tuo indirizzo:</label>
            <input type="text" name="address" id="address">
        </div>
        <!-- phone -->
        <div>
            <label for="phone">Inserisci il tuo numero di telefono:</label>
            <input type="text" name="phone" id="phone">
        </div>

        <!-- button -->
        <button type="submit">Invia</button>
    </form>
</body>

</html>