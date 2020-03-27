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
        <script src="https://player.vimeo.com/api/player.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
        <script type="text/javascript" src="/js/work.js"></script>
    </head>

    <style>
        .work.detail #slider1_container img { height: auto !important; }
	.feature .mobile { display: none !important; }
    .feature { position: relative; }
	.feature .de_txt_inner { width: 100%; height: 100%; position: relative; }
    .feature .de_txt_t { font-family: 'texgyreadventor_bold'; font-size: 50px; line-height: 1; width: 100%; padding: 0 30px; box-sizing: border-box; }
    .feature .de_txt_d { font-family: 'nanumgothic', 'Dotum', '돋움'; font-size: 14px; line-height: 26px; margin: 40px auto 0 auto; }
	.feature .de_txt_ico { border-radius: 50%; width: 75px; height: 75px; background: #2747c3; color: #fff; font-family: 'texgyreadventor_bold'; line-height: 70px; font-size: 30px; position: absolute; left: 0; top: 0; text-align: center; margin-top: 7px; }
	.feature img{ display: block; width: 100%; } 
	.feature .de_txt{ text-align: center; }

	.feature.s01 { background: #212121; overflow: hidden; }
	.feature.s01 img { position: absolute; bottom: 0; left: 0; }
    .feature.s01 .de_txt { color: #fff; position: relative; width: 100%; padding-top: 4.68vw; padding-bottom: 51.66vw; }
    .feature.s01 .de_txt_d { max-width: 1006px; padding: 0 30px; box-sizing: border-box; }

    .feature.s02 { background: #000; overflow: hidden; }
	.feature.s02 img { position: absolute; bottom: 0; left: 0; }
    .feature.s02 .de_txt { color: #fff; position: relative; width: 100%; padding-top: 4.68vw; padding-bottom: 92.13vw; }
    .feature.s02 .de_txt_d { max-width: 1006px; padding: 0 30px; box-sizing: border-box; }

	.feature.s03 img { position: absolute; bottom: 0; left: 0; }
	.feature.s03 .de_txt { position: relative; padding-top: 4.68vw; padding-bottom: 201vw; }
	.feature.s03 .de_txt_t { color: #000; font-size: 50px; }



    @media (max-width: 1920px) {

	.feature.s01 .de_txt { padding-top: 90px; }
	.feature.s02 .de_txt { padding-top: 90px; padding-bottom: 1769px; }
	.feature.s02 img {left: 50%; width: 1920px !important; margin-left: -960px; }
	
	}

	@media (max-width: 1240px) {

	.feature.s01 .de_txt { padding-top: 7.25vw; }
	.feature.s02 .de_txt { padding-top: 7.25vw; padding-bottom: 142.66vw; }
	.feature.s02 img { width: 154.83vw !important; margin-left: -77.41vw; }
	
	}


    @media (max-width: 800px) {

	.feature .web { display: none !important; }
	.feature .mobile { display: block !important; }

	.feature .de_txt { text-align: center; }

	.feature.s01 .de_txt { padding-top: 16.07vw; padding-bottom: 81.46vw; }
	.feature.s02 img { width: 100% !important; margin-left: 0; left: 0; }
	.feature.s02 .de_txt { padding-top: 13.87vw; padding-bottom: 174.36vw; }

    }

    @media (max-width: 480px) {

	.feature .de_txt_t { font-size: 28px; }
	.feature .de_txt_d { font-size: 12px; line-height: 22px; margin-top: 22px; }

	.feature.s03 .de_txt_t { font-size: 28px; }

	.feature.s01 .de_txt { padding-top: 18.07vw; padding-bottom: 79.46vw; }
	.feature.s02 .de_txt { padding-top: 15.87vw; padding-bottom: 172.36vw; }


    }

	@media (max-width: 320px) { 
	
	.feature.s01 .de_txt { padding-top: 58px; padding-bottom: 254px; }
	.feature.s02 .de_txt { padding-top: 51px; padding-bottom: 552px; }
	.feature.s03 .de_txt { padding-top: 15px; padding-bottom: 643px; }
	}



    </style>

    <body>
<!--container Start-->
	<div class="container">
            <div class="contents work_detail">

			
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">HANWHA SOLAR ENERGY R&D SITE</h3>
					<p class="desc">세계적으로 친환경 에너지의 필요성이 대두되면서 태양광 에너지에 대한 수요 또한 증가하고 있는 추세입니다. 나인파이브는 태양광 에너지의 상용화 및 보급화를 선도하는 한화 그룹의 태앙광 에너지 R&D 사이트를 제작하여 환경 문제에 따른 에너지 산업의 변화, 그리고 태양광 업계를 선도하는 한화의 핵심 기술이 누구에게나 쉽고 재미있게 전달될 수 있도록 하였습니다. 태양, 지구, 자연을 모티브로 한화의 태양광 R&D를 스토리텔링 형식으로 구성하여 태양 에너지의 장점과 한화의 기술력, 그리고 이를 통해 실현되는 깨끗한 지구를 표현하였습니다. 독창적인 UI와 재미있는 인터랙션으로 구성하여 몰입감을 더하였으며, 전문적인 기술 내용을 시각화하여 방문자가 쉽게 이해할 수 있도록 구성하였습니다.</p>
				</div>
			</div>
            
			<div class="feature s00">
				<div class="img_wrap">
					<img src="/images/work/2017_work_hanwha_detail01.jpg" alt="" />
				</div>
			</div>

			<div class="feature s01">
				<img src="/images/work/2017_work_hanwha_detail02.jpg" class="web" alt="" />
				<img src="/images/work/2017_work_hanwha_detail02_m.jpg" class="mobile" alt="" />
				<div class="de_txt">
					<div class="de_txt_t">CONCEPT : JOURNEY</div>
					<div class="de_txt_d">태양광 에너지 업계를 선도하는 한화의 리더십을 쉽고 효과적으로 전달하기 위해, '여정'을 컨셉으로 한화의 태양광 R&D 스토리를 전개했습니다. 태양을 시작으로 지구, R&D 센터, 태양광 패널로 점점 빨려 들어가는 방식으로 구성하여 사용자의 몰입도를 높였습니다. 나아가 패널에서 지구로 되돌아 나오면서 태양광 에너지로 인해 깨끗해진 지구를 표현하고자 했습니다.</div>
				</div>
			</div>
			<div class="feature s02">
				<img src="/images/work/2017_work_hanwha_detail03.jpg" class="web" alt="" />
				<img src="/images/work/2017_work_hanwha_detail03_m.jpg" class="mobile" alt="" />
				<div class="de_txt">
					<div class="de_txt_t">UX PLANNING</div>
					<div class="de_txt_d">한화의 태양광 R&D를 살펴보는 방법은 단순합니다. 마우스 휠로 스크롤하거나 키보드의 좌우 화살표를 누르면, 한 편의 동영상을 보듯 순차적으로 내용이 전개됩니다. 또한 하단의 메뉴를 통해 원하는 섹션으로 빠르게 점프할 수 있습니다. 하단 메뉴의 위에 있는 상태 바는 현재 보고 있는 페이지의 위치를 알려 주며, 상태 바의 아이콘은 공간에 따라 로켓에서 사람으로 바뀌도록 구성하여 재미 요소를 더했습니다. 페이지와 페이지 간에 적용된 전환 효과는 콘텐츠의 흐름을 보다 자연스럽게 이어 주어 사용자의 흥미를 유발하고, 콘텐츠의 몰입감을 더했습니다.</div>
				</div>
			</div>
			<div class="feature s03">
				<img src="/images/work/2017_work_hanwha_detail04.jpg" alt="" />
				<div class="de_txt">
					<div class="de_txt_t">Page Design</div>
				</div>
			</div>
			<div class="movie" id="movie">
				<div class="movie_wrap">
					<a href="#" class="btn_vimeo_play"></a>
					<iframe id="vimeo_player" src="https://player.vimeo.com/video/241123706?color=65d50c&title=0&byline=0&portrait=0&quality=1080p" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>

			<div class="project_info">
				<div class="img_wrap">
					<img src="/images/work/2017_HANWHA_SOLAR_ENERGY_R&D_SITE_1080.jpg" alt=""/>
				</div>
				<div class="info_wrap">
					<div class="valign">
						<div class="middle">
							<ul>
								<li>
									<span class="title">CLIENT</span>
									Hanwha
								</li>
								<li>
									<span class="title">CREDIT</span>
									Creative Director : Younghee Jo<br/>
									Producer : Hyeoksik Choi<br/>
									UX Planner : Hyeoksik Choi, Moonsoo Kim, Juhyun In<br/>
									Lead Designer : Yujin Kwon<br/>
									Designer : Kihan Kim, Jisun Cha, Seunga Lee<br/>
									Motion Grapher : Dai-jin Han, Minbum Kang<br/>
									Developer: Eunseop Shin, Sujung Lim
								</li>
                               <!-- <li class="app_download"> 
                                    <div class="android"><a href="#">ANDROID DOWNLOAD</a></div>
                                    <div class="ios"><a href="#">iOS DOWNLOAD</a></div>
                                </li>-->
                                <!-- launch the site 버튼 사용 시, 주석 제거. -->
                                <li class="launch_site">
                                    <a href="http://www.hanwha.com/solar-rnd/en/" target="_blank">Launch the Site</a>
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