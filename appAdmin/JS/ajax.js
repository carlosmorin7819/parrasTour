function save_user(){
    event.preventDefault();
    var formData = new FormData($("#formUsers")[0]);
    var ruta = "CLASS/class.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        timeout: 3000,
        error: function(datos){
          alert("enviado");
          $("#formUsers")[0].reset();
        },
        success:function (datos){
            alert("si");
        }
    });
}