<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	
   public function __construct(){
        parent::__construct();
        
        $this->width_for_gallery_photos = '600';

				if(  isset( $this->session->userdata['user_id'] )  ){
					
					$this->user_id = $this->session->userdata['user_id'];

				}else{
					
					redirect('/home/login');
				
				};


   }

	
	/**
	 * index.
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/home/index
	 * @access public
	 */
	 
	public function index(){
		
		$this->load->library('custom');
	
		$this->users = $this->custom->get_users( $this->user_id );
				
		$website_data = array();

		$website_data['blue'] = '#5892F2';
		$website_data['underline_color'] = '#5892F2';
		$website_data['user_id'] = $this->users[0]->id;
		$website_data['profile_url'] = $this->users[0]->profile_url;
		$website_data['template_name'] = $this->users[0]->template_name;
		$website_data['email'] = $this->users[0]->email;
		
		$website_data['header_description'] = 'test';		
		$website_data['premium'] = $this->users[0]->premium;
		$website_data['which_menu'] = $this->uri->segment(3);
		$website_data['menu_selected'] = $this->uri->segment(4);
		$website_data['users'] = $this->users;

		if( $website_data['which_menu'] == 'menu' && $website_data['menu_selected'] == 'website'){
			
			if( $this->uri->segment(5) ){
				$website_data['menu_item'] = $this->uri->segment(5);
			}else{
				$website_data['menu_item'] = 'home';
			};
			

			
			switch ( $website_data['menu_item'] ) {
				
			    case 'home':
			    
			    
			    
				  		if( $this->uri->segment(6) ){
				  			$website_data['submenu_item'] = $this->uri->segment(6);
				  		}else{
				  			$website_data['submenu_item'] = 'picture';
				  		};			    
			    
			    
			    		if( $website_data['submenu_item'] == 'picture'){
			    			
			    				$website_data['picture'] = $this->custom->getPicture(  $this->user_id,  $website_data['menu_item'] );
									$website_data['picture_width'] = '708';
									$website_data['picture_height'] = '382';
			    				
			    		}elseif( $website_data['submenu_item'] == 'slideshow'){
			    			
			    				$website_data['picture'] = $this->custom->getPicture(  $this->user_id,  $website_data['submenu_item'] );
									$website_data['picture_width'] = '708';
									$website_data['picture_height'] = '382';	
									
									//echo '<pre>';print_r(  $website_data['picture']  );echo '</pre>';  exit;		    			

			    		};

			        break;
			        
			        
			    case 'bio':
			    
			    
			    
				  		if( $this->uri->segment(6) ){
				  			$website_data['submenu_item'] = $this->uri->segment(6);
				  		}else{
				  			$website_data['submenu_item'] = 'picture';
				  		};
			    
			    
			    
			    
			    		if( $website_data['submenu_item'] == 'description'){
			    			
									$website_data['text'] = $this->users[0]->bio_text;
									$website_data['field'] = 'bio_text';
									$website_data['header_description'] = 'Write a short blurb that describes you or your talents, and the range of characters you can portray. This provides context to your portfolio. This description will appear in first page of your website, and will help you get found through search engines such as Google and Yahoo.';				    			
									
			    		}elseif( $website_data['submenu_item'] == 'picture'){
			    			
			    				$website_data['picture'] = $this->custom->getPicture(  $this->user_id, 'bio' );
									$website_data['picture_width'] = '208';
									$website_data['picture_height'] = '382';
			    		};

			        break;	
			        		
			        
			    case 'contact':
			    
			    
				  		if( $this->uri->segment(6) ){
				  			$website_data['submenu_item'] = $this->uri->segment(6);
				  		}else{
				  			$website_data['submenu_item'] = 'picture';
				  		};
			    
			    

			    		if( $website_data['submenu_item'] == 'description'){
									$website_data['text'] = $this->users[0]->contact_text;
									$website_data['field'] = 'contact_text';		    			
			    		}elseif( $website_data['submenu_item'] == 'social'){
			    				$website_data['facebook_url'] =$this->users[0]->facebook_url;
			    				$website_data['twitter_url'] =$this->users[0]->twitter_url;
			    				$website_data['linkedin_url'] =$this->users[0]->linkedin_url;
			    				$website_data['blog_url'] =$this->users[0]->blog_url;
			    				$website_data['imdb_url'] =$this->users[0]->imdb_url;
			    		}elseif( $website_data['submenu_item'] == 'picture'){
			    			
			    				$website_data['picture'] = $this->custom->getPicture(  $this->user_id, 'contact' );
									$website_data['picture_width'] = '208';
									$website_data['picture_height'] = '382';
			    		};			    

			        break;	
			        
			        
			    case 'press':
			        

		    
			    
				  		if( $this->uri->segment(6) ){
				  			$website_data['submenu_item'] = $this->uri->segment(6);
				  		}else{
				  			$website_data['submenu_item'] = 'picture';
				  		};
			    
			    
			    
			    
			    		if( $website_data['submenu_item'] == 'description'){
			        
									$website_data['text'] = $this->users[0]->press_text;
									$website_data['field'] = 'press_text';		
							
									
			    		}elseif( $website_data['submenu_item'] == 'picture'){
			    			
			    				$website_data['picture'] = $this->custom->getPicture(  $this->user_id, 'press' );
									$website_data['picture_width'] = '208';
									$website_data['picture_height'] = '382';
			    		};

			        break;	
			    		        
			        
			    case 'links':
			    
			    
			    
			    
				  		if( $this->uri->segment(6) ){
				  			$website_data['submenu_item'] = $this->uri->segment(6);
				  		}else{
				  			$website_data['submenu_item'] = 'picture';
				  		};
			    
			    
			    
			    
			    		if( $website_data['submenu_item'] == 'description'){
			        
									$website_data['text'] = $this->users[0]->links_text;
									$website_data['field'] = 'links_text';		
									
			    		}elseif( $website_data['submenu_item'] == 'picture'){
			    			
			    				$website_data['picture'] = $this->custom->getPicture(  $this->user_id, 'links' );
									$website_data['picture_width'] = '208';
									$website_data['picture_height'] = '382';
			    		};

			        break;	
			    
			    
        

			    case 'resume_builder':
		
							$resumes = $this->custom->getresume( $this->user_id );
							
							
							$website_data['resume_entries'] = $this->custom->get_resume_entries( $resume_id = $resumes[0]->id );
							$website_data['header_description'] = 'Add your work experience to include resume information with your profile. This will provide more context to your portfolio and allow the right opportunities to find you. Complete the fields below with professional history, education, awards, skills, or any other relevant facts about you.';		
			        break;
			        
			    case 'reels':
			        
							$website_data['reels'] = $this->custom->getreels(  $this->user_id );
							$website_data['header_description'] = 'Add some video scenes of your acting.  Include a variety of roles to showoff your diverse talents';
			        break;
			        
			    case 'photos':
			        $website_data['photos'] = $this->custom->getPhotos(   $this->user_id );
			        break;
			}
			
		}elseif( $website_data['which_menu'] == 'menu' && $website_data['menu_selected'] == 'dashboard'){
			
			if( $this->uri->segment(5) ){
				$website_data['menu_item'] = $this->uri->segment(5);
			}else{
				$website_data['menu_item'] = 'traffic';
			};
			

			
			switch ( $website_data['menu_item'] ) {
				
			    case 'traffic':
			    
								$website_data['page_views'] = $this->custom->getPageViews( $this->user_id );
				
				
								// $this->custom->getCountOfTotalPageViews($this->user_id  );
				
				
			        break;		
			        
			    case 'comments':

			    			$website_data['comments'] = $this->custom->get_comments(  $this->user_id );

			        break;					        

			}
			
		}elseif( $website_data['which_menu'] == 'menu' && $website_data['menu_selected'] == 'template'){
			
  		if( $this->uri->segment(6) ){
  			$website_data['submenu_item'] = $this->uri->segment(6);
  		}else{

					switch ($this->uri->segment(5)){
						
						case 'basic_menu':
							$website_data['submenu_item'] = 'plain';
						break;
						
						
						case 'premium_menu':
							$website_data['submenu_item'] = 'vertical';
						break;
						
						default:
						
							$website_data['submenu_item'] = 'plain';

					}
  			
  		};
			

			if( $this->uri->segment(5) ){
				$website_data['menu_item'] = $this->uri->segment(5);
			}else{
				$website_data['menu_item'] = 'basic_menu';
			};		
			
			$website_data['template_id'] = $this->users[0]->template_id;
			
			switch ( $website_data['menu_item'] ) {
				
			    case 'basic_menu':
			    
							switch ( $website_data['submenu_item'] ) {
								
							    case 'vertical':
							    
								    		$website_data['templates'] = $this->custom->getTemplates( $premium = 0, $format_id = '2');
								    		
								    		$website_data['templates']  = $this->tools->object_to_array($website_data['templates'] );
							    
								        break;	
								        
							    case 'horizontal':
							    
								    		$website_data['templates'] = $this->custom->getTemplates( $premium = 0, $format_id = '3');
								    		
								    		$website_data['templates']  = $this->tools->object_to_array($website_data['templates'] );
							    
								        break;									        
								        
							    case 'plain':
							    
								    		$website_data['templates'] = $this->custom->getTemplates( $premium = 0, $format_id = '1');
								    		
								    		$website_data['templates']  = $this->tools->object_to_array($website_data['templates'] );
							    
								        break;	
		        		        
							}
			    
			    
			       
			        break;
			        
			    case 'premium_menu':
		    
							switch ( $website_data['submenu_item'] ) {
								
							    case 'vertical':
							    
							    
								    		$website_data['templates'] = $this->custom->getTemplates( $premium = 1, $format_id = '2');
								    		
								    		$website_data['templates']  = $this->tools->object_to_array($website_data['templates'] );
								    		
								        break;	
								        
							    case 'horizontal':
							    
								    		$website_data['templates'] = $this->custom->getTemplates( $premium = 1, $format_id = '3');
								    		
								    		$website_data['templates']  = $this->tools->object_to_array($website_data['templates'] );
							    
								        break;									        
								        
							    case 'plain':
							    
								    		$website_data['templates'] = $this->custom->getTemplates( $premium = 1, $format_id = '1');
								    		
								    		$website_data['templates']  = $this->tools->object_to_array($website_data['templates'] );
							    
								        break;	
		        		        
							}
			    
			    
			       
			        break;			        
			}
			
		}elseif( $website_data['which_menu'] == 'menu' && $website_data['menu_selected'] == 'aboutme'){
			
			if( $this->uri->segment(5) ){
				$website_data['menu_item'] = $this->uri->segment(5);
			}else{
				$website_data['menu_item'] = 'basic';
			};
			
			
			switch ( $website_data['menu_item'] ) {
				
			    case 'basic':
			    
										$website_data['full_name'] = $this->users[0]->full_name;
										$website_data['header_description'] = 'Fill in basic information about yourself.';
										
			
			        break;		
			        
			    case 'representation':

			    			

			        break;		
			        
			        
			    case 'skills':

			    			

			        break;					        
			        
			        
			    case 'traits':

			    			

			        break;	
			        
			    case 'available':

			    			

			        break;				        
			        		        			        

			}
			

		}elseif( $website_data['which_menu'] == 'account'){
			
			if( $this->uri->segment(4) ){
				$website_data['menu_item'] = $this->uri->segment(4);
			}else{
				$website_data['menu_item'] = 'changepassword';
			};	
			
			switch ( $website_data['menu_item'] ) {
				
			    case 'changepassword':
			    

			        break;		
			        
			    case 'level':
			    
			   

			        break;					        

			    case 'payment':
			    
			   

			        break;	
			        
			    case 'change_profile_url':
			    
			   

			        break;
   
			}
			
			
			$website_data['menu_selected'] = 'none';
			
		}elseif( $website_data['which_menu'] == 'start'){
			
			switch ($website_data['menu_selected']){
			
						case '2': // ABOUT ME
												
														if( $this->uri->segment(5)){
															$website_data['submenu_item'] = $this->uri->segment(5);
														}else{
															$website_data['submenu_item'] = 'aboutme';
														};
												
												
														switch (  $website_data['submenu_item'] ){
													
																	case 'aboutme':
														
																			$website_data['full_name'] = $this->users[0]->full_name;
																	
																	break;
																	
																	
																	case 'description':
														
			    														$website_data['text'] = $this->users[0]->bio_text;
			    														$website_data['field'] = 'bio_text';
			    														
														
																	break;																		
																	
																	
																	
																	
																	case 'picture':
														
													    				$website_data['picture'] = $this->custom->getPicture(  $this->user_id, 'home' );
																			$website_data['menu_item'] = 'home';
																			$website_data['picture_width'] = '708';
																			$website_data['picture_height'] = '382';
														
																	break;								
																	
																	case 'contact':
																	
																			$website_data['text'] = $this->users[0]->contact_text;
																			$website_data['field'] = 'contact_text';
														
																	break;		
																	
																	case 'social':
																	
													    				$website_data['facebook_url'] =$this->users[0]->facebook_url;
													    				$website_data['twitter_url'] =$this->users[0]->twitter_url;
													    				$website_data['linkedin_url'] =$this->users[0]->linkedin_url;
													    				$website_data['blog_url'] =$this->users[0]->blog_url;
													    				$website_data['imdb_url'] =$this->users[0]->imdb_url;
			    				
			    				
																	break;										
																								
																	default:
						
														}

						break;
						
						
						
						case '3':  // MEDIA
												
														if( $this->uri->segment(5)){
															$website_data['submenu_item'] = $this->uri->segment(5);
														}else{
															$website_data['submenu_item'] = 'gallery';
														};
												
												
														switch (  $website_data['submenu_item'] ){
													
																	
																	case 'gallery':
														
																			$website_data['photos'] = $this->custom->getPhotos(   $this->user_id );
							
														
																	break;								
																	
																	case 'video':
														
																			$website_data['reels'] = $this->custom->getreels(  $this->user_id );	
														
																	break;		
									
																								
																	default:
						
														}

						break;
						
						
						
						case '4':
							$resumes = $this->custom->getresume( $this->user_id );
							$website_data['resume_entries'] = $this->custom->get_resume_entries( $resume_id = $resumes[0]->id );
							$website_data['header_description'] = 'Add your work experience to include resume information with your profile. This will provide more context to your portfolio and allow the right opportunities to find you. Complete the fields below with professional history, education, awards, skills, or any other relevant facts about you.';		
						break;						
						
						case '5':
						
							$website_data['template_id'] = $this->users[0]->template_id;
			    		$website_data['templates'] = $this->custom->getStartTemplates();
			    		$website_data['templates']  = $this->tools->object_to_array($website_data['templates'] );
			    		$website_data['menu_item']  = '';
						break;	
						
						
						case '6':
						
							$website_data['which_menu'] = 'start';
			    		
						break;		
						
												
						default:
						
							$website_data['header_description'] = 'testing xxx';

					}
		}elseif( $website_data['which_menu'] == 'message'){
			
			if( $this->uri->segment(4) ){
				$website_data['menu_item'] = $this->uri->segment(4);
			}else{
				$website_data['menu_item'] = 'upgraded';
			};	
			
			switch ( $website_data['menu_item'] ) {

			    case 'upgraded':
			    
			    		$this->custom->change_premium_level( $this->users[0]->id, $status = 1);
							$website_data['premium'] = 1;

			        break;
			        
			        
			    case 'downgraded':
			    
			    		$this->custom->change_premium_level( $this->users[0]->id, $status = 0);
							$website_data['premium'] = 0;

			        break;			        

			}
			
		}
		


		$this->load->view('main/views/index_view', 
			array(
				'website_data' => $website_data
			)
		);
	}
	

	
	
	/**
	 * update_wysiwyg
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/update_wysiwyg
	 * @access public
	 */

	public function update_wysiwyg(){

			echo $this->my_database_model->update_table_where(
			$table = 'users', 
			$where_array = array('id' => $this->user_id), 
			$set_what_array =  array($this->input->post('field')  =>  $this->input->post('value') )
			);

	}		
	
	
	

		
/**
	 * update_reels
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/update_reels
	 * @access public
	 */
	 
	public function update_reels(){	
		
		$table = 'reels';
		$url = $this->input->post('youtube_url');
		$reel_id = $this->input->post('reel_id');
		

	  if( $reel_id != 0){
	  	
				$set_what_array = array(
										'url' => $url,
										'youtube_video_id' => $this->tools->extract_video_id_from_youtube_url($url)
										);		
										
				echo $this->my_database_model->update_table( $table, 
				$primary_key = $reel_id, 
				$set_what_array 
				);
				

				
	  }else{
	      
					$insert_what = array(
								'url' => $url,
								'user_id' => $this->user_id,
								'youtube_video_id' => $this->tools->extract_video_id_from_youtube_url($url)
								);	
					
					$reel_id =  $this->my_database_model->insert_table(
													$table, 
													$insert_what
													); 
	      
	  };
	  

		$path_array = array(
			'folder'=> 'reels', 
			'user_id'=> $this->user_id, 
			'reel_id'=> $reel_id
		);
		
		$upload_path = $this->tools->set_directory_for_upload( $path_array );

		$filename = $this->tools->get_thumbnail_from_youtube_video_id(
			$this->tools->extract_video_id_from_youtube_url($url)
		);
		
		$this->tools->create_thumbnail_of(
			$filename, 
			$new_width=348, 
			$location = $upload_path . '/image.png'
		);
	  
		
	}
	
	
	
	/**
	 * remove_reel
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/remove_picture
	 * @access public
	 **/ 	
	
	
	function remove_reel(){

		$reel_id = $this->input->get('reel_id');
		
		$dir_path = 'uploads/reels/' 
		. $this->user_id . '/'  
		.  $reel_id . '/';
		

		$this->tools->recursiveDelete($dir_path);
		
		$where_array = array(
	  	'id' => $reel_id
  	);

		$table  = 'reels';
					
		$this->my_database_model->delete_from_table( $table, $where_array);
		
		
		redirect('/main/index/menu/website/reels');
		
	}
	
	/**
	 * upload_picture_form
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/upload_pet_form
	 * @access public
	 **/ 
	
	function upload_picture_form(){
		

		$data= array(
		'picture_id' => $this->input->get('picture_id'),
		'menu_item' => $this->input->get('menu_item'),
		'order' => $this->input->get('order')
		);	
		
		
		$this->load->view('main/views/upload_picture_form_view', $data);
	
	
	}  	
	

	
	/**
	 * upload_picture
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/upload_image
	 * @access public
	 **/ 
	
	function upload_picture(){
		
		
			$picture_id = $this->input->post('picture_id');
			$menu_item = $this->input->post('menu_item');
			$order = $this->input->post('order');
		
			$table = 'pictures';
			
		  $where_array = array('id' => $picture_id);
		  
	
		  if( $this->my_database_model->check_if_exist($where_array, $table)){


			}else{
			
				$insert_what = array(
				                  'user_id' => $this->user_id,
				                  'menu_item' => $menu_item,
				                  'order' => $order
				          );
				                  
				
				$picture_id = $this->my_database_model->insert_table(
									$table = 'pictures', 
									$insert_what
									); 	
			}

		
		$path_array = array(
			'folder'=> 'pictures', 
			'user_id'=> $this->user_id, 
			'picture_id'=> $picture_id
		);
		
		$upload_path = $this->tools->set_directory_for_upload( $path_array );
		
		$config['upload_path'] = './' . $upload_path;
		$config['allowed_types'] = 'bmp|jpeg|gif|jpg|png';
		$config['overwrite'] = 'TRUE';
		$config['file_name'] = 'transition.png';
		
		$this->load->library('upload', $config);
		
	
		if ( ! $this->upload->do_upload("Filedata")){
					?>
							<script type="text/javascript" language="Javascript">
								
								window.parent.growl( notice_header_text = 'Error', notice_body_text = '<br><?php echo $this->upload->display_errors();    ?>', isThisSticky = true)
								
							</script>
					 		
					<?php 
					exit;	
		}	
		else{	
			

			?>
				<script type="text/javascript" language="Javascript">
							window.parent.$('#submit_jcrop_table').show();
							window.parent.open_jcrop( <?php  echo $picture_id   ?>);				
				</script>
 
			<?php     
			
		}				
		
	
	
	}
	
	
	
	
	/**
	 * iframe_jcrop_form_for_picture
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/iframe_jcrop_form_for_picture
	 * @access public
	 **/ 
	
	function iframe_jcrop_form_for_picture(){
		
			$picture_id = $this->input->get('picture_id');
			$menu_item = $this->input->get('menu_item');
			$picture_width = $this->input->get('picture_width');
			$picture_height = $this->input->get('picture_height');
			$order = $this->input->get('order');
		
			$dir_path = 'uploads/pictures/'  . $this->user_id . '/' . $picture_id;
		
			$image_information = getimagesize($dir_path . '/' . 'transition.png');
			
			$width_of_file = $image_information[0];
			$height_of_file = $image_information[1];
			
				
			$new_height = $picture_height;
			$new_width  = $this->tools->get_new_size_of ($what = 'width', $based_on_new = $new_height, $orig_width = $width_of_file, $orig_height = $height_of_file );
										
//								$new_width  = $picture_width;
//								$new_height = $this->tools->get_new_size_of ($what = 'height', $based_on_new = $new_width, $orig_width = $width_of_file, $orig_height = $height_of_file );

			$this->tools->resize_this(  $full_path = $dir_path . '/' . 'transition.png' , $width = $new_width, $height = $new_height);
	
	
			$data= array(
			'user_id' => $this->user_id,
			'width_of_file' => $new_width, 
			'height_of_file' => $new_height,
			'picture_id' => $picture_id,
			'menu_item' => $menu_item,
			'picture_width' => $picture_width,
			'picture_height' => $picture_height,
			'order' => $order
			 );	
			
			
			$this->load->view('main/views/iframe_jcrop_for_picture_view', $data);
	
	}
	

	
	/**
	 * crop_picture
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/crop_picture
	 * @access public
	 **/ 
	 

	
	function crop_picture(){

		$dir_path = 'uploads/pictures/' . $this->user_id . '/'  .  $this->input->post('picture_id') . '/';
		
		$menu_item = $this->input->post('menu_item');

		$x_origin = $this->input->post('x_origin');
		$y_origin = $this->input->post('y_origin');
		$desired_width = $this->input->post('desired_width');
		$desired_height = $this->input->post('desired_height');
		$picture_width = $this->input->post('picture_width');
		$picture_height = $this->input->post('picture_height');
	
		$this->tools->crop_and_name_it( $new_name = 'image.png', $dir_path.'transition.png', $dir_path, $desired_width, $desired_height, $x_origin, $y_origin );
	
		$new_width  = $picture_width;
		$new_height = $this->tools->get_new_size_of ($what = 'height', $based_on_new = $new_width, $orig_width = $desired_width, $orig_height = $desired_height );
		
		$this->tools->resize_this(  $full_path = $dir_path . '/' . 'image.png' , $width = $new_width, $height = $new_height);


		$new_tiny_width  = '157';
		$new_tiny_height = $this->tools->get_new_size_of (
			$what = 'height', 
			$based_on_new = $new_width, 
			$orig_width = $new_width, 
			$orig_height = $new_height 
		);
		

		$this->tools->clone_and_resize_append_name_of(
			$appended_suffix = '_tiny', 
			$full_path = $dir_path . '/' . 'image.png', 
			$width = $new_tiny_width, 
			$height = $new_tiny_height
			);
		
		
		
		// ** Delete transitional image
		$this->tools->recursiveDelete($dir_path.'transition.png');
		
		
	}
	

	
	
	/**
	 * remove_picture
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/remove_picture
	 * @access public
	 **/ 	
	
	
	function remove_picture(){
		
		$picture_id = $this->uri->segment(3);
		
		$dir_path = 'uploads/pictures/' 
		. $this->user_id . '/'  
		.  $picture_id . '/';
		

		$this->tools->recursiveDelete($dir_path);
		
		$where_array = array(
	  	'id' => $picture_id
  	);

		$table  = 'pictures';
					
		$this->my_database_model->delete_from_table( $table, $where_array);
		
		
		redirect('/main/index/menu/website/home/pictures');
		
	}
	
	/**
	 * upload_photo_form
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/upload_pet_form
	 * @access public
	 **/ 
	
	function upload_photo_form(){
		

		$data= array(
		'photo_id' => $this->input->post('photo_id')
		);	
		
		
		$this->load->view('main/views/upload_photo_form_view', $data);
	
	
	}  	
	

	
	/**
	 * upload_photo
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/upload_image
	 * @access public
	 **/ 
	
	function upload_photo(){
		
		if( $this->input->post('photo_id') == 0){
			
				$insert_what = array(
				                  'user_id' =>  $this->user_id
				          );
				
				$photo_id = $this->my_database_model->insert_table(
									$table = 'photos', 
									$insert_what
									); 	
			
		}else{
				$photo_id = $this->input->post('photo_id');
		};
		
		
		
		$path_array = array(
			'folder'=> 'gallery', 
			'user_id'=> $this->user_id, 
			'photo_id'=> $photo_id
		);
		
		$upload_path = $this->tools->set_directory_for_upload( $path_array );
		
		$config['upload_path'] = './' . $upload_path;
		$config['allowed_types'] = 'bmp|jpeg|gif|jpg|png';
		$config['overwrite'] = 'TRUE';
		$config['file_name'] = 'transition.png';
		
		$this->load->library('upload', $config);
		
	
		if ( ! $this->upload->do_upload("Filedata")){
					?>
							<script type="text/javascript" language="Javascript">
								
								window.parent.growl( notice_header_text = 'Error', notice_body_text = '<br><?php echo $this->upload->display_errors();    ?>', isThisSticky = true)
								
							</script>
					 		
					<?php 
					exit;	
		}	
		else{	
			

			?>
				<script type="text/javascript" language="Javascript">
							window.parent.$('#submit_jcrop_table').show();
							window.parent.open_jcrop( <?php  echo $photo_id   ?>);				
				</script>
 
			<?php     
			
		}				
		
	
	
	}
	
	
	
	
	/**
	 * iframe_jcrop_form_for_photo
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/iframe_jcrop_form_for_photo
	 * @access public
	 **/ 
	
	function iframe_jcrop_form_for_photo(){
		
			$photo_id = $this->input->get('photo_id');
		
			$dir_path = 'uploads/gallery/'  . $this->user_id . '/' . $photo_id;
		
			
			$image_information = getimagesize($dir_path . '/' . 'transition.png');
			
			$width_of_file = $image_information[0];
			$height_of_file = $image_information[1];
	
	
			$new_width  = $this->width_for_gallery_photos;
			$new_height = $this->tools->get_new_size_of ($what = 'height', $based_on_new = $new_width, $orig_width = $width_of_file, $orig_height = $height_of_file );
			
			$this->tools->resize_this(  $full_path = $dir_path . '/' . 'transition.png' , $width = $new_width, $height = $new_height);
	
	
			$data= array(
			'user_id' => $this->user_id,
			'width_of_file' => $new_width, 
			'height_of_file' => $new_height,
			'photo_id' => $photo_id			
			 );	
			
			
			$this->load->view('main/views/iframe_jcrop_for_photo_view', $data);
	
	}
	
	
	
	/**
	 * remove_photo
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/remove_photo
	 * @access public
	 **/ 	
	
	
	function remove_photo(){
		
		$photo_id = $this->input->get('photo_id');
		
		$dir_path = 'uploads/gallery/' 
		. $this->user_id . '/'  
		.  $photo_id . '/';
		

		$this->tools->recursiveDelete($dir_path);
		
		$where_array = array(
	  	'id' => $photo_id
  	);

		$table  = 'photos';
					
		$this->my_database_model->delete_from_table( $table, $where_array);
		
		
		redirect('/main/index/menu/website/photos');
		
	}
	
	/**
	 * crop_photo
	 *
	 * {@source }
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/crop_photo
	 * @access public
	 **/ 
	 

	
	function crop_photo(){

		$dir_path = 'uploads/gallery/' . $this->user_id . '/'  .  $this->input->post('photo_id') . '/';
		
		

		$x_origin = $this->input->post('x_origin');
		$y_origin = $this->input->post('y_origin');
		$width = $this->input->post('width');
		$height = $this->input->post('height');
	
		$this->tools->crop_and_name_it( $new_name = 'image.png', $dir_path.'transition.png', $dir_path, $width, $height, $x_origin, $y_origin );
	
		$new_width  = $this->width_for_gallery_photos;
		$new_height = $this->tools->get_new_size_of ($what = 'height', $based_on_new = $new_width, $orig_width = $width, $orig_height = $height );
		
		$this->tools->resize_this(  $full_path = $dir_path . '/' . 'image.png' , $width = $new_width, $height = $new_height);


		$new_tiny_width  = '157';
		$new_tiny_height = $this->tools->get_new_size_of (
			$what = 'height', 
			$based_on_new = $new_width, 
			$orig_width = $new_width, 
			$orig_height = $new_height 
		);
		

		$this->tools->clone_and_resize_append_name_of(
			$appended_suffix = '_tiny', 
			$full_path = $dir_path . '/' . 'image.png', 
			$width = $new_tiny_width, 
			$height = $new_tiny_height
			);
		
		
		
		// ** Delete transitional image
		$this->tools->recursiveDelete($dir_path.'transition.png');
		
		
	}
	


	/**
	 * update resume
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/home/update_resume
	 * @access public
	 */
	 
	 function update_resume(){	 
	 	
	 	 $this->load->library('custom');	
	 	
	 	 $resumes = $this->custom->getresume( $this->user_id );

		 foreach( $this->input->post('rows') as  $row ){
		 				$fields['resume_id']        = $resumes[0]->id;
		    		$fields['resume_entry_id']  = $row[0];
		    		$fields['field_1']          = $row[1];
		    		$fields['field_2']          = $row[2];
		    		$fields['field_3']          = $row[3];
		    		$fields['header']           = $row[4];
		    		$fields['delete']           = $row[5];
		    		$fields['order']            = $row[6];
		    		$rows[] = $fields;
		    		unset($fields);
			}
			
		$table = 'resume_entries';


		$count=0;
	 	foreach( $rows  as  $row ){
	 		
			$what_array =  array(
			                'resume_id' =>  $row['resume_id'],
			                'field_1' =>    $row['field_1'],
			                'field_2' =>    $row['field_2'],
			                'field_3' =>    $row['field_3'],
			                'header'  =>    $row['header'],
											'order'   =>    $row['order']
			        );
	 		
	 		if( $row['resume_entry_id'] != '' &&  $row['delete'] == 0){
	 			
	 			
	  			$this->my_database_model->update_table_where(
					$table, 
					$where_array = array('id' => $row['resume_entry_id']), 
					$set_what_array =  $what_array
					);
	 			
	 		}elseif( $row['resume_entry_id'] != '' &&  $row['delete'] == 1 ){
	 			
				$where_array = array(
			  	'id' => $row['resume_entry_id']
		  	);
							
				$this->my_database_model->delete_from_table( $table, $where_array);
	 			
	 			
	 		}elseif(  $row['delete'] != 1 ){
	 			
					$insert_what = $what_array;
					
					$resume_entry_id =  $this->my_database_model->insert_table(
									$table, 
									$insert_what
									);
									
	 				?>

	 				<script type="text/javascript" language="Javascript">
	 					rows[<?php  echo $count;   ?>][0] = '<?php echo $resume_entry_id;    ?>';
	 				</script>
	 				
	 				<?php     
 	
	 			
	 		};
	 		$count++;
	 	}
	 	

	 }
	 

	 
	 
	/**
	 * update_template
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/update_template
	 * @access public
	 */	 
	 
	 public function update_template(){
	 	
		$table = 'users';
		$template_id = $this->input->post('template_id');
		$set_what_array = array(
								'template_id' => $template_id
								);		
								
		$this->my_database_model->update_table( 
		$table, 
		$primary_key = $this->user_id, 
		$set_what_array );
		
		$this->load->library('custom');	
		$this->users = $this->custom->get_users( $this->user_id );
		
		if( $this->users[0]->profile_url !='' ){
		  $this->custom->echoOutSidebox( 
			  $profile_url = $this->users[0]->profile_url,
			  $template_name= $this->users[0]->template_name
		  );   
	  };   

	 }
	 
	 
	 
	/**
	 * check_available_profile_link
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/check_available_profile_link
	 * @access public
	 */	 	 
	 
	 public function check_available_profile_link(){	
	 	
	 	$this->load->library('custom');

	 	$response = $this->custom->check_available_profile_url(
	 		$this->input->post('profile_url'), 
	 		$user_id = $this->user_id
	 	);
	 	
		header("Content-type: text/xml");	
		echo  "<?xml version=\"1.0\"?>\n";
	 	
		echo  "<container>";							
			echo  "<status>" . $response['status'] .  "</status>";
			echo  "<message>" . $response['message'] . "</message>";
		echo  "</container>";	

	 }
	 
	 
	 
	/**
	 * update_profile_link
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/update_profile_link
	 * @access public
	 */	 	 
	 
	 public function update_profile_link(){	 
	 	
	 	$this->load->library('custom');
	 	
	 	$this->users = $this->custom->get_users( $this->user_id );

	 	$response = $this->custom->check_available_profile_url(
	 		$this->input->post('profile_url'), 
	 		$user_id = $this->user_id
	 	);
							
	 	if( $response['status'] == 'true'){
	 		
								$set_what_array = array(
												'profile_url' => $this->input->post('profile_url'),
												'welcomed' => 1 
												);			
												
								$this->my_database_model->update_table( 
									$table = 'users', 
									$primary_key = $this->user_id, 
									$set_what_array 
								);
								
								$website_data['profile_url'] = $this->input->post('profile_url');
								$website_data['template_name'] = $this->users[0]->template_name;
								
							  $this->custom->echoOutSidebox( 
								  $profile_url = $website_data['profile_url'],
								  $template_name= $website_data['template_name']
							  );   	 		
	 		
	 		
	 		
	 	}else{
	 		
	 		
	 			echo 	$response['status'];
	 	
	 	
	 		
	 	};
	 	
	 	

		
	}
	 
	 
	 
	/**
	 * update_aboutme
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/update_aboutme
	 * @access public
	 */	 	 
	 
	 public function update_aboutme(){	
	 	
			$set_what_array = array(
							'full_name' => $this->input->post('full_name')
							);			
							
			echo $this->my_database_model->update_table( 
				$table = 'users', 
				$primary_key = $this->user_id, 
				$set_what_array 
			);
					
	 	
	 }
	 
	  
	 
	 
	/**
	 * update_password
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/update_aboutme
	 * @access public
	 */	 	 
	 
	 public function update_password(){	
	 	
	 		$this->load->helper('security');
	 	
			$set_what_array = array(
							'password' => do_hash( $this->input->post('thepassword'), 'md5' )
							);			
							
			echo $this->my_database_model->update_table( 
				$table = 'users', 
				$primary_key = $this->user_id, 
				$set_what_array 
			);
					
	 	
	 }
	 
	 	 
	 
	/**
	 * update_social_network
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/update_social_network
	 * @access public
	 */	 	 
	 
	 public function update_social_network(){	
	 	
			$set_what_array = array(
							$this->input->post('social_network_url') => $this->input->post('social_url')
							);			
							
			echo $this->my_database_model->update_table( 
				$table = 'users', 
				$primary_key = $this->user_id, 
				$set_what_array 
			);
					
	 	
	 }	
	 


	/**
	 * update_database
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/main/update_social_network
	 * @access public
	 */	 	 
	 
	 public function update_database(){	
	 	
	 		$this->load->library('custom');
	 		
	 		$method = $this->input->post('method');

			echo $this->custom->$method( 
						$this->user_id, 
						$this->input->post() 
				 		);

	 }

function test(){

$table = 'pictures';

// $this->my_database_model->	create_generic_table($table );

$fields_array = array(
                      'order' => array(
                                               'type' => 'int(1)'
                                    )
              ); 
              
              
              
$this->my_database_model->add_column_to_table_if_exist(
	$table, 
	$fields_array
);



}
	  
	  
}
/* End of file main.php */
/* Location: ./application/controllers/main.php */