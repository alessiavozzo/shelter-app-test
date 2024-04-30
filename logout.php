<?php
session_start();
//se esiste "logout" nella query string e se è true
if (isset($_GET["logout"]) && $_GET["logout"] == true) {
    //cancello variabili dalla session
    session_unset();
    //elimino la session
    session_destroy();
    //reindirizzo alla homepage
    header("Location: ./index.php");
    die();
}
