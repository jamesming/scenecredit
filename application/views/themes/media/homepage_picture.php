				<style>
				#profile_picture{
								    <?php if( isset($website_data['picture']['home'][0]->id)){?>
								    	background-image: url("<?php echo base_url()    ?>uploads/pictures/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $website_data['picture']['home'][0]->id    ?>/image.png");
										<?php } ?>
								    background-repeat: no-repeat;
								    height: 380px;
								    width: 710px;
											}	
				</style>
				<div  id='profile_picture' >
				</div>	