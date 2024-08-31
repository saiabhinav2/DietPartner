<?php
session_start();
if(empty($_SESSION["uname"] == true)) header("location:login.php");
 $host = "localhost";
$user = "root";
$pass = "";
$db   = "dietpartner";
$conn = null;
$uname=$_SESSION["uname"];
try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}

// Step 4: Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $height = $_POST["uheight1"];
    $weight = $_POST["uweight1"];
    
    // Step 5: Insert data into the database
    $upuser = $conn->query("UPDATE `userdetails` SET `height`='$height',`weight`='$weight' WHERE uname='$uname';");
    if($upuser){
        echo "<script>window.location.href = 'UI4.php';</script>";
    }else {
         echo '<script> alert("please enter valid height/weight"); </script>';
         echo"<script>window.location.href = 'UI2.php';</script>";
    }

    
}


?>
