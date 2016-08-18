	<!-- footer begin -->
		<div class="footer">
			© Saemangeum offshore wind power Ltd. Corp.
		</div>
		<!-- footer end -->
	</div><!--/wrapper-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="<?=$assetsurl?>plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="<?=$assetsurl?>plugins/back-to-top.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/gmap/gmap.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/jquery.parallax.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/parallax-slider/js/modernizr.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/parallax-slider/js/jquery.cslider.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="<?=$assetsurl?>js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="<?=$assetsurl?>js/app.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>js/plugins/style-switcher.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>js/plugins/owl-carousel.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>js/plugins/parallax-slider.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>js/forms/contact.js"></script>
	<script type="text/javascript" src="<?=$assetsurl?>js/pages/page_contacts.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			ParallaxSlider.initParallaxSlider();
			var owl = $(".owl-clients-v1");
        owl.owlCarousel({
            autoPlay : 4000,
            itemsScaleUp : true,
            items: 5
        });
		});
	</script>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>
