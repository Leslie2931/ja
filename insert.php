<?php
$id = $_POST('id');
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

if (!empty($naam) || !empty($email) || !empty($bedrijf) || !empty($telnum) || !empty($artikelen)
|| !empty ($prijs) || !empty ($btwnr) || !empty($kvknr) || !empty ($datum) || !empty($status)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "orders";

    // connectie maken
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    }
    else {
        $SELECT = "SELECT email from register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (naam, email, bedrijf, telnum, artikelen, prijs, btwnr, kvknr, datum, status)
                                         values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //prepare statement
            $stmt = $conn-prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {

            }
        }

}