<?php
session_start();
// if            $_SESSION['loggedin'] = true;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}
?>
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
    </style>
</head>
<body>

<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h3 class="w3-padding-64"><b>KW Supply<br>Magneetsystemen B.V.</b></h3>
        <?php   
        echo $_SESSION['username'];
        echo "<BR>";
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
        } else {
            echo "You are not an admin.";
        }
        ?>
    </div>
    <div class="w3-bar-block">
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
        <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Info</a>
        <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Orders</a>
        <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Leveranciers</a>
        <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contactpersonen</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Facturen</a>
        <a href="admin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Admin Portal</a>
    </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>KW Supply Magneetsystemen B.V.</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <h1 class="w3-jumbo"><b>Order management</b></h1>
        <h1 class="w3-xxxlarge w3-text-red"><b></b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
    </div>

    <!-- Photo grid (modal) -->
    <div class="w3-row-padding">
        <div class="w3-half">
        </div>

        <div class="w3-half">
            <img src="grote-neodymium-magneet-blok.jpg" style="width:20%" onclick="onClick(this)" alt="Hier kan een foto geplaatst worden">
            <img src="grote-neodymium-magneet-blok.jpg" style="width:20%" onclick="onClick(this)" alt="Hier kan een foto geplaatst worden.">
            <img src="grote-neodymium-magneet-blok.jpg" style="width:20%" onclick="onClick(this)" alt="Hier kan een foto geplaatst worden.">
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption"></p>
        </div>
    </div>

    <!-- Orders -->
    <div class="w3-container" id="services" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Orders.</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
        <p>
            Hier komen de toekomstige orders die geplaatst gaan worden te staan.

            <a href="Orderformmaker.php" class="button button1">Klik hier om een order aan te maken </a>

        </p>
    </div>

    <!-- Leveranciers -->
    <div class="w3-container" id="designers" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Leveranciers.</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
        <p>Leveranciers van hoge kwaliteit.</p>
        <p><b></b>:</p>
    </div>

    <!-- The Team -->
    <div class="w3-row-padding w3-grayscale">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <div class="w3-container">
                    <h3>Rob Krebs</h3>
                    <p class="w3-opacity">CEO & Founder</p>
                    <p>De beste zakenman van Krimpen aan de Lek.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contactpersonen -->
    <div class="w3-container" id="packages" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Contactpersonen.</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
        <p>
            Hier komen de toekomstige contactpersonen te staan, om een overzicht te krijgen.
        Zoals contactpersonen van bedrijven, klanten.
        </p>
    </div>

    <!-- Info -->
    <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Facturen</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
        <p>K.W. Supply Magneetsystemen Order management website. Hieronder kan er een factuur opgesteld worden.</p>
        <form action="/action_page.php" target="_blank">
            <div class="w3-section">
                <label>Naam van bedrijf, contactpersoon</label>
                <input class="w3-input w3-border" type="text" name="Name" required>
            </div>
            <div class="w3-section">
                <label>Email van bedrijf</label>
                <input class="w3-input w3-border" type="text" name="Email" required>
            </div>
            <div class="w3-section">
                <label>Prijs en onderdelen</label>
                <input class="w3-input w3-border" type="text" name="Message" required>
            </div>
            <div class="w3-section">
                <label>Datum en tijd</label>
                <input class="w3-input w3-border" type="text" name="Date" required>
            </div>
            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Sla factuur op</button>
        </form>
    </div>

    <!-- End page content -->
</div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }
</script>

</body>
</html>
