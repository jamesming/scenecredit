<style>
#photos_container{
    height: 560px;
    margin-left: 290px;
    margin-top: 93px;
    width: 725px;
}
#photos_container div.pic_row {
    margin-bottom: 18px;
}
		#photos_container div.pic_row div.pic_box {
		    border: 1px dashed gray;
		    height: 123px;
		    margin-right: 13px;
		    width: 162px;
		    float: left;
		}
		

		#photos_container div.pic_row div.contains_image_container{
		    border: 1px solid lightgray;
		    padding: 2px;
		    width: 158px;
		}
		
				#photos_container div.pic_row div.contains_image_container div.contains_image {
						height: 120px;
				    width: 156px;
						background:ivory;
				    border: 1px solid lightgray;
				}		
				

						

		#photos_container div.pic_row div.last_in_row {
		    margin-right: 0px;
		}

	
</style>
<style>
/*
 * CSS Styles that are needed by jScrollPane for it to operate correctly.
 *
 * Include this stylesheet in your site or copy and paste the styles below into your stylesheet - jScrollPane
 * may not operate correctly without them.
 */

.jspContainer
{
	overflow: hidden;
	position: relative;
}

.jspPane
{
	position: absolute;
}

.jspVerticalBar
{
	position: absolute;
	top: 0;
	right: 0;
	width: 16px;
	height: 100%;
	background: red;
}

.jspHorizontalBar
{
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 16px;
	background: red;
}

.jspVerticalBar *,
.jspHorizontalBar *
{
	margin: 0;
	padding: 0;
}

.jspCap
{
	display: none;
}

.jspHorizontalBar .jspCap
{
	float: left;
}

.jspTrack
{
	background: #dde;
	position: relative;
}

.jspDrag
{
	background: #bbd;
	position: relative;
	top: 0;
	left: 0;
	cursor: pointer;
}

.jspHorizontalBar .jspTrack,
.jspHorizontalBar .jspDrag
{
	float: left;
	height: 100%;
}

.jspArrow
{
	background: #50506d;
	text-indent: -20000px;
	display: block;
	cursor: pointer;
}

.jspArrow.jspDisabled
{
	cursor: default;
	background: #80808d;
}

.jspVerticalBar .jspArrow
{
	height: 16px;
}

.jspHorizontalBar .jspArrow
{
	width: 16px;
	float: left;
	height: 100%;
}

.jspVerticalBar .jspArrow:focus
{
	outline: none;
}

.jspCorner
{
	background: #eeeef4;
	float: left;
	height: 100%;
}

/* Yuk! CSS Hack for IE6 3 pixel bug :( */
* html .jspCorner
{
	margin: 0 -3px 0 0;
}
</style>
<style>

.jspHorizontalBar,
.jspVerticalBar,
.jspTrack
{
	background: #eeeef4;
}

.jspDrag
{
	background:  #bbd;

	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

.jspTrack .jspActive,
.jspTrack .jspHover,
.jspDrag:hover
{
	background: #8B8B9F;
}


.jspArrow
{
	background: url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_222222_256x240.png) no-repeat;
	
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

.jspVerticalBar>.jspActive,
.jspArrow:hover
{
	background-image: url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_cd0a0a_256x240.png);
}

.jspVerticalBar>.jspDisabled,
.jspVerticalBar>.jspDisabled:hover,
.jspHorizontalBar>.jspDisabled,
.jspHorizontalBar>.jspDisabled:hover
{
	background-color: transparent;
	background-image: url('../images/ui-icons_888888_256x240.png');
}

.jspVerticalBar .jspArrow
{
	height: 15px;
}

.jspHorizontalBar .jspArrow
{
	width: 15px;
}

.jspArrowUp
{
	background-position: 0 0;
}

.jspArrowDown
{
	background-position: -64px 0 !important; 
}

.jspArrowLeft
{
	background-position: -96px 0 !important;
}

.jspArrowRight
{
	background-position: -32px 0 !important;
}
</style>



</head>

<div  id='photos_container'  class='scroll-pane-arrows ' >

<?php foreach($website_data['photos']  as $photo_row){  ?>

		<div  class='pic_row clearfix' >

		<?php
		
		
		foreach($photo_row  as $photo){  ?>
			
			
						<?php if($photo['type'] == 'contains_image'){?>
						
						
									<div  class='pic_box float_left contains_image_container' >
											<a href='<?php echo base_url()    ?>uploads/gallery/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $photo['photo_id']    ?>/image.png?random=<?php echo rand(5,123123)    ?>'   rel='photo_group' >
													<div  photo_id='<?php echo $photo['photo_id']     ?>' 
																class=' contains_image'    
																style='background:url(<?php echo base_url()    ?>uploads/gallery/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $photo['photo_id']    ?>/image_tiny.png?random=<?php echo rand(5,12312)    ?>)'  >
														
													</div>
											</a>									
									</div>


									
						<?php }else{?>
						
									<div  class='pic_box float_left no_image' >
										
									</div>
						
						<?php } ?>		


		<?php 
		}?>
		
		</div>		

<?php } ?>
</div>


<?php     	$this->load->view('header/colorbox_css.php');  ?>
<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery_scrollpane/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery_scrollpane/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery_scrollpane/mwheelIntent.js"></script>


<script type="text/javascript" language="Javascript">
$(document).ready(function() {

				$('#photos_container div.pic_row div.pic_box:nth-child(4)').addClass('last_in_row');
				
				$("a[rel='photo_group']").colorbox();

});		

</script>