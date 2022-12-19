<html>  
<head>  
    <title>Order Management</title> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>  
<body>
    <h1> KW Order Management </h1>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" method = "POST">  
            <div class="form-group">
                <label for="user">Gebruikersnaam:</label>
                <input type="text" class="form-control" id="user" name="user">
            </div>
            <div class="form-group">
                <label for="pass">Wachtwoord:</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>  
    </div> 
<img src="picwish.png" alt="KW Supply Magneetsystemen Orders">
<?php
if(isset($_POST['submit'])){
        if(empty($_POST['user']) || empty($_POST['pass'])){
            echo "Gebruikersnaam en wachtwoord velden zijn leeg.";
        }
    }
?>
</body>     
</html>  