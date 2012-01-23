<style>
#textarea_div{
width:710px;
height: 380px;
margin:0px 0px 0px 0px;
padding:10px 0px 0px 0px;
}
.save{
background-image: url(<?php echo base_url()    ?>images/disk_save.png);
background-position: 3px 3px;
background-repeat: no-repeat;	
height: 22px;
width: 22px;
cursor:pointer;
}
#save_text{
color:gray;
margin:5px 0px 0px 5px;	
font-weight:bold;
cursor:pointer;
}
.loading{
background-image: url(<?php echo base_url()    ?>images/ajax-loader.gif);
background-position: 5px 4px;
background-repeat: no-repeat;
height: 22px;
width: 22px;	
}
</style>

	<div>
				<div  class='save float_left'  title='Save'>
				</div>
				<div  id='save_text' class='float_left' >Save
				</div>
	</div>

	<div  id='textarea_div' class='clearfix ' >
			<textarea  class=' clearfix' id='text_area'><?php  echo $website_data['text']  ?></textarea>
	</div>

		
<?php

$this->load->view('javascript/htmlbox_wsiwyg.php');  ?>

<script language="Javascript" type="text/javascript">
	
			$(document).ready(function() { 
				
				
				var mbox = $("#text_area").css({
						height:"300px",
						width:"100%"
						}).htmlbox({
				    toolbars:[
					    [
						// Cut, Copy, Paste
						"separator","cut","copy","paste",
						// Undo, Redo
						"separator","undo","redo",
						// Bold, Italic, Underline, Strikethrough, Sup, Sub
						"separator","bold","italic","underline","strike","sup","sub",
						// Left, Right, Center, Justify
						"separator","justify","left","center","right",
						// Ordered List, Unordered List, Indent, Outdent
						"separator","ol","ul","indent","outdent",
						// Hyperlink, Remove Hyperlink, Image
						"separator","link","unlink","image"
						
						],
						[// Show code
						"separator","code",
				        // Formats, Font size, Font family, Font color, Font, Background
				        "separator","formats","fontsize","fontfamily",
						"separator","fontcolor","highlight",
						],
						[
						//Strip tags
						"separator","removeformat","striptags","hr","paragraph",
						// Styles, Source code syntax buttons
						"separator","quote","styles","syntax"
						]
					],
					skin:"gray"
				});
				

		
				$('.save, #save_text').click(function(event) {
					
						var save_dom = $('.save'); 
					
						save_dom.removeClass('save').addClass('loading');
					
						$.post("<?php echo base_url(). 'index.php/main/update_wysiwyg'; ?>",{
							field:'<?php echo $website_data['field']    ?>',
							value: mbox.get_html()
							},function(data) {
								
							setTimeout(function() { 											
							save_dom.removeClass('loading').addClass('save');
														}, 300);	
								

							});
	
				})	
				
				setTimeout(function() { 											
						mbox.set_text( $('#text_area').text()   );
				}, 100);

					

			});
	

</script>