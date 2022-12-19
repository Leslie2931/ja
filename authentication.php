<?php
include('connection.php');
// if submit and user and password are not empty then check if they match the database with pdo
Login($_POST['user'], $_POST['pass']);
?>