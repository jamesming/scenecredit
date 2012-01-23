<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<?php     	$this->load->view('header/common_css.php');  ?>
<head>
<style type="text/css">
#main-container{
			padding-bottom:100px;
}
			#top_button_container{
			  margin: 70px 100px 0px;
			  padding-left:11px;
			}						

							
							.add_button{
							    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
							    background-position: -11px -15px;
							    background-repeat: no-repeat;
							    height: 22px;
							    width: 22px;
							    float:left;
							    margin-top: 0px;		
							}
							
							.add_button, .save{
									margin-top: 1px;
									margin-left: 1px;
									cursor:pointer;
							}
							
							.save{
							    background-image: url(<?php echo base_url()    ?>images/save.jpg);
							    background-position: 2px -2px;
							    background-repeat: no-repeat;	
							    height: 22px;
							    width: 22px;
							}
							
							.loading{
						    background-image: url(<?php echo base_url()    ?>images/ajax-loader.gif);
						    background-position: 5px 4px;
						    background-repeat: no-repeat;
						    height: 22px;
						    width: 22px;	
							}
							
							#view_resume{
							    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
							    background-position: -11px -75px;
							    background-repeat: no-repeat;
							    float: left;
							    height: 22px;
							    margin-top: 0;
							    width: 22px;
							    margin-left: 4px;		
							}
			
			
			#resume_container{
				height:auto;
			  width: 800px;
			  margin: 0 100px;
			  background:red;
			  /*border: 1px solid;*/
			}
							ul#resume  {
								width:638px;
								list-style-type: none; 
								margin:0px 0px;
								padding:0px;
								clear:both;
								margin-left:0px;
							}
							#resume li { 
								float:left; 
								padding:5px; 
								height:25px; 
								}
									#resume li div.div_row { 
										width:636px; 
										height:30px; 
										border:solid 1px black; 
										background-color:#E0E0E0; 
										text-align:center; 
									}
									#resume .placeHolder div.div_row { 
										background-color:white!important; 
										border:dashed 1px gray !important; 
									}
									
													span.grab{
														margin: 7px 8px 0 10px;
														float:left;
													}
									
									
													input.text{
												    border: 1px solid gray;
												    height: 19px;
												    margin-right: 2px;
												    margin-top: 3px;
												    padding:3px 0px 0px 5px;
												    <?php $width_of_field = '145px';   ?>
												    width: <?php  echo $width_of_field   ?>;
														float:left;
													}
			
													.header_span{
														display:block;
														font-weight:bold;
														font-size:12px;	
														margin: 5px 8px 0 2px;
														float:left;
													}
													
													input.header_check{
															display:block;
															<?php if( $this->tools->browserIsExplorer() ){?>
																							margin: 5px 1px 0 10px;	
															<?php }else{?>
																							margin: 8px 1px 0 10px;	
															<?php } ?>
															float:left;
													}		
													
													div.delete{	
													    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
													    background-position: -67px -164px;
													    background-repeat: no-repeat;
													    height: 22px;
													    margin-left: 5px;
													    width: 22px;
															cursor:pointer;
															float:left;
													}
#resume_view{
	padding: 10px 0px 50px 105px;
	display:none;
}													
	#resume_view div.heading_resume{
    clear: both;
    font-size: 20px;
    font-weight: bold;
    margin-top: 36px;
    margin-bottom: 3px;
    border-bottom: 1px solid;
    width: 638px;
	}

	#resume_view div.item_resume{	
		clear:both;
	}
		#resume_view div.field_resume{
		    float: left;
		    font-size: 15px;
		    margin-left: 2px;
		    width: 209px;
		}									
</style>
</head>
<body>
	
	<div  id='main-container' class=' container'   >


			<div  id='top_button_container'  class='clearfix ' >
				<div  id='add' class='float_left add_button'  title='Insert'>
				</div>
				<div  class='save float_left'  title='Save'>
				</div>
				<div  id='view_resume' href='#zoom_div_container'  class='float_left '   >
					
				</div>
			</div>
		
	    <div  id='resume_container' >
					<ul id="resume">
					</ul>
	    </div>
	    
			<div  id='resume_view'  class='clearfix ' >
			
			<?php
				
				foreach( $resume_entries  as  $resume_entry){
				
				if( $resume_entry->header == 1 ){
					
					echo "<div  class='heading_resume ' >".$resume_entry->field_1."</div>";
					
				}else{
					
					?>
					
					
					<div  class=' item_resume' >
						<div  class='field_resume ' >
							<?php  echo  $resume_entry->field_1;  ?>
						</div>
						<div  class='field_resume '>
							<?php  echo  $resume_entry->field_2;  ?>
						</div>
						<div  class='field_resume '>
							<?php  echo  $resume_entry->field_3;  ?>
						</div>
					</div>
					
					
					<?php     
					
				};
				
			}
				
			?>
				
			</div>
			
			<div  id='results'>			
			</div>
			

	</div>
	<div id="zoom_div_container"  >
		<iframe id="iframe_content_text" scrolling="AUTO"  style="
			width:750px;
			height:555px;
		<?php if( $this->tools->browserIsExplorer() ){?>
										margin-top: 40px;	
		<?php }else{?>
										margin-top: 20px;	
		<?php } ?> 
			padding: 0;
			" 
			frameborder="0" src=""  >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>
	</div>
</body>
</html>

<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/dragsort/jquery.dragsort-0.4.3.min.js"></script>

<script type="text/javascript">
	
		order = new Array();

		rows = new Array();
		
		<?php 
		$count=0;
		foreach($resume_entries  as $row){  ?>	
			
			rows[<?php echo $count ?>] = new Array('<?php echo $row->id    ?>','<?php echo $row->field_1    ?>','<?php echo $row->field_2    ?>','<?php echo $row->field_3    ?>','<?php echo $row->header    ?>');
			
		<?php 
		$count++;
		} ?>
		

$(document).ready(function() {
	
	
		  	$('#view_resume').css({cursor:'pointer'})
		  	.fancyZoom().click(function(event) {
		  		
					$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/home/view_resume_top_to_bottom');
					
				});		
	
				for (i=0;i<rows.length;i++) {
					append_one_row(i);
				}
			
		    $("#resume").dragsort({ 
		    		dragSelector: "span.grab", 
		    		dragEnd: saveOrder, 
		    		placeHolderTemplate: "<li class='placeHolder'><div  class='div_row ' ></div></li>" });
		    		
		    $('div.delete').live('click', function() {
		    	rows[$(this).attr('row')][5] = 1;
		    	$(this).parent().parent().remove();
				});	
				
		    $('#add').click(function(event) {  
		    	newest_row = add_element_to_rows_array();
		    	make_into_header( newest_row.children() );
				});		
				
		    $('.add_from_side').live('click', function() {
		    	newest_row = add_element_to_rows_array();
		    	var row_number = $(this).attr('row');
		    	var designated_row = $('#resume li#row_'+row_number.toString());
		    	newest_row.insertAfter( designated_row );
				});						

		    $('.add_header_from_side').live('click', function() {
		    	newest_row = add_element_to_rows_array();
		    	var row_number = $(this).attr('row');
		    	var designated_row = $('#resume li#row_'+row_number.toString());
		    	 make_into_header( newest_row.children() );
		    	newest_row.insertAfter( designated_row );
				});	
				
				
				$('.header_check').live('click', function() {
					
						if( $(this).is(':checked')  ){

							 make_into_header( $(this).parent()  );

						}else{
							$(this).parent().css({background:'#FFFFFF'});
							$(this).parent().children('input.text').show();
							$(this).parent().children('input.text:nth-child(2)')
							.css({width:'<?php echo $width_of_field;    ?>','font-weight':'normal'});
							
						};
					
						
				});

				$('.save').click(function(event) {
					
						var save_dom = $(this); 
					
						save_dom.removeClass('save').addClass('loading');
					
						saveOrder(); 

						for (i=0;i<rows.length;i++) {
			
							rows[i][1] = $("input#"+i+"-1").val();
							rows[i][2] = $("input#"+i+"-2").val(); 
							rows[i][3] = $("input#"+i+"-3").val();

							if( $('input#header_check-'+i).is(':checked')  ){ // HEADER
								rows[i][4] = 1;
							}else{
								rows[i][4] = 0;
							};
							
							if( rows[i][1] == null ){ // DELETE 
								rows[i][5] = 1;
							}else{
								rows[i][5] = 0;
							};
							
							rows[i][6] = i;  // ORDER
							
						}
						
						var j = 0;
						for(var k in order){
							rows[order[k]][6] = j; // ORDER
							j++;
						}
				
						$.post("<?php echo base_url(). 'index.php/home/update'; ?>",{
						rows:rows
						},function(data) {
						
							$('#results').html(data);
							
							setTimeout(function() { 											
							save_dom.removeClass('loading').addClass('save');
														}, 300);		
							
							
						
						});  	
				});

});


function add_element_to_rows_array(){
	
		    	rows.push(new Array('','','',''));
		    	
		    	var new_index = rows.length - 1;
		    	
		    	append_one_row(  new_index  );
		    	
		    	var newest_row = $('#resume li#row_'+new_index.toString());
		    	
		    	$('#resume').prepend(newest_row);
		    	
		    	return newest_row;
}

function append_one_row(i){
	
		$("#resume").append("<li id='row_"+i+"' itemID='"+i+"'><div  class='div_row ' ><span title='Move' class='grab'><img src='<?php  echo base_url()   ?>images/drag.png' /></span>&nbsp;&nbsp;</div></li>");
		
		for (k=1;k<=3;k++) {
			$("#resume li#row_" + i + " div.div_row").append("<input  class='text '  id='" + i + "-" + k + "' value='" + rows[i][k] + "' /></li>");
		}

		
		designated_row = $("#resume li#row_" + i + " div.div_row");
		
		designated_row.append("<input id='header_check-" + i + "' class='header_check '   type='checkbox' value=''><span  class='header_span ' >Header</span><div  title='Insert' class='add_button add_header_from_side' style='display:none'   row='"+i+"'></div><div    title='Insert' class='add_button add_from_side' row='"+i+"'></div> <div title='Delete' class='delete ' row='"+i+"'></div>");
	
	
		if( rows[i][4] == 1  ){
			
			make_into_header( designated_row  );

		};
	
	
		
}

function make_into_header( designated_row  ){
	
			designated_row.css({background:'#CAE0F5'});
			designated_row.children('input.text').hide();
			designated_row.children('input.text:nth-child(2)').show()
			.css({width:'453px','font-weight':'bold'});
			designated_row.children('input.header_check').attr('checked','checked')

	
}

function saveOrder() {
	order =  $("#resume li").map(function() { 
			return $(this).attr("itemID"); 
		}).get();
};
		    
		    
</script>
<?php
	$this->load->view('footer/fancy_zoom.php'); 
