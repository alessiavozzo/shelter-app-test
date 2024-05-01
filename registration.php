<?php
require_once __DIR__ . "/session_data.php";
require __DIR__ . "/helpers/functions.php";
require_once __DIR__ . "/connection.php";

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
    <title>Dog-shelter - Signup</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <?php include_once __DIR__ . "/views/layouts/header.php" ?>

    <main id="signup_main">
        <!-- offcanvas for admin login -->
        <?php include_once __DIR__ . "/views/layouts/offcanvas.php" ?>

        <div class="container">

            <form action="" method="post" class="w-50 my-5 mx-auto p-4 border rounded">
                <!-- name -->
                <div class="mb-3">
                    <label for="name" class="form-label"><span class="text-danger">*</span>Inserisci il tuo nome:</label>
                    <input type="text" name="name" id="name" required class="form-control" placeholder="Mario">
                </div>
                <!-- lastname -->
                <div class="mb-3">
                    <label for="lastname" class="form-label"><span class="text-danger">*</span>Inserisci il tuo cognome:</label>
                    <input type="text" name="lastname" id="lastname" required class="form-control" placeholder="Rossi">
                </div>
                <!-- email -->
                <div class="mb-3">
                    <label for="email" class="form-label"><span class="text-danger">*</span>Inserisci il tuo indirizzo email:</label>
                    <input type="email" name="email" id="email" required class="form-control" placeholder="example@example.com">
                </div>
                <!-- pw -->
                <div class="mb-3">
                    <label for="password" class="form-label"><span class="text-danger">*</span>Inserisci una password:</label>
                    <input type="password" name="password" id="password" required class="form-control" placeholder="password">
                    <small>*Tip: inserisci almeno 8 caratteri tra cui una lettera maiuscola, un numero e un carattere speciale</small>
                </div>
                <!-- address -->
                <div class="mb-3">
                    <label for="address" class="form-label">Inserisci il tuo indirizzo:</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <!-- phone -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Inserisci il tuo numero di telefono:</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>

                <!-- message -->
                <div class="mb-3 text-danger">I campi contrassegnati con * sono obbligatori.</div>

                <!-- button -->
                <button type="submit" class="btn btn-primary">Registrati</button>
            </form>
        </div>
    </main>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>