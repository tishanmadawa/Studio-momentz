<?php
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js""></script>

<!-- Custom Theme files -->
<!--theme-style-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script type='text/javascript' src="<?php echo base_url(); ?>js/simpleCart.min.js""></script>

<!-- start menu -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/memenu.css">
<script type='text/javascript' src="<?php echo base_url(); ?>js/memenu.js""></script>

<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body style=" ";
}"> 
<!--header-->	


				
			 <?php include 'nav.php' ?>



<!---->

	<div class="container-fluid" style="  border-radius: 5px; margin-left:5%; margin-top:10px; height:60px; width:90%; align:center; padding:10px; " >
	<h1 align="center" style="font-family: sans-serif; margin-top:-3px;color:grey;">VIEW EVENT DETAILS</h1>
	</div>
	<div style=" height:500px; border-radius: 5px; margin-top:10px;align:center; padding:10px; color:white;" >
		<div style="  border-radius: 5px; margin-left:5%; margin-top:10px; height:70px; width:90%; align:center; padding:10px;" >
		<?php echo form_open("Booking/search") ?>
		<table style="width:50%;">
		<tr><td >
	      <p>Enter Date</p> </td>
		  <td>
		<td>
	      <input  class="form-control" type="text" name="date" style="width:350px;"> </td>
		  <td>
	      <input  class="btn btn-default" type="submit" name="search" value="search" style="width:20%,"> </td>
		  </table>
	    <? echo form_close() ?>
	</div>
	 
	<div style="margin-top:10px;" class="table-responsive" ">



<?php


echo "<table class='table table-hover' style='color:black; background-color: white;'>";

echo "<tr   style='background-color:grey;color:black;border:4px;'>  <th style='height:40px;width:10%;'' >Status</th>  <th style='width:10%;'>Email</th> <th style='width:10%;'>contact</th> <th style='width:10%;'>Event name</th>  <th style='width:10%;'>Event Date</th> <th style='width:10%;'>Event Start Time</th> <th>Event End Time</th> <th style='width:10%;'>Event Place</th> <th></th> <th></th><th></th> </tr>";


			
			

// loop through results of database query, displaying them in the table

foreach($result as $r):



// echo out the contents of each row into a table

echo "<tr>";

echo '<td style="height:40px;">' . $r->Status . '</td>';

echo '<td>' . $r->email . '</td>';
echo '<td>' . $r->phone . '</td>';
echo '<td>' . $r->eventNameOrClientName . '</td>';
echo '<td>' . $r->eventDate . '</td>';
echo '<td>' . $r->eventStartTime . '</td>';
echo '<td>' . $r->eventEndTime . '</td>';
echo '<td>' . $r->eventLocation . '</td>';



echo '<td><a href="edit/' . $r->id . '"><button class="btn">View</butoon></a></td>';
echo '<td><a href="accept/' . $r->id . '"><button class="btn">Accept</butoon></a></td>';
echo '<td><a href="reject/' . $r->id . '"><button class="btn">Reject</butoon></a></td>';


echo "</tr>";


endforeach;




// close table>

echo "</table>";

?>
</div>

<div>
		<button type="button" class="btn btn-default " aria-label ="Left Align" style="float:right; margin-top:5px; background-color: lightgray;color:Blue;width:210px; height:40px">

<a href="view">Add a new record</a>
</button>
</div>


<!---->
<div class="footer" style="color:black">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul class="bottom">
				 	<li>Studio momentz is srilankan web-portal which you may meet weddiing professionals and provide useful wedding-related information to help you in planing your big day.</li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Contact Us</h4>
				 <p>Tel:076 - 7188550</p>
				 <p>Email:studiomomentzz@gmail.com</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->
 <div class="copywrite">
	 <div class="container">
			 <p>Copyright © 2016 Studio Momentzz. All Rights Reserved</p>
	  </div>
</div>	 
</body>
</html>