<?php 
session_start();
ob_start();
include('header.php');
include('nav.php');
include('dbganeshconn.php');


// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}
?>
<link rel="stylesheet" type="text/css" href="assets/frontend/eu-cookie/purecookie.css" async />

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

<!---------- Bread Crumb Area Start ---------->
<!---------- Bread Crumb Area Start ---------->
<section>
    <div class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <nav  aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <img loading="lazy" class="brd-home mb-1" src="assets/frontend/default-new/image/c-bread-crumb-home.png">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span>Ebooks</span>
                            </li>
                        </ol>
                    </nav>
                    <h1>Dashboard</h1>
                </div>
                <div class="col-3 ms-auto d-none d-sm-inline-block">
                    <div class="book-img">
                        <img loading="lazy" src="assets/frontend/default-new/image/brd-book.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------- Bread Crumb Area End ----------><!---------- Bread Crumb Area End ---------->

<!-- Start Tutor list -->
<section class="pt-50 pb-120">
    <div class="container">
    <div class="row">
    <?php include('sidenav.php'); ?> 
        <div class="col-lg-9 col-md-8">
        <div class="d-flex justify-content-between pb-10">
            <p class="searchResult">Showing 1 Of 1 Results</p>
            <div class="s_search">
            <form action="https://demo.creativeitem.com/academy/ebook" method='get'>
                <input type="text" class="form-control" name="search" placeholder="Search" value="" />
                <span><img loading="lazy" src="assets/frontend/default-new/image/icon/s_search.svg" alt="" /></span>
            </form>
            </div>
        </div>
        <!-- Items -->
        <div class="ebook-items">
            <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                        <div class="ebook-item-one">
                            <div class="img"><img loading="lazy" src="uploads/ebook/thumbnails/c2a2a534a304c0777a18c02bb00e8466.jpg" alt="" width="100%"/></div>
                            <div class="content">
                                <h4 class="title">You too win</h4>
                                <a href="ebook/ebook_details/you-too-win/3.php" class="link">View details</a>
                            </div>
                            <div class="status free">

                            <p>
                                $30                            </p>
                            </div>
                        </div>
                    </div>
                            
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- End Tutor list -->

<script>
    function get_url() {
        var urlPrefix = 'ebookd41d.php?'
        var urlSuffix = "";
        var slectedCategory = "";
        var selectedPrice = "";
        var selectedRating = "";
        var search_text = "";

        // Get selected category
        $('.categories:checked').each(function() {
            slectedCategory = $(this).attr('value');
        });

        // Get selected price
        $('.prices:checked').each(function() {
            selectedPrice = $(this).attr('value');
        });
        searchText = $('.search').val();
        // Get selected rating
        $('.ratings:checked').each(function() {
            selectedRating = $(this).attr('value');
        });

        if (searchText != null) {
            urlSuffix = "category=" + slectedCategory + "&&price=" + selectedPrice + "&&rating=" + selectedRating +
                "&&search=" + searchText;
        } else {
            urlSuffix = "category=" + slectedCategory + "&&price=" + selectedPrice + "&&rating=" + selectedRating;
        }
        var url = urlPrefix + urlSuffix;
        return url;
    }
    function filter() {
        var url = get_url();
        window.location.replace(url);
        //console.log(url);
    }
    function showToggle(elem, selector) {
        $('.' + selector).slideToggle(20);
        if ($(elem).text() === "Show more") {
            $(elem).text('Show less');
        } else {
            $(elem).text('Show more');
        }
    }
    $('.course-compare').click(function(e) {
        e.preventDefault()
        var redirect_to = $(this).attr('redirect_to');
        window.location.replace(redirect_to);
    });
    function toggleLayout(layout) {
        $.ajax({
            type: 'POST',
            url: 'https://demo.creativeitem.com/academy/home/set_layout_to_session',
            data: {
                layout: layout
            },
            success: function(response) {
                location.reload();
            }
        });
    }
</script>
<?php include('footer.php'); ?> 
	</body>

<!-- Mirrored from demo.creativeitem.com/academy/ebook?category=kids&price=all&rating=all by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2024 11:14:49 GMT -->
</html>
