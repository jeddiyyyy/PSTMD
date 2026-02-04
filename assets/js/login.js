document.addEventListener("DOMContentLoaded", function () {

    if (LOGIN_STATUS === "success") {
        Swal.fire({
            icon: 'success',
            title: 'Login Successful',
            text: 'Welcome to TPRS',
            timer: 1500,
            showConfirmButton: false
        }).then(() => {
            window.location.href = "php/franchise.php";
        });

    } else {
        Swal.fire({
            icon: 'error',
            title: 'Login Failed',
            text: LOGIN_MESSAGE
        });
    }
});
