<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.creativeitem.com/academy/home/courses?category=html-amp-css by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2024 11:14:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
			<title>Courses | Academy</title>
	

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0, minimum-scale=0.86">
	<meta name="author" content="Creativeitem" />

			<meta name="keywords" content="LMS,Learning Management System,Creativeitem,demo,hello,How are you"/>
		<meta name="description" content="Study any topic, anytime. explore thousands of courses for the lowest price ever!" />
	
	<!--Social sharing content-->
			<meta property="og:title" content="Courses" />
		<meta property="og:image" content="../uploads/system/home-1.png">
		<meta property="og:url" content="courses.html" />
	<meta property="og:type" content="Learning management system" />
	<!--Social sharing content-->

	<link rel="icon" href="../uploads/system/1268adfb5db8c00c75b37961e8a9b787.png" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="180x180" href="../uploads/system/1268adfb5db8c00c75b37961e8a9b787.png">

	<link rel="stylesheet" href="../assets/frontend/default-new/css/all.min.css">

    <link rel="stylesheet" href="../assets/frontend/default-new/css/bootstrap.min.css">


<link rel="stylesheet" href="../assets/frontend/default-new/css/jquery.webui-popover.min.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/h-2-carousel.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/jquery.webui-popover.min.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/nice-select.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/owl.theme.default.min.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/slick-theme.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/slick.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/style.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/new-style.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/responsive.css">
<link rel="stylesheet" href="../assets/frontend/default-new/summernote-0.8.20-dist/summernote-lite.min.css">
<link rel="stylesheet" href="../assets/global/tagify/tagify.css">
<link rel="stylesheet" href="../assets/global/toastr/toastr.css">

<link rel="stylesheet" href="../assets/frontend/default-new/css/animate.min.css">
<link rel="stylesheet" href="../assets/frontend/default-new/css/custom.css">


<script src="../assets/global/js/jquery-3.6.1.min.js"></script>
	<style type="text/css">
			</style>coursesb5f1

</head>
<body class="dark-theme">
	<!---------- Header Section start  ---------->

<?php include('../nav.php') ?> 

    
    <!-- Mobile Offcanves  Icon Show -->
    

 

<script type="text/javascript">
	$(function () {

		if($('[data-bs-toggle="tooltip"]').length > 0){
			$('[data-bs-toggle="tooltip"]').tooltip();
		}

		if($('.tagify').length > 0){
			$('.tagify:not(.initialized)').tagify();
			$('.tagify:not(.initialized)').addClass('initialized');
		}

		$('a[href="#"]').on('click', function(event){
	      event.preventDefault();
	    });

	    if($('.text_editor:not(.initialized)').length){
			$('.text_editor:not(.initialized)').summernote({
				height: 180,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: true                  // set focus to editable area after initializing summernote
			});
			$('.text_editor:not(.initialized)').addClass('initialized');
		}


		//When need to add a wishlist button inside a anchor tag
		$('.checkPropagation').on('click', function(event){
			var action = $(this).attr('action');
			var onclickFunction = $(this).attr('onclick');
			var onChange = $(this).attr('onchange');
			var tag = $(this).prop("tagName").toLowerCase();
			console.log(tag);
			if(tag != 'a' && action){
				$(location).attr('href', $(this).attr('action'));
				return false;
			}else if(onclickFunction){
				if(onclickFunction){
					onclickFunction;					
				}
				return false;
			}else if(tag == 'a'){
				return true;
			}
		});

		//Ajax for submission start
		var formElement;
		if($('.ajaxForm:not(.initialized)').length > 0){
			$('.ajaxForm:not(.initialized)').ajaxForm({
				beforeSend: function(data, form) {
					var formElement = $(form);
				},
				uploadProgress: function(event, position, total, percentComplete) {
				},
				complete: function(xhr) {

					setTimeout(function(){
						distributeServerResponse(xhr.responseText);
					}, 400);

					if($('.ajaxForm.resetable').length > 0){
						$('.ajaxForm.resetable')[0].reset();
					}
				},
				error: function(e)
				{
					console.log(e);
				}
			});
			$('.ajaxForm:not(.initialized)').addClass('initialized');
		}
	});

</script>
           

    <!-- Mobile Device Form -->
    <form action="https://demo.creativeitem.com/academy/home/courses" method="get" class="inline-form">
      <div class="mobile-search test">
        <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        <input value="" name="query" class="form-control" type="text" placeholder="Search" />
      </div>
    </form>

  </div>
</nav>    <!-- Offcanves Menu  -->
    <div class="mobile-view-offcanves">
  <div class="offcanvas offcanvas-start bg-light" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanves-top">
              <div class="offcanvas-header bg-light">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          <div class="offcanves-btn">
            <a href="../sign_up.html" class="signUp-btn">Sign up</a>
            <a href="../login.html" class="logIn-btn">Login</a>
          </div>
        </div>
          </div>
    <div class="offcanvas-body p-0">
      <div class="flex-shrink-0 mt-3">
        <ul class="list-unstyled ps-0">
          
          <li><a href="shopping_cart.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500 w-100"><i class="fa-solid fa-cart-shopping me-2"></i> Cart <span class="badge bg-danger ms-auto">0</span></a></li>

          <li class="bg-light">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500 collapsed" data-bs-toggle="collapse" data-bs-target="#category-collapse" aria-expanded="false">
              <i class="fas fa-book me-2"></i>
              Categories            </button>
            <div class="collapse" id="category-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small bg-white pt-2">
                                <li>
                  <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 collapsed" data-bs-toggle="collapse" data-bs-target="#subCategory-collapse10" aria-expanded="false">
                    <span class="icons"><i class="fas fa-desktop"></i></span>
                    <span class="text-cat">Web Design</span>
                  </button>
                  <div class="collapse" id="subCategory-collapse10">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses91d5.html?category=responsive-design" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Responsive Design</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses885f.html?category=wordpress-theme" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">WordPress Theme</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses0c91.html?category=bootstrap" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Bootstrap</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesb5f1.html?category=html-amp-css" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">HTML &amp; CSS</a>
                      </li>
                                          </ul>
                  </div>
                </li>
                                <li>
                  <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 collapsed" data-bs-toggle="collapse" data-bs-target="#subCategory-collapse13" aria-expanded="false">
                    <span class="icons"><i class="fas fa-pencil-alt"></i></span>
                    <span class="text-cat">Graphic Design</span>
                  </button>
                  <div class="collapse" id="subCategory-collapse13">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses4696.html?category=photoshop" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Photoshop</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesd1b3.html?category=adobe-illustrator" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Adobe Illustrator</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesf6aa.html?category=drawing" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Drawing</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses6e7b.html?category=logo-design" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Logo Design</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses2e21.html?category=digital-art" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Digital Art</a>
                      </li>
                                          </ul>
                  </div>
                </li>
                                <li>
                  <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 collapsed" data-bs-toggle="collapse" data-bs-target="#subCategory-collapse14" aria-expanded="false">
                    <span class="icons"><i class="fas fa-male"></i></span>
                    <span class="text-cat">User Experience</span>
                  </button>
                  <div class="collapse" id="subCategory-collapse14">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses5b8a.html?category=user-experience-design" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">User Experience Design</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses1c01.html?category=mobile-app-design" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Mobile App Design</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses6896.html?category=user-interface" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">User Interface</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesd12a.html?category=design-thinking" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Design Thinking</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses2c28.html?category=figma" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Figma</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesaa5c.html?category=prototyping" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Prototyping</a>
                      </li>
                                          </ul>
                  </div>
                </li>
                                <li>
                  <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 collapsed" data-bs-toggle="collapse" data-bs-target="#subCategory-collapse15" aria-expanded="false">
                    <span class="icons"><i class="fas fa-magic"></i></span>
                    <span class="text-cat">Interior Design</span>
                  </button>
                  <div class="collapse" id="subCategory-collapse15">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses6921.html?category=color-theory" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Color Theory</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses340a.html?category=lighting-design" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Lighting Design</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses8f26.html?category=sketchup" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">SketchUp</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses55aa.html?category=home-improvement" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Home Improvement</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesb29e.html?category=3d-lighting" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">3D Lighting</a>
                      </li>
                                          </ul>
                  </div>
                </li>
                                <li>
                  <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 collapsed" data-bs-toggle="collapse" data-bs-target="#subCategory-collapse16" aria-expanded="false">
                    <span class="icons"><i class="fas fa-cube"></i></span>
                    <span class="text-cat">3D and Animation</span>
                  </button>
                  <div class="collapse" id="subCategory-collapse16">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses43c0.html?category=blender" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Blender</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses01b3.html?category=motion-graphics" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Motion Graphics</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesb587.html?category=after-effects" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">After Effects</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesd853.html?category=maya" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Maya</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesaa8a.html?category=zbrush" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">zBrush</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesf09c.html?category=character-modeling" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Character Modeling</a>
                      </li>
                                          </ul>
                  </div>
                </li>
                                <li>
                  <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 collapsed" data-bs-toggle="collapse" data-bs-target="#subCategory-collapse27" aria-expanded="false">
                    <span class="icons"><i class="fas fa-user-secret"></i></span>
                    <span class="text-cat">Fashion</span>
                  </button>
                  <div class="collapse" id="subCategory-collapse27">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses80b0.html?category=fashion-design" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Fashion Design</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses21fb.html?category=sewing" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Sewing</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="coursesd657.html?category=t-shirt-design" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">T-shirt Design</a>
                      </li>
                                            <li>
                        <a class="text-dark text-14px fw-400 w-100" href="courses2cea.html?category=jewelry-design" class="link-body-emphasis d-inline-flex text-decoration-none rounded" style="padding-left: 35px;">Jewelry Design</a>
                      </li>
                                          </ul>
                  </div>
                </li>
                                <li>
                  <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 collapsed" data-bs-toggle="collapse" data-bs-target="#subCategory-collapse51" aria-expanded="false">
                    <span class="icons"><i class="fab fa-500px"></i></span>
                    <span class="text-cat">Frontend Development</span>
                  </button>
                  <div class="collapse" id="subCategory-collapse51">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                          </ul>
                  </div>
                </li>
                                <li>
                  <a href="courses.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> <i class="fas fa-list me-2"></i> All courses</a>
                </li>
              </ul>
            </div>
          </li>
  

                      <li class="bg-light">
              <a href="../course_bundles.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-cube me-2"></i> Course bundles</a>
            </li>
          
                      <li class="bg-light">
              <a href="../addons/bootcamp/bootcamp_list.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fab fa-centercode me-2"></i> Bootcamp</a>
            </li>
          
                      <li class="bg-light">
              <a href="../addons/team_training/packages.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-users me-2"></i> Team training</a>
            </li>
          
                      <li class="bg-light">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500 collapsed" data-bs-toggle="collapse" data-bs-target="#ebook-category-collapse" aria-expanded="false">
                <i class="fas fa-file me-2"></i>
                Ebook              </button>
              <div class="collapse" id="ebook-category-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small bg-white pt-2">
                                    <li>
                    <a href="../ebook209b.html?category=kids&amp;price=all&amp;rating=all" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> Kids</a>
                  </li>
                                    <li>
                    <a href="../ebook2dbf.html?category=science-fiction-amp-fantasy&amp;price=all&amp;rating=all" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> Science Fiction &amp; Fantasy</a>
                  </li>
                                    <li>
                    <a href="../ebooke323.html?category=politics&amp;price=all&amp;rating=all" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> Politics</a>
                  </li>
                                    <li>
                    <a href="../ebook9776.html?category=cooking-amp-foods&amp;price=all&amp;rating=all" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> Cooking &amp; Foods</a>
                  </li>
                                    <li>
                    <a href="../ebook2b87.html?category=motivation&amp;price=all&amp;rating=all" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> Motivation</a>
                  </li>
                                    <li>
                    <a href="../ebookdf72.html?category=freelancing-amp-outsourcing&amp;price=all&amp;rating=all" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> Freelancing &amp; Outsourcing</a>
                  </li>
                                    <li>
                    <a href="../ebookb3b4.html?category=programming-language&amp;price=all&amp;rating=all" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> Programming Language</a>
                  </li>
                                    <li>
                    <a href="../ebook78f6.html?category=education&amp;price=all&amp;rating=all" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> Education</a>
                  </li>
                                    <li>
                    <a href="../ebook.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-15px fw-400 py-2 w-100"> <i class="fas fa-list me-2"></i> All ebooks</a>
                  </li>
                </ul>
              </div>
            </li>
          
                      <li class="bg-light"><a class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500" href="../tutors.html"><i class="fas fa-chalkboard-teacher me-2"></i>Find a tutor</a></li>
          
          
                                <li class="bg-light">
              <a href="../page/home-1.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-arrow-alt-circle-right me-2"></i> Preview Home Page-1</a>
            </li>
                      <li class="bg-light">
              <a href="../page/home-2.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-arrow-alt-circle-right me-2"></i> Preview Home Page-2</a>
            </li>
                      <li class="bg-light">
              <a href="../page/home-3.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-arrow-alt-circle-right me-2"></i> Preview Home Page-3</a>
            </li>
                      <li class="bg-light">
              <a href="../page/home-4.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-arrow-alt-circle-right me-2"></i> Preview Home Page-4</a>
            </li>
                      <li class="bg-light">
              <a href="../page/home-5.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-arrow-alt-circle-right me-2"></i> Preview Home Page-5</a>
            </li>
                      <li class="bg-light">
              <a href="../page/home-6.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-arrow-alt-circle-right me-2"></i> Preview Home Page-6</a>
            </li>
                      <li class="bg-light">
              <a href="../page/home-7.html" class="btn btn-toggle-list d-inline-flex align-items-center rounded border-0 text-dark text-16px fw-500"> <i class="fas fa-arrow-alt-circle-right me-2"></i> Preview Home Page-7</a>
            </li>
          
                  </ul>
      </div>

    </div>
  </div>
</div>  </section>
</header>
<!---------- Header Section End  ----------><link rel="stylesheet" type="text/css" href="../assets/frontend/eu-cookie/purecookie.css" async />

<div class="cookieConsentContainer" id="cookieConsentContainer" style="opacity: .9; display: block; display: none;">
  <!-- <div class="cookieTitle">
    <a>Cookies.</a>
  </div> -->
  <div class="cookieDesc">
    <p>
      This website uses cookies to personalize content and analyse traffic in order to offer you a better experience.      <a class="link-cookie-policy" href="cookie_policy.html">Cookie policy</a>
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

<!---------- Bread Crumb Area Start ---------->
<section>
    <div class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <nav  aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../index.html">
                                    <img loading="lazy" class="brd-home mb-1" src="../assets/frontend/default-new/image/c-bread-crumb-home.png">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span>Courses</span>
                            </li>
                        </ol>
                    </nav>
                    <h1>Courses</h1>
                </div>
                <div class="col-3 ms-auto d-none d-sm-inline-block">
                    <div class="book-img">
                        <img loading="lazy" src="../assets/frontend/default-new/image/brd-book.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------- Bread Crumb Area End ---------->

<section class="grid-view courses-list-view">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                <form action="https://demo.creativeitem.com/academy/home/courses" method="get" id="course_filter_form">

    
    <div class="course-all-category">
        <div class="course-category">
            <h3>Categories</h3>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" value="all" name="category"  id="category_all" onchange="filterCourse()" >
                <label class="form-check-label" for="category_all">
                    <div class="category-heading">
                        <span class="text-13px">All category</span>
                    </div>
                    <span>(16)</span>
                </label>
            </div>
            <div class="webdesign webdesign-category less">
                                                                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="web-design" name="category" id="category-10" onchange="filterCourse()" >
                        <label class="form-check-label" for="category-10">
                            <div class="category-heading">
                                <span class="text-13px">Web Design</span>
                            </div>
                            <span>(5)</span>
                        </label>
                    </div>
                    <ul>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="responsive-design" name="category" id="sub_category-11" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-11">
                                        <span class="text-13px">Responsive Design</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="wordpress-theme" name="category" id="sub_category-12" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-12">
                                        <span class="text-13px">WordPress Theme</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="bootstrap" name="category" id="sub_category-19" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-19">
                                        <span class="text-13px">Bootstrap</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="html-amp-css" name="category" id="sub_category-28" onchange="filterCourse()" checked>
                                    <label class="form-check-label" for="sub_category-28">
                                        <span class="text-13px">HTML &amp; CSS</span>
                                        <span>(3)</span>
                                    </label>
                                </div>
                            </li>
                                            </ul>
                                                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="graphic-design" name="category" id="category-13" onchange="filterCourse()" >
                        <label class="form-check-label" for="category-13">
                            <div class="category-heading">
                                <span class="text-13px">Graphic Design</span>
                            </div>
                            <span>(4)</span>
                        </label>
                    </div>
                    <ul>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="photoshop" name="category" id="sub_category-17" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-17">
                                        <span class="text-13px">Photoshop</span>
                                        <span>(2)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="adobe-illustrator" name="category" id="sub_category-18" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-18">
                                        <span class="text-13px">Adobe Illustrator</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="drawing" name="category" id="sub_category-29" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-29">
                                        <span class="text-13px">Drawing</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="logo-design" name="category" id="sub_category-30" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-30">
                                        <span class="text-13px">Logo Design</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="digital-art" name="category" id="sub_category-31" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-31">
                                        <span class="text-13px">Digital Art</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                            </ul>
                                                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="user-experience" name="category" id="category-14" onchange="filterCourse()" >
                        <label class="form-check-label" for="category-14">
                            <div class="category-heading">
                                <span class="text-13px">User Experience</span>
                            </div>
                            <span>(1)</span>
                        </label>
                    </div>
                    <ul>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="user-experience-design" name="category" id="sub_category-20" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-20">
                                        <span class="text-13px">User Experience Design</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="mobile-app-design" name="category" id="sub_category-21" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-21">
                                        <span class="text-13px">Mobile App Design</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="user-interface" name="category" id="sub_category-32" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-32">
                                        <span class="text-13px">User Interface</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="design-thinking" name="category" id="sub_category-33" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-33">
                                        <span class="text-13px">Design Thinking</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="figma" name="category" id="sub_category-34" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-34">
                                        <span class="text-13px">Figma</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="prototyping" name="category" id="sub_category-35" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-35">
                                        <span class="text-13px">Prototyping</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                            </ul>
                                                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="interior-design" name="category" id="category-15" onchange="filterCourse()" >
                        <label class="form-check-label" for="category-15">
                            <div class="category-heading">
                                <span class="text-13px">Interior Design</span>
                            </div>
                            <span>(3)</span>
                        </label>
                    </div>
                    <ul>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="color-theory" name="category" id="sub_category-22" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-22">
                                        <span class="text-13px">Color Theory</span>
                                        <span>(2)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="lighting-design" name="category" id="sub_category-23" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-23">
                                        <span class="text-13px">Lighting Design</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="sketchup" name="category" id="sub_category-40" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-40">
                                        <span class="text-13px">SketchUp</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="home-improvement" name="category" id="sub_category-41" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-41">
                                        <span class="text-13px">Home Improvement</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="3d-lighting" name="category" id="sub_category-42" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-42">
                                        <span class="text-13px">3D Lighting</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                            </ul>
                                                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="3d-and-animation" name="category" id="category-16" onchange="filterCourse()" >
                        <label class="form-check-label" for="category-16">
                            <div class="category-heading">
                                <span class="text-13px">3D and Animation</span>
                            </div>
                            <span>(2)</span>
                        </label>
                    </div>
                    <ul>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="blender" name="category" id="sub_category-24" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-24">
                                        <span class="text-13px">Blender</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="motion-graphics" name="category" id="sub_category-25" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-25">
                                        <span class="text-13px">Motion Graphics</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="after-effects" name="category" id="sub_category-36" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-36">
                                        <span class="text-13px">After Effects</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="maya" name="category" id="sub_category-37" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-37">
                                        <span class="text-13px">Maya</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="zbrush" name="category" id="sub_category-38" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-38">
                                        <span class="text-13px">zBrush</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="character-modeling" name="category" id="sub_category-39" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-39">
                                        <span class="text-13px">Character Modeling</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                            </ul>
                                                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="fashion" name="category" id="category-27" onchange="filterCourse()" >
                        <label class="form-check-label" for="category-27">
                            <div class="category-heading">
                                <span class="text-13px">Fashion</span>
                            </div>
                            <span>(1)</span>
                        </label>
                    </div>
                    <ul>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="fashion-design" name="category" id="sub_category-43" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-43">
                                        <span class="text-13px">Fashion Design</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="sewing" name="category" id="sub_category-44" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-44">
                                        <span class="text-13px">Sewing</span>
                                        <span>(1)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="t-shirt-design" name="category" id="sub_category-45" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-45">
                                        <span class="text-13px">T-shirt Design</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                                                                <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="jewelry-design" name="category" id="sub_category-46" onchange="filterCourse()" >
                                    <label class="form-check-label" for="sub_category-46">
                                        <span class="text-13px">Jewelry Design</span>
                                        <span>(0)</span>
                                    </label>
                                </div>
                            </li>
                                            </ul>
                                                        <div class="form-check">
                        <input class="form-check-input" type="radio" value="frontend-development" name="category" id="category-51" onchange="filterCourse()" >
                        <label class="form-check-label" for="category-51">
                            <div class="category-heading">
                                <span class="text-13px">Frontend Development</span>
                            </div>
                            <span>(0)</span>
                        </label>
                    </div>
                    <ul>
                                            </ul>
                            </div>
            <div class="show-more">
                <a class="show-more-less-btn" href="#" onclick="$('.course-all-category .course-category .webdesign-category').toggleClass('less'); $('.show-more-less-btn').toggleClass('d-none');">Show more</a>
                <a class="show-more-less-btn d-none" href="#" onclick="$('.course-all-category .course-category .webdesign-category').toggleClass('less'); $('.show-more-less-btn').toggleClass('d-none');">Show less</a>
            </div>
        </div>
        <div class="course-price course-category">
            <h3>Price</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="price" value="all" id="price_all" onchange="filterCourse()" checked>
                <label class="form-check-label" for="price_all">
                    <span class="text-13px">All</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="price" value="free"  id="price_free" onchange="filterCourse()" >
                <label class="form-check-label" for="price_free">
                    <span class="text-13px">Free</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="price" value="paid" id="price_paid" onchange="filterCourse()" >
                <label class="form-check-label" for="price_paid">
                    <span class="text-13px">Paid</span>
                </label>
            </div>
        </div>
        <div class="course-price course-category">
            <h3>Level</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="all" id="level_all" onchange="filterCourse()" checked>
                <label class="form-check-label" for="level_all">
                    <span class="text-13px">All</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="beginner" name="level" id="level_beginner" onchange="filterCourse()" >
                <label class="form-check-label" for="level_beginner">
                    <span class="text-13px">Beginner</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="intermediate" name="level" id="level_intermediate" onchange="filterCourse()" >
                <label class="form-check-label" for="level_intermediate">
                    <span class="text-13px">Intermediate</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="advanced" name="level" id="level_advanced" onchange="filterCourse()" >
                <label class="form-check-label" for="level_advanced">
                    <span class="text-13px">Advanced</span>
                </label>
            </div>
        </div>
        <div class="course-price course-category">
            <h3>Language</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="all" name="language" id="language_all" onchange="filterCourse()" checked>
                <label class="form-check-label" for="language_all">
                    <span class="text-13px">All</span>
                </label>
            </div>
            <div class="webdesign webdesign-lan less">
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="arabic" name="language" id="language_arabic" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_arabic">
                            <span class="text-13px">Arabic</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="bangla" name="language" id="language_bangla" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_bangla">
                            <span class="text-13px">Bangla</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="chinese" name="language" id="language_chinese" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_chinese">
                            <span class="text-13px">Chinese</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="english" name="language" id="language_english" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_english">
                            <span class="text-13px">English</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="french" name="language" id="language_french" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_french">
                            <span class="text-13px">French</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="georgian" name="language" id="language_georgian" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_georgian">
                            <span class="text-13px">Georgian</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="german" name="language" id="language_german" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_german">
                            <span class="text-13px">German</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="hebrew" name="language" id="language_hebrew" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_hebrew">
                            <span class="text-13px">Hebrew</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="hindi" name="language" id="language_hindi" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_hindi">
                            <span class="text-13px">Hindi</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="indonesia" name="language" id="language_indonesia" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_indonesia">
                            <span class="text-13px">Indonesia</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="italian" name="language" id="language_italian" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_italian">
                            <span class="text-13px">Italian</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="kannada" name="language" id="language_kannada" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_kannada">
                            <span class="text-13px">Kannada</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="khmer" name="language" id="language_khmer" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_khmer">
                            <span class="text-13px">Khmer</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="kurdish" name="language" id="language_kurdish" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_kurdish">
                            <span class="text-13px">Kurdish</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="portuguese" name="language" id="language_portuguese" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_portuguese">
                            <span class="text-13px">Portuguese</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="portugus" name="language" id="language_portugus" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_portugus">
                            <span class="text-13px">Portugus</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="romanian" name="language" id="language_romanian" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_romanian">
                            <span class="text-13px">Romanian</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="russian" name="language" id="language_russian" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_russian">
                            <span class="text-13px">Russian</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="somali" name="language" id="language_somali" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_somali">
                            <span class="text-13px">Somali</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="spanish" name="language" id="language_spanish" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_spanish">
                            <span class="text-13px">Spanish</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="turkish" name="language" id="language_turkish" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_turkish">
                            <span class="text-13px">Turkish</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="urdu" name="language" id="language_urdu" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_urdu">
                            <span class="text-13px">Urdu</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="uzbek" name="language" id="language_uzbek" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_uzbek">
                            <span class="text-13px">Uzbek</span>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="vietnamese" name="language" id="language_vietnamese" onchange="filterCourse()" >
                        <label class="form-check-label" for="language_vietnamese">
                            <span class="text-13px">Vietnamese</span>
                        </label>
                    </div>
                            </div>
            <div class="show-more">
                <a class="show-more-less-btn-lan" href="#" onclick="$('.course-all-category .course-category .webdesign-lan').toggleClass('less'); $('.show-more-less-btn-lan').toggleClass('d-none');">Show more</a>
                <a class="show-more-less-btn-lan d-none" href="#" onclick="$('.course-all-category .course-category .webdesign-lan').toggleClass('less'); $('.show-more-less-btn-lan').toggleClass('d-none');">Show less</a>
            </div>
        </div>
        <div class="course-price course-category">
            <h3>Ratings</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rating" value="all" id="rating_all" onchange="filterCourse()" checked>
                <label class="form-check-label" for="rating_all">
                    <span class="text-13px">All</span>
                </label>
            </div>
            <div class="course-icon">
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" id="rating_1" onchange="filterCourse()" name="rating" >
                        <label class="form-check-label" for="rating_1">
                            <div class="form-check-icon">
                                <ul>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                    </ul>
                            </div>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="2" id="rating_2" onchange="filterCourse()" name="rating" >
                        <label class="form-check-label" for="rating_2">
                            <div class="form-check-icon">
                                <ul>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                    </ul>
                            </div>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="3" id="rating_3" onchange="filterCourse()" name="rating" >
                        <label class="form-check-label" for="rating_3">
                            <div class="form-check-icon">
                                <ul>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                    </ul>
                            </div>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="4" id="rating_4" onchange="filterCourse()" name="rating" >
                        <label class="form-check-label" for="rating_4">
                            <div class="form-check-icon">
                                <ul>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                    </ul>
                            </div>
                        </label>
                    </div>
                                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="5" id="rating_5" onchange="filterCourse()" name="rating" >
                        <label class="form-check-label" for="rating_5">
                            <div class="form-check-icon">
                                <ul>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                            <li class="icon-color">
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                                                    </ul>
                            </div>
                        </label>
                    </div>
                            </div>
        </div>
    </div>

    <input id="sorting_hidden_input" type="hidden" name="sort_by" value="all">
    
</form>            </div>
            <div class="col-lg-9 col-md-9 col-sm-8"> 
                 <div class="grid-view-body courses courses-list-view-body">

    <div id="btnContainer ">
    <div class="list-card-control d-flex align-items-center">
        
        <button class="btn list-btn active" title="List view" data-bs-toggle="tooltip" onclick="actionTo('set_layout_to_sessionef01.html?layout=list', 'post')"><i class="fa-solid fa-bars "></i></button>
        <button class="btn list-btn " title="Grid view" data-bs-toggle="tooltip" onclick="actionTo('set_layout_to_session64cc.html?layout=grid', 'post')"><i class="fa-solid fa-th"></i></button>
        <a href="courses.html" class="btn list-btn" title="Reset" data-bs-toggle="tooltip"><i class="fas fa-sync-alt"></i></a>
       
        <p class="text-14px">Showing 3 Of 3 Results</p>
       <div class="select-box ms-auto">
            <select id="sorting_select_input" class="select-control form-select nice-select" aria-label="Default select example" onchange="filterCourse()">
                <option value="newest" >Newly published</option>
                <option value="highest-rating" >Highest rating</option>
                <option value="lowest-price" >Lowest price</option>
                <option value="highest-price" >Highest price</option>
                <option value="discounted" >Discounted</option>
            </select>
      </div>
    </div>
</div>

    <div class="courses-card courses-list-view-card">
                                <!-- Course List Card -->
            <a href="course/javascript-understanding-the-weird-parts-the-first-3-5-hours/29.html" class="courses-list-view-card-body courses-card-body checkPropagation">
                <div class="courses-card-image ">
                    <img loading="lazy" src="../uploads/thumbnails/course_thumbnails/optimized/course_thumbnail_default-new_291689237147.jpg">
                    <div class="courses-icon " id="coursesWishlistIcon29">
                        <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('toggleWishlistItems/29.html')"></i>
                    </div>
                    <div class="courses-card-image-text">
                        <h3>Beginner</h3>
                    </div>
                </div>
                <div class="courses-text w-100">
                    <div class="courses-d-flex-text">
                        <h5>Javascript Understanding the Weird Parts - The First 3.5 Hours</h5>
                        <span class="compare-img checkPropagation" onclick="redirectTo('compare3348.html?course-1=javascript-understanding-the-weird-parts-the-first-3-5-hours&amp;course-id-1=29');">
                            <img loading="lazy" src="../assets/frontend/default-new/image/compare.png">
                            Compare                        </span>
                    </div>
                    <div class="review-icon">
                        <p>0</p>
                        <p><i class="fa-solid fa-star "></i></p>
                        <p>(0 Reviews)</p>
                        <p><i class="fas fa-closed-captioning"></i>English</p>
                    </div>
                    <p class="ellipsis-line-2">This is an advanced Javascript course for everyone, giving a deep understanding of the language by understanding how it works under the hood.</p>
                    <div class="courses-price-border">
                        <div class="courses-price">
                            <div class="courses-price-left">
                                                                    <h5 class="price-free">Free</h5>
                                                            </div>
                            <div class="courses-price-right ">
                                <p class="me-2"><i class="fa-regular fa-list-alt p-0 text-15px"></i> 1 Lessons</p>
                                                                    <p><i class="fa-regular fa-clock text-15px p-0"></i> 00:04:33 Hours</p>
                                                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Course List Card -->
                                <!-- Course List Card -->
            <a href="course/introduction-and-learn-bootstrap/28.html" class="courses-list-view-card-body courses-card-body checkPropagation">
                <div class="courses-card-image ">
                    <img loading="lazy" src="../uploads/thumbnails/course_thumbnails/optimized/course_thumbnail_default-new_281689234993.jpg">
                    <div class="courses-icon " id="coursesWishlistIcon28">
                        <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('toggleWishlistItems/28.html')"></i>
                    </div>
                    <div class="courses-card-image-text">
                        <h3>Beginner</h3>
                    </div>
                </div>
                <div class="courses-text w-100">
                    <div class="courses-d-flex-text">
                        <h5>Introduction and Learn bootstrap</h5>
                        <span class="compare-img checkPropagation" onclick="redirectTo('compare2457.html?course-1=introduction-and-learn-bootstrap&amp;course-id-1=28');">
                            <img loading="lazy" src="../assets/frontend/default-new/image/compare.png">
                            Compare                        </span>
                    </div>
                    <div class="review-icon">
                        <p>4</p>
                        <p><i class="fa-solid fa-star filled"></i></p>
                        <p>(2 Reviews)</p>
                        <p><i class="fas fa-closed-captioning"></i>English</p>
                    </div>
                    <p class="ellipsis-line-2">Vue (pronounced /vjuː/, like view) is a progressive framework for building user interfaces.</p>
                    <div class="courses-price-border">
                        <div class="courses-price">
                            <div class="courses-price-left">
                                                                    <h5>$359</h5>
                                                            </div>
                            <div class="courses-price-right ">
                                <p class="me-2"><i class="fa-regular fa-list-alt p-0 text-15px"></i> 1 Lessons</p>
                                                                    <p><i class="fa-regular fa-clock text-15px p-0"></i> 01:05:12 Hours</p>
                                                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Course List Card -->
                                <!-- Course List Card -->
            <a href="course/build-websites-from-scratch-with-html-css/19.html" class="courses-list-view-card-body courses-card-body checkPropagation">
                <div class="courses-card-image ">
                    <img loading="lazy" src="../uploads/thumbnails/course_thumbnails/optimized/course_thumbnail_default-new_191701070166.jpg">
                    <div class="courses-icon " id="coursesWishlistIcon19">
                        <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('toggleWishlistItems/19.html')"></i>
                    </div>
                    <div class="courses-card-image-text">
                        <h3>Beginner</h3>
                    </div>
                </div>
                <div class="courses-text w-100">
                    <div class="courses-d-flex-text">
                        <h5>Build Websites from Scratch with HTML & CSS</h5>
                        <span class="compare-img checkPropagation" onclick="redirectTo('compare7aaa.html?course-1=build-websites-from-scratch-with-html-css&amp;course-id-1=19');">
                            <img loading="lazy" src="../assets/frontend/default-new/image/compare.png">
                            Compare                        </span>
                    </div>
                    <div class="review-icon">
                        <p>0</p>
                        <p><i class="fa-solid fa-star "></i></p>
                        <p>(0 Reviews)</p>
                        <p><i class="fas fa-closed-captioning"></i>English</p>
                    </div>
                    <p class="ellipsis-line-2">Learn Web Development Essentials and Become a Web Developer From Scratch in this Complete HTML &amp; CSS Beginner&#039;s Course</p>
                    <div class="courses-price-border">
                        <div class="courses-price">
                            <div class="courses-price-left">
                                                                    <h5 class="price-free">Free</h5>
                                                            </div>
                            <div class="courses-price-right ">
                                <p class="me-2"><i class="fa-regular fa-list-alt p-0 text-15px"></i> 8 Lessons</p>
                                                                    <p><i class="fa-regular fa-clock text-15px p-0"></i> 01:24:28 Hours</p>
                                                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Course List Card -->
        
        <!------- pagination Start ------>
        <div class="pagenation-items mb-0 mt-3">
                    </div>
    </div>
</div>
                             </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    function filterCourse(){
        //sorting value added to the filter form
        var sort_by = $('#sorting_select_input').val();
        $('#sorting_hidden_input').val(sort_by);

        $('#course_filter_form').submit();
    }
</script><!--------- footer Section Start--------------->
<section class="footer wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="500" data-wow-duration="1000" data-wow-delay="600">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <img loading="lazy" src="../uploads/system/b75d56b5a93590ce01464acd96a853f1.png">
                <p>Study any topic, anytime. explore thousands of courses for the lowest price ever!</p>
                <div class="lattest-news efooter">
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                          <h1 class="mb-0">Subscribe to our newsletter</h1>
                          <form class="ajaxForm resetable" action="https://demo.creativeitem.com/academy/home/subscribe_to_our_newsletter" method="post">
                              <input type="email" class="form-control" id="subscribe_email" placeholder="Enter your email address" name="email">
                              <button class="form-arrow" type="submit"><i class="fa-solid fa-arrow-right-long"></i></button>
                          </form>
                      </div>
                      
                      <!-- <div class="col-lg-8 col-md-6  col-sm-12 col-12">
                          <div class="icon right-icon">
                              <ul class="nav justify-content-end">
                                <li class="nav-item">
                                  <a target="_blank" href="http://creativeitem.com/">
                                                                      </a>
                                </li>
                              </ul>
                          </div>          
                      </div> -->
                  </div>
             </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-4 mb-5">
                <h1>Top categories</h1>
                <ul>
                                                                      <li><a href="coursesb5f1.html?category=html-amp-css"> HTML &amp; CSS</a></li>
                                                          <li><a href="courses6921.html?category=color-theory"> Color Theory</a></li>
                                                          <li><a href="courses4696.html?category=photoshop"> Photoshop</a></li>
                                                          <li><a href="courses885f.html?category=wordpress-theme"> WordPress Theme</a></li>
                                                          <li><a href="coursesd1b3.html?category=adobe-illustrator"> Adobe Illustrator</a></li>
                                                          <li><a href="courses0c91.html?category=bootstrap"> Bootstrap</a></li>
                                    </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                <h1>Useful links</h1>
                <ul>
                                            <li> <a href="become_an_instructor.html">Become an instructor</a></li>
                                        <li> <a href="../blog.html">Blog</a></li>
                    <li><a href="courses.html">All courses</a></li>
                    <li><a href="../sign_up.html">Sign up</a></li>
                                                        </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                <h1>Help</h1>
                <ul>
                    <li><a href="contact_us.html">Contact us</a></li>
                    <li><a href="about_us.html">About us</a></li>
                    <li><a href="privacy_policy.html">Privacy policy</a></li>
                    <li><a href="terms_and_condition.html">Terms and condition</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="refund_policy.html">Refund policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--------- footer Section End--------------->

<!-- PAYMENT MODAL -->
<!-- Modal -->


<script>
  $('document').ready(function(){
    new WOW().init();
  });
</script><script src="../assets/frontend/default-new/js/bootstrap.bundle.min.js"></script>
<script src="../assets/frontend/default-new/js/berli.js"></script>
<script src="../assets/frontend/default-new/js/course.js"></script>
<script src="../assets/frontend/default-new/js/jquery.meanmenu.min.js"></script>
<script src="../assets/frontend/default-new/js/jquery.nice-select.min.js"></script>
<script src="../assets/frontend/default-new/js/jquery.webui-popover.min.js"></script>
<script src="../assets/frontend/default-new/js/owl.carousel.min.js"></script>
<script src="../assets/frontend/default-new/js/script-2.js"></script>
<script src="../assets/frontend/default-new/js/slick.min.js"></script>
<script src="../assets/frontend/default-new/js/venobox.min.js"></script>

<script src="../assets/frontend/default-new/js/wow.min.js"></script>

<script src="../assets/frontend/default-new/js/script.js"></script>
<script src="../assets/frontend/default-new/summernote-0.8.20-dist/summernote-lite.min.js"></script>




<script src="../assets/global/toastr/toastr.min.js"></script>
<script src="../assets/global/jquery-form/jquery.form.min.js"></script>
<script src="../assets/global/tagify/jquery.tagify.js"></script>

<!-- SHOW TOASTR NOTIFIVATION -->


<script type="text/javascript">
function showAjaxModal(url, title, modalType)
{
    $('#modal_ajax .modal-dialog').removeClass('modal-sm');
    $('#modal_ajax .modal-dialog').removeClass('modal-md');
    $('#modal_ajax .modal-dialog').removeClass('modal-lg');
    $('#modal_ajax .modal-dialog').removeClass('modal-xl');
    $('#modal_ajax .modal-dialog').removeClass('modal-fullscreen');

    if(modalType){
        $('#modal_ajax .modal-dialog').addClass('modal-'+modalType);
    }
    // SHOWING AJAX PRELOADER IMAGE
    jQuery('#modal_ajax .modal-body').html('<div class="w-100 text-center pt-5"><img loading="lazy" class="mt-5 mb-5" width="80px" src="../assets/global/gif/page-loader-2.gif"></div>');

    // LOADING THE AJAX MODAL
    jQuery('#modal_ajax').modal('show', {backdrop: 'true'});

    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
        url: url,
        success: function(response)
        {
            jQuery('#modal_ajax .title').html(title);
            jQuery('#modal_ajax .modal-body').html(response);
        }
    });
}

function lesson_preview(url, title){
    // SHOWING AJAX PRELOADER IMAGE
    jQuery('#lesson_preview .title').html(title);
    jQuery('#lesson_preview .modal-body').html('<div class="w-100 text-center pt-5"><img loading="lazy" class="mt-5 mb-5" width="80px" src="../assets/global/gif/page-loader-2.gif"></div>');

    // LOADING THE AJAX MODAL
    jQuery('#lesson_preview').modal('show', {backdrop: 'true'});

    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
        url: url,
        success: function(response)
        {
            jQuery('#lesson_preview .modal-body').html(response);
        }
    });
}
</script>

<!-- (Ajax Modal)-->
<div class="modal fade" id="modal_ajax">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title text-white"></h5>
                <button type="button" class="btn btn-secondary ms-auto py-0 px-2" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" style="overflow:auto;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default text-white" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="lesson_preview" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true" data-bs-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title"></h5>
                <button type="button" class="btn btn-secondary ms-auto py-0 px-2" data-bs-dismiss="modal" aria-hidden="true" onclick="player.pause();">&times;</button>
            </div>
            <div class="modal-body" style="overflow:auto;">
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
function confirm_modal(delete_url)
{
    jQuery('#modal-4').modal('show', {backdrop: 'static'});
    document.getElementById('delete_link').setAttribute('href' , delete_url);
}
</script>

<!-- (Normal Modal)-->
<div class="modal fade" id="modal-4">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">

            <div class="modal-header">
                <h5 class="modal-title text-center">Are you sure ?</h5>
                <button type="button" class="btn btn-outline-secondary px-1 py-0" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-times-circle"></i></button>
            </div>


            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger btn-yes" id="delete_link">Yes</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
function async_modal() {
    const asyncModal = new Promise(function(resolve, reject){
        $('#modal-4').modal('show');
        $('#modal-4 .btn-yes').click(function(){
            resolve(true);
        });
        $('#modal-4 .btn-cancel').click(function(){
            resolve(false);
        });
    });
    return asyncModal;
}
</script>
<script type="text/javascript">
  $(document).ready(function() {
      });
</script>


<!-- Google analytics -->
<!-- Ended Google analytics -->

<!-- Meta pixel -->
<!-- Ended Meta pixel -->


<script type="text/javascript">
  function redirectTo(url, event){
    $(location).attr('href', url);
  }

  function actionTo(url, type = "get", event) {
    //Start prepare get url to post value
      var jsonFormate = '{}';
      if(type == 'post'){
        let pieces = url.split(/[\s?]+/);
        let lastString = pieces[pieces.length - 1];
        jsonFormate = '{"'+lastString.replace('=', '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","').replace("=", '":"').replace("&", '","')+'"}';
      }
      jsonFormate = JSON.parse(jsonFormate);
    //End prepare get url to post value
    $.ajax({
      type: type,
      url: url,
      data: jsonFormate,
      success: function(response) {
        distributeServerResponse(response);
      }
    });

  }

  //Server response distribute
  function distributeServerResponse(response){
    try {
      JSON.parse(response);
      var isValidJson = true;
    } catch (error) {
      var isValidJson = false;
    }
    if (isValidJson) {
      response = JSON.parse(response);
      //For reload after submission
      if(typeof response.reload != "undefined" && response.reload != 0){
        location.reload();
      }

      //For redirect to another url
      if(typeof response.redirectTo != "undefined" && response.redirectTo != 0){
        $(location).attr('href', response.redirectTo);
      }

      //for show a element
      if(typeof response.show != "undefined" && response.show != 0 && $(response.show).length){
        $(response.show).css('display', 'inline-block');
      }
      //for hide a element
      if(typeof response.hide != "undefined" && response.hide != 0 && $(response.hide).length){
        $(response.hide).hide();
      }
      //for fade in a element
      if(typeof response.fadeIn != "undefined" && response.fadeIn != 0 && $(response.fadeIn).length){
        $(response.fadeIn).fadeIn();
      }
      //for fade out a element
      if(typeof response.fadeOut != "undefined" && response.fadeOut != 0 && $(response.fadeOut).length){
        $(response.fadeOut).fadeOut();
      }

      //For adding a class
      if(typeof response.addClass != "undefined" && response.addClass != 0 && $(response.addClass.elem).length){
        $(response.addClass.elem).addClass(response.addClass.content);
      }
      //For remove a class
      if(typeof response.removeClass != "undefined" && response.removeClass != 0 && $(response.removeClass.elem).length){
        $(response.removeClass.elem).removeClass(response.removeClass.content);
      }
      //For toggle a class
      if(typeof response.toggleClass != "undefined" && response.toggleClass != 0 && $(response.toggleClass.elem).length){
        $(response.toggleClass.elem).toggleClass(response.toggleClass.content);
      }

      //For showing error message
      if(typeof response.error != "undefined" && response.error != 0){
        toastr.error(response.error);
      }
      //For showing success message
      if(typeof response.success != "undefined" && response.success != 0){
        toastr.success(response.success);
      }

      //For replace texts in a specific element
      if(typeof response.text != "undefined" && response.text != 0 && $(response.text.elem).length){
        $(response.text.elem).text(response.text.content);
      }
      //For replace elements in a specific element
      if(typeof response.html != "undefined" && response.html != 0 && $(response.html.elem).length){
        $(response.html.elem).html(response.html.content);
      }
      //For replace elements in a specific element
      if(typeof response.load != "undefined" && response.load != 0 && $(response.load.elem).length){
        $(response.load.elem).html(response.load.content);
      }
      //For appending elements
      if(typeof response.append != "undefined" && response.append != 0 && $(response.append.elem).length){
        $(response.append.elem).append(response.append.content);
      }
      //Fo prepending elements
      if(typeof response.prepend != "undefined" && response.prepend != 0 && $(response.prepend.elem).length){
        $(response.prepend.elem).prepend(response.prepend.content);
      }
      //For appending elements after a element
      if(typeof response.after != "undefined" && response.after != 0 && $(response.after.elem).length){
        $(response.after.elem).after(response.after.content);
      }

      // Update the browser URL and add a new entry to the history
      if(typeof response.pushState != "undefined" && response.pushState != 0){
        history.pushState({}, response.pushState.title, response.pushState.url);
      }

      if(typeof response.script != "undefined" && response.script != 0){
        script
      }
    }
  }

</script><script type="text/javascript">
	$(function () {

		if($('[data-bs-toggle="tooltip"]').length > 0){
			$('[data-bs-toggle="tooltip"]').tooltip();
		}

		if($('.tagify').length > 0){
			$('.tagify:not(.initialized)').tagify();
			$('.tagify:not(.initialized)').addClass('initialized');
		}

		$('a[href="#"]').on('click', function(event){
	      event.preventDefault();
	    });

	    if($('.text_editor:not(.initialized)').length){
			$('.text_editor:not(.initialized)').summernote({
				height: 180,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: true                  // set focus to editable area after initializing summernote
			});
			$('.text_editor:not(.initialized)').addClass('initialized');
		}


		//When need to add a wishlist button inside a anchor tag
		$('.checkPropagation').on('click', function(event){
			var action = $(this).attr('action');
			var onclickFunction = $(this).attr('onclick');
			var onChange = $(this).attr('onchange');
			var tag = $(this).prop("tagName").toLowerCase();
			console.log(tag);
			if(tag != 'a' && action){
				$(location).attr('href', $(this).attr('action'));
				return false;
			}else if(onclickFunction){
				if(onclickFunction){
					onclickFunction;					
				}
				return false;
			}else if(tag == 'a'){
				return true;
			}
		});

		//Ajax for submission start
		var formElement;
		if($('.ajaxForm:not(.initialized)').length > 0){
			$('.ajaxForm:not(.initialized)').ajaxForm({
				beforeSend: function(data, form) {
					var formElement = $(form);
				},
				uploadProgress: function(event, position, total, percentComplete) {
				},
				complete: function(xhr) {

					setTimeout(function(){
						distributeServerResponse(xhr.responseText);
					}, 400);

					if($('.ajaxForm.resetable').length > 0){
						$('.ajaxForm.resetable')[0].reset();
					}
				},
				error: function(e)
				{
					console.log(e);
				}
			});
			$('.ajaxForm:not(.initialized)').addClass('initialized');
		}
	});

</script>
	</body>

<!-- Mirrored from demo.creativeitem.com/academy/home/courses?category=html-amp-css by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2024 11:14:23 GMT -->
</html>
