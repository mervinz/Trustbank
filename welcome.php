<!DOCTYPE html>
<?php 
	require_once('includes/core.inc.php'); 
	require_once("includes/connection.php");
	require_once('includes/functions.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<title>Home</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="templatemo_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  	<script src="slider/modernizr.js"></script>
</head>
<body bgcolor="grey">
	<div id="main_container">
		<div class="container" id="home">
			<div class="row col-wrap">			 
				<div id="left_container" class="col col-md-3 col-sm-12">
                	<div class="templatemo_logo">
						<a href="#"><img src="images/templatemo_logo.png" alt="Botany Theme"></a>
					</div>
					<nav id="main_nav">
						<ul class="nav">
							<li class="active"><a href="index.php">Home</a></li>
							
							<!--<li><?php login_or_out(); ?></li>-->
						</ul>
					</nav> <!-- nav -->	
					<form  action="#" method="get" class="navbar-form" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" id="keyword" name="keyword">
						</div>
						<button type="submit" class="btn btn-primary" name="Search">Go</button>
					</form>
					<div>
						<a rel="nofollow" href="http://www.facebook.com/templatemo"><img src="images/facebook.png" alt="Like us on Facebook"></a>
						<a href="#"><img src="images/twitter.png" alt="Follow us on Twitter"></a>
						<a href="#"><img src="images/rss.png" alt="RSS feeds"></a>
					</div>
				</div>
				<div id="right_container" class="col col-md-9 col-sm-12">
                
					<div class="row">
                    	<div class="col col-md-12">
                        
                    		<h2>WELCOME TO OTP ACCESS CONTROLLED WEB APPLICATION</h2> 

                            <div class="flexslider">
                              <ul class="slides">
                                <li><img src="images/templatemo_slide_1.jpg" alt="slide 1" /></li>
                                <li><img src="images/templatemo_slide_2.jpg" alt="slide 2" /></li>
                                <li><img src="images/templatemo_slide_3.jpg" alt="slide 3" /></li>
																<li><img src="images/shutterstock_296805242.jpg" alt="slide 3" /></li>
                              </ul>
                            </div>
                            
        				</div>
                    </div>
					
                   /** <article class="row">
						<div class="col col-md-12">
							<img src="images/templatemo_tn_1.jpg" alt="Templatemo Pic 1" class="img-thumbnail img-responsive img_left">
                            <h3>Introduction</h3> 
							<p>This is an OTP access controlled web based application. </br>Secuity of your Accountour priority <a 			
					    </p>
							<p><a rel="nofollow" href="http://www.templatemo.com/page/1" class="btn btn-primary" role="button">View More</a></p>
						</div>								            
					</article>
					<article class="row">
						<div class="col col-md-12">
							<img src="images/templatemo_tn_2.jpg" alt="Templatemo Pic 2" class="img-thumbnail img-responsive img_left">
                            <h3>e-research</h3>
							<p>In orci tellus, tempor vel neque at, pulvinar dignissim quam. Suspendisse tempus, tortor sed ullamcorper elementum, sapien velit viverra ante, at laoreet mauris sapien tempus quam. Nulla fermentum sapien sapien, ac tincidunt neque suscipit id. Vivamus erat purus, iaculis sit amet velit rhoncus, viverra imperdiet.</p>
							<p><a rel="nofollow" href="http://www.templatemo.com/page/2" class="btn btn-primary" role="button">View More</a></p>
						</div>							
					</article>	
					<article class="row">
						<div class="col col-md-12">
							<img src="images/templatemo_tn_3.jpg" alt="Templatemo Pic 3" class="img-thumbnail img-responsive img_left">
                            <h3>Online Reservations</h3>
							<p>Donec iaculis non augue sit amet vulputate. Maecenas porta, nisi ac ornare gravida, nulla metus condimentum lorem, in placerat massa erat at eros. Quisque tristique odio in mattis tincidunt. Etiam ac justo ac arcu gravida cursus id eu velit. Duis tincidunt nec elit non porttitor.</p>
							<p><a rel="nofollow" href="http://www.templatemo.com/page/3" class="btn btn-primary" role="button">View More</a></p>
						</div>			            
					</article>                
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
                	<div class="templatemo_logo">
						<a href="#"><img src="images/templatemo_logo.png" alt="Botany Theme"></a>
					</div>
					
					<form  action="#" method="get" class="navbar-form" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" id="keyword" name="keyword">
						</div>
						<button type="submit" class="btn btn-primary" name="Search">Go</button>
					</form>
					<div>
						<a rel="nofollow" href="http://www.facebook.com/templatemo"><img src="images/facebook.png" alt="Like us on Facebook"></a>
						<a href="#"><img src="images/twitter.png" alt="Follow us on Twitter"></a>
						<a href="#"><img src="images/rss.png" alt="RSS feeds"></a>
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