<!--------- footer Section Start--------------->
<section class="footer wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="500" data-wow-duration="1000" data-wow-delay="600">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <img loading="lazy" src="uploads/system/b75d56b5a93590ce01464acd96a853f1.png">
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
                                                                      <li><a href="home/coursesb5f1.php?category=html-amp-css"> HTML &amp; CSS</a></li>
                                                          <li><a href="home/courses6921.php?category=color-theory"> Color Theory</a></li>
                                                          <li><a href="home/courses4696.php?category=photoshop"> Photoshop</a></li>
                                                          <li><a href="home/courses885f.php?category=wordpress-theme"> WordPress Theme</a></li>
                                                          <li><a href="home/coursesd1b3.php?category=adobe-illustrator"> Adobe Illustrator</a></li>
                                                          <li><a href="home/courses0c91.php?category=bootstrap"> Bootstrap</a></li>
                                    </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                <h1>Useful links</h1>
                <ul>
                                            <li> <a href="home/become_an_instructor.php">Become an instructor</a></li>
                                        <li> <a href="blog.php">Blog</a></li>
                    <li><a href="home/courses.php">All courses</a></li>
                    <li><a href="sign_up.php">Sign up</a></li>
                                                        </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                <h1>Help</h1>
                <ul>
                    <li><a href="home/contact_us.php">Contact us</a></li>
                    <li><a href="home/about_us.php">About us</a></li>
                    <li><a href="home/privacy_policy.php">Privacy policy</a></li>
                    <li><a href="home/terms_and_condition.php">Terms and condition</a></li>
                    <li><a href="home/faq.php">Faq</a></li>
                    <li><a href="home/refund_policy.php">Refund policy</a></li>
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
</script><script src="assets/frontend/default-new/js/bootstrap.bundle.min.js"></script>
<script src="assets/frontend/default-new/js/berli.js"></script>
<script src="assets/frontend/default-new/js/course.js"></script>
<script src="assets/frontend/default-new/js/jquery.meanmenu.min.js"></script>
<script src="assets/frontend/default-new/js/jquery.nice-select.min.js"></script>
<script src="assets/frontend/default-new/js/jquery.webui-popover.min.js"></script>
<script src="assets/frontend/default-new/js/owl.carousel.min.js"></script>
<script src="assets/frontend/default-new/js/script-2.js"></script>
<script src="assets/frontend/default-new/js/slick.min.js"></script>
<script src="assets/frontend/default-new/js/venobox.min.js"></script>

<script src="assets/frontend/default-new/js/wow.min.js"></script>

<script src="assets/frontend/default-new/js/script.js"></script>
<script src="assets/frontend/default-new/summernote-0.8.20-dist/summernote-lite.min.js"></script>




<script src="assets/global/toastr/toastr.min.js"></script>
<script src="assets/global/jquery-form/jquery.form.min.js"></script>
<script src="assets/global/tagify/jquery.tagify.js"></script>

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
    jQuery('#modal_ajax .modal-body').html('<div class="w-100 text-center pt-5"><img loading="lazy" class="mt-5 mb-5" width="80px" src="assets/global/gif/page-loader-2.gif"></div>');

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
    jQuery('#lesson_preview .modal-body').html('<div class="w-100 text-center pt-5"><img loading="lazy" class="mt-5 mb-5" width="80px" src="assets/global/gif/page-loader-2.gif"></div>');

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