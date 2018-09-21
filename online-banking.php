<?php
	@session_start();
	require_once('includes/core.inc.php');
	require_once('includes/functions.php');

	$dm = new DataModel();

	if($_SERVER['REQUEST_METHOD']==="POST"){
		if(isset($_POST['btnlogin'])){
			$userToLogin = array(
					"emailAddress"	=> $_POST['emailaddress'],
"password"		=>	$_POST['password']
);

$status = $dm->loginUser($userToLogin);

if($status === true){
$userDetails = $dm->getUserDetails($userToLogin);
if(isset($userDetails['id'])){
$_SESSION['id'] = $userDetails['id'];
$_SESSION['secret'] = $userDetails['secretKey'];
$_SESSION['phone'] = $userDetails['phoneNumber'];
}
redirectTo("login.php");
}else{
$message = "<span class='text-danger'>".$status."</span>";
}
}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TrustBank</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="templatemo_style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
		  integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
							<a class="nav-link" href="/online-banking.php">Home <span class="sr-only">(current)</span></a>
						</li>
					</ul>
					<div class="text-right">
						<li class="nav-item">
							<a class="nav-link" href="/index.php">logout</a>
						</li>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<title> TrustBank Loan Calculator </title>
			<table>
				<tr><th>Enter Loan Data:</th>
					<td></td>
				<tr><td>Amount of the loan (Ksh):</td>
					<td><input id="amount" onchange="calculate();"></td>
					</td></tr>
				<tr><td>Annual interest (%):</td>
					<td><input id="apr" onchange="calculate();"></td></tr>
				<tr><td>Repayment period (years):</td>
					<td><input id="years" onchange="calculate();"></td>
			</table>
		</div>
		<div class="col">
			<table>
				<tr><th>Approximate Payments:</th>
				<tr><td>Monthly payment:</td>
					<td>Ksh<span class="output" id="payment"></span></td></tr>
				<tr><td>Total payment:</td>
					<td>Ksh<span class="output" id="total"></span></td></tr>
				<tr><td>Total interest:</td>
					<td>Ksh<span class="output" id="totalinterest"></span></td></tr>
				<tr><td><button onclick="calculate();">Calculate</button></td></tr>

			</table>
		</div>
		<div class="col">

		</div>
	</div>

	<div class="row">
		<div class="par">
			<div class="col">
				Protect yourself from online fraud
				As you transact online, it is important to be aware of internet fraud. Please note that TrustBank will NEVER send you an email asking you to enter, reconfirm or change your security details or other personal information. If you receive such an email or if you believe you may have disclosed your details in any way, please call us immediately on +254702484931 or email: infor@trustbank.com
			</div>
		</div>

	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
		integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
		crossorigin="anonymous"></script>
<?php require_once('includes/footer.php') ?>
<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
<script type="text/javascript" src="slider/calculator.js"></script>
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
