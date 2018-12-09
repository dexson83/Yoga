<html>
<head>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yogo";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$email = $_SESSION['email'];

$sql="UPDATE user_details SET firstname='$firstname',lastname='$lastname',mobile='$mobile',address='$address' WHERE email='$email'";
	if ($conn->query($sql)==TRUE)
		{
			die( '<script>alert("Edit Successful")
			location.href="homepage.php";</script>');
		}
	else
		{ 
			die ('<script>alert("Connection Failed")
			location.href="homepage.php";</script>');
		}
mysqli_close($conn);
?>
</body>
</html>