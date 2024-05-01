<?php
require __DIR__ . "/connection.php";
require __DIR__ . "./models/Dog.php";

if (!empty($_POST)) {
    //echo $_POST["id"];
    $dog_id = $_POST["id"];
    /* echo "$dog_id";

    //prove per vedere cosa mi seleziona
    $query = "SELECT * FROM `dogs` WHERE `dogs`.`id` = $dog_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    echo $row["name"]; */

    //così funziona
    /* $query = "DELETE FROM `dogs` WHERE `id` = $dog_id";
    $result = mysqli_query($connection, $query); */

    //gestisco l'eliminazione con il metodo statico deleteDogFromDatabase definito nella class Dog
    Dog::deleteDogFromDatabase($dog_id, $connection);
}
