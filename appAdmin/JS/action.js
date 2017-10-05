$(document).ready(function () {
	// body...
	$("#menuIcon").click(function(){
		if ($("ul.menunav").hasClass("hideNav")) {
			$("div.contentC").removeClass("w100");
			$("ul.menunav").removeClass("hideNav");
			$("nav").removeClass("h0");
		}else{
			$("div.containerC").addClass("noMargin-left");
			$("ul.menunav").addClass("hideNav");
			$("div.contentC").addClass("w100");
			$("nav").addClass("h0");
		}
		
	});

	$("button#modalUser").click(function(){
		$("div.bgModal").removeClass("hidden");
		$("form.formUsers").removeClass("hidden");
		console.log("hola");
	})
	$("div.bgModal").click(function(){
		$(this).addClass("hidden");
		$("form.formUsers").addClass("hidden");
	});



	function saveUser() {
		event.preventDefault();
		var formData = new FormData($("form#formUsers")[0]);
		var ruta = "CLASS/users.php";

		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			cache: false,
            timeout: 6000,
			success: function (datos) {
				alert();
			}
		});
		// body...
	}
});
