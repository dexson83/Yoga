<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="footer.css"/>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<link type="text/css" rel="stylesheet" href="login.css"/>
<?php
	include('header.php');
?>
<div class="container " style="margin-top:8%;margin-bottom:5%;text-align:center">
<table style="width:60%;margin: 0 20% 0 20%">
<td>
<img src="yoga.jpg" alt="Yoga" width="300px" height="450px" />
</td>
<td> 
<form id="booking-form" action="bookingB.php" method="post" role="form"> 
<div  style="margin-left:3%;font-weight:bold">
Lesson 1: <br/>
Teaching about the basic<br/>
Monday: 5.30pm - 7.30pm<br/><br/>
Lesson 2:<br/>
Teaching some Bone relax<br/>
Webnesday : 7.00pm - 9.00pm<br/><br/>
Lesson 3: <br/>
Teaching some solf move<br/>
Friday: 6.00pm - 8.00pm<br/><br/>
Lesson 4:<br/>
Teaching yoga <br/>
Tuesday & Thursday : 7.30pm - 9.30pm <br/><br/>

</div>
<div class="form-group" style="text-align:center">
<p><b>Lession: </b>
<select name="lesson">
  <option name="lesson" value="lesson1">Lesson1</option>
  <option name="lesson" value="lesson2">Lesson2</option>
  <option name="lesson" value="lesson3">Lesson3</option>
  <option name="lesson" value="lesson4">Lesson4</option>
</select>
</p>
<div class="form-group">
	<input type="submit" name="booking-submit" id="booking-submit" tabindex="4" class="form-control btn btn-booking" value="Booking">
</div>
</div>
</form>
</td>
</table>
</div>
</div>
<?php
	require('foot.html');

?>
</body>
</html>