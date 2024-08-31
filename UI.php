<?php

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
    $name = $_POST["name"];
    $uname = $_POST["uname"];
    $pwd = $_POST["pswd"];
    $weight = $_POST["uweight"];
    $height = $_POST["uheight"];

    // Step 5: Insert data into the database
    $insuser = $conn->query("INSERT INTO userdetails VALUES ('','$uname','$pwd','$name','$height','$weight')");
    if($insuser){
        echo "<script>window.location.href = 'UI4.php';</script>";
    }else {
         echo "<script>window.location.href = 'login.php';</script>";
    }

    
}


?>
