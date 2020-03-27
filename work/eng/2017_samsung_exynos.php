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
 .work_detail{margin: 0 auto; }
.work_detail > .fDetail .txt { text-align: center; box-sizing: border-box; margin: 0 auto; }
.work_detail > .fDetail .txt h5{ font-family: 'texgyreadventor_bold';  letter-spacing: -0.4px; font-size: 50px; line-height: 60px; font-weight: normal; color: #000; }
.work_detail > .fDetail .txt p.desc{ font-size: 16px; line-height: 26px; letter-spacing: -0.5px; margin-top: 15px;}
.work_detail > .fDetail > img{width: 100%; display: block; height: auto ; }

br.on1440{display: none;}

.work_detail > .feature .mobile_img{ display: none; }
.work_detail > .feature .mobile_img img{ width: 100% ;  display: block;}
.work_detail > .feature .web_img{ display: block; }
.work_detail > .feature .web_img img{ width: 100%;  display: block;}

.work_detail > .feature.intro .txt{ text-align: left; }

.work_detail > .feature.f01 > img{ position: relative;}
.work_detail > .feature.f01 .img_box img{  width: 100% ;}
.work_detail > .feature.f01 .txt h5{ position: absolute; left: 0; right: 0; top: 12vw; }
.work_detail > .feature.f01 img.top_img{ position: absolute; top: 0; left: 0; }

.work_detail > .feature.f01 img.on_1440{ display: none;}

.work_detail > .feature.f01 .txt { position: relative; top: 0; left: 0;  width: 100%; display: table; height: 29.21vw;  padding: 0;}
.work_detail > .feature.f01 .txt .text_box { width: 50%; color: #fff; box-sizing: border-box; z-index: 1; height: 100%; display: table-cell; vertical-align: middle;}

.work_detail > .feature.f01 .txt .text_box p{ font-family: 'texgyreadventor_bold'; font-size: 36px; line-height: 45px; margin-bottom: 20px; margin-top: -15px}

.work_detail > .feature.f01 .txt .text_box ul li{ font-size: 16px; line-height: 30px; letter-spacing: -0.4px; }
.work_detail > .feature.f01 .txt .text_box_left{ padding-left: 3.5%;}
.work_detail > .feature.f01 .txt .text_box_right{ padding-right: 3.5%;}


.work_detail > .feature.f02 .txt{ text-align: left; position: absolute; left: 20%; top: 50%; margin-top: -60px; padding: 0}
.work_detail > .feature.f02 .txt h5{ line-height: 60px;}


.work_detail > .feature.f03{ background-color: #f5f5f5; padding-bottom: 40px;}
.work_detail > .feature.f03 .txt{ padding: 60px;}
.work_detail > .feature.f03 .ico_box { text-align: center; }
.work_detail > .feature.f03 .ico_box img{ width: auto; margin: 0 auto}

.work_detail > .feature.f04 { background-color: #f5f5f5;}
.work_detail > .feature.f04 img{ position: absolute; left: 0; bottom: 0;}
.work_detail > .feature.f04 .txt h5{ line-height: 60px; color: #fff}
.work_detail > .feature.f04 .txt{ position: relative; color: #fff; padding: 10.81vw 0 95.98vw; width: 550px;}

.work_detail > .feature.f05{ background-color: #1428a0;}
.work_detail > .feature.f05 .txt{ color: #fff; max-width: 1100px; padding: 80px 60px 60px;}
.work_detail > .feature.f05 .txt h5{ color:#fff;}

.work_detail > .feature.f06{ background-color: #1428a0;}
.work_detail > .feature.f06 .txt{ color: #fff; width: 100%; max-width: 1030px; padding: 80px 60px 60px;}
.work_detail > .feature.f06 .txt h5{ color:#fff;}

.work_detail > .feature.f07{ background-color: #eaeaea;}
.work_detail > .feature.f07 .txt{ padding: 80px 0 60px;}

.feature{ position: relative;}

@media (max-width: 1600px){
.work_detail > .feature.f04 { background: #000; }
.work_detail > .feature.f04 .txt{ width: 32.37vw; }
.work_detail > .feature.f04 .txt br{ display: none; }


.work_detail > .feature.f01 .txt .text_box p{ font-size: 1.87vw; margin-bottom: 1vw; line-height: 2.77vw; margin-top: -0.93vw;}
.work_detail > .feature.f01 .txt .text_box ul li{ font-size: 14px; line-height: 26px;}
.work_detail > .feature.f03{ padding-bottom: 60px}

}

@media (max-width: 1440px){
.work_detail > .fDetail .txt h5{ font-size: 3.47vw;}
.work_detail > .feature.f01 .txt h5 br.on1440{ display: block;}

.work_detail > .feature.f01 img.on_1920{ display: none;}
.work_detail > .feature.f01 img.on_1440{ display: block;}
.work_detail > .feature.f01 .txt h5{ line-height: 4.16vw; top: 10vw;}

.work_detail > .feature.f02 .txt{ margin-top: -4.16vw;}
.work_detail > .feature.f02 .txt h5{ line-height: 4.16vw;}

.work_detail > .feature.f03 .ico_box img{ width: 62.29vw;}

.work_detail > .feature.f04 .txt h5{ line-height: 7.5vw;}
}

@media (max-width: 1200px) {
.work_detail > .feature.f01 .txt .text_box ul li{ font-size: 12px; line-height: 24px;}

}

@media (max-width: 1080px) {

.work_detail > .feature.f01 .txt .text_box ul li{ font-size: 10px; line-height: 20px;}
}

@media( max-width: 1020px){
.work_detail > .feature.f01 .txt{ padding: 0;}
}

@media (max-width: 800px) {
.work_detail > .feature .web_img{ display: none;}
.work_detail > .feature .mobile_img{ display: block;}

.work_detail > .feature.f01 .txt{ position: absolute; top: 0; left: 0; height: auto;}

.work_detail > .feature.f01 .txt .text_box.text_box_left{ padding: 36.5vw 60px 0 67px; width: 100%; }
.work_detail > .feature.f01 .txt .text_box.text_box_right{ padding: 14.25vw 60px 0 60px; width: 100%;}
.work_detail > .feature.f01 .txt .text_box p{ font-size: 4.5vw; line-height: 5.25vw; margin-bottom: 3vw; margin-top: 0 }
.work_detail > .feature.f01 .txt .text_box ul li{ font-size: 2vw; line-height: 3.75vw;}

.work_detail > .feature.f01 .txt h5{ top: 9.25vw; line-height: 7.5vw}

.work_detail > .feature.f01 img{ position: relative;}


.work_detail > .feature .mobile_img .top_box, .work_detail > .feature .mobile_img .bottom_box{ position: relative;}
.work_detail > .feature .mobile_img .on_480{ display: none;}




.work_detail > .feature.f02 .txt{ left: 0; right: 0; margin: 0; top: 10.12vw; text-align: center;}
.work_detail > .feature.f02 .txt h5{ line-height: 7.5vw; }
.work_detail > .feature.f02 .txt h5 br{ display: none; }


.work_detail > .feature.f04 img{position: relative; }
.work_detail > .feature.f04 .txt{ padding: 11.25vw 40px; width: 100%;}
}

@media (max-width: 800px) {
.work_detail > .fDetail .txt{ padding-left: 40px !important; padding-right: 40px !important; }
.work_detail > .fDetail .txt h5{ font-size: 6.25vw; line-height: 7.5vw; }


.work_detail > .feature.f03 .txt{ padding: 7.5vw 40px;}
.work_detail > .feature.f03 .txt .desc br{ display: none; }


.work_detail > .feature.f05 .txt{ padding: 10vw 40px 7.5vw; }

.work_detail > .feature.f06 .txt{ padding: 10vw 40px 7.5vw; }
.work_detail > .feature.f06 .txt .desc br{ display: none; }

.work_detail > .feature.f07 .txt{ padding: 10vw 0 7.5vw}


}

@media (max-width: 480px){
.work_detail > .fDetail .txt{ padding-left: 30px !important; padding-right: 30px !important; }
.work_detail > .fDetail .txt p.desc{ font-size: 12px; line-height: 22px; letter-spacing: -0.3px;}

.work_detail > .feature.f01 .txt{ padding-left: 0 !important; padding-right: 0 !important;}

.work_detail > .feature.f01 .txt .text_box ul li{ font-size: 10px; line-height: 18px; letter-spacing: -1px; }
.mobile.work_detail > .feature.f01 .txt .text_box ul li{ letter-spacing: -1.4px; }
.work_detail > .feature.f01 .txt .text_box.text_box_left{ padding: 37% 30px 0 35px !important; }
.work_detail > .feature.f01 .txt .text_box.text_box_right{ padding: 20% 30px 0 30px !important; }
.work_detail > .feature .mobile_img .on_800{ display: none;}
.work_detail > .feature .mobile_img .on_480{ display: block;}

}

@media (max-width: 410px){
.work_detail > .feature.f01 .txt .text_box.text_box_left{ padding: 35.5% 30px 0 35px !important; }
.work_detail > .feature.f01 .txt .text_box.text_box_right{ padding: 18.5% 30px 0 30px !important; }
}

@media (max-width: 380px){

.work_detail > .feature.f01 .txt .text_box.text_box_left{ padding: 35.5% 30px 0 35px !important; }
.work_detail > .feature.f01 .txt .text_box.text_box_right{ padding: 17.5% 30px 0 30px !important; }

}

@media (max-width: 350px){
.work_detail > .feature.f01 .txt .text_box.text_box_left{ padding: 34.5% 30px 0 35px !important; }
.work_detail > .feature.f01 .txt .text_box.text_box_right{ padding: 16.5% 30px 0 30px !important; }
}

@media (max-width: 320px){
.work_detail > .feature.f04 .txt h5{ font-size: 20px; line-height: 24px;}
.work_detail > .fDetail .txt h5{ font-size: 20px; line-height: 24px;}


.work_detail > .feature.f01 .txt .text_box.text_box_left{ padding: 110px 30px 0 35px !important; }
.work_detail > .feature.f01 .txt .text_box.text_box_right{ padding: 54px 30px 0 30px !important; }

.work_detail > .feature.f01 .txt .text_box p{ font-size: 14.5px; line-height: 17px; margin-bottom: 10px }
.work_detail > .feature.f01 .txt h5{ font-size: 20px; top: 30px; line-height: 24px}


.work_detail > .feature.f02 .txt{ top: 32px; }
.work_detail > .feature.f02 .txt h5{ line-height: 24px; }


.work_detail > .feature.f03 .txt{ padding: 24px 30px;}
.work_detail > .feature.f03 .ico_box img{ width: 200px}

.work_detail > .feature.f04 .txt{ padding: 36px 30px; }
.work_detail > .feature.f05 .txt{ padding: 32px 30px 24px;}

.work_detail > .feature.f06 .txt{ padding: 32px 30px 24px;}

.work_detail > .feature.f07 .txt{ padding: 32px 30px 24px;}
}

    </style>

    <body>
<!--container Start-->
	<div class="container">

            <!--Contents Area Start-->
            <div class="contents work_detail en">
 
			
			<div class="feature intro">
				<div class="txt">
					<h3 class="title">SAMSUNG EXYNOS</h3>
					<p class="desc">Exynos is mobile application processor manufactured by Samsung Electronics and it is used in various smartphones and IoT devices as a core processor. NINEFIVE was maintaining Exynos brand site since 2014, and worked on the renewal project with the aim of building a site where its innovative technologies can stand out and to provide a seamless experience of Samsung. We’ve defined the design concept with ‘Simple, Bold, Trusty’ and redesigned the whole site from scratch with a new Exynos logo. With mobile first design, a new Exynos brand site is built on responsive website to provide a constant experience on various devices.</p>
				</div>
				<div class="img_wrap">
					<img src="/images/work/2017_work_samsung_exynos_intro-01.jpg" alt="" />
				</div>
			</div>
			<div class="feature f01 fDetail">
				<div class="web_img img_box">
					<img src="/images/work/2017_work_samsung_exynos_detail_w-01.jpg" class="top_img on_1920" alt="" />
					<img src="/images/work/2017_work_samsung_exynos_detail_1440-01.jpg" class="top_img on_1440" alt="" />
					<div class="txt">
						<div class="text_box text_box_left">
							<p>AS IS</p>
							<ul>
								<li>The golden ratio layout</li>
								<li>Separate sites for mobile</li>
								<li>Processor based contents</li>
								<li>70% mobile optimization</li>
								<li>OFF TREND</li>
							</ul>
						</div>
						<h5>RENEWAL<br class="on1440"/> POINT</h5>
						<div class="text_box text_box_right">
							<p>TO BE</p>
							<ul>
								<li>Simple design and layout</li>
								<li>Responsive web</li>
								<li>Technical based contents</li>
								<li>100% mobile optimization</li>
								<li>ON TREND</li>
							</ul>
						</div>
					</div>
					<img src="/images/work/2017_work_samsung_exynos_detail_w-02.jpg" alt="" />
				</div>

				<div class="mobile_img img_box">
					<div class="top_box">
						<img src="/images/work/2017_work_samsung_exynos_detail_m-01.jpg" class="on_800" alt="" />
						<img src="/images/work/2017_work_samsung_exynos_detail_480-01.jpg" class="on_480" alt="" />
						<div class="txt">
							<h5>RENEWAL POINT</h5>
							<div class="text_box text_box_left">
								<p>AS IS</p>
								<ul>
									<li>The golden ratio layout</li>
									<li>Separate sites for mobile</li>
									<li>Processor based contents</li>
									<li>70% mobile optimization</li>
									<li>OFF TREND</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="bottom_box">
						<img src="/images/work/2017_work_samsung_exynos_detail_m-02.jpg" class="on_800" alt="" />
						<img src="/images/work/2017_work_samsung_exynos_detail_480-02.jpg" class="on_480" alt="" />
						<div class="txt">
							<div class="text_box text_box_right">
								<p>TO BE</p>
								<ul>
									<li>Simple design and layout</li>
									<li>Responsive web</li>
									<li>Technical based contents</li>
									<li>100% mobile optimization</li>
									<li>ON TREND</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feature f02 fDetail">
				<div class="web_img">
					<img src="/images/work/2017_work_samsung_exynos_detail_w-03.jpg" alt="" />
				</div>
				<div class="mobile_img">
					<img src="/images/work/2017_work_samsung_exynos_detail_m-03.jpg" alt="" />
				</div>
				<div class="txt">
					<h5>DESIGN<br/>CONCEPT</h5>
				</div>
			</div>
			<div class="feature f03 fDetail">
				<div class="txt">
					<h5>Brand Logo</h5>
					<p class="desc">The new Exynos logo complies with the Samsung’s brand guideline to provide the seamless brand experience. Exynos logo is designed simple and bold with the new Samsung word mark and inherited the identity of the original logo by maintaining an arc penetrating ‘Exynos’.</p>
				</div>
				<div class="ico_box">
					<img src="/images/work/2017_work_samsung_exynos_detail_w-04.png" alt="" />
				</div> 
			</div> 
			<div class="feature f04 fDetail">
				<div class="web_img">
					<img src="/images/work/2017_work_samsung_exynos_detail_w-05.png" alt="" />
				</div>
				<div class="txt">
					<h5>Responsive Web</h5>
					<p class="desc">The Exynos brand site is designed as a responsive website to provide a constant experience on various devices. To enhance the user experience, we optimized the website for mobile devices and place the essence of the Exynos on the main page for the fast access.</p>
				</div>
				<div class="mobile_img">
					<img src="/images/work/2017_work_samsung_exynos_detail_m-05.jpg" alt="" />
				</div>
			</div>
			<div class="feature f05 fDetail">
				<div class="txt">
					<h5>Key Visual</h5>
					<p class="desc">In the Key Visual area, we used lifestyle and simple infographic to announce Exynos’ key events and innovations. The carousel applied in the Key Visual gives a flexibility of expansion.</p>
				</div>
				<img src="/images/work/2017_work_samsung_exynos_detail_w-06.jpg" alt="" />
			</div> 
			<div class="feature f06 fDetail">			
				<div class="txt">
					<h5>Feature Design</h5>
					<p class="desc">Exynos delivers the best user experience through various innovations. Simple and bold infographics used in contents implies the summary of the contents to support better understanding of the technology. It also contains the motions and videos to draw the user’s attention.</p>
				</div>
				<img src="/images/work/2017_work_samsung_exynos_detail_w-07.jpg" alt="" />
			</div>
			<div class="feature f07 fDetail">
				<div class="txt">
					<h5>Page Design</h5>
				</div>
				<img src="/images/work/2017_work_samsung_exynos_detail_w-08.jpg" alt="" />
			</div>

			<div class="project_info">
				<div class="img_wrap">
					<img src="/images/work/2017_work_samsung_exynos_info.jpg" alt=""/>
				</div>
				<div class="info_wrap">
					<div class="valign">
						<div class="middle">
							<ul>
								<li>
									<span class="title">CLIENT</span>
									Samsung Exynos
								</li>
								<li>
									<span class="title">CREDIT</span>
									Creative Director : Younghee Jo<br/>
									Producer : Moonsoo Kim<br/>
									UX Planner : Juhyun In<br/>
									Designer : Yujin Kwon, Kihan Kim, Jisun Cha, Seunga Lee, Inhye Han<br/>
									Motion Grapher : Dai-jin Han, Minbum Kang<br/>
									Developer: Eunseop Shin, Sujung Lim, Hyewon Hong
								</li>
							   <!-- <li class="app_download"> 
									<div class="android"><a href="#">ANDROID DOWNLOAD</a></div>
									<div class="ios"><a href="#">iOS DOWNLOAD</a></div>
								</li>-->
								<!-- launch the site 버튼 사용 시, 주석 제거. -->
								<li class="launch_site">
									<a href="http://www.samsung.com/semiconductor/minisite/Exynos/index.html" target="_blank">Launch the Site</a>
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