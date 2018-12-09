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

$lesson=$_POST['lesson'];
$email = $_SESSION['email'];

$sql="INSERT INTO yoga_class (lesson,email) VALUES ('$lesson','$email')";
if ($conn->query($sql)==TRUE)
	{
		die( '<script>alert("Booking Successful")
		location.href="homepage.php";</script>');
	}
else
	{ 
		die ('<script>alert("Connection Failed")
		location.href="homepage.php";</script>');
	}

	?>
</body>
</html>