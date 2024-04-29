<?php
require __DIR__ . "/connection.php";

if (isset($_POST)) {
    //var_dump($_POST);
    $name = $_POST["name"];
    $age = $_POST["age"];
    $breed = $_POST["breed"];
    $gender = $_POST["gender"];
    $weight = $_POST["weight"];
    $description = $_POST["description"];
    $query = "INSERT INTO `dogs` (`name`, `age`, `breed`, `gender`, `weight`, `description`) VALUES ('$name', '$age', '$breed', '$gender', '$weight', '$description');";
    $result = mysqli_query($connection, $query);
    header("Location: ./index.php");
}
