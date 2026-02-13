$(document).ready(function () {

// LOGIN AJAX
    $("#loginForm").on("submit", function (e) {
        e.preventDefault();

        const formData = $(this).serialize();

        $(".btn-loader").css("display", "inline-block");
        $(".btn-text").hide();
        $("#loginsubmit").prop("disabled", true);

        $.ajax({
            url: "assets/php/login.php",
            type: "POST",
            data: formData,
            dataType: "json",

            success: function (response) {

                $(".btn-loader").hide();
                $(".btn-text").show();
                $("#loginsubmit").prop("disabled", false);

                if (response.status === "success") {

                    Swal.fire({
                        icon: "success",
                        title: "Login Successful",
                        text: response.message,
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = response.redirect;
                    });

                } else {

                    Swal.fire({
                        icon: "error",
                        title: "Login Failed",
                        text: response.message
                    });

                }
            },

            error: function () {

                $(".btn-loader").hide();
                $(".btn-text").show();
                $("#loginsubmit").prop("disabled", false);

                Swal.fire({
                    icon: "error",
                    title: "Server Error",
                    text: "Something went wrong. Please try again."
                });
            }
        });
    });

//LOGOUT AJAX
    $("#Logoutbtn").on("click", function () {

        Swal.fire({
            title: "Are you sure?",
            text: "You will be logged out!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#6c757d",
            confirmButtonText: "Yes, Logout",
            cancelButtonText: "Cancel"
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    type: "POST",
                    url: "../php/logout.php",
                    dataType: "json",

                    success: function (response) {

                        if (response.status === "success") {

                            Swal.fire({
                                icon: "success",
                                title: "Logged Out",
                                text: response.message,
                                timer: 1200,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.href = "../../index.php";
                            });

                        } else {
                            Swal.fire("Error", "Logout failed.", "error");
                        }
                    },

                    error: function () {
                        Swal.fire("Error", "Server error during logout.", "error");
                    }
                });

            }

        });

    });

});
