<script type="text/javascript" language="Javascript">
	$("#portfolio-list a img").hover(
		function() {
			$(this).stop().animate({"opacity": "0.7"}, "400");
		},
		function() {
			$(this).stop().animate({"opacity": "1"}, "500");
		}
	);
</script>