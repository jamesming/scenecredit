																		<style>
																		.menu_area_div{
																		height:37px;
																		border-bottom:1px solid lightgray;
																		}	
																		.menu_area_div ul.menu_area{
																		width:1574px;
																		margin-left:2px;
																		
																		}
																						.menu_area_div ul#menu_area li{
																							float:left;
																					    padding:5px 0px 3px 0px;
																					    margin-bottom: 0px;
																					    border-right:1px solid lightgray;
																							text-align:center;
																							width:90px;
																							font-size:13px;
																							font-weight:bold;
																							color:darkgray;
																						}	
																						
																						.menu_area_div ul#menu_area li.last_li{
																							border-right:0px;
																						}																							
																						
																			
																						
																									.menu_area_div ul#menu_area li a{
																										padding:0px 0px 3px 0px;
			
																									}
																									
																									

	
																		
																		</style>
																		
<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
		$('#<?php echo $website_data['menu_item']     ?>').css({color:'gray','border-bottom':'4px solid <?php echo $website_data['underline_color']    ?>'});
	
	
		<?php if( $website_data['menu_selected'] != 'none' ){?>

				$("#menu_area li a").click(function(e) { 
					 document.location.href='<?php echo  base_url();   ?>index.php/main/index/<?php  echo $website_data['which_menu']   ?>/<?php echo $website_data['menu_selected']    ?>/'  + $(this).attr('id');
				});	


		<?php }else{?>
			
				$("#menu_area li a").click(function(e) { 
					 document.location.href='<?php echo  base_url();   ?>index.php/main/index/<?php  echo $website_data['which_menu']   ?>/'  + $(this).attr('id');
				});	
			
		<?php } ?>

	
		$("#menu_area li a[id!='<?php echo $website_data['menu_item']    ?>']")
			.hover(													
			  function () {
			    $(this).css({color:'gray','border-bottom':'4px solid <?php echo $website_data['underline_color']    ?>'});
			  }, 
			  function () {
			    $(this).css({color:'darkgray','border-bottom':'0px'});
			  }
			);
});	
</script>
