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
        .work_detail.en .feature .txt .benefit-title { font-family: 'texgyreadventor_bold'; letter-spacing: -0.6px; font-size: 70px; line-height: 80px; }
        .work_detail.en .feature .txt .feature-title { font-family: 'texgyreadventor_Regular'; font-size: 30px; line-height: normal; }
        .work_detail.en .feature .txt .feature-desc { font-family: 'Arial'; font-size: 17px; line-height: 26px; letter-spacing: -0.2px; }

        .work_detail.en .f01 .txt { box-sizing: content-box; width: 752px; margin: 0; padding: 9.5vw 0 4.7vw 13.5vw; }
        .work_detail.en .f01 .txt { color: #000; }
        .work_detail.en .f01 .txt .feature-desc { margin-top: 1.68vw; }

        .work_detail.en .f01 .txt .ico_wrap { margin-top: 4.1vw; }
        .work_detail.en .f01 .txt .ico_wrap:after { content: " "; display: block; clear: both; }
        .work_detail.en .f01 .txt .ico_wrap .ico { float: left; padding-right: 15px; background: url('/images/work/2017_work_ooh-galaxyS8_detail_arrow.png') no-repeat; background-position: 98% center; }
        .work_detail.en .f01 .txt .ico_wrap .ico:last-child { padding: 0; background: none; }

        .work_detail.en .f02 .obj { top: auto; bottom: 0; }
        .work_detail.en .f02 .obj_txt { color: #fff; position: absolute; bottom: 4.6vw; width: 100%; text-align: center; font-size: 70px; text-transform: uppercase; font-family: 'texgyreadventor_bold'; letter-spacing: -0.6px; line-height: normal; }

        .work_detail.en .f03 { background: #f8f8f8; margin-top: -1px; }
        .work_detail.en .f03 .txt { text-align: center; color: #000; max-width: 850px; margin: 0 auto; padding-top: 0; padding-bottom: 75px; }
        .work_detail.en .f03 .txt .benefit-title { font-size: 91px; line-height: normal; }
        .work_detail.en .f03 .txt .feature-desc { margin-top: 0; font-size: 17px; line-height: 26px; }
        .work_detail.en .f03 .obj { top: auto; bottom: 8.31vw; text-align: center; }
        .work_detail.en .f03 .obj img { width: auto; display: inline-block; }

        @media (max-width: 1440px){ 
            .work_detail.en .feature .txt .benefit-title { font-size: 4.86vw; line-height: 5.55vw;}
            .work_detail.en .feature .txt .feature-title { font-size: 2.08vw; }
            .work_detail.en .f01 .txt{ padding: 9.5vw 24.5vw 4.7vw 0; box-sizing: border-box; width: 1020px; margin: 0 auto; }
            .work_detail.en .f01 .txt .feature-desc { margin-top: 2.43vw; }
            .work_detail.en .f01 .txt .ico_wrap .ico img {width: 8.2vw;}

            .work_detail.en .f02 .obj_txt { bottom: 4.3vw; font-size: 4.86vw; }

            .work_detail.en .f03 .txt { padding-bottom: 5.13vw; }
            .work_detail.en .f03 .txt .benefit-title { font-size: 6.31vw; line-height: normal; }

            .work_detail.en .f03 .obj img { width: 21.25vw; }
        
        }

        @media (max-width: 1300px){ 
            .work_detail.en .f03 .txt { width: auto; padding-left: 0; padding-right: 0;; } 

            .work_detail.en .f01 .txt{ width: 920px; }
            .work_detail.en .f01 .txt .feature-desc { margin-top: 22px;}
            .work_detail.en .f01 .txt .ico_wrap { margin-top: 25px;}
            .work_detail.en .f01 .txt .ico_wrap .ico {padding-right: 11px; background-size: 5px 7px; }
            .work_detail.en .f01 .txt .ico_wrap .ico img {width: 98px}
        
        }

        @media (max-width: 1023px){ 
            .work_detail.en .feature .txt .benefit-title { font-size: 40px; line-height: 42px;}
            .work_detail.en .feature .txt .feature-title { font-size: 20px; line-height: 30px; }
            .work_detail.en .f01 .txt { padding: 50.92vw 60px 9.25vw 60px; width: 100%;}
            .work_detail.en .f01 .txt .ico_wrap .ico {padding-right: 8px; background-size: 3px 5px; }
            .work_detail.en .f01 .txt .ico_wrap .ico img {width: 12.25vw;}

            .work_detail.en .f02 .obj_txt { bottom: 5.6vw; font-size: 30px; line-height: 32px; }

            .work_detail.en .f03 .txt { padding-left: 60px; padding-right: 60px; width: 100%;}
            .work_detail.en .f03 .txt .feature-desc { margin-top: 10px; }
        
        }

        @media (max-width: 480px){ 
            .work_detail.en .feature .txt .benefit-title { font-size: 28px; line-height: 30px;}
            .work_detail.en .feature .txt .feature-title { font-size: 18px; line-height: 28px; }
            .work_detail.en .feature .txt .feature-desc { font-size: 13px; line-height: 20px; letter-spacing: -0.3px; }
            .work_detail.en .f01 .txt { padding-left: 40px; padding-right: 40px; }
            .work_detail.en .f01 .txt .ico_wrap .ico {padding-right: 8px; background-size: 3px 5px; background-position: 96% center; }
            .work_detail.en .f01 .txt .ico_wrap .ico img {width: 12.25vw;}

            .work_detail.en .f02 .obj_txt { font-size: 20px; line-height: 22px; }

            .work_detail.en .f03 .txt { padding-left: 40px; padding-right: 40px; }
        
        }

        @media (max-width: 400px){ 
            .work_detail.en .f01 .txt { padding-left: 20px; padding-right: 20px; }

            .work_detail.en .f03 .txt { padding-left: 20px; padding-right: 20px; }
        
        }



    </style>

    <body>
<!--container Start-->
	<div class="container">

            <!--Contents Area Start-->
            <div class="contents work_detail en">
 
			
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">Galaxy S8 - Times Square Takeover</h3>
					<p class="desc">Samsung unveiled Galaxy S8 through ‘Unbox Your Phone’ event in New York Times Square. 12 buildings around Times Square were filled with immersive underwater art installation with a giant whale to express the Galaxy S8’s new ‘Infinity Display’. Times Square were submerged by the blue ocean and NINEFIVE was filming the video to vividly convey the scenery of the event. We composed and captured the entire street to show its enormous scales.</p>
				</div>
			</div>
            <div class="movie" id="movie">
				<div class="movie_wrap">
					<a href="#" class="btn_vimeo_play"></a>  
					<iframe class="vimeo" id="vimeo_player" src="https://player.vimeo.com/video/217597563?color=65d50c&title=0&byline=0&portrait=0&quality=1080p&player_id=vimeo_player" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>            
				</div>
			</div>
			<div class="feature f01">
                <div class="obj">
					<img src="/images/work/2017_work_ooh-galaxyS8_detail_w-01.jpg" class="web" alt=""/>
					<img src="/images/work/2017_work_ooh-galaxyS8_detail_m-01.jpg" class="mobile" alt=""/>
				</div>	
                <div class="txt">
                    <div class="benefit-title">Shooting Plan</div>
                    <div class="feature-title">in Times Square</div>
                    <div class="feature-desc">The Galaxy S8 - Unbox Your Phone event was held only for 3 hours, so rehearsal and preparation was very important. We’ve visited 12 buildings around Times Square and tried to find the right spot to capture the entire street. We decided to split our team to Steadicam and 360 camera and adjust the route by carefully measuring distances and times. With an organized time schedule, we could successfully capture vibrant moments of the event.</div>
                    <div class="ico_wrap">
                        <div class="ico"><img src="/images/work/2017_work_ooh-galaxyS8_detail_w-02.png" alt=""/></div>
                        <div class="ico"><img src="/images/work/2017_work_ooh-galaxyS8_detail_w-03.png" alt=""/></div>
                        <div class="ico"><img src="/images/work/2017_work_ooh-galaxyS8_detail_w-04.png" alt=""/></div>
                        <div class="ico"><img src="/images/work/2017_work_ooh-galaxyS8_detail_w-05.png" alt=""/></div>
                        <div class="ico"><img src="/images/work/2017_work_ooh-galaxyS8_detail_w-06.png" alt=""/></div>
                    </div>
                </div>
			</div>
            <div class="feature f02">
                <div class="img_wrap">
                    <img src="/images/work/2017_work_ooh-galaxyS8_detail_w-07.jpg" alt=""/>
                    <img src="/images/work/2017_work_ooh-galaxyS8_detail_w-07-1.jpg" alt=""/>
                </div>
                <div class="obj"><img src="/images/work/2017_work_ooh-galaxyS8_detail_w-07-2.png" alt=""/></div>
                <div class="obj_txt">360˚ VR CONTENTS</div>
            </div>
            <div class="feature f03">
                <div class="txt">
                    <div class="benefit-title">Sketch</div>
                    <div class="feature-desc">On March 29th from 5:30 PM to 8:30 PM, the entire New York City’s Times Square were painted blue. During the Galaxy S8 – Unbox Your Phone event, the giant whale was swimming freely between buildings and screens without any boundaries and the Times Square became a deep blue ocean.</div>
                </div>
                <div class="img_wrap">
                    <img src="/images/work/2017_work_ooh-galaxyS8_detail_w-08.jpg" alt=""/>
                </div>
                <div class="obj logo"><img src="/images/work/2017_work_ooh-galaxyS8_detail_w-10.png" alt=""/></div>
            </div>

			<div class="project_info">
				<div class="img_wrap">
					<img src="/images/work/2017_work_ooh-galaxyS8_detail_w-11.jpg" alt=""/>
				</div>
				<div class="info_wrap">
					<div class="valign">
						<div class="middle">
							<ul>
								<li>
									<span class="title">CLIENT</span>
									Cheil Worldwide
								</li>
								<li>
									<span class="title">CREDIT</span>
									Creative Director: Younghee Jo<br/>
                                    Motion Director: Dai-jin Han<br/>
                                    Motion Designer: Minbum Kang<br/>
                                    Producer: Hyeoksik Choi<Br/>
                                    Designers: Kihan Kim, Yujin Kwon
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
		
		</div> <!--template End-->
            <!--Contents Area End-->
    
	</div> <!--container End-->
    </body>
</html>