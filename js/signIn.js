$(document).ready(function(){

    $("#formSignIn").validate({
        rules:{
            email:{
                required: true,
                email: true,
                noSpace: true
            },
            password:{
                required: true,
                noSpace: true
            }
        },
        messages:{
            email:{
                required:'Se requiere tu correo electronico',
                email: 'Correo electronico invalido'
            },
            password:{
                required:'Se requiere tu contraseña'
            }
        }
    });

    $("#btnSignIn").click(function (e) { 
        e.preventDefault();
        if($('#formSignIn').valid()){
            location.href = "./pages/home.php";
        }
    });
});