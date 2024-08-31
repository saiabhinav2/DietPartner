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

    $selheight = $conn->query("select height from userdetails where uname='$uname'");
    $selweight = $conn->query("select weight from userdetails where uname='$uname'");

    $heightRow = $selheight->fetch(PDO::FETCH_ASSOC);
    $weightRow = $selweight->fetch(PDO::FETCH_ASSOC);

    $height = $heightRow['height'];
    $weight = $weightRow['weight'];
    $height1=$height/100;
    $bmi=$weight/($height1*$height1);
    if($bmi<18.5)
      $result="Underweight";
    elseif($bmi>=18.5 and $bmi<=24.9) {
      $result='Healthyweight';
    }
    elseif($bmi>24.9 and $bmi<=29.9) {
      $result='Overweight';
    }
    elseif($bmi>=30) {
      $result='Obesity';
    }
    
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

button{
  width: 60%;
  height: 40px;
  margin: 10px auto;
  justify-content: center;
  display: block;
  color: #fff;
  background: #573b8a;
  font-size: 1em;
  font-weight: bold;
  margin-top: 20px;
  outline: none;
  border: none;
  border-radius: 5px;
  transition: .2s ease-in;
  cursor: pointer;
}
h1{
   color: #fff;
  font-size: 2.3em;
  justify-content: center;
  display: flex; 
  margin: 60px;
  font-weight: bold;
}

</style>
</head>
<body><center>
  <h1>You are  <?php  echo  $result; ?> ,so please select Day and Time to Suggest you a proper diet to follow!!!</h1><br><br>
  <form action="UI5.php" method="post">
    <input type ="hidden" name="result" value=" <?php  echo  $result; ?>">
      <select name="day" placeholder="select day" required>
      <option value="monday">MONDAY</option>
      <option value="tuesday">TUESDAY</option>
      <option value="wednsday">WEDNESDAY</option>
      <option value="thursday">THURSDAY</option>
      <option value="friday">FRIDAY</option>
      <option value="saturday">SATURDAY</option>
      <option value="sunday">SUNDAY</option>
      </select>
      <br><br>
      <select name="time" placeholder="select time" required>
      <option value="breakfast">BREAKFAST</option>
      <option value="lunch">LUNCH</option>
      <option value="dinner">DINNER</option>
      </select>
    <button type="submit">Submit</button>
      
</form>
</body>
</html>

