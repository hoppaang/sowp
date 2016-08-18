<?php
	$menucode = 'online';
	$submenucode = 'online';
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container content-sm">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>

	<!-- subcontent begin -->
	<!--=== Content Part ===-->
	<div class="container">
		<div class="row">
			<div class="col-md-9 padding-lclear">
					<!-- Google Map -->
					<!-- <div id="map" class="map map-box map-box-space margin-bottom-40"></div> -->
					<div class="map map-box margin-bottom-40">
						<iframe src="<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12920.149804396666!2d126.67338958420723!3d35.946053780572946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3570597634c10ab5%3A0x90c974df65c9417a!2s558+Daehak-ro%2C+Gunsan%2C+Jeollabuk-do!5e0!3m2!1sen!2skr!4v1471499492283" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<!-- End Google Map -->

					<form action="contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label>Name <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="NAME" class="form-control">
									</div>
								</div>
							</div>

							<label>Email <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="email" id="EMAIL" class="form-control">
									</div>
								</div>
							</div>

							<label>Message <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="message" id="CONTENT" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u">Send Message</button></p>
						</fieldset>

						<div class="message">
							<i class="rounded-x fa fa-check"></i>
							<p>Your message was successfully sent!</p>
						</div>
					</form>
				</div><!--/col-md-9-->

			<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2>Contacts</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="#">전라북도 군산시 대학로 558, 5층 509호 (우:54150)</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i>info@sowp.com</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>063.461.5541</a></li>
						<li><a href="http://www.sowp.co.kr/" target="_blank"><i class="fa fa-globe"></i>www.sowp.co.kr</a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2>Business Hours</h2></div>
					<ul class="list-unstyled margin-bottom-30">
						<li><strong>월~금요일:</strong> 9am ~ 6pm</li>
						<li><strong>토요일:</strong> 9am ~ 1pm</li>
						<li><strong>일요일/공휴일:</strong> 휴무</li>
					</ul>

					<!-- Why we are? -->
					<!--
<div class="headline"><h2>Why we are?</h2></div>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
						<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
						<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
					</ul>
 -->
				</div><!--/col-md-3-->
		</div><!--/row-->
	</div>
	<!-- subcontent end -->

</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
