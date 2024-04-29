<?php
session_start();
if (isset($_GET["logout"]) && $_GET["logout"] == true) {
    //cancello variabili dalla session
    session_unset();
    //elimino la session
    session_destroy();
    //reindirizzo alla homepage
    header("Location: ./index.php");
    die();
}
