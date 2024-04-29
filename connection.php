<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "dog_shelter";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

//var_dump($connection);

if (!$connection) {
    die("Connection failed");
};

/* $query = "SELECT * FROM `dog`";
$result = mysqli_query($connection, $query); */
/* var_dump($result);

var_dump($result->fetch_assoc()); */
