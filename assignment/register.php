<html>
<head><title></title>
<!-- Register
-- =========================================-->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="footer.css"/>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<link type="text/css" rel="stylesheet" href="register.css"/>
<?php
	include('header.php');
		
		echo ('<style type="text/css" media="screen">.error(color:red;)</style>');
		
		if (isset($_POST['submitted']))
		{
			$problem =FALSE;
			
			if(empty($_POST['fname']))
			{
				$problem=TRUE;
				echo('<p class="error"> Please enter your first name!</p>');
			}
			
			if(empty($_POST['lname']))
			{
				$problem=TRUE;
				echo('<p class="error"> Please enter your last name!</p>');
			}

			if(empty($_POST['email']))
			{
				$problem=TRUE;
				echo('<p class="error"> Please enter your email address!</p>');
			}
			if(empty($_POST['mobile']))
			{
				$problem=TRUE;
				echo('<p class="error"> Please enter your mobile!</p>');
			}
			
			if(empty($_POST['gender']))
			{
				$problem=TRUE;
				echo('<p class="error"> Please enter your gender!</p>');
			}
			
			if(empty($_POST['password']))
			{
				$problem=TRUE;
				echo('<p class="error"> Please enter a password!</p>');
			}

			if($_POST['password-confirm'] != $_POST['password2'])
			{
				$problem=TRUE;
				echo('<p class="error"> Your password did not match your confirmed password!</p>');
			}

			if(!$problem)
			{
				$problem=TRUE;
				echo('<p >You are now registered!<br/> Okay, you are not really registered but.....</p>');
				$_POST=array();
			}
			else
			{
				echo('<p class="error">Please try again!</p>');
			}
		}
?>
<div class="container" style="margin-top:10%">
<h1>Registration Form</h1>
<p>Register so that you can take advantage of certain features like this, that, and the other thing.</p>
</div>
                    <div class="panel-body container" style="margin-top:1%;margin-bottom:5%">
                        <div class="row">
                            <div class="col-lg-12">
                            

                     <form id="register-form" action="registerAccount.php" method="post" role="form"> 
                            <input type="hidden" name="_token" value="XoJR3FFTp4Di1qg12Gp4WAiASnUXm5mrixPy9vFT">
                                <div class="form-group">
                                    <input type="text" name="fname" id="fname" tabindex="1" class="form-control" placeholder="Firstname" value="">
                                        </div>
                                <div class="form-group">
                                    <input type="text" name="lname" id="lname" tabindex="1" class="form-control" placeholder="Lastname" value="">
                                        </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                        </div>

                                <div class="form-group">
                                    <input type="text" name="mobile" id="mobile" tabindex="2" class="form-control" placeholder="Mobile">
                                        </div>

                                <div class="form-group">
                                    <input type="radio" name="gender" id="gender" value="M" tabindex="2" placeholder="Gender"> Male
                                    <input type="radio" name="gender" id="gender" value="F" tabindex="2" placeholder="Gender"> Female
                                </div>

                                <div class="form-group">
                                    <textarea type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Address"></textarea>
                                     
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                         </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password-confirm" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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