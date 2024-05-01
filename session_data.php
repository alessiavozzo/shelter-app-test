<?php
session_start();
//var_dump($_SESSION);
//var_dump($_SESSION["admin"]);
require __DIR__ . "/connection.php";

$showForm = true;
if ($_SESSION["isLogged"] == true) {
    $showForm = false;
}

$query = "SELECT * FROM `dogs`";
$result = mysqli_query($connection, $query);
//var_dump($result);
//var_dump($result->fetch_assoc());
//$dog = $result->fetch_assoc();
//var_dump(mysqli_fetch_assoc($result));

/* while ($row = mysqli_fetch_assoc($result)) {
var_dump($row);
}; */
