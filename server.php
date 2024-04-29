<?php
require __DIR__ . "/connection.php";
require __DIR__ . "/models/Dog.php";

if (isset($_POST)) {
    //var_dump($_POST);
    $name = $_POST["name"];
    $age = $_POST["age"];
    $breed = $_POST["breed"];
    $gender = $_POST["gender"];
    $weight = $_POST["weight"];
    $description = $_POST["description"];
    $new_dog = new Dog($name, $age, $breed, $gender, $weight, $description, $connection);
    if ($new_dog->addDogToDatabase()) {
        header("Location: ./index.php");
    } else {
        echo "errore";
    };
    /* $query = "INSERT INTO `dogs` (`name`, `age`, `breed`, `gender`, `weight`, `description`) VALUES ('$name', '$age', '$breed', '$gender', '$weight', '$description');";
    $result = mysqli_query($connection, $query); */
}
