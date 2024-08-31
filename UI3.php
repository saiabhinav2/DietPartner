<?php
session_start();
if(empty($_SESSION["uname"] == true)) header("location:login.php");
 $host = "localhost";
$user = "root";
$pass = "";
$db   = "dietpartner";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}

// Step 4: Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $uname = $_POST["uname"];
    $pwd = $_POST["pswd"];
    
    // Step 5: Insert data into the database
    $insuser = $conn->query("select * from userdetails where uname='$uname' AND password = '$pwd'");
    if($insuser->rowCount() > 0){
        $_SESSION["uname"] = "$uname";
        echo "<script>window.location.href = 'ui1.php';</script>";
    }else {
         echo '<script> alert("login unsuccessful please verify your username/password"); </script>';
         echo"<script>window.location.href = 'login.php';</script>";
    }

    
}


?>
