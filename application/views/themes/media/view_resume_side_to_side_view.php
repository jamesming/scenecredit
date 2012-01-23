<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php     	$this->load->view('header/common_css.php');  ?>
<head>
<style type="text/css">
body {
		font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;
    width: 750px;
    padding-bottom:20px;
}
</style>


<style>
/*
 * CSS Styles that are needed by jScrollPane for it to operate correctly.
 *
 * Include this stylesheet in your site or copy and paste the styles below into your stylesheet - jScrollPane
 * may not operate correctly without them.
 */

.jspContainer
{
	overflow: hidden;
	position: relative;
}

.jspPane
{
	position: absolute;
}

.jspVerticalBar
{
	position: absolute;
	top: 0;
	right: 0;
	width: 16px;
	height: 100%;
	background: red;
}

.jspHorizontalBar
{
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 16px;
	background: red;
}

.jspVerticalBar *,
.jspHorizontalBar *
{
	margin: 0;
	padding: 0;
}

.jspCap
{
	display: none;
}

.jspHorizontalBar .jspCap
{
	float: left;
}

.jspTrack
{
	background: #dde;
	position: relative;
}

.jspDrag
{
	background: #bbd;
	position: relative;
	top: 0;
	left: 0;
	cursor: pointer;
}

.jspHorizontalBar .jspTrack,
.jspHorizontalBar .jspDrag
{
	float: left;
	height: 100%;
}

.jspArrow
{
	background: #50506d;
	text-indent: -20000px;
	display: block;
	cursor: pointer;
}

.jspArrow.jspDisabled
{
	cursor: default;
	background: #80808d;
}

.jspVerticalBar .jspArrow
{
	height: 16px;
}

.jspHorizontalBar .jspArrow
{
	width: 16px;
	float: left;
	height: 100%;
}

.jspVerticalBar .jspArrow:focus
{
	outline: none;
}

.jspCorner
{
	background: #eeeef4;
	float: left;
	height: 100%;
}

/* Yuk! CSS Hack for IE6 3 pixel bug :( */
* html .jspCorner
{
	margin: 0 -3px 0 0;
}
</style>


<style>

.jspHorizontalBar,
.jspVerticalBar,
.jspTrack
{
	background: #eeeef4;
}

.jspDrag
{
	background:  #bbd;

	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

.jspTrack .jspActive,
.jspTrack .jspHover,
.jspDrag:hover
{
	background: #8B8B9F;
}


.jspArrow
{
	background: url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_222222_256x240.png) no-repeat;
	
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

.jspVerticalBar>.jspActive,
.jspArrow:hover
{
	background-image: url(<?php  echo base_url()   ?>js/jquery_scrollpane/images/ui-icons_cd0a0a_256x240.png);
}

.jspVerticalBar>.jspDisabled,
.jspVerticalBar>.jspDisabled:hover,
.jspHorizontalBar>.jspDisabled,
.jspHorizontalBar>.jspDisabled:hover
{
	background-color: transparent;
	background-image: url('../images/ui-icons_888888_256x240.png');
}

.jspVerticalBar .jspArrow
{
	height: 15px;
}

.jspHorizontalBar .jspArrow
{
	width: 15px;
}

.jspArrowUp
{
	background-position: 0 0;
}

.jspArrowDown
{
	background-position: -64px 0 !important; 
}

.jspArrowLeft
{
	background-position: -96px 0 !important;
}

.jspArrowRight
{
	background-position: -32px 0 !important;
}
</style>




<style type="text/css">
#top_label{
		display:none;
    font-weight: bold;
    font-size: 21px;
    padding-bottom: 26px;
    padding-left: 30px;
}
#resume_view {
	
    padding: 20px 0 50px 30px;
    width: 600px;
    margin:-30px 0px 0px 0px;
}
#resume_view div.heading_resume {
    border-bottom: 1px solid;
    clear: both;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 3px;
    margin-top: 36px;
    width: 638px;
}
#resume_view div.item_resume {
    clear: both;
}
#resume_view div.field_resume {
    float: left;
    font-size: 15px;
    margin-left: 2px;
    width: 197px;
}
</style>
</head>
<body  id='bodyA'>
	
	<div id="content"   >
			<div  id='top_label'>
				RESUME
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
	</div>




</body>
</html>

<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery_scrollpane/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery_scrollpane/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo  base_url();   ?>js/jquery_scrollpane/mwheelIntent.js"></script>

<script type="text/javascript" id="sourcecode">
	$(function()
	{
		var win = $(window);
		// Full body scroll
		var isResizing = false;
		win.bind(
			'resize',
			function()
			{
				if (!isResizing) {
					isResizing = true;
					var container = $('#content');
					// Temporarily make the container tiny so it doesn't influence the
					// calculation of the size of the document
					container.css(
						{
							'width': 1,
							'height': 1
						}
					);
					// Now make it the size of the window...
					container.css(
						{
							'width': win.width(),
							'height': win.height()-10
						}
					);
					isResizing = false;
					container.jScrollPane(
						{
							'showArrows': true
						}
					);
				}
			}
		).trigger('resize');

		// Workaround for known Opera issue which breaks demo (see
		// http://jscrollpane.kelvinluck.com/known_issues.html#opera-scrollbar )
		$('body').css('overflow', 'hidden');

		// IE calculates the width incorrectly first time round (it
		// doesn't count the space used by the native scrollbar) so
		// we re-trigger if necessary.
		if ($('#full-page-container').width() != win.width()) {
			win.trigger('resize');
		}
	});
</script>


