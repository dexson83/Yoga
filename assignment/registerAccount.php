<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yogo";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email=$_POST["email"];
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$mobile=$_POST["mobile"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$password=$_POST["password"];
$password_confirmation=$_POST["password_confirmation"];
if($password_confirmation==$password)
{
	$sql="INSERT INTO user_details VALUES ('$firstname','$lastname','$email','$mobile','$gender','$address','$password')";
	if ($conn->query($sql)==TRUE)
		{
			die( '<script>alert("Register Successful")
			location.href="homepage.php";</script>');
		}
	else
		{ 
			die ('<script>alert("Connection Failed")
			location.href="homepage.php";</script>');
		}
}	
else
{
			die ('<script>alert("Password different")
			location.href="homepage.php";</script>');	
	
}	
	mysqli_close($conn);

	?>
</body>
</html>