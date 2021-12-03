$(document).ready(function() {

    $("#formLogin").validate({
        rules: {
            email: {
                required: true,
                email: true,
                noSpace: true
            },
            password: {
                required: true,
                noSpace: true
            }
        },
        messages: {
            email: {
                required: 'Se requiere tu correo electronico',
                email: 'Correo electronico invalido'
            },
            password: {
                required: 'Se requiere tu contraseña'
            }
        }
    });

    $("#btnLogin").click(function(e) {
        e.preventDefault();
        if ($('#formLogin').valid()) {
            $.ajax({
                type: "POST",
                url: 'controller/user.php',
                data: {
                    function: 'login',
                    email: $("#email").val(),
                    password: $("#password").val()
                },
                beforeSend: function() {
                    spinnerButton('#btnSpinner', '#btnText', '#btnLogin');
                },
                success: function(response) {
                    try {
                        var json = JSON.parse(response);
                        if (json.error == 0) {
                            showToast("success", "Bienvenido");
                            switch (json.role) {
                                case 1:
                                    location.href = "views/administrador.php";
                                    break;
                                case 2:
                                    location.href = "views/scout.php";
                                    break;
                                default:
                                    location.href = "views/home.php";
                                    break;
                            }
                        } else
                            showToast("error", "Usuario/Contraseña incorrecto");
                    } catch (e) {
                        showToast("error", "Ocurrio un error, intentelo de nuevo");
                    }

                    spinnerButton('#btnSpinner', '#btnText', '#btnLogin');
                }
            });
        }
    });
});