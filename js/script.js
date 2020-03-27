/*
* 작성자 : 이상오(lso@ninefive.com)
* 주요기능
* 1. 헤더와 푸터는 html 로드하여 처리
* 2. 맵은 한글일 때는 네이버맵, 영문일때는 구글맵을 로드, api javascript는 동적 로드
* 3. 언어전환은 url과 sessionStorage를 통해 처리됨.
*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 전역 변수
var nafa = {};

nafa.ninefiveDomain = "http://www.ninefive.com/";
//nafa.ninefiveDomain = "http://127.0.0.1:3000/";

nafa.consoleLogView = false;

nafa.useTouch = false;
nafa.windowHeight = 0;
nafa.windowWidth = 0;
//nafa.UILang = ["KR", "EN", "CN"];
nafa.UILang = ["KR", "EN"];

function functionLog(log)
{
	if(nafa.consoleLogView)
		console.log(log);
};

function prependZero(num, len) {
    while(num.toString().length < len) {
        num = "0" + num;
    }
    return num;
}

;

function getScrollBarWidth() {
	var inner = document.createElement('p');
	inner.style.width = "100%";
	inner.style.height = "200px";

	var outer = document.createElement('div');
	outer.style.position = "absolute";
	outer.style.top = "0px";
	outer.style.left = "0px";
	outer.style.visibility = "hidden";
	outer.style.width = "200px";
	outer.style.height = "150px";
	outer.style.overflow = "hidden";
	outer.appendChild (inner);

	document.body.appendChild (outer);
	var w1 = inner.offsetWidth;
	outer.style.overflow = 'scroll';
	var w2 = inner.offsetWidth;
	if (w1 == w2) w2 = outer.clientWidth;

	document.body.removeChild (outer);

	return (w1 - w2);
};

// 제이쿼리 이벤트 바인딩시 this 를 넘겨 스코프를 확장하기위한 플러그인 2017.06.08
jQuery.extend({
   scope : function(fn, scope)
    {
        return function()
        {
            return fn.apply(scope, arguments);
        }
    }
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 다국어 처리
nafa.initLang = function initLang(){

    var url = window.location.href;
    var countKo = (url.match('\\/ko\\/') || []).length;
    var countEn = (url.match('\\/en\\/') || []).length;
	var countCn = (url.match('\\/cn\\/') || []).length;

    if(countKo > 0){
        //sessionStorage.clear();
        sessionStorage.setItem("lang", "ko");
    }else if(countEn > 0){
        //sessionStorage.clear();
        sessionStorage.setItem("lang", "en");
    }else if(countCn > 0){
        //sessionStorage.clear();
        sessionStorage.setItem("lang", "cn");
    }else{
        // 세션 세팅
        var sessionLang = sessionStorage["lang"];

        if(sessionLang === undefined || sessionLang === null || sessionLang === "" ){
            // 한글 세팅
            //sessionStorage.clear();
            sessionStorage.setItem("lang", "ko");
        }
    }


    // UI 세팅
    functionLog("현재 언어: " + nafa.getLang());

	// body 세팅
	if(nafa.getLang() === "en")
		$('body').addClass('en');
	else if(nafa.getLang() === "ko")
		$('body').addClass('ko');
	else if(nafa.getLang() === "cn")
		$('body').addClass('cn');
}

nafa.getLang = function() {
    return sessionStorage["lang"];
};

nafa.getUILang = function() {
	var ln;
	switch (sessionStorage["lang"]) {
		case "ko":
			ln = "KR";
			break;
		case "en":
			ln = "EN";
			break;
		case "cn":
			ln = "CN";
			break;
		default:

	}
	return ln;
};

nafa.setLangUI = function() {
    $(".header_wrap .header .header_inner .util .language a").text(nafa.getUILang());

	$(".header_wrap .header .header_inner .util .language ul").empty();
	$(".header_wrap .header .header_inner .util .language ul").append(
		"<li>" + nafa.getUILang() + "</li>"
	);

	for (var i = 0; i < nafa.UILang.length; i++) {
		if(nafa.UILang[i] !== nafa.getUILang()){
			$(".header_wrap .header .header_inner .util .language ul").append(
				"<li>" + nafa.UILang[i] + "</li>"
			);
		}
	}

};

nafa.setLang = function(lang){
	var destLang;

	switch (lang) {
		case "KR":
			destLang = "ko";
			break;
		case "EN":
			destLang = "en";
			break;
		case "CN":
			destLang = "cn";
			break;
		default:
	}

	var curLang = nafa.getLang();
	sessionStorage.setItem("lang", destLang);

    var url = window.location.href;
    var count = (url.match('\\/' + curLang + '\\/') || []).length;

    if(count > 0){
        location.replace(url.replace('/' + curLang + '/', '/' + destLang + '/'));
    }else{
        refresh();
    }

};

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function getPathFromUrl(url) {
  return url.split(/[?#]/)[0];
}

function refresh(){
    window.location.replace(getPathFromUrl(window.location.href));
}

nafa.check_allDevice = function check_allDevice(){
	var mobileKeyWords = new Array('iPhone', 'iPad', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson'); //160625 device 목록에 ipad 추가
	var device_name = '';
	for (var word in mobileKeyWords){
		if (navigator.userAgent.match(mobileKeyWords[word]) != null){
			device_name = mobileKeyWords[word];
			break;
		}
	}

	return device_name;
}

$(window)
    .load(onScriptLoad)
    .resize(onScriptResize)
	.scroll(onScriptScroll);
function onScriptLoad(){
    nafa.initLang();
	
	nafa.useTouch = nafa.check_allDevice() !== "" ? true : false;

    onScriptResize();

    header.init();
    footer.init();
	
	if(check_allDevice() != "")
		$(".container").addClass("device");
	else
		$(".container").addClass("pc");
    

	$("body").addClass(checkBrowser());
}

var loadHeight = 0;
function onScriptResize(){
    //nafa.windowWidth = $(window).width();
	nafa.windowWidth  = window.innerWidth;
    nafa.windowHeight = Math.ceil($(window).height())+1;

    footer.resize();
	ProjectInquiry.resize();
	
	if (nafa.useTouch && loadHeight == 0)
	{
		loadHeight = $(window).height();
	}
}

var scrollTop = 0;
var oldScrollTop = 0;
var scrollIng;
var scrollDisplay;
function onScriptScroll()
{
	scrollTop = $(window).scrollTop();
	console.log("scrollTop : " + scrollTop);
	if (nafa.useTouch)
	{
		clearTimeout(scrollIng);
		scrollIng = setTimeout(function(){
			oldScrollTop = $(window).scrollTop();
			if (scrollTop == oldScrollTop && !$(".nav .nav_inner").hasClass("hover"))
			{
				$(".nav").css("display","none");
				clearTimeout(scrollDisplay);
				scrollDisplay = setTimeout(function(){
					$(".nav").css("display","block");	
				},1);
			}
		},100);
	}
}

// base - header
var header = {
	isCancelAnim : false,

    init : function(){
        var THIS = this;

        // append html
        $.ajax({
			type: "GET",
			url: nafa.ninefiveDomain + nafa.getLang() + "/base/header.html",
			dataType: "html",
			//success: THIS.workList_parseXML,
            success: function(data){
                //console.log(data);

                $(".header_wrap").append(data);

				ProjectInquiry.init();

                THIS.bindEvent();

                nafa.setLangUI();

                // 페이지별 분기
                $(".nav .nav_inner ul li a").removeClass('active');
                $(".nav .nav_inner .home_btn a").removeClass('active');
                var url = window.location.href;

                if((url.match('\\/work\\/') || []).length > 0){

                    $(".nav .nav_inner ul li:eq(0) a").addClass('active');

                }else if((url.match('\\/news\\/') || []).length > 0){

                    $(".nav .nav_inner ul li:eq(2) a").addClass('active');

                }else if((url.match('\\/about\\/') || []).length > 0){

                    $(".nav .nav_inner ul li:eq(1) a").addClass('active');

                }else if((url.match('\\/career\\/') || []).length > 0){

                    $(".nav .nav_inner ul li:eq(3) a").addClass('active');

                }else{
                    // home
                    $(".nav .nav_inner .home_btn a").addClass('active');
                    THIS.startAnimation();
                }

				$(".header_wrap .header .header_inner .project_in a img").eq(0).attr("src", nafa.ninefiveDomain + "images/main/header_project_txt.png");
				$(".header_wrap .header .header_inner .project_in a img").eq(1).attr("src", nafa.ninefiveDomain + "images/main/header_project_txt_hover.png");
            },
			error:function(request,status,error){
				//functionLog("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				functionLog("code:"+request.status+"\n"+"error:"+error);
			}
		});
    },

    bindEvent : function(){
        var THIS = this;

        if(nafa.useTouch){
            $(".nav .nav_inner .close_btn").on("touchstart", function(e){

                THIS.closeMenu();

                e.preventDefault();

				return false;
            });

            $(".nav .nav_inner .nf_badge").on("touchstart", function(e){
                THIS.scaleUp();

                $(".nav .nav_inner").addClass('hover');
                $(".nav .nav_inner .nf_badge").css({display:"none"});

				return false;
            });

        }else{

            $(".nav .nav_inner .close_btn").click(function(){

                THIS.closeMenu();

                return false;
            });

            $(".nav .nav_inner .nf_badge").click(function(e){
                THIS.scaleUp();

                $(".nav .nav_inner").addClass('hover');
                $(".nav .nav_inner .nf_badge").css({display:"none"});

				return false;
            });

            $(".nav .nav_inner").mouseenter(function(e){
				THIS.isCancelAnim = true;
				THIS.scaleUp();

				THIS.initLogo();

                $(".nav .nav_inner").addClass('hover');
                $(".nav .nav_inner .nf_badge").css({display:"none"});

				// 메뉴 투명도 애니
				$(".nav .nav_inner ul li a").stop().css({opacity:0});
				$(".nav .nav_inner ul li a").animate({opacity:1},150);
				$(".nav .nav_inner .home_btn a").stop().css({opacity:0});
				$(".nav .nav_inner .home_btn a").animate({opacity:1},150);


                return false;
            });
            $(".nav .nav_inner").mouseleave(function(e){

				THIS.closeMenu();

                return false;
            });
        }

        // 네비 4메뉴
        $(".nav .nav_inner ul li a").click(function(){
            sessionStorage.setItem("selectedNewsId", "");

            var navIdx = $(this).parent().index();
            var lang = nafa.getLang();

            switch(navIdx){
                case 0:
                    location.href = nafa.ninefiveDomain + lang + "/work/";
                    break;
                case 1:
                    location.href = nafa.ninefiveDomain + lang + "/about/";
                    break;
                case 2:
                    location.href = nafa.ninefiveDomain + lang + "/news/";
                    break;
                case 3:
                    location.href = nafa.ninefiveDomain + lang + "/career/";
                    break;

            }

            return false;
        });

        // 네비 홈
        $(".nav .nav_inner .home_btn a").click(function(){

            sessionStorage.setItem("selectedNewsId", "");

            location.href = nafa.ninefiveDomain;

            return false;
        });

        // Hover
        $(".nav .nav_inner ul li a").hover(function(){
            if(!nafa.useTouch)
                $(this).addClass('hover');
        }, function(){
            if(!nafa.useTouch)
                $(this).removeClass('hover');
        });

        $(".nav .nav_inner .home_btn a").hover(function(){
            if(!nafa.useTouch)
                $(this).addClass('hover');
        }, function(){
            if(!nafa.useTouch)
                $(this).removeClass('hover');
        });

        $(".nav .nav_inner .close_btn a").hover(function(){
            if(!nafa.useTouch)
                $(this).addClass('hover');
        }, function(){
            if(!nafa.useTouch)
                $(this).removeClass('hover');
        });

		// 언어선택 열기
		if(nafa.useTouch){
			$(".header .header_inner .util > div.language .select_txt").click(function(){
				THIS.openLang();
				return false;
			});

			// 언어선택 언포커스
			$(document).click(function () {

				THIS.closeLang();
			});
		}else{
			$(".header .header_inner .util > div.language").hover(function(){
				THIS.openLang();
			}, function(){
				THIS.closeLang();
			});

			$(document).on('mouseenter', ".header .header_inner .util > div.language ul li", function(e){
				$(this).addClass("active");
			});

			$(document).on('mouseleave', ".header .header_inner .util > div.language ul li", function(e){
				$(this).removeClass("active");
			});
		}

		// 언어선택
		$(document).on('click', ".header .header_inner .util > div.language ul li", function(e){
			if($(this).text() === "CN"){
				alert("중문 사이트는 준비중입니다. 감사합니다. \n中文网站正在准备中。 谢谢");
				THIS.closeLang();
				return false;
			}

			if( $(this).text() !== nafa.getUILang()){
				nafa.setLang($(this).text());
			}
			THIS.closeLang();
			return false;
		});

    },

	openLang : function(){
		$(".header .header_inner .util > div.language ul").css("display", "block");
		// $(".header .header_inner .util > div.language ul li").each(function(){
		// 	if($(this).text() === nafa.getUILang()){
		// 		$(this).addClass("active");
		// 	}
		// });
	},

	closeLang : function(){
		$(".header .header_inner .util > div.language ul").removeAttr("style");
		$(".header .header_inner .util > div.language ul li").map(function(){
			$(this).removeClass("active");
		});
	},

    closeMenu : function(){
        var THIS = this;

        $(".nav .nav_inner").removeClass('hover');
        $(".nav .nav_inner .nf_badge").css({display:"block"});

        setTimeout(function(){
            THIS.scaleDownAnimation();
        },100);
    },

	initLogo : function(){
        $(".nav .nav_inner .nf_badge").removeAttr('style');
		$(".nav .nav_inner.nf_badge .logo").removeAttr('style');
        $(".nav .nav_inner ul li a").stop().removeAttr('style');
        $(".nav .nav_inner .home_btn a").removeAttr('style');
        $(".nav .nav_inner .close_btn a").removeAttr('style');
    },

    startAnimation : function(){
        if(nafa.windowWidth < 1024 || $(".container").hasClass("device")){
            this.startAnimationMobile();
            return;
        }

        var THIS = this;
        var animationDuration = 300;
        var animationTerm = 0;

        // 애니메이션 초기화
        $(".nav").css({bottom:-$(".nav").height()+"px"});

        THIS.scaleUp();

        // UI 초기화
        $(".nav .nav_inner .nf_badge").css({opacity:0});
        $(".nav .nav_inner ul li a").css({opacity:0});
        $(".nav .nav_inner .home_btn a").css({opacity:0});


        // 애니메이션
        $(".nav").animate({bottom:"0px"}, animationDuration, function(){


            ////////////////////////////////////////////////////////////////////////////////////////////////////
        });

		setTimeout(function(){
			if(THIS.validateAnim()){

				$(".nav .nav_inner ul li a").eq(0).css({transition: "all 0.4s ease-out", opacity:1, background:"#65d50c", color:"#000"});
				setTimeout(function(){
					$(".nav .nav_inner ul li a").eq(0).removeAttr('style');
				},animationDuration + 100);

			}
		},  400 + animationDuration * 1);

		setTimeout(function(){
			if(THIS.validateAnim()){

				$(".nav .nav_inner ul li a").eq(1).css({transition: "all 0.4s ease-out", opacity:1, background:"#65d50c", color:"#000"});
				setTimeout(function(){
					$(".nav .nav_inner ul li a").eq(1).removeAttr('style');
				}, animationDuration + 100);

			}
		}, 400 + animationDuration * 2);

		setTimeout(function(){
			if(THIS.validateAnim()){

				$(".nav .nav_inner ul li a").eq(3).css({transition: "all 0.4s ease-out", opacity:1, background:"#65d50c", color:"#000"});
				setTimeout(function(){
					$(".nav .nav_inner ul li a").eq(3).removeAttr('style');
				}, animationDuration + 100);

			}
		}, 400 + animationDuration * 3);

		setTimeout(function(){
			if(THIS.validateAnim()){

				$(".nav .nav_inner ul li a").eq(2).css({transition: "all 0.4s ease-out", opacity:1, background:"#65d50c", color:"#000"});
				setTimeout(function(){
					$(".nav .nav_inner ul li a").eq(2).removeAttr('style');
				}, animationDuration + 100);

			}
		}, 400 + animationDuration * 4);

		setTimeout(function(){
			if(THIS.validateAnim()){

				//$(".nav .nav_inner .home_btn a").css({transition: "opacity 0.5s ease-out", backgroundPositionX: "-252px", opacity:1 });
				$(".nav .nav_inner .home_btn a").css({"backgroundPositionX":"-252px"});
				$(".nav .nav_inner .home_btn a").animate({"opacity":1},animationDuration, function(){
					if(THIS.validateAnim()){

						$(".nav .nav_inner ul li a").animate({"opacity":"0"},300);
						
						$(".nav .nf_badge .logo").css({transform:"matrix(3, 0, 0, 3, 0, 0)", opacity:0});
						setTimeout(function(){
							if(THIS.validateAnim()){
								// 초기화
								$(".nav .nav_inner .nf_badge").removeAttr('style');

								// 스케일
								THIS.scaleDownAnimation();
							}
						}, 200);

					}
				})

			}
		}, 400 + animationDuration * 5);

    },

    startAnimationMobile : function(){
        var THIS = this;
        var animationDuration = 300;
        var animationTerm = 0;

        // 애니메이션 초기화
        $(".nav").css({bottom:-$(".nav").height()+"px"});

        THIS.scaleUp();

        // UI 초기화
        $(".nav .nav_inner .nf_badge").css({opacity:0});
        $(".nav .nav_inner ul li a").css({opacity:0});
        $(".nav .nav_inner .home_btn a").css({opacity:0});
        $(".nav .nav_inner .close_btn a").css({opacity:0});


        // 애니메이션
        $(".nav").animate({bottom:"0px"}, animationDuration, function(){
            setTimeout(function(){
                // 초기화
                THIS.initLogo();

                // 스케일
                THIS.scaleDownAnimation();
            }, 400);

        });
    },

	validateAnim : function(){
		if(this.isCancelAnim){
			// 초기화
			this.initLogo();

			return false;
		}else{
			return true;
		}
	},

    scaleUp : function(){
        //$(".nav .nf_badge .logo").css({transform:"scale(1.8)", opacity:0});
		$(".nav .nf_badge .logo").css({transform:"matrix(2.4, 0, 0, 2.4, 0, 0)", opacity:0});
    },

    scaleDownAnimation : function(){

		var transitions;
		if(nafa.windowWidth < 1024){
			transitions = "all 0.4s";
		}else{
			transitions = "all 0.3s";
		}

		$(".nav .nf_badge .logo").css({transition:transitions, transform:"matrix(1, 0, 0, 1, 0, 0)", opacity:1});
    },

}

// base - footer
var footer = {

    isBottomOpen  : false,
    isMapOpen     : false,
    hasScroll     : false,
    curScrollPosY : 0,
    map : null,

	isMarginScroll    : false,
	containerPosition : "",
	navPosition       : "",
	footerPosition    : "",

    init : function(){

        var THIS = this;

        // Load footer html
        $.ajax({
			type: "GET",
			url: nafa.ninefiveDomain + nafa.getLang() + "/base/footer.html",
			dataType: "html",
            success: function(data){

                $(".footer_wrap").append(data);

                THIS.bindEvent();

				// 같은 인터페이스를 가진 googleMap과 naverMap. 나름의 다형성을 구현
                if(nafa.getLang() === 'en')
                    THIS.map = googleMap;
                else
                    THIS.map = naverMap;

                THIS.map.init();
                THIS.resize();

				$(".footer_wrap .footer .nafa_info .location a img").attr("src", nafa.ninefiveDomain + "images/main/footer_location_btn.png");

            },
			error:function(request,status,error){
				//functionLog("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				functionLog("code:"+request.status+"\n"+"error:"+error);
			}
		});

    },

    bindEvent : function(){
        var THIS = this;

        if(nafa.check_allDevice() === "" && $(".contents.main").length){

            //$(".kv")[0].addEventListener("mousewheel", $.scope(THIS.mouseWheelHandler, THIS), false);
            //$(".footer")[0].addEventListener("mousewheel", $.scope(THIS.mouseWheelHandler, THIS), false);

			$(".kv, .footer").on('wheel', function(event){
				if(footer.isMapOpen) return false;

				if(event.originalEvent.deltaY < 0){
					footer.closeBottom();
				}
				else {
					footer.openBottom();
				}
			});
        }

		// 맵 닫기
        $(".footer_wrap .map_btn_close").click(function(e){

            THIS.closeMap();

            return false;
        });

		// 맵 오픈
        $(".footer_wrap .location").click(function(e){

            footer.openMap();

			return false;
        });
    },

    mouseWheelHandler : function(e){
        if(this.isMapOpen) return false;

        if(e.wheelDelta > 0){
            this.openBottom();
        }else{
            this.closeBottom();
        }

    },

    resize : function(){

        if(this.isBottomOpen){
            var offset = $(".footer_wrap > .footer").height();
            $(".footer_wrap > .footer").css({top: nafa.windowHeight - offset + "px"});
			// width
			if(this.isMarginScroll){
				var scrlWidth = getScrollBarWidth();
				footWidth = nafa.windowWidth - scrlWidth;
			}else{
				footWidth = "100%";
			}

            $(".footer_wrap > .footer").css({width:footWidth});

        }

        if(this.isMapOpen){
            var offset = $(".footer_wrap > .footer").height();
            $(".footer_wrap .map").css({height:nafa.windowHeight - offset + "px"});

            this.map.resizeTrigger();
        }

        /*if($(".container").hasClass("device")){
            $(".footer .more_info").css({display:"none"});
            $(".footer .copyright").css({display:"none"});
        }else{
            $(".footer .more_info").css({display:"block"});
            $(".footer .copyright").css({display:"block"});
        }*/

    },

	setMarginScroll : function(mode){
		if(mode === "on") {
			this.isMarginScroll = true;
		}else if(mode === "off"){
			this.isMarginScroll = false;
		}
	},

    openBottom : function(){
        if(!this.isBottomOpen){
            this.isBottomOpen = true;

			// FIXME: hasScroll 관련 코드는 사용하지 않는 듯
            if ($("body").height() > $(window).height()) {
                this.hasScroll = true;
                this.curScrollPosY = $(window).scrollTop();

                $(".contents").css({display:"none"});
            }else{
                this.hasScroll = false;
            }

			var footWidth;
			if(this.isMarginScroll){
				var scrlWidth = getScrollBarWidth();
				footWidth = $(".footer_wrap > .footer").width() - scrlWidth;
			}else{
				footWidth = "100%";
			}

            $(".footer_wrap > .footer").css({position:"fixed", width:footWidth, top:nafa.windowHeight});
            var offset = $(".footer_wrap > .footer").height();
            $(".footer_wrap > .footer").stop().animate({top: nafa.windowHeight - offset + "px"}, 200);
        }
    },

    closeBottom : function(){
        var THIS = this;
        if(this.isBottomOpen){
            this.isBottomOpen = false;

            if (this.hasScroll) {
                this.hasScroll = false;
                functionLog("Vertical Scrollbar!");
                var offset = $(".footer_wrap > .footer").height();
                $(".footer_wrap > .footer").stop().animate({top: nafa.windowHeight + "px"}, 200, function(){
                    $(".footer_wrap > .footer").removeAttr('style');
                    $(".contents").removeAttr('style');

                    // Bottom 위치 조정
                    THIS.resize();
                    functionLog("this.curScrollPosY: " + THIS.curScrollPosY);

                    window.scrollTo(0, THIS.curScrollPosY);
                });

            }else{
                functionLog("Non Scrollbar!");
                $(".footer_wrap > .footer").stop().animate({top: nafa.windowHeight + "px"}, 200, function(){
					// 2017.08.09
                    //$(".footer_wrap > .footer").css({position:"relative"});
                    $(".contents").css({display:"block"});
					$(".footer_wrap > .footer").removeAttr("style");
                });
            }

        }
    },

    openMap : function(){

        if(!this.isMapOpen){
			if ($(".contents.main").length)
			{
				mainSlider.sliderIng = false;
				var slider = $(".main .kv .inner > ul > li");
				var movieIdx = 0;
				for (var i = 0;i < slider.length ; i++)
				{
					if (slider.eq(i).hasClass("movie"))
					{
						movieIdx = i;
					}
				}
				console.log("mainSlider.curIdx : " + mainSlider.curIdx + ", movieIdx : " + movieIdx);
				if (mainSlider.curIdx == movieIdx)
				{
					mainSlider.arrange(movieIdx+1);
				}
			}
			
            this.isMapOpen = true;

            var offset = $(".footer_wrap > .footer").height();
            $(".footer_wrap .map").css({height:nafa.windowHeight - offset + "px", top:"0px", display:"block", backgroundColor: "beige", position: "fixed"});

            $(".footer_wrap .map_btn_close").css({"z-index":10, display:"block"});

            this.map.open();

			// 맵을 열때 맵 닫기 버튼을 보여주기 위해 헤더를 숨긴다.
            $(".header_wrap .header").css({display:"none"});

			this.fixBottom();

			if(typeof fixCloseButton == 'function'){
				fixCloseButton("on");
			}
        }
    },

    closeMap : function(){
        if(this.isMapOpen){
			if ($(".contents.main").length)
				mainSlider.sliderIng = true;

            this.isMapOpen = false;

            $(".footer_wrap .map").css({display:"none"});
            $(".footer_wrap .map_btn_close").css({"z-index":9, display:"none"});

            this.map.close();

            // 맵을 열때 숨겼던 헤더를 다시 보여준다.
            $(".header_wrap .header").css({display:"block"});

			this.unfixBottom();

			if(typeof fixCloseButton == 'function'){
				fixCloseButton("off");
			}
        }
    },

	fixBottom : function(){
		// 레이아웃 조정
		this.containerPosition = $(".container").css("position");
		this.navPosition = $(".nav").css("right");
		this.footerPosition = $(".footer_wrap .footer").css("position");

		this.curScrollPosY = $(window).scrollTop();

		$(".container").css("position", "fixed");
		$(".footer_wrap .footer").css({position:"fixed", bottom:"0px"});
		$(".nav").css("right", "");
	},

	unfixBottom : function(){
		// 레이아웃 원복
		$(".container").css("position", this.containerPosition);

		if(this.navPosition !== ""){
			$(".nav").css("right", this.navPosition);
		}

		if(this.footerPosition !== ""){
			$(".footer_wrap .footer").css({position:this.footerPosition, bottom:"0px"});
		}else{
			$(".footer_wrap .footer").removeAttr("style");
		}

		window.scrollTo(0, this.curScrollPosY);
	},

}


var naverMap = {

    center : 0,
    map : null,
    infoWindow : null,
    marker : null,
    contentString : null,
    markerImg : '../../images/map_marker.png',
    timeHandler : ["", ""],

    init : function(){
        var THIS = this;

        function loadNaverMaps(){
            var script_tag = document.createElement('script');
            script_tag.setAttribute("type","text/javascript");
            //script_tag.setAttribute("src","https://openapi.map.naver.com/openapi/v3/maps.js?clientId=uHcYpgr2dzKbE6sMATvm&callback=gMapsCallback");
			script_tag.setAttribute("src","https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=x3le9w541o&callback=initMap");
            (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
        };

        //loadNaverMaps();

		// FIXME: 네이버 맵 API가 2번 로드되는 현상이 있음. 아래 코드만으로 로드가 되는듯함.
		$.getScript("https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=x3le9w541o&callback=initMap", function(){
			THIS.initMap();
		});
    },

    initMap : function(){

        this.center = new naver.maps.LatLng(37.545435,126.915084);

        var options = {
            zoom : nafa.useTouch ? 17 : 18,
            center: this.center,
        };

        this.map = new naver.maps.Map(document.getElementById("map_canvas"), options);

        var addrVal;
        if(nafa.getLang() === "en"){
            addrVal = '2Fl, 38, Tojeong-ro Mapo-gu, Seoul'
        }else{
            addrVal = '서울특별시 마포구 토정로 38 2층 / 우 04085'
        };

        this.contentString = '<div class="map_text"><p>NINEFIVE</p>'+addrVal + '</div>';
    },

    resizeTrigger : function(){

        if(naver !== null){
            naver.maps.Event.trigger(this.map,'resize');
            this.map.setCenter(this.center);
        }
    },

    open : function(){
        this.resizeTrigger();

		$(".work_header").css("display","none");

        var THIS = this;

        THIS.timeHandler[0] = setTimeout(function(){
            THIS.setMarker();
            THIS.timeHandler[1] = setTimeout(function(){
                THIS.setInfoWindow();
            }, 1400);
        }, 800);
    },

    close : function(){
		$(".work_header").css({"display":"block"});

        this.clearInfoWindow();
        this.clearMarker();

        this.timeHandler.forEach(clearTimeout);
    },

    setInfoWindow : function(){
        this.infoWindow && this.clearInfoWindow();
        this.infoWindow = new naver.maps.InfoWindow({
            content : this.contentString,
            pixelOffset: new naver.maps.Point(0, 0),
        });
        this.infoWindow.open(this.map, this.marker);
    },

    clearInfoWindow : function(){
        this.infoWindow && this.infoWindow.close();
		this.InfoWindow = null;
    },

    setMarker : function(){
        var THIS = this;
        var markerIcon = {
            url : this.markerImg,
            scaledSize : new naver.maps.Size(48,66)
        }

        this.marker = new naver.maps.Marker({
            position : this.center,
            map : this.map,
            icon : markerIcon,
            animation : naver.maps.Animation.DROP,
            title : "NINEFIVE,Inc."
        });
        naver.maps.Event.addListener(this.marker, 'click', function(){
            THIS.infoWindow.open(THIS.map, THIS.marker);
            if(THIS.marker.getAnimation() !== null){
                THIS.marker.setAnimation(null);
            }else{
                THIS.marker.setAnimation(naver.maps.Animation.BOUNCE);
            }
        });
    },

    clearMarker : function(){
        if(!this.marker) return false;
        this.marker.setMap(null);
        this.marker = null;
    },
};

var googleMap = {

    center : 0,
    map : null,
    infoWindow : null,
    marker : null,
    contentString : null,
    markerImg : '../../images/map_marker.png',
    timeHandler : ["", ""],

    init : function(){
        // 코드로 google api 불러오기
        window.gMapsCallback = function(){
            $(window).trigger('gMapsLoaded');
        }

        function loadGoogleMaps(){
            var script_tag = document.createElement('script');
            script_tag.setAttribute("type","text/javascript");
            script_tag.setAttribute("src","http://maps.googleapis.com/maps/api/js?key=AIzaSyDijYDkV3wO0DvArep8bXbi--q6AQfm4g4&language=en&callback=gMapsCallback");
            (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
        };
        $(window).bind('gMapsLoaded', $.scope(this.initMap, this));

        loadGoogleMaps();
    },

    initMap : function(){

        this.center = new google.maps.LatLng(37.545435,126.915084);

        var options = {
            zoom : nafa.useTouch ? 17 : 18,
            center: this.center,
			disableDefaultUI:true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        // ToDo: 모바일 스케일 조정

        this.map = new google.maps.Map(document.getElementById("map_canvas"), options);

        var addrVal;
        if(nafa.getLang() === "en"){
            addrVal = '2Fl, 38, Tojeong-ro Mapo-gu, Seoul'
        }else{
            addrVal = '서울특별시 마포구 토정로 38 2층 / 우 04085'
        };

        this.contentString = '<p><strong>NINEFIVE</strong></p>'+addrVal;
    },

    resizeTrigger : function(){

        if(google !== null){
            google.maps.event.trigger(this.map,'resize');
            this.map.setCenter(this.center);
        }
    },

    open : function(){
        this.resizeTrigger();

        var THIS = this;

        THIS.timeHandler[0] = setTimeout(function(){
            THIS.setMarker();
            THIS.timeHandler[1] = setTimeout(function(){
                THIS.setInfoWindow();
            }, 1400);
        }, 800);
    },

    close : function(){
        this.clearInfoWindow();
        this.clearMarker();

        this.timeHandler.forEach(clearTimeout);
    },

    setInfoWindow : function(){
        this.infoWindow && this.clearInfoWindow();
        this.infoWindow = new google.maps.InfoWindow({
            content : this.contentString
        });
        this.infoWindow.open(this.map, this.marker);
    },

    clearInfoWindow : function(){
        this.infoWindow && this.infoWindow.close();
		this.InfoWindow = null;
    },

    setMarker : function(){
        var THIS = this;
        var markerIcon = {
            url : this.markerImg,
            scaledSize : new google.maps.Size(48,66)
        }

        this.marker = new google.maps.Marker({
            position : this.center,
            map : this.map,
            icon : markerIcon,
            animation : google.maps.Animation.DROP,
            title : "NINEFIVE,Inc."
        });
        google.maps.event.addListener(this.marker, 'click', function(){
            THIS.infoWindow.open(THIS.map, THIS.marker);
            if(THIS.marker.getAnimation() !== null){
                THIS.marker.setAnimation(null);
            }else{
                THIS.marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        });
    },

    clearMarker : function(){
        if(!this.marker) return false;
        this.marker.setMap(null);
        this.marker = null;
    },
};


var ProjectInquiry = {

	currentInput : null,
	containerPosition : null,

	init : function(){
		var THIS = this;
		THIS.bindEvent();

		$("form").attr("enctype", "multipart/form-data");

		this.initSelectBoxStyle();
	},

	bindEvent : function(){
		var THIS = this;

		if( !nafa.useTouch){
			$(".header_wrap .header_inner .project_in a").mouseenter(function(){
				$(this).addClass('hover');
			});
			$(".header_wrap .header_inner .project_in a").mouseleave(function(){
				$(this).removeClass('hover');
			});
		}

		// 팝업 열기
		$(".header_wrap .header_inner .project_in a").click(function(){
			console.log("click");
			THIS.open();

			if(typeof fixLayout == 'function'){
				fixLayout("on");
			}

			if(typeof fixCloseButton == 'function'){
				fixCloseButton("on");
			}

			return false;
		});

		// 팝업 닫기
		$(".project_popup_w > .inner > .close_btn a").click(function(){
			THIS.close();

			if(typeof fixLayout == 'function'){
				fixLayout("off");
			}

			if(typeof fixCloseButton == 'function'){
				fixCloseButton("off");
			}
			return false;
		});

		$(".project_popup_w .project_popup .input_area .check_w .check label").hover(function(){
			if( !nafa.useTouch){
				if($(this).prev().prop('checked') === false){
					$(this).addClass('hover');
				}
			}
		}, function(){
			$(this).removeClass('hover');
		});

		$(".project_popup_w .project_popup .input_area .check_w .check input").change(function(e){
			if( !nafa.useTouch){
				console.log(1);
				if($(this).prop('checked')){
					$(this).next().removeClass('hover');
				}else{
					$(this).next().addClass('hover');
				}
			}
		});

		// 입력 폼 커버 클릭(워터마크)
		$(".placeholder").click(function(){
			$(this).css("display", "none");
			$(this).prev().focus();
		});

		// 입력 폼 커버 보이기(워터마크)
		$(".half_area").focusout(function(){
			if($(this).val().length === 0){
				$(this).next().removeAttr("style");
			}
		});

		// 입력 폼 커버 가리기(워터마크)
		$(".half_area").focusin(function(){
			$(this).next().css("display", "none");
		});

		// 입력 폼 커버 보이기(워터마크)
		$(".archieve_wrap .inner textarea").focusout(function(){
			if($(this).val().length === 0){
				$(this).next().removeAttr("style");
			}
		});

		// 입력 폼 커버 가리기(워터마크)
		$(".archieve_wrap .inner textarea").focusin(function(){
			$(this).next().css("display", "none");
		});

        // 첨부 파일 이벤트
        $(".file_wrap > #file_up").change(function(p){
            var fileName = $(this).val();
            if(fileName.length > 0)
			{
				var reName = fileName.split("\\");
				if (reName.length > 0)
				{
					reName = reName[reName.length - 1];
				}else{
					reName = fileName;
				}

                $(".file_wrap > label").text(reName);
			}
            else
                //$(".file_wrap > label").text("파일첨부 (최대 5MB)");
				$(".file_wrap > label").text($('.file_wrap > label').attr('data-file-wrap-name'));

			var allowed_file_size = 1048576 * 5; // 2017.09.05 limit 7MB
			if(this.files[0] && this.files[0].size > allowed_file_size){
				THIS.currentInput = "";
				THIS.showValidationPopup(THIS.validationMessage.overFileSize());
				//$(".file_wrap > label").text("파일첨부 (최대 5MB)");
				$(".file_wrap > label").text($('.file_wrap > label').attr('data-file-wrap-name'));

	            // 파일 인풋 초기화
				$(".file_wrap > #file_up").replaceWith($(".file_wrap > #file_up").val('').clone(true));
			}

        });

		// 개인정보 정책
		$(".accept_check a").click(function(){
			THIS.openPrivacyPolicy();
			return false;
		});

		// 개인정보 정책 정보 닫기
		$(".project_popup_w .privacy_w > .close_btn a").click(function(){
			THIS.closePrivacyPolicy();
			return false;
		});

		// 유효성 팝업
		$(".validation_popup a").click(function(){
			THIS.hideValidationPopup();
			return false;
		});

		// 폼 전송 성공 팝업
		$(".success_popup a").click(function(){
			THIS.hideCompletePopup();
			return false;
		});

		// 폼 전송
		$(".project_popup_w .submit_btn a").click(function(){
			THIS.hideSelectBox();

			if(THIS.validateForm()){
				THIS.submitForm();
			}
			return false;
		});

		// 연락처 숫자만 입력
		var pnumberInput = $(".pnumber_wrap .inner > input");
		pnumberInput.keydown(function(event){
			event = event || window.event;
			var keyID = (event.which) ? event.which : event.keyCode;
			if ( (keyID >= 48 && keyID <= 57) || (keyID >= 96 && keyID <= 105) || keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 || keyID == 9)
				return;
			else
				return false;
		});

		pnumberInput.keyup(function(event){
			event = event || window.event;
			var keyID = (event.which) ? event.which : event.keyCode;
			if ( keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 || keyID == 9 )
				return;
			else
				event.target.value = event.target.value.replace(/[^0-9]/g, "");
		});

	},

	resize : function(){
		if($(".header_wrap .popup_dimmed").css("display") === "block"){
			$(".header_wrap .popup_dimmed").css("height", nafa.windowHeight);
		}

		if($(".privacy_w").css("height") !== undefined && $(".privacy_w").css("height") !== "0px"){
			var innerHeight = $(".privacy_w .privacy_inner").outerHeight();
			$(".privacy_w").css({"height":innerHeight});
		}
	},

	open : function(){
		if ($(".contents.main").length && $(window).width() < 1024)
			mainSlider.sliderIng = false;

		this.containerPosition = $(".container").css("position");
		
		$(".header_wrap .popup_dimmed").css({"display":"block"});
		$(".header_wrap .popup_dimmed").css("height", nafa.windowHeight);
		$(".header_wrap .popup_dimmed").animate({"opacity":"1"},10,function(){
			$(".header_wrap .project_popup_w").css({"transition":"all 0.5s","transform":"translate(0,0)"});	
		});
		
		var getScroll = $(window).scrollTop();
		$(".container").css({"position":"fixed", "top":-getScroll + "px"});
	},

	close : function(){
		if ($(".contents.main").length && $(window).width() < 1024)
			mainSlider.sliderIng = true;

		// 폼 스크롤 0
		$(".project_popup_scroll_w")[0].scrollTop = 0;
		// 콤보박스 초기화
		this.initSelectBoxStyle();

		// 유효성 검사 팝업 창 제거
		this.hideValidationPopup();

		// 초기화
		setTimeout(function(){
			$(".header_wrap .project_popup_w").css({"transform":"translate(100%,0)"});
			$(".header_wrap .popup_dimmed").animate({"opacity":"0"},500,function(){
				$(this).css({"display":"none"});
				$(".header_wrap .popup_dimmed").removeAttr("style");
			});
			
			//$(".container").removeAttr("style");
			$(".container").css({"position":this.containerPosition});
			$(".project_popup_scroll_w").removeAttr("style");
			$(".success_popup").removeAttr("style");

			$(".archieve_wrap .inner > textarea").next().removeAttr("style");
			$(".half_area").next().removeAttr("style");
			$(".privacy_w").removeAttr("style");

			// 파일첨부
			//$(".file_wrap > label").text("파일첨부");
			$(".file_wrap > label").text($('.file_wrap > label').attr('data-file-wrap-name'));

			// 데이터 클리어
			$("form")[0].reset();
			var setScroll = parseInt($(".container").css("top"));
			$(".container").css({"position":"", "top":""});
			$(window).scrollTop(-setScroll);
		},100);
	},

	openPrivacyPolicy : function(){
		var innerHeight = $(".privacy_w .privacy_inner").outerHeight();
		$(".privacy_w").animate({"height":innerHeight}, 300, "swing");
	},

	closePrivacyPolicy : function(){
		$(".privacy_w").animate({"height":0}, 300, "swing");
	},

	showValidationPopup : function(message){
		$(".validation_popup .title").text(message);
		$(".validation_popup").css("display", "block");
	},

	hideValidationPopup : function(){
		$(".validation_popup").removeAttr("style");

		if(this.currentInput){

			var topMargin = 84;
			var offset_t = this.currentInput.offset().top + $(".project_popup_scroll_w").scrollTop() - topMargin;
			$(".project_popup_scroll_w").animate({scrollTop : offset_t}, 500, "swing");
			console.log("offset_t: " + offset_t);

			this.currentInput.focus();
		}
	},

	showCompletePopup : function(){
		// 폼 스크롤 0
		$(".project_popup_scroll_w")[0].scrollTop = 0;

		//$(".project_popup_scroll_w").css("display", "none");
		$(".project_popup_scroll_w").removeAttr("style");
		$(".success_popup").css("display", "block");
	},

	hideCompletePopup : function(){
		this.close();
	},

	validateForm : function(){

		// FIXME: for test
		//return true;

		var THIS = this;

		var selectedProjectTypeCount = 0;
		$(".project_popup_w .project_popup .input_area .check_w input[type=checkbox]").each(function(){
			if(this.checked)
				selectedProjectTypeCount++;
		});

		if(selectedProjectTypeCount == 0) {
			THIS.showValidationPopup(THIS.validationMessage.requireProjectType());
			THIS.currentInput = $(".project_popup_w .project_popup .input_area");
			return false;
		}

		if($(".archieve_wrap .inner textarea").val().length === 0) {
			THIS.showValidationPopup(THIS.validationMessage.requireGoal());
			THIS.currentInput = $(".archieve_wrap .inner textarea");
			return false;
		}

		if($(".company_wrap .inner input").val().length === 0) {
			THIS.showValidationPopup(THIS.validationMessage.requireCompany());
			THIS.currentInput = $(".company_wrap .inner input");
			return false;
		}

		if($(".name_wrap .inner input").val().length === 0) {
			THIS.showValidationPopup(THIS.validationMessage.requireName());
			THIS.currentInput = $(".name_wrap .inner input");
			return false;
		}

		if($(".email_wrap .inner input").val().length === 0) {
			THIS.showValidationPopup(THIS.validationMessage.requireEmail());
			THIS.currentInput = $(".email_wrap .inner input");
			return false;
		}

		if( !this.validateEmail($(".email_wrap .inner input").val())) {
			THIS.showValidationPopup(THIS.validationMessage.invalidEmail());
			THIS.currentInput = $(".email_wrap .inner input");
			return false;
		}

		if($(".accept_w .accept_check input:checkbox").prop("checked") === false) {
			THIS.showValidationPopup(THIS.validationMessage.requirePrivacyPolicy());
			THIS.currentInput = $(".accept_w .accept_check");
			return false;
		}

		return true;
	},

	validateEmail : function(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    return re.test(email);
	},

	validationMessage : {
		requireProjectType : function(){
			return nafa.getLang() === "ko" ?
				"프로젝트 유형을 하나 이상 선택하여 주십시오." :
				"Please select at least one project type." ;
		},
		requireGoal : function(){
			return nafa.getLang() === "ko" ?
				"프로젝트에 대한 설명과 목표 항목은 필수 입력 항목입니다." :
				"Goal and achieve input is required." ;
		},
		requireCompany : function(){
			return nafa.getLang() === "ko" ?
				"회사 항목은 필수 입력 항목입니다." :
				"Company input is required." ;
		},
		requireName : function(){
			return nafa.getLang() === "ko" ?
				"이름 항목은 필수 입력 항목입니다." :
				"Name input is required." ;
		},
		requireEmail : function(){
			return nafa.getLang() === "ko" ?
				"이메일 항목은 필수 입력 항목입니다." :
				"E-mail input is required." ;
		},
		invalidEmail : function(){
			return nafa.getLang() === "ko" ?
				"잘못된 이메일 형식입니다." :
				"Invalid E-mail format." ;
		},
		requirePrivacyPolicy : function(){
			return nafa.getLang() === "ko" ?
				"개인보호정책 항목은 필수 입력 항목입니다." :
				"Privacy Policy input is required." ;
		},
		overFileSize : function(){
			return nafa.getLang() === "ko" ?
				"첨부 파일 용량은 5MB를 넘을 수 없습니다." :
				"Attachment can not exceed 5MB." ;
		},
	},

	submitForm : function(){

		var THIS = this;
		var formData = new FormData($('form')[0]);
		console.log(formData);
		$.ajax({
            type : 'post',
            url : '/mail.php',
			//url : '/contact_me.php',
            //data : $('form').serialize(),
			data : formData,
            dataType: 'json',
			contentType: false,
			cache : false,
			processData : false,
            error: function(xhr, status, error){
                alert('error: ' + error);
            },
            success : function(json){
                THIS.showCompletePopup();
            },
        });

	},

	// 폼 셀렉트 옵션 스타일
	initSelectBoxStyle : function (){

		$('.select_wrap select').each(function (i) {

			var $this = $(this),
				numberOfOptions = $(this).children('option').length;

            // 값 초기화
            $this.val($this.children('option').first().val());

            // UI 초기화
            $this.nextAll().remove();

			$this.addClass('s-hidden');

			if( !$this.parent().hasClass('select')) {
				$this.wrap('<div class="select"></div>');
			}

			$this.after('<div class="styledSelect" data-id="' + i + '"></div>');

			var $styledSelect = $this.next('div.styledSelect');

			$styledSelect.text($this.children('option').eq(0).text());

			var $list = $('<ul />', {
				'class': 'options'
			}).insertAfter($styledSelect);

			for (var i = 0; i < numberOfOptions; i++) {

                if(i === 0)
                    continue;

				$('<li />', {
					text: $this.children('option').eq(i).text(),
					rel: $this.children('option').eq(i).val()
				}).appendTo($list);
			}

			var $listItems = $list.children('li');

			$styledSelect.click(function (e) {
				var this_id = $(this).attr('data-id');
				e.stopPropagation();
				$('.styledSelect').each(function () {
					var data_id = $(this).attr('data-id');
					if(this_id !== data_id){
						$(this).removeClass('active').next('ul.options').hide();
					}
				});
				$(this).toggleClass('active').next('ul.options').toggle();
			});

			$listItems.click(function (e) {
				e.stopPropagation();
				$styledSelect.text($(this).text()).removeClass('active');
				$this.val($(this).attr('rel'));
				$list.hide();
			});

			$(document).click(function () {
				$styledSelect.removeClass('active');
				$list.hide();
			});

		});
	},

	hideSelectBox : function() {
		$('select').each(function (i) {
			var $styledSelect = $(this).next('div.styledSelect');
			$styledSelect.toggleClass('active').next('ul.options').hide();
		});
	},


}


//**** FIXME: tabindex ****//

// 프로젝트 타입
$(document).on('keydown', ".project_popup_w .project_popup .input_area .check_w .check > label", function(e){
	if((e.keyCode === 13)){ // enter
		$(this).trigger("click");
	}
});

// 개인정보 체크
$(document).on('keydown', ".project_popup_w .project_popup .input_area .accept_w label", function(e){
	if((e.keyCode === 13)){ // enter
		$(this).trigger("click");
	}
});

// 개인정보 처리방침
$(document).on('keydown', ".project_popup_w .project_popup .input_area .accept_w label a", function(e){
	if((e.keyCode === 13)){ // enter
		e.stopPropagation();
	}

	if((e.keyCode === 9 && !e.shiftKey)){ // tab
		e.preventDefault();
		console.log($(".project_popup_w .project_popup .input_area .privacy_w").css("height"));
		if($(".project_popup_w .project_popup .input_area .privacy_w").css("height") === "0px"){
			$(".project_popup_w .project_popup .input_area .submit_btn a").focus();
		}else{
			$(".project_popup_w .privacy_w .close_btn a").focus();
		}
	};

	if((e.keyCode === 9 && e.shiftKey)){ // shift+tab
		//e.preventDefault();
	};

});

// submit 버튼
$(document).on('keydown', ".project_popup_w .project_popup .input_area .submit_btn a", function(e){
	if((e.keyCode === 13)){ // enter
		e.stopPropagation();
	}

	if((e.keyCode === 9 && !e.shiftKey)){ // tab

	};

	if((e.keyCode === 9 && e.shiftKey)){ // shift+tab
		e.preventDefault();
		if($(".project_popup_w .project_popup .input_area .privacy_w").css("height") === "0px"){
			$(".project_popup_w .project_popup .input_area .accept_w label a").focus();
		}else{
			$(".project_popup_w .privacy_w .close_btn a").focus();
		}
	};

});

// 개인정보 닫기
$(document).on('keydown', ".project_popup_w .privacy_w .close_btn a", function(e){
	if((e.keyCode === 13)){ // enter
		//e.stopPropagation();
		$(this).trigger("click");
		setTimeout(function(){
			$(".project_popup_w .project_popup .input_area .accept_w label a").focus();
		}, 200);
	}

});

// 마우스 클릭 시 포커스 방지
$(document).on('mousedown', ".project_popup_w .project_popup .input_area .check_w .check > label", function(e){
	//e.stopImmediatePropagation();
	e.preventDefault();
});

$(document).on('mousedown', ".project_popup_w .project_popup .input_area .accept_w label", function(e){
	e.preventDefault();
});


function checkBrowser()
{
	var agt = navigator.userAgent.toLowerCase();
	var rv = -1; // Return value assumes failure.    
	if (navigator.appName == 'Microsoft Internet Explorer') {        
		var ua = navigator.userAgent;        
		var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");        
		if (re.exec(ua) != null)            
			rv = parseFloat(RegExp.$1);    

		//return "IE" + rv;
		return "InternetExplorer";
	}
	
	if (agt.indexOf("chrome") != -1) return 'Chrome'; 
	if (agt.indexOf("opera") != -1) return 'Opera'; 
	if (agt.indexOf("staroffice") != -1) return 'StarOffice'; 
	if (agt.indexOf("webtv") != -1) return 'WebTV'; 
	if (agt.indexOf("beonex") != -1) return 'Beonex'; 
	if (agt.indexOf("chimera") != -1) return 'Chimera'; 
	if (agt.indexOf("netpositive") != -1) return 'NetPositive'; 
	if (agt.indexOf("phoenix") != -1) return 'Phoenix'; 
	if (agt.indexOf("firefox") != -1) return 'Firefox'; 
	if (agt.indexOf("safari") != -1) return 'Safari'; 
	if (agt.indexOf("skipstone") != -1) return 'SkipStone'; 
	if (agt.indexOf("msie") != -1) return 'InternetExplorer'; 
	if (agt.indexOf("netscape") != -1) return 'Netscape'; 
	//if (agt.indexOf("mozilla/5.0") != -1) return 'Mozilla';
	if (agt.indexOf("mozilla/5.0") != -1) return 'InternetExplorer';

	//return 'InternetExplorer';
}

function check_allDevice(){
	var mobileKeyWords = new Array('iPhone', 'iPad', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson'); //160625 device 목록에 ipad 추가
	var device_name = '';
	for (var word in mobileKeyWords){
		if (navigator.userAgent.match(mobileKeyWords[word]) != null){
			device_name = mobileKeyWords[word];
			break;
		}
	}

	return device_name;
}