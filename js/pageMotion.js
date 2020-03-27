function aboutResize()
{
	//about
	$(".intro > .valign").css({"height": windowHeight + "px"});
	$(".about section").css({"height": windowHeight + "px"});

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

	var inputIdx = 0;
	var randArray = new Array();
	while(randArray.length < 30)
	{
		var sameAble = false;
		var randNum = (Math.floor(Math.random() * 39) + 1);
		for (var i = 0; i< randArray.length ;i++ )
		{
			if (randArray[i] == randNum)
			{
				sameAble = true;
			}
		}

		if (!sameAble)
		{
			randArray.push(randNum);
		}
	}

	for (var i = 0; i < $(".about .organization .bg_thumbs div").length ; i++ )
	{
		/*var rnd = (Math.floor(Math.random() * 10) + 1) / 10;
		$(".about .organization .bg_thumbs div").eq(i).css({"opacity":rnd});*/
		var rnd = (Math.floor(Math.random() * 7));
		switch (rnd)
		{
			case 0:
			{
				
				$(".about .organization .bg_thumbs div").eq(i).addClass("opacity10");
				break;
			}
			case 1:
			{
				$(".about .organization .bg_thumbs div").eq(i).addClass("opacity30");
				break;
			}case 2:
			{
				$(".about .organization .bg_thumbs div").eq(i).addClass("opacity60");
				break;
			}default:
			{
				$(".about .organization .bg_thumbs div").eq(i).addClass("pic");
				var className = "";
				if (rnd == 4)
				{
					className = "opacity10";
				}else if (rnd == 5)
				{
					className = "opacity30";
				}else if (rnd == 6)
				{
					className = "opacity60";
				}

				var thumbNum = randArray[inputIdx];
				inputIdx++;
				
				
				if (thumbNum < 10)
				{
					$(".about .organization .bg_thumbs div").eq(i).addClass(className).css({"background-image": "url('./../images/about/ppl/ppl_thumb00" + thumbNum +".png')"});
					
				}else if (thumbNum < 100)
				{
					$(".about .organization .bg_thumbs div").eq(i).addClass(className).css({"background-image": "url('./../images/about/ppl/ppl_thumb0" + thumbNum +".png')"});
				}else{
					$(".about .organization .bg_thumbs div").eq(i).addClass(className).css({"background-image": "url('./../images/about/ppl/ppl_thumb" + thumbNum +".png')"});
				}
				break;
			}
		}
	}

	$(".about .organization .bg_thumbs div").css({"width": thumbSize + "px", "height" : thumbSize + "px"}); 

	if ($(".about .awards").css("display") == "block")
	{
		partnersAwards_resize();
	}

}

function randomPhoto()
{
	organization();
	setInterval(function(){
		$(".about .organization .bg_thumbs").animate({"opacity":0},500);
		setTimeout(function(){
			organization();
			$(".about .organization .bg_thumbs").animate({"opacity":1},500);
		},500);
		
	},3000);
}

function organization()
{
	var inputIdx = 0;
	var randArray = new Array();
	while(randArray.length < 30)
	{
		var sameAble = false;
		var randNum = (Math.floor(Math.random() * 39) + 1);
		for (var i = 0; i< randArray.length ;i++ )
		{
			if (randArray[i] == randNum)
			{
				sameAble = true;
			}
		}

		if (!sameAble)
		{
			randArray.push(randNum);
		}
	}
	
	$(".about .organization .bg_thumbs div").removeClass("pic").removeClass("opacity10").removeClass("opacity30").removeClass("opacity60").css({"background-image": ""});
	for (var i = 0; i < $(".about .organization .bg_thumbs div").length ; i++ )
	{

		/*var rnd = (Math.floor(Math.random() * 10) + 1) / 10;
		$(".about .organization .bg_thumbs div").eq(i).css({"opacity":rnd});*/
		var rnd = (Math.floor(Math.random() * 7));
		switch (rnd)
		{
			case 0:
			{
				
				$(".about .organization .bg_thumbs div").eq(i).addClass("opacity10");
				
				break;
			}
			case 1:
			{
				$(".about .organization .bg_thumbs div").eq(i).addClass("opacity30");
				break;
			}case 2:  
			{
				$(".about .organization .bg_thumbs div").eq(i).addClass("opacity60");
				break;
			}default:  
			{
				$(".about .organization .bg_thumbs div").eq(i).addClass("pic");
				var className = "";
				if (rnd == 4)
				{
					className = "opacity10";
				}else if (rnd == 5)
				{
					className = "opacity30";
				}else if (rnd == 6)
				{
					className = "opacity60";
				}

				var thumbNum = randArray[inputIdx];
				inputIdx++;
				
				
				if (thumbNum < 10)
				{
					$(".about .organization .bg_thumbs div").eq(i).addClass(className).css({"background-image": "url('./../images/about/ppl/ppl_thumb00" + thumbNum +".png')"});
					
				}else if (thumbNum < 100)
				{
					$(".about .organization .bg_thumbs div").eq(i).addClass(className).css({"background-image": "url('./../images/about/ppl/ppl_thumb0" + thumbNum +".png')"});
				}else{
					//$(".about .organization .bg_thumbs div").eq(i).addClass(className).css({"background-image": "url('./../images/about/ppl/ppl_thumb" + thumbNum +".png')"});
				}
				break;
			}
		}
	}
}

var award = 1;
var beforeImg = 1;
function partnersAwards()
{
	if (viewportWidth() > 1440)
	{
		$(".about .awards .partner").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0px, 700px)"});
		$(".about .awards .award").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0px, -700px)"});
	}else if (viewportWidth() > 768)
	{
		$(".about .awards .partner").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0vw, 110.266vw)"});
		$(".about .awards .award").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0vw, -110.266vw)"});
	}else{
		$(".about .awards .partner").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0px, 700px)"});
		$(".about .awards .award").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0px, -700px)"});
	}
	
	setTimeout(function(){
		$(".about .awards .partner").css({"transition":"none", "animation":"partnerAwards_Up 7s linear infinite"});
		$(".about .awards .award").css({"transition":"none", "animation":"partnerAwards_Down 7s linear infinite"});
	},800);
	
	/*setTimeout(function(){
		$(".about .awards .partner").css({"transition":"transform 10s linear","transform":"translate(0px, -" + (award * 1000) + "px)"});
		$(".about .awards .award").css({"transition":"transform 10s linear","transform":"translate(0px, " + (award * 1000) + "px)"});
		setInterval(function(){
			++award;
			$(".about .awards .partner").css({"transition":"transform 10s linear","transform":"translate(0px, -" + (award * 1000) + "px)"});
			$(".about .awards .award").css({"transition":"transform 10s linear","transform":"translate(0px, " + (award * 1000) + "px)"});
		},10000);
	},800);
	setInterval(function(){
		console.log($(".about .awards .partner li").eq($(".about .awards .partner li").length-beforeImg).html());
		$(".about .awards .partner li").eq(0).before("<li>" + $(".about .awards .partner li").eq($(".about .awards .partner li").length-beforeImg).html() + "</li>");
		$(".about .awards .award li").eq(0).before("<li>" + $(".about .awards .award li").eq($(".about .awards .award li").length-beforeImg).html() + "</li>");
		beforeImg++;
	},1000);*/
}

function partnersAwards_resize()
{
	$(".about .awards .partner").css({"transition":"none","transform":""});
	$(".about .awards .award").css({"transition":"none","transform":""});

	if (viewportWidth() > 1440)
	{
		$(".about .awards .partner").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0px, 700px)"});
		$(".about .awards .award").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0px, -700px)"});
	}else if (viewportWidth() > 768)
	{
		$(".about .awards .partner").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0vw, 110.266vw)"});
		$(".about .awards .award").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0vw, -110.266vw)"});
	}else{
		$(".about .awards .partner").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0px, 700px)"});
		$(".about .awards .award").css({"transition":"transform 1s cubic-bezier(0.075, 0.820, 0.165, 1.000)","transform":"translate(0px, -700px)"});
	}
}

function singlePhoto(){
	this.index = 0;
	this.randNum = (Math.floor(Math.random() * 39) + 1);
	this.photoOpacity = 100;
	this.photo = function(){
		var rnd = (Math.floor(Math.random() * 7));
		switch (rnd)
		{
			case 0:
			{
				this.photoOpacity = 30;
				break;
			}
			case 1:
			{
				this.photoOpacity = 65;
				break;
			}
			case 2:
			{
				this.photoOpacity = 100;
				break;
			}
			default:
			{
				if (rnd == 3)
				{
					this.photoOpacity = 30;
				}else if (rnd == 3)
				{
					this.photoOpacity = 65;
				}else if (rnd == 3)
				{
					this.photoOpacity = 100;
				}

				if (thumbNum < 10)
				{
					thumbNum = "00" + thumbNum;
				}else if (thumbNum < 100)
				{
					thumbNum = "00" + thumbNum;
				}
				$(".about .organization .bg_thumbs div").eq(index).css({"background-image": "url('./../images/about/ppl/ppl_thumb0" + thumbNum +".png')"});
				break;
			}
		
		}
	};
}