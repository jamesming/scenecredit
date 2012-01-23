<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Custom Library Related to SceneCredit
 * @autoloaded YES
 * @path \system\application\libraries\Custom.php
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @copyright 2010 Prospace LLC
 * @version 1.0
 * 
 */
class Custom {

private $CI;			// CodeIgniter instance


function custom(){
	
	$this->CI =& get_instance();	
	
}



/**
 * Get users
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $users */ 
	
	function get_users( $user_id){
		
		$join_array = array(
									'templates' => 'users.template_id = templates.id'
									);
		
			return $this->CI->my_database_model->select_from_table( 
			$table = 'users', 
			$select_what = 'users.*, templates.name as template_name', 
			$where_array = array('users.id' => $user_id), 
			$use_order = FALSE, 
			$order_field = '', 
			$order_direction = 'desc', 
			$limit = 1, 
			$use_join = TRUE, 
			$join_array
			);
			
	}
	
	
	
/**
 * getTemplates
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $templates */ 
	
	function getTemplates( $premium, $format_id=1 ){
		
			return $this->CI->my_database_model->select_from_table( 
			$table = 'templates', 
			$select_what = '*', 
			$where_array = array('premium' => $premium, 'format_id'=>$format_id), 
			$use_order = TRUE, 
			$order_field = 'id', 
			$order_direction = 'asc', 
			$limit = -1);
			
	}
	
	
	
/**
 * getStartTemplates
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $templates */ 
	
	function getStartTemplates(){
		
			return $this->CI->my_database_model->select_from_table( 
			$table = 'templates', 
			$select_what = '*', 
			$where_array = array('name' => 'bluejean'), 
			$use_order = TRUE, 
			$order_field = 'id', 
			$order_direction = 'desc', 
			$limit = -1, 
			$use_join = TRUE, 
			$join_array = array(), 
			$group_by_array = array(),
			$or_where_array = array('name' => 'basic')
	);
			
			
			

			
	}		
	
	
/**
 * get_users_from_profile_url
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $users */ 
	
	function get_users_from_profile_url(  $profile_url = '' ){
		
		
			return $this->CI->my_database_model->select_from_table( 
			$table = 'users', 
			$select_what = '*', 
			$where_array = array('profile_url' => $profile_url ), 
			$use_order = FALSE, 
			$order_field = '', 
			$order_direction = 'desc', 
			$limit = 1);
			
	}	


/**
 * Get the picture in a user's gallery
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $pictures */ 
	
	function getPicture( $user_id, $menu_item ){
		
		$select_what =  'id, order';
		
		$where_array = array(
		'user_id' =>  $user_id,
		'menu_item' => $menu_item
		);
		
		return  $this->CI->my_database_model->select_from_table( 
			$table = 'pictures', 
			$select_what, 
			$where_array, 
			$use_order = TRUE, 
			$order_field = 'order', 
			$order_direction = 'asc', 
			$limit = -1);

	}
	

	
/**
 * Get all the photos in a user's gallery
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $pictures */ 
	
	function getPhotos( $user_id ){
		
		$select_what =  'id';
		
		$where_array = array(
		'user_id' =>  $user_id
		);
		
		
		$photos = $this->CI->my_database_model->select_from_table( 
			$table = 'photos', 
			$select_what, 
			$where_array, 
			$use_order = TRUE, 
			$order_field = 'created', 
			$order_direction = 'asc', 
			$limit = -1);

		foreach( $photos  as  $photo){
			
			$one_picture_array['photo_id'] = $photo->id;
			$one_picture_array['type'] = 'contains_image';
			
			$picture[] = $one_picture_array;
			
		}
		
		unset(  $one_picture_array  );
		
		
		$one_picture_array['photo_id'] = 0;
		$one_picture_array['type'] = 'first_available';
		
		$picture[] = $one_picture_array;
			
		unset(  $one_picture_array  );
		
		$count_of_empty_holders =  20 - count($picture);
		
		for ($i=1; $i <= $count_of_empty_holders;  $i++){
			$one_picture_array['photo_id'] = 0;
			$one_picture_array['type'] = 'no_image';
			$picture[] = $one_picture_array;
		}
		
		unset(  $one_picture_array  );

		$picture_row1 = array($picture[0],$picture[1],$picture[2],$picture[3]);
		$picture_row2 = array($picture[4],$picture[5],$picture[6],$picture[7]);
		$picture_row3 = array($picture[8],$picture[9],$picture[10],$picture[11]);
		$picture_row4 = array($picture[12],$picture[13],$picture[14],$picture[15]);
		$picture_row5 = array($picture[16],$picture[17],$picture[18],$picture[19]);
		
		$pictures = array(
				$picture_row1,
				$picture_row2,
				$picture_row3,
				$picture_row4,
				$picture_row5
				);

		return $pictures;
		
	}
	

/**
 * Get one reel
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $reels */ 

	function getreel( $reel_id){
		
		$select_what =  '*';
		
		$where_array = array(
		'id' =>  $reel_id
		);
		
		return $this->CI->my_database_model->select_from_table( 
			$table = 'reels', 
			$select_what, 
			$where_array, 
			$use_order = TRUE, 
			$order_field = 'created', 
			$order_direction = 'asc', 
			$limit = 1);
	}
	
	

/**
 * Get all the reels in a user's gallery
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $reels */ 
	
	function getreels( $user_id ){
		
		$select_what =  'id, url, youtube_video_id';
		
		$where_array = array(
		'user_id' =>  $user_id
		);
		
		$reels = $this->CI->my_database_model->select_from_table( 
			$table = 'reels', 
			$select_what, 
			$where_array, 
			$use_order = TRUE, 
			$order_field = 'created', 
			$order_direction = 'asc', 
			$limit = -1);

		foreach( $reels  as  $reel){
			
			$one_reel_array['reel_id'] = $reel->id;
			$one_reel_array['type'] = 'contains_image';
			$one_reel_array['url'] = $reel->url;
			$one_reel_array['youtube_video_id'] = $reel->youtube_video_id;
			
			$reeled[] = $one_reel_array;
			
		}
		
		unset(  $one_reel_array  );
		
		
		$one_reel_array['reel_id'] = 0;
		$one_reel_array['type'] = 'first_available';
		
		$reeled[] = $one_reel_array;
			
		unset(  $one_reel_array  );
		
		$count_of_empty_holders =  18 - count($reeled);
		
		for ($i=1; $i <= $count_of_empty_holders;  $i++){
			$one_reel_array['reel_id'] = 0;
			$one_reel_array['type'] = 'no_image';
			$reeled[] = $one_reel_array;
		}
		
		unset(  $one_reel_array  );

		$reel_row1 = array($reeled[0],$reeled[1]);
		$reel_row2 = array($reeled[2],$reeled[3]);
		$reel_row3 = array($reeled[4],$reeled[5]);
		$reel_row4 = array($reeled[6],$reeled[7]);
		$reel_row5 = array($reeled[8],$reeled[9]);
		$reel_row6 = array($reeled[10],$reeled[11]);
		$reel_row7 = array($reeled[12],$reeled[13]);
		$reel_row8 = array($reeled[14],$reeled[15]);
		$reel_row9 = array($reeled[16],$reeled[17]);
		
		$reels_final = array(
				$reel_row1,
				$reel_row2,
				$reel_row3,
				$reel_row4,
				$reel_row5,
				$reel_row6,
				$reel_row7,
				$reel_row8,
				$reel_row9
				);

		return $reels_final;
		
	}




/**
 * Get the resume in a user's gallery
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $resumes */ 
	
	function getresume( $user_id ){
		
		$select_what =  'id';
		
		$where_array = array(
		'user_id' =>  $user_id
		);
		
		return  $this->CI->my_database_model->select_from_table( 
			$table = 'resumes', 
			$select_what, 
			$where_array, 
			$use_order = TRUE, 
			$order_field = 'created', 
			$order_direction = 'asc', 
			$limit = 1);

	}


	/**
	 * get_resume_entries
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access private
	 */

	function get_resume_entries( $resume_id ){
		$select_what =  '*';
		$where_array = array(
		'resume_id' => $resume_id 
		);
		return $this->CI->my_database_model->select_from_table( 
			$table = 'resume_entries', 
			$select_what, 
			$where_array, 
			$use_order = true, 
			$order_field = 'order', 
			$order_direction = 'asc', 
			$limit = -1);
	}
	

	
	/**
	 * register_process
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	 
	function register_process( $post_array ){	
		
		
		if( $post_array['email'] == ''){
			return array(
				'is'=>'false',
				'key'=>'email',
				'message'=>'Email field must not be blank.'
			);
		};

		if( $post_array['password'] == ''){
			return array(
				'is'=>'false',
				'key'=>'password',
				'message'=>'Password field must not be blank.'
			);
		};
		

		$table = 'users';
		
	  $where_array = array('email' => $post_array['email']);

	  if( $this->CI->my_database_model->check_if_exist($where_array, $table)){
	   	
	   			$validation['is'] = 'false';
	   			$validation['key']='email';
	   			$validation['message']='You have already registered on this site.';
	   	
	   			return $validation;


	  }else{
	  	
	  	
	  			$this->CI->load->helper('security');
	  	
					$insert_what = array(
					                        'email' => $post_array['email'],
					                        'password' =>   do_hash(  $post_array['password'], 'md5' ),
					                        'template_id' => 1
					                );
					
					$user_id = $this->CI->my_database_model->insert_table(
													$table, 
													$insert_what
													); 
													
					$insert_what = array(
					                        'user_id' => $user_id
					                );
					
					$user_id = $this->CI->my_database_model->insert_table(
													$table= 'resumes', 
													$insert_what
													); 													
					
//					$this->CI->load->library('email');
//
//					$this->CI->email->from('jamesming#gmail.com', 'James Ming');
//					$this->CI->email->to($post_array['email']);
//					// $this->CI->email->cc('another@another-example.com');
//					// $this->CI->email->bcc('them@their-example.com');
//					
//					$this->CI->email->subject('Email Test');
//					$this->CI->email->message( base_url().'index.php/home/validate_account/' . $user_id);
//					
//					$this->CI->email->send();
					
					
					/** SEND EMAIL OUT	
					** $url = '<?php echo base_url    ?>index.php/home/validate_account/' . $user_id;
					**/
					
					$validation['is'] = 'true';				
					$validation['key']= 'email';								
					$validation['message']='Thank you for registering.  Please check your email to continue the registration process.';							
													
		   		return 	$validation	;							
					  	
		}



	
	}
	
	/**
	 * login_process
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	
	
	public function login_process(  $post_array ){
		
		$table = 'users';
		
		if( $post_array['email'] == ''){
			return array(
				'is'=>'false',
				'key'=>'email',
				'message'=>'Email field must not be blank.'
			);
		};

		if( $post_array['password'] == ''){
			return array(
				'is'=>'false',
				'key'=>'password',
				'message'=>'Password field must not be blank.'
			);
		};
		
	  if( !$this->CI->my_database_model->check_if_exist(
	  	$where_array = array('email' => $post_array['email']), 
	  	$table
	  )){
	   	
			return array(
				'is'=>'false',
				'key'=>'email',
				'message'=>'Account is not found in system.'
			);

	  }


		$where_array = array(
			'email' => $post_array['email'],
			'password' => md5($post_array['password'])
		);
		
		$users = $this->CI->my_database_model->select_from_table( 
			$table, 
			$select_what =  'id, welcomed', 
			$where_array, 
			$use_order = FALSE, 
			$order_field = '', 
			$order_direction = 'desc', 
			$limit = 1
			);

	  if( count( $users ) > 0 ){
		
					return array(
						'is'=>'true',
						'id'=>$users[0]->id,
						'welcomed'=>$users[0]->welcomed
					);	
		
		}else{
		
			return array(
				'is'=>'false',
				'key'=>'password',
				'message'=>'Wrong password submitted.'
			);		
		
		};
						
	}
		
	
	/**
	 * check_for_duplicate_email
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	 
	public function check_for_duplicate_email($email){	

		$table = 'users';
		
		$where_array = array('email' => $email);

	  if( $this->CI->my_database_model->check_if_exist($where_array, $table)){
	   	
				echo 'true';

		}else{
	   	
				echo 'false';	
		}

	}
	
	
	/**
	 * check_available_url
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	 
	public function check_available_profile_url( $profile_url, $user_id = 0){	

		$table = 'users';
		
		$where_array = array('profile_url' => $profile_url);
		
	  if( $this->CI->my_database_model->check_if_exist($where_array, $table)){
	  	
	  		if( $user_id != 0){
	  			
				   		$where_array = array(
				   			'id' => $user_id,
				   			'profile_url' => $profile_url
				   		);
				   		
				  		if( $this->CI->my_database_model->check_if_exist($where_array, $table)){
				  			
									$response['status'] = 'true';
									$response['message'] = '\'' .$profile_url . '\' is still available';	

							}else{
								
									$response['status'] = 'false';
									$response['message'] = 'This URL is unavailable.';

				   		}	  
				   					
	  		}else{
	  			
							$response['status'] = 'false';
							$response['message'] = 'This URL is unavailable.';
	  			
	  		};

		}else{

				$response['status'] = 'true';
				$response['message'] = 'Available';
				
		}
		
		return $response;	
		

	}
	
	
	
	
	
	
	/**
	 * insert_comment_into_users_table
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	 
	function insert_comment_into_users_table( $post_array ){		

			$insert_what = array(
			                        'user_id' => $post_array['user_id'],
			                        'content' =>  $post_array['content'],
			                        'email' =>  $post_array['email'],
			                        'full_name' =>  $post_array['full_name']
			                );
			
			return $this->CI->my_database_model->insert_table(
											$table = 'comments', 
											$insert_what
													); 
		
	}
	
	
	
	/**
	 * get_social
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	 
	function get_social( $user_id ){	
		
		$select_what =  'facebook_url, twitter_url, linkedin_url, imdb_url, blog_url';
		$where_array = array(
		'id' => $user_id 
		);
		$arrays =  $this->CI->my_database_model->select_from_table( 
			$table = 'users', 
			$select_what, 
			$where_array, 
			$use_order = false, 
			$order_field = '', 
			$order_direction = 'asc', 
			$limit = 1);
		
		
		$social_icons=array();

		if( $arrays[0]->facebook_url != ''){
			
				$social_icons[] = array(
						'social_network' => 'facebook',
						'domain' => 'facebook.com',
						'id' => $arrays[0]->facebook_url,
						'position_of_id' => 'back'
					);
			
		};
		
		if( $arrays[0]->twitter_url != ''){
			
				$social_icons[] = array(
						'social_network' => 'twitter',
						'domain' => 'twitter.com',
						'id' => $arrays[0]->twitter_url,
						'position_of_id' => 'back'
					);
			
		};
		
		if( $arrays[0]->linkedin_url != ''){
			
				$social_icons[] = array(
						'social_network' => 'linkedin',
						'domain' => 'linkedin.com',
						'id' => $arrays[0]->linkedin_url,
						'position_of_id' => 'back'
					);
			
		};
		
		if( $arrays[0]->blog_url != ''){
			
				$social_icons[] = array(
						'social_network' => 'blog',
						'domain' => 'blog.com',
						'id' => $arrays[0]->blog_url,
						'position_of_id' => 'back'
					);
			
		};
		
		
		if( $arrays[0]->imdb_url != ''){
			
				$social_icons[] = array(
						'social_network' => 'imdb',
						'domain' => 'imdb.com',
						'id' => $arrays[0]->imdb_url,
						'position_of_id' => 'back'
					);
			
		};				
				
		return $social_icons;
		
		exit;
		
			return array(
					0 => array(
						'social_network' => 'facebook',
						'domain' => 'facebook.com',
						'id' => 'jamesming',
						'position_of_id' => 'back'
					), 
					1 => array(
						'social_network' => 'twitter',
						'domain' => 'twitter.com',
						'id' => 'jm02jm67',
						'position_of_id' => 'back'
					),
					2 => array(
						'social_network' => 'imdb',
						'domain' => 'imdb.com',
						'id' => 'jamesming',
						'position_of_id' => 'back'
					),
					3 => array(
						'social_network' => 'linkedin',
						'domain' => 'linkedin.com',
						'id' => 'jamesming',
						'position_of_id' => 'back'
					), 
					4 => array(
						'social_network' => 'blog',
						'domain' => 'blogger.com',
						'id' => 'jamesming',
						'position_of_id' => 'back'
					)
			);		
	
	}
	
	
	
	
/**
 * Get comments
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $users */ 
	
	function get_comments( $user_id){
		
			return $this->CI->my_database_model->select_from_table( 
			$table = 'comments', 
			$select_what = '*', 
			$where_array = array('user_id' => $user_id), 
			$use_order = TRUE, 
			$order_field = 'created', 
			$order_direction = 'desc', 
			$limit = -1
			);
			
	}
	
	
	/**
	 * insert_page_views
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	 
	function insert_page_views( $the_array ){		
		
		$table = 'page_views';
		
	  $where_array = array('ip_address' => $the_array['ip_address']);

		$page_views = $this->CI->my_database_model->select_from_table( 
					$table, 
					$select_what = '*', 
					$where_array, 
					$use_order = FALSE, 
					$order_field = '', 
					$order_direction = 'asc', 
					$limit = -1, 
					$use_join = FALSE, 
					$join_array = array(), 
					$group_by_array = array(),
					$or_where_array = array()
					);

	  if(  count( $page_views ) > 0){
	   	
					$this->CI->my_database_model->update_table_where(
								$table, 
								$where_array = array('id' => $page_views[0]->id ), 
								$set_what_array =  array(
										'count' => (int)$page_views[0]->count + 1
									)
								);

	  }else{
		
			$insert_what = array(
			                        'user_id' => $the_array['user_id'],
			                        'ip_address' =>  $the_array['ip_address'],
			                        'country' =>  $the_array['country'],
			                        'state' =>  $the_array['state'],
			                        'city' =>  $the_array['city']
			                );
			
			return $this->CI->my_database_model->insert_table(
											$table, 
											$insert_what
													); 		
		
		
		
		}
		
		
		
		
		


		
	}
	
/**
 * Get Page Views
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array  */ 
	
	function getPageViews( $user_id){
		
			return $this->CI->my_database_model->select_from_table( 
			$table = 'page_views', 
			$select_what = 'ip_address, city, state, country, updated, count', 
			$where_array = array('user_id' => $user_id), 
			$use_order = TRUE, 
			$order_field = 'created', 
			$order_direction = 'desc', 
			$limit = -1, 
			$use_join = FALSE, 
			$join_array = array(), 
			$group_by_array = array(),
			$or_where_array = array()
			);
			
	}
	
	
/**
 * Get count of Page Views
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return int  */ 
	
	function getCountOfTotalPageViews( $user_id){
		
			$page_views =  $this->CI->my_database_model->select_from_table( 
			$table = 'page_views', 
			$select_what = 'SUM(count) as subtotal', 
			$where_array = array('user_id' => $user_id), 
			$use_order = TRUE, 
			$order_field = 'created', 
			$order_direction = 'desc', 
			$limit = -1, 
			$use_join = FALSE, 
			$join_array = array(), 
			$group_by_array = array('id'),
			$or_where_array = array()
			);
			
			$total = 0;

			foreach( $page_views  as  $page_view ){
				
				$total = $page_view->subtotal + $total;
				
			}
			
			return $total;

	}
	
	
	
	
	/**
 * change_premium_level
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 **/ 
	
	function change_premium_level( $user_id, $status = 0	){
	   	
			$this->CI->my_database_model->update_table_where(
						$table='users', 
						$where_array = array('id' => $user_id ), 
						$set_what_array =  array(
								'premium' => $status
							)
						);
						
  }


	/**
 * echo_out_ribbon
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
  
  function echo_out_ribbon_for_side_to_side( $users ){
  	
  	?>
				<div  class=' menu_ribbon' >  
						
					<span class= ' menu_item first_menu_ribbon'   location='0'><a   style='border-bottom: solid 2px white'  >home</a></span>

					<?php if( $users[0]->bio_checkbox ){?>
							<span class= ' menu_item'   location='2'><a>bio</a></span>
					<?php } ?>

					
					<?php if( $users[0]->photos_checkbox ){?>
							<span class= ' menu_item'   location='4'><a>gallery</a></span>
					<?php } ?>
					
					<?php if( $users[0]->reels_checkbox ){?>
							<span class= ' menu_item'   location='6'><a>reels</a></span>
					<?php } ?>
					
					
		
										
					<?php if( $users[0]->resume_checkbox ){?>
							<span class= ' menu_item'   location='8'><a>resume</a></span>
					<?php } ?>
					
					<?php if( $users[0]->press_checkbox ){?>
							<span class= ' menu_item'   location='10'><a>press</a></span>
					<?php } ?>					
					
					
					<?php if( $users[0]->links_checkbox ){?>
							<span class= ' menu_item'   location='12'><a>links</a></span>
					<?php } ?>								
					
					
					<span class= ' menu_item last_menu_ribbon'   location='14'   ><a>contacts</a></span>
					
				</div>
				
  	<?php     
  	
  }
  
	
	/**
 * echo out sidebox
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function echoOutSidebox(
	  $profile_url,
  	$template_name
	){
		
		
		?>
		
			<a  class='profile_link_a ' target='_blank' href='<?php echo base_url(); ?><?php
				
				if( $_SERVER['HTTP_HOST'] == 'localhost' ){
				 echo 'index.php/';
				};
				 
				 ?><?php  echo  $profile_url    ?>'>http://scenecredit.com/
				<br /><?php  echo $profile_url   ?></a>
			<br/ >
			<br/ >
							<small>(&nbsp;<a href='<?php echo base_url()    ?>index.php/main/index/account/change_profile_url'>Change</a>&nbsp;)</small>
			
			
			<a   style='display:none'  target='_blank' href='<?php echo base_url()    ?>index.php/<?php echo $profile_url    ?>'>http://scenecredit.com/<?php  echo $profile_url   ?></a>
			<br/>
			<br/>
			Template: <?php  echo strtoupper ($template_name)   ?>
			<br/>
			<br/>
		
		<?php  
				
		
		   
		
	}
	
	
/**
 * update_checkbox( 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function update_checkbox( $user_id, $post_array ){

			return $this->CI->my_database_model->update_table_where(
								$table = $post_array['table'], 
								$where_array = array('id' => $user_id ), 
								$set_what_array =  array(
										$post_array['field'] => $post_array['checked']
									)
						);
		
		
		
	}
	
/**
 * update_radio( 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function update_radio( $user_id, $post_array ){

			return $this->CI->my_database_model->update_table_where(
								$table = $post_array['table'], 
								$where_array = array('id' => $user_id ), 
								$set_what_array =  array(
										$post_array['field'] => $post_array['value']
									)
						);
		
		
		
	}	
	
	
/**
 * echo_themes_pic_and_text_cardboard( 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function echo_themes_pic_and_text_cardboard( 
	$website_data, 
	$title,  
	$section ){
		
		$section_text = $section.'_text';
		$section_checkbox = $section.'_checkbox';
		$section_picture_checkbox = $section.'_picture_checkbox';
		
	?>
	
	
<div id='<?php echo $section    ?>'  field='<?php echo $section_checkbox    ?>'   class=' container section '>

	<div  class=' area_for_content' >
		
		<div  class=' section_div_one' >
		<?php  echo $title   ?>
		</div>	


		<div   class='section_content '  >
			
				<div  class='img_wrapper float_left '>
					<img src='<?php echo base_url()    ?>uploads/pictures/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $website_data['picture'][$section][0]->id    ?>/image.png' />
				</div>
					
				<div  class='box_text  float_left scroll-pane-arrows' >
					<?php  echo $website_data['users'][0]->$section_text   ?>
				</div>
		</div>

		
	</div>
	<div  class='goto_top '>
	</div>
</div>
	
	<?php     
	}		
		
	
	
	
	
/**
 * echo_themes_pic_and_text_scroll_up_down( 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function echo_themes_pic_and_text_scroll_up_down( 
	$website_data, 
	$title,  
	$section ){
		
		$section_text = $section.'_text';
		$section_checkbox = $section.'_checkbox';
		$section_picture_checkbox = $section.'_picture_checkbox';
		
	?>
	
		<div id='<?php echo $section    ?>'  field='<?php echo $section_checkbox    ?>' class='container section clearfix'>
			<div  class=' section_div_one' >
				<?php  echo $title   ?>
			</div>
			<div  class=' area_for_content'    >		
				
				
					<?php if( $website_data['users'][0]->$section_picture_checkbox == 1){?>		
					
						<div class='picture_outer_container small_box'>
							<div >
								<img src='<?php echo base_url()    ?>uploads/pictures/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $website_data['picture'][$section][0]->id    ?>/image.png' />
							</div>	
						</div>		
						
					<div  class='text_container '   > 
						
						<div   class='box_text scroll-pane-arrows'>
							<?php  echo $website_data['users'][0]->$section_text   ?>
						</div>
		
					</div>								
									
							
					
					<?php }else{?>
					
					<div  class='text_container '   > 
						
						<div   class='box_text no_picture scroll-pane-arrows'   >
							<?php  echo $website_data['users'][0]->$section_text   ?>
						</div>
		
					</div>	
					
					
					<?php } ?>
		
			

					
			</div>
			<div  class='goto_top ' >
			</div>
		</div>	
			
	<?php     
	}		
	
	
	
/**
 * echo_themes_pic_and_text( 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function echo_themes_pic_and_text_left_right( 
	$website_data, 
	$title,  
	$section,
	$menu_ribbon_tips = FALSE,  // Used for brownbag template,
	$has_menu = TRUE
	 ){
		
		$section_text = $section.'_text';
		$section_checkbox = $section.'_checkbox';
		$section_picture_checkbox = $section.'_picture_checkbox';
		
	?>	
	
			<li id='<?php echo  $section   ?>   field='<?php  echo $section_checkbox   ?>'  class='has_content'   >


				<?php if( $menu_ribbon_tips){?>
				
								<div  class=' menu_ribbon_front' >
								</div>
				
				<?php } 
				
				if( $has_menu){
							echo $this->echo_out_ribbon_for_side_to_side(  $website_data['users'] );
					
				};
	
				
				if( $website_data['users'][0]->$section_picture_checkbox == 1){?>		
					
				
							<div   class='section_pic_text' >
									<div class='float_left '  style='margin:0px 0px 0px 0px;' >
											<div  class='section_pic_wrapper '  >
												<img src='<?php echo base_url()    ?>uploads/pictures/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $website_data['picture'][$section][0]->id    ?>/image.png' />
											</div>
									</div>
									
									
									<div  class='text_container '   > 
										
										<div   class='box_text scroll-pane-arrows'>
											<?php  echo $website_data['users'][0]->$section_text   ?>
										</div>
						
									</div>		
			
							</div>
							
							
					
					<?php }else{?>
					
					
								<div   class='section_pic_text' >
										<div  class='text_container '   > 
											
											<div   class='box_text no_picture scroll-pane-arrows'   >
												<?php  echo $website_data['users'][0]->$section_text   ?>
											</div>
										
										</div>	
								</div>	
					
					
					<?php } ?>
							
							
							
							
							
							
							
							
	
				<div  class=' section_div_one' >
					<?php echo $title    ?>
				</div>
				


<?php if( $menu_ribbon_tips){?>

				<div  class=' menu_ribbon_end' >
				</div>

<?php } ?>


			</li> 
	
	
	<?php     
	}		
	
	
	
	
	
	
	
/**
 * generic_layout_for_misc_tabs 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function generic_layout_for_misc_tabs( 
	$website_data, 
	$title,  
	$section
	 ){
		
		$section_text = $section.'_text';
		$section_checkbox = $section.'_checkbox';
		$section_picture_checkbox = $section.'_picture_checkbox';

				if( $website_data['users'][0]->$section_picture_checkbox == 1){?>		
					
					
				<script type="text/javascript" language="Javascript">
				$(document).ready(function() { 
					$('.text_container').width(
						$('.text_container').parent().width() - $('.image_side').width() 
					)
				});
				</script>	
				
				<style>
					.image_side{
						 width:200px;	
					}
					.box_text{
						 padding:0px 20px 20px;
					}
				</style>
				
							<div   class='section_pic_text' >
									<div class='float_left image_container'  >
											<div  class='section_pic_wrapper '  >
												<img class='image_side ' src='<?php echo base_url()    ?>uploads/pictures/<?php   echo $website_data['users'][0]->id  ?>/<?php echo $website_data['picture'][$section][0]->id    ?>/image.png' />
											</div>
									</div>
									
									
									<div  class='text_container float_left'   > 
										
										<div   class='box_text '   >
											<?php  echo $website_data['users'][0]->$section_text   ?>
										</div>
						
									</div>		
			
							</div>
							
							
					
					<?php }else{?>
					
					
								<div   class='section_pic_text' >
										<div  class='text_container '   > 
											
											<div   class='box_text no_picture scroll-pane-arrows'   >
												<?php  echo $website_data['users'][0]->$section_text   ?>
											</div>
										
										</div>	
								</div>	
					
					
					<?php } ?>


				





			</li> 
	
	
	<?php     
	}		
	
	
	
	
	
	
	
	
	
	
	
	
}


/* End of file Tool.php */ 
/* Location: \system\application\libraries\Custom.php */
