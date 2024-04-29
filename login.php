<?php
session_start();
require __DIR__ . "/connection.php";
var_dump($_SESSION);
var_dump($_SERVER);
var_dump($_POST["email"]);
var_dump($_POST["password"]);
var_dump($_SERVER["REQUEST_METHOD"] == "POST");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pw = $_POST["password"];

    $query = "SELECT * FROM `employee` WHERE `email` = '$email'";
    $result = mysqli_query($connection, $query);
    var_dump($result);
    $row = mysqli_fetch_assoc($result);
    var_dump($row);

    if ($result) {
        var_dump($row["password"]);
        var_dump($pw);
        var_dump(password_verify($pw, $row["password"]));
        if ($pw == $row["password"]) {
            echo "password ok";
            header("Location: ./add_dog.php");
            die();
        } else {
            echo "password non valida";
        };
    };
}
