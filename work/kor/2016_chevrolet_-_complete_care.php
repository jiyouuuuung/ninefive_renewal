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
        .work_detail .f02 { background: #fcc12f; }
        .work_detail .f02 .txt.sub .desc.sub { color: #000;   }
        .work_detail .f02 .txt.sub .ico_wrap li{ display: inline-block; width: 33.333333%; box-sizing: border-box;  top:0; text-align: center; padding: 0 40px; }
        .work_detail .f02 .txt.sub .ico_wrap li:nth-child(2) { position: absolute;  left: 33.333333%; }
        .work_detail .f02 .txt.sub .ico_wrap li:nth-child(3) { position: absolute;  left: 66.666666%; }

        .work_detail .f02 .txt.sub .ico_wrap li p{font-family:'nanumgothic', 'Dotum', '돋움'; font-weight:bold; color:#000; margin-top:0; font-size:14px; line-height:26px; letter-spacing:-0.2px;}
        .work_detail .f02{background:url(/images/work/chevrolet_detail02_bg_10.jpg)}
        .work_detail .f02 .txt.sub{ text-align: center; padding:60px 0 60px;width:1020px;}
        .work_detail .f02 .txt.sub > img{width:100%;max-width:514px;}
        .work_detail .f02 .txt.sub .ico_wrap{margin-top:55px;position: relative; height: auto; text-align: left;}
        .work_detail .f02 .txt.sub .ico_wrap li img{padding-bottom:18px;}
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
            
            .work_detail .f03 .txt .title.sub img{width:50%;}
            .work_detail .f03 .txt{position: relative; padding:67px 60px; height: auto; background:url('/images/work/chevrolet_detail03_10_m_bg.jpg') no-repeat; background-size: cover;}
        }
        @media (max-width: 639px) {
            .work_detail .f03 .txt{padding:42px 40px;}
            .work_detail .f02 .txt.sub .ico_wrap li:first-child img{max-width:76px;}
            .work_detail .f02 .txt.sub .ico_wrap li:nth-child(2) img{max-width:103px;}
            .work_detail .f02 .txt.sub .ico_wrap li:last-child img{max-width:118px;}
            .work_detail .f02 .txt.sub .ico_wrap li p{font-size:12px;line-height:22px;letter-spacing:-0.3px;}
        }
        @media (max-width: 400px) {
            .work_detail .f03 .txt{padding:42px 20px}
        }
    </style>

    <body>
<!--container Start-->
	<div class="container">

            <!--Contents Area Start-->
            <div class="contents work_detail">

			
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">CHEVROLET – <span style="white-space:nowrap">COMPLETE CARE</span></h3>
					<p class="desc">나인파이브는 쉐보레 고객 사후 관리 서비스 ‘쉐보레 컴플리트 케어’의 페이스북 크리에이티브를 제작하였습니다. ‘보이는 라디오’를 컨셉으로 제작된 페이스북 TVC와 Canvas는 간결한 자막과 라인 드로잉 애니메이션으로 쉐보레 고객의 사연을 전개하였습니다. 페이스북 TVC의 라인 드로잉 애니메이션은 고객의 사연이 친근하게 다가갈 수 있게 분위기를 조성하고, 상황이 묘사된 영상의 장면들을 하나의 스토리로 매끄럽게 이어주는 중요한 역할을 하였습니다. 페이스북 Canvas는 기존 광고 틀에서 벗어나 이미지와 동영상을 보다 자유롭게 사용할 수 있는 새로운 유형의 크리에이티브로 페이지 상단에서 하단으로 자연스럽게 이어지는 스토리텔링과 차량 점검 팁으로 구성하여 쉐보레 컴플리트 케어가 고객을 생각하는 마음을 효과적으로 전달하였습니다.</p>
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
								<p>기존 TVC에서 불필요한<br> 부분을 과감히 편집하여<br> 핵심 내용만 간결하게 전달</p>
							</li>
							<li>
								<img src="/images/work/chevrolet_detail01_ico2_10.png" alt=""/>
								<p>페이스북 매체 특성을 고려하여<br> 간결한 자막과 인포그래피를 활용한<br> 시각적인 스토리텔링</p>
							</li>
							<li>
								<img src="/images/work/chevrolet_detail01_ico3_10.png" alt=""/>
								<p>TVC 영상에<br> 디자인 컨셉을 추가하여<br> 주목도를 높일 수 있는 영상으로 재구성</p>
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
                    <p class="desc sub">페이스북 캔버스는 이미지와 동영상을 단순 배치하는 기존 광고 형식에서 벗어나 다양한 미디어를 자유롭게 사용할 수 있는 새로운 유형의 인터랙티브 크리에이티브로 최근 각광받는 페이스북 서비스입니다. <br />사용자 주목성을 높이기 위해 콜라주 컨셉의 애니메이션 적용하고, 쉐보레 고객의 사연과 함께 여름철 차량 점검 팁을 인터랙티브 콘텐츠로 구성하여 브랜드 이미지를 제고하였습니다.</p>
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