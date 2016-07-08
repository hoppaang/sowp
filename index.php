<?php
	$menucode = 'main'; 
	require('common/config.php') ;
	virtual('common/basetag.php');
?>

		<!--=== Slider ===-->
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2><i>전세계가 주목하는 신생에너지 해상풍력</i></h2>
					<p><i>새만금해상풍력주식회사가</i> <br /> <i>대한민국의 해상풍력을 이끌어갑니다.</i></p>
					<div class="da-img"><!-- <img class="img-responsive" src="assets/plugins/parallax-slider/img/1.png" alt=""> --></div>
				</div>
				<div class="da-slide">
					<h2><i>아시아의 허브 & 미래의 중심, 새만금!</i></h2>
					<p><i>새만금해상풍력주식회사가</i> <br /> <i>새만금의 신생에너지를 담당하겠습니다.</i></p>
					<div class="da-img">
						<iframe width="534" height="300" src="https://www.youtube.com/embed/tEI8CZr3JZk" frameborder="0" allowfullscreen></iframe>
						<!-- <iframe width="533" height="300" src="https://www.youtube.com/embed/1sUyescRMuw" frameborder="0" allowfullscreen></iframe> -->
					</div>
				</div>
				<div class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</div>
			</div>
		</div><!--/slider-->
		<!--=== End Slider ===-->

		<!-- news begin -->
		<div class="container content-sm">
			news
		</div>
		<!-- news end -->

		<div class="container content-sm">
		<!-- Owl Clients v1 -->
			<div class="headline"><h2>협력기관/업체</h2></div>
			<div class="owl-clients-v1">
				<a href="<?=$baseurl?>company/partner.php">
					<div class="item"><img src="<?=$assetsurl?>images/img-partner1.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner2.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner3.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner4.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner5.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner6.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner7.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner8.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner9.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner10.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner11.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner12.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner13.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner14.png" alt=""></div>
					<div class="item"><img src="<?=$assetsurl?>images/img-partner15.png" alt=""></div>
				</a>
			</div>
			<!-- End Owl Clients v1 -->
		</div>

	<!---footer include-->
	<?php virtual('common/footer.php');?>
