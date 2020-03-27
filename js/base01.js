$(document).on('mousedown', 'button, input[type="button"], input[type="submit"]', function(e) {
	e.preventDefault();
});

$(window).load(onLoad)
		.resize(onResize)
		.scroll(onScroll);
var windowWidth;
var windowHeight;
var mainKV_Interval;
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

	if (windowWidth < windowHeight)
	{
		$(".main .kv_list").css({"width": $("main").outerWidth() + "px", "height": $("main").outerWidth() + "px"});
		$(".intro .contents-obj img").css({"width": $("main").outerWidth() + "px", "height": $("main").outerWidth() + "px"});
	}else{
		$(".main .kv_list").css({"width": windowHeight + "px", "height": windowHeight + "px"});
		$(".intro .contents-obj img").css({"width": windowHeight + "px", "height": windowHeight + "px"});
	}

	if (windowHeight / 4 * 3 >= windowWidth)
	{
		$(".main .title_list").css({"display": "block"});
		$(".main .title_list li").eq(mainKV).css({"display": "block", "opacity": "1"});
	}else{
		$(".main .title_list").css({"display": "none"});
		$(".main .title_list li").css({"display": "none", "opacity": "0"});
	}

	btnPosition();
	aboutResize();
}

var scrollTop = 0;
function onScroll()
{
	btnPosition();
}

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
			gnbOpened = false;
		}
		return false;
	});
	//common
	var gnbOpened = false;
	$(".gnb .btn_gnb").click(function(){
		if (gnbOpened)
		{
			$(".gnb").removeClass("active");
			gnbOpened = false;
		}else{
			$(".gnb").addClass("active");
			gnbOpened = true;
		}
		return false;
	});
	$(document).on("click",".gnb .btn_gnb",function(){
		if (gnbOpened)
		{
			$(".gnb").removeClass("active");
			gnbOpened = false;
		}else{
			$(".gnb").addClass("active");
			gnbOpened = true;
		}
		return false;
	});

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
			console.log("2");
			$(".gnb").removeClass("active");
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
		
	$(".worklist .worklist-list .btn_main").click(function(){
		if ($("#index").hasClass("show-work"))
		{
			$("#index").removeClass("show-work");
		}
		$("#index").addClass("show-main");
		setTimeout(function(){
			btnPosition();
		},100);
		mainKV_Interval = setInterval(mainKV_Slider,3000);
		return false;
	});

	$(".worklist .worklist-list .btn_worklist").click(function(){
		clearInterval(mainKV_Interval);

		if ($("#index").hasClass("show-main"))
		{
			$("#index").removeClass("show-main");
		}
		$("#index").addClass("show-work");
		return false;
	});

	$(".worklist .worklist-inner .thumb-list li a").click(function(){
		if ($("#index").hasClass("show-main"))
		{
			clearInterval(mainKV_Interval);

			$("#index").removeClass("show-main");
			$("#index").addClass("show-work");
		}
		var dataURL = $(this).attr("data-url");

		$(".worklist .worklist-popup .detail_inner").html("");
		if ($(".lang button").text() == "KR")
		{
			$(".worklist .worklist-popup .detail_inner").load("./work/kor/" + dataURL + ".php");
		}else{
			$(".worklist .worklist-popup .detail_inner").load("./work/eng/" + dataURL + ".php");
		}
		
		$(".worklist .worklist-popup").css({"display": "block"}).animate({"opacity": "1"}, 300);
	});

	$(".worklist .worklist-popup .btn_close").click(function(){
		$(this).parent().animate({"opacity": "0"}, 300, function(){
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

	$("button").click(function(){
		if (!$(this).hasClass("btn_gnb"))
		{
			if (gnbOpened)
			{
				$(".gnb").removeClass("active");
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

								$("#index").addClass("show-main");
								$("#index").removeClass("show-about");
								setTimeout(function(){
									$(".worklist").css({"transition":"", "-webkit-transition":""});
								},500);
								mainKV_Interval = setInterval(mainKV_Slider,3000);
							},1000);
						},1000);
					});
				}else if ($("#index").hasClass("show-work"))
				{
					$("#index").removeClass("show-work");
					$("#index").addClass("show-main");

					mainKV_Interval = setInterval(mainKV_Slider,3000);
				}
				break;
			}
			case 1:
			{
				if (!$("#index").hasClass("show-about"))
				{
					if ($("#index").hasClass("show-work"))
					{
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

	btnPosition();
});

function btnPosition()
{
	if ($("#index").hasClass("show-main")){
		var halfHiehgt = ($("#index.show-main").outerHeight() / 2) - ($("#index .worklist .worklist-list .btn_worklist").outerHeight() / 2);

		if (windowHeight / 4 * 3 >= windowWidth || windowWidth <= 768)
		{
			windowWidth = $(window).outerWidth();
			if (checkBrowser() != "InternetExplorer")
			{
				$("#index .worklist .worklist-list .btn_worklist").css({"left":windowWidth + "px"}).offset({top: halfHiehgt});
				$("#index .worklist").mouseenter(function(){
					$("#index .worklist .worklist-list .btn_worklist").css({"left":windowWidth + "px"}).offset({top: halfHiehgt});
				});
				$("#index .worklist").mouseleave(function(){
					$("#index .worklist .worklist-list .btn_worklist").css({"left":windowWidth + "px"}).offset({top: halfHiehgt});
				});
			}else{
				$("#index .worklist .worklist-list .btn_worklist").css({"left":"0px"}).offset({top: halfHiehgt});
				$("#index .worklist").mouseenter(function(){
					$("#index .worklist .worklist-list .btn_worklist").css({"left":"0px"}).offset({top: halfHiehgt});
				});
				$("#index .worklist").mouseleave(function(){
					$("#index .worklist .worklist-list .btn_worklist").css({"left":"0px"}).offset({top: halfHiehgt});
				});
			}
		}else{
			$("#index .worklist .worklist-list .btn_worklist").offset({left: -80, top: halfHiehgt});
			$("#index .worklist").mouseenter(function(){
				$("#index .worklist .worklist-list .btn_worklist").offset({left: 160, top: halfHiehgt});
			});
			$("#index .worklist").mouseleave(function(){
				$("#index .worklist .worklist-list .btn_worklist").offset({left: -80, top: halfHiehgt});
			});
		}
	}
}

var mainKV = 0;
var kvDelay = 800;
function mainKV_Slider()
{
	$(".main .kv_list li").eq(mainKV).animate({"margin-top":"-100%"},kvDelay);
	mainKV++;	
	if ($(".main .kv_list li").length <= mainKV)
	{
		mainKV = 0;
	}
	$(".main .kv_list li").eq(mainKV).css({"margin-top":"100%"}).animate({"margin-top":"0%"},kvDelay);

	if (windowHeight / 4 * 3 >= windowWidth)
	{
		$(".main .title_list li").eq(mainKV).css({"display": "block", "opacity": "0"}).animate({"opacity": "1"}, kvDelay);
		$(".main .title_list li").eq(mainKV).siblings().animate({"opacity": "0"}, kvDelay, function(){
			$(this).css({"display": "none"});
		});
	}

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
