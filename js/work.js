$(function(){
	// 영상 플레이
/*	if($(".contents .movie").length > 0){
		var iframe = document.querySelector('iframe');
		var vimeoPlayer = new Vimeo.Player(iframe);

		var btn_play = $(".movie .movie_wrap > a.btn_vimeo_play");
		var isDesktop = check_allDevice() === "" ? true : false;
		var isPlay = false;

		// 데스크탑의 경우 플레이버튼과의 인터랙션, 자동재생 기능이 들어감
		// 모바일의 경우 플레이버튼 히든
		if(isDesktop){

			$(window).resize(onResize)
			.scroll(onScroll);

			onResize();
			function onResize(){

				var movie = $('#movie');

				var movieW = $(window).width();

				var movieWrap = $('.movie_wrap');
				var movieTarget = $('.movie_wrap iframe');

				var movieH = ((movieW*281)/500).toFixed(0);

				movieWrap.css('width', movieW).css('height', movieH).css('overflow', 'hidden');

				movieW = (movieW * 1) + 2;
				movieH = (movieH * 1) + 2;

				movieTarget.css('width', movieW).css('height', movieH).css({'position' : 'absolute', 'top' : 0, 'left' : 0, 'margin-left' : '-1px', 'margin-top' : '-1px' });
			};

			function onScroll(){

				var t = $(window).scrollTop();

				var startPoint;
				if($(window).height() > $('#vimeo_player').height())
				{
					startPoint = $('#vimeo_player').offset().top-($(window).height() - $('#vimeo_player').outerHeight() / 3 * 2);
				}
				else{
					startPoint = $('#vimeo_player').offset().top;
				}

				var endPoint = $('#vimeo_player').offset().top + ($('#vimeo_player').height() / 3);

				if(t > startPoint && t < endPoint){
					playVideo();
				//}else if(t < motionBegin - nafa.windowHeight || t > motionEnd + nafa.windowHeight){
				}else{ // 영상 멈추는 영역이 PDP 기준과 다름
					stopVideo();
				}

			};

			btn_play.click(function(){
				playVideo();
				return false;
			});

			function playVideo(){
				if(!isPlay){
					vimeoPlayer.play();
					btn_play.stop().animate({opacity:0}, 300, function(){
						$(this).css({display:"none"});
					});
				}
			}

			function stopVideo(){
				vimeoPlayer.api('pause');
			}

			vimeoPlayer.play().then(function() {
				// The video is playing
				isPlay = true;
				btn_play.stop().animate({opacity:0}, 300, function(){
					$(this).css({display:"none"});
				});
			}).catch(function(error) {
				switch (error.name) {
					case 'PasswordError':
						// The video is password-protected
						break;

					case 'PrivacyError':
						// The video is private
						break;

					default:
						// Some other error occurred
						break;
				}
			});

			vimeoPlayer.on('ended', function(data) {
				// `data` is an object containing properties specific to that event
				functionLog("finish");
				btn_play.css({display:"block"});
				btn_play.stop().animate({opacity:1}, 300);
				isPlay = false;
			});

			vimeoPlayer.getPaused().then(function(paused) {
				// `paused` indicates whether the player is paused
				functionLog("pause");
				btn_play.css({display:"block"});
				btn_play.stop().animate({opacity:1}, 300);
				isPlay = false;
			});

		}else{
			btn_play.css({display:"none"});
		}

	}

	// 영상 오버시 플레이버튼 이미지 변경
	$('.work_movie .btn_vimeo_play').hover(function(){
		$(this).children('img').attr('src','/images/work/work_vimeo_play_btn_hover.png');
	}, function(){
		$(this).children('img').attr('src','/images/work/work_vimeo_play_btn.png');
	});
	$('.work_movie .workVideoCover .btn_pause').hover(function(){
		$(this).children('img').attr('src','/images/work/work_video_pause_btn_hover.png');
	}, function(){
		$(this).children('img').attr('src','/images/work/work_video_pause_btn.png');
	});*/
});