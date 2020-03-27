<!DOCTYPE html>
<html lang="ko">
    <head>          
        <title>NINEFIVE ::::: Global Digital Design</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="NINEFIVE" />
        <meta name="keywords" content="" />
        <meta name="description" content="design and developments" />
        <meta name="title" content="NINEFIVE ::::: Global Digital Design" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <meta name="apple-mobile-web-app-title" content="NINEFIVE ::::: Global Digital Design" />
        <meta name="format-detection" content="telephone=no">
        <meta name="robots" content="noodp"/>

        <meta property="og:locale" content="ko_KR" />
        <meta property="og:locale:alternate" content="en_US" />
        <meta property="og:title" content="NINEFIVE - design and developments" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.ninefive.com/" />
        <meta property="og:description" content="design and developments" />
        <meta property="og:site_name" content="NINEFIVE" />
        <meta property="og:image" content="" />
        
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="NINEFIVE - design and developments" />
        <meta name="twitter:url" content="http://www.ninefive.com/" />
        <meta name="twitter:description" content="design and developments" />
        <meta name="twitter:image" content="" />
        
        <link rel="shortcut icon" type="image/x-icon" href="/images/ninefive_favicon.ico">
        <link rel="stylesheet" type="text/css" href="/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/css/work.css" />
        

<!--         <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=YOUR_CLIENT_ID"></script> -->
        <script type="text/javascript" src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
        <script type="text/javascript" src="/js/work.js"></script>
    </head>

<style>

.work_detail .img_wrap .txt .title{ font-size:64px; line-height:70px; }

.work_detail{margin: 0 auto; }
.work_detail > .fDetail .txt { text-align: center; box-sizing: border-box; margin: 0 auto; width: 100%; max-width:100%; }
.work_detail > .img_wrap { position: relative; }
.work_detail > .img_wrap .obj { width: 100%; position: absolute; left: 0; top: 0; }
.work_detail > .img_wrap .obj img { width: 100%; display: block;  padding: 0; margin: 0; }
.work_detail > .img_wrap .txt { position: relative; } 
.work_detail > .img_wrap .txt .f_number_ico{ display:block; margin:0 auto; }
.work_detail > .img_wrap .txt h5{ font-family: 'texgyreadventor_bold';  letter-spacing: -0.4px; font-size: 50px; line-height: 1; font-weight: bold; color: #000; }
.work_detail > .img_wrap .txt p.desc{ font-family: 'NanumBarunGothic', 'Dotum', '돋움'; font-size: 16px; line-height: 26px; margin-top: 23px; padding:0 30px; margin-left: auto; margin-right: auto; box-sizing:border-box; margin-left: auto; margin-right: auto; }
.work_detail > .fDetail > img{width: 100%; display: block; height: auto ; }
.work_detail > .img_wrap .txt .f_number_ico{ margin-bottom:16px; }


.work_detail .img_wrap .mobile_img{ display: none; }
.work_detail .img_wrap .web_img{ display: block; }

.work_detail > .img_wrap.intro .txt{ text-align: left; }

.work_detail > .f_concept{ margin-bottom: 6.25vw; }
.work_detail > .f_concept .txt{ padding:4.427vw 0 6.51vw; }
.work_detail > .f_concept .txt p.desc{ max-width: 1180px; }
.work_detail > .f_concept .ico_box{ width:76.0416vw; max-width:100%; margin:0 auto; position:relative; }
.work_detail > .f_concept .ico_box img{ width:20.83vw; }
.work_detail > .f_concept .ico_box img:nth-of-type(1){ position:relative; }
.work_detail > .f_concept .ico_box img:nth-of-type(2){ position:absolute; left:50%; margin-left:-10.415vw; }
.work_detail > .f_concept .ico_box img:nth-of-type(3){ position:absolute; right:0; }


.work_detail > .f_ux{ background:#283b5f; }
.work_detail > .f_ux .txt{ padding:4.427vw 0 32.69vw; color:#fff; z-index:1; }
.work_detail > .f_ux .txt h5{ color:#fff; }
.work_detail > .f_ux .txt p.desc{ color: rgba(255, 255, 255, 0.7); max-width: 1010px; }
.work_detail > .f_ux .obj{ position:absolute; left:0; bottom:0; }
.work_detail > .f_ux .obj img{ position:absolute; left:0; bottom:0; }

.work_detail > .f_quiz { background: url('/images/work/2018_air_purifier_ox_quiz_bg.jpg') repeat-x center top; background-size: auto 100%; }
.work_detail > .f_quiz .txt{ color:#fff; padding:5.2vw 0 7.21vw 0; }
.work_detail > .f_quiz .txt h5{ color:#fff; font-size:40px; letter-spacing:-1px; font-weight:bold; }
.work_detail > .f_quiz .txt h5 span{ font-family:'NanumBarunGothicBold'; }
.work_detail > .f_quiz .txt p.desc { margin-top: 18px; color: rgba(255, 255, 255, 0.88); max-width: 1230px; }
.work_detail > .f_quiz .txt .ico_wrap{ width: 100%; position:relative; text-align: center; margin-top:6.25vw; }
.work_detail > .f_quiz .txt .ico_wrap img{ width:22.5vw; display: inline-block; }
.work_detail > .f_quiz .txt .ico_wrap img:nth-of-type(1){ position:relative; margin-right: 18.02vw; }

.work_detail > .f_buying_tips .txt{ padding:5.2vw 0 53.125vw; z-index: 1; }
.work_detail > .f_buying_tips .txt h5{ font-size:40px; letter-spacing:-1px; font-family:'NanumBarunGothicBold'; color:#4370d6; }
.work_detail > .f_buying_tips .txt p.desc { margin-top: 18px; color: rgba(61, 61, 61, 0.7); max-width: 1080px; }
.work_detail > .f_buying_tips .txt .f_number_ico{ margin-bottom: 30px; }
.work_detail > .f_buying_tips .obj{ left: 0; bottom: 0; top: auto; }


.work_detail > .f_curation{ background:#587ab2; }
.work_detail > .f_curation .txt{ color:#fff; padding:5.2vw 0 35.26vw; }
.work_detail > .f_curation .txt p.desc{ color: rgba(255, 255, 255, 0.8); max-width: 1310px; }
.work_detail > .f_curation .txt .f_number_ico{ margin-bottom: 30px; }
.work_detail > .f_curation .txt h5{ color:#fff; font-size:40px; letter-spacing:-1px; font-family:'NanumBarunGothicBold'; }
.work_detail > .f_curation .obj{ top:auto; bottom:0; }


.feature{ position: relative;}


@media (max-width: 1920px){

}

@media (max-width: 1210px) {

}

@media (max-width: 1100px) {

.work_detail > .f_buying_tips .txt p.desc br { display: none; }

}

@media (max-width: 1080px) {

.work_detail > .f_ux .txt p.desc br { display: none; }

 
}

@media (max-width: 954px) {

}


@media (max-width: 800px) {
    .work_detail .img_wrap { overflow: hidden; }

    .work_detail .img_wrap .mobile_img{ display: block; }
    .work_detail .img_wrap .web_img{ display: none; }


    .work_detail > .f_concept{ margin-bottom:11.25vw; }
    .work_detail > .f_concept .txt{ padding:10vw 0 9.25vw; }
    .work_detail > .f_concept .ico_box{ width: 100%; padding: 0 6vw; }
    .work_detail > .f_concept .ico_box img{ width: 27.5vw; }
    .work_detail > .f_concept .ico_box img:nth-of-type(2){ margin-left:-13.75vw; }
    .work_detail > .f_concept .ico_box img:nth-of-type(3){ right: 6vw; }

    .work_detail > .f_ux .txt{ padding: 10vw 0 205.75vw;  }

    .work_detail > .f_quiz { background: url('/images/work/2018_air_purifier_ox_quiz_bg_mobile.jpg') repeat-x center top; background-size: auto 100%; }
    .work_detail > .f_quiz .txt{ padding: 11.25vw 0 69.5vw 0; }
    .work_detail > .f_quiz .txt p.desc { max-width: 720px; margin-top: 2.875vw; }
    .work_detail > .f_quiz .txt .ico_wrap{ position: absolute; top: 50%; left: 0; margin-top: -1.5vw; }
    .work_detail > .f_quiz .txt .ico_wrap img{ width: 38.75vw; }
    .work_detail > .f_quiz .txt .ico_wrap img:nth-of-type(1){ margin-right: 10vw; }

    
    .work_detail > .f_buying_tips .txt{ padding: 11.25vw 0 69.875vw; }
    .work_detail > .f_buying_tips .txt .f_number_ico { margin-bottom: 20px; }
    .work_detail > .f_buying_tips .txt p.desc { margin-top: 2.875vw; }


    .work_detail > .f_curation .txt{ padding: 11.25vw 0 69.875vw; }
    .work_detail > .f_curation .txt .f_number_ico{ margin-bottom: 20px; }


}


@media (max-width: 480px){

    .work_detail > .img_wrap .txt h5 { font-size: 28px; }
    .work_detail > .img_wrap .txt p.desc { font-size: 12px; line-height: 22px; margin-top: 22px; }
    .work_detail > .img_wrap .txt .f_number_ico { width: 28px; }

}


@media (max-width: 410px){

    .work_detail > .f_quiz .txt .ico_wrap { margin-top: 8.5vw; }

}

@media (max-width: 400px){

    .work_detail > .img_wrap .txt p.desc { padding: 0 20px; }

}


@media (max-width: 320px){


    .work_detail > .f_concept{ margin-bottom: 36px; }
    .work_detail > .f_concept .txt{ padding: 32px 0 30px; }
    .work_detail > .f_concept .ico_box{ padding: 0 19px; }
    .work_detail > .f_concept .ico_box img{ width: 88px; }
    .work_detail > .f_concept .ico_box img:nth-of-type(2){ margin-left:-44px; }
    .work_detail > .f_concept .ico_box img:nth-of-type(3){ right: 19px; }

    .work_detail > .f_ux .txt{ padding: 32px 0 658px;  }

    .work_detail > .f_quiz .txt{ padding: 36px 0 222px 0; }
    .work_detail > .f_quiz .txt p.desc { margin-top: 9px; }
    .work_detail > .f_quiz .txt .ico_wrap{  margin-top: 27px; }
    .work_detail > .f_quiz .txt .ico_wrap img{ width: 124px; }
    .work_detail > .f_quiz .txt .ico_wrap img:nth-of-type(1){ margin-right: 32px; }

    
    .work_detail > .f_buying_tips .txt{ padding: 36px 0 224px; }
    .work_detail > .f_buying_tips .txt p.desc { margin-top: 9px; }


    .work_detail > .f_curation .txt{ padding: 36px 0 224px; }


}

</style>

    <body>
<!--container Start-->
		<div class="container">

			<div class="contents work_detail">

			<div class="feature intro">
				<div class="txt">
					<h3 class="title">Samsung Air Cleaner Buying Guide</h3>
					<p class="desc">미세먼지와 황사 등의 잦은 대기오염으로 공기청정기에 대한 관심이 늘어나고 있습니다. 그러나 표준사용면적, 집진 효율 등의 전문 용어와 다양한 기능들로 집안 환경에 <span style="white-space:nowrap;">적합한 제품을</span> 찾기가 어려운 상황입니다. 나인파이브는 이러한 소비자의 선택을 돕기 위해 삼성 공기청정기 구매가이드 페이지를 제작했습니다. ‘청량한 하늘, <span style="white-space:nowrap;">라이프스타일’을 모티브로</span> 제품의 특성이 잘 드러날 수 있도록 디자인하였습니다. 또한 소비자의 흥미를 유발하고 몰입도를 높이기 위해, 공기 상태를 체크할 수 있는 자가 진단 테스트와 소비자에게 가장 적합한 제품을 추천해주는 큐레이션으로 구성하였습니다.</p>
				</div>
				<div class="img_wrap">
					
                    <div class="web_img"><img src="/images/work/2018_air_purifier_intro.jpg" alt=""/></div>
                    <div class="mobile_img"><img src="/images/work/2018_air_purifier_intro_mobile.jpg" alt=""/></div>
				</div>
			</div>
			
			<div class="img_wrap f_concept fDetail">
				<div class="txt">
					<h5>CONCEPT</h5>
					<p class="desc">구매가이드 디자인은 사용자에게 가볍고 자유로우며 편안한 느낌을 전달하기 위해, 쾌적한 하늘을 표현한 블루 톤의 컬러를 사용하였습니다. <span style="white-space:nowrap;">OX퀴즈와 큐레이션 영역은 일상생활에서 </span>경험할 수 있는 이미지를 구성하여, 사용자가 질문을 이해하기 쉽도록 제작하였습니다. <span style="white-space:nowrap;">구매 팁 영역은 공기청정기 제품 구매 시 확인해야 할 </span>정보로 구성하였습니다. 또한 아이콘과 인포그래픽을 사용하여 어려운 정보를 가볍고 쉽게 이해할 수 있도록 하였습니다.</p>
				</div>
				<div class="ico_box">
					<img src="/images/work/2018_air_purifier_concept_ico01.png" alt="" />
					<img src="/images/work/2018_air_purifier_concept_ico02.png" alt="" />
					<img src="/images/work/2018_air_purifier_concept_ico03.png" alt="" />
				</div> 
			</div> 

			<div class="img_wrap f_ux fDetail fPlan">
				<div class="txt">
					<h5>UX PLANNING</h5>
					<p class="desc">공기청정기 구매가이드는 사용자의 입장에서 공기청정기와 관련된 정보를 쉽게 이해할 수 있도록 하고 공기청정기 제품을 구매하려는 사람 뿐만 아니라 기존에 사용하고 있거나 관심이 없는 사람까지 모두 아우를 수 있는 시나리오로 제작하였습니다. <br/>쉽게 우리집의 공기질을 체크해보고, 공기청정기를 선택하기 위한 유용한 정보를 확인한 후 사용자 니즈와 실생활 환경을 고려하여 <span style="white-space:nowrap;">적합한 공기청정기를</span> 제안하는 맞춤형 솔루션을 제공합니다.</p>
				</div>
				<div class="obj">
                    <div class="web_img"><img src="/images/work/2018_air_purifier_ux_planning.jpg" alt=""/></div>
                    <div class="mobile_img"><img src="/images/work/2018_air_purifier_ux_planning_mobile.jpg" alt=""/></div>

				</div>
			</div>

			<div class="img_wrap f_quiz fDetail fPlan">
				<div class="txt">
					<img src="/images/work/2018_air_purifier_feature_number_ico01.png" alt="" class="f_number_ico"/>
					<h5>OX <span>퀴즈</span></h5>
					<p class="desc">우리집의 공기질 상태를 손쉽게 체크할 수 있는 영역으로 OX 퀴즈를 통해 자가 점검이라는 무거울 수 있는 내용을 쉽고 간편하게 확인할 수 있도록 구성하였습니다. <span style="white-space:nowrap;">집안 환경 및 생활 습관 등에 대한</span> 질문을 통해 사용자의 현재 집안 공기청정 상태를 <span style="white-space:nowrap;">확인 할 수 있습니다.</span></p>
					<div class="ico_wrap">
						<img src="/images/work/2018_air_purifier_ox_quiz_ico_o.png" alt="" />
						<img src="/images/work/2018_air_purifier_ox_quiz_ico_x.png" alt="" />
					</div>
				</div>
			</div> 

			<div class="img_wrap f_buying_tips fDetail fPlan">			
				<div class="txt">
					<img src="/images/work/2018_air_purifier_feature_number_ico02.png" alt="" class="f_number_ico"/>
					<h5>구매 팁</h5>
					<p class="desc">구매 팁 영역을 통해 공기청정기 제품 구매 시 유익한 정보를 제공합니다. 팁은 총 5가지로 구성되어 있으며, 표지를 통해 각 팁의 상세 정보를 <span style="white-space:nowrap;">확인할 수 있습니다.</span><br>
					내용은 라이프스타일과 인포그래픽으로 표현하여, 쉽게 <span style="white-space:nowrap;">이해할 수 있도록 했습니다.</span></p>
				</div>
				<div class="obj">
                    <div class="web_img"><img src="/images/work/2018_air_purifier_buying_tips_pc.jpg" alt=""/></div>
                    <div class="mobile_img"><img src="/images/work/2018_air_purifier_buying_tips_mobile.jpg" alt=""/></div>
				</div>
			</div>

			<div class="img_wrap f_curation fDetail fPlan">
				<div class="obj">
                    <div class="web_img"><img src="/images/work/2018_air_purifier_product_curation.jpg" alt=""/></div>
                    <div class="mobile_img"><img src="/images/work/2018_air_purifier_product_curation_mobile.jpg" alt=""/></div>
				</div>
				<div class="txt">
					<img src="/images/work/2018_air_purifier_feature_number_ico03.png" alt="" class="f_number_ico"/>
					<h5>제품 큐레이션</span></h5>
					<p class="desc">제품 큐레이션은 사용자에게 가장 적합한 공기청정기 제품을 추천해주는 영역입니다. 사용자가 원하는 기능과 집안 환경 등을 선택하면, 선택과 가장 적합한 제품을 제안 및 간략한 정보를 보여줍니다. 또한 각 제품의 정보를 알아보거나 구매를 원할 때 편리하게 이동할 수 있도록 구성하였습니다.</p>
				</div>
			</div> 

				<div class="project_info">
					<div class="img_wrap">
						<img src="/images/work/2018_Samsung_Air_Cleaner_Buying_Guide_1080.jpg" alt=""/>
					</div>
					<div class="info_wrap">
						<div class="valign">
							<div class="middle">
								<ul>
									<li>
										<span class="title">CLIENT</span>
										Pengtai
									</li>
									<li>
										<span class="title">CREDIT</span>
										Creative Director : Younghee Jo<br/>
										Producer : Moonsoo Kim<br/>
										UX Planner : Juhyun In<br/>
										Designer : Mihee Lee<br/>
										Developer: Eunseop Shin, Sujeong Im
									</li>
								   <!-- <li class="app_download"> 
										<div class="android"><a href="#">ANDROID DOWNLOAD</a></div>
										<div class="ios"><a href="#">iOS DOWNLOAD</a></div>
									</li>-->
									<!-- launch the site 버튼 사용 시, 주석 제거. -->
									<li class="launch_site">
										<a href="http://www.samsung.com/sec/air-purifier-buying-guide/" target="_blank">LAUNCH THE SITE</a>
									</li>
								</ul>						
							</div>
						</div>
					</div>				
				</div>			
			</div>
		</div>
    </body>
</html>