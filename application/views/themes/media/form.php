<style>
#form_wrapper{
	margin:40px 0px 0px 0px;
	padding:10px 0px 0px 0px;
	width:500px;
}
#comment_label{
	font-size:17px;
	margin:0px 0px 0px 3px;
}
textarea#content{
	width:500px;
	height:70px;
	font-size:16px;
	padding:2px 5px 2px 5px;
	border:0px;
}
.input_field{
	width:500px;
	height:20px;
	margin:2px 0px 2px 0px;
	padding:2px 5px 2px 5px;
	color:darkgray;
	font-style:italic;
	font-size:16px;
		
}
</style>
						

						<div  id='form_wrapper'  class='clearfix '  >
							<div  id='comment_label'>Leave me a message:
							</div>
							
							<input  class='input_field '  id="full_name" type="" value="Name">
							<input  class='input_field '  id="email" type="" value="Email">
							
							<textarea   class='clearfix ' name='content'  id='content'></textarea>
							<img class='clearfix ' id="submit" src='<?php echo base_url()    ?>images/btn_send.png'  />
						</div>
						
<script type="text/javascript" language="Javascript">
	$(document).ready(function() {
			
			$('.input_field').focus(function(){
					$(this).val('').css({'font-style':'normal','color':'black'})
					.unbind('focus');
			});
			
			$('#submit').click(function(){
				
								$('#submit').css({margin:'10px 0px 0px 27px'}).attr('src','<?php echo base_url()    ?>images/ajax-loader.gif')

								$.post("<?php echo base_url(). 'index.php/themes/insert_comment';    ?>",{
									user_id:<?php echo $website_data['users'][0]->id    ?>,
									content: $('#content').val(),
									email:$('#email').val(),
									full_name:$('#full_name').val()
									},function(data) {

							setTimeout(function() { 	
							
									$('#submit').css({margin:'0px 0px 0px 0px'}).attr('src','<?php echo base_url()    ?>images/btn_send.png')
								
							}, 700);	


										
						
			 						});	



			});
	});
</script>

