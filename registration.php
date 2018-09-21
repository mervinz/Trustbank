<!DOCTYPE html>
<?php 
	require_once('includes/core.inc.php'); 
	require_once('includes/functions.php');

	$dm = new DataModel();

	if($_SERVER['REQUEST_METHOD']==="POST"){
		if(isset($_POST['btnregister'])){
			//test for password equivalence
			if(strcmp($_POST['password'],$_POST['confirmpassword'])==0){
				$newUser = array(
						"firstName"		=>	$_POST['firstname'],
						"lastName"		=>	$_POST['lastname'],
						"emailAddress"	=>	$_POST['emailaddress'],
						"phoneNumber"	=>	$_POST['phonenumber'],
						"password"		=>	$_POST['password']
						);
				//attempt to register
				$status = $dm->registerUser($newUser);
				if($status === true){
					//to do 
					redirectTo("login.php");
				}else{
					//to do
					$message = "<span class='text-danger'>".$status."</span>";
				}
			}else{
				$message = "<span class='text-danger'>Passwords do not match. Please check and try again.</span>";
			}

		}
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<title>Registration</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="grey">
	<div id="main_container">
		<div class="container" id="contact">
			<div class="row col-wrap">
				<div id="left_container" class="col col-md-3 col-sm-12">

				</div>
				<div id="right_container" class="col col-md-9 col-sm-12">
					<div class="row"><div class="col col-md-12"><h1>TrustBank Registration Form</h1></div>
					
					<div class="row">
					<div class="row">
						<div class="col-md-12">
							<p> <?php if(empty($message)){ echo "Fill in all the fields to complete registration successfully";} ?></p>
						</div>
						<div class="col-md-12">
							<p> <?php if(!empty($message)){ echo $message; }?></p>
						</div>
					</div>
					<form role="form" action="" method="post">
						<div class="row">
							<div class="col col-md-12">
								<div class="form-group left-inner-addon">
									<span class=""></span>
									<p class="col-md-3">First Name:</p><input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name" required>
							  	</div>
								<div class="form-group left-inner-addon">
									<span class=""></span>
									<p class="col-md-3">Last Name:</p><input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name" required>
								</div>
								<div class="form-group left-inner-addon">
									<span class=""></span>
									<p class="col-md-3">Password:</p><input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
							  	</div>
								<div class="form-group left-inner-addon">
									<span class=""></span>
									<p class="col-md-3">Confirm Password:</p><input name="confirmpassword" type="password" class="form-control" id="password2" placeholder="Confirm Password" required>
								</div>
								<div class="form-group left-inner-addon">
									<span class=""></span>
									<p class="col-md-3">Phone No.:</p><input name="phonenumber" type="number" class="form-control" id="password" placeholder="Phone Number" required>
							  	</div>
								<div class="form-group left-inner-addon">
									<span class=""></span>
									<p class="col-md-3">Email:</p><input name="emailaddress" type="email" class="form-control" id="email" placeholder="Email" required>
								</div>
							</div> 
							<div class="col-md-5">
									<button type="submit" name="btnregister" class="btn btn-primary">Submit Details</button>
									<button type="reset" class="btn btn-default float_r">Reset Fields</button>
								</div>
							
						</div> <!-- row -->
					</form>


                                             
				</div>
			</div>
