<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS -->

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/skeleton2.css">
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />

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
          <li><a href="/shop" style="color: yellow">Products</a>
          </li>
          <li><a href="/promotions" style="color: green">Promotions</a></li>
          <li><a href="/contact" style="color: blue" id="visited">Contact</a></li>
           @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('signup'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signup') }}" >Sign Up</a>
                    </li>
                    
                @endif
            @else
                <li class="nav-item dropdown">
                    

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          <li><a href="/cart"><img src="images/cart.png" style="width:35px"></a></li>
        </ul>
      </div>



      <form id="responsive-menu" action="#" method="post">
        <select>
          <option value="">Navigation</option>
          <option value="/index">Home</option>
          <option value="/about">About</option>
          <option value="/shop">Products</option>
          <option value="/promotions">Promotions</option>
          <option value="/contact">Contact</option>
          <option value="/cart">Shopping Cart</option>
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
      <h3>Contact Page</h3>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here --> 
<!-- Contact Content Part - GoogleMap ==================================================
================================================== -->
<section class="map"> 
  <!-- google map -->
  <div class="map-holder">
    <div class="map-container">
      <iframe class="map" src="https://maps.google.com/maps?q=strada%20florilor&t=&z=13&ie=UTF8&iwloc=&output=embed" ></iframe>
      <!-- end google map --> 
    </div>
    <!--map-container ends here--> 
  </div>
  <!--map-holder ends here--> 
</section>

<!-- Contact Content Part - Contact Form ==================================================
================================================== -->
<div class="container contact"> 
  <!-- Contact Sidebar ==================================================
================================================== -->
  <div class="one_third">
    <h3>Our Info</h3>
    <section class="first shadow" style="border: 2px solid black;">
      <ul>
        <li>Romania, Bucharest</li>
        <li>Phone: +40 728 790 182</li>
        <li>Website: <a href="#" title="" style="color:black">The Lazy Unicorn</a></li>
        <li>Email: <a href="#" title="" style="color:black">thelazyunicorn97@gmail.com</a></li>
      </ul>
    </section>
  </div>
  <!-- one_third ends here -->
  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h3>Contact us</h3>
      <div class="sepContainer"></div>

      <form action="{{ route('contact.store') }}" method="post" id="contact_form">
       
        <input type="hidden" name="_token" value="{{ Session::token() }}">

        <div class="name">
          <label for="name">Your Name:</label>
          <p> Please enter your full name</p>
          <input id=name name=name type=text placeholder="Your Full Name" required />
        </div>

        <div class="email">
          <label for="email">Your Email:</label>
          <p> Please enter your email address</p>
          <input id=email name=email type=email placeholder="email@email.com" required />
        </div>

        <div class="message">
          <label for="message">Your Message:</label>
          <p> Please enter your question</p>
          <textarea id=message name=message rows=6 cols=10 required></textarea>
        </div>

        <div id="loader">
          <input type="submit" value="Submit" />
        </div>

      </form>
    </div>
    <!-- end contactForm --> 
  </div>
</div>
<div class="blankSeparator"></div>



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
<!-- four columns ends here -->
    <div class="footer">

    <div class="container1">
    <div class="one_fourth">

    <img src="images/zebra.jpg" class="zebra" alt="" />
    </div>

    <div class="one_fourth">
      <h3><a href="contact">Contact Informations</a></h3>
      <p style="color:white;"><span class="orange"><strong>Address:</strong></span> <br>
        Romania, Bucharest, Sector 1</p>
      <p style="color:white;"><span class="orange"><strong>Phone:</strong></span> <br>
        +40 728 790 182<br>
      </p>
      <p style="color:white;"><span class="orange"><strong>Email:</strong></span> <br>
        thelazyunicorn97@gmail.com<br>
      </p>
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
    <p class="copyright">&copy; Copyright 2013. &quot;Freebix&quot; by <a href="http://www.anarieldesign.com/" rel="nofollow">Anariel Design</a>. All rights reserved.</p>
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