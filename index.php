<?php
	$menucode = 'main';
	require('common/config.php') ;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="ko" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="ko" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="ko"> <!--<![endif]-->
<head>
	<title>새만금해상풍력</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?=$baseurl?>favicon.ico">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?=$assetsurl?>plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$assetsurl?>css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="<?=$assetsurl?>css/headers/header-v3.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?=$assetsurl?>plugins/animate.css">
	<link rel="stylesheet" href="<?=$assetsurl?>plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?=$assetsurl?>plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=$assetsurl?>plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="<?=$assetsurl?>plugins/owl-carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?=$assetsurl?>plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="<?=$assetsurl?>plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="<?=$assetsurl?>css/pages/page_contact.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?=$assetsurl?>css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="<?=$assetsurl?>css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?=$assetsurl?>css/custom.css">
</head>

<body class="<?=$menucode?>">
	<div class="wrapper">
		<!--=== Header v3 ===-->
		<div class="header-v3" style="border-bottom:none !important">
			<!-- Navbar -->
			<div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="fa fa-bars"></span>
						</button>
						<a class="navbar-brand" href="<?=$baseurl?>index.php">
							<img id="logo-wing" src="<?=$imageurl?>logo-wing.png" alt="Logo">
							<img id="logo-header" src="<?=$imageurl?>logo.png" alt="Logo">
						</a>
					</div>
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v3 ===-->

		<img class="oopsImg" src="assets/images/oops.png">

	<!---footer include-->
	<?php virtual('common/footer.php');?>
