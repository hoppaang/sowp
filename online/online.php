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

				</div><!--/col-md-3-->
		</div><!--/row-->
	</div>
	<!-- subcontent end -->

</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
