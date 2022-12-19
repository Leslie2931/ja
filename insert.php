<?php
session_start();
include('connection.php');
$naam = $_POST['naam'];
$email = $_POST['email'];
$bedrijf = $_POST['bedrijf'];
$telnum = $_POST['telnum'];
$artikelen = $_POST['artikelen'];
$prijs = $_POST['prijs'];
$btwnr = $_POST['btwnr'];
$kvknr = $_POST['kvknr'];
$datum = $_POST['datum'];
$status = $_POST['status'];
try {
    OpenCon();
    Insert($naam, $email, $bedrijf, $telnum, $artikelen, $prijs, $btwnr, $kvknr, $datum, $status);
} 
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}