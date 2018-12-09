<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="head.css">
</head>
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

if (empty($_SESSION['email']))
{	$Email="a";

}
else{
	$Email=$_SESSION['email'];
	$sql="SELECT * FROM user_details WHERE email='$Email'";
	$result=$conn->query($sql);
	$row=mysqli_fetch_assoc($result);	
}

if ($Email!="a")
	{
		echo'<nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv" style="background-color:Black;">
        <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto" href="homepage.php">Yoga Life</a>
      <div class="collapse navbar-collapse" id="navbarCollapse1">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="homepage.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="homepage.php#benefits">Benefits</a> </li>
        <li class="nav-item"> <a class="nav-link" href="homepage.php#about">About</a> </li>
        <li class="nav-item"> <a class="nav-link" href="booking.php">Booking</a> </li>
		<li class="nav-item"> <a class="nav-link" href="edit.php">'.$row['firstname'].'</a></li>
        <li class="nav-item"> <a class="nav-link" href="logout.php">Log Out</a> </li>
        </ul>
      </div>
            </div>
    </nav>
';
}
else{
	echo'<nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv" style="background-color:Black;">
        <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto" href="homepage.php">Yoga Life</a>
      <div class="collapse navbar-collapse" id="navbarCollapse1">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item "> <a class="nav-link" href="homepage.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="homepage.php#benefits">Benefits</a> </li>
        <li class="nav-item"> <a class="nav-link" href="homepage.php#about">About</a> </li>
        <li class="nav-item"> <a class="nav-link" href="login.php">Booking</a> </li>
        <li class="nav-item"> <a class="nav-link" href="login.php">Log In</a> </li>
        </ul>
      </div>
            </div>
    </nav>';
}
?>