				<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.cycle.all.latest.js"></script>
				<script type="text/javascript" language="Javascript">
							slides = new Array;
							
							<?php foreach( $website_data['picture']['slideshow']  as $key =>  $slide ){ ?>
								slides[<?php echo $key    ?>] = <?php echo $slide->id    ?>;
							<?php } ?>	
							$(document).ready(function() { 
								for(i=0;i<<?php echo count($website_data['picture']['slideshow'])    ?>;i++){
									$('.slideshow').append("	<img  id='picture_" + i + "'   class='pictures '  src='<?php echo base_url()    ?>uploads/pictures/<?php echo $website_data['users'][0]->id    ?>/" + slides[i] + "/image.png?rand=<?php echo rand(2,1233)    ?>'   style='z-index:" + i +  "'    />");
								}
								
						    $('.slideshow').cycle({
									fx: 'fade', 
							    speed:    1000, 
							    timeout:  5000 
									
								})
							});
				</script>
				<div class="slideshow clearfix">
				</div>