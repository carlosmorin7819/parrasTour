$(document).ready(function () {
	// body...
	$("#menuIcon").click(function(){
		if ($("ul.menunav").hasClass("hideNav")) {
			$("ul.menunav").removeClass("hideNav");
			$("nav").removeClass("h0");
		}else{
			$("ul.menunav").addClass("hideNav");
			$("nav").addClass("h0");
		}
		
	});
});