<?php
require __DIR__ . "/connection.php";
require __DIR__ . "./models/Dog.php";

//in js, al click, parte una funzione che fa una axios post request che invia l'oggetto dogData a delete_dog.php come se fossero dati di un form. delete_dog.php gestisce la richiesta, memorizza il dato con chiave id dentro una variabile. Devo chiamare un metodo statico della classe Dog che mi permette di eliminare il cane selezionato

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
