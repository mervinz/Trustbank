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
<html>
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>Login</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="grey" class="page-wrap">
<div id="main_container">
    <div class="container" id="contact">
        <div class="row col-wrap">
            <div class="col-md-3 col-sm-12">

            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</div>
</body>
</html>