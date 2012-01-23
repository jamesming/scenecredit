<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
</head>

<html>
<style>
body{
	background-color: #68cfcd;
	color: #537779;
background-image:url(<?php  echo base_url()   ?>themes/award/bg.jpg); 
}
#header_div{
background-image:url(<?php  echo base_url()   ?>themes/award/menu.png);
background-repeat:no-repeat;
background-position:center; 
height:90px;	
text-align:center;
margin-top:20px;
padding-top:19px;
}
	#menu{
	padding:12px 0px 0px 0px;
	}
		#menu ul{
		clear:left;
		float:left;
		list-style:none;
		margin:0;
		padding:0;
		position:relative;
		left:50%;
		text-align:center;
		}
			#menu ul li{
				list-style-type:none; 
				display:inline;
				position:relative;
				right:50%;
				margin:0px 7px;
			}
				#menu ul li a{
				font-size:16px;
				color:#424242;
				border:none;
				outline:none;
				text-decoration: none;
				cursor:pointer;
				text-transform: uppercase;
				}
						#header_div ul li a:hover, 
						#header_div ul li a:active{
						color:#A4A4A4;
						}
#name div{
font-size:80px;	
font-weight:bold;
color:gray;
}
#image_carousel {
	width:1000px;
}
		#image_carousel div{
		background-image:url(<?php  echo base_url()   ?>themes/award/frame.png);
		background-repeat:no-repeat;
		background-position:center center; 	
		height:600px;		
		}
.section_div_one{
float:left;
font-size:40px;
padding-top:50px;
height:600px;
color:gray;
text-transform: uppercase;
}
.goto_top{
cursor:pointer;
float:left;
background-image:url(<?php  echo base_url()   ?>themes/award/back-btn.png);
background-repeat:no-repeat;
background-position:center center;
margin-top:37px;
height:50px;
width:100px;
			
}
</style>
<?php     	$this->load->view('body/top_to_bottom_body.php');  ?>
</html>




<?php
$this->load->view('javascript/script.php');  
$this->load->view('javascript/document.ready.php'); 
$this->load->view('fonts/cufon.php');
?>


<script type="text/javascript" language="Javascript">
$(document).ready(function() {
		$('.goto_top').click(function(e) {
    	$('body').scrollTo( '#home', 1000 );
		});		
});

</script>