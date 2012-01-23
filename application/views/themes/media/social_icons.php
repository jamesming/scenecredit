<?php if( 1==2 ){?>
<style>

	#social_icon_wrapper{
			margin:20px 0px 30px 0px;
			clear:both;
			height:77px;
			 width:auto;
			
	}
	.social_icons{
		background-image: url("<?php echo base_url()    ?>images/social_icons.png");
		margin:0px 15px 0px 0px;	
		background-repeat: no-repeat;
		height: 69px;
		width: 68px;	
	}
	#social_icon_wrapper .facebook_icon{
    background-position: -30px -22px;
	}
	#social_icon_wrapper .twitter_icon{
    background-position: -117px -22px;
	}
	#social_icon_wrapper .linkedin_icon{
    background-position: -31px -108px;
	}	
	#social_icon_wrapper .blog_icon{
    background-position: -202px -22px;
	}


</style>
<div  id='social_icon_wrapper'     >
	<div  class=' facebook_icon float_left social_icons' >
	</div>
	<div  class=' twitter_icon float_left social_icons' >
	</div>	

	<div  class=' linkedin_icon float_left social_icons' >
	</div>	
	<div  class=' blog_icon float_left social_icons' >
	</div>
				
</div>
<?php } ?>

					
<style>
.social_icons{
margin:20px 5px 30px 0px;	
}

</style>


<div  id='social_icon_wrapper'>

<?php foreach( $website_data['social_icons']  as  $social_icon){?>
	
		<a target='_blank' href='http://www.<?php  echo  $social_icon['domain']  ?>/<?php echo  $social_icon['id']    ?>' rel='social_network_group' ><img  width='48px' class='float_left social_icons' src='<?php echo base_url()    ?>images/web2icons/<?php  echo  $social_icon['social_network']  ?>_48x48.png' /></a>						
		
<?php } ?>

</div>
