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

  <title>Titan Apparel | Receipt</title>


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

  <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <h1>RECEIPT</h1>
        </div>
        	<h5> Titan Apparel </h5>
        		<h5> Here's your receipt, thank you for your purchase! </h5>
        		<table class = "table">
        			<thead>
        				<tr>
        					<th>Item No.</th>
        					<th>Item Name</th>
        					<th>Unit Price</th>
        					<th>Quantity</th>
        					<th>Amount</th>
        				</tr>
        			</thead>
        			<tbody>
        			<?php		
        				$total = 0;
        				$item_no = 1;
        				foreach($_SESSION as $product)
          {
        	$prc1 = 0;
        	$qty1 = 0;
        	echo "<tr>";
        	echo "<td>".($item_no++)."</td>";
        	echo "<form action='items_update.php' method='post'>";
        	foreach($product as $key => $value)
        	{
        	  if ($key == 2)
        	  {
        		$qty1 = $value;
        		echo "<td>$qty1</td>";
        	  }
        	  else if($key == 1)
        	  {
        		$prc1 = $value;
        		echo "<td>$prc1</td>";
        	  }
        	  else if ($key == 0)
        	  {
        		echo "<td>$value</td>";
        	  }
        	}
        	$gtotal = $qty1 * $prc1;
        	echo "<td>&#8369;".($gtotal)."</td>
        	</tr>";
        	$total += $gtotal;
        				}

        				$shipfee = 0;
        				$amount = (($total * 0.05) + $total) + $shipfee;
        				echo "<tr>
          <th>Shipping Fee: <th>&#8369; $shipfee</th>";
        				echo "<th> Total Price: ";
        				echo "<th><th>&#8369; ".($total)."</th></tr>";	
        				echo "<tr><th>Tax: <th>5&percnt;</th>";
        				echo "<th>Total Amount: <th><th>&#8369; $amount</th>
          </tr>";

        			?>

        			</tbody>
        		</table>
        		<p><b>Date of Purchase: </b><?php echo(strftime("%m/%d/%Y %H:%M %p")); ?></p>
        		<p><b>Date of Delivery:</b> 2 - 5 days</p>
          </div>
        </div>

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