
<iframe id="iframe_resume" scrolling="AUTO" 
frameborder="0" src=""  >

  <p>Your browser does not support iframes.</p>
  
</iframe>

<script type="text/javascript" language="Javascript">
$(document).ready(function() { 
	$('#iframe_resume').attr('src','<?php echo base_url();    ?>index.php/themes/view_resume_top_to_bottom?user_id=<?php echo $website_data['users'][0]->id    ?>')
	
	$('#iframe_resume').load(function(){
		$("#iframe_resume").contents()
		.find("#resume_view")
		.css({'padding-left':'0px'})
		$(this).css({width:$(this).contents().find("body").width()+100, height:$(this).contents().find("body").height()+30});
	});

});
</script>