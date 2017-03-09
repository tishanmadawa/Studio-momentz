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
<body style="background-color: ; color:black;"> 
<!--header-->	
<div class="top_bg" style="background-color: #5050ff;">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="login.html">Track Order</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto:info@example.com">mail@example.com</a></li>|
					<li class="top_link"><a href="login.html">My Account</a></li>				
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>

<div class="header-top">
	 <div class="header-bottom">
		 <div class="container">
		 <div class="logo">
					<a href="index.php"><img src="<?php echo base_url(); ?>images/wed.png""></a>
				</div>			
				
			 <!---->
		 
			 <div class="top-nav" style="margin-top: -100px;float:right;">
				
			 <?php include 'nav.php' ?>



								<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>   
   
	<div style="font-family:arial;  border-radius: 5px; margin-left:5%; margin-top:10px; height:60px; width:90%; align:center; padding:10px; " >
	<h1 align="center" style="margin-top:-3px;">BOOKING EVENT DETAILS</h1>
	</div>
	<div style="font-family:arial;  border: 1px solid DarkGray; border-radius: 5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:lightgray; color:black;" >
	</br></br>
	<?php foreach($result as $r): ?>
	<?php  echo form_open()?>
	<table style="padding-top:10px;width:150%;">
						<tr>
							<td width="50%">Your Name</td>
							<td width="50%">Your Company Name</td>
						</tr>
						<tr>
							<td width="50%"><input class="form-control" type="text" disabled="true" name="yourName" value="<?php echo $r->yourName; ?>"/></td>
							<td width="50%"><input class="form-control" type="text" disabled="true" name="yourCompanyName" value="<?php echo $r->yourCompanyName; ?>"/></td>
						</tr>
						<tr>
							<td width="50%">Your Email</td>
							<td width="50%">Phone</td>
						</tr>
						<tr>
							<td width="50%"><input class="form-control"type="text" disabled="true" name="email" value="<?php echo $r->email; ?>"/></td>
							<td width="50%"><input class="form-control"type="text" disabled="true" name="phone" value="<?php echo $r->phone; ?>" /></td>
						</tr>
						</table>
						<h3>Which method do you prefer to be contacted by?</h3>
						<input type="radio" name="contact" disabled="true" value="phone"<?php echo ($r->contact=='phone')?'checked':''?>/>phone</br>
						<input type="radio" name="contact"  disabled="true"  value="email" <?php echo ($r->contact=='email')?'checked':''?>/>email
						</br>
						
						<h2>Event Info for Your Booking</h2>
						<hr>
						<table style="padding-top:10px;width:150%;">
						<tr>
							<td width="50%">Event Name or Client Name</br> (optional)</td>
							<td width="50%"></td>
						</tr>
						<tr>
							<td width="50%"><input class="form-control" disabled="true" type="text" name="eventNameOrClientName" value="<?php echo $r->eventNameOrClientName; ?>"/></td>
						
						</tr>
						<tr>
							<td width="50%">Event Date</td>
							
						</tr>
						<tr>
							<td width="50%"><input class="form-control" disabled="true" type="date" name="eventDate" value="<?php echo $r->eventDate; ?>"/></td>
							
						</tr>
						<tr>
							<td width="50%">Event Start Time</td>
							<td width="50%">Event End Time</td>
						</tr>
						<tr>
							<td width="50%"><input class="form-control" disabled="true" type="time" name="eventStartTime" value="<?php echo $r->eventStartTime; ?>" /></td>
							<td width="50%"><input class="form-control" disabled="true" type="time" name="eventEndTime" value="<?php echo $r->eventEndTime; ?>"/></td>
						</tr>
						<tr>
							<td width="50%">Event Location</br>(optional)</td>
							
						</tr>
						<tr>
							<td width="50%"><input class="form-control"type="text" disabled="true" name="eventLocation" value="<?php echo $r->eventLocation; ?>"/></td>
							
						</tr>
						</table>
						<h3>Event Package</h3>
						<?php foreach($package as $s):   ?>
						<input type="radio"  disabled="true" name="package" value="<?php echo $s->Package  ?>" <?php echo ($r->package==$s->Package)?'checked':''?>/><?php echo $s->Package  ?> </br>
						<?php endforeach;   ?>
						<input type="radio" name="package"  disabled="true" value="custom" <?php echo ($r->package=='custom')?'checked':''?>/>Custom Event</br></br>
						
						<h2>Delivery Preferences</h2>
						<hr>
						<h3>Online Gallery of Event Images</h3>

						<input type="radio" name="image" disabled="true" value="public"<?php echo ($r->image=='public')?'checked':''?>/>Yes please! Make it public.</br>
						<input type="radio" name="image" disabled="true" value="passwordProtected" <?php echo ($r->image=='passwordProtected')?'checked':''?>/>Yes please! Make it password-protected.</br>
						<input type="radio" name="image" disabled="true" value="download" <?php echo ($r->image=='download')?'checked':''?>/>Send photos via digital download.</br>
						<input type="radio" name="image" disabled="true" value="No" <?php echo ($r->image=='No')?'checked':''?>/>No thank you.</br></br>
						
						<h3>Delivery timeline</h3>

						<input type="radio" name="timeline" disabled="true" value="standard" <?php echo ($r->timeline=='standard')?'checked':''?>/>Standard (7 days)</br>
						<input type="radio" name="timeline" disabled="true" value="rush" <?php echo ($r->timeline=='rush')?'checked':''?>/>Rush (48 hours)</br>
						<input type="radio" name="timeline" disabled="true" value="onSite" <?php echo ($r->timeline=='onSite')?'checked':''?>/>On-site editor for the day</br>
					</br>
						<h3>Social Media Files (up to 10) within 6 hours</h3>

						<input type="radio" name="social" disabled="true" value="yes" <?php echo ($r->social=='yes')?'checked':''?>/>Yes, please!</br></br>
						
						<input type="radio" name="social" disabled="true" value="No" <?php echo ($r->social=='No')?'checked':''?>/>No</br></br>
						</br>
		<?php echo form_close() ?>				
	<?php endforeach; ?>					
					
					</br></br>
						</br>

 		
      </div>
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