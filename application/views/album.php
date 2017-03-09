
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
<body style="background-color:;"> 
<!--header-->	

				
			 <?php include 'nav.php' ?>

<!---->
<!--pages-starts-->
	<div class="pages">
		<div style="font-family:arial;   border-radius: 5px; margin-left:5%; margin-top:10px; height:60px; width:90%; align:center; padding:10px; " >
	<h1 align="center" style="margin-top:-3px; color:lightblue;">ADD ALBUM</h1>
	</div>
	<div claa="form-inline" style="font-family:arial; color:black ; border: 1px solid DarkGray; border-radius: 10px;   margin-left:5%; margin-top:10px; width:90%; padding:10px; background-color:lightgray;" >
	</br></br>
	
<?php echo form_open_multipart('album/add');?>
<table class="table table-boder">
<tr>
<td>
	<p>Album Name</p>
</td>
<td>
<input type="text" id="album" name="album" class="form-control" value="">
</td>
<td>
<p>Number of Photos
</td>
<td>
<input type="text" id="photoi" name="photoi" class="form-control" value=""><br />
</td>
</tr>
<tr>
<td>
<a href="#" id="filldetails" onclick="addFields()"><button  type="button" class="btn btn-primary" style=" margin-top:5px;width:210px; height:40px">upload Photos</button></a>
</td>
</tr>
<tr>
<td>
    <div id="container" class="form"/><br>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    <input type="submit" value="upload" class="btn btn-primary" />
    </td>
    </tr>
    </table>

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