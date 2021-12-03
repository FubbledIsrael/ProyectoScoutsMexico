function spinnerButton(spinner, text, button) {
    $(button).toggleClass("disabled");
    $(text).toggleClass("d-none");
    $(spinner).toggleClass("d-none");
}

$("#logout").click(function(e) {
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
            $.ajax({
                type: "POST",
                url: "../controller/user.php",
                date: {
                    function: 'logout'
                },
                success: function() {
                    $(location).attr("href", "../");
                }
            });
        }
    })
});