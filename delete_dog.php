<?php
require __DIR__ . "/connection.php";
/* var_dump($_SERVER);
var_dump($_GET);
var_dump(file_get_contents("php://input"));
$test = json_decode(file_get_contents("php://input"), true);
var_dump($test["id"]);
$data = file_get_contents("php://input");
var_dump($data);
$decoded = json_decode($data, true);
var_dump($decoded); */

/* var_dump($_POST);
$data = file_get_contents("php://input");
var_dump($data);
$decoded = json_decode($data, true);
var_dump($decoded); */

if (!empty($_POST)) {
    //echo $_POST["id"];
    $dog_id = $_POST["id"];
    echo "$dog_id";
    $query = "SELECT * FROM `dogs` WHERE `dogs`.`id` = $dog_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    echo $row["name"];
}
