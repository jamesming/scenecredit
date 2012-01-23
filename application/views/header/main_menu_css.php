
<style>
.main_menu_div{
	margin-top:1px;
	margin-bottom:5px;
}	
.main_menu_div ul.main_menu_ul{
width:750px;
margin-left:1px;
}

				.main_menu_div ul.main_menu_ul li{
			    background: none repeat scroll 0 0 #B2B2B2;
			    border-right: 1px solid lightgray;
			    color: white;
			    cursor: pointer;
			    float: left;
			    font-size: 12px;
			    font-weight: bold;
			    height: 20px;
			    margin-bottom: 0;
			    padding: 10px 0 7px;
			    text-align: center;
			    width: 122px;
				}	
						.main_menu_div ul.main_menu_ul li a:hover{
					   	color:white;
						}					
				
				
#corner_block_left{
    background-image: url("<?php   echo base_url()  ?>images/blocks.png");
    background-position: 0 0;
    background-repeat: no-repeat;
    width: 6px;
    height: 20px;
    background-color: #F8F6F6;
    border-right: 0px;
}
#corner_block_right{
    background-color: #F8F6F6;
    background-image: url("<?php  echo base_url()   ?>images/blocks.png");
    background-position: -70px 0;
    background-repeat: no-repeat;
    border-right: 0 none;
    height: 20px;
    width: 6px;
}
</style>
<script type="text/javascript" language="Javascript">								
	$(document).ready(function() {
		
			$('#<?php echo $website_data['menu_selected']    ?>').css({'background':'url(<?php echo base_url()    ?>images/main_menu_tab_grad_blue.png)',color:'white'});
			
			$('.main_menu_ul li').click(function(event) {
					document.location.href='<?php echo  base_url();   ?>index.php/main/index/menu/' + $(this).attr('id');
			})

			$('.main_menu_ul li:not(li#<?php echo $website_data['menu_selected']    ?>, li.corner)')
			.hover(
		  function () {
		     $(this).css({'background':'url(<?php echo base_url()    ?>images/main_menu_tab_grad_blue.png)'});
		     
//		     	if( $(this).attr('id') == 'dashboard'){
//		     		$('#corner_block_left').css({'background-position':'-79px 0'});
//			    };
//			    
//		     	if( $(this).attr('id') == 'community'){
//		     		$('#corner_block_right').css({'background-position':'-148px 0'});
//			    };			    
			    
		     
		  }, 
		  function () {
		     $(this).css({background:'#B2B2B2'});
		     
//		     	if( $(this).attr('id') == 'dashboard'){
//		     		$('#corner_block_left').css({'background-position':'0 0'});
//			    };		
//			    
//		     	if( $(this).attr('id') == 'community'){
//		     		$('#corner_block_right').css({'background-position':'-70px 0'});
//			    };		  
		     
		  }
		);

	
			 
					
			<?php if( $website_data['menu_selected'] == 'dashboard'){?>
				$('#corner_block_left').css({'background-position':'-79px 0'});
			<?php }else{?>
				$('#corner_block_left').css({'background-position':'0 0'});
			<?php } ?>
			
			<?php if( $website_data['menu_selected'] == 'community'){?>
				$('#corner_block_right').css({'background-position':'-148px 0'});
			<?php }else{?>
				$('#corner_block_right').css({'background-position':'-70px 0'});
			<?php } ?>			
			
			
			
	})	
</script>
	