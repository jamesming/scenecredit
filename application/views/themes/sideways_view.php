<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<?php     	$this->load->view('header/common_css.php');  ?>
<style>
#header_div {
height:70px;	
padding:5px 30px 5px 0px;
margin-top:20px;
text-align:center;
position:fixed;
width:100%;
z-index:1000;
background-color:#ffffff;
filter:alpha(opacity=60); /* for IE */
opacity:0.6;/* CSS3 standard */
}
		.menu_ribbon{
		padding:0px 20px 0px 20px;
		}
			#menu ul {
		   clear:left;
		   float:left;
		   position:relative;
		   left:50%;
		   text-align:center;
			}
					#menu ul li{
				   display:block;
				   float:left;
				   list-style:none;
				   position:relative;
				   right:50%;
					}
						#menu ul li a{
						font-size:33px;
				   	padding:3px 10px;
						color:gray;
						border:none;
						outline:none;
						text-decoration: none;
						cursor:pointer;
						}
							#menu ul li a:hover, 
							#menu ul li a:active{
							color:#BDBDBD;
							}
#scroll_container{
	overflow:hidden;
	position:relative;
	width:100%;
}	
		#scroll_container ul{
			width:24820px;
		}
			#scroll_container li{
				background:yellow;
				list-style:none;
				font-weight:bolder;
				position:relative;
				width:1300px;
				float:left;
			}

#name div, .section_div_one{
font-size:100px;	
font-weight:bold;
color:white;
position:absolute;
bottom:20px;
}
.picture_outer_container{
width:410px;
height:384px;
margin-top: 130px;
margin-left: 56px;
padding:4px 0px 0px 4px;
background:#D6ADEB;

}

.section_pic_text{
margin-top: 135px;	
}


.picture_outer_container div#profile_picture{
				    <?php if( isset($website_data['picture']['home'][0]->id)){?>
				    	background-image: url("<?php echo base_url()    ?>uploads/pictures/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $website_data['picture']['home'][0]->id    ?>/image.png");
						<?php } ?>
	    background-repeat: no-repeat;
	    height: 380px;
	    width: 406px;
				}
				

				
				div.section_pic_wrapper{
					padding:4px;
					background:#891A17;
	
				}

				.picture_outer_container div.section_pic_wrapper img{
					    height: 380px;
					    width: 406px;
								}
							
							
.like_wrapper{
	margin-left: 24px;
	margin-top: 129px;	
	width:470px;
	height:404px;
							
}					

.text_container{
    float: left;
    margin-left: 22px;
    width: 399px;
    height: 390px;
}

		.box_text{
		    font-weight: normal;
		    color:black;
		    height: 375px;
		    padding-right:30px;
		}
		
		.box_text.no_picture{
		    padding:0px 0px 0px 160px;width:600px
		}		


#iframe_div_container{

}
		#iframe_div_container iframe {
    height: 444px;
    margin-left: 217px;
    margin-top: 124px;
    padding: 0;
    width: 807px;
		}
		
		
#contact_wrapper{
    font-weight: normal;
    width: 751px;
    margin-top: 133px;
}	
	#contact_text{
	  width: 751px;
    height: 234px;
    color:white;
	}	
		
		
		
</style>
<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery.scrollTo-min.js"></script>

</head> 
<body> 
<div id='header_div' >
		<div  class=' container'     >
		
			<div id='menu' >
				<ul>
					<li class=' menu_item' location='0'><a  href="#" >home</a>
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
					
					<li class=' menu_item' location='14'><a  href="#">contact</a>
					</li>						
				</ul>
			</div>
		
		</div>	
</div>


	<div id="scroll_container"> 
		<ul> 
			<li  class='scroll_li '  id='home' style="background-color:#9933CC;"><div></div>
				
				
				<div  id='powered_by_scenecredit'  class=' container clearfix'    >
					Powered by Scenecredit.com
				</div>					
				<div>
							<div  class='float_left picture_outer_container' >
									<div  id='profile_picture' >
									</div>					
							</div>
							
							
							<div  class='float_left like_wrapper' >

									<?php
									     	$this->load->view('themes/media/like.php');  
									?>							
							</div>
				</div>
		
	
				
				<div id='name' >	
					<div   style='text-align:center'  >
						<?php  echo $website_data['users'][0]->full_name   ?>
					</div>	
				</div>
				
			</li> 
			
			<li   class='scroll_li no_content'  style="background-color:#FFCC99;"></li> 


<?php     
	
	$this->custom->echo_themes_pic_and_text_left_right(
		$website_data, 
		$title='biology', 
		$section = 'bio',
		$menu_ribbon_tips = TRUE,
		$has_menu = FALSE	
	);

?>
			

			
			
			
			<li   class='scroll_li no_content'  style="background-color:#FFCC99;"></li> 
			<li   class='scroll_li '  field='photos_checkbox'  id='headshots'  style="background-color:#FF0000;">
				
				
				
					<?php     	
					$this->load->view('themes/media/photos.php');  
					?>

				
				<div  class=' section_div_one' >
					headshots
				</div>
			</li> 
			<li   class='scroll_li no_content'  style="background-color:#FFFFCC;"></li> 
			<li id='reels' field='reels_checkbox' style="background-color:#663366;">
				
				
					<?php     	
					$this->load->view('themes/media/reels.php');  
					?>

		
				
				
				<div  class=' section_div_one' >
					reels
				</div>
			</li> 
			<li   class='scroll_li no_content'  style="background-color:#CCCCFF;"></li> 
			<li   class='scroll_li '  field='resume_checkbox'  id='resume'  style="background-color:#00FFCC;">
				<div  id='iframe_div_container'>
						<iframe id="iframe_resume" scrolling="AUTO" 
							frameborder="0" src=""  >
							
						    <p>Your browser does not support iframes.</p>
						    
						</iframe>
				</div>
				<div  class=' section_div_one' >
					resume
				</div>
			</li> 
			
			
			
			
			<li   class='scroll_li no_content'  style="background-color:#FFCC99;"></li> 
<?php     
	
	$this->custom->echo_themes_pic_and_text_left_right(
		$website_data, 
		$title='press', 
		$section = 'press',
		$menu_ribbon_tips = TRUE,
		$has_menu = FALSE	 
	);

?>
			
			
<li   class='scroll_li no_content'  style="background-color:#FFCC99;"></li> 
<?php     
	
	$this->custom->echo_themes_pic_and_text_left_right(
		$website_data, 
		$title='links', 
		$section = 'links',
		$menu_ribbon_tips = TRUE,
		$has_menu = FALSE	 
	);

?>
		

			
			
			<li   class='scroll_li no_content'  style="background-color:#00FF00;"></li> 
			<li   class='scroll_li '  id='contact'  style="background-color:#9933CC;">
				<div id='contact_wrapper'  >
						<div  id='contact_text'   >
							<?php  echo $website_data['users'][0]->contact_text   ?>			
						</div>		
						
						 <?php
						    	$this->load->view('themes/media/social_icons.php');  
									$this->load->view('themes/media/form.php');
						 ?>
						
						<div  class=' section_div_one' >
							contact
						</div>
				</div>
				
			</li> 
			<li   class='scroll_li '  style="background-color:#FFCC99;"></li> 
 
		</ul> 
	</div> 
 
</body> 
</html>

<script type="text/javascript" language="Javascript">
	$(document).ready(function() {
		
<?php
     	$this->load->view('themes/scripts/check_box_display_li_or_not_for_side_to_side.php');  
?>
		
		
		
		resize_elements();	
				
		$(window).resize(function() {
			
			document.location.reload(true);
		
		});
		
		$('#photos_container').css({
			height:$(window).height()-180,
		 	'margin-top':'140px'}
			);
		
		$('#reels_container').css({
			height:$(window).height()-150,
			'margin-bottom':'10px',
		 	'margin-top':'140px'}
			);
		
		$('.scroll-pane-arrows').jScrollPane(
			{
				showArrows: true,
				horizontalGutter: 10
			}
		);


		$('#iframe_resume').attr('src','<?php echo base_url();    ?>index.php/themes/view_resume_side_to_side?user_id=<?php echo $website_data['users'][0]->id    ?>')
		.css({height:$(window).height()-170});
		
		
		$('#iframe_resume').load(function(){
				$("#iframe_resume").contents().find("body").css({
					background:'#00FFCC'
					})
				.each(function(){


						$(this).find("div.field_resume, div.heading_resume").css({color:'#848484'});

						$(this).find(".jspDrag").css({
						background:'#99FFEB'});
						$(this).find(".jspHorizontalBar,.jspVerticalBar,.jspTrack").css({
						background:'#00FFCC'});
						
						$(this).find(".jspArrow,.jspVerticalBar>.jspDisabled,.jspVerticalBar>.jspDisabled:hover,.jspHorizontalBar>.jspDisabled,.jspHorizontalBar>.jspDisabled:hover").css({
						'background-image':'url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_888888_256x240.png)',
						'background-color':'#00FFCC'
						});						

				});
		});
		
		
		

		$('a').click(function(e) {
    	// e.preventDefault();  
		});
		
		$('.menu_item').click(function(){
			var num= parseInt( $(this).attr('location') ) || 0;
			
			if( num == 2 ){
				change_scroll_bar_colours( '#FF9999', '#FF0000' );
			}else{
				change_scroll_bar_colours( '#C2ADC2', '#663366' );
			};
			
			
			$('#scroll_container').stop().scrollTo('li:eq('+num+')', {speed:1000});
		});
		

		
				
		

		
		
	});
	
	
	
	
	function change_scroll_bar_colours( dragbar, everythingelse ){

		$(".jspDrag").css({
		background:dragbar});
		
		
		$(" .jspHorizontalBar,.jspVerticalBar,.jspTrack").css({
		background:everythingelse});
		
		$(".jspArrow,.jspVerticalBar>.jspDisabled,.jspVerticalBar>.jspDisabled:hover,.jspHorizontalBar>.jspDisabled,.jspHorizontalBar>.jspDisabled:hover").css({
		'background-image':'url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_888888_256x240.png)',
		'background-color':everythingelse
		});	

	}
	
	function resize_elements(){
		
		
			$('#scroll_container li.no_content')
			.width( 100  )
			.height( $(window).height() - 100 );
		

				$('#scroll_container li.scroll_li')
				.width( $(window).width() + 15 )
				.height( $(window).height()  );
				
				$('.has_content')
				.height( $(window).height()  );
				
				$('#name div, .section_div_one').css({left:(   $(window).width()/2) - 470 +'px'});   		

			$('#profile_picture_outer_container').css({'margin-left':get_margin_left_for( $('#profile_picture_outer_container'), moveLeftFromCenter = 200 )});
			
			$('.section_pic_text').css({'margin-left':get_margin_left_for( $('.section_pic_text'), moveLeftFromCenter = -270 )});
		



			$('#social_table').css({padding:'35px 0px 0px 70px'});
			
			
			$('#contact_wrapper').css({'margin-left':get_margin_left_for( $('#contact_wrapper'), moveLeftFromCenter = 60 )});
			

			$('#photos_container').css({'margin-left':get_margin_left_for( $('#photos_container'), moveLeftFromCenter = - 140 )});
			
			$('#reels_container').css({'margin-left':get_margin_left_for( $('#reels_container'), moveLeftFromCenter = - 140 )});
			
			$('#iframe_resume').css({'margin-left':get_margin_left_for( $('#iframe_resume'), moveLeftFromCenter = -100 )});			
	
	
		$('#powered_by_scenecredit').css({
			'position':'absolute',
			'bottom':'87px',
			'cursor':'pointer',
			'text-align':'left',
			color:'white',
			'margin-left':get_margin_left_for( $('#powered_by_scenecredit'), moveLeftFromCenter = -315 )})
			.click(function(e) {
    		document.location.href='<?php echo  base_url();   ?>'
			});	
	
	
	
	
	}
	
	half_width_of_browser_window = $(window).width() /2 ;

	function get_margin_left_for( dom_obj, moveLeftFromCenter ){
		
			half_width_of_outer_container =  dom_obj.width()/2;
			
			margin_left_for_centering_dom_obj = half_width_of_browser_window - half_width_of_outer_container;
			
			return margin_left_for_centering_dom_obj - moveLeftFromCenter;
		
	}
	
	
</script>
<?php
$this->load->view('fonts/cufon.php');