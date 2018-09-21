<!DOCTYPE html>
<?php 
	require_once('includes/core.inc.php'); 
	require_once("includes/connection.php");
	require_once('includes/functions.php');
?>

<head>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<title>TrustBank</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="templatemo_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  	<script src="slider/modernizr.js"></script>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-mstyle=">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand mr" href="#"><img src="/images/favicon.png" alt="TrustBank"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav pull-right" style="float: right !important; right: 0 !important;">
                        <li class="nav-item active">
                            <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login.php">Online Banking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div style="background-color:#cccccc; id="main_container" >
    <div class="container" id="home" style="background-color: whitesmoke">
        <div class="row col-wrap">
            <div id="right_container" class="col col-md-12 col-sm-12">
                <div class="row" >
                    <div class="col col-md-12">
                        <h1 style="text-align: center; font-size: large"  >WELCOME TO TRUSTBANK</h1>


                        <div class="flexslider">

                            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-3303px, 0px, 0px);"><li class="clone" style="width: 1101px; float: left; display: block;"><img src="images/shutterstock_296805242.jpg" alt="slide 3" draggable="false"></li><li class="clone" aria-hidden="true" style="width: 1101px; float: left; display: block;"><img src="images/shutterstock_296805242.jpg" alt="slide 3" draggable="false"></li>
                                    <li style="width: 1101px; float: left; display: block;" class=""><img src="images/templatemo_slide_1.jpg" alt="slide 1" draggable="false"></li>
                                    <li style="width: 1101px; float: left; display: block;" class=""><img src="images/templatemo_slide_2.jpg" alt="slide 2" draggable="false"></li>
                                    <li style="width: 1101px; float: left; display: block;" class="flex-active-slide"><img src="images/templatemo_slide_3.jpg" alt="slide 3" draggable="false"></li>
                                    <li style="width: 1101px; float: left; display: block;" class=""><img src="images/shutterstock_296805242.jpg" alt="slide 3" draggable="false"></li>
                                    <li style="width: 1101px; float: left; display: block;" class="clone" aria-hidden="true"><img src="images/templatemo_slide_1.jpg" alt="slide 1" draggable="false"></li><li style="width: 1101px; float: left; display: block;" class="clone"><img src="images/templatemo_slide_1.jpg" alt="slide 1" draggable="false"></li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="flex-active">3</a></li><li><a class="">4</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>

                    </div>
                        <div class="shares">
                            <div class="wrap">
                                <marquee behavior="scroll" direction="left" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);" scrollamount="6">
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    USD/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 97.7</span>
                                        , <span class="currency-value">Selling: 102.8</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    GBP/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 126.69</span>
                                        , <span class="currency-value">Selling: 136.36</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    EUR/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 112.78</span>
                                        , <span class="currency-value">Selling: 121.42</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    ZAR/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 6.08</span>
                                        , <span class="currency-value">Selling: 8.84</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    JPY/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 85.82</span>
                                        , <span class="currency-value">Selling: 92.43</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    CHF/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 95.79</span>
                                        , <span class="currency-value">Selling: 105.44</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    CAD/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 71.96</span>
                                        , <span class="currency-value">Selling: 80.54</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    AUD/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 70.19</span>
                                        , <span class="currency-value">Selling: 79.79</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    KES/
                                                    UGX:
                                                </span>
                                        <span class="currency-value">Buying: 34.1</span>
                                        , <span class="currency-value">Selling: 39.04</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    SSP/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 0.45</span>
                                        , <span class="currency-value">Selling: 1.06</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    SEK/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 8.86</span>
                                        , <span class="currency-value">Selling: 13.38</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    NOK/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 9.82</span>
                                        , <span class="currency-value">Selling: 14.34</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    DKK/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 13.24</span>
                                        , <span class="currency-value">Selling: 17.75</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    KES/
                                                    RWF:
                                                </span>
                                        <span class="currency-value">Buying: 6.96</span>
                                        , <span class="currency-value">Selling: 9.64</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    KES/
                                                    TZS:
                                                </span>
                                        <span class="currency-value">Buying: 20.09</span>
                                        , <span class="currency-value">Selling: 24.67</span>
                                    </div>
                                    <div class="single-forex">
                                                <span class="user-currency">
                                                    CNY/
                                                    KES:
                                                </span>
                                        <span class="currency-value">Buying: 11.87</span>
                                        , <span class="currency-value">Selling: 17.88</span>
                                    </div>
                                </marquee>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">Did You Know?</div>
                        <p class="text-justify"> You can grow your savings by setting up an automatic transfer between your checking and savings accounts. </p>
                        <div class="text-center">

                        </div>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">Personal Banking</div>
                        <p class="text-justify">
                            Welcome to Personal Banking. We have developed a wide array of products to give you quick and easy access to your funds. We offer products for your every day money management needs, expert financial advice as well as a host of other financial solutions.</p>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">About TrustBank Internet Banking</div>
                        <p class="text-justify">

                            Our internet banking product is a secure, fully transactional, internet-based banking platform that enables you to transact with us wherever and whenever it suits you. All you need is a stable internet connection. </p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>

        </div>
    </div>

        </div>

<?php require_once('includes/footer.php') ?>
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="slider/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>