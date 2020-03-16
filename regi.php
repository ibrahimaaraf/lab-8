<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>X-COMPANY</title>
	<style>
		body{
			margin:0;
			padding:0px 50px;
			font-family: 'Play', sans-serif;
		}
		a{
			text-decoration:none;
		}
		.header_area{
			width:100%;
			
			
		}
		.logoarea{
			width:35%;
			float:left;
			background: linear-gradient(to bottom, #3399ff 0%, #33cc33 100%);
		}
		.logoarea h1{
			padding-left:30px;
		}
		.menu_area{
			width:65%;
			float:left;
			background: linear-gradient(to bottom, #3399ff 0%, #33cc33 100%);
		}
		.menu_area ul{
			list-style:none;
			text-align:right;
		}
		.menu_area ul li{
			display:inline-block;
			padding:15px;
			color:black;
		}
		.menu_area ul li a{
			
			color:black;
		}
		.content_area{
			height:500px;
			width:100%;
			overflow:hidden;
			background: linear-gradient(to bottom, #3399ff 0%, #33cc33 100%);
		}
		.content_left{
			width:35%;
			float:left;
		}
		
		.content_right{
			width:65%;
			float:left;
		}
		.footer_area{
			width:100%;
			overflow:hidden;
			background-color:black;
			color:white;
		}
		.footer_area h3{
			text-align:center;
		}
	</style>
</head>
<body>
	<div class="header_area">
		<div class="logoarea">
			<h1><span class="x">X</span>Company</h1>
		</div>
		<div class="menu_area">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="log.php">Login</a></li>
				<li><a href="regi.php">Registration</a></li>
			</ul>
		</div>
	</div>
	<div class="content_area">
		<h3> Register</h3>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<table>
				<tr>
					<td><b>Name :</b></td>
					<td><input type="text" placeholder="Enter Name"/></td>
				
				</tr>
				<tr>
					<td><b>Email :</b></td>
					<td><input type="email" placeholder="Enter Email"/></td>
				
				</tr>
				<tr>
					<td><b>UserNmae :</b></td>
					<td><input type="text" placeholder="Enter Username"/></td>
				
				</tr>
				<tr>
					<td><b>Password :</b></td>
					<td><input type="password" placeholder="Enter Password"/></td>
				
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
				</tr>
			
			</table>
		

		
		
		</form>
	</div>
	<div class="footer_area">
		<h3>&copy; All rights to Ibrahim Aaraf</h3>
	</div>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "odb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sql = "INSERT INTO users (name, email,username,password)
		VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["username"]."','".$_POST["pass"]."')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	

	$conn->close();
	//header("location: log.php");
?>
</body>
</html>