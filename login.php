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
	flex-direction: column; 
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 600px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.login{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
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
button:hover{
	background: #6d44b8;
}
.signup{
	height: 530px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-200px);
	transition: .8s ease-in-out;
}
.signup label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .signup{
	transform: translateY(-600px);
}
#chk:checked ~ .signup label{
	transform: scale(1);	
}
#chk:checked ~ .login label{
	transform: scale(.6);
}
h1 {
			text-align: center;
			color: #fff;
			font-size: 3em;
			margin: 30px 0; 
		}
</style>
</head>
<body>
	<h1>DIET PARTNER</h1>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
		<div class="login">
				<form action="UI3.php" method="post" id="myForm">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="uname" placeholder="Username" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="Submit" afterclick="resetForm()">Log-In</button>
				</form>
			</div>

			<div class="signup">
				<form action="UI.php" method="post" id="myForm1">
					<label for="chk" aria-hidden="true">Sign up</label>
                                        <input type="text" name="name" placeholder="Your name" required="">
					<input type="text" name="uname" placeholder="User name" required="">
					
					<input type="password" name="pswd" placeholder="Password" required="">
                                        <input type="text" name="uweight" placeholder="Weight" required="">
                                        <input type="text" name="uheight" placeholder="Height(in cm)" required="">
					<button type="submit" afterclick="resetForm()">Sign up</button>
				</form>
			</div>
	</div>
	 <script>
        // Function to reset form fields
        function resetForm() {
            document.getElementById("myForm").reset();
            document.getElementById("myForm1").reset();
        }
    </script>
</body>
</html>