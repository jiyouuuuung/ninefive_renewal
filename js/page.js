
/* Initialization code. */
if (window.addEventListener)
	window.addEventListener('DOMMouseScroll', wheel);

window.onmousewheel = document.onmousewheel = wheel;

var scrollIng = false;
function wheel(event){
	if (scrollIng || $("#index").hasClass("popup_active") || $("#index").hasClass("show-work") || $("#index").hasClass("show-media") || $("#submenu").css("display") == "block")
	{
		return false;
	}
	
	var delta = 0;
	if (!event) event = window.event;
	if (event.wheelDelta) {
		delta = event.wheelDelta/120;
	
	if (window.opera) 
		delta = -delta;
	} else if (event.detail) 
		delta = -event.detail/baseDelta;
	
	if (delta) 
		handle(delta);
}

var oldPageIndex = 0;
var pageIndex = 0;
var fullDelta = 0;
var baseDelta = 1;
function handle(delta)
{
	if (delta > 0)
	{
		delta = 1;
	}else{
		delta = -1;
	}
	
	if ($("body").innerHeight() < $("main").innerHeight())
	{
		if ($(document).scrollTop() == $("main").innerHeight() - $("body").innerHeight())
		{
			++devicePage_up;
		}else{
			devicePage_up = 0;
		}
		

		if ($(document).scrollTop() == 0)
		{
			++devicePage_down;
		}else{
			devicePage_down = 0;
		}
		

		if (devicePage_up >= 6 || devicePage_down >= 6)
		{
			devicePage_up = 0;
			devicePage_down = 0;

			fullDelta -= delta;
			if(fullDelta < 0)
				 fullDelta = 0;
			
			pageIndex = parseInt(fullDelta/baseDelta);
			if(pageIndex != oldPageIndex)
			{
				showPage(pageIndex);
			}
		}
	}else{
		devicePage_up = 0;
		devicePage_down = 0;

		fullDelta -= delta;
		if(fullDelta < 0)
			 fullDelta = 0;
		
		pageIndex = parseInt(fullDelta/baseDelta);
		if(pageIndex != oldPageIndex)
		{
			showPage(pageIndex);
		}
	}
}

function showPage(page)
{
	console.log("showPage : " + page);
	scrollIng = true;
	switch (page)
	{
		case 0:
		{
			$(".about_wrap .about").animate({"margin-top": windowHeight + "px"},1000);
			$(".about_wrap .intro").css({"margin-top":-windowHeight + "px", "opacity":1}).animate({"margin-top":"0%"},1000);
			setTimeout(function(){
				$(".about_wrap").animate({"opacity":0},500,function(){
					$(this).css({"margin-top":"100%"});
				});
				$(".main").animate({"opacity":1},500);
				setTimeout(function(){
					$(".about_wrap").html("");
					pageIndex = 0;
					fullDelta = 0;
					oldPageIndex = 0;
					scrollIng = false;
					
					mainKV_Interval = setInterval(mainKV_Slider,3000);
					$("#index").addClass("show-main");
					$("#index").removeClass("show-about");
				},1000);
			},1000);
			break;
		}
		case 1:
		{
			$(".about section").css({"height": windowHeight + "px"});
			if (oldPageIndex < page)
			{
				clearInterval(mainKV_Interval);
				$(".about_wrap").load("about.php", function(){
					aboutLanguage(pageLanguage);
					
					if (windowWidth < windowHeight)
					{
						$(".intro .contents-obj img").css({"width": $("main").outerWidth() + "px", "height": $("main").outerWidth() + "px"});
						$(".intro > .valign").css({"height": $("#index").outerHeight() + "px"});
					}else{
						$(".intro .contents-obj img").css({"width": windowHeight + "px", "height": windowHeight + "px"});
						$(".intro > .valign").css({"height": windowHeight + "px"});
					}
					
					clearInterval(mainKV_Interval);
					$("#index").removeClass("show-main");
					$("#index").addClass("show-about");

					setTimeout(function(){
						$(".about_wrap").css({"opacity":1, "margin-top":"0px"});
						$(".main").animate({"opacity":0},500);
						$(".about_wrap .intro").animate({"opacity":1},500);
						setTimeout(function(){
							$(".about_wrap .intro").animate({"margin-top":-windowHeight + "px"},1000);
							$(".about_wrap .about").css({"margin-top":windowHeight + "px", "opacity":1}).animate({"margin-top":"0px"},1000);
							setTimeout(function(){
								$(".about .we_are li .circle .circle-bg").animate({"opacity":"1"},500);
								$(".about .we_are li .circle .circle-bg").css({"animation":"circleRotate 10s linear infinite"});

								$(".about .we_are ul li").eq(0).find("dd").css({"transition":"all 0.5s","transform":"translate(0px, 0px)", "opacity":1});
								$(".about .we_are ul li").eq(1).find("dd").css({"transition":"all 0.5s 0.2s","transform":"translate(0px, 0px)", "opacity":1});
								$(".about .we_are ul li").eq(2).find("dd").css({"transition":"all 0.5s 0.4s","transform":"translate(0px, 0px)", "opacity":1});
								scrollIng = false;
							},1000);
						},1000);
					},500);
				});	
			}else{
				$(".about section").eq(1).animate({"opacity":0},500,function(){
					$(this).css({"display":"none"});
					$(".about section").eq(0).css({"display":"block","opacity":0}).animate({"opacity":1},500);
					setTimeout(function(){
						scrollIng = false;
					},1000);
				});
			}			
			break;
		}case 2:
		{
			$(".about section").css({"height": windowHeight + "px"});
			if (oldPageIndex < page)
			{
				if (viewportWidth() > 768)
				{
					$(".about .we_do li").eq(0).find(".circle-bg").css({"transform":"translate(0px, -100px)","opacity":0});
					$(".about .we_do li").eq(1).find(".circle-bg").css({"transform":"translate(0px, 100px)","opacity":0});
					$(".about .we_do li").eq(2).find(".circle-bg").css({"transform":"translate(0px, -100px)","opacity":0});
					$(".about .we_do li").eq(3).find(".circle-bg").css({"transform":"translate(0px, 100px)","opacity":0});
				}else{
					$(".about .we_do li").eq(0).find(".circle-bg").css({"transform":"translate(100px, 0px)","opacity":0});
					$(".about .we_do li").eq(1).find(".circle-bg").css({"transform":"translate(-100px, 0px)","opacity":0});
					$(".about .we_do li").eq(2).find(".circle-bg").css({"transform":"translate(100px, 0px)","opacity":0});
					$(".about .we_do li").eq(3).find(".circle-bg").css({"transform":"translate(-100px, 0px)","opacity":0});
				}
				
				$(".about section").eq(0).animate({"opacity":0},500,function(){
					$(this).css({"display":"none"});
					$(".about section").eq(1).css({"display":"block","opacity":0}).animate({"opacity":1},500);

					var doIndex = $(".we_do ul li").length;
					var doWidth = $(".about .we_do li .circle").outerWidth();
					var doOverlap;

					if (windowWidth >= 1440)
					{
						doOverlap = 36;
					}else if (windowHeight / 4 * 3 < windowWidth && windowWidth < 1440 && windowWidth > 768 || (windowWidth >= windowHeight && check_allDevice() != ""))
					{
						doOverlap = 36 / 1440 * windowWidth;
					}else{
						doOverlap = 43 / 768 * windowWidth;
					}

					for (i = 1; i <= doIndex; i++)
					{
						/*if (windowHeight / 4 * 3 >= windowWidth || windowWidth <= 768) {
							$(".we_do ul li").eq(i).css({"position": "relative", "margin-top": "-" + doOverlap + "px", "margin-left": ""});
						}else{
							$(".we_do ul li").eq(i).css({"position": "absolute", "margin-left": (i * doWidth) - (i * doOverlap) + "px", "margin-top": ""});
						}*/
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

					$(".about .we_do li").eq(0).find(".circle-bg").css({"transition":"all 0.5s 0.5s","transform":"translate(0px, 0px)","opacity":1});
					$(".about .we_do li").eq(1).find(".circle-bg").css({"transition":"all 0.5s 0.7s","transform":"translate(0px, 0px)","opacity":1});
					$(".about .we_do li").eq(2).find(".circle-bg").css({"transition":"all 0.5s 0.9s","transform":"translate(0px, 0px)","opacity":1});
					$(".about .we_do li").eq(3).find(".circle-bg").css({"transition":"all 0.5s 1.1s","transform":"translate(0px, 0px)","opacity":1});

					setTimeout(function(){
						scrollIng = false;
					},1000);
				});
			}else{
				$(".about section").eq(2).animate({"opacity":0},500,function(){
					$(this).css({"display":"none"});
					$(".about section").eq(1).css({"display":"block","opacity":0}).animate({"opacity":1},500);

					var doIndex = $(".we_do ul li").length;
					var doWidth = $(".about .we_do li .circle").outerWidth();
					var doOverlap;

					if (windowWidth >= 1440)
					{
						doOverlap = 36;
					}else if (windowHeight / 4 * 3 < windowWidth && windowWidth < 1440 && windowWidth > 768 || (windowWidth >= windowHeight && check_allDevice() != ""))
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
					setTimeout(function(){
						scrollIng = false;
					},1000);
				});
			}			
			break;
		}case 3:
		{
			$(".about section").css({"height": windowHeight + "px"});
			if (oldPageIndex < page)
			{
				$(".about section").eq(1).animate({"opacity":0},500,function(){
					$(this).css({"display":"none"});
					$(".about section").eq(2).css({"display":"block","opacity":0}).animate({"opacity":1},500);
					setTimeout(function(){
						scrollIng = false;
					},1000);
				});
			}else{
				$(".about section").eq(3).animate({"opacity":0},500,function(){
					$(this).css({"display":"none"});
					$(".about section").eq(2).css({"display":"block","opacity":0}).animate({"opacity":1},500);
					setTimeout(function(){
						scrollIng = false;
					},1000);
				});
			}
			break;
		}case 4:
		{
			$(".about section").css({"height": windowHeight + "px"});

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
			var bgWidth = Math.ceil(windowWidth / thumbSize) + 1;
			var bgHeight = Math.ceil(windowHeight / thumbSize) + 1;
			$(".about .organization .bg_thumbs").html("").css({"width" : bgWidth * thumbSize + "px", "height" : bgHeight * thumbSize + "px"});
			for (i = 0; i <= (bgWidth * bgHeight); i++)
			{
				var addThumb = document.createElement("div");
				$(".about .organization .bg_thumbs").append(addThumb);
			}
			
			$(".about .organization .bg_thumbs div").css({"width": thumbSize + "px", "height" : thumbSize + "px"});

			randomPhoto();

			if (oldPageIndex < page)
			{
				$(".about section").eq(2).animate({"opacity":0},500,function(){
					$(this).css({"display":"none"});
					$(".about section").eq(3).css({"display":"block","opacity":0}).animate({"opacity":1},500);
					setTimeout(function(){
						scrollIng = false;
					},1000);
				});
			}else{
				$(".about section").eq(4).animate({"opacity":0},500,function(){
					$(this).css({"display":"none"});
					$(".about section").eq(3).css({"display":"block","opacity":0}).animate({"opacity":1},500);
					setTimeout(function(){
						scrollIng = false;
					},1000);
				});
			}
			break;
		}case 5:
		{
			$(".about section").css({"height": windowHeight + "px"});
			if (oldPageIndex < page)
			{
				$(".about section").eq(3).animate({"opacity":0},500,function(){
					$(this).css({"display":"none"});
					$(".about section").eq(4).css({"display":"block","opacity":0}).animate({"opacity":1},500);
					setTimeout(function(){
						partnersAwards();
						scrollIng = false;
					},1000);
				});
			}
			break;
		}case 6:
		{
			$(".about section").eq(4).animate({"opacity":0},500,function(){
				$(this).css({"display":"none"});
				$(".about_wrap .intro").css({"margin-top":"0px","opacity":0}).animate({"opacity":1},500);
				setTimeout(function(){
					$(".about_wrap").animate({"opacity":0},500,function(){
						$(this).css({"margin-top":"100%"});
					});
					$(".main").animate({"opacity":1},500);
					setTimeout(function(){
						$(".about_wrap").html("");
						pageIndex = 0;
						fullDelta = 0;
						oldPageIndex = 0;
						scrollIng = false;
						
						mainKV_Interval = setInterval(mainKV_Slider,3000);
						$("#index").addClass("show-main");
						$("#index").removeClass("show-about");
					},1000);
				},1000);
			});
		}	
	}

	oldPageIndex = page;
}



/////////////////////////////////////////



var swipeMoving = 0;
var swipeMove = 0;
var swipeStPosition = 0;
var swipeEdPosition = 0;

var devicePage_up = 0;
var devicePage_down = 0;

var mF3_11 = 0;
var txtSwipeNum = 0;

function deviceSwipe()
{
	var startPosition = 0;
	var endPosition = 0;
	var movePosition = 0;
	$(document).bind('touchstart', function(e) {
		var event = e.originalEvent;
		startPosition = event.touches[0].screenY;
		//e.preventDefault();	//	이벤트취소

	});

	$(document).bind('touchmove', function(e) {
		var event = e.originalEvent;
		endPosition = event.touches[0].screenY;	
		//event.preventDefault();
	});

	$(document).bind('touchend', function(e) {
		if (startPosition != 0 && endPosition != 0)
		{
			movePosition = endPosition - startPosition;
		}
		

/*		if (scrollIng || $("#index").hasClass("show-work"))
		{
			//return false;
		}*/

		console.log("body : " + $("body").innerHeight() + ", main : " + $("main").innerHeight());
		if (Math.abs(movePosition) > 100)
		{
			if (movePosition > 0)
			{
				movePosition = 1;
			}else{
				movePosition = -1;
			}
			
			if ($("body").innerHeight() < $("main").innerHeight())
			{
				if ($(document).scrollTop() == $("main").innerHeight() - $("body").innerHeight() && movePosition < 0)
				{
					++devicePage_up;
				}else{
					devicePage_up = 0;
				}
				

				if ($(document).scrollTop() == 0 && movePosition > 0)
				{
					++devicePage_down;
				}else{
					devicePage_down = 0;
				}

				if (devicePage_up >= 2 || devicePage_down >= 2)
				{
					devicePage_up = 0;
					devicePage_down = 0;

					fullDelta -= movePosition;
					if(fullDelta < 0)
						 fullDelta = 0;
					
					pageIndex = parseInt(fullDelta/baseDelta);
					if(pageIndex != oldPageIndex)
					{
						showPage(pageIndex);
					}
				}
			}else{
				devicePage_up = 0;
				devicePage_down = 0;

				fullDelta -= movePosition;
				if(fullDelta < 0)
					 fullDelta = 0;
				
				pageIndex = parseInt(fullDelta/baseDelta);
				if(pageIndex != oldPageIndex)
				{
					showPage(pageIndex);
				}
			}
		}
		startPosition = 0;
		endPosition = 0;
		movePosition = 0;

		if (swipeStPosition != 0 && swipeEdPosition != 0)
		{
			swipeMove = swipeMoving;
			swipeEdPosition = 0;
			swipeStPosition = 0;
			swipeMoving = 0;

			console.log("swipeMove : " + swipeMove);
		}
	});
}


