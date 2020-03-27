$(function(){
	$('select').each(function () {

		// Cache the number of options
		var $this = $(this),
			numberOfOptions = $(this).children('option').length;

		// Hides the select element
		$this.addClass('s-hidden');

		// Wrap the select element in a div
		$this.wrap('<div class="select"></div>');

		// Insert a styled div to sit over the top of the hidden select element
		$this.after('<div class="styledSelect"></div>');

		// Cache the styled div
		var $styledSelect = $this.next('div.styledSelect');

		// Show the first select option in the styled div
		$styledSelect.text($this.children('option').eq(0).text());

		// Insert an unordered list after the styled div and also cache the list
		var $list = $('<ul />', {
			'class': 'options'
		}).insertAfter($styledSelect);

		// Insert a list item into the unordered list for each select option
		for (var i = 0; i < numberOfOptions; i++) {
			$('<li />', {
				text: $this.children('option').eq(i).text(),
				rel: $this.children('option').eq(i).val()
			}).appendTo($list);
		}

		// Cache the list items
		var $listItems = $list.children('li');

		// Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
		$styledSelect.click(function (e) {
			e.stopPropagation();
			$('div.styledSelect.active').each(function () {
				$(this).removeClass('active').next('ul.options').hide();
			});
			$(this).toggleClass('active').next('ul.options').toggle();
		});

		// Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
		// Updates the select element to have the value of the equivalent option
		$listItems.click(function (e) {
			e.stopPropagation();
			$styledSelect.text($(this).text()).removeClass('active');
			$this.val($(this).attr('rel'));
			$list.hide();
			/* alert($this.val()); Uncomment this for demonstration! */
		});

		// Hides the unordered list when clicking outside of it
		$(document).click(function () {
			$styledSelect.removeClass('active');
			$list.hide();
		});

	});

	$(".text_wrap").each(function(){
		if ($(this).find("input").not(":focus"))
		{
			checkVal();
			$(this).find(".placeholder").css({"display": "block"});
		}
		$(this).click(function(){
			$(this).find(".placeholder").css({"display": "none"});
			$(this).find("input").focus();
			$(this).find("textarea").focus();
			return false;
		});
	});

	$("body").click(function(){
		/*$(".text_wrap").each(function(){
			if ($(this).find("textarea").is("focus"))
			{
				console.log("hoho");
				$(this).find(".placeholder").css({"display": "none"});
			}else{
				console.log("haha");
				if ($(this).find("textarea").val() == "")
				{
					$(this).find(".placeholder").css({"display": "block"});
				}else{
					$(this).find(".placeholder").css({"display": "none"});
				}
			}
		});*/
		if ($("#submenu textarea").is(":focus"))
		{
			$(this).siblings(".placeholder").css({"display": "none"});
		}else{
			if ($("#submenu textarea").val() == "")
			{
				$(this).siblings(".placeholder").css({"display": "block"});
			}else{
				$(this).siblings(".placeholder").css({"display": "none"});
			}
		}
	});

	$(window).keyup(function(e){
		//console.log(document.activeElement);
		if ($("#submenu textarea").is(":focus"))
		{
			$(this).siblings(".placeholder").css({"display": "none"});
		}else{
			if ($("#submenu textarea").val() == "")
			{
				$(this).siblings(".placeholder").css({"display": "block"});
			}else{
				$(this).siblings(".placeholder").css({"display": "none"});
			}
		}
	});

	$(document).on("keydown","#submenu textarea", function(e) {
		if((e.keyCode === 9 && !e.shiftKey)){ // tab			
			if ($("#submenu textarea").val() == "")
			{
				$(this).siblings(".placeholder").css({"display": "block"});
			}else{
				$(this).siblings(".placeholder").css({"display": "none"});
			}
        };

        if((e.keyCode === 9 && e.shiftKey)){ // shift+tab
			if ($("#submenu textarea").val() == "")
			{
				$(this).siblings(".placeholder").css({"display": "block"});
			}else{
				$(this).siblings(".placeholder").css({"display": "none"});
			}
        };
	});

});

function checkVal() {
	var valCont = $(".text_wrap").find("input").val();
	var valEmpty;

	if (valCont === '')
	{
		valEmpty = true;
	}else{
		valEmpty = false;
	}
	console.log(valEmpty);
}