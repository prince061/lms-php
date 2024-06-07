<?php
// Include header and navigation
include('header.php');
include('nav.php');

// Check if form is submitted
?>
   <!-- Offcanves Menu  -->
   <body class="dark-theme">
<link rel="stylesheet" type="text/css" href="assets/frontend/eu-cookie/purecookie.css" async />

<div class="cookieConsentContainer" id="cookieConsentContainer" style="opacity: .9; display: block; display: none;">
  <!-- <div class="cookieTitle">
    <a>Cookies.</a>
  </div> -->
  <div class="cookieDesc">
    <p>
      This website uses cookies to personalize content and analyse traffic in order to offer you a better experience.      <a class="link-cookie-policy" href="home/cookie_policy.html">Cookie policy</a>
    </p>
  </div>
  <div class="cookieButton">
    <a onclick="cookieAccept();">Accept</a>
  </div>
</div>
<script>
  $(document).ready(function () {
    if (localStorage.getItem("accept_cookie_academy")) {
      //localStorage.removeItem("accept_cookie_academy");
    }else{
      $('#cookieConsentContainer').fadeIn(1000);
    }
  });

  function cookieAccept() {
    if (typeof(Storage) !== "undefined") {
      localStorage.setItem("accept_cookie_academy", true);
      localStorage.setItem("accept_cookie_time", "06/01/2024");
      $('#cookieConsentContainer').fadeOut(1200);
    }
  }
</script>

<!---------- Header Section End  ---------->
<section class="sign-up my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 text-center">
                <img loading="lazy" width="65%" src="assets/frontend/default-new/image/login-security.gif">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                <div class="sing-up-right">
                    <h3>Sign up<span>!</span></h3>
                    <p>Explore, learn, and grow with us. Enjoy a seamless and enriching educational journey. Let's begin!</p>

                    <form id="signUpForm" action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <h5>Student Name</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="sname" type="text" name="studentname" placeholder="Enter your first name" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Father's Name</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="father_name" type="text" name="fname" placeholder="Enter your father's name" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Email</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="father_name" type="email" name="email" placeholder="Enter your Email" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Roll Number/User Name</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="roll" type="text" name="roll" placeholder="Enter your roll number" required>
                            </div>
                        </div>
                        <div class="">
                                <h5>Password</h5>
                                <div class="position-relative">
                                    <i class="fa-solid fa-key"></i>
                                    <i class="fa-solid fas fa-eye cursor-pointer" onclick="if($('#password').attr('type') == 'text'){$('#password').attr('type', 'password');}else{$('#password').attr('type', 'text');} $(this).toggleClass('fa-eye'); $(this).toggleClass('fa-eye-slash') " style="right: 20px; left: unset;"></i>
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Set Your Password">
                                </div>
                                <br>
                                </div>
                        <div class="mb-4">
                            <h5>Department</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-sitemap"></i>
                                <select class="form-control" id="sel1" name="sellist1">
                                    <option>Hiit</option>
                                    <option>Hartron</option>
                                    <option>Splendid Immigration</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Date Of Birth</h5>
                            <div class="position-relative">
                                <i class="fa fa-birthday-cake"></i>
                                <input class="form-control" id="dob" type="date" name="dateob" placeholder="Enter your date of birth" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Courses</h5>
                            <div class="position-relative">
                                <i class="fas fa-user-graduate"></i>
                                <input class="form-control" id="phone" type="text" name="cou" placeholder="Enter your course">
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Image</h5>
                            <div class="position-relative">
                                <input class="form-control" id="image" type="file" name="image">
                            </div>
                        </div>
                        <div class="mb-4">
                            <input id="female" type="radio" name="gender" value="female">
                            <label for="female">Female</label>
                        </div>
                        <div class="mb-4">
                            <input id="male" type="radio" name="gender" value="male">
                            <label for="male">Male</label>
                        </div>
                        <div class="log-in">
                            <button type="submit" name="sub" class="btn btn-primary">Sign up</button>
                        </div>
                    </form>
                    <div id="responseMessage"></div>
                    <!-- Include jQuery -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#signUpForm').on('submit', function(e) {
                                e.preventDefault();

                                var formData = new FormData(this);

                                $.ajax({
                                    type: 'POST',
                                    url: 'insert.php',
                                    data: formData,
                                    contentType: false,
                                    processData: false,
                                    success: function(response) {
                                        $('#responseMessage').html('<p>' + response + '</p>');
                                    },
                                    error: function(xhr, status, error) {
                                        console.error('Error: ' + error);
                                        $('#responseMessage').html('<p>An error occurred: ' + error + '</p>');
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

                    <div class="another text-center">
                        <p>
                            Already you have an account?                            <a href="login.php">Log in</a>
                        </p>
                        <h5>Or</h5>
                    </div>
                    <div class="social-media">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <!-- <button type="button" class="btn btn-primary"><a href="#"><img loading="lazy" src="image/facebook.png"> Facebook</a></button> -->
                                <div class="form-group text-center" style="height: 45px">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=882048669393526&autoLogAppEvents=1" nonce="h58p64zo"></script>
    <div class="fb-login-button" onlogin="check_API()" data-width="" scope="public_profile,email" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true"></div>

    <script type="text/javascript">
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
    </script>
</div>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section><!--------- footer Section Start--------------->
<?php include('footer.php');?>
	</body>

<!-- Mirrored from demo.creativeitem.com/academy/sign_up by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2024 11:15:13 GMT -->
</html>
