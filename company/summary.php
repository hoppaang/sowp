<?php
	$menucode = 'company'; 
	$submenucode = 'summary'; 
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container content-sm">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>
	
	<!-- subcontent begin -->
	<div class="subcontent">
		<img src="<?=$imageurl?>company-img1.png"/>
		<p class="margin-t10 padding-all5">정부의 저탄소 녹색성장 정책에 부응하여 풍력산업 관련 사업체의 상호 유대강화와 협력, 정보교류 및 문제점 도출 등을 통하여 풍력 산업의 발전을 도모하고 풍력에너지의 적극적인 개발로
국산 에너지의 자립도 증진 및 관련 제조 산업의 육성과 환경보전 등 정부의 신재생에너지 확보, 탄소 배출 저감정책의 실현, 수출산업으로 육성 및 고용 증대로 국민경제 발전에 기여하기
위한 목적으로 설립</p>
		<img src="<?=$imageurl?>company-img2.png" class="margin-auto"/>
		<div class="bizsummary margin-t30">
			<div class="biz1">
				<label>풍부한 사업수행경험</label>
				다양한 해양에너지  분야에서의 기술개발 및 컨설팅을 바탕으로 성공적인 사업수행을 위한 Know-How 보유
			</div>
			<div class="biz2">
				<label>우수인력 다수 확보</label>
				대규모 시스템 구축사업 및 유시보수 등에서의 경험이 국내외 풍력분야 20년 이상 전문가 구성
			</div>
			<div class="biz3 margin-t10">
				<label>전문업체 참여</label>
				분야별 전문업체가 참여한 협업체계구성으로 시너지 효과 창출 극대화
			</div>
			<div class="biz4 margin-t10">
				<label>최적화된 사업관리</label>
				다양한 공공프로젝트와 전자정부지원사업 수행을 통해  검증된 품질관리/사업관리
			</div>
		</div>
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
