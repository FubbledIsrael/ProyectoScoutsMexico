$.validator.addMethod("noSpace", function(value, element){
    return value == ''|| value.trim().length != 0;
},'No se permiten espacios');

$.validator.addMethod("phoneNumber", function(value, element){
    var regexPattern = new RegExp(/^[0-9-+]+$/);
    return regexPattern.test(value);
},'Numero de telefono invalido');

$("#logout").click(function (e) { 
    e.preventDefault();
    Swal.fire({
        title: 'Cerrar sesion',
        text: "Estas seguro en cerrar sesion?",
        position: "top",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Cerrar sesion'
      }).then((result) => {
            if (result.isConfirmed) {
                location.href = "../";
            }
      })
});