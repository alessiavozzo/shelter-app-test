<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "test_db";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

var_dump($connection);
