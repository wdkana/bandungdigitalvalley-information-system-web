<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="404 Page not found - Propeller Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Member Bandung Digital Valley</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<!-- Propeller css -->
<link rel="stylesheet" type="text/css" href="assets/css/propeller.min.css">

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">

</head>

<body class="body-custom">
	<div class="errorpage">
		<div class="wrapper">
			<div class="container">
				<header class="header-primary">
					<a href="index.php" rel="home"><img src="assets/img/BDVLOGO.png" alt="logo" class="logo" style="width: 150px; height: 150px;"></a>
				</header><!-- header-primary -->

				<div class="content-primary">
					<h1 class="title" style="color: #2ca8e0">Welcome to Bandung Digital Valley</h1>
					<p class="description" style="color: #2ca8e0">Jika anda belum mempunyai akun silahkan melakukan registrasi dengan meng-klik tombol di bawah ini.</p>
					<a href="register.php" class="btn btn-primary next" style="background-color:#2ca8e0; margin-right:20px">Register</a>
                	<a onclick="myFunction()">Login</a>
				</div><!-- content-primary -->
			</div><!-- container -->
		</div>
	</div>


<script>
function myFunction() {
    alert("Anda harus berada di jaringan lokal BDV untuk mengakses halaman Login.");
}
</script>


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

<!-- Scripts Ends -->

</body>
</html>
