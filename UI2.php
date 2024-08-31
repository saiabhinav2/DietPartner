<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($_POST["sid"]=="yes")
	{
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
	<form action="UDB.php" method="post">
      <input type="text" name="uweight1" placeholder="Weight" required="">
      <input type="text" name="uheight1" placeholder="Height(in cm)" required="">
	  <button type="submit">Submit</button>
      
</form>
</body>
</html> 
<?php }
else{
	echo"<script>window.location.href = 'UI4.php';</script>";
}
}
?>