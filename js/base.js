$(document).on('mousedown', 'button, input[type="button"], input[type="submit"]', function(e) {
	e.preventDefault();
});

$(window).load(onLoad)
		.resize(onResize)
		.scroll(onScroll);
var windowWidth;
var windowHeight;
var mainKV_Interval;
var viewMode;



function onLoad()
{
	$("body").addClass(checkBrowser());

	if (check_allDevice() != "")
	{
		$("body").addClass("device");
	}
	
	windowWidth = $(window).outerWidth();
	windowHeight = $(window).outerHeight();
	documentHeight = $(document).outerHeight();

	if (windowWidth <=320)
	{
		windowWidth == 320;
	}

	if (check_allDevice() != "")
	{
		if (windowWidth > windowHeight)
		{
			viewMode = "W";
		}else{
			viewMode = "H";
		}
	}

	mainKV_Interval = setInterval(mainKV_Slider,3000);

	if (check_allDevice() != "")
	{
		deviceSwipe();
	}

	$(".media .media_inner .media_list > li").removeClass("active");
	$(".media .media_inner .media_list > li").eq(0).addClass("active");

	submenuReset_All();
	
	onResize();
}
var resizeTimer;
function onResize()
{
	
	windowWidth = $(window).outerWidth();
	windowHeight = $(window).outerHeight();
	documentHeight = $(document).outerHeight();
	if (check_allDevice() != "")
	{
		deviceRotate = false;
		if (windowWidth > windowHeight && viewMode == "H")
		{
			viewMode = "W";
			deviceRotate = true;
		}
		
		if (windowWidth < windowHeight && viewMode == "W")
		{
			viewMode = "H";
			deviceRotate = true;
		} 
	}

	if (windowWidth <=320)
	{
		windowWidth == 320;
	}

	if (windowHeight / 4 * 3 >= windowWidth)
	{
		$("body").addClass("portrait");
	}else{
		$("body").removeClass("portrait");
	}

	$("*").css({"transition": "none"});
	clearTimeout(resizeTimer);
	resizeTimer = setTimeout(function() {
		$("*").css({"transition": ""});
	}, 100);

	$("section").css({"max-width": $("main").outerWidth() + "px"});
	$(".about_wrap .intro").css({"margin-top":-windowHeight + "px"});


	if (windowWidth < windowHeight)
	{
		$(".main .kv_list").css({"width": $("main").outerWidth() + "px", "height": $("main").outerWidth() + "px"});
		$(".intro .contents-obj img").css({"width": $("main").outerWidth() + "px", "height": $("main").outerWidth() + "px"});
		$(".intro > .valign").css({"height": $("#index").outerHeight() + "px"});
	}else{
		$(".main .kv_list").css({"width": windowHeight + "px", "height": windowHeight + "px"});
		$(".intro .contents-obj img").css({"width": windowHeight + "px", "height": windowHeight + "px"});
		$(".intro > .valign").css({"height": windowHeight + "px"});
	}

	/*if (windowHeight / 4 * 3 >= windowWidth)
	{
		$(".main .title_list").css({"display": "block"});
		$(".main .title_list li").eq(mainKV).css({"display": "block", "opacity": "1"});
	}else{
		$(".main .title_list").css({"display": "none"});
		$(".main .title_list li").css({"display": "none", "opacity": "0"});
	}*/

	if ($("#submenu").hasClass("show-contact"))
	{
		submenuResize();
		if (windowWidth > 768 || (windowHeight / 4 * 3) < windowWidth)
		{
			var gnbMove = $("#submenu .contact").outerWidth() - 31;
		}else{
			var gnbMove = $("#submenu .contact").outerWidth();
		}
		$(".gnb .btn_gnb").css({"right": gnbMove + "px", "left": "auto"});
		$(".gnb nav").css({"right": gnbMove + "px", "left": "auto"});
	}else if ($("#submenu").hasClass("show-inquiry") || $("#submenu").hasClass("show-apply"))
	{
		submenuResize();
		if (windowWidth > 768 || (windowHeight / 4 * 3) < windowWidth)
		{
			var gnbMove = $("#submenu .apply").outerWidth() -31;
		}else{
			var gnbMove = $("#submenu .apply").outerWidth();
		}
		$(".gnb .btn_gnb").css({"right": gnbMove + "px", "left": "auto"});
		$(".gnb nav").css({"right": gnbMove + "px", "left": "auto"});
	}else{
		$(".gnb .btn_gnb").css({"right": "", "left": ""});
		$(".gnb nav").css({"right": "", "left": ""});
	}

	if ($("#submenu > section.inquiry .policy_contents").height() > 0)
	{
		var policyHeight = $("#submenu > section.inquiry .policy_contents .contents_wrap").outerHeight();
		$("#submenu > section.inquiry .policy_contents").css({"height": policyHeight + "px"});
	}

	if ($("#submenu > section.apply .policy_contents").height() > 0)
	{
		var policyHeight = $("#submenu > section.apply .policy_contents .contents_wrap").outerHeight();
		$("#submenu > section.apply .policy_contents").css({"height": policyHeight + "px"});
	}

	if ($("#index").hasClass("show-main") && check_allDevice()  == "" && !($("body").hasClass("portrait")))
	{
		$("#index.show-main .worklist").mouseenter(function(){
			$(this).find(".btn_scroll").css({"display": "block"}).delay(250).stop().animate({"opacity": "1"}, 300);
		});
		
		$("#index.show-main .worklist").mouseleave(function(){
			$(this).find(".btn_scroll").delay(250).stop().animate({"opacity": "0"}, 300, function(){
				$(this).css({"display": "none"});
			});
		});
	}
	
	//btnPosition();
	aboutResize();
	submenuResize();
}

var scrollTop = 0;
function onScroll()
{
	//btnPosition();
}

var mediaScroll = 0;
var pageLanguage = "KR";
$(function(){


	windowWidth = $(window).outerWidth();
	windowHeight = $(window).outerHeight();

	if (windowHeight / 4 * 3 >= windowWidth)
	{
		$("body").addClass("portrait");
	}else{
		$("body").removeClass("portrait");
	}

	$("section").css({"max-width": $("main").outerWidth() + "px"});
	
	$("#index").click(function(){
		if (gnbOpened)
		{
			$(".gnb").removeClass("active");
			$(".gnb nav").css({"transform": "scale(1)"});
			setTimeout(function(){
				$(".gnb nav").css({"display": "none"});
			}, 200);
			gnbOpened = false;
		}
		return false;
	});
	//common
	var gnbOpened = false;
	if (check_allDevice() == "")
	{
		$(document).on("mouseenter",".gnb .btn_gnb",function(){
			$(".gnb").addClass("active");
			$(".gnb nav").css({"display": "block"});
			
		});
		$(document).on("mouseleave",".gnb",function(){
			if (!$("#submenu > section").hasClass("active"))
			{
				$(".gnb").removeClass("active");
				$(".gnb nav").css({"display": "none"});
			}			
		});

		$("#submenu").click(function(){
			submenuReset_All();
			$(".gnb nav .submenu li").removeClass("active");
			$(".gnb.active .btn_gnb").css({"left": "", "transform": "", "transition-duration": ""}).animate({"right":""},500);
			$(".gnb nav").css({"left": "", "transform": "", "transition-duration": ""}).animate({"right":""},500);
			$(".gnb").removeClass("active");
			$(".gnb nav").css({"display": "none"});
			return false;
		});

		$("#submenu > section").click(function(){
			return false;
		});
	}else{
		$(document).on("click",".gnb .btn_gnb",function(){
			if (gnbOpened)
			{
				$(".gnb").removeClass("active");
				$(".gnb nav").css({"transform": "scale(1)"});
				setTimeout(function(){
					$(".gnb nav").css({"display": "none"});
				}, 200);
				gnbOpened = false;
			}else{
				$(".gnb").addClass("active");
				$(".gnb nav").css({"display": "block"});
				setTimeout(function(){
					$(".gnb nav").css({"transform": "scale(1)"});
				}, 5);
				gnbOpened = true;
			}
			return false;
		});
	}
	

	

	$(".lang .lang_list button").click(function()
	{
		var present = $(".lang button.lang_present").text();
		pageLanguage = $(this).text();
		$(".lang button.lang_present").text(pageLanguage);
		$(this).text(present);
		$(".lang .lang_list").stop().animate({"opacity":0}, 200, function(){
			$(this).css({"display":"none"});				
		});
		$("body").removeClass("KR").removeClass("EN");
		$("body").addClass(pageLanguage);
		chnageLanguage();
		return false;
	});

	if (!gnbOpened)
	{
		$(".gnb .btn_back").click(function(){
			if ($("#submenu").hasClass)
			{
				submenuReset_All();
				$(".gnb nav .submenu li").removeClass("active");
				$(".gnb.active .btn_gnb").css({"left": "", "transform": "", "transition-duration": ""}).animate({"right":""},500);
				$(".gnb nav").css({"left": "", "transform": "", "transition-duration": ""}).animate({"right":""},500);
			}
			$(".gnb").removeClass("active");
			$(".gnb nav").css({"transform": "scale(1)"});
			setTimeout(function(){
				$(".gnb nav").css({"display": "none"});
			}, 200);
			gnbOpened = false;
			return false;
		});
	}

	if (check_allDevice() ==  '')
	{
		$(".lang").hover(function(){
			$(this).addClass("active");
			$(".lang .lang_list").css({"display":"block","opacity":0}).stop().animate({"opacity":1}, 200);
		},function(){
			$(this).removeClass("active");
			$(".lang .lang_list").stop().animate({"opacity":0}, 200, function(){
				$(this).css({"display":"none"});				
			});
		});
	}else{
		$(".lang .lang_present").click(function(){
			if (!$(this).parent().hasClass("active"))
			{
				$(this).parent().addClass("active");
			}else{
				$(this).parent().removeClass("active");
			}
			return false;
		});
	}

	if ($("#index").hasClass("show-main") && check_allDevice()  == "" && !($("body").hasClass("portrait")))
	{
		$("#index.show-main .worklist").mouseenter(function(){
			$(this).find(".btn_scroll").css({"display": "block"}).delay(250).stop().animate({"opacity": "1"}, 300);
		});
		
		$("#index.show-main .worklist").mouseleave(function(){
			$(this).find(".btn_scroll").delay(250).stop().animate({"opacity": "0"}, 300, function(){
				$(this).css({"display": "none"});
			});
		});

		var worklistLength = $(".worklist .worklist-yr").outerHeight() - windowHeight;
		var worklistTop = 0;		
		var hoverInterval;
		$(".btn_scroll.bottom").hover(function(){
			worklistTop = Math.abs($(".worklist .mCSB_inside > .mCSB_container").position().top);

			clearInterval(hoverInterval);
			hoverInterval = setInterval(function(){
				if (worklistTop >= worklistLength)
				{
					worklistTop = worklistLength;
				}
				worklistTop += 20;
				$(".worklist .mCSB_inside > .mCSB_container").css({"transition":"top 0.1s linear", "top": "-" + worklistTop + "px"});
			}, 100);
		},function(){
			clearInterval(hoverInterval);
			$(".worklist .mCSB_inside > .mCSB_container").css({"transition":"none"});
		});

		$(".btn_scroll.top").hover(function(){
			worklistTop = Math.abs($(".worklist .mCSB_inside > .mCSB_container").position().top);

			clearInterval(hoverInterval);
			hoverInterval = setInterval(function(){
				if (worklistTop <= 0)
				{
					worklistTop = 0;
				}
				worklistTop -= 20;
				$(".worklist .mCSB_inside > .mCSB_container").css({"transition":"top 0.1s linear", "top": "-" + worklistTop + "px"});
			}, 100);
		},function(){
			clearInterval(hoverInterval);
			$(".worklist .mCSB_inside > .mCSB_container").css({"transition":"none"});
		});
	}

	$(".mCustomScrollBox").scroll(function(){
		var toScroll = $(this).scrollTop();
	});
	
	if ($("#index").hasClass("show-work")) {
		$(".worklist .mCSB_inside > .mCSB_container").css({"transition":"none"});
	}
		
	$(".worklist .btn_main").click(function(){
		if ($("#index").hasClass("show-work"))
		{
			$("#index").removeClass("show-work");
		}
		$("#index").addClass("show-main");
		/*setTimeout(function(){
			btnPosition();
		},100);*/
		mainKV_Interval = setInterval(mainKV_Slider,3000);
		return false;
	});
		
	$(".worklist .btn_media").click(function(){
		if ($("#index").hasClass("show-work"))
		{
			$("#index").removeClass("show-work");
		}
		$("#index").addClass("show-media");
		return false;
	});
		
	$(".media .btn_worklist").click(function(){
		if ($("#index").hasClass("show-media"))
		{
			$("#index").removeClass("show-media");
		}
		$("#index").addClass("show-work");
		return false;
	});

	$(".worklist .btn_worklist").click(function(){
		clearInterval(mainKV_Interval);

		if ($("#index").hasClass("show-main"))
		{
			$("#index").removeClass("show-main");
		}
		$("#index").addClass("show-work");
		return false;
	});

	$(".worklist .worklist-inner .thumb-list li a").click(function(){
		/*if ($("#index").hasClass("show-main"))
		{
			clearInterval(mainKV_Interval);

			$("#index").removeClass("show-main");
			$("#index").addClass("show-work");
		}*/
		var dataURL = $(this).attr("data-url");

		$(".popup .worklist-popup .detail_inner").html("");
		if ($(".lang button").text() == "KR")
		{
			$(".popup .worklist-popup .detail_inner").load("./work/kor/" + dataURL + ".php");
		}else{
			$(".popup .worklist-popup .detail_inner").load("./work/eng/" + dataURL + ".php");
		}
		
		$("#index").addClass("popup_active");
		$(".popup").css({"display": "block"}).animate({"opacity": "1"}, 300);
	});

	$(".popup .worklist-popup .btn_close").click(function(){
		$("#index").removeClass("popup_active");
		$(this).parent().parent().animate({"opacity": "0"}, 300, function(){
			$(this).css({"display": "none"});
		});
	});

	if (windowWidth < windowHeight)
	{
		$(".main .kv_list").css({"width": $("main").outerWidth() + "px", "height": $("main").outerWidth() + "px"});
		$(".intro .contents-obj img").css({"width": $("main").outerWidth() + "px", "height": $("main").outerWidth() + "px"});
	}else{
		$(".main .kv_list").css({"width": windowHeight + "px", "height": windowHeight + "px"});
		$(".intro .contents-obj img").css({"width": windowHeight + "px", "height": windowHeight + "px"});
	}
	
	//about
	$(".about section").css({"height": windowHeight + "px"});

	var doIndex = $(".we_do ul li").length;
	var doWidth = $(".about .we_do li .circle").outerWidth();
	var doOverlap;

	if (windowWidth >= 1440)
	{
		doOverlap = 36;
	}else if (windowHeight / 4 * 3 < windowWidth && windowWidth < 1440 && windowWidth > 768)
	{
		doOverlap = 36 / 1440 * windowWidth;
	}else{
		doOverlap = 43 / 768 * windowWidth;
	}

	for (i = 1; i <= doIndex; i++)
	{
		if (windowHeight / 4 * 3 >= windowWidth || windowWidth <= 768) {
			$(".we_do ul li").eq(i).css({"position": "relative", "margin-top": "-" + doOverlap + "px", "margin-left": ""});
			if (windowWidth >= windowHeight && check_allDevice() != "")
			{
				$(".we_do ul li").eq(i).css({"position": "absolute", "margin-left": (i * doWidth) - (i * doOverlap) + "px", "margin-top": ""});
			}
		}else{
			$(".we_do ul li").eq(i).css({"position": "absolute", "margin-left": (i * doWidth) - (i * doOverlap) + "px", "margin-top": ""});
		}
	}

	var thumbSize;
	if (windowWidth >= 1440)
	{
		thumbSize = 240;
	}else if (windowHeight / 4 * 3 < windowWidth && windowWidth < 1440 && windowWidth > 768)
	{
		thumbSize = 240 / 1440 * windowWidth;
	}else{
		thumbSize = 240 / 768 * windowWidth;
	}
	var bgWidth = Math.ceil(windowWidth / thumbSize);
	var bgHeight = Math.ceil(windowHeight / thumbSize);
	$(".about .organization .bg_thumbs").html("").css({"width" : bgWidth * thumbSize + "px", "height" : bgHeight * thumbSize + "px"});
	for (i = 0; i < (bgWidth * bgHeight); i++)
	{
		var addThumb = document.createElement("div");
		$(".about .organization .bg_thumbs").append(addThumb);
	}
	$(".about .organization .bg_thumbs div").css({"width": thumbSize + "px", "height" : thumbSize + "px"}); 

	$("button").not("#submenu button").click(function(){
		if (!$(this).hasClass("btn_gnb"))
		{
			if (gnbOpened)
			{
				$(".gnb").removeClass("active");
				$(".gnb nav").css({"transform": "scale(1)"});
				setTimeout(function(){
					$(".gnb nav").css({"display": "none"});
				}, 200);
				gnbOpened = false;
			}
		}		
	});

	$(".main .btn_about").click(function(){
		fullDelta = 1;
		showPage(1);		
		return false;
	});

	$(".gnb nav .menu li a").click(function(){
		$(".gnb").removeClass("active");
		$(".gnb nav").css({"transform": "scale(1)"});
		setTimeout(function(){
			$(".gnb nav").css({"display": "none"});
		}, 200);
		$(".gnb nav .menu li").removeClass("active");
		$(this).parent().addClass("active");
		gnbOpened = false;

		switch ($(this).parent().index())
		{
			case 0:
			{
				if ($("#index").hasClass("show-about"))
				{
					$(".about").animate({"opacity":0},500,function(){
						$(this).css({"display":"none"});
						$(".about_wrap .intro").animate({"opacity":1},500);
						setTimeout(function(){
							$(".about_wrap").animate({"opacity":0},500,function(){
								$(this).css({"margin-top":"100%"});
							});
							$(".main").animate({"opacity":1},500);
							$(".worklist").css({"transition":"none", "-webkit-transition":"none"});
							setTimeout(function(){
								$(".about_wrap").html("");
								pageIndex = 0;
								fullDelta = 0;
								oldPageIndex = 0;
								scrollIng = false;

								$("#index").addClass("show-work");
								$("#index").removeClass("show-about");
								setTimeout(function(){
									$(".worklist").css({"transition":"", "-webkit-transition":""});
								},500);
								mainKV_Interval = setInterval(mainKV_Slider,3000);
							},1000);
						},1000);
					});
				}else if ($("#index").hasClass("show-main") || $("#index").hasClass("show-media"))
				{
					$("#index").removeClass("show-main");
					$("#index").removeClass("show-media");
					$("#index").addClass("show-work");

					mainKV_Interval = setInterval(mainKV_Slider,3000);
				}
				break;
			}
			case 1:
			{
				if (!$("#index").hasClass("show-about"))
				{
					if ($("#index").hasClass("show-work") || $("#index").hasClass("show-media"))
					{
						$("#index").removeClass("show-media");
						$("#index").removeClass("show-work");
						$("#index").addClass("show-main");

					}
					setTimeout(function(){
						fullDelta = 1;
						oldPageIndex = 0;
						showPage(1);
					},600);
				}

				break;
			}		
		}
		return false;
	});

	$(".gnb nav .submenu li a").click(function(){
		
		if (!$(this).parent().hasClass("active"))
		{
			var subIdx = $(this).parent().index();
			var subClass;

			$(".gnb nav .menu li").removeClass("active");
			$(".gnb nav .submenu li").removeClass("active");
			$(this).parent().addClass("active");
			
			switch (subIdx){
				case 0:
				{
					subClass = "show-inquiry";
					break;
				}
				case 1:
				{
					subClass = "show-apply";
					break;
				}
				case 2:
				{
					subClass = "show-contact";
					setTimeout(function(){
						mapLoad();	
					},500);
				}
			}
			
			$("#submenu").css({"display": "block"}).removeClass().addClass(subClass);

			if (windowWidth > 768 || (windowHeight / 4 * 3) < windowWidth)
			{
				var gnbMove = $("#submenu > section").eq(subIdx).outerWidth() - 31;
			}else{
				var gnbMove = windowWidth;
			}
			

			var showIdx = -1;
			$("#submenu > section").each(function(){
				if ($(this).hasClass("active"))
				{
					showIdx = $(this).index();
				}
			});
			
			if (showIdx > -1)
			{

				$(".gnb .btn_gnb").css({"left": "auto"}).animate({"right": gnbMove + "px"},500);
				$(".gnb nav").css({"left": "auto"}).animate({"right": gnbMove + "px"},500);
				$("#submenu > section").eq(subIdx).css({"display": "block", "transition":"none","margin-right": -gnbMove + "px"}).stop().animate({"margin-right":"0px"},500);
			}else{
				$(".gnb .btn_gnb").css({"left": "auto"}).animate({"right": gnbMove + "px"},500);
				$(".gnb nav").css({"left": "auto"}).animate({"right": gnbMove + "px"},500);
				$("#submenu > section").eq(subIdx).css({"display": "block", "transition":"none","margin-right": -gnbMove + "px"}).stop().animate({"margin-right":"0px"},500);
			}
			
			$("#submenu > section").removeClass("active");
			$("#submenu > section").eq(subIdx).addClass("active");
						
			submenuReset(subIdx);			
		}
		return false;
	});

	$(".gnb nav .menu li a").click(function(){
		$(".gnb nav .menu li").removeClass("active");
		$(".gnb nav .submenu li").removeClass("active");
		$(this).parent().addClass("active");
		submenuReset_All();
		$(".gnb .btn_gnb").css({"left": "", "transform": "", "transition-duration": ""}).animate({"right":""},500);
		$(".gnb nav").css({"left": "", "transform": "", "transition-duration": ""}).animate({"right":""},500);
		$("#submenu > section").removeClass("active");
		return false;
	});

	$("#submenu .btn_close-section").click(function(){
		submenuReset_All();
		$(".gnb nav .submenu li").removeClass("active");
		$(".gnb").addClass("active");
		$(".gnb .btn_gnb").css({"transform": "", "transition-duration": ""}).animate({"right":"", "left": "auto"},500);
		$(".gnb nav").css({"transform": "scale(1)", "transition-duration": ""}).animate({"right":"", "left": "auto"},500);
		$("#submenu > section").removeClass("active");
		return false;
	});

	var inquiry_policyOpened;
	$("#submenu > section.inquiry .accept_box button").click(function(){
		var policyHeight = $(this).parent().parent().siblings(".policy_contents").find(".contents_wrap").outerHeight();
		if (inquiry_policyOpened)
		{
			$(this).parent().parent().siblings(".policy_contents").animate({"height": "0"}, 500);
			inquiry_policyOpened = false;
		}else{
			$(this).parent().parent().siblings(".policy_contents").animate({"height": policyHeight + "px"}, 500);
			inquiry_policyOpened = true;
		}
		return false;
	});

	var apply_policyOpened;
	$("#submenu > section.apply .accept_box button").click(function(){
		var policyHeight = $(this).parent().parent().siblings(".policy_contents").find(".contents_wrap").outerHeight();
		if (apply_policyOpened)
		{
			$(this).parent().parent().siblings(".policy_contents").animate({"height": "0"}, 500);
			apply_policyOpened = false;
		}else{
			$(this).parent().parent().siblings(".policy_contents").animate({"height": policyHeight + "px"}, 500);
			apply_policyOpened = true;
		}
		return false;
	});

	$("#submenu .btn_close").click(function(){
		$("#submenu > section .section_inner form > div.policy_contents").animate({"height":"0px"},500);
		return false;
	});

	/*$(".media .media_inner .media_list > li .video_wrap").find("button").click(function(){
		if (!$(this).parent().siblings().find("video").played)
		{
			console.log("omg");
		}else{
			console.log("yea");
		}
		$(".media .media_inner .media_list > li .video_wrap").removeClass("active");
		$(this).parent().addClass("active");
		$(this).find(".cover").css({"display": "none"});
		$(this).find("video").trigger('play');
		return false;
	});*/

	$(".media .media_inner .media_list > li").each(function(){
		var videoPlay = false;

		$(this).find("button").click(function(){

			/*$("video").trigger('pause', 'stop');
			setTimeout(function(){
				//$("video").siblings(".cover").css({"display": "block"});
				$("video").currentTime = 0;
				videoPlay = false;
			});*/

			$(".media .media_inner .media_list > li .video_wrap").removeClass("active");

			if (videoPlay == true)
			{
				//$(this).find("video").trigger('pause', 'stop');
				$(this).find("video").on("timeupdate", function(){
					if (this.currentTime > 0)
					{
						this.pause();
						this.currentTime = 0;
						$(this).siblings(".cover").css({"display": "block"});
					}
				});
				videoPlay = false;
			}else{
				$(this).parent().addClass("active");
				$(this).find(".cover").css({"display": "none"});
				$(this).find("video").trigger('play');
				videoPlay = true;
			}
			console.log(videoPlay);
			return false;
		});

		$(this).find("video").bind("ended", function(){
			$(this).parent().parent().parent(".video_wrap").removeClass("active");
			$(this).siblings(".cover").css({"display": "block"});
			videoPlay = false;
		});
	});


	mediainnerScroll();
	//btnPosition();
});

function submenuResize()
{
	if (windowWidth > 768)
	{
		if (windowWidth > 1920)
		{
			$("#submenu .contact").css({"width": "1680px"});
		}else{
			$("#submenu .contact").css({"width": windowWidth - $(".gnb nav").outerWidth() + 31 + "px"});
		}
		$("#submenu .contact #map").css({"height": windowHeight + "px"});
	}else{
		$("#submenu .contact").css({"width": "100%"});
		$("#submenu .contact #map").css({"height": ""});
	}
}

function submenuReset(e)
{
	$("#submenu > section").each(function(){
		if ($(this).index() != e)
		{
			if (windowWidth > 768)
			{
				var marginWidth = $("#submenu > section").eq($(this).index()).outerWidth();
				if (marginWidth == 0)
				{
					marginWidth = parseInt($("#submenu > section").eq($(this).index()).css("width"));
				}
			}else{
				var marginWidth = windowWidth;
			}

			//console.log("submenuReset - marginWidth : " + marginWidth);
			$("#submenu > section").eq($(this).index()).stop().animate({"margin-right": "-" + marginWidth + "px"},500, function(){
				$(this).css({"display": "none"});
				if (!$(".gnb nav .submenu li").hasClass("active"))
				{
					$("#submenu").removeClass().css({"display": "none"});
				}
			});
		}		
	});
}

function submenuReset_All()
{
	$("#submenu > section").each(function(){
		if (windowWidth > 768)
		{
			var marginWidth = $("#submenu > section").eq($(this).index()).outerWidth();
			if (marginWidth == 0)
			{
				marginWidth = parseInt($("#submenu > section").eq($(this).index()).css("width"));
			}
		}else{
			var marginWidth = windowWidth;
		}

		//console.log("submenuReset_All - marginWidth : " + marginWidth);
		if (marginWidth != 0)
		{
			$("#submenu > section").eq($(this).index()).css({"margin-right": "-" + marginWidth + "px"});
		}else{
			$("#submenu > section").eq($(this).index()).css({"margin-right": "-100%"});
		}

		$("#submenu").removeClass().css({"display": "none"});
		$("#submenu > section").removeClass("active");
	});
}

/*
function btnPosition()
{
	if ($("#index").hasClass("show-main")){
		var halfHiehgt = ($("#index.show-main").outerHeight() / 2) - ($("#index .worklist .btn_worklist").outerHeight() / 2);

		if (windowHeight / 4 * 3 >= windowWidth || windowWidth <= 768)
		{
			windowWidth = $(window).outerWidth();
			if (checkBrowser() != "InternetExplorer")
			{
				$("#index .worklist .btn_worklist").css({"left":windowWidth + "px"}).offset({top: halfHiehgt});
				$("#index .worklist").mouseenter(function(){
					$("#index .worklist .btn_worklist").css({"left":windowWidth + "px"}).offset({top: halfHiehgt});
				});
				$("#index .worklist").mouseleave(function(){
					$("#index .worklist .btn_worklist").css({"left":windowWidth + "px"}).offset({top: halfHiehgt});
				});
			}else{
				$("#index .worklist .btn_worklist").css({"left":"0px"}).offset({top: halfHiehgt});
				$("#index .worklist").mouseenter(function(){
					$("#index .worklist .btn_worklist").css({"left":"0px"}).offset({top: halfHiehgt});
				});
				$("#index .worklist").mouseleave(function(){
					$("#index .worklist .btn_worklist").css({"left":"0px"}).offset({top: halfHiehgt});
				});
			}
		}else{
			$("#index .worklist .btn_worklist").offset({left: -80, top: halfHiehgt});
			$("#index .worklist").mouseenter(function(){
				$("#index .worklist .btn_worklist").offset({left: 160, top: halfHiehgt});
			});
			$("#index .worklist").mouseleave(function(){
				$("#index .worklist .btn_worklist").offset({left: -80, top: halfHiehgt});
			});
		}
	}
}*/

var mainKV = 0;
var kvDelay = 800;
function mainKV_Slider()
{
	$(".main .kv_list li").eq(mainKV).animate({"margin-left":"-100%"},kvDelay);
	mainKV++;	
	if ($(".main .kv_list li").length <= mainKV)
	{
		mainKV = 0;
	}
	$(".main .kv_list li").eq(mainKV).css({"margin-left":"100%"}).animate({"margin-left":"0%"},kvDelay);
	$(".main .title_list li").eq(mainKV).css({"display": "block", "opacity": "0"}).animate({"opacity": "1"}, kvDelay);
	$(".main .title_list li").eq(mainKV).siblings().animate({"opacity": "0"}, kvDelay, function(){
		$(this).css({"display": "none"});
	});

	/*if (windowHeight / 4 * 3 >= windowWidth)
	{
		$(".main .title_list li").eq(mainKV).css({"display": "block", "opacity": "0"}).animate({"opacity": "1"}, kvDelay);
		$(".main .title_list li").eq(mainKV).siblings().animate({"opacity": "0"}, kvDelay, function(){
			$(this).css({"display": "none"});
		});
	}*/

}

var mapLoad_able = false;
var map;
function mapLoad()
{
	if (!mapLoad_able)
	{
		mapLoad_able = true;

		mapboxgl.accessToken = 'pk.eyJ1IjoiYnJvd25vd2wiLCJhIjoiY2pqZ3NlYjgyMDFyeDN2bjhsMmVkY3hxcCJ9.OV_YOMcabOiafe4utjXe7w';
		map = new mapboxgl.Map({
			container: 'map',
			style: 'mapbox://styles/mapbox/dark-v9',
			zoom: 17,
			maxZoom:18,
			center: [126.915080, 37.545422]
		});
		infoLoad();
	}	
}

function infoLoad()
{
	map.on('load', function () {
		map.loadImage('images/marker.png', function(error, image) {
	        if (error) throw error;
		    map.addImage('NINEFIVE', image);

			map.addLayer({
				"id": "places",
				"type": "symbol",
				"source": {
					"type": "geojson",
					"data": {
						"type": "FeatureCollection",
						"features": [{
							"type": "Feature",
							"properties": {
								"description": "<p><strong>NINEFIVE</strong></p>2Fl, 38, Tojeong-ro Mapo-gu, Seoul",
								"icon": "theatre"
							},
							"geometry": {
								"type": "Point",
								"coordinates": [126.915080, 37.545422]
							}
						}]
					}
				},
				"layout": {
					"icon-image": "NINEFIVE",
					"icon-size": 1,
					"icon-allow-overlap": true
				}
			});
		});
	});

	map.on('click', 'places', function (e) {
        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;

        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }

        new mapboxgl.Popup()
            .setLngLat(coordinates)
            .setHTML(description)
            .addTo(map);
    });
}

function chnageLanguage()
{
	$.ajax({
		type: "GET",
		url: "./../xml/workList.xml",
		dataType: "xml",
		success: function(xml){
			$(xml).find("list").each(function(){
				var listTitle = $(this).find("title").text();
				var korCopy = $(this).find("kor_copy").text();
				var engCopy = $(this).find("eng_copy").text();
				//console.log("listTitle : " + listTitle + ", contentTitle : " + contentTitle);
				$(".worklist .worklist-yr li").each(function(){
					var contentTitle = $(this).find(".contents-title").text();
					var contentText = "";
					if (listTitle == contentTitle)
					{
						if (pageLanguage == "KR")
						{
							contentText = korCopy;
						}else{
							contentText = engCopy;
						}
						$(this).find(".contents-desc").html(contentText);
					}
					
				});
			}); 
		},
		error:function(request,status,error){
			//functionLog("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
			functionLog("code:"+request.status+"\n"+"error:"+error);
		}
	});

	aboutLanguage(pageLanguage);
}

var logAble = true;
function functionLog(txt)
{
	if (logAble)
	{
		console.log(txt);
	}
}
