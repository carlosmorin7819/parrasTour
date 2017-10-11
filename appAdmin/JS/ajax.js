function login_validate() {
    event.preventDefault()
    var formData = new FormData($("#formLogin")[0]);
    var ruta = "CLASS/class.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
          
          alert("enviado");
          var data = datos;
          if (data == 1) {
            alert("si se arma");
            window.location.href = 'panel.php';
          }else{
            alert("no se arma");
            $('#formLogin')[0].reset();
            $("p.erromsg").removeClass("hidden").fadeOut(2000);
           

          }
        }
    });
}

function saveBed() {
   event.preventDefault()
    var formData = new FormData($("#formLogin")[0]);
    var ruta = "CLASS/class.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
         
        }
    });
}
$("a.add").click(function(){
    event.preventDefault();
    var rute = $(this).attr('href');
    $.get(rute, function(data, status){
        $("div.response").html(data);
    });
});

$("button.view").click(function(){
    event.preventDefault();
    var rute = 'CLASS/cotizar.php';
    $.get(rute, function(data, status){
        $("div.response").html(data);
    });
});
function save_user(){
    event.preventDefault();
    var formData = new FormData($("#formUser")[0]);
    var ruta = "CLASS/class.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
          alert("enviado");
          $("#formUser")[0].reset();
        }
    });
}
function save_costumer(){
    event.preventDefault();
    var formData = new FormData($("#formCostumer")[0]);
    var ruta = "CLASS/class.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
          alert("enviado");
          $("#formCostumer")[0].reset();
        }
    });

}

$("a.delete").click(function(){
    event.preventDefault();

   var id = $(this).attr('href');
   alert(id);
   
  
    $.get(id, function(data, status){
        alert(status);
       alert("Usuario eliminado");

        $("div.containerTable").empty();
        $("div.containerTable").html(data);
        $('#tableUsers').DataTable();

    });
});
/**function ajaxPdf(){
    var formData = new FormData($("#formGPfg")[0]);
    var ruta = "CLASS/pdfC.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos)
        {
            alert("listo");
        }
    });    
}**/