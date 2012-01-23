	<?php if( $website_data['users'][0]->contact_picture_checkbox == 1){?>
		<div  class='float_left side_image_wrapper'  >
			<img  src='<?php echo base_url()    ?>uploads/pictures/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $website_data['picture']['contact'][0]->id    ?>/image.png' />
		</div>	
	<?php } ?>

	<div class='float_left contact_text'>
				<div >
					<?php  echo $website_data['users'][0]->contact_text   ?>	
				</div>
				<div >
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