<?php 
include('dbganeshconn.php');
include('header.php');
include('nav.php');

?><link rel="stylesheet" type="text/css" href="../assets/frontend/eu-cookie/purecookie.css" async/>
<!---------- Header Section End  ---------->
<section class="sign-up my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 text-center ">
                <img loading="lazy" width="65%" src="../assets/frontend/default-new/image/cloud-security.gif">
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
                        <a href="../login.html" class="btn btn-primary my-0">
                            <span class="fas fa-angle-left"></span>
                            Back to login                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

</section><!--------- footer Section Start--------------->
<?php include('footer.php'); ?>
	</body>

<!-- Mirrored from demo.creativeitem.com/academy/login/forgot_password_request by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2024 11:18:22 GMT -->
</html>
