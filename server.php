<?php
require __DIR__ . "/connection.php";

if (isset($_POST)) {
    var_dump($_POST);
    $name = $_POST["name"];
    $query = "INSERT INTO `dogs` (`name`) VALUES ('$name')";
    $result = mysqli_query($connection, $query);
    header("Location: ./index.php");
}
