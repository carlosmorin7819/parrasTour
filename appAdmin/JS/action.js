$(document).ready(function () {
	// body...
	$("#menuIcon").click(function(){
		if ($("ul.menunav").hasClass("hideNav")) {
			$("div.contentC").removeClass("w100");

			$("ul.menunav").removeClass("hideNav");
			$("nav").removeClass("h0");
		}else{
			$("ul.menunav").addClass("hideNav");
			$("div.contentC").addClass("w100");
			$("nav").addClass("h0");
		}
		
	});

	$("button#modalUser").click(function(){
		$("div.bgModal").removeClass("hidden");
		console.log("hola");
	})
	$("div.bgModal").click(function(){
		$(this).addClass("hidden");
	});
});