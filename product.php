<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/logo-white.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Titan Apparel | Product</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <span>
                Titan Apparel
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <from class="search_form">
                    <input type="text" class="form-control" placeholder="Search here...">
                      <button class="" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                  </from>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php #about"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php #why-us">Why Us</a>
                </li>
                <li class="nav-item">
                  <div class="user_option_box">
                    <a href="cart.php" class="btn btn-outline-success">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>  
                        <span>
                          Cart
                        </span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- product section -->
  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Men's Apparel
        </h2>
      </div>
      <div class="row">    
        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img1.jpg" class="card-img-top" alt="Men Pants">
              <div class="card-body">
                <h5 class="card-title">Men Solid Slant Pocket Pants</h5>
                <p class="card-text">₱605</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Solid Slant Pocket Pants" />
                <input type="hidden" name="Price" value="605" /> 
              </div>
            </div>
          </form>
        </div>

        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img2.jpg" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Men Solid Tailored Pants</h5>
                <p class="card-text">₱693</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Solid Tailored Pants" />
                <input type="hidden" name="Price" value="693" />
              </div>
            </div>
          </form>
        </div>

        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img3.jpg" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Men Patched Detail Shorts</h5>
                <p class="card-text">₱392</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Patched Detail Shorts" />
                <input type="hidden" name="Price" value="392" />
              </div>
            </div>
          </form>
        </div>

        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img4.jpg" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Men Figure & Japanese Letter Graphic Tee</h5>
                <p class="card-text">₱404</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Figure & Japanese Letter Graphic Tee" />
                <input type="hidden" name="Price" value="404" />
              </div>
            </div>
          </form>
        </div>

        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img5.jpg" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Men Japanese Letter & Wave Print Tee</h5>
                <p class="card-text">₱452</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Japanese Letter & Wave Print Tee" />
                <input type="hidden" name="Price" value="452" />
              </div>
            </div>
          </form>
        </div>

        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img6.jpg" class="card-img-top" alt="Men Tees">
              <div class="card-body">
                <h5 class="card-title">Men Floral Spliced Button Front Shirt</h5>
                <p class="card-text">₱455</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Floral Spliced Button Front Shirt" />
                <input type="hidden" name="Price" value="455" />
              </div>
            </div>
          </form>
        </div>

        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img7.jpg" class="card-img-top" alt="Men Bags">
              <div class="card-body">
                <h5 class="card-title">Men Chain Decor Crossbody Bag</h5>
                <p class="card-text">₱413</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Chain Decor Crossbody Bag" />
                <input type="hidden" name="Price" value="413" />
              </div>
            </div>
          </form>
        </div>
           
        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img8.jpg" class="card-img-top" alt="gpu">
              <div class="card-body">
                <h5 class="card-title">Men Flap Crossbody Bag With Wristlet</h5>
                <p class="card-text">₱317</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Flap Crossbody Bag With Wristlet" />
                <input type="hidden" name="Price" value="317" />
              </div>
            </div>
          </form>
        </div>

        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img9.jpg" class="card-img-top" alt="gpu">
              <div class="card-body">
                <h5 class="card-title">Men Pocket Front Crossbody Bag</h5>
                <p class="card-text">₱441</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Color Block Lace-up Front Sneakers" />
                <input type="hidden" name="Price" value="441" />
              </div>
            </div>
          </form>
        </div>

        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img10.jpg" class="card-img-top" alt="gpu">
              <div class="card-body">
                <h5 class="card-title">Men Color Block Lace-up Front Sneakers</h5>
                <p class="card-text">₱1,136</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Color Block Lace-up Front Sneakers" />
                <input type="hidden" name="Price" value="1136" />
              </div>
            </div>
          </form>
        </div>
        
        <div class="col-sm-6 col-lg-4">
          <form method="POST" action="manage_cart.php">
            <div class="card">
              <img src="images/img11.jpg" class="card-img-top" alt="gpu">
              <div class="card-body">
                <h5 class="card-title">Men Lace-up Front Cartoon Graphic Sneakers</h5>
                <p class="card-text">₱1,186</p>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Men Lace-up Front Cartoon Graphic Sneakers" />
                <input type="hidden" name="Price" value="1186" />
              </div>
            </div>
          </form>
        </div>
        
      <div class="col-sm-6 col-lg-4">
        <form method="POST" action="manage_cart.php">
          <div class="card">
            <img src="images/img12.jpg" class="card-img-top" alt="gpu">
            <div class="card-body">
              <h5 class="card-title">Men Letter Graphic Skate Shoes</h5>
              <p class="card-text">₱935</p>
              <div class="star_container">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
              </div>
              <h6>Quantity  <input type = "number" name="Quantity" min = "1" max = "10"></h6>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Men Letter Graphic Skate Shoes" />
              <input type="hidden" name="Price" value="935" />
            </div>
          </div>
        </form>
      </div>

    </div>
  </section>

  <!-- end product section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              <a href="index.php" class="navbar-brand">
                <span>
                  Titan Tech
                </span>
              </a>
            </h5>
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              123 Julia Vargas Avenue, Mandaluyong, Metro Manila
            </p>
            <p>
              <i class="fa fa-mobile" aria-hidden="true"></i>
              +63(917)-654-3210            
            </p>
            <p>
              <i class="fa fa-phone" aria-hidden="true"></i>
              (02)8756-43-86            
            </p>          
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              titan-apparel@gmail.com
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="index.php">
                  Home
                </a>
              </li>
              <li>
                <a href="index.php #about">
                  About
                </a>
              </li>
              <li>
                <a href="index.php #why-us">
                  Why Us
                </a>
              </li>
              <li>
                <a href="why">
                  Why Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <button class="scrollup" onclick="topFunction()" id="myBtn" title="Go to top">
    <i class='fa fa-arrow-circle-up'></i></button>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- page up btn -->
  <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
      
      $(this).addClass('transition');
      }, function(){
      
      $(this).removeClass('transition');
      });
      });
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function()
      {scrollFunction()};

      function scrollFunction() {
       if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
         mybutton.style.display = "block";
       }
       else {
         mybutton.style.display = "none";
       }
      }
      function topFunction() {
       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
      }
     var modal = document.getElementById('myModal');

     var images = document.getElementsByClassName('myImages');

     var modalImg = document.getElementById("img01");

     for (var i = 0; i < images.length; i++) {
     var img = images[i];
      
     img.onclick = function(evt) {
         modal.style.display = "block";
         modalImg.src = this.src;
         captionText.innerHTML = this.alt;
       }
     }
 
     var span = document.getElementsByClassName("close")[0];

     span.onclick = function() { 
       modal.style.display = "none";
     }  
   </script> 

</body>

</html>