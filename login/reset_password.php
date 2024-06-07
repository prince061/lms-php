<!-- reset_password.php -->

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

                    <form action="reset_password_process.php" method="post">
                    <div class="">
                                <h5>Password</h5>
                                <div class="position-relative">
                                    <i class="fa-solid fa-key"></i>
                                    <i class="fa-solid fas fa-eye cursor-pointer" onclick="if($('#password').attr('type') == 'text'){$('#password').attr('type', 'password');}else{$('#password').attr('type', 'text');} $(this).toggleClass('fa-eye'); $(this).toggleClass('fa-eye-slash') " style="right: 20px; left: unset;"></i>
                                    <input type="hidden" name="token" value="<?php echo isset($_GET['token']) ? htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Set Your Password">
                                </div>
                                <br>
                                <br>
                                <div class="">
                                <h5>Conform-Password</h5>
                                <div class="position-relative">
                                    <i class="fa-solid fa-key"></i>
                                    <i class="fa-solid fas fa-eye cursor-pointer" onclick="if($('#password').attr('type') == 'text'){$('#password').attr('type', 'password');}else{$('#password').attr('type', 'text');} $(this).toggleClass('fa-eye'); $(this).toggleClass('fa-eye-slash') " style="right: 20px; left: unset;"></i>
                                    <input class="form-control" id="password" type="password" name="" placeholder="conform-Password">
                                </div>
                                                <div class="log-in">
                            <button type="submit" class="btn btn-primary">
                            Reset Password                           </button>
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




    <!-- <form action="reset_password_process.php" method="post">
        <input type="hidden" name="token" value="">
        <label for="password">New Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html> -->
