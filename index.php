
<?php include('header.php') ?> 
<?php include('nav.php') ?> 
<!---------- Header Section End  ----------><link rel="stylesheet" type="text/css" href="assets/frontend/eu-cookie/purecookie.css" async />

<div class="cookieConsentContainer" id="cookieConsentContainer" style="opacity: .9; display: block; display: none;">
  <!-- <div class="cookieTitle">
    <a>Cookies.</a>
  </div> -->
  <div class="cookieDesc">
    <p>
      This website uses cookies to personalize content and analyse traffic in order to offer you a better experience.      <a class="link-cookie-policy" href="home/cookie_policy.php">Cookie policy</a>
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

<!---------- Banner Section Start ---------------->
<section class="h-1-banner bannar-area pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 order-2 order-lg-1">
                <div class="h-1-banner-text EbannerLeft position-relative">
                                        <h1 class="wow animate__animated  animate__fadeIn" data-wow-duration="1000" data-wow-delay="200">
                        Start learning  with<span class="d-inline-block">Hiit</span>                    </h1>
                

                    <div class="EbannerTop wow animate__animated  animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="200">
                       <p>Study any topic, anytime. explore thousands of courses for the lowest price ever!</p>
                       <div class="search-option mb-0">
                            <form action="https://demo.creativeitem.com/academy/home/search" method="get">
                                <input class="form-control" type="text" placeholder="What do you want to learn" name="query">
                                <button class="submit-cls" type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.58439 17.5017C13.9566 17.5017 17.5011 13.9573 17.5011 9.585C17.5011 5.21275 13.9566 1.66833 9.58439 1.66833C5.21214 1.66833 1.66772 5.21275 1.66772 9.585C1.66772 13.9573 5.21214 17.5017 9.58439 17.5017Z" stroke="#1E293B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.892 18.7769C18.1361 19.021 18.5318 19.021 18.7759 18.7769C19.02 18.5328 19.02 18.1371 18.7759 17.893L17.892 18.7769ZM16.2759 15.393L15.834 14.9511L14.9501 15.835L15.392 16.2769L16.2759 15.393ZM18.7759 17.893L16.2759 15.393L15.392 16.2769L17.892 18.7769L18.7759 17.893Z" fill="#1E293B"/>
                                    </svg>
                                    </button>
                            </form>
                        </div>
                    </div>

                   <div class="eCircle_parent">
                       <div class="eCircle wow animate__animated  animate__fadeInRightBig" data-wow-duration="1000" data-wow-delay="300">
                            <span class="circleOne"><img src="assets/frontend/default-new/image/circle1.png" alt=""></span>
                            <span class="cirlceTwo"><img src="assets/frontend/default-new/image/circle2.png" alt=""></span>
                        </div>
                   </div>

                </div>
               
                
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-12 order-md-2 order-1  order-lg-1 pt-0 pt-md-5 ">
                 <div class="EbannerRight">
                    <div class="Ebanner wow animate__animated  animate__fadeIn" data-wow-duration="1000" data-wow-delay="400">
                       <img loading="lazy" width="100%" src="uploads/system/home-1.png">
                    </div>
                 </div>
            </div>


        </div> 
        <!-- <div class="row">
            <div class="col-lg-6">
                <div class="students-rating">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                        <h1>8+</h1>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                            <p>Happy</p>
                            <p>Students</p>
                        </div> 
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                            <img loading="lazy" src="https://demo.creativeitem.com/academy/assets/frontend/default-new/image/h-1-ban-st.png" alt="">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                                        <h1>6+</h1>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                            <p>Experienced</p>
                            <p>Instructors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="bannar-card  Ebaner-card wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="400">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 arrow-side">
                    <div class="banner-card-1">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="assets/frontend/default-new/image/h1.svg">
                            </div>
                            <div class="col-lg-10">
                                <h6>Expert instruction</h6>
                                <p>Find the right course for you</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 arrow-side">
                    <div class="banner-card-1">
                        <div class="row">
                            <div class="col-lg-2">
                               <img loading="lazy" src="assets/frontend/default-new/image/h2.svg">
                            </div>
                           
                            <div class="col-lg-10">
                                <h6>16 Online courses</h6>
                                <p>Explore a variety of fresh topics</p>
                            </div>
                        </div>
                    </div>           
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 arrow-side">
                    <div class="banner-card-1">
                        <div class="row">
                            <div class="col-lg-2">
                            <img loading="lazy" src="assets/frontend/default-new/image/h3.svg">
                            </div>
                            <div class="col-lg-10">
                                <h6>Lifetime access</h6>
                                <p>Learn on your schedule</p>
                            </div>
                        </div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</section>
<!---------- Banner Section End ---------------->


<!---------- Top courses Section start --------------->

<!---------- Top Categories Start ------------->
<section class="top-categories py-5 ">
    <div class="container">
        <div class="row wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="400">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center f-36">Top categories</h1>
                <p class="text-center mt-4">These are the most popular courses among listen courses learners worldwide</p>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="category-product mt-2 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
            <div class="row justify-content-center">
                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/coursesb5f1.php?category=html-amp-css" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/b8dfc0da45d2cde88437d6c395cb42c1.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> HTML &amp; CSS</h5>
                                 <p class="hide-cat-text">3 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses6921.php?category=color-theory" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/ead3b60446ff2dd6ad1fbff44e3077831.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Full Stack Development</h5>
                                 <p class="hide-cat-text">2 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses4696.php?category=photoshop" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/49432e37c3aea70e51a022b0fbdaeecd1.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Photoshop</h5>
                                 <p class="hide-cat-text">2 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses885f.php?category=wordpress-theme" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/0827d9f7a1778f41ce272a8d245d761e.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Computer Applications</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/coursesd1b3.php?category=adobe-illustrator" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/24e653ec78d1f3e819e2dc789d9566b41.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Computer Aided Accounting</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/coursesf6aa.php?category=drawing" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/ccb11e0f69c310c52ce56172ffbf11f6.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Autocad/Solidworks</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses43c0.php?category=blender" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/0b21bfa09bcd96d07a69e944fc92468b1.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Blender</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses21fb.php?category=sewing" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/d71a58e37da55060093633b89c5fd5c0.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Sewing</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses01b3.php?category=motion-graphics" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/06cc729cf9c74b493b6d66d0691faa4f.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Motion Graphics</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses340a.php?category=lighting-design" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/0e18742ddd6e806ab26495a505a2ff56.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Lighting Design</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses1c01.php?category=mobile-app-design" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/143b958087b8d3258929469453d1cab8.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Mobile App Design</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="home/courses0c91.php?category=bootstrap" class="category-product-body position-relative eCategory d-flex">
                                                                                     <div class="cate-image">
                                   <img src="uploads/thumbnails/category_thumbnails/f832be64bdb4f5eabbab2bfdc104622d.jpg" alt="">
                                 </div>
                                                         
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> Bootstrap</h5>
                                 <p class="hide-cat-text">1 Courses</p>
                            </div>
                         </a>
                    </div>
                            </div>
        </div>
    </div>
</section>
<!---------- Top Categories end ------------->

<!---------- Latest courses Section start --------------->

<!---------- Latest courses Section End --------------->



<!---------  Expert Instructor Start ---------------->
<section class="expert-instructor eExpert-instruction top-categories py-5 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="400">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center f-36 mt-0 pt-0">Our expert instructor </h1>
                <p class="text-center mt-4 mb-24">They efficiently serve large number of students on our platform</p>
            </div>
            <div class="col-lg-3 "></div>
        </div>
        <div class="instructor-card eInstuctor">
            <div class="row justify-content-center">
                                    <div class="col-lg-3 col-md-4 col-sm-6" data-wow-duration="1000" data-wow-delay="600">
                        <div class="instructor-card-body">
                            <div class="instructor-card-img">
                                <img loading="lazy" src="uploads/user_image/optimized/c65a8b0a510168ef0a311b1f46c7f918.jpg">
                            </div>
                            <div class="instructor-card-text">
                              
                                <a class="text-muted w-100" href="home/instructor_page/12.php">
                                    <h3 class="text-center">Rosalie Ruth</h3>
                                    <p class="ellipsis-line-2">Professional Film Colorist | DaVinci Resolve Trainer</p>
                                </a>
                                <div class="icon">
                                    <div class="icon-div-2">
                                                                                                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6" data-wow-duration="1000" data-wow-delay="600">
                        <div class="instructor-card-body">
                            <div class="instructor-card-img">
                                <img loading="lazy" src="uploads/user_image/optimized/4cba25d6c2f7be7968ec1ae9e5c49920.jpg">
                            </div>
                            <div class="instructor-card-text">
                              
                                <a class="text-muted w-100" href="home/instructor_page/6.php">
                                    <h3 class="text-center">Mathew Anderson</h3>
                                    <p class="ellipsis-line-2">Meet Mathew, an innovative and passionate developer.</p>
                                </a>
                                <div class="icon">
                                    <div class="icon-div-2">
                                                                                    <a class="" href="https://www.facebook.com/jane-doe" target="_blank">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                                                                                                            <a class="" href="https://www.twitter.com/jane-doe" target="_blank">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                                                                                                            <a class="" href="https://www.linkedin.com/jane-doe" target="_blank">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6" data-wow-duration="1000" data-wow-delay="600">
                        <div class="instructor-card-body">
                            <div class="instructor-card-img">
                                <img loading="lazy" src="uploads/user_image/optimized/41146b28f9a50262e27b04d954dfe96e.jpg">
                            </div>
                            <div class="instructor-card-text">
                              
                                <a class="text-muted w-100" href="home/instructor_page/4.php">
                                    <h3 class="text-center">Kasia Jarco</h3>
                                    <p class="ellipsis-line-2">Teaches courses at the post-secondary level.</p>
                                </a>
                                <div class="icon">
                                    <div class="icon-div-2">
                                                                                    <a class="" href="https://www.facebook.com/jane-doe" target="_blank">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                                                                                                            <a class="" href="https://www.twitter.com/jane-doe" target="_blank">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                                                                                                            <a class="" href="https://www.linkedin.com/jane-doe" target="_blank">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6" data-wow-duration="1000" data-wow-delay="600">
                        <div class="instructor-card-body">
                            <div class="instructor-card-img">
                                <img loading="lazy" src="uploads/user_image/optimized/95f8ffe52fcc64ac943a9bfa83c00d39.jpg">
                            </div>
                            <div class="instructor-card-text">
                              
                                <a class="text-muted w-100" href="home/instructor_page/1.php">
                                    <h3 class="text-center">John Doe</h3>
                                    <p class="ellipsis-line-2">Adobe Certified Instructor &amp; Adobe Certified Expert</p>
                                </a>
                                <div class="icon">
                                    <div class="icon-div-2">
                                                                                    <a class="" href="http://www.facebook.com/admin" target="_blank">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                                                                                                            <a class="" href="http://www.twitter.com/mobins" target="_blank">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                                                                                                            <a class="" href="http://www.linkedin.com/admin" target="_blank">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
        </div>
    </div>
</section>



<!-- Start Upcoming Courses -->
   


<!---------  Motivetional Speech Start ---------------->

<!---------  Motivetional Speech end ---------------->




<!------------- Blog Section Start ------------>


<!------------- Become Students Section start --------->
<section class="student py-5 ">
    <div class="container">
       <!-- <div class="row align-items-center">
        <div class="col-lg-7  wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500" data-wow-duration="1000" data-wow-delay="600">
            <div class="ePromotion">
               <h4><span>Learn</span> New skills when and where you like.</h4>
                <p>Discover a world of learning opportunities through our upcoming courses, where industry experts.</p>
                <div class="eBtn">
                    <a href="https://demo.creativeitem.com/academy/sign_up" class="btn">Join course for free</a>
                                                              <a  class="btn" href="https://demo.creativeitem.com/academy/sign_up?instructor=yes">Became a instructor</a>
                                                      </div>
            </div>
        </div>
        <div class="col-lg-5 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="600">
            <div class="ePormotion_right">
                <img src="https://demo.creativeitem.com/academy/assets/frontend/default-new/image/instractorN.png">
            </div>
        </div>
       </div> -->

        <div class="row eStudent">
            <div class="col-lg-6   wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="650">
                <div class="student-body-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="student-body-text">
                                <!-- <img loading="lazy" src="https://demo.creativeitem.com/academy/assets/frontend/default-new/image/2.png"> -->
                                <h1>Join now to start learning</h1>
                                <p>Learn from our quality instructors! </p>
                                <a href="sign_up.php">Get started</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 ">
                            <!-- <img loading="lazy" class="man" src="https://demo.creativeitem.com/academy/assets/frontend/default-new/image/instractorN.png"> -->
                        </div>
                     </div>
                </div>      
            </div>
                            <div class="col-lg-6  wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="700">
                    <div class="student-body-2">
                    <div class="row">
                            <div class="col-lg-8  col-md-8 col-sm-12">
                                <div class="student-body-text">
                                  <!-- <img loading="lazy" src="https://demo.creativeitem.com/academy/assets/frontend/default-new/image/2.png"> -->
                                    <h1>Become a new instructor</h1>
                                    <p>Teach thousands of students and earn money! </p>
                                                                            <a  href="sign_up5ef0.php?instructor=yes">Join now</a>
                                                                    </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                            <!-- <img loading="lazy" class="man" src="https://demo.creativeitem.com/academy/assets/frontend/default-new/image/student-2.png"> -->
                            </div>
                        </div>  
                    </div> 
                </div>
                    </div>
    </div>
</section>
<!------------- Become Students Section End --------->

<div class="py-4 w-100"></div>



<!--------- footer Section Start--------------->
<?php include('footer.php'); ?> 