$(document).ready(function () {
	// body...
	$("#menuIcon").click(function(){
		if ($("ul.menunav").hasClass("hideNav")) {
			$("div.containerC").removeClass("noMargin-left");
			$("ul.menunav").removeClass("hideNav");
			$("nav").removeClass("h0");
		}else{
			$("div.containerC").addClass("noMargin-left");
			$("ul.menunav").addClass("hideNav");
			$("nav").addClass("h0");
		}
		
	});
});