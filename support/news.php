<?php
	$menucode = 'support'; 
	$submenucode = 'news'; 
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container content-sm">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>
	
	<!-- subcontent begin -->
	<div class="subcontent">
		news
		<iframe frameborder=0 width=100% height=1000 scrolling=no src="../assets/board/bbs/board.php?bo_table=news" />
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
