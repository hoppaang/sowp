<?php
	$menucode = 'support';
	$submenucode = 'location';
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container content-sm">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>

	<!-- subcontent begin -->
	<div class="subcontent row">
		<div class="col-md-9 padding-lclear">
				<div class="map map-box margin-bottom-40">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12920.14980414158!2d126.67341104208349!3d35.946053782133006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3570597634c10ab5%3A0x90c974df65c9417a!2s558+Daehak-ro%2C+Gunsan%2C+Jeollabuk-do!5e0!3m2!1sen!2skr!4v1478001992739" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
		</div>

		<div class="col-md-3">
				<!-- Contacts -->
				<div class="headline"><h2>Contacts</h2></div>
				<ul class="list-unstyled who margin-bottom-30">
					<li><a href="#">전라북도 군산시 대학로 558, 5층 509호(미룡동,산학협력단)</a></li>
					<li><a href="#"><i class="fa fa-envelope"></i>info@sowp.com</a></li>
					<li><a href="#"><i class="fa fa-phone"></i>063.461.5540</a></li>
					<li><a href="http://www.sowp.co.kr/" target="_blank"><i class="fa fa-globe"></i>www.sowp.co.kr</a></li>
				</ul>

				<!-- Business Hours -->
				<div class="headline"><h2>Business Hours</h2></div>
				<ul class="list-unstyled margin-bottom-30">
					<li><strong>월~금요일:</strong> 9am ~ 6pm</li>
					<li><strong>토요일:</strong> 9am ~ 1pm</li>
					<li><strong>일요일/공휴일:</strong> 휴무</li>
				</ul>
			</div><!--/col-md-3-->

	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
