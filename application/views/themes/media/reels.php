<style>
#reels_container{

    margin-left: 290px;
    margin-top: 93px;
    width: 725px;
}
#reels_container div.pic_row {
    margin-bottom: 24px;
}
		#reels_container div.pic_row div.pic_box {
	    border: 1px dashed gray;
	    float: left;
	    height: 265px;
	    margin-right: 20px;
	    width: 328px;
		}
		

		#reels_container div.pic_row div.contains_image_container{
	    border: 1px solid lightgray;
	    padding: 2px;
	    width: 326px;
	    height: 264px;
		}
		
				#reels_container div.pic_row div.contains_image_container div.contains_image {
			    background: none repeat scroll 0 0 ivory;
			    border: 1px solid lightgray;
			    height: 262px;
			    width: 323px;
				}		
				

						

		#reels_container div.pic_row div.last_in_row {
		    margin-right: 0px;
		}

	
</style>



</head>

<div  id='reels_container'  class='scroll-pane-arrows ' >

<?php foreach($website_data['reels']  as $reel_row){  ?>

		<div  class='pic_row clearfix' >

		<?php
		
		
		foreach($reel_row  as $reel){  ?>
			
			
						<?php if($reel['type'] == 'contains_image'){?>
						
						
									<div  class='pic_box float_left contains_image_container' >
											<a href='<?php echo base_url()    ?>index.php/themes/iframe_youtube?reel_id=<?php echo $reel['reel_id']    ?>'   rel='reels_group' >
													<div  reel_id='<?php echo $reel['reel_id']     ?>' 
																class=' contains_image'    
																style='background:url(<?php echo base_url()    ?>uploads/reels/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $reel['reel_id']    ?>/image.png?rand=<?php echo rand(5,12312)    ?>) no-repeat'  >
														
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


<script type="text/javascript" language="Javascript">
$(document).ready(function() {

				$('reels_container div.pic_row div.pic_box:nth-child(2)').addClass('last_in_row');
				
				$("a[rel='reels_group']").colorbox();

});		

</script>