 $(function() {
	fn_scroll_plugin();
	media_scroll_plugin();
});

function fn_scroll_plugin() {
	$(".worklist .worklist-list").mCustomScrollbar({
		theme : "dark-2",
		setLeft: "0px",
		mouseWheelPixels : 300, 
		scrollInertia : 200 
	});
}

function media_scroll_plugin() {
	$(".media_scroll").mCustomScrollbar({
		theme : "dark-2",
		setLeft: "0px",
		mouseWheelPixels : 300, 
		scrollInertia : 200,
		callbacks:{
			whileScrolling:function(){
				//console.log("top : " + this.mcs.top);
				mediaScroll = Math.abs(this.mcs.top);
				mediainnerScroll();
			}
		}
	});
}

function mediainnerScroll()
{
	if (mediaScroll >= 0)
	{
		//console.log("hoho");
		$(".media .media_inner .media_list > li").each(function(){
			var scrollTop = $(this).offset().top + $(this).outerHeight();
			//console.log(scrollTop);
			if (scrollTop <= windowHeight)
			{
				$(".media .media_inner .media_list > li").removeClass("active");
				$(this).siblings().find(".video_wrap").removeClass("active");
				$(this).addClass("active");
				$(this).siblings().find("video").trigger('pause');
			}
		});
	}
}
