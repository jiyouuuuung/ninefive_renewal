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


    .work.detail #slider1_container img { height: auto !important; }
	.feature .mobile { display: none !important; }
    .feature { position: relative; text-align: center; }
	.feature .de_txt_inner { width: 100%; height: 100%; position: relative; }
    .feature .de_txt_t { font-family: 'texgyreadventor_bold'; font-size: 50px; line-height: 1; width: 100%; }
    .feature .de_txt_d { font-family: 'nanumgothic', 'Dotum', '돋움'; font-size: 14px; line-height: 26px; margin: 40px auto 0 auto; }
	.feature .de_txt_ico { border-radius: 50%; width: 75px; height: 75px; background: #2747c3; color: #fff; font-family: 'texgyreadventor_bold'; line-height: 70px; font-size: 30px; position: absolute; left: 0; top: 0; text-align: center; margin-top: 7px; }
	.feature img{ display: block; width: 100%; }

	.feature.intro{ text-align: left; }
	
	.feature.s01 { background: #2747c3; }
	.feature.s01 img { position: absolute; bottom: 0; left: 0; }
    .feature.s01 .de_txt { color: #fff; position: relative; width: 100%; padding-top: 4.68vw; padding-bottom: 49.11vw; }
    .feature.s01 .de_txt_d { max-width: 1006px; padding: 0 30px; box-sizing: border-box; }

    .feature.s02 { background: #23282c; }
    .feature.s02 .de_txt { color: #fff; padding: 76px 0 68px 0; }
    .feature.s02 .de_txt_d { max-width: 1008px; padding: 0 30px; box-sizing: border-box; }

	.feature.s03 { overflow: hidden; }
	.feature.s03::after { display: block; content: " "; clear: both; }
	.feature.s03 .box { width: 50% !important; float: right; }
	.feature.s03 .img_box { position: absolute; top: 0; left: 0; float: none; background: #e7edf4; height: 100% !important; }
	.feature.s03 .txt_box { position: relative; background: #2a2f34; }
	.feature.s03 .txt_box > img { position: absolute; left: 0; bottom: 0; }
	.feature.s03 .de_txt { position: relative; box-sizing: border-box; text-align: left; color: #fff; padding: 3.02vw 3.75vw 35.31vw 3.75vw; }
	.feature.s03 .de_txt_inner { padding-left: 94px; box-sizing: border-box; }
	.feature.s03 .de_txt_t { font-size: 35px; line-height: 1.2; }
	.feature.s03 .de_txt_d { max-width: 565px; margin: 17px 0 0; }

	.feature.s04 { overflow: hidden; }
	.feature.s04::after { display: block; content: " "; clear: both; }
	.feature.s04 .box { width: 50% !important; float: left; }
	.feature.s04 .img_box { position: absolute; top: 0; right: 0; float: none; background: #eef6f9; height: 100% !important; }
	.feature.s04 .img_box img { position: absolute; bottom: 0; left: 0; }
	.feature.s04 .txt_box { position: relative; background: #2a2f34; }
	.feature.s04 .txt_box > img { position: absolute; left: 0; bottom: 0; }
	.feature.s04 .de_txt { position: relative; box-sizing: border-box; text-align: left; color: #fff; padding: 3.02vw 3.75vw 35.31vw 11.97vw; }
	.feature.s04 .de_txt_inner { padding-left: 94px; box-sizing: border-box; }
	.feature.s04 .de_txt_t { font-size: 35px; line-height: 1.2; }
	.feature.s04 .de_txt_d { max-width: 565px; margin: 17px 0 0; }

	.feature.s05 .de_txt { position: absolute; top: 0; left: 0; right: 0; padding-top: 5vw; }
	.feature.s05 .de_txt_t { color: #000; font-size: 2.6vw; text-align: center; }


	@media (max-width: 1024px) {

	.feature.s03 .web { display: none !important; }
	.feature.s03 .mobile { display: block !important; }

	.feature.s04 .web { display: none !important; }
	.feature.s04 .mobile { display: block !important; }

	.feature.s03 .box { width: 100% !important; float: none; }
	.feature.s03 .img_box { position: static; height: auto !important; }
	.feature.s03 .de_txt { padding: 9.375vw 6.25vw 73.25vw 6.25vw; }
	.feature.s03 .de_txt_inner { padding-left: 94px;}
	.feature.s03 .de_txt_d { max-width: none; }


	.feature.s04 .box { width: 100% !important; float: none; }
	.feature.s04 .img_box { position: static; height: auto !important; }
	.feature.s04 .img_box img { position: static; }
	.feature.s04 .de_txt { padding: 9.375vw 6.25vw 73.25vw 6.25vw; }
	.feature.s04 .de_txt_inner { padding-left: 94px;}
	.feature.s04 .de_txt_d { max-width: none; }
	
	
	}

	@media (max-width: 970px) {

	.feature.s02 .de_txt_d br { display: none; }
	
	}

    @media (max-width: 800px) {
    .feature .de_txt_t { position:relative; }
	.feature .de_txt_ico { position: absolute; left: -94px; top: 0; bottom:0; text-align: center; margin:auto 0; }

	.feature .web { display: none !important; }
	.feature .mobile { display: block !important; }

	.feature .de_txt { text-align: center; }
	.feature .de_txt_d { margin-top: 7.5vw; }

    .feature.s01 .de_txt { padding-top: 9.375vw; }
	.feature.s02 .de_txt { padding:9.375vw 0 9.375vw 0; }
	.feature.s03 .de_txt_d { margin: 7.5vw 0 0; }
	.feature.s04 .de_txt_d { margin: 7.5vw 0 0; }

    }

     @media (max-width: 480px) {
	.feature .de_txt_ico { left: -64px; }
	.feature .de_txt_t { font-size: 28px; }
	.feature .de_txt_d { font-size: 12px; line-height: 22px; }
	.feature.s03 .de_txt_t { font-size: 23px; }
	.feature.s04 .de_txt_t { font-size: 23px; }

	.feature .de_txt_ico { width: 45px; height: 45px; line-height: 40px; font-size: 20px; }

	.feature.s03 .de_txt_inner { padding-left: 64px; }
	.feature.s04 .de_txt_inner { padding-left: 64px; }


    }

	@media (max-width: 320px) { 

	.feature .de_txt_d { margin-top: 24px; }

	.feature.s01 .de_txt{ padding-top: 31.25px; padding-bottom: 157px; }

	.feature.s02 .de_txt { padding:31.25px 0 31.25px 0; }

	.feature.s03 .de_txt { padding: 31.25px 20px 234px 20px; }
	.feature.s03 .de_txt_d { margin: 24px 0 0; }
	.feature.s04 .de_txt { padding: 31.25px 20px 234px 20px; }
	.feature.s04 .de_txt_d { margin: 24px 0 0; }
	
	.feature.s05 .de_txt { padding-top: 16px; }
	.feature.s05 .de_txt_t { font-size: 10px; }

	}



    </style>

    <body>
<!--container Start-->
	<div class="container">
            <div class="contents work_detail">
		
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">FACEBOOK POCKETVC – LANCOME UV SUMMER DUO</h3>
					<p class="desc">글로벌 뷰티 브랜드 랑콤은 여름 휴가철을 맞이하여, 청조하고 밝은 이미지의 배우 김고은과 함께, 자외선 차단제 UV 엑스퍼트 아쿠아 젤 패키지를 출시했습니다. 나인파이브는 페이스북에서 20~30대 소비자에게 제품을 강하게 어필할 수 있는 2가지의 PockeTVC를 제작하였습니다. 모바일 환경에 최적화된 4:5 비율의 PockeTVC는 페이스북과 인스타그램에 게재되어 많은 소비자의 관심과 함께 세일즈 기대치 이상의 효과를 얻었습니다. 이에 페이스북의 케이스 스터디로 제작되어 국내외 세미나 자료로 활용되고 있습니다.</p>
				</div>
			</div>

			<div class="feature s00">
				<div class="img_wrap">
					<img src="/images/work/2017_work_lancome_detail01.jpg" alt="" />
				</div>
			</div>

			<div class="feature s01">
				<img src="/images/work/2017_work_lancome_detail02.jpg" alt="" />
				<div class="de_txt">
					<div class="de_txt_t">Mobile Size 4:5</div>
					<div class="de_txt_d">모바일 시대의 동영상 광고에서 명심해야 할 중요한 점은 스마트폰이 텔레비전의 축소판이 아니라는 것입니다. 영화, TV용으로 자주 제작되는 가로가 긴 형태의 동영상은 스마트폰 환경에서 매우 좁고 답답한 느낌을 줍니다. 반면 정사각형 또는 세로 방향의 동영상은 전체 화면을 보기 위해 스마트폰을 가로로 돌릴 필요가 없습니다. 특히 4:5의 화면 비율은 페이스북과 인스타그램의 환경에서 동영상을 보기에 최적화된 해상도로 더 많은 시청 성과를 얻을 수 있습니다.</div>
				</div>
			</div>
			<div class="feature s02">
				<div class="de_txt">
					<div class="de_txt_t">Two Concepts</div>
					<div class="de_txt_d">타겟 최적화와 효과적인 마케팅을 위해 UV 엑스퍼트 아쿠아 젤 PockeTVC는 2가지 컨셉의 동영상으로 제작되어 페이스북을 통해 동시 집행되었습니다. <br /><span style="white-space: nowrap;">서로 다른 형태로</span> 구성된 2가지 컨셉의 동영상은 더 다양한 관심사의 타겟과 매칭되어 보다 많은 사용자에게 배포되었습니다. <br />또한 매회 다른 동영상이 보여짐으로써 시청률과 참여율이 높아지는 효과가 나타났습니다.</div>
				</div>
			</div>
			<div class="feature s03">
				<div class="box txt_box">
					<img src="/images/work/2017_work_lancome_detail03-1.jpg" class="web" alt="" />
					<img src="/images/work/2017_work_lancome_detail03-1_m.jpg" class="mobile" alt="" />
					<div class="de_txt">
						<div class="de_txt_inner">
							<div class="de_txt_t"><span class="de_txt_ico">A</span>PockeTVC with <br/>Product Based Approach</div>
							<div class="de_txt_d">제품 중심으로 구성된 첫 번째 PockeTVC는 UV 엑스퍼트 아쿠아 젤 주변에 선글라스, 수영복 등 시즈너블한 소품들과 함께 제시하여, 자외선 차단제가 여름 휴가에 꼭 필요한 아이템임을 강조했습니다. 또한 햇빛과 파도로 표현한 강렬한 화면 전환 효과로 UV 엑스퍼트 아쿠아 젤의 특장점인 강력한 자외선 차단 효과와 산뜻한 수분 텍스처를 은유적으로 표현하였습니다.</div>
						</div>
					</div>
				</div>
				<div class="box img_box">
					<img src="/images/work/2017_work_lancome_detail03.jpg" class="web" alt="" />
					<img src="/images/work/2017_work_lancome_detail03_m.jpg" class="mobile" alt="" />
				</div>
			</div>
			<div class="feature s04">
				<div class="box txt_box">
					<img src="/images/work/2017_work_lancome_detail04-1.jpg" class="web" alt="" />
					<img src="/images/work/2017_work_lancome_detail04-1_m.jpg" class="mobile" alt="" />
					<div class="de_txt">
						<div class="de_txt_inner">
							<div class="de_txt_t"><span class="de_txt_ico">B</span>PockeTVC with <br/>Visual based Approach</div>
							<div class="de_txt_d">두 번째 PockeTVC는 배우 김고은과 비주얼을 강조하여, 아름다움에 철학을 둔 랑콤의 브랜드 이미지를 부각하였습니다. 원본 TVC의 김고은을 배경으로 UV 엑스퍼트 아쿠아 젤의 특장점을 잡지 커버 같은 형태로 구성함으로써, 비주얼은 더 강화하고 자연스럽게 제품을 소개하는 효과를 낼 수 있었습니다.</div>
						</div>
					</div>
				</div>
				<div class="box img_box">
					<img src="/images/work/2017_work_lancome_detail04.jpg" class="web" alt="" />
					<img src="/images/work/2017_work_lancome_detail04_m.jpg" class="mobile" alt="" />
				</div>
			</div>
			<div class="feature s05">
				<img src="/images/work/2017_work_lancome_detail05.jpg" alt="" />
				<div class="de_txt">
					<div class="de_txt_t">Page Design</div>
				</div>
			</div>
			<div class="feature movie" id="movie">
				<div class="movie_wrap">
					<a href="#" class="btn_vimeo_play"></a>
					<iframe id="vimeo_player" src="https://player.vimeo.com/video/240441694?color=65d50c&title=0&byline=0&portrait=0&quality=1080p" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>

			<div class="project_info">
				<div class="img_wrap">
					<img src="/images/work/2017_Facebook_PockeTVC_-_Lancome_UV_Summer_Duo_1080.jpg" alt=""/>
				</div>
				<div class="info_wrap">
					<div class="valign">
						<div class="middle">
							<ul>
								<li>
									<span class="title">CLIENT</span>
									LANCOME, Facebook
								</li>
								<li>
									<span class="title">CREDIT</span>
									Creative Director : Younghee Jo<br/>
									Producer: Hyeoksik Choi<br/>
									Designer : Kihan Kim, Yujin Kwon, Jisun Cha<br/>
									Motion Grapher : Dai-jin Han, Minbum Kang
								</li>
                               <!-- <li class="app_download"> 
                                    <div class="android"><a href="#">ANDROID DOWNLOAD</a></div>
                                    <div class="ios"><a href="#">iOS DOWNLOAD</a></div>
                                </li>-->
                                <!-- launch the site 버튼 사용 시, 주석 제거. -->
                                <!-- <li class="launch_site">
                                    <a href="#">Launch the Site</a>
                                </li> -->
							</ul>						
						</div>
					</div>
				</div>				
			</div>		
		</div>
	</div> <!--container End-->
    </body>
</html>