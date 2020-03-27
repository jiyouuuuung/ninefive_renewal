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
	.pc_only{display:block;}
	.mo_only{display:none;}
	.container .work_detail .feature .txt .desc{padding-right: 10px; color:#717171}
	.work.detail #slider1_container img { height: auto !important; }
	.feature .mobile { display: none !important; }
    .feature { position: relative; }
	.work_detail.en .feature .txt .desc, .work_detail.en .project_info .info_wrap .txt .desc {margin-top: 38px; }
	.feature .de_txt_inner { width: 100%; height: 100%; position: relative; }
	.feature .de_txt_h {font-family: 'texgyreadventor_bold'; font-size: 25px; color: #01ec3f;}
    .feature .de_txt_t {font-family: 'texgyreadventor_bold';font-size: 50px;line-height: 1;width: 100%;/* padding: 90px 30px 0; */box-sizing: border-box;padding: 1.2vh 30px 0;word-spacing: -0.05em;}
    .feature .de_txt_d {font-family: 'NanumBarunGothic', 'Dotum', '돋움';font-size: 18.5px;line-height: 33px;margin: 22px auto -9px auto;letter-spacing: 0.2px;}
	.feature .de_txt_ico { border-radius: 50%; width: 75px; height: 75px; background: #2747c3; color: #fff; font-family: 'texgyreadventor_bold'; line-height: 70px; font-size: 30px; position: absolute; left: 0; top: 0; text-align: center; margin-top: 7px; }
	.feature img{ display: block; width: 100%; } 
	.feature .de_txt{ text-align: center; }
	.black_bg {background: #000;}
	.grey_bg {background: #282828;}
	img.pc_img {display: block;}
	img.mo_img {display: none;}

	.feature.s01 {background: #202020;position: relative;}
    .feature.s01 .de_txt {color: #fff;width: 100%;position: absolute;/* opacity: 0.3; */z-index: 10;/* padding-top: 5.416vw; */bottom: 49.9vw;}
    .feature.s01 .de_txt_d { max-width: 1129px; padding: 1px 30px 30px; box-sizing: border-box; color: #c5c5c5; letter-spacing: 0;}

    .feature.s02 {background: #000;overflow: hidden;padding-bottom: 133px;}
	.feature.s02 img {/* position: absolute; */position: relative;bottom: 0;left: 0;/* margin-left: -5.31vw; */}
    .feature.s02 .de_txt {color: #fff;position: relative;width: 100%;/* padding-bottom: 23.28vw; */padding-top: 76px;z-index: 1;padding-bottom: 152px;}
    .feature.s02 .de_txt_d {max-width: 1225px;padding: 20px 30px 2px;box-sizing: border-box;letter-spacing: -0.4px;color: #5c5c5c;}

    .feature.s03 { background: #000; overflow: hidden;}
	.feature.s03 img {/* position: absolute; */bottom: 0;left: 0;}
    .feature.s03 .de_txt { color: #fff; position: relative; width: 100%; min-height: 43.28vw; padding-top: 4.69vw; padding-bottom: 27.34vw; }
	.feature.s03 .de_txt_t {padding-top: 10px;}
    .feature.s03 .de_txt_d { max-width: 1134px; padding: 0 30px; box-sizing: border-box; color: #c5c5c5; letter-spacing: 0.1px;}


	.info_wrap .valign .middle li .credit_wrap {display: table;}
	.info_wrap .valign .middle li .credit_wrap > div {display: table-cell;}

    @media (max-width: 1920px) {


	.feature .de_txt{padding: 0 30px;}
	.feature.s01 img {position: relative;left: 50%;/* width: 1920px !important; */transform: translateX(-50%);}
    .feature.s02 .de_txt {/* padding-bottom: 447px; */}
	.feature.s02 img {left: 50%;/* width: 1920px; */transform: translateX(-50%);/* margin-left: -102px; */margin-left: 0px;}
	
	}

    @media (max-width: 1250px) {

    .feature.s02 .de_txt {/* padding-bottom: 36.94vw; */}
	.feature.s02 img {/* width: 153.6% !important; */width: 100%;/* margin-left: -8.16vw; */}

	}

	@media (max-width: 1184px) {

	}

	@media (max-width: 1040px) {

	.feature.s01 img {/* width: 187.5% !important; */}
	.feature.s01 .de_txt {bottom: 48.9vw;}
	
	}

    @media (max-width: 800px) {
	.feature.s01 .de_txt {top:0; bottom: auto;}
	.feature .de_txt_t {font-size: 40px;padding-top: 8.4vh;padding-top: 6.7vw;position: absolute;top: 0; bottom: auto;padding-right: 85px;}
	.pc_only{display:none;}
	.mo_only{display:block;}
	.feature.s02 {padding-bottom:106px;}
	.feature.s02 .de_txt {padding-top:72px;position: relative;padding-bottom: 95px;}
	.feature.s02 .de_txt .de_txt_t{/* bottom:30vw; */bottom: unset;position: relative;padding: 0;}
	.feature .de_txt_d {/**/font-size: 14.6px;line-height: 26px;}
	.work_detail .project_info .info_wrap ul li:nth-child(2) {padding-top:0px;}
	.container .work_detail .feature .txt .desc{padding-right: 0px;}
	img.pc_img {display: none;}
	img.mo_img {display: block;}
	.feature.s06 { background: #000; }
	}


    @media (max-width: 480px) {

	.feature .de_txt_h { font-size: 20px; }
	.feature .de_txt_t { font-size: 28px; }
	.feature .de_txt_d { font-size: 12px; line-height: 22px; margin-top: 22px; }

    .feature .de_txt_t {/* padding: 18.07vw 0px 0; */}

    .feature.s01 .de_txt_d { padding: 0;}

    .feature.s02 .de_txt {/* padding-bottom: 26.94vw; */}
    .feature.s02 .de_txt_d {padding: 0; }

    .feature.s03 { padding-top: 18.07vw;}
	.feature.s03 .de_txt_t {padding-top: 2.08vw;}
    .feature.s03 .de_txt_d {padding: 0;}


    }

	@media (max-width: 320px) { 
	
    .feature .de_txt_t {/* padding: 58px 0px 0; */}

    .feature.s02 .de_txt {/* padding-bottom: 86px; */}
	.feature.s02 img { margin-left: -26px; }

    .feature.s03 { padding-top: 58px;}
    .feature.s03 .de_txt { padding-bottom: 87px; }
	.feature.s03 .de_txt_t {padding-top: 7px;}

	}


    </style>

    <body>
<!--container Start-->
	<div class="container">

            <!--Contents Area Start-->
            <div class="contents work_detail">
		
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">TOMORROW X TOGETHER Teaser Campaign</h3>       
					<p class="desc">나인파이브는 빅히트 엔터테인먼트의 신인 그룹 투모로우바이투게더(TOMORROW X TOGETHER)의 데뷔를 효과적으로 홍보하기 위해 티저 캠페인을 진행하였습니다. '서로 다른 너와 내가 하나의 꿈으로 모여 함께 내일을 만들어간다'라는 키메시지를, 두개의 원형이 만나는 컨셉으로 진행하였으며, 이 원형이 심볼이 되고, 아카이브 페이지의 컨텐츠 썸네일로 연결됩니다. 다양한 이스터 에그 요소를 활용하여 많은 이들의 궁금증과 호기심을 자극하였으며, Meta Data와 모스부호 사운드는 SNS로 퍼져 많은 관심과 호응을 이끌어내었습니다. 이와 함께 실시간 카운트다운을 통해 신인 그룹의 등장을 암시하였습니다. 연준을 시작으로 수빈, 휴닝카이, 태현, 범규까지 순차적으로 멤버가 공개될 때마다, 전 세계 실시간트렌드와 주요 포털 사이트 실시간 검색어를 장식하는 등 뜨거운 반응 속에 투모로우바이투게더의 데뷔를 알릴 수 있었습니다.</p>
				</div>
			</div>
            
			<div class="feature s00">
				<img src="/images/work/2019_big_hit_txt_teaser_detail01.jpg" class="pc_img" alt="" />
				<img src="/images/work/2019_big_hit_txt_teaser_detail01_m.jpg" class="mo_img" alt="" />
			</div>

				<div class="feature s01">					
					<img src="/images/work/2019_big_hit_txt_teaser_detail02.jpg" class="pc_img" alt="" />
					<img src="/images/work/2019_big_hit_txt_teaser_detail02_m.jpg" class="mo_img" alt="" />
					<div class="de_txt">
						<div class="de_txt_t">Storyboard</div>
					</div>
				</div>

				<div class="movie pc_only" id="movie">
					<div class="movie_wrap">
						<a href="#" class="btn_vimeo_play"></a>
						<iframe id="vimeo_player" src="https://player.vimeo.com/video/324117161?color=65d50c&title=0&byline=0&portrait=0&quality=1080p" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>

				<div class="feature s02">
					<div class="de_txt">
						<div class="de_txt_t">Circle and Minimalism</div>
							<div class="de_txt_d">티저 사이트의 기대감, 신비로움을 증폭시키기 위해 미니멀한 스타일로 전체 스타일을 정리하였습니다. 투모로우바이투게더 티저 사이트의 경우에는 메시지를 명확히 전달하는 것이 목적이므로, 개념을 설명하기 용이한 원형 형태를 모티브로 사용하고, 모든 요소에 원형 형태로 미니멀한 스타일 하에서 적용하였습니다.</div>
					</div>
						<img src="/images/work/2019_big_hit_txt_teaser_detail03.jpg" class="pc_img" alt="" />
						<img src="/images/work/2019_big_hit_txt_teaser_detail03_m.jpg" class="mo_img" alt="" />
				</div>

				<div class="feature s03">
					<img src="/images/work/2019_big_hit_txt_teaser_detail04.jpg" class="pc_img" alt="" />
					<img src="/images/work/2019_big_hit_txt_teaser_detail04_m.jpg" class="mo_img" alt="" />
				</div>

				<div class="movie mo_only" id="movie">
					<div class="movie_wrap">
						<a href="#" class="btn_vimeo_play"></a>
						<iframe id="vimeo_player" src="https://player.vimeo.com/video/324117161?color=65d50c&title=0&byline=0&portrait=0&quality=1080p" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>

			<div class="project_info">
				<div class="img_wrap">
					<img src="/images/work/2019_big_hit_txt_teaser_detail05.jpg" alt=""/>
				</div>
				<div class="info_wrap">
					<div class="valign">
						<div class="middle">
							<ul>
								<li class="pc_only">
									<span class="title">Client</span>
									<div class="credit_wrap">
										<div class="credit_name"><span style="white-space: nowrap;">Big Hit Entertainment</span></div>
									</div>
								</li>
								<li>
									<span class="title">Credit</span>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Creative Director :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Younghee Jo</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Project Mananer :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Moonsoo Kim</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">UX Planner :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Juhyun In</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Designer :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Jiyeon Kim, </span> <span style="white-space: nowrap;">Hana Choi</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Developer :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Eunseop Shin, </span> <span style="white-space: nowrap;">Hyohyung Cho</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Motion Designer :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Daijin Han, </span> <span style="white-space: nowrap;">Minbum Kang</span> </div>
									</div>									
								</li>
                               <!-- <li class="app_download"> 
                                    <div class="android"><a href="#">ANDROID DOWNLOAD</a></div>
                                    <div class="ios"><a href="#">iOS DOWNLOAD</a></div>
                                </li>-->
                                <!-- launch the site 버튼 사용 시, 주석 제거.-->
                                <li class="launch_site">
                                    <a href="https://txt.ibighit.com/introduction/" target="_blank">Launch the Site</a>
                                </li> 
							</ul>						
						</div>
					</div>
				</div>				
			</div>
		
		</div> <!--template End-->
            <!--Contents Area End-->
	</div> <!--container End-->
    </body>
</html>