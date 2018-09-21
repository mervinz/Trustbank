<!DOCTYPE html>
<?php
	@session_start();
	include_once('../includes/functions.php');
	include_once("apis/AfricasTalkingGateway.php");
	include_once('tbotpa/core.php'); 
	// confirm session active
	if(!isset($_SESSION['id']) || !isset($_SESSION['secret']) || !isset($_SESSION['phone'])){
		redirectTo('../login.php');
	}
	// $_SESSION['user_phone_number'] = "+254701033089";
	// $_SESSION['user_secret_key'] = "user_secret_key";
	
	$status_message = "<p class='text-success'>You will receive an authentication code via sms to ******".substr($_SESSION['phone'], -4)." </p>";
	//instantiate the TimeBasedOneTimePassword
	$otp = new TimeBasedOneTimePassword($_SESSION['secret']);

	if(!isset($_SESSION['authenticator']) || !isset($_SESSION['expiry_time'])){
		//generate the authenticator
		$otp->GetTruncatedOathCode($otp->GenerateHotpOath());
		//send the the authenticator to the user
		$status_message = $otp->SendAuthenticator();
	}

	if($_SERVER['REQUEST_METHOD']==="POST"){
		if(isset($_POST['confirm_authenticator'])){
			try {
				$otp->OathVerification($_POST['auth_code'],"../online-banking.php"); //pass the redirect url here
			} catch (ParticlesException $ex) {
				$status_message = "<p class='text-danger'>".$ex->getMessage()."</p>";
			}
			
		}
		if(isset($_POST['resend_authenticator'])){
			//generate the authenticator
			$otp->GetTruncatedOathCode($otp->GenerateHotpOath());
			//send the the authenticator to the user
			$status_message = $otp->SendAuthenticator();
		}
		
	}
	//echo $_SESSION['authenticator'];
 ?>
<html>
<head>
	<title>Confirm Code</title>
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="libs/css/custom.css">
</head>
<body class="content-center" bgcolor="grey" style="background-image: url("/images/bank.jpeg")">
	<div class="col-md-4 col-md-offset-4" ng-controller="">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title">Please enter the authentication code</h1>
			</div>
			<div class="panel-body">
				<p><?php echo $status_message; ?></p>
				<form method="post" action="">
					<p><input type="password" class="form-control" name="auth_code" placeholder="Authentication Code" autofocus></p>
					<p class="text-center">
						
						<button type="submit" name="confirm_authenticator" onClick="window.location.href='welcome.php'" class="btn btn-success">CONFIRM
						</button>
						<button type="submit" name="resend_authenticator" class="btn btn-link btn-xs">RESEND CODE</button>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>