<?php
session_start(); 
ob_start();
// Include header and navigation
include('header.php');
include('nav.php');
include('dbganeshconn.php');

// Start the session

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password =($_POST['password']); // Use md5 for hashing password (or better hashing methods like password_hash)

    $sql = "SELECT * FROM user WHERE roll_number='$username' AND password='$password' ";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);

    if($num == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid Details $username Sir ji');</script>";
    }
}
?>
<!---------- Header Section End  ---------->
    <section class="sign-up my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 col-12 text-center">
                    <img loading="lazy" width="65%" src="assets/frontend/default-new/image/login-security.gif">
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-12 ">
                    <div class="sing-up-right">
                        <h3>Log in<span>!</span></h3>
                        <p>Explore, learn, and grow with us. enjoy a seamless and enriching educational journey. lets begin!</p>

                        <form action="login.php" method="post">
                            <div class="mb-4">
                                <h5>Your Roll Number/User name</h5>
                                <div class="position-relative">
                                    <i class="fa-solid fa-user"></i>
                                    <input class="form-control" id="email" type="text" name="username" placeholder="Enter your roll number">
                                </div>
                            </div>
                            <div class="">
                                <h5>Password</h5>
                                <div class="position-relative">
                                    <i class="fa-solid fa-key"></i>
                                    <i class="fa-solid fas fa-eye cursor-pointer" onclick="if($('#password').attr('type') == 'text'){$('#password').attr('type', 'password');}else{$('#password').attr('type', 'text');} $(this).toggleClass('fa-eye'); $(this).toggleClass('fa-eye-slash') " style="right: 20px; left: unset;"></i>
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Enter your valid password">
                                </div>
                                <small class="w-100">
                                    <a class="text-end w-100 text-muted" href="forgot_password_request.php">Forgot password?</a>
                                </small>
                            </div>
                                                        <div class="">
                                <button type="submit" class="btn btn-primary" name="login" >
                                    Log in                                </button>
                            </div>

                            
                            
                        </form>

                        <div class="another text-center">
                            <p>
                                Don`t have an account?                                <a href="sign_up.php">Sign up</a>
                            </p>
                            <h5>Or</h5>
                        </div>
                        <div class="social-media">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <!-- <button type="button" class="btn btn-primary"><a href="#"><img loading="lazy" src="image/facebook.png"> Facebook</a></button> -->
                                    <div class="form-group text-center" style="height: 45px">

    

    <!-- <script type="text/javascript">
        function check_API() {                      // Testing Graph API after login.  See 
            FB.api('/me', function(response) {
                //   console.log('Successful login for: ' + response.name);
                //   console.log(response);
                if(response.name){
                    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
                        console.log(response.status);
                        if (response.status === 'connected') {   // Logged into your webpage and Facebook.
                            location.replace("https://demo.creativeitem.com/academy/login/fb_validate_login/"+response.authResponse.accessToken +'/' + response.authResponse.userID);
                        }
                    });
                }
            });
        }
    </script> -->
</div>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php');?>
	</body>

<!-- Mirrored from demo.creativeitem.com/academy/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2024 11:15:13 GMT -->
</html>
