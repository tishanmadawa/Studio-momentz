
<!DOCTYPE html>
<html>
<head>
 <script type='text/javascript'>
        function addFields(){
            // Number of inputs to create
            var number = document.getElementById("photoi").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                container.appendChild(document.createTextNode("photo " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "file";
                input.name = "photo"+i ;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }
    </script>

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
	<h1 align="center" style="margin-top:-3px; color:lightblue;">Gallery</h1>
	<br/><br/>
	</div>
	<hr style="height:5px; background-color: blue;">

	
<?php  
	foreach($album as $a):
		?>
<br>
		<a href="view/<?php echo $a->album;  ?>" ><h3 align="center" style="color:grey;"><?php echo $a->album; ?></h3></a>
<br>
<hr style="height:5px; background-color: blue;">





<?php
endforeach;

?>





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