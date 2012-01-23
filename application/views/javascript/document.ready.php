<script type="text/javascript" language="Javascript">
	
$(document).ready(function() {
		$('a').click(function(e) {
    	e.preventDefault();  
		});
		
		$('.menu_item').click(function(e) {
    	$('body').stop().scrollTo( '#'+$(this).text(), 1000 );
		});	



		$('#iframe_content').attr('src','<?php echo base_url();    ?>index.php/home/view_resume_top_to_bottom')
		.css({height:$(window).height()-140});



		
//		$("li a").hover(
//		  function () {
//		    $(this).css({font-color:'white'});
//		  }, 
//		  function () {
//		   	$(this).css({font-color:'gray'});
//		  }
//		 );	

});
    

</script>