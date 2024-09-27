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
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Titan Apparel | Cart</title>


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

    <!-- cart section -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <h1>MY CART</h1>
        </div>
          <div class="col-lg-12">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Item Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
              <?php
                $product=0;
                $gtotal=0;
                $total=0;
                $subtotal=0;
                $item_no=1;
                foreach($_SESSION as $product)
                {
                  $prc1=0;
                  $qty1=0;
                  echo 
                    "<tr>
                      <th>".($item_no++)."</th>";
                  echo "<form action='items_update.php' method='post'>";
                    foreach($product as $key => $value)
                    {
                      //quantity
                      if ($key == 2)
                      {
                        echo "<td><input type = 'number' name = 'name$key' value = '".$value."' min = '1' max = '10'></td>";
                        $qty1 = $value;
                      }
                      //price
                      else if($key == 1)
                      {
                        echo "<input type = 'hidden' name = 'name$key' value = '".$value."'>";  
                        $prc1 = $value;
                      }
                      //item name
                      else if ($key == 0)
                      {
                        echo "<input type = 'hidden' name = 'name$key' value = '".$value."'>";
                        echo "<td>".$value."</td>";
                      }  
                    }
                    $subtotal = $qty1 * $prc1;
                      echo "<td>&#8369;".($subtotal)."</td>";
                      echo "<td><input type ='submit' name='event' value='Update' class='btn-update'></td>";
                      echo "<td><input type ='submit' name='event' value='Remove' class='btn-remove'></td>";
                      echo "<td></td>";
                      echo "</form>";
                      $total += $subtotal;
                      echo "</tr>";
                }
                if ($product == "" || $product == null)
                {
                  echo "<th class='table-danger'>Your cart is empty.<th class='table-danger'>";
                  echo "<th class='table-danger'>";
                  echo "<th class='table-danger'>";
                  echo "<th class='table-danger'>";
                  echo "<th class='table-danger'>";
                  echo "<th class='table-danger'>";
                }
                else 
                {
                  $gtotal = $total;
                  echo "<th>";
                  echo "<th>";
                  echo "<th> Total Price:";
                  echo "<th>&#8369;".($gtotal)."</th>";
                  echo "<th><form name=co method=post><input type ='submit' name='checkout' value='Buy now' class='btn-check-out'></form></th>";
        				  if(isset($_POST['checkout'])){	  
        					  echo "<script>
                            alert('Successfully Purchased');
                            window.location.href='cart.php';
                        </script>";
        				  }

				          echo "<th><form name=co method=post><input type ='submit' name='reciept' value='Reciept' class='btn-receipt'></form></th>";
				          echo "<th></th>";
                  echo "<th></th>";
          				  if(isset($_POST['reciept']))
                    {          					 
                      echo "<script type= 'text/javascript'>location.href='Reciept.php'</script>";
          				  }
                }
				
              ?>
            </tbody>
            </table>
          </div>
      </div>
      </br></br></br></br></br></br></br></br></br></br></br></br></br>
      <a href="product.php"><input type = "submit" class="btn-cntn-shop" aria-hidden="true" value = "Continue Shopping"></i></a>
    </div>
  <!-- end cart section -->

  <!-- info section -->
</br></br>
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              <a href="index.php" class="navbar-brand">
                <span>
                  Titan Apparel
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
                <a href="product.php">
                  Products
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
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <div class="subs">
              <form action="">
                <input type="email" placeholder="Enter your email">
                <button class="btn">
                  Subscribe
                </button>
              </form>
            </div>
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

</body>
</html>