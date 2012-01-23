<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php     	$this->load->view('header/common_css.php');  ?>
<head>
<style type="text/css">
body {
		font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;
    width: 600px;
    background:#FFFFFF;
}
#top_label{
		display:none;
    font-weight: bold;
    font-size: 21px;
    padding-bottom: 26px;
    padding-left: 30px;
}
#resume_view {
	
    padding: 0px 0 50px 30px;
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
<body>
	
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



</body>
</html>