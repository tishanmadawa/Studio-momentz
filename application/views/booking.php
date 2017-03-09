
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
<body style="background-color: ;"> 
<!--header-->	


				
			 <?php include 'nav.php' ?>



<!---->
<!--pages-starts-->
	<div class="pages">
		<div style="font-family:arial;   border-radius: 5px; margin-left:5%; margin-top:10px; height:60px; width:90%; align:center; padding:10px; " >
	<h1 align="center" style="margin-top:-3px; color:lightblue;">BOOKING EVENT</h1>
	</div>
	<div claa="form-inline" style="font-family:arial; color:black ; border: 1px solid DarkGray; border-radius: 10px;  margin-left:5%; margin-top:10px; width:90%; padding:10px; background-color:lightgray;" >
	</br></br>
	<?php  echo form_open('Booking/add')?>
	<table style="padding-top:10px; padding-left: 15%; width: 80%;">
	<style type="text/css">
		td{
			height: 50px;
			width: 35%;
		}


	</style>
	<div class="form-group">
	<tr>
		<td width="50%">Phone<td>
	</tr>
	<tr>
		<td width="50%"><input class="form-control" type="text" name="phone" /><td>
		<?php echo form_error('phone'); ?>
	</tr>
	</div>
	</table >
		<div class="form-group">

	<h3>Which method do you prefer to be contacted by?</h3>
	<input class="radio" type="radio" name="contact" value="phone"/>phone</br>
	<input class="radio" type="radio" name="contact"   value="email"/>email
	</br>
	</div>

	<h2>Event Info for Your Booking</h2>
	<hr>
	<table style="padding-top:10px; padding-right:10px; padding-left: 10px; width: 90%;">
		<div class="form-group">

	<tr>
		<td width="40%">Event Name</br> (optional)<td>
		<td width="50%"><td>
	</tr>
	<tr>
		<td width="50%"><input class="form-control" type="text" name="eventNameOrClientName" /><td>
				<?php echo form_error('eventNameOrClientName'); ?>

	
	</tr>
	</div>
		<div class="form-group">

	<tr>
		<td width="50%">Event Date<td>
		
	</tr>
	<tr>
		<td width="50%"><input class="form-control" type="date" name="eventDate" /><td>
						<?php echo form_error('eventDate'); ?>

		
	</tr>
	</div>
		<div class="form-group">

	<tr>
		<td width="50%">Event Start Time<td>
		<td width="50%">Event End Time<td>
	</tr>
	<tr>
		<td width="50%"><input class="form-control" type="time" name="eventStartTime" /><td>
		<?php echo form_error('eventStartTime'); ?>
		<td width="50%"><input class="form-control" type="time" name="eventEndTime" /><td>
		<?php echo form_error('eventEndTime'); ?>
	</tr>
	</div>
		<div class="form-group">

	<tr>
		<td width="50%">Event Location</br>(optional)<td>
		
	</tr>
	<tr>
		<td width="50%"><input class="form-control" type="text" name="eventLocation" /><td>
		<?php echo form_error('eventLocation'); ?>
		
	</tr>
	</div>
	</table>
		<div class="form-group">

	<h3>Event Package</h3>


	<?php foreach($result as $r):   ?>
	<input type="radio" name="package" value="<?php echo $r->Package  ?>"/><?php echo $r->Package  ?></br>
	<?php endforeach;   ?>

	<input type="radio" name="package" value="custom"/>Custom Event</br></br>
	</div>
	
	<h2>Delivery Preferences</h2>
	<hr>
		<div class="form-group">

	<h3>Online Gallery of Event Images</h3>

	<input type="radio" name="image" value="public"/>Yes please! Make it public.</br>
	<input type="radio" name="image" value="passwordProtected"/>Yes please! Make it password-protected.</br>
	<input type="radio" name="image" value="download"/>Send photos via digital download.</br>
	<input type="radio" name="image" value="No"/>No thank you.</br></br>
	</div>
		<div class="form-group">

	
	<h3>Delivery timeline</h3>

	<input type="radio" name="timeline" value="standard"/>Standard (7 days)</br>
	<input type="radio" name="timeline" value="rush"/>Rush (48 hours)</br>
	<input type="radio" name="timeline" value="onSite"/>On-site editor for the day</br>
	</div>
</br>
	<div class="form-group">

	<h3>Social Media Files (up to 10) within 6 hours</h3>

	
	<input type="radio" name="social" value="yes"/>Yes, please!</br></br>
		<input type="radio" name="social" value="No"/>No</br></br>

	</br>
	</div>
	
	
<input class="btn btn-default btn-lg" type="submit" name="submit" value="submit"  style="margin-left: 80%;background-color:#5050ff;color:white; " />
</br></br>
	</br>
<?php echo form_close() ?>
</div>
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