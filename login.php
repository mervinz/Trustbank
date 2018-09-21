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
				redirectTo("confirmcode/");
			}else{
				//to do
				$message = "<span class='text-danger'>".$status."</span>";
			}
		}
	}
?>
<head>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<title>Login</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="templatemo_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/login.css">
    <script type="text/css" src="../js/login.js"></script>
</head>
<body bgcolor="grey"">
<div class="container">
    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <section class="login-form">
                <p>Login with your Email to reveive One-Time Password </p>
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" action="#" method="post">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group left-inner-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <input name="emailaddress" type="email" class="form-control" id="username" placeholder="Your Registered Email" required="">
                                    </div>
                                    <div class="form-group left-inner-addon">
                                        <span class=""></span>
                                        <input name="password" type="password" class="form-control" id="password" placeholder="Password" required="">
                                    </div>


                                    <button name="btnlogin" type="submit" class="btn btn-primary">Login</button>

                                    <button type="reset" class="btn btn-default float_r">Reset</button>
                                    <li>Not registered? <a href="registration.php">Register here</a></li>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="form-links">
                    <a href="#">www.trustbank.com</a>
                </div>
            </section>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<!--<div id="main_container">
    <div class="container" id="contact">
        <div class="row col-wrap">

            <div id="right_container" class="col col-md-9 col-sm-12">
                <div class="row">
                <div class="col col-md-12">
                <h1>Login with your Email to reveive One-Time Password (OTP)</h1><h4>Access control in Web based Application is our priority </h4></div></div>
                <div class="row">
                <div class="col col-md-12"><h3>Login</h3></div></div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Provide login details to login </p>
                    </div>
                    <div class="col-md-12">
                        <p>
                        </p>
                    </div>
                </div>

                <form role="form" action="#" method="post">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group left-inner-addon">
                                <span class="glyphicon glyphicon-user"></span>
                                <input name="emailaddress" type="email" class="form-control" id="username" placeholder="Your Registered Email" required="">
                            </div>
                            <div class="form-group left-inner-addon">
                                <span class=""></span>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required="">
                            </div>


                            <button name="btnlogin" type="submit" class="btn btn-primary">Login</button>

                            <button type="reset" class="btn btn-default float_r">Reset</button>
                            <li>Not registered? <a href="registration.php">Register here</a></li>
                        </div>
                    </div>
                </form></div> <!-- row -->



        </div>
    </div>

</div>-->
