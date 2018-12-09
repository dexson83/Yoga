<html>
<head>
<title></title>
<link type="text/css" rel="stylesheet" href="edit.css"/>
<!-- Edit
-- =========================================-->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="footer.css"/>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<link type="text/css" rel="stylesheet" href="login.css"/>
<?php

	include('header.php');
?>
<?php
	//session_start();
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
	//get the email from session
	$Email=$_SESSION['email'];
	//select all the data according to the session
	$sql="SELECT * FROM user_details WHERE email='$Email'";	
	//create connection
	$result=$conn->query($sql);	
	//fetch data
	$row=mysqli_fetch_assoc($result);
	?>

<div class="container" style="margin-top:10%">
<h1>Edit Form</h1>
<p>Edit your personal details</p>
</div>
<div class="panel-body container" style="margin-top:1%">
     <div class="row">
         <div class="col-lg-12">
             <form id="edit-form" action="editAccount.php" method="post" role="form">
                            <input type="hidden" name="_token" value="XoJR3FFTp4Di1qg12Gp4WAiASnUXm5mrixPy9vFT">
                                <div class="form-group">
                                    <input type="text" name="fname" id="fname" tabindex="1" class="form-control" placeholder="Firstname" value="<?php echo $row['firstname'] ?>">
                                        </div>
                                <div class="form-group">
                                    <input type="text" name="lname" id="lname" tabindex="1" class="form-control" placeholder="Lastname" value="<?php echo $row['lastname']?>">
                                        </div>
                                <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" tabindex="2" class="form-control" placeholder="Mobile" value="<?php echo $row['mobile']?>">
                                        </div>

                                <div class="form-group">
                                    <!---<input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Address" value="<?php echo $row['address']?>">--->
									<textarea type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Address"><?php echo $row['address']?></textarea>
									</div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="edit-submit" id="edit-submit" tabindex="4" class="form-control btn btn-edit" value="Edit Profile">
                                        </div>
                                </div>
                            </div>
                    </form>
				</div>
         </div>
    </div>
	<?php
	require('foot.html');

?>
</body>
</html>