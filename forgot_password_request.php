<?php 
include('dbganeshconn.php');
include('header.php');
include('nav.php');

?><link rel="stylesheet" type="text/css" href="./assets/frontend/eu-cookie/purecookie.css" async/>
<!---------- Header Section End  ---------->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<section class="sign-up my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 text-center ">
                <img loading="lazy" width="65%" src="./assets/frontend/default-new/image/cloud-security.gif">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-12 ">
                <div class="sing-up-right">
                    <h3>Forgot password<span>!</span></h3>
                    <p>Explore, learn, and grow with us. enjoy a seamless and enriching educational journey. lets begin!</p>

                    <form action="forgot_password_process.php" method="post">
                        <div class="mb-3">
                            <h5>Your email</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email">
                            </div>
                        </div>
                                                <div class="log-in">
                            <button type="submit" class="btn btn-primary">
                                Send request                            </button>
                        </div>
                    </form>

                    <div class="log-in">
                        <a href="login.php" class="btn btn-primary my-0">
                            <span class="fas fa-angle-left"></span>
                            Back to login                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <script>
$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Serialize form data
        var formData = $(this).serialize();

        // Send an AJAX request to your PHP script
        $.ajax({
            type: 'POST',
            url: 'forgot_password_process.php',
            data: formData,
            dataType: 'json', // Expect JSON response
            success: function(response) {
                // Display SweetAlert message based on the response
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log error message to console
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred. Please try again.'
                });
            }
        });
    });
});
</script>

</section><!--------- footer Section Start--------------->
<?php include('footer.php'); ?>
	</body>

<!-- Mirrored from demo.creativeitem.com/academy/login/forgot_password_request by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2024 11:18:22 GMT -->
</html>
