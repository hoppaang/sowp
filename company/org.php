<?php
	$menucode = 'company'; 
	$submenucode = 'org'; 
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container content-sm">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>
	
	<!-- subcontent begin -->
	<div class="subcontent">
		<img src="<?=$imageurl?>company-img3.png" class="margin-auto"/>
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>