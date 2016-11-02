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
				<p>1588-3322</p>
				<a href="http://www.kdbdw.com" target="_blank">www.kdbdw.com</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="headline"><a href="<?=$baseurl?>company/partner.php"><h2>협력기관</h2></a></div>
		</div>
		<div class="col-md-4">
			<div class="headline"><a href="<?=$baseurl?>company/partner.php"><h2>관련기관</h2></a></div>
		</div>
	</div>
	<div class="subcontent">
		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner1.png"/>
			<label>KDB대우증권</label>
			<p>글로벌 금융투자 은행</p>
			<a href="http://www.kdbdw.com" target="_blank">www.kdbdw.com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner2.png"/>
			<label>한전KPS</label>
			<p>초인류 전력설비 정비전문회사</p>
			<a href="http://www.kps.co.kr/" target="_blank">www.kps.co.kr</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner3.png"/>
			<label>현대유엔아이</label>
			<p>IT 서비스 전문업체,물류컨설팅,RFID 솔루션</p>
			<a href="http://www.hyundai-uni.com" target="_blank">www.hyundai-uni.com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner4.png"/>
			<label>SMDE</label>
			<p>새만금 해양복합단지 시행 특수목적법인</p>
			<a href="#" target="_blank">#</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner5.png"/>
			<label>(주)통해</label>
			<p>전기공사,정보통신공사,소방공사,신재생에너지</p>
			<a href="http://www.thgec.com/" target="_blank">www.thgec.com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner6.png"/>
			<label>한일개발</label>
			<p>건설 전문업체, 건축, 토목, 조경 사업 등</p>
			<a href="http://www.hanildevelop.co.kr" target="_blank">www.hanildevelop.co.kr</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner7.png"/>
			<label>스키너스</label>
			<p>건물 및 토목엔지니어링 서비스업</p>
			<!-- <a href="" target="_blank"></a> -->
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner8.png"/>
			<label>한국풍력산업협회</label>
			<p>한국풍력기술개발, 발전현황 및 통계 제공</p>
			<a href="http://www.kweia.or.kr" target="_blank">www.kweia.or.kr</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner9.png"/>
			<label>새만금조선해양레저협회</label>
			<p>해양레저 클러스터</p>
			<!-- <a href="" target="_blank"></a> -->
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner10.png"/>
			<label>산업통상자원부</label>
			<p>무역,산업,기술,에너지 등 정책/동향 안내</p>
			<a href="http://www.motie.go.kr" target="_blank">www.motie.go.kr</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner11.png"/>
			<label>전라북도청</label>
			<p>전라북도청 도정정보, 여권발급, 행정민원 등</p>
			<a href="http://www.jeonbuk.go.kr" target="_blank">www.jeonbuk.go.kr</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner12.png"/>
			<label>새만금개발청</label>
			<p>새만금사업 총괄 국가기관</p>
			<a href="http://www.saemangeum.go.kr" target="_blank">www.saemangeum.go.kr</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner13.png"/>
			<label>전북테크노파크</label>
			<p>지식기반산업 창업지원, 사업안내</p>
			<a href="http://www.jbtp.or.kr" target="_blank">www.jbtp.or.kr</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner14.png"/>
			<label>한국탄소융합기술원</label>
			<p>탄소복합재/나노튜브분야 등 연구</p>
			<a href="http://wwwkctech.re.kr" target="_blank">kctech.re.kr</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner15.png"/>
			<label>군산대학교산학협력단</label>
			<p>사업체 및 유관기관과 공동연구 기관</p>
			<a href="http://hp.kunsan.ac.kr/sanhak/index.kunsan" target="_blank">hp.kunsan.ac.kr/sanhak/index.kunsan</a>
		</div>
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
