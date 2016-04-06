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

<body class="header-fixed <?=$menucode?>">
	<div class="wrapper">
		<!--=== Header v3 ===-->
		<div class="header-v3 header-sticky">
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
							<img id="logo-header" src="<?=$imageurl?>logo.png" alt="Logo">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
						<div class="container">
							<ul class="nav navbar-nav">
								<li>
									<a href="<?=$baseurl?>index.php" class="dropdown-toggle" data-toggle="dropdown">Home</a>
								</li>

								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">회사소개</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu"><a href="<?=$baseurl?>company/summary.php">회사개요</a></li>
										<li class="dropdown-submenu"><a href="<?=$baseurl?>company/ceo.php">대표인사말</a></li>
										<li class="dropdown-submenu"><a href="<?=$baseurl?>company/history.php">연혁</a></li>
										<li class="dropdown-submenu"><a href="<?=$baseurl?>company/org.php">조직도</a></li>
										<li class="dropdown-submenu"><a href="<?=$baseurl?>company/partner.php">협력기관/업체</a></li>
									</ul>
								</li>

								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">사업소개</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu"><a href="<?=$baseurl?>business/biz1.php">새해풍사업</a></li>
										<li class="dropdown-submenu"><a href="<?=$baseurl?>business/biz2.php">풍력발전개요</a></li>
										<li class="dropdown-submenu"><a href="<?=$baseurl?>business/biz3.php">비전</a></li>
									</ul>
								</li>

								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">고객지원</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu"><a href="<?=$baseurl?>support/news.php">뉴스&자료실</a></li>
										<li class="dropdown-submenu"><a href="<?=$baseurl?>support/location.php">오시는길</a></li>
									</ul>
								</li>

								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">온라인문의</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu"><a href="<?=$baseurl?>online/online.php">온라인문의</a></li>
									</ul>
								</li>
							</ul>

						</div><!--/end container-->
					</div><!--/navbar-collapse-->
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v3 ===-->