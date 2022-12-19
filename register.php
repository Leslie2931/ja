<?php
include('connection.php');
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['admin'] == 1) {
    Register($_POST['username'], $_POST['password'], $_POST['admin']);
} else {
    echo "Deze pagina is alleen voor admins!";
    sleep (2);
    header("Location: index.php");
}