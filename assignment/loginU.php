<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
	//start session
	session_start();
	//call out the database and server for easy to connect
	$servername="localhost";		
	$username="root";
	$password="";
	$dbname="yogo";
	
	//create connection
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
	}

	
	//----check the database--->


		$Email=$_POST['email'];

		$Pw=$_POST['password'];		
		
		//create SQL
		$sql="SELECT * FROM user_details WHERE email='$Email' AND password='$Pw'";	
		$result=$conn->query($sql);

		if($result->num_rows>0)
		{
			$row=mysqli_fetch_assoc($result);	
				$_SESSION['email']=$row["email"];
				die('<script>location.href="edit.php"</script>');


		}
		else
		{
		die('<script>
			alert("Login Error!")
			location.href="userLogin.php"
			</script>');

		}
	
	?>

</body>

</html>