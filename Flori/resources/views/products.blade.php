<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS -->

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<!-- Icons -->

<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Content Part -->
<div id="header">
  <div class="container"> 
    <!-- Menu -->

    <div class="logo"><a href="index"><img src="images/logo.png" alt="" /></a></div>
    <div class="mainmenu">
      <div id="mainmenu">
        <ul class="sf-menu">
          <li><a href="/index" style="color: red">Home</a></li>
          <li><a href="/about" style="color: orange">About</a></li>
          <li><a href="/products" style="color: yellow" id="visited">Products</a>
          </li>
          <li><a href="/promotions" style="color: green">Promotions</a></li>
          <li><a href="/contact" style="color: blue">Contact</a></li>
        </ul>
        <div class="container2">
 
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button onclick="location.href='/cart'" type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">0</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">0</span>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: </p>
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      </div>



      <form id="responsive-menu" action="#" method="post">
        <select>
          <option value="">Navigation</option>
          <option value="/index">Home</option>
          <option value="/about">About</option>
          <option value="/products">Products</option>
          <option value="/promotions">Promotions</option>
          <option value="/contact">Contact</option>
        </select>
      </form>
    </div>

  </div>

</div>

<!--Breadcrumbs ==================================================
================================================== -->
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>Portfolio Page</h3>
      
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here --> 
<!-- Portfolio ==================================================
================================================== -->
<div class="container portfolio">
  <div class="one_third shadow">
    <div class="view view-first"> <img src="images/portfolio/a.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Beauty</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third shadow">
    <div class="view view-first"> <img src="images/portfolio/b.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Fashion</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third lastcolumn shadow">
    <div class="view view-first"> <img src="images/portfolio/c.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Inspirational</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third shadow">
    <div class="view view-first"> <img src="images/portfolio/b.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Beauty</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third shadow">
    <div class="view view-first"> <img src="images/portfolio/c.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Fashion</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third lastcolumn shadow">
    <div class="view view-first"> <img src="images/portfolio/a.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Inspirational</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  
  <div class="one_third shadow">
    <div class="view view-first"> <img src="images/portfolio/c.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Beauty</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third shadow">
    <div class="view view-first"> <img src="images/portfolio/a.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Fashion</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third lastcolumn shadow">
    <div class="view view-first"> <img src="images/portfolio/b.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Inspirational</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third shadow">
    <div class="view view-first"> <img src="images/portfolio/a.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Beauty</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third shadow">
    <div class="view view-first"> <img src="images/portfolio/b.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Charity</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third-->
  <div class="one_third lastcolumn shadow">
    <div class="view view-first"> <img src="images/portfolio/c.jpg" alt="" />
      <div class="mask">
        <h2><a href="#">Inspirational</a></h2>
      </div>
      <!-- mask ends here --> 
    </div>
    <!-- view ends here --> 
  </div>
  <!--end one_third--> 
</div>
<!-- container ends here --> 


<!-- Socialize ==================================================
================================================== -->
<hr class="separator2">
<div class="socialsblock">
  <div class="container socialize">
    <h3>Socialize with us!</h3>
    <section class="socials">
      <ul class="socials">
        <li><a href="https://www.facebook.com/Lazy-Unicorn-403177003801120/?modal=admin_todo_tour"><img src="images/socials/facebook.png" alt="" /></a></li>
        <li><a href="https://www.instagram.com/thelazyunicorn97/"><img src="images/socials/instagram.png" alt="" /></a></li>
        <li><a href="https://www.youtube.com/watch?v=bIB8EWqCPrQ"><img src="images/socials/youtube.png" alt="" /></a></li>
      </ul>
    </section>
  </div>

</div>

<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="one_fourth">
      <h3><a href="contact">Contact Informations</a></h3>
      <p style="color:white;"><span class="orange"><strong>Address:</strong></span> <br>
        Romania, Bucharest, Sector 1</p>
      <p style="color:white;"><span class="orange"><strong>Phone:</strong></span> <br>
        +40 728 790 182<br>
      </p>
      <p style="color:white;"><span class="orange"><strong>Email:</strong></span> <br>
        ana_iancu97@yahoo.com<br>
      </p>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth">
      <h3><a href="products">Products</a></h3>
      <ul>
        <li><a href="products" title="">Gifts</a></li>
        <li><a href="products" class="">Love</a></li>
        <li><a href="products" class="">Events</a></li>
      </ul>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth">
      <h3><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?ref=page_internal">Gallery</a></h3>
      <ul>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403181067134047" class="">Wedding</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403181573800663" class="">Birthday</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403182077133946" class="">Valentine's day</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403181720467315" class="">Funerals</a></li>
        <li><a href="https://www.facebook.com/pg/Lazy-Unicorn-403177003801120/photos/?tab=album&album_id=403182367133917" class="">Festival</a></li>
      </ul>
    </div>
    <!-- four columns ends here -->
    <div class="one_fourth lastcolumn">
      <h3><a href="about">About</a></h3>
      <p><a href="about" rel="nofollow">Flower shop online</a></p>
    </div>
    <!-- four columns ends here --> 
  </div>
  <!-- container ends here --> 
</div>

<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
  <div class="container">
    <p class="copyright">&copy; Copyright 2019. All rights reserved.</p>
  </div>
  <!-- container ends here --> 
</div>
<!-- copyright ends here --> 
<!-- End Document
================================================== --> 
<!-- Scripts ==================================================
================================================== --> 
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="js/superfish.js" type="text/javascript"></script> 
<script src="js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 
<!-- Modernizr --> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
</body>
</html>