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
        .work_detail .feature .txt .benefit-title { font-family: 'texgyreadventor_bold'; letter-spacing: -0.6px; font-size: 70px; line-height: 80px; }
        .work_detail .feature .txt .feature-title { font-family: 'texgyreadventor_Regular'; font-size: 30px; line-height: normal; }
        .work_detail .feature .txt .feature-desc { font-family: 'nanumgothic', 'Dotum', '돋움'; font-size: 14px; line-height: 26px; letter-spacing: -0.2px; }

        .work_detail .f01 .txt { box-sizing: content-box; width: 752px; padding: 9.5vw 28.04vw 4.7vw 13.5vw; }
        .work_detail .f01 .txt { color: #000; }
        .work_detail .f01 .txt .feature-desc { margin-top: 1.68vw; }

        .work_detail .f01 .txt .ico_wrap { margin-top: 4.1vw; }
        .work_detail .f01 .txt .ico_wrap:after { content: " "; display: block; clear: both; }
        .work_detail .f01 .txt .ico_wrap .ico { float: left; padding-right: 15px; background: url('/images/work/2017_work_ooh-galaxyS8_detail_arrow.png') no-repeat; background-position: 98% center; }
        .work_detail .f01 .txt .ico_wrap .ico:last-child { padding: 0; background: none; }

        .work_detail .f02 .obj { top: auto; bottom: 0; }
        .work_detail .f02 .obj_txt { color: #fff; position: absolute; bottom: 4.6vw; width: 100%; text-align: center; font-size: 70px; text-transform: uppercase; font-family: 'texgyreadventor_bold'; letter-spacing: -0.6px; line-height: normal; }

        .work_detail .f03 { background: #f8f8f8; margin-top: -1px; }
        .work_detail .f03 .txt { text-align: center; color: #000; max-width: 850px; margin: 0 auto; padding-top: 0; padding-bottom: 75px; }
        .work_detail .f03 .txt .benefit-title { font-size: 91px; line-height: normal; }
        .work_detail .f03 .txt .feature-desc { margin-top: 0; font-size: 14px; line-height: 26px; }
        .work_detail .f03 .obj { top: auto; bottom: 8.31vw; text-align: center; }
        .work_detail .f03 .obj img { width: auto; display: inline-block; }

        @media (max-width: 1440px){ 
            .work_detail .feature .txt .benefit-title { font-size: 4.86vw; line-height: 5.55vw;}
            .work_detail .feature .txt .feature-title { font-size: 2.08vw; }
            .work_detail .f01 .txt{ padding: 9.5vw 24.5vw 4.7vw 0; box-sizing: border-box; width: 1020px; margin: 0 auto; }
            .work_detail .f01 .txt .feature-desc { margin-top: 2.43vw; }
            .work_detail .f01 .txt .ico_wrap .ico img {width: 8.2vw;}

            .work_detail .f02 .obj_txt { bottom: 4.3vw; font-size: 4.86vw; }

            .work_detail .f03 .txt { padding-bottom: 5.13vw; }
            .work_detail .f03 .txt .benefit-title { font-size: 6.31vw; line-height: normal; }

            .work_detail .f03 .obj img { width: 21.25vw; }
        
        }

        @media (max-width: 1300px){ 
            .work_detail .f03 .txt { width: auto; padding-left: 0; padding-right: 0;; } 

            .work_detail .f01 .txt{ width: 920px; }
            .work_detail .f01 .txt .feature-desc { margin-top: 22px;}
            .work_detail .f01 .txt .ico_wrap { margin-top: 25px;}
            .work_detail .f01 .txt .ico_wrap .ico {padding-right: 11px; background-size: 5px 7px; }
            .work_detail .f01 .txt .ico_wrap .ico img {width: 98px}
        
        }

        @media (max-width: 1023px){ 
            .work_detail .feature .txt .benefit-title { font-size: 40px; line-height: 42px;}
            .work_detail .feature .txt .feature-title { font-size: 20px; line-height: 30px; }
            .work_detail .f01 .txt { padding: 50.92vw 60px 9.25vw 60px; width: 100%;}
            .work_detail .f01 .txt .ico_wrap .ico {padding-right: 8px; background-size: 3px 5px; }
            .work_detail .f01 .txt .ico_wrap .ico img {width: 12.25vw;}

            .work_detail .f02 .obj_txt { bottom: 5.6vw; font-size: 30px; line-height: 32px; }

            .work_detail .f03 .txt { padding-left: 60px; padding-right: 60px; width: 100%;}
            .work_detail .f03 .txt .feature-desc { margin-top: 10px; }
        
        }

        @media (max-width: 480px){ 
            .work_detail .feature .txt .benefit-title { font-size: 28px; line-height: 30px;}
            .work_detail .feature .txt .feature-title { font-size: 18px; line-height: 28px; }
            .work_detail .feature .txt .feature-desc { font-size: 12px; line-height: 22px; letter-spacing: -0.3px; }
            .work_detail .f01 .txt { padding-left: 40px; padding-right: 40px; }
            .work_detail .f01 .txt .ico_wrap .ico {padding-right: 8px; background-size: 3px 5px; background-position: 96% center; }
            .work_detail .f01 .txt .ico_wrap .ico img {width: 12.25vw;}

            .work_detail .f02 .obj_txt { font-size: 20px; line-height: 22px; }

            .work_detail .f03 .txt { padding-left: 40px; padding-right: 40px; }
        
        }

        @media (max-width: 400px){ 
            .work_detail .f01 .txt { padding-left: 20px; padding-right: 20px; }

            .work_detail .f03 .txt { padding-left: 20px; padding-right: 20px; }
        
        }



    </style>

    <body>
<!--container Start-->
	<div class="container">
            <div class="contents work_detail">

			
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">Galaxy S8 - Times Square Takeover</h3>
					<p class="desc">삼성은 뉴욕 타임스퀘어에서 Galaxy S8 제품을 공개하는 Unbox Your Phone 행사를 진행했습니다. 이번 행사는 타임스퀘어 거리의 12개 건물을 자연스럽게 연결한 하나의 크리에이티브를 선보였습니다. 거대한 고래가 건물 사이를 자유롭게 유영하는 강렬한 퍼포먼스로 Galaxy S8의 ‘Infinity Display’를 표현했습니다. 나인파이브는 푸른 바다로 물들은 타임스퀘어 현장을 생생하게 전달하기 위해 영상 촬영을 진행했습니다. 한 화면에 거리 전체를 보여 주는 구도로 Galaxy S8 - Unbox Your Phone의 특징을 고스란히 담았습니다. 또한 일반 영상뿐만 아니라 360 영상을 촬영하여, VR 기기를 통해 실제 뉴욕 타임스퀘어에 있는 듯한 생동감 넘치는 현장감을 전달하고자 하였습니다.</p>
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
                    <div class="feature-desc">Galaxy S8 - Unbox Your Phone 행사는 단 하루, 3시간만 진행되는 짧은 행사였습니다. 이 시간 동안 타임스퀘어 거리 전체를 촬영하기 위해서는 탄탄한 사전 준비가 필요했습니다. 타임스퀘어 거리 전체를 수 놓은 Galaxy S8 - Unbox Your Phone 행사의 특성을 살리기 위해, 한 장면에 많은 옥외 광고를 담을 수 있는 위치를 찾는데 주력했습니다. 또한 12개 건물간의 이동 거리를 체크하고, 촬영팀을 포토그래퍼와 스태디캠, VR 카메라 파트로 구분하여 서로의 동선이 겹치지 않도록 조정하였습니다. 짜임새 있는 타임 테이블을 통해 주어진 시간 내에 타임스퀘어의 현장감을 생생하게 담을 수 있었습니다.</div>
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
                    <div class="feature-desc">현지 시간으로 3월 29일 오후 5시 30분부터 3시간동안 진행된 Galaxy S8 - Unbox Your Phone 행사는 타임스퀘어를 파랗게 물들였습니다. 건물과 화면의 경계 없이 자유롭게 헤엄치는 거대한 고래의 모습은 마치 푸른 바다 속에 들어가 있는 듯한 착각을 일으키는 장관을 이루었습니다.</div>
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
		</div>
		</div>
    </body>
</html>