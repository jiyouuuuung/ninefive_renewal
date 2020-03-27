function aboutLanguage(l)
{
	$(".about .we_are h2").html("We are");
	$(".about .we_are li").eq(0).find("h3").html("GLOBAL");
	$(".about .we_are li").eq(0).find("dt").html("Global Competitiveness.");
	$(".about .we_are li").eq(0).find("dd").html("NINEFIVE is a global company focused on global markets since birth. We have years of global project experience.");
	$(".about .we_are li").eq(1).find("h3").html("DIGITAL DESIGN");
	$(".about .we_are li").eq(1).find("dt").html("Various digital designs.");
	$(".about .we_are li").eq(1).find("dd").html("We design various digital platforms. We aim to produce more diverse and specialized UX designs. There is no limit to the field of digital design.");
	$(".about .we_are li").eq(2).find("h3").html("NINEFIVE");
	$(".about .we_are li").eq(2).find("dt").html("95% Effort. Philosophy we live by.");
	$(".about .we_are li").eq(2).find("dd").html("By the philosophy that the effort and the process is important, we give the best results by paying close attention from beginning to end.");
	$(".about .we_do h2").html("We do");
	$(".about .process h2").html("Our process");
	$(".about .process .contents p").html("The philosophy of NINEFIVE is in our process. For better results, it is important to repeat the correction step by step and go through a detailed inspection step. It’s all about 95% of the process.");
	//$(".about .process li.circle-big .contents-desc").html("");
	//$(".about .process li.circle-sml.outer .contents-desc").html("");
	$(".about .organization h2").html("Organization");		
	$(".about .organization .contents p").html("NINEFIVE consists of 4 teams: Planning, Design, Media and Development. Each team has its own strong capability and works each other organically. Full of passionate and sincere people.");
	
	$(".about .awards h2").html("Partners&Awards");
	$(".about .awards .contents p").html("The promise with the client is the most important to NINEFIVE. We strive to create beyond what our customers want and communicate closely to become a trustworthy partner. This passion has been proven with several global awards.");
	
	$(".media .media_inner .media_list > li").eq(0).find(".contents-desc").html("NINEFIVE creates commercial videos optimized for mobile environments based on rich technological skills and know-how such as planning, filming, editing, motion, and 3D. We are offering a new media advertisement with a unique performance that goes beyond the existing TVC style.");
	$(".media .media_inner .media_list > li").eq(1).find(".contents-desc").html("We produce dynamic motion graphics without any limitations on the media, ranging from FX using 2D / 3D tools to full animation and future oriented AR / VR contents. We offer various ideas attract users in a moment’s time and the ways to push the boundaries of content formats.");
	$(".media .media_inner .media_list > li").eq(2).find(".contents-desc").html("We have the stunning 3D skills which are possible to respond to all fields, including products, interior design, FXs, animations, characters, and compositing. Through the design and filming team's organic cooperative system, we deliver high quality results with the fast pace of production.");
	$(".media .media_inner .media_list > li").eq(3).find(".contents-desc").html("With ample filming experience and production level technical capabilities including steal video, action camera, drone, steady cam, 360 VR, it is possible to produce high quality video products such as commercial, music video, field shooting, and viral marketing.");

	if (l == "KR")
	{
		$(".about .we_are li").eq(0).find("dd").html("나인파이브는 시작부터 글로벌 시장에 중점을 둔 글로벌 기업입니다. 우리는 수년간의 글로벌 프로젝트 경험을 가지고 있습니다.");
		$(".about .we_are li").eq(1).find("dd").html('다양한 디지털 플랫폼을 디자인합니다. 사용자 경험을 <span class="nowrap">중심으로 더 전문적이고</span> 다양한 UX 디자인을 지향하고 <span class="nowrap">있으며, 디지털 분야의</span> 끝없는 가능성을 믿습니다.');
		$(".about .we_are li").eq(2).find("dd").html("95% 의 노력 , 과정이 중요하다는 철학으로 처음부터 끝까지 세심한 주의를 기울여 최고의 결과를 제공합니다.");
		$(".about .process .contents p").html("아무리 작은 프로젝트라 할지라도, 최상의 결과물을 내기 위해 최적의 반복작업, 꼼꼼한 검수를 거쳐서 완료합니다. 제작하는 즐거움, 고객사의 만족, 사용자의 사용하는 즐거움을 위한 효율적인 프로세스를 추구합니다.");
		$(".about .organization .contents p").html("기획, 디자인, 미디어, 개발, 총 4개의 팀으로 구성 됩니다. 각 팀은 자체의 고유한 역량을 바탕으로, 분업화되면서도 유기적으로 협력합니다. 디지털 디자인을 향한 열정, 95퍼센트의 노력을 바탕으로 한 성실함을 중요시 합니다.");	
		$(".about .awards .contents p").html("고객과의 약속은 나인파이브에게 가장 중요합니다. 고객이 원하는 것 이상으로 창조하고자 노력하며, 신뢰할수 있는 파트너가 되기 위해 긴밀하게 커뮤니케이션하고 정확한 딜리버리를 약속 드립니다. 이와 같은 열정은 여러 글로벌 어워드로도 증명되고 있습니다.");
		
		$(".media .media_inner .media_list > li").eq(0).find(".contents-desc").html("기획, 촬영, 편집, 모션, 3D 등 풍부한 기술력과 노하우를 바탕으로 모바일 환경에 최적화된 광고 영상을 제작합니다. 기존의 TVC 스타일을 벗어난 독창적인 연출로 새로운 미디어 광고를 제안해 드립니다.");
		$(".media .media_inner .media_list > li").eq(1).find(".contents-desc").html("2D/3D Tool을 활용한 FX부터 풀 애니메이션, 미래지향적 AR/VR 콘텐츠까지 미디어의 제한 없이 다이나믹한 모션그래픽을 제작합니다. 짧은 시간 내 사용자의 시선을 집중시키는 다양한 아이디어와 연출을 통해 콘텐츠 형식의 경계를 뛰어 넘는 새로운 방식을 제공합니다.");
		$(".media .media_inner .media_list > li").eq(2).find(".contents-desc").html("제품, 인테리어, FX, 애니메이션, 캐릭터, 컴포지팅 등 모든 분야 대응 가능한 3D 기술력을 보유하고 있습니다. 나아가 디자인 및 촬영팀의 유기적인 협력 체계를 통해 빠른 제작 속도와 높은 퀄리티의 결과물을 제공합니다.");
		$(".media .media_inner .media_list > li").eq(3).find(".contents-desc").html("스틸, 영상, 액션캠, 드론, 스테디캠, 360VR까지 프로덕션 수준의 기술력과 풍부한 촬영 경험으로 광고, 바이럴, 뮤직비디오, 현장촬영까지 다양한 분야의 퀄리티 있는 영상 제작이 가능합니다.");
	}
}
