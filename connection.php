<?php  
function OpenCon(){
    // make $conn a global variable
    try{
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "ordermanagement";  
        // use pdo to connect to the database
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully"; 
        return $conn;
    }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
}  

function Login($username, $password)
{
    $conn = OpenCon();
    //use password_verify($password, $hash)
    $query = $conn->prepare("SELECT * FROM login WHERE username = :username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if(!$result){
        echo 'Gebruikersnaam of wachtwoord is incorrect!';
    }
    else{
        if(password_verify($password, $result['password'])){
            session_start();
            echo 'Welkom ' . $result['username'] . '!';
            if ($result['admin'] == 1) {
                $_SESSION['admin'] = 1;
                $_SESSION['username'] = $result['username'];
                $_SESSION['loggedin'] = true;
                header("Location: Gebakkenbroodjes.php");
            }
            // create a session variable to check if the user is logged in
            $_SESSION['username'] = $result['username'];
            $_SESSION['loggedin'] = true;
            header("Location: Gebakkenbroodjes.php");
        }
        else{
            echo 'Gebruikersnaam of wachtwoord is incorrect!';
        }
    }
}

function Select_order() {
    
}
function Register($username, $password, $admin)
{
    $conn = OpenCon();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO login (username, password, admin) VALUES (:username, :password, :admin)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hash);
    $stmt->bindParam(':admin', $admin);
    $stmt->execute();
    $count = $stmt->rowCount();
    if($count == 1){
        header('Location: index.php');
    }
    else{
        echo "Er is iets fout gegaan.";
    }
}

function Insert($naam, $email, $bedrijf, $telnum, $artikelen, $prijs, $btwnr, $kvknr, $datum, $status)
{
    $conn = OpenCon();
    $sql = "INSERT INTO orders (naam, email, bedrijf, telnum, artikelen, prijs, btwnr, kvknr, datum, status) VALUES (:naam, :email, :bedrijf, :telnum, :artikelen, :prijs, :btwnr, :kvknr, :datum, :status)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':bedrijf', $bedrijf);
    $stmt->bindParam(':telnum', $telnum);
    $stmt->bindParam(':artikelen', $artikelen);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->bindParam(':btwnr', $btwnr);
    $stmt->bindParam(':kvknr', $kvknr);
    $stmt->bindParam(':datum', $datum);
    $stmt->bindParam(':status', $status);
    $stmt->execute();
    $count = $stmt->rowCount();
    if($count == 1){
        echo "Order is toegevoegd";
        sleep (5);
        header("Location: Orderformmaker.php");
    }
    else{
        echo "Er is iets fout gegaan.";
    }
}
function CloseCon(){
    $conn = null;
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>