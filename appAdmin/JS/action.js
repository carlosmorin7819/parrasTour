$(document).ready(function () {
	 $('#tableUsers').DataTable();	

	$("a.previous").empty().html("<");
	$("a.previous").click(function (){
		$(this).empty().html("<");
	});

	$("a.next").empty().html(">");
	$("a.next").click(function (){
		$(this).empty().html(">");
	});
});
function modalBed(){
	$("#bgBlack").fadeIn('fast');
	$(".containerForm").fadeIn('fast');
}
function closeModal(){
	$("#bgBlack").fadeOut('fast');
	$(".containerForm").fadeOut('fast');
}
function modalUser(){
	$("#bgBlack").fadeIn('fast');
	$(".containerForm").fadeIn('fast');
}
