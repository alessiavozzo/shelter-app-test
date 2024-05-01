<?php
require __DIR__ . "/connection.php";
require __DIR__ . "/models/Dog.php";
var_dump($_POST["age"]);
var_dump(!is_numeric($age));

if (isset($_POST)) {
    //var_dump($_POST);
    $name = $_POST["name"];
    $age = $age !== '' ? intval($_POST["age"]) : null;
    $breed = $_POST["breed"];
    $gender = $_POST["gender"];
    $weight = $weight !== "" ? intval($_POST["weight"]) : null;
    $description = $_POST["description"];

    //controllo se i valori obbligatori (nome, sesso e razza) sono stati forniti
    if (!empty($name) && !empty($breed) && !empty($gender)) {
        //controllo se i campi non obbligatori (età, peso, descrizione) sono validi e, se non lo sono, gli assegno null
        /* if (!is_numeric($age)) {
            $age = null;
        };
        if (!is_numeric($weight)) {
            $weight = null;
        };
        if (empty($description)) {
            $description = null;
        }; */

        $new_dog = new Dog($name, $age, $breed, $gender, $weight, $description, $connection);
        if ($new_dog->addDogToDatabase()) {
            header("Location: ./index.php");
        } else {
            echo "errore";
        };
        /* $query = "INSERT INTO `dogs` (`name`, `age`, `breed`, `gender`, `weight`, `description`) VALUES ('$name', '$age', '$breed', '$gender', '$weight', '$description');";
        $result = mysqli_query($connection, $query); */
    }
}
