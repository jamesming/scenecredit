<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<?php     	$this->load->view('header/common_css.php');  ?>

<style>
body{
background:url(<?php  echo base_url()   ?>themes/cardboard/cardboardish.jpg) repeat; 
}

#scaryframe_overlay{
		background-image:url(<?php  echo base_url()   ?>themes/cardboard/games_background2.png);
    background-position: 0 -17px;
    background-repeat: no-repeat;
    height: 82px;
    padding: 10px 0 0 40px;
    width: 957px;	
}

#scaryframe{
		background-image:url(<?php  echo base_url()   ?>themes/cardboard/games_background2.png);
    background-position: -6px -59px;
    background-repeat: no-repeat;
    height: 370px;
    margin-top: 0px;
    padding: 10px 0 0 40px;
    position: relative;
    width: 957px;
}	

#header_div {
background:url(<?php  echo base_url()   ?>themes/cardboard/the-header2.jpg) repeat-x;
font-size: 30px;
height: 52px;
margin-top: 10px;
padding: 5px 30px 5px 0;
position: fixed;
text-align: center;
width: 100%;
z-index: 1000;
}
		#menu{
		padding:0px 20px 0px 20px;
		}
			#menu ul {
		   clear:left;
		   float:left;
		   margin:0;
		   padding:0;
		   position:relative;
		   left:50%;
		   text-align:center;
			}
			#menu ul li{
		  display:block;
		   float:left;
		   list-style:none;
		   margin:0;
		   padding:0;
		   position:relative;
		   right:50%;
			}
				#menu ul li a{
		   	padding:3px 10px;
				color:white;
				border:none;
				outline:none;
				text-decoration: none;
				cursor:pointer;
				}
					#menu ul li a:hover, 
					#menu ul li a:active{
					color:#BDBDBD;
					}
#name div{
    color: gray;
    font-size: 97px;
    font-weight: bold;
    padding-top: 80px;
    height: 75px;
    padding-bottom: 28px;
}


div.area_for_content{
min-height:500px;
clear:both;
}

		.section_div_one {
		font-size:70px;
   	padding-top: 517px;
    width: 22px;
		height:60px;
		color:gray;
		float:left;
		}
		

		#profile_text_container{
		margin-left:20px;
		float:left;
		width:300px;
		margin-top: -70px;
		}
				#home_text{
					margin:0px 0px 0px 0px;
					color:#70695B;
					height: 328px;
					width:400px;
					padding:0px 20px 0px 0px;
				}
		.picture_outer_container{
		width:713px;
		height:384px;
		margin-top: -70px;
		margin-left: 106px;
		padding:4px 0px 0px 4px;
		background: #96B7A2;
		float:left;
		}

#iframe_div_container{
float: left;
width: 699px;
margin-top: 65px;
}
		#iframe_div_container iframe {
			height: 379px;
	    margin-left: 194px;
	    margin-top: 0px;
	    padding: 0;
	    width: 699px;
		}
#contact_text{
    color: #808080;
    font-weight: normal;
    height: 354px;
    margin-left: 125px;
    margin-top: 123px;
    width: 751px;
}
.section{
height:1000px;	
}
.section_content {
    padding-top: 110px;
}
.img_wrapper {
    border: 4px solid #94BAA5;
}
.box_text {
    margin: 0px 0px 0px 33px;
    width: 634px;
    height:300px;
    padding-right:30px;
    color:#808080;
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
						<li class=' menu_item' location='5'><a  href="#">reels</a>
						</li>		
					<?php } ?>
					<?php if( $website_data['users'][0]->resume_checkbox ){?>
						<li class=' menu_item' location='7'><a  href="#">resume</a>
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
<div id='scaryframe'  class=' container' >
			<div class='picture_outer_container'   >
				
				<?php
				
							if( $website_data['users'][0]->home_page_format == 1){
				
								$this->load->view('themes/media/homepage_picture.php'); 
				
							}elseif(  $website_data['users'][0]->home_page_format == 2 ){
					
								$this->load->view('themes/media/slideshow.php'); 
								
							} 
				?>
				
			</div>
	
	
	
			<div  class='likebox '   style='display:none'    > 
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
		$this->custom->echo_themes_pic_and_text_cardboard( 
		$website_data, 
		$title='biography', 
		$section = 'bio' );
	?>
					



<div id='headshots'  field='photos_checkbox'  class='container section '>
	<div  class=' area_for_content' >
		
	
		
			<div  class='section_div_one '   >
				headshots
			</div>		
			
<?php
     	$this->load->view('themes/media/photos.php');  
?>				
			
	</div>
	<div  class='goto_top ' >
	</div>
</div>

<div id='reels'  field='reels_checkbox'   class=' container section '>

	<div  class=' area_for_content' >
		<div  class=' section_div_one' >
		reels
		</div>	
		
		<?php     	
		$this->load->view('themes/media/reels.php');  
		?>
		
			
	</div>
	<div  class='goto_top '>
	</div>
</div>


<div id='resume'   field='resume_checkbox'   class=' container section '>


		<div  class=' area_for_content' >
			
					<div  class=' section_div_one'    >
					resume
					</div>			
			
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
		$this->custom->echo_themes_pic_and_text_cardboard( 
		$website_data, 
		$title='press', 
		$section = 'press' );
	?>
	
	
	<?php     
		$this->custom->echo_themes_pic_and_text_cardboard( 
		$website_data, 
		$title='links', 
		$section = 'links' );
	?>


<div id='contact'  class=' container section '>
	<style>
	#contact div.area_for_content{
			margin-left: 0px;	
	}
			#contact div.area_for_content div.side_image_wrapper{
					border: 4px solid #94BAA5;
					margin-right:20px;
					margin-top:140px;
			}	
			#contact div.area_for_content div.contact_text{
			    color: gray;
			    font-weight: normal;
			    height: 154px;
			    width: 317px;
					margin-top:140px;
					 
			}		
	</style>		
	<div  class=' area_for_content' >
			<div  class=' section_div_one' >
			contact
			</div>		

	<?php if( $website_data['users'][0]->contact_picture_checkbox == 1){?>
		<div  class='float_left side_image_wrapper'  >
			<img  src='<?php echo base_url()    ?>uploads/pictures/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $website_data['picture']['contact'][0]->id    ?>/image.png' />
		</div>	
	<?php } ?>

	<div class='float_left contact_text'>
				<div >
					<?php  echo $website_data['users'][0]->contact_text   ?>	
				</div>
				<div  >
					<?php
					  	$this->load->view('themes/media/social_icons.php');
					?>
				</div>
				<div >	
					<?php  
					$this->load->view('themes/media/form.php');
					?>		
				</div>		
	</div>
			
			
	</div>
	<div  class='goto_top '>
	</div>
</div>


</body>


</html>


<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
<?php
     	$this->load->view('themes/scripts/check_box_display_li_or_not_for_side_to_side.php');  
?>
		
	

		$(window).resize(function() {
		//	document.location.reload(true);
		
		});



		$('#photos_container, #reels_container, #contact_text').css({
			position:'absolute',
		 	'margin-top':'90px',
		 	'margin-left':'120px',
		 	width:'740px',
		 	height:$(window).height()-150
		 	}
			);
	
		$('div.pic_row div.contains_image_container').css({background:'#91B7A2'})
	
		$('.scroll-pane-arrows').jScrollPane(
			{
				showArrows: true,
				horizontalGutter: 10
			}
		);

		$(".jspDrag").css({
		background:'#A29883'});
		$(".jspHorizontalBar,.jspVerticalBar,.jspTrack").css({
		background:'transparent'});
		
		$(".jspArrow,.jspVerticalBar>.jspDisabled,.jspVerticalBar>.jspDisabled:hover,.jspHorizontalBar>.jspDisabled,.jspHorizontalBar>.jspDisabled:hover").css({
		'background-image':'url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_888888_256x240.png)',
		'background-color':'#D9D6C3'
		});	

		$('.section_div_one').css({'padding-top':$(window).height()-70})

		$('a').click(function(e) {
    	 e.preventDefault();  
		});
		
		$('.menu_item').click(function(e) {
			

    	$('body').stop().scrollTo( '#'+$(this).text(), 1000 );
    	
    	
    	
		});	

		$('#social_table').css({width:'400px',padding:'20px 70px 0px 50px'});
		

		$('#iframe_content').attr('src','<?php echo base_url();    ?>index.php/themes/view_resume_side_to_side?user_id=<?php echo $website_data['users'][0]->id    ?>')
		.css({
		 	height:$(window).height()-80
		 	})
	
	
		$('#iframe_content').load(function(){
			$("#iframe_content").contents().find("body").css({
					background:'url(<?php  echo base_url()   ?>themes/cardboard/cardboardish.jpg) repeat'
				})
				.each(function(){
					
					
					
						$(this).find("div.field_resume, div.heading_resume").css({color:'#808080'});

						$(this).find(".jspDrag").css({
						background:'#C0B5A1'});
						$(this).find(".jspHorizontalBar,.jspVerticalBar,.jspTrack").css({
						background:'transparent'});
						
						$(this).find(".jspArrow,.jspVerticalBar>.jspDisabled,.jspVerticalBar>.jspDisabled:hover,.jspHorizontalBar>.jspDisabled,.jspHorizontalBar>.jspDisabled:hover").css({
						'background-image':'url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_888888_256x240.png)',
						'background-color':'transparent'
						});						

				});
			});
				

		$('#scaryframe_overlay').css({'margin-left':get_margin_left_for( $('#scaryframe_overlay'), moveLeftFromCenter = 26 )});
		

		$('#powered_by_scenecredit').css({
			'cursor':'pointer',
			'margin-bottom':'500px',
			'text-align':'right',
			color:'gray',
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

<?php     
 
$this->load->view('fonts/cufon.php');?>


