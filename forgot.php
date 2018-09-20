<!DOCTYPE html>
<?php
//php script
include_once("function/controller_forgot.php");

 ?>
 <!doctype html>
 <html lang="">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="description" content="Login | Propeller - Admin Dashboard">
 <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
 <title>Forgot Password</title>
 <link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

 <!-- Google icon -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <!-- Bootstrap css -->
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

 <!-- Propeller css -->
 <link rel="stylesheet" type="text/css" href="assets/css/propeller.css">

 <!-- Propeller theme css-->
 <link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

 <!-- Propeller admin theme css-->
 <link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">

 </head>

 <body class="body-custom">
 <div class="logincard">
   	<div class="pmd-card card-default pmd-z-depth">
 		<div class="login-card">
      <form method="post">
 			<form>
 			  <div class="pmd-card-title card-header-border text-center">
 				<div class="loginlogo">
 					<img src="assets/img/BDVLOGO.png" alt="Logo" style="width: 150px; height: 140px;">
 				</div>
 				<h3>Forgot password?<br><span>Submit your email address and we'll send you a link to reset your password.</span></h3>
 			</div>
 			  <div class="pmd-card-body">
 					<div class="form-group pmd-textfield pmd-textfield-floating-label">
                         <label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
                         <div class="input-group">
                             <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
                             <input type="text" class="form-control" id="exampleInputAmount" name="emailForgot">
                         </div>
                     </div>
 				</div>
 			  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
          <button type="submit" name="submit" class="btn pmd-ripple-effect btn-primary btn-block">Submit</button>
 			  	<!-- <a href="index.html" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Submit</a> -->
 			  	<p class="redirection-link">Already registered? <a href="login.php" class="register-login">Sign In</a></p>
 			  </div>
 			</form>
 		</div>
 	</div>
 </div>

 <!-- Scripts Starts -->
 <script src="assets/js/jquery-1.12.2.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/propeller.min.js"></script>
 <script>
 	$(document).ready(function() {
 		var sPath=window.location.pathname;
 		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
 		$(".pmd-sidebar-nav").each(function(){
 			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
 			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
 			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
 			$(this).find("a[href='"+sPage+"']").addClass("active");
 		});
 	});
 </script>
 <!-- login page sections show hide -->
 <script type="text/javascript">
 	$(document).ready(function(){
 	 $('.app-list-icon li a').addClass("active");
 		$(".login-for").click(function(){
 			$('.login-card').hide()
 			$('.forgot-password-card').show();
 		});
 		$(".signin").click(function(){
 			$('.login-card').hide()
 			$('.forgot-password-card').show();
 		});
 	});
 </script>
 <script type="text/javascript">
 $(document).ready(function(){
  //  $(".login-register").click(function(){
  //    $('.login-card').hide()
  //    $('.forgot-password-card').hide();
  //    $('.register-card').hide();
  //  });

   $(".register-login").click(function(){
     $('.register-card').hide()
     $('.forgot-password-card').show();
     $('.login-card').hide();
   });

   $(".forgot-password").click(function(){
   	 $('.login-card').hide()
   	 $('.register-card').hide()
   	 $('.forgot-password-card').show();
   });
 });
 </script>

 <!-- Scripts Ends -->

 </body>
 </html>
