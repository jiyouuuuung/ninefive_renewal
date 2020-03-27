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
	.work_detail.en .feature .txt .desc, .work_detail.en .project_info .info_wrap .txt .desc {margin-top: 38px; }
	.feature .de_txt_inner { width: 100%; height: 100%; position: relative; }
	.feature .de_txt_h {font-family: 'texgyreadventor_bold'; font-size: 25px; color: #01ec3f;}
    .feature .de_txt_t { font-family: 'texgyreadventor_bold'; font-size: 50px; line-height: 1; width: 100%; padding: 90px 30px 0; box-sizing: border-box; text-transform: uppercase;}
    .feature .de_txt_d { font-family: 'arial', 'Dotum', '돋움'; font-size: 15px; line-height: 25px; margin: 22px auto 32px auto; letter-spacing: 0.2px;}
	.feature .de_txt_ico { border-radius: 50%; width: 75px; height: 75px; background: #2747c3; color: #fff; font-family: 'texgyreadventor_bold'; line-height: 70px; font-size: 30px; position: absolute; left: 0; top: 0; text-align: center; margin-top: 7px; }
	.feature img{ display: block; width: 100%; } 
	.feature .de_txt{ text-align: center; }
	.black_bg {background: #000;}
	.grey_bg {background: #282828;}
	img.pc_img {display: block;}
	img.mo_img {display: none;}

	.feature.s01 { background: #000;}
    .feature.s01 .de_txt { color: #fff; width: 100%;}
    .feature.s01 .de_txt_d { max-width: 1129px; padding: 1px 30px 30px; box-sizing: border-box; color: #c5c5c5; letter-spacing: 0;}

    .feature.s02 { background: #000; overflow: hidden; }
	.feature.s02 img { position: absolute; bottom: 0; left: 0; margin-left: -5.31vw; }
    .feature.s02 .de_txt { color: #fff; position: relative; width: 100%; padding-bottom: 23.28vw; }
    .feature.s02 .de_txt_d { max-width: 1108px; padding: 0 30px; box-sizing: border-box; color: #c5c5c5; letter-spacing: -0.4px;}

    .feature.s03 { background: #000; overflow: hidden;}
	.feature.s03 img { position: absolute; bottom: 0; left: 0; }
    .feature.s03 .de_txt { color: #fff; position: relative; width: 100%; min-height: 43.28vw; padding-top: 4.69vw; padding-bottom: 27.34vw; }
	.feature.s03 .de_txt_t {padding-top: 10px;}
    .feature.s03 .de_txt_d { max-width: 1134px; padding: 0 30px; box-sizing: border-box; color: #c5c5c5; letter-spacing: 0.1px;}

	.feature.s04 { background: #000; padding-top: 90px;}
    .feature.s04 .de_txt { color: #fff; width: 100%;}
	.feature.s04 .de_txt_t {padding-top: 10px;}
    .feature.s04 .de_txt_d { max-width: 1115px; padding: 0 30px; box-sizing: border-box; color: #c5c5c5; letter-spacing: 0.07px;}

	.feature.s05 { background: #282828; padding-top: 90px;}
    .feature.s05 .de_txt { color: #fff; width: 100%;}
	.feature.s05 .de_txt_t {padding-top: 10px;}
    .feature.s05 .de_txt_d { max-width: 1136px; padding: 0 30px; box-sizing: border-box; margin-bottom: 43px; color: #c5c5c5;}

	.feature.s06 { background: #282828; padding-top: 90px;}
    .feature.s06 .de_txt { color: #fff; width: 100%;}
	.feature.s06 .de_txt_t {padding-top: 10px; padding-bottom: 81px;}

	.feature.s07 { background: #171717; padding-top: 90px;}
    .feature.s07 .de_txt { color: #fff; width: 100%;}
	.feature.s07 .de_txt_t {padding-top: 10px; padding-bottom: 64px;}



	.info_wrap .valign .middle li .credit_wrap {display: table;}
	.info_wrap .valign .middle li .credit_wrap > div {display: table-cell;}

    @media (max-width: 1920px) {


	.feature .de_txt{ padding: 0 30px;}
	.feature.s01 img {position: relative; left: 50%; width: 1920px !important; transform: translateX(-50%); }
    .feature.s02 .de_txt { padding-bottom: 447px; }
	.feature.s02 img { left: 50%; width: 1920px !important; transform: translateX(-50%); margin-left: -102px; }
	.feature.s07 img {position: relative; left: 50%; width: 1920px !important; transform: translateX(-50%); }
	
	}

    @media (max-width: 1250px) {

    .feature.s02 .de_txt { padding-bottom: 36.94vw; }
	.feature.s02 img { width: 153.6% !important; margin-left: -8.16vw; }

	}

	@media (max-width: 1184px) {

	.feature.s07 img {width: 162% !important; }

	}

	@media (max-width: 1040px) {

	.feature.s01 img {width: 187.5% !important; }
	
	}

    @media (max-width: 800px) {
	img.pc_img {display: none;}
	img.mo_img {display: block;}
	.feature.s06 { background: #000; }
	}


    @media (max-width: 480px) {

	.feature .de_txt_h { font-size: 20px; }
	.feature .de_txt_t { font-size: 28px; }
	.feature .de_txt_d { font-size: 12px; line-height: 22px; margin-top: 22px; }

    .feature .de_txt_t {padding: 18.07vw 0px 0;}

    .feature.s01 .de_txt_d { padding: 0;}

    .feature.s02 .de_txt { padding-bottom: 26.94vw; }
    .feature.s02 .de_txt_d {padding: 0; }

    .feature.s03 { padding-top: 18.07vw;}
	.feature.s03 .de_txt_t {padding-top: 2.08vw;}
    .feature.s03 .de_txt_d {padding: 0;}

	.feature.s04 { padding-top: 18.07vw;}
	.feature.s04 .de_txt_t {padding-top: 2.08vw;}
    .feature.s04 .de_txt_d { padding: 0; }

	.feature.s05 { padding-top: 8.07vw;}
	.feature.s05 .de_txt_t {padding-top: 2.08vw;}
    .feature.s05 .de_txt_d { padding: 0; margin-bottom: 8.96vw;}

	.feature.s06 {padding-top: 8.07vw;}
	.feature.s06 .de_txt_t {padding-top: 2.08vw; padding-bottom: 6.875vw;}

	.feature.s07 {padding-top: 8.07vw;}
	.feature.s07 .de_txt_t {padding-top: 2.08vw; padding-bottom: 3.33vw;}


    }

	@media (max-width: 320px) { 
	
    .feature .de_txt_t {padding: 58px 0px 0;}

    .feature.s02 .de_txt { padding-bottom: 86px; }
	.feature.s02 img { margin-left: -26px; }

    .feature.s03 { padding-top: 58px;}
    .feature.s03 .de_txt { padding-bottom: 87px; }
	.feature.s03 .de_txt_t {padding-top: 7px;}

	.feature.s04 { padding-top: 58px;}
	.feature.s04 .de_txt_t {padding-top: 7px;}

	.feature.s05 { padding-top: 26px;}
	.feature.s05 .de_txt_t {padding-top: 7px;}
    .feature.s05 .de_txt_d { margin-bottom: 29px;}

	.feature.s06 {padding-top: 26px;}
	.feature.s06 .de_txt_t {padding-top: 7px; padding-bottom: 22px;}

	.feature.s07 {padding-top: 26px;}
	.feature.s07 .de_txt_t {padding-top: 7px; padding-bottom: 11px;}

	}


    </style>

    <body>
<!--container Start-->
	<div class="container">

            <!--Contents Area Start-->
            <div class="contents work_detail en">
 
			
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">ONE - THE NEXT GENERATION VEHICLE DISPLAY</h3>
					<p class="desc">'ONE' is the next generation vehicle display. We’ve defined ‘ONE’ to represent the motif of its circular display. ‘ONE’ has a meaning of ‘circle’ in Korean. It represents a willingness to create a display with uniqueness. We’ve designed UI with NINEFIVE’s identity, bright green and circular motifs. The circular motifs provide such a great flexibility upon expansion, reduction, duplication, according to the user's needs and features autonomous driving, voice commands and chatbot.</p>
				</div>
			</div>
            
			<div class="feature s00">
				<div class="img_wrap">
					<img src="/images/work/2018_work_car_detail01.jpg" alt="" />
				</div>
			</div>

			<div class="black_bg">
				<div class="feature s01">
					<div class="de_txt">
						<div class="de_txt_t">Concept</div>
						<div class="de_txt_d">Our goal was to create a next-generation vehicle display that is both aesthetic and intelligent. To achieve aesthetic design, we decided to take an advantage of NINEFIVE’s brand identity which is composed with bright green color and a round motif. The name ‘ONE’ has the representational motif of its display with a meaning of ‘circle’ in Korean. The circular motif has a great advantage when expressing the UX especially when it needs flexibility according to the user's needs. It can be expanded, reduced and duplicated to display various information. The bright green color certainly stands out among many blue colored displays and delivers a unique UI/UX.</div>
					</div>
					<img src="/images/work/2018_work_car_detail02.jpg">
				</div>
				<div class="feature s02">
					<img src="/images/work/2018_work_car_detail03.jpg">
					<div class="de_txt">
						<div class="de_txt_t">UI PLANNING</div>
						<div class="de_txt_d">The large display is designed in a user friendly way. Circular components expands and collapses from the cluster to display various information.</div>
					</div>
				</div>
				<div class="feature s03">
					<img src="/images/work/2018_work_car_detail04.jpg" alt="" />
					<div class="de_txt">
						<div class="de_txt_h">UI</div>
						<div class="de_txt_t">CLUSTER & APPS</div>
						<div class="de_txt_d">Cluster is designed with dots and concentric lines and the dots around the cluster rotates when it’s on driving status. The voice command function is place on the left side of cluster and it enlarges when it’s activated. Apps are placed on the right side and user can quickly access to various contents.</div>
					</div>
				</div>
				<div class="feature s04">
					<div class="de_txt">
						<div class="de_txt_h">UI</div>
						<div class="de_txt_t">VOICE RECOGNITION</div>
						<div class="de_txt_d">Voice recognition became one of the key functions among autonomous vehicles. To make voice recognition aesthetically pleasing, we’ve arranged bright green dots spatially and applied sensuous shining motion effect.<br>To design a more aesthetically pleasing voice recognition, which is one of the key functions of autonomous vehicles, we have arranged a bright green dot spatially and processed it with sensuous motion like shining lights.</div>
					</div>
					<img src="/images/work/2018_work_car_detail05.jpg" alt="" />
				</div>
			</div>

			<div class="grey_bg">
				<div class="feature s05">
					<div class="de_txt">
						<div class="de_txt_h">UI</div>
						<div class="de_txt_t">CHATBOT IN VEHICLE</div>
						<div class="de_txt_d">Combining voice recognition with chatbot, user can communicate more precisely. Simple graphic elements, chatting, and voice recognition functions are visually combined to support user’s demand.</div>
					</div>
					<img src="/images/work/2018_work_car_detail06-mo.jpg" alt="" class="mo_img"/>
					<img src="/images/work/2018_work_car_detail06.jpg" alt="" class="pc_img"/>
				</div>
				<div class="feature s06">
					<div class="de_txt">
						<div class="de_txt_t">SCREENS</div>
					</div>
					<img src="/images/work/2018_work_car_detail07-mo.jpg" alt="" class="mo_img"/>
					<img src="/images/work/2018_work_car_detail07.jpg" alt="" class="pc_img"/>
				</div>
				<div class="feature s07">
					<div class="de_txt">
						<div class="de_txt_t">ICONS</div>
					</div>
					<img src="/images/work/2018_work_car_detail08.jpg" alt="" />
				</div>
			</div>

			<div class="movie" id="movie">
				<div class="movie_wrap">
					<a href="#" class="btn_vimeo_play"></a>
					<iframe id="vimeo_player" src="https://player.vimeo.com/video/323998237?color=65d50c&title=0&byline=0&portrait=0&quality=1080p" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>

			<div class="project_info">
				<div class="img_wrap">
					<img src="/images/work/2018_work_car_960.jpg" alt=""/>
				</div>
				<div class="info_wrap">
					<div class="valign">
						<div class="middle">
							<ul>
								<li>
									<span class="title">CREDIT</span>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Creative Director :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Younghee Jo</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Producer :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Moonsoo Kim</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Planner :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Hyeoksik Choi,</span> <span style="white-space: nowrap;">Juhyun In,</span> <span style="white-space: nowrap;">Youngnam Kim</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Designer :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Mihee Lee,</span> <span style="white-space: nowrap;">Jiyeon Kim,</span> <span style="white-space: nowrap;">Hana Choi,</span> <span style="white-space: nowrap;">Jiwon Lim,</span> <span style="white-space: nowrap;">Minhee Kim</span></div>
									</div>
									<div class="credit_wrap">
										<div class="credit_title"><span style="white-space: nowrap;">Motion/3D :&nbsp</span></div>
										<div class="credit_name"><span style="white-space: nowrap;">Daejin Han,</span> <span style="white-space: nowrap;">Minbum Kang,</span> <span style="white-space: nowrap;">Kyoungan Han</span></div>
									</div>
								</li>
                               <!-- <li class="app_download"> 
                                    <div class="android"><a href="#">ANDROID DOWNLOAD</a></div>
                                    <div class="ios"><a href="#">iOS DOWNLOAD</a></div>
                                </li>-->
                                <!-- launch the site 버튼 사용 시, 주석 제거.
                                <li class="launch_site">
                                    <a href="http://www.hanwha.com/solar-rnd/en/" target="_blank">Launch the Site</a>
                                </li> -->
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