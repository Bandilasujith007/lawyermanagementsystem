<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>User Profile</title>

  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
<!--header-->
<header id="site-header" class="fixed-top">

  <div class="container">
      <nav class="navbar navbar-expand-lg stroke p-0">
          <h1> <a class="navbar-brand" href="index.html">
                  <span></span> Lawyer Up
              </a></h1>
          
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-lg-5 mr-lg-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="chat_app.php">Chat</a>
                  </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="notification.php">Notification</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="paymentindex.php">Payment</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="userprofile.php">Profile</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="Ulogin.php">Logout</a>
                  </li>
              </ul>

              <!--/search-right-->
              <div class="navbar-nav search-right nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="fa fa-search"></span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <div class="search_form">
                          <form action="search-results.html" method="GET">
                              <input type="text" placeholder="Search">
                              <button type="submit" class="btn" value=""><span class="fa fa-search"
                                      aria-hidden="true"></span></button>
                          </form>
                      </div>
                  </div>
              </div>
              <!--//search-right-->
          </div>

          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
<br><br><br><br>
<div class="w3l-searchblock w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3" style="max-height: 300px; overflow-y: auto;">
        <!-- block -->
        <div class="most-recent">
            <div class="title-align mb-4">
                <h3 class="title-left">All Consultation</h3>
                <a href="#blog" class="more-posts"> View all <span class="fas fa-arrow-right"></span></a>
            </div>
            <div class="row">
                <?php
                // Database connection
                $db_host = 'localhost';
                $db_user = 'root';
                $db_pass = '';
                $db_name = 'lawyermanagement';

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query to select all images from the table
                $sql = "SELECT * FROM lawyer";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Retrieve the image data
                        $image = $row['image'];
                        $case = $row['case_handle'];
                        $first_name = $row['first_Name'];
                        $id = $row['id'];

                        // Generate the HTML for each image with Bootstrap card styling

                        echo '<div class="col-lg-3 col-md-6 item">';
                        echo '<div class="card">';
                        echo '    <div class="card-header p-0 position-relative">';
                        echo '        <a href="Aboutlawyer.php?id=' . $id . '">';
                        echo '            <img style="height:200px;" class="card-img-bottom d-block radius-image" src="data:image/jpeg;base64,' . base64_encode($image) . '"
                                alt="Card image cap">';
                        echo '</a>';
                        echo '</div>';
                        echo '   <div class="card-body p-0 blog-details">';
                        echo  '      <a href="#blog-single" class="blog-desc">' . $case . ' 
                        </a>';
                        echo '       <span class="post-date"> ' . $first_name . '</span>';
                        echo '  </div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo 'No images found in the table.';
                }

                $conn->close();
                ?>
            </div>
        </div>
        <!-- //block-->
    </div>
</div>


<!-- grids -->
<section class="grids-1 py-5" id="trip">
    <div class="grids py-lg-5 py-md-4">
        <div class="container">
            <div class="row grids-gap">
                <div class="col-lg-4 align-self">
                    
                    <div class="text-left">
                        
                        <h3 class="title-left mb-3">Categories</h3>
                        
                           
                           
                    </div>

                           
                    
                </div>
                
                <div class="col-lg-8 mt-lg-0 mt-md-5 mt-sm-4 mt-2">
                    
                    <div class="row">
                        <div class="col-lg-8 mt-lg-0 mt-md-5 mt-sm-4 mt-2">
                            <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 mt-md-0 mt-4" style="margin-left:-170px;">
                                    <a href="civillawyer.php">
                                    <div class="column">
                                        <div class="info">
                                            <h4><a href="civillawyer.php">Civil lawyers</a></h4>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                               <div class="col-lg-4 col-md-4 col-sm-6 mt-sm-0 mt-4">
                               <a href="divorcelawyer.php">
                                    <div class="column">
                                        <div class="info">
                                            <h4><a href="divorcelawyer.php">Divorce Lawyer</a></h4>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                              
                              
                                <div class="col-lg-4 col-md-4 col-sm-6 mt-sm-0 mt-4">
                                    <a href="familylawyer.php">
                                    <div class="column">
                                        <div class="info">
                                            <h4><a href="familylawyer.php">Family Lawyer</a></h4>
                                        </div>
                                    </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 mt-md-0 mt-4" style="margin-left:-9px;">
                                    <a href="criminallawyer.php">
                                    <div class="column">
                                        <div class="info">
                                            <h4><a href="criminallawyer.php">Criminal lawyers</a></h4>
                                        </div>
                                    </div>
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
<!-- //grids -->

<!-- home page section -->
<section class="w3l-homeblock1">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="title-align mb-4">
                <h3 class="title-left">Steps to book an appointment</h3>
              
            </div>
            <div id="owl-demo1" class="owl-carousel owl-theme mt-4 py-2 mb-md-4 mb-5">
                <div class="item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe recipe">Search</a>
                            </div>
                          
                           
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="https://s3-alpha-sig.figma.com/img/e90c/0a54/9d85354a49844de27e63576c3f452590?Expires=1699833600&Signature=OKEvwaurpio1YZwt76KCPyyXOrBfK6mUMlj9vSYD~iSq8AFVuur6DFZhRR1nequ3pVcgSm9l1n8ttpyeGBcVg~MDzsQAMOGOvjqWkM0lKuXMjbMao~tjUIgqlFS1wXv~FzDNImpArGzuYaZXOiPavtXQVQALXreNhrCbkYSJymoh1AFVNVXFpAW4ddaIXsEErPBWelMwy0VvMa9RlSTpoZAPMv-sbS1y3N0DAOjawPy16sdGs5zKfbkTmGlQvKFjJ2XrK3niJMQsFhtQA4n~2UDQhx~VHXLqUDljjrAhYilIX-fUC0hhxm8ZbqgTz9U0EcX8ccOZfHeoYiNr9FNd4A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4">
                            </a>
                          
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">Search for lawyer in required area of practice
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="https://s3-alpha-sig.figma.com/img/e90c/0a54/9d85354a49844de27e63576c3f452590?Expires=1699833600&Signature=OKEvwaurpio1YZwt76KCPyyXOrBfK6mUMlj9vSYD~iSq8AFVuur6DFZhRR1nequ3pVcgSm9l1n8ttpyeGBcVg~MDzsQAMOGOvjqWkM0lKuXMjbMao~tjUIgqlFS1wXv~FzDNImpArGzuYaZXOiPavtXQVQALXreNhrCbkYSJymoh1AFVNVXFpAW4ddaIXsEErPBWelMwy0VvMa9RlSTpoZAPMv-sbS1y3N0DAOjawPy16sdGs5zKfbkTmGlQvKFjJ2XrK3niJMQsFhtQA4n~2UDQhx~VHXLqUDljjrAhYilIX-fUC0hhxm8ZbqgTz9U0EcX8ccOZfHeoYiNr9FNd4A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe recipe">Know More</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">Know more about the lawyer.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="https://s3-alpha-sig.figma.com/img/ad99/3c04/9a471bad305610037cc58837fc2c819b?Expires=1699833600&Signature=IDIZmU31JDfJSmz5N4V9z6NS1bIUKyd5k0qSENT52COpAOBi4iz84FeydQAlIEcqyNwohGYjbOsTr9rET1s7Dsq0mIL3iA~jvHgLteoUafPMe42A023l3wKCWapXw7JUwhFJq-eFBcq-mH8v3ILYe2b2P1ahHbLNvQChmqmK3TZrEGI~A~tbMfifP96ENRYaeLP1ns8lV8-~VY4If~CksPYxtJuLUM7L1L2YVxGIo~NbEqa18bGGo95Zy6GzjDXarN5aLmMMAgzXhdq3KOOrQCB0Dc3nf6iwRZPbVr9yMy3qwtlAIbJQRAcQESummsKnXA0szF8hvlJsHcgwPXWO4w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe blue">Select Date and Time</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">Select the date and time to reserve a spot for consultation.
                            </a>
                            
                        </div>
                    </div>
                </div>
              
                <div class="item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="https://s3-alpha-sig.figma.com/img/9310/7e8a/eb25add635697a19c57482ef5db0861c?Expires=1699833600&Signature=AGPa-nyHa5b4haELgHYq8kERlIUBdMp8v2-sAceak9Q5XV1-qk6nNEGINf3DlBW~1lvo0Os17a-2W7a2qIjRFLFS2YmdEEovZBtY0PGwgKj1hSUdSWW0I2y0AkDxwG9HOMopEDf~LZODSqAeJltEll08ZmVbTJuZiDuiZRczuuzWYQ4ViJdrVSInal~kOziRlXlSUYcpbWZTqOX8ryF2LnhKbtc9teZASqLCMkl4vfg~6OtTLPo5BqlVvdHI6TapcAwmYX8xk55tqwKMdkctIXS2YNVcemnm6iRECqN5zFZnOwJNEO~W~DxnJ2r0JC2pvDAPv910XbToTsNqtH0Kfw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe blue">Payment</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">The payment mode of user is safe and secure.
                            </a>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- //home page section -->


  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

  <script src="assets/js/jquery-3.3.1.min.js"></script><!-- default jQuery -->

  <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

  <!-- owlcarousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner typing text -->
  <script>
    function autoType(elementClass, typingSpeed) {
      var thhis = $(elementClass);
      thhis.css({
        "position": "relative",
        "display": "inline-block"
      });
      thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
      thhis = thhis.find(".text-js");
      var text = thhis.text().trim().split('');
      var amntOfChars = text.length;
      var newString = "";
      thhis.text("|");
      setTimeout(function () {
        thhis.css("opacity", 1);
        thhis.prev().removeAttr("style");
        thhis.text("");
        for (var i = 0; i < amntOfChars; i++) {
          (function (i, char) {
            setTimeout(function () {
              newString += char;
              thhis.text(newString);
            }, i * typingSpeed);
          })(i + 1, text[i]);
        }
      }, 1500);
    }

    $(document).ready(function () {
      // Now to start autoTyping just call the autoType function with the 
      // class of outer div
      // The second paramter is the speed between each letter is typed.   
      autoType(".type-js", 200);
    });
  </script>
  <!-- //script for banner typing text -->

  <!-- script for carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        nav: false,
        margin: 30,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          767: {
            items: 2,
            nav: false
          },
          992: {
            items: 4,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for carousel slider -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.min.js"></script>

  </body>

  </html>