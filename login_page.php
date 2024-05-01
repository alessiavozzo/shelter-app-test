<?php
require_once __DIR__ . "/session_data.php";

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
                $_SESSION["name"] = $row["name"];
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
    <title>Dog shelter - Login</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php include_once __DIR__ . "/views/layouts/header.php" ?>

    <main id="login_main">
        <!-- offcanvas for admin login -->
        <?php include_once __DIR__ . "/views/layouts/offcanvas.php" ?>

        <div class="container">

            <!-- login form -->
            <form action="" method="post" class="w-50 my-5 mx-auto p-4 border rounded">
                <!-- email -->
                <div class="mb-3">
                    <label for="user_email" class="form-label">Inserisci il tuo indirizzo email:</label>
                    <input type="email" name="user_email" id="user_email" required class="form-control" placeholder="example@example.com">
                </div>
                <!-- pw -->
                <div class="mb-3">
                    <label for="user_password" class="form-label">Inserisci la tua password:</label>
                    <input type="password" name="user_password" id="user_password" required class="form-control" placeholder="password">
                </div>
                <!-- submit -->
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>



    </main>


    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>