<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<?php     	$this->load->view('header/common_css.php');  ?>
<style>
body{
background:url(<?php  echo base_url()   ?>themes/ransom/mainwrap-bg.jpg) repeat scroll center 30px #181818; 
}

#scaryframe_overlay{
		background-image:url(<?php  echo base_url()   ?>themes/cardboard/games_background2.png);
		background-repeat:no-repeat;
		background-position:0px -17px; 
		height:300px;	
		width:957px;
		padding:10px 0px 0px 40px;
		
}
#scaryframe{
		background-image:url(<?php  echo base_url()   ?>themes/cardboard/games_background2.png);
    background-position: -6px -59px;
    background-repeat: no-repeat;
    height: 370px;
    padding: 10px 0 0 40px;
    width: 957px;
    position: relative;
    margin-top: -156px;
		
}

#header_div{
text-align:left;
margin-top:20px;
padding-top:19px;
position:fixed;
width:100%;
z-index:1000;
background:transparent;
}
	#menu{
		margin-top:126px;
	}
		#menu ul{
		position:absolute;
		margin-left:24px;
		}
			#menu ul li{
			list-style-type:none; 
			display:block;
			font-size:21px;
			margin:16px 0px;
			}
					#menu ul li a{
					color:#DAD7C2;
					background:#131313;
					border:none;
					outline:none;
					text-decoration: none;
					cursor:pointer;
					}
						#menu ul li a:hover, 
						#menu ul li a:active{
						color:#AEB404
						}
#name div{
padding-top:20px;
font-size:90px;	
font-weight:bold;
color:#DAD7C2;
}

		
.section_div_one{
width:98%;
text-align:right;
font-size:70px;
padding-top:35px;
height:60px;
color:#DAD7C2;
}
div.area_for_content{
min-height:1000px;
}


.picture_outer_container{
width:713px;
height:384px;
margin-top: 10px;
margin-left: 130px;
padding:4px 0px 0px 4px;
border:1px solid #DAD7C2;
float:left;
 margin-right:50px;
}

							
.likebox{
		margin-left: 173px;
    width: 700px;
		margin-top: 260px;
}


.picture_outer_container.small_box{
width:212px;
border:1px solid #DAD7C2;
margin-left: 140px;
}

.text_container{
		float:left
    width: 350px;
    height: 390px;
		margin-top: 10px;
		 
}
		.box_text{
				margin-top: 20px;
		    font-weight: normal;
		    color:#DAD7C2;
		    height: 375px;
		    padding-right:30px;
		    width:450px;
		    padding:10px 0px 0px 0px;
		}
		
		.box_text.no_picture{
		    padding:0px 0px 0px 160px;
		    width:600px;
		}		


#iframe_div_container{

}
		#iframe_div_container iframe {
		    margin-left: 129px;
		    margin-top: 23px;
		    padding: 0;
		    width: 801px;
		}
		

</style>

<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery.scrollTo-min.js"></script>


</head>

<html>

<body   >
<div id="home"><div>
<div id='header_div' >
		<div  class=' container'     >
		
			<div id='menu' >
				<ul>
					<li><a class=' menu_item' >home</a>
					</li>
					<?php if( $website_data['users'][0]->bio_checkbox ){?>
						<li class=' menu_item' location='2'><a  href="#">bio</a>
						</li>
					<?php } ?>
					<?php if( $website_data['users'][0]->photos_checkbox ){?>
						<li class=' menu_item' location='4'><a  href="#">headshots</a>
						</li>
					<?php } ?>
					<?php if( $website_data['users'][0]->reels_checkbox ){?>
						<li class=' menu_item' location='6'><a  href="#">reels</a>
						</li>		
					<?php } ?>
					<?php if( $website_data['users'][0]->resume_checkbox ){?>
						<li class=' menu_item' location='8'><a  href="#">resume</a>
						</li>
					<?php } ?>
					<?php if( $website_data['users'][0]->press_checkbox ){?>
						<li class=' menu_item' location='10'><a  href="#">press</a>
						</li>
					<?php } ?>
					<?php if( $website_data['users'][0]->links_checkbox ){?>
						<li class=' menu_item' location='12'><a  href="#">links</a>
						</li>
					<?php } ?>	
					<li><a class=' menu_item'>contact</a>
					</li>						
				</ul>
			</div>
		
		</div>	
</div>



<div id='name' class=' container' >	
	<div   style='text-align:center'  >
		<?php  echo $website_data['users'][0]->full_name   ?>
	</div>

</div>
<div id='scaryframe_overlay'  >


	
</div>
<div  id='scaryframe' class=' container' >
			<div class='picture_outer_container'   style='margin-top: -120px;'  >
				
				<?php
				
							if( $website_data['users'][0]->home_page_format == 1){
				
								$this->load->view('themes/media/homepage_picture.php'); 
				
							}elseif(  $website_data['users'][0]->home_page_format == 2 ){
					
								$this->load->view('themes/media/slideshow.php'); 
								
							} 
				?>
				
			</div>
	
	
	
			<div  class='likebox '   > 
				<center>

				<?php
				$this->load->view('themes/media/like.php');  
				?>
			</center>
			</div>	
</div>
<div  id='powered_by_scenecredit'  class=' container'   >
	Powered by Scenecredit.com
</div>


	<?php     
		$this->custom->echo_themes_pic_and_text_scroll_up_down( 
		$website_data, 
		$title='biography', 
		$section = 'bio' );
	?>
							



<div id='headshots'  field='photos_checkbox' class='container clearfix'>
	<div  class=' section_div_one' >
		headshots
	</div>
	<div  class=' area_for_content' >
		
							<?php
							     	$this->load->view('themes/media/photos.php');  
							
							?>
							
							
	</div>
	<div  class='goto_top ' >
	</div>
</div>



<div id='reels'  field='reels_checkbox'   class=' container'>
	<div  class=' section_div_one' >
	reels
	</div>
	<div  class=' area_for_content' >
		
					<?php     	$this->load->view('themes/media/reels.php');  ?>

		
		
	</div>
	<div  class='goto_top '>
	</div>
</div>


<div id='resume'  field='resume_checkbox'   class=' container'>

	
	<div  class=' section_div_one'    >
	resume
	</div>
	<style>
		
	#print_div a {
	color:white;	
	padding:0px 0px 0px 450px;
	outline: none;
	
	}
	</style>
	<div  class='container' id='print_div'>
		<a href='<?php echo base_url()    ?>index.php/themes/view_resume_top_to_bottom' target='_blank' >Print</a>
	</div>
	<div  class=' area_for_content' >

					<div  id='iframe_div_container'>
							<iframe id="iframe_content" scrolling="AUTO" 
								frameborder="0" src=""  >
								
							    <p>Your browser does not support iframes.</p>
							    
							</iframe>
					</div>		
	
		
	</div>


	<div  class='goto_top '>
	</div>
</div>



	<?php     
		$this->custom->echo_themes_pic_and_text_scroll_up_down( 
		$website_data, 
		$title='press', 
		$section = 'press' );
	?>
	
	
	<?php     
		$this->custom->echo_themes_pic_and_text_scroll_up_down( 
		$website_data, 
		$title='links', 
		$section = 'links' );
	?>


<div id='contact'  class=' container'   >
	<div  class=' section_div_one' >
	contact
	</div>
	
	<style>
	#contact div.area_for_content{
			margin-left: 140px; 
			margin-top: 37px;		
	}
			#contact div.area_for_content div.side_image_wrapper{
					border:1px solid #DAD7C2;
					margin-right:20px;
					padding:4px;
			}	
			#contact div.area_for_content div.contact_text{
			    color: #DAD7C2;
			    font-weight: normal;
			    height: 154px;
			    width: 317px;
			}		
	</style>
	<div  class=' area_for_content'>

		<?php     
		$this->load->view('themes/media/contact.php');
		?>	

	</div>
	<div  class='goto_top '>
	</div>
</div>


</body>


</html>
<?php     	
 
$this->load->view('fonts/cufon.php');

?>





<script type="text/javascript" language="Javascript">
	
		
			
	
$(document).ready(function() {

<?php
     	$this->load->view('themes/scripts/check_box_display_li_or_not_for_side_to_side.php');  
?>
		

		$('a').click(function(e) {  // THIS PREVENTS FLICKERING 
    	 e.preventDefault();  
		});
		
		$('.menu_item').click(function(e) {
    	$('body').stop().scrollTo( '#'+$(this).text(), 1000 );
		});	








		$('#iframe_content').attr('src','<?php echo base_url();    ?>index.php/themes/view_resume_top_to_bottom?user_id=<?php echo $website_data['users'][0]->id    ?>')
		.css({height:$(window).height()-140});


		$('#photos_container, #reels_container').css({
		 	'margin-top':'40px',
		 	'margin-left':'180px',
		 	'margin-bottom':'100px',
		 	height:'auto'
		 	}
			)
			.removeClass('scroll-pane-arrows');

		$('#menu ul').css({left:(   $(window).width()/2) - 502 +'px'});


		$('#iframe_content').load(function(){
				$("#iframe_content").contents().find("body").css({
					background:'#141213'})
					.find("div.field_resume, div.heading_resume").css({color:'#DAD7C2'});
				$(this).css({'margin-bottom':'400px',height:$(this).contents().find("body").height()+30});
		});


		$('#social_table').css({width:'350px',padding:'30px 60px 0px 50px'});


		$('.scroll-pane-arrows').jScrollPane(			{
				showArrows: true,
				horizontalGutter: 10
			}
		);
		


		$(".jspDrag").css({
		background:'#463623'});
		$(".jspHorizontalBar,.jspVerticalBar,.jspTrack").css({
		background:'#292015'});
		
		$(".jspArrow,.jspVerticalBar>.jspDisabled,.jspVerticalBar>.jspDisabled:hover,.jspHorizontalBar>.jspDisabled,.jspHorizontalBar>.jspDisabled:hover").css({
		'background-image':'url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_888888_256x240.png)',
		'background-color':'#292015'
		});	
		
		$('#scaryframe_overlay').css({'margin-left':get_margin_left_for( $('#scaryframe_overlay'), moveLeftFromCenter = 26 )});
		
		$('#powered_by_scenecredit').css({
			'cursor':'pointer',
			'margin-bottom':'500px',
			'text-align':'right',
			color:'#DAD7C2',
			'margin-left':get_margin_left_for( $('#powered_by_scenecredit'), moveLeftFromCenter = 36 )})
			.click(function(e) {
    		document.location.href='<?php echo  base_url();   ?>'
			});	
		

			
});


	half_width_of_browser_window = $(window).width() /2 ;

	function get_margin_left_for( dom_obj, moveLeftFromCenter ){
		
			half_width_of_picture_outer_container =  dom_obj.width()/2;
			
			margin_left_for_centering_dom_obj = half_width_of_browser_window - half_width_of_picture_outer_container;
			
			return margin_left_for_centering_dom_obj - moveLeftFromCenter;
		
	}

</script>
 