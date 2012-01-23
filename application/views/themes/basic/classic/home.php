				<?php
				
							if( $website_data['users'][0]->home_page_format == 1){
				
								$this->load->view('themes/media/homepage_picture.php'); 
				
							}elseif(  $website_data['users'][0]->home_page_format == 2 ){
					
								$this->load->view('themes/media/slideshow.php'); 
								
							} 
				?>