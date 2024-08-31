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
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$res=$_POST["result"];
	$time=$_POST["time"];
	$day=$_POST["day"];
    $selresult = $conn->query("select * from $res where day='$day'");
    $resultRow = $selresult->fetch(PDO::FETCH_ASSOC);
    $result = $resultRow[$time];
    
?>
    <!DOCTYPE html>
<html>
<head>
  <title>Diet Partner</title>
  <link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<style>
body{
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-family: "Jost", sans-serif;
  background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
p{
   color: #fff;
  justify-content: center;
  display: flex; 
  margin: 60px;
  font-weight: bold;
}
.menu {
    position: fixed;
    top: 0;
    left: 0;
    background-color: #333;
    padding: 10px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #333;
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>
	<div class="menu">
        <div class="dropdown">
            <button class="dropbtn">Menu &#9776;</button>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="logout.php" onclick="resetForm()">Logout</a>
            </div>
        </div>
    </div><center>
<p>According to your physic for your <?php echo $time;?> on <?php echo $day?>,you can consume:<br>  <?php  echo  $result; ?></p>
</center>
</body>
</html>
<?php } ?>