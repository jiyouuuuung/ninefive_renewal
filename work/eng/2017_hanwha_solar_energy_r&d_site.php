<!DOCTYPE html>
<html lang="en">
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
        
        <script type="text/javascript" src="/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="/js/jquery.dotdotdot.min.js"></script>
        <script type="text/javascript" src="/js/jquery.ui.1.12.0.min.js"></script>
        <script type="text/javascript" src="/js/jquery.ui.touch-punch.min.js"></script>
<!--         <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=YOUR_CLIENT_ID"></script> -->
        <script type="text/javascript" src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
        <script type="text/javascript" src="/js/work.js"></script>
    </head>

    <style>
	.work.detail #slider1_container img { height: auto !important; }
	.feature .mobile { display: none !important; }
    .feature { position: relative; }
	.feature .de_txt_inner { width: 100%; height: 100%; position: relative; }
    .feature .de_txt_t { font-family: 'texgyreadventor_bold'; font-size: 50px; line-height: 1; width: 100%; padding: 0 30px; box-sizing: border-box; }
    .feature .de_txt_d { font-family: 'arial', 'Dotum', '돋움'; font-size: 17px; line-height: 26px; margin: 40px auto 0 auto; }
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

            <!--Contents Area Start-->
            <div class="contents work_detail en">
 
			
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">HANWHA SOLAR ENERGY R&D SITE</h3>
					<p class="desc">The world is moving towards renewable energy and the demand for solar energy is expected to rise as consumers and businesses become increasingly aware of its benefits. NINEFIVE has worked closely with the global leading solar module manufacturer Hanwha and launched Hanwha Solar Energy R&D Site. Our goal was to emphasize Hanwha’s solar energy leadership along with the energy paradigm shift and to deliver Hanwha’s innovative technologies in an efficient way.  To achieve our goal, Hanwha’s R&D story was spread out to the linear storytelling format with the immersive visual experience.</p>
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
					<div class="de_txt_d">Hanwha has been a driver of technical advancements in line with solar energy innovation across the globe. The website was carefully designed with a concept of ‘Journey’, and projected industry-leading technical expertise for a sustainable planet throughout Hanwha’s R&D story. To enhance the user engagement, we’ve arranged the content to gradually get more intense as the user navigates the website from Sun through the Earth to the solar cells and modules.</div>
				</div>
			</div>
			<div class="feature s02">
				<img src="/images/work/2017_work_hanwha_detail03.jpg" class="web" alt="" />
				<img src="/images/work/2017_work_hanwha_detail03_m.jpg" class="mobile" alt="" />
				<div class="de_txt">
					<div class="de_txt_t">UX PLANNING</div>
					<div class="de_txt_d">It’s very simple to navigate Hanwha Solar R&D Site. By having the linear structure, the user can navigate the website back and forth intuitively with either mouse scroll or the left and right button on the keyboard. For the faster navigation function, menus on the bottom of the page enables quick jump between sections. The progress bar at the top of the bottom menu indicates the current location and the icon changes from rocket to human. The transition effects used throughout the website made pages flow seamlessly. Visual elements and motions were used to make the content immersive with the enhanced viewing experience.</div>
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
		
		</div> <!--template End-->
            <!--Contents Area End-->
      
	</div> <!--container End-->
    </body>
</html>