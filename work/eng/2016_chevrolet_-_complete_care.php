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
        .work_detail .f02 { background: #fcc12f; }
        .work_detail .f02 .txt.sub .desc.sub { color: #000;   }
        .work_detail .f02 .txt.sub .ico_wrap li{ display: inline-block; width: 33.333333%; box-sizing: border-box;  top:0; text-align: center; padding: 0 40px; }
        .work_detail .f02 .txt.sub .ico_wrap li:nth-child(2) { position: absolute;  left: 33.333333%; }
        .work_detail .f02 .txt.sub .ico_wrap li:nth-child(3) { position: absolute;  left: 66.666666%; }

        .work_detail.en .f02 .txt.sub .ico_wrap li p{font-family:'nanumgothic', 'Dotum', '돋움'; font-weight:bold; color:#000; margin-top:0; font-size:17px; line-height:26px; letter-spacing:-0.2px;}
        .work_detail .f02{background:url(/images/work/chevrolet_detail02_bg_10.jpg)}
        .work_detail .f02 .txt.sub{ text-align: center; padding:60px 0 60px;width:1020px;}
        .work_detail .f02 .txt.sub > img{width:100%;max-width:514px;}
        .work_detail .f02 .txt.sub .ico_wrap{margin-top:55px;position: relative; height: auto; text-align: left;}
        .work_detail.en .f02 .txt.sub .ico_wrap li img{padding-bottom:10px;}
        .work_detail .f02 .txt.sub .ico_wrap li:first-child img{max-width:116px;}
        .work_detail .f02 .txt.sub .ico_wrap li:nth-child(2) img{max-width:143px;}
        .work_detail .f02 .txt.sub .ico_wrap li:last-child img{max-width:158px;}

        .work_detail .f03 .txt{position:absolute; text-align:left; top:0; margin:0;width:100% !important;padding: 11.4vw 30px 62.24vw 43.55vw;z-index:5;height:78.65vw;}
        .work_detail .f03 .txt .title.sub img{width:100%; height:100%; display:block; max-width:360px;}
        .work_detail .f03 .txt .desc.sub{margin:30px 0 0;}
        .work_detail .f03 .txt .desc{max-width:520px; font-family: 'nanumgothic', 'Dotum', '돋움'; font-weight: bold; font-size: 14px; color: #000; line-height: 26px; margin-top: 30px;}
        @media (max-width: 1440px){
             .work_detail .f03 .txt{padding:8% 30px 62.24vw 43.55vw;}
        }
        @media (max-width: 1300px) { 
            .work_detail .f02 .txt.sub > img{display:block; width:70%; margin:0 auto;}
           
        }
        @media (max-width: 1168px) {
            .work_detail .f03 .txt{padding:5% 30px 62.24vw 43.55vw}
        }
        @media (max-width: 1023px) { 
            .work_detail .f02 .txt.sub{width:100%;}
            .work_detail .f02 .txt.sub .ico_wrap li{width:100%;}
            .work_detail .f02 .txt.sub .ico_wrap li:nth-child(2){position:static;padding-top:50px;}
            .work_detail .f02 .txt.sub .ico_wrap li:nth-child(3){position:static;padding-top:50px;}
            
            .work_detail.en .f02 .txt.sub .ico_wrap li p{font-size:15px;line-height:22px;}

            .work_detail .f03 .txt .title.sub img{width:50%;}
            .work_detail .f03 .txt{position: relative; padding:67px 60px; height: auto; background:url('/images/work/chevrolet_detail03_10_m_bg.jpg') no-repeat; background-size: cover;}
        }
        @media (max-width: 639px) {
            .work_detail .f03 .txt{padding:42px 40px;}
            .work_detail .f02 .txt.sub .ico_wrap li:first-child img{max-width:76px;}
            .work_detail .f02 .txt.sub .ico_wrap li:nth-child(2) img{max-width:103px;}
            .work_detail .f02 .txt.sub .ico_wrap li:last-child img{max-width:118px;}
            .work_detail.en .f02 .txt.sub .ico_wrap li p{font-size:13px;line-height:20px;letter-spacing:-0.3px;}
        }
        @media (max-width: 400px) {
            .work_detail .f03 .txt{padding:42px 20px}
        }
    </style>

    <body>
<!--container Start-->
	<div class="container">

        <!--Contents Area Start-->
        <div class="contents work_detail en">
 
			
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">CHEVROLET – <span style="white-space:nowrap">COMPLETE CARE</span></h3>
					<p class="desc">NINEFIVE has created Facebook creatives for Chevrolet’s warranty service, ‘Chevrolet Complete Care’. Facebook TVC and Canvas were produced with a ‘Watching Radio’ concept to deliver Chevrolet customer’s touching story, and line drawing animation with clear, concise captions were used to achieve its tone and manner. On Facebook TVC, the line drawing animation played a very important role. It made the mood for the audience-friendly approach, and more importantly, it gathered all the video footage of individual scenes that are used in Facebook TVC to a whole seamless story. Unlike traditional rich media, Facebook Canvas gave us more freedom to use image and video. We’ve stretched and polished the customer story to a long portrait canvas with an additional car maintenance tips to illustrate Chevrolet Complete Care’s unwavering commitment to its customer.</p>
				</div>
			</div>

			<div class="feature f01">
				<div class="img_wrap">
					<img src="/images/work/chevrolet_intro_10.jpg" alt=""/>
				</div>	
			</div>

			<div class="feature f02">
                <div class="img_wrap">
					<img src="/images/work/chevrolet_detail01_10.jpg" alt=""/>
				</div>	
               
				<div class="txt sub">
					<img src="/images/work/chevrolet_detail01_icotitle_10.png" class="icon_title" alt="" />
					<p class="desc sub"></p>

					<div class="ico_wrap">
						<ul>
							<li>
								<img src="/images/work/chevrolet_detail01_ico1_10.png" alt=""/>
								<p>Leave the essence<br /> and throw the rest</p>
							</li>
							<li>
								<img src="/images/work/chevrolet_detail01_ico2_10.png" alt=""/>
								<p>Tell a story<br /> with and without sound</p>
							</li>
							<li>
								<img src="/images/work/chevrolet_detail01_ico3_10.png" alt=""/>
								<p>Add a design concept<br /> to draw the audience’s attention</p>
							</li>
						</ul>
					</div>
	

				</div>
				<div class="img_wrap">
					<img src="/images/work/chevrolet_detail02_10.jpg" alt=""/>
				</div>	
			</div>

			<div class="feature f03">
                <div class="txt sub">
                    <h4 class="title sub"><img src="/images/work/chevrolet_detail03_title_10.png" alt=""/></h4>
                    <p class="desc sub">Facebook Canvas is a new type of interactive creative that features a combination of multiple images and videos. It delivers an efficient way of telling a brand story with the immersive user experience. <br />Collage decoration has been used to draw the audience’s attention. Contents were composed with Chevrolet customer’s story and car maintenance tips to enhance the brand image.</p>
			    </div>
				<div class="img_wrap web">
					<img src="/images/work/chevrolet_detail03_10.jpg" alt=""/>
				</div>
                <div class="img_wrap mobile">
					<img src="/images/work/chevrolet_detail03_10_m.jpg" alt=""/>
				</div>
            </div>


			<div class="movie" id="movie">
				<div class="movie_wrap">
					<a href="#" class="btn_vimeo_play"></a>  
					<iframe id="vimeo_player" src="https://player.vimeo.com/video/184292380?color=65d50c&title=0&byline=0&portrait=0&quality=1080p&player_id=vimeo_player" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>            
				</div>
			</div>

			<div class="project_info">
				<div class="img_wrap">
					<img src="/images/work/info.jpg" alt=""/>
				</div>
				<div class="info_wrap">
					<div class="valign">
						<div class="middle">
							<ul>
								<li>
									<span class="title">CLIENT</span>
									GM<br>
									Facebook
								</li>
								<li>
									<span class="title">CREDIT</span>
									Creative Director : Younghee Jo<br />
                                    Producer : Hyeoksik Choi<br />
                                    Lead Designer : Yujin Kwon<br />
                                    Designer : Seunga Lee<br />
                                    Motion Grapher : Dai-jin Han, Seonho Kim
								</li>
                                <!-- 앱다운로드 버튼 사용 시, 주석 제거. -->
                                <!-- <li class="app_download"> 
                                    <div class="android"><a href="#">ANDROID DOWNLOAD</a></div>
                                    <div class="ios"><a href="#">iOS DOWNLOAD</a></div>
                                </li> -->
                                <!-- launch the site 버튼 사용 시, 주석 제거. -->
                                <!-- <li class="launch_site">
                                    <a href="#">Launch the Site</a>
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