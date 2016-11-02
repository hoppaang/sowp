<?php
	$menucode = 'company';
	$submenucode = 'partner';
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container content-sm">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>

	<!-- subcontent begin -->
	<div class="subcontent row">
		<div class="col-md-4">
			<div class="headline"><a href="<?=$baseurl?>company/partner.php"><h2>참여기업</h2></a></div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner1.png"/>
				<p><i class="fa fa-phone"></i> 1588.3322</p>
				<a href="http://www.kdbdw.com" target="_blank">www.kdbdw.com</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner2.png"/>
				<p><i class="fa fa-phone"></i> 061.345.0114</p>
				<a href="http://www.kps.co.kr/" target="_blank">www.kps.co.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner4.png"/>
				<p><i class="fa fa-phone"></i> 063.467.4836</p>
				<a href="#" target="_blank">#</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner6.png"/>
				<p><i class="fa fa-phone"></i> 031.704.1700 </p>
				<a href="http://www.hanildevelop.co.kr" target="_blank">www.hanildevelop.co.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner16.png"/>
				<p><i class="fa fa-phone"></i> 1.817.281.0040 (U.S.A)</p>
				<a href="http://orangeenergycorp.com/" target="_blank">orangeenergycorp.com</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="headline"><a href="<?=$baseurl?>company/partner.php"><h2>협력기관</h2></a></div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner15.png"/>
				<p><i class="fa fa-phone"></i> 063.469.7553~74</p>
				<a href="http://hp.kunsan.ac.kr/sanhak/index.kunsan" target="_blank">hp.kunsan.ac.kr/sanhak/index.kunsan</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner13.png"/>
				<p><i class="fa fa-phone"></i> 063.219.2114</p>
				<a href="http://www.jbtp.or.kr" target="_blank">www.jbtp.or.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner8.png"/>
				<p><i class="fa fa-phone"></i> 02.553.6426</p>
				<a href="http://www.kweia.or.kr" target="_blank">www.kweia.or.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner14.png"/>
				<p><i class="fa fa-phone"></i> 063.219.3500</p>
				<a href="http://www.kctech.re.kr" target="_blank">kctech.re.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner9.png"/>
				<p><i class="fa fa-phone"></i> </p>
				<!-- <a href="" target="_blank"></a> -->
			</div>
		</div>
		<div class="col-md-4">
			<div class="headline"><a href="<?=$baseurl?>company/partner.php"><h2>관련기관</h2></a></div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner10.png"/>
				<p><i class="fa fa-phone"></i> 1577.0900</p>
				<a href="http://www.motie.go.kr" target="_blank">www.motie.go.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner17.png"/>
				<p><i class="fa fa-phone"></i> 110</p>
				<a href="http://www.mof.go.kr/" target="_blank">www.mof.go.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner12.png"/>
				<p><i class="fa fa-phone"></i> 044.415.1000</p>
				<a href="http://www.saemangeum.go.kr" target="_blank">www.saemangeum.go.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner11.png"/>
				<p><i class="fa fa-phone"></i> 063.280.2114</p>
				<a href="http://www.jeonbuk.go.kr" target="_blank">www.jeonbuk.go.kr</a>
			</div>
			<div class="partnet-item">
				<img src="<?=$imageurl?>img-partner18.png"/>
				<p><i class="fa fa-phone"></i> 063.454.4000</p>
				<a href="http://www.gunsan.go.kr/" target="_blank">www.gunsan.go.kr</a>
			</div>
		</div>
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
