<style>
.sub_menu_area_div {
    height: 37px;
    margin-top: 0px;
}
				.sub_menu_area_div ul.sub_menu_area {
				    margin-left: 20px;
				    width: 1574px;
				}
							.sub_menu_area_div ul.sub_menu_area li {
							    border-left: 1px solid darkgray ;
							    cursor: pointer;
							    float: left;
							    font-size: 12px;
							    margin-bottom: 0;
							    padding: 5px 0 3px;
							    text-align: center;
							    width: 110px;
							    border-top: 1px solid darkgray ;
							    height: 22px;
							    font-weight:bold;
							    color:darkgray;
							}
							.sub_menu_area_div ul.sub_menu_area li.line {
							    cursor: default;
							}
										.sub_menu_area_div ul.sub_menu_area li a {
										    padding: 0 0 3px;
										    width: 110px;
										}
										
												.sub_menu_area_div ul.sub_menu_area li a:hover {
												    color:orange;
												}
										
							.sub_menu_area_div ul.sub_menu_area li.last_submenu_item {
									border-right: 1px solid darkgray 
							}			
							
							.sub_menu_area_div ul.sub_menu_area li.line {
									width: 190px;
									border-left:0px;
									border-left:0px;
									border-top:0px;
									border-bottom:1px solid darkgray ;
							}		
							.sub_menu_area_div ul.sub_menu_area li.left_line {
									width: 10px;
							}								
							.sub_menu_area_div ul.sub_menu_area li.right_line {
									width: 120px;
							}																	


</style>

<script type="text/javascript" language="Javascript">
$(document).ready(function() {

	select_li_dom = $('.sub_menu_area_div ul.sub_menu_area li[submenu_item="<?php echo $website_data['submenu_item']    ?>"]');
	
	select_li_dom.css({
		background:'url(<?php echo  base_url()   ?>images/sub_menu_tab_blue_fill.png)',
		color:'white',
		'border-left':'1px solid <?php   echo $website_data['blue']   ?>',
		'border-top':'1px solid <?php   echo $website_data['blue']   ?>',
		'border-right':'1px solid <?php   echo $website_data['blue']   ?>'
	}).next().css({
		'border-left':'0px'
	})
	
	select_li_dom.children('a').css({color:'white'});
	
	
	$('.sub_menu_area_div ul.sub_menu_area li:not(li[submenu_item="<?php echo $website_data['submenu_item']    ?>"], li.line)')
	.hover(
		  function () {
		     $(this).css({
		     	'color':'white',
		     	'background':'url(<?php echo base_url()    ?>images/sub_menu_tab_blue_fill.png)',
					'border-top':'1px solid <?php   echo $website_data['blue']   ?>'
		     	}).next(':not(li.right_line)').css({
					'border-left':'1px solid <?php   echo $website_data['blue']   ?>'
		    	});
		    	

		    	
		  }, 
		  function () {
		     $(this).css({
		     	'color':'darkgray',
		     	background:'white',
					'border-top':'1px solid darkgray'
		     	}).next(':not(li.right_line)').css({
					'border-left':'1px solid darkgray'
		     	});

		  }
		);
		
		
		$('.sub_menu_area_div ul.sub_menu_area li.last_submenu_item:not(li[submenu_item="<?php echo $website_data['submenu_item']    ?>"])')
			.hover(
					  function () {
					     $(this).css({
								'border-right':'1px solid <?php   echo $website_data['blue']   ?>'
					    	});
	
					  }, 
					  function () {
					     $(this).css({
								'border-right':'1px solid darkgray'
					     	});
			
					  }
					);

		
		<?php if( isset($website_data['menu_item']) ){?>
			
			
						$('.sub_menu_area_div ul.sub_menu_area li:not(li.line)')
								.click(function(event) {	
									
								 		document.location.href='<?php echo  base_url();   ?>index.php/main/index/<?php echo $website_data['which_menu']    ?>/<?php  echo $website_data['menu_selected']   ?>/<?php  echo $website_data['menu_item']   ?>/' + $(this).attr('submenu_item');
								 		
								});				
			
			
		<?php }else{?>
			
			
						$('.sub_menu_area_div ul.sub_menu_area li:not(li.line)')
								.click(function(event) {	
									
								 		document.location.href='<?php echo  base_url();   ?>index.php/main/index/<?php echo $website_data['which_menu']    ?>/<?php  echo $website_data['menu_selected']   ?>/' + $(this).attr('submenu_item');
								 		
								});			
			
			
		<?php } ?>
		

	
	
})	
</script>
