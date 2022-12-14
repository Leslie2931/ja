<!DOCTYPE html>
<html lang="en">
<head>
    <title>KW Order management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size:16px;}
        .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
        .w3-half img:hover{opacity:1}

        a.button {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        a.button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        a.button1:hover {
            background-color: #4CAF50;
            color: white;
        }
        form {
            margin:10px;
            padding: 0 5px;
            background: #F5F5F5;
        }
        label {
            display:block;
            font-weight:bold;
            margin:5px 0;
        }
    </style>
</head>

<body>

<p><b> Door de volgende velden in te voeren kan de order in de database komen te staan.</b></p>

<form action="insert.php" method="POST">
    <label for="naam">Naam: </label>
    <input type="text" id="naam" name="naam"><br><br>
    <label for="email">Email: </label>
    <input type="text" id="email" name="email"><br><br>
    <label for="bedrijf">Bedrijf: </label>
    <input type="text" id="bedrijf" name="bedrijf"><br><br>
    <label for="telnum">Telefoonnumer: </label>
    <input type="text" id="telnum" name="telnum"><br><br>
    <label for="artikelen">Artikelen: </label>
    <input type="text" id="artikelen" name="artikelen"><br><br>
    <label for="prijs">Prijs: </label>
    <input type="text" id="prijs" name="prijs"><br><br>
    <label for="btwnr">BTW-Nummer: </label>
    <input type="text" id="btwnr" name="btwnr"><br><br>
    <label for="kvknr">KVK-Nummer: </label>
    <input type="text" id="kvknr" name="kvknr"><br><br>
    <label for="datum">Datum: </label>
    <input type="text" id="datum" name="datum"><br><br>
    <label for="status">Status van order: </label>
    <input type="text" id="status" name="status"><br><br>

    <input type="submit" value="Submit">
</form>
<?php

include 'connection.php';
if(isset($_POST['submit'])){
    if(empty($_POST['naam']) || empty($_POST['email']) || empty($_POST['bedrijf']) || empty($_POST['telnum']) || empty($_POST['artikelen']) || empty($_POST['prijs']) || empty($_POST['btwnr']) || empty($_POST['kvknr']) || empty($_POST['datum']) || empty($_POST['status'])){
        echo "Vul alle velden in.";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Ongeldig email formaat";
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['naam'])) {
        echo "Ongeldige naam";
    }
}
?>






<p> <a href="Gebakkenbroodjes.php" class="button button1"> Klik hier om terug te gaan naar de home pagina. </a></p>

</body>

</html>
