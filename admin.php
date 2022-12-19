<html>  
<head>  
    <title>Admin Portal</title> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head> 
<?php
include('connection.php');
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['admin'] == 1) {
    echo "Welkom " . $_SESSION['username'] . "!";
    echo "Deze pagina is alleen voor admins!";
    echo "Klik <a href='logout.php'>hier</a> om uit te loggen.";
} else {
    echo "Deze pagina is alleen voor admins!";
    sleep (2);
    header("Location: index.php");
}
?>
<!-- create Register form redirect to register.php-->
<body>
<form action="register.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <label for="admin" class="admin">Admin</label>
    <input type="checkbox" name="admin" id="admin">
    <input type="submit" value="Register">
</form>
</body>
</html>