<?php
include("koneksi.php");
include("ses.php");
session_start();
$role = $_SESSION['role'];
if(!isset($_SESSION['role'])){
	?>
<script>document.location='login.php'</script>
<?php } 

 date_default_timezone_set("Asia/Bangkok");
    $time = new DateTime();
    $today = $time->format('Y-m-d');
?>

<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

<title>BDV Admin Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="../themes/images/favicon.ico">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="assets/css/propeller.min.css">
<!-- /build -->

<!-- Propeller date time picker css-->
<link rel="stylesheet" type="text/css" href="../components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="../components/datetimepicker/css/pmd-datetimepicker.css" />


<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">

</head>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

	<div class="container-fluid">
		<div class="pmd-navbar-right-icon pull-right navigation">
			<!-- Notifications -->
            <!-- <div class="dropdown notification icons pmd-dropdown">

				<a href="javascript:void(0)" title="Notification" class="dropdown-toggle pmd-ripple-effect"  data-toggle="dropdown" role="button" aria-expanded="true">
					<div data-badge="3" class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap">notifications_none</div>
				</a> -->

				<div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu">
					<!-- Card header -->
					<div class="pmd-card-title">
						<div class="media-body media-middle">
							<a href="notifications.html" class="pull-right">3 new notifications</a>
							<h3 class="pmd-card-title-text">Notifications</h3>
						</div>
					</div>

					<!-- Notifications list -->
					<ul class="list-group pmd-list-avatar pmd-card-list">
						<li class="list-group-item" style="display:none">
							<p class="notification-blank">
								<span class="dic dic-notifications-none"></span>
								<span>You don´t have any notifications</span>
							</p>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../themes/images/profile-1.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Prathit</span> posted a new challanegs</span>
									<span class="list-group-item-text">5 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../themes/images/profile-2.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Keel</span> Cloned 2 challenges.</span>
									<span class="list-group-item-text">15 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../themes/images/profile-3.png" data-holder-rendered="true">
									</span>
								</div>

								<div class="media-body">
									<span class="list-group-item-heading"><span>John</span> posted new collection.</span>
									<span class="list-group-item-text">25 Minutes ago</span>
								</div>
							</a>
						</li>
						<li class="list-group-item unread">
							<a href="javascript:void(0)">
								<div class="media-left">
									<span class="avatar-list-img40x40">
										<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../themes/images/profile-4.png" data-holder-rendered="true">
									</span>
								</div>
								<div class="media-body">
									<span class="list-group-item-heading"><span>Valerii</span> Shared 5 collection.</span>
									<span class="list-group-item-text">30 Minutes ago</span>
								</div>
							</a>
						</li>
					</ul><!-- End notifications list -->

				</div>


            </div> <!-- End notifications -->
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a>
		  <a href="index.php" class="navbar-brand">
		  	BDV Administrator
		  </a>
		</div>
	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">

		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left">
					<img src="../themes/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle">BDV Admin</div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
			<ul class="dropdown-menu">
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</li><!-- End user info -->

		<li>
			<a class="pmd-ripple-effect" href="index.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18"
	 xml:space="preserve">
<g>
	<path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
		 M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
</g>
</svg></i>
				<span class="media-body">Dashboard</span>
			</a>
		</li>

		<?php if($role == "basicuser"){?>


				<li>
		<a class="pmd-ripple-effect" href="data-wifi.php">
			<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
			<span class="media-body">Data WIFI</span>
			<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
		</a>

	</li>

		<li>
		<a class="pmd-ripple-effect" href="data-member.php">
			<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
			<span class="media-body">Data Member</span>
			<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
		</a>

	</li>

		<li>
			<a class="pmd-ripple-effect" href="data-absensi.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
				<span class="media-body">Data Absensi</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>

		</li>

	<?php }else{ ?>

			<li>
		<a class="pmd-ripple-effect" href="data-wifi.php">
			<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
			<span class="media-body">Data WIFI</span>
			<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
		</a>

	</li>

		<li>
		<a class="pmd-ripple-effect" href="data-member.php">
			<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
			<span class="media-body">Data Member</span>
			<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
		</a>

	</li>
	
			<li>
			<a class="pmd-ripple-effect" href="data-memberlama.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
				<span class="media-body">Data Member Lama</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>

		</li>
	
		<li>
			<a class="pmd-ripple-effect" href="data-absensi.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
				<span class="media-body">Data Absensi</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>

		</li>

		<?php
		if($role == "superuser"){ ?>
		<li>
			<a class="pmd-ripple-effect" href="data-privilege.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
				<span class="media-body">Data Privilege User</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>

		</li>
		<?php }} ?>
	

	</ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->

<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid">
		<div class="row" id="card-masonry">

		 <!-- Today's Site Activity -->
		 <!--Statistics-->
		 <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="pmd-card pmd-z-depth statistics-content">
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-green">
							<svg version="1.1" id="Layer_1" x="0px" y="0px" width="36px" height="26.25px" viewBox="279.765 332.782 36 26.25" enable-background="new 279.765 332.782 36 26.25" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M312.318,332.782c-1.928,0-3.485,1.558-3.485,3.485c0,0.89,0.334,1.706,0.89,2.336l-6.117,8.898
										c-0.371-0.112-0.742-0.186-1.148-0.186c-0.557,0-1.077,0.111-1.521,0.334l-4.82-4.932c0.296-0.519,0.445-1.075,0.445-1.706
										c0-1.927-1.557-3.485-3.485-3.485c-1.928,0-3.485,1.558-3.485,3.485c0,0.853,0.296,1.595,0.779,2.225l-6.155,8.972
										c-0.296-0.074-0.63-0.148-0.964-0.148c-1.928,0-3.485,1.558-3.485,3.486c0,1.927,1.557,3.485,3.485,3.485
										c1.928,0,3.485-1.558,3.485-3.485c0-0.89-0.333-1.706-0.889-2.336l6.118-8.935c0.333,0.111,0.742,0.185,1.112,0.185
										c0.593,0,1.187-0.148,1.669-0.445l4.782,4.931c-0.334,0.556-0.556,1.187-0.556,1.854c0,1.927,1.556,3.485,3.485,3.485
										c1.927,0,3.484-1.558,3.484-3.485c0-0.816-0.297-1.595-0.78-2.188l6.155-9.009c0.296,0.074,0.63,0.148,0.964,0.148
										c1.93,0,3.485-1.558,3.485-3.486C315.765,334.339,314.244,332.782,312.318,332.782z"/>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Statistics</h2>
					</div>
				</div>
				<div class="pmd-card-body statistics text-center">
					<ul class="list-group list-inline">
						<li>
							<div class="statistic-img-circle">
							<svg version="1.1" id="Layer_1" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:cc="http://creativecommons.org/ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="28.541px" viewBox="281.64 332.265 32 28.541" enable-background="new 281.64 332.265 32 28.541" xml:space="preserve">
								<g transform="translate(0,-952.36218)">
									<path fill="#40AC45" d="M297.64,1284.627c-4.044,0-7.352,3.307-7.352,7.351c0,4.045,3.307,7.352,7.352,7.352
										c4.045,0,7.352-3.307,7.352-7.352C304.991,1287.934,301.685,1284.627,297.64,1284.627z M297.64,1287.222
										c2.643,0,4.757,2.114,4.757,4.757s-2.114,4.757-4.757,4.757s-4.757-2.114-4.757-4.757S294.997,1287.222,297.64,1287.222z
										 M297.64,1300.195c-4.283,0-8.164,1.021-11.067,2.743s-4.933,4.255-4.933,7.203v1.73c0,0.716,0.581,1.297,1.297,1.297h29.406
										c0.716,0,1.297-0.581,1.297-1.297v-1.73c0-2.948-2.028-5.48-4.933-7.203C305.804,1301.215,301.923,1300.195,297.64,1300.195z
										 M297.64,1302.789c3.862,0,7.332,0.948,9.743,2.378c2.411,1.43,3.662,3.235,3.662,4.973v0.433h-26.811v-0.433
										c0-1.737,1.251-3.542,3.662-4.973C290.308,1303.737,293.778,1302.789,297.64,1302.789z"/>
								</g>
							</svg>
						</div>

						<?php $Qsum = mysql_query("SELECT * FROM tb_user");

						$sumdata = mysql_num_rows($Qsum);
							 ?>

							<div class="pmd-display2"><?php echo $sumdata ;?></div>
							<div class="source-semibold typo-fill-secondary">Member</div>
						</li>
						<li>
							<div class="statistic-img-circle">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="17.711px" viewBox="280.699 426.316 34 17.711" enable-background="new 280.699 426.316 34 17.711" xml:space="preserve">
									<g>
										<path fill="#40AC45" d="M297.696,444.027c-9.155,0-16.394-7.752-16.698-8.085c-0.397-0.434-0.397-1.106,0-1.54
											c0.304-0.333,7.543-8.086,16.698-8.086c9.156,0,16.402,7.753,16.706,8.086c0.397,0.434,0.397,1.106,0,1.54
											C314.09,436.275,306.852,444.027,297.696,444.027z M283.449,435.169c2.018,1.887,7.702,6.588,14.247,6.588
											c6.559,0,12.236-4.693,14.247-6.581c-2.018-1.888-7.702-6.581-14.247-6.581C291.137,428.588,285.46,433.281,283.449,435.169z"/>
										<path fill="#40AC45" d="M297.696,440.368c-2.864,0-5.2-2.336-5.2-5.199c0-2.864,2.336-5.2,5.2-5.2c0.629,0,1.135,0.506,1.135,1.136
											c0,0.629-0.506,1.135-1.135,1.135c-1.613,0-2.929,1.316-2.929,2.93c0,1.612,1.316,2.929,2.929,2.929s2.929-1.31,2.929-2.929
											c0-0.63,0.506-1.136,1.135-1.136c0.63,0,1.136,0.506,1.136,1.136C302.896,438.039,300.56,440.368,297.696,440.368z"/>
										<circle fill="#40AC45" cx="297.696" cy="435.024" r="1.685"/>
									</g>
								</svg>
							</div>

							<?php
	            $Qvisit = mysql_query("SELECT * FROM tb_absensi where tgl = '$today'");
	            // $totalvisit = mysql_num_rows($Qvisit);

	            $jml_today = 0;
	           
	            while($data = mysql_fetch_array($Qvisit)){
	              if($data['tgl']==$today)
	              {
	                $jml_today++;
	              }
	            }

	            // <!-- Kalkulasi info visited end-->
	            ?>

							<div class="pmd-display2"><?php echo $jml_today;?> </div>
							<div class="source-semibold typo-fill-secondary">Visits</div>
						</li>

				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end statistics-->

		 <!--Recent Posts-->
		 <div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="pmd-card pmd-z-depth recent-post">
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-red">
							<svg version="1.1" id="XMLID_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
								<path fill="#FFFFFF" d="M10,22h6L32,6l-6-6L10,16V22z M13,17L25,5l2,2L15,19h-2V17z M22,28H4V10h8l4-4H0v26h26V16l-4,4V28z"/>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Pengunjung Hari Ini</h2>
					</div>
					</div>
					<ul class="list-group pmd-card-list pmd-list-avatar">

						<?php

					      //paging initiate variable
							$id = 1;
							$start=0;
							$limit=10;

							if(isset($_GET['id']))
							{
								$id=$_GET['id'];
								$start=($id-1)*$limit;
							}
							$today = date("Y-m-d");
							$Qabsensi = mysql_query("SELECT a.nama, a.email, a.profesi, a.foto FROM tb_user a, tb_absensi b WHERE a.id_user = b.id AND b.tgl = '$today' LIMIT $start, $limit");
							$sumdata = mysql_num_rows($Qabsensi);
							if($sumdata == 0){
						?>
						<li class="list-group-item">
							<div class="media-left">
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading">Tidak ada pengunjung</h3>
								<span class="list-group-item-text"></span>
							</div>
							<div class="media-right post">
								<span class="post-time"></span>
							</div>
						</li>
						<?php
							}else{

							while ($data=mysql_fetch_array($Qabsensi))
							{
								$nama = $data['nama'];
								$email = $data['email'];
								$profesi = $data['profesi'];
								$foto = $data['foto'];
						 ?>
						<li class="list-group-item">
							<div class="media-left">
								<a href="javascript:void(0);" class="avatar-list-img" title="profile-link">
									<img alt="80x80" data-src="holder.js/80x80" class="img-responsive" src="data:image/jpeg;base64, <?php echo base64_encode( $foto )?>" alt="Belum Ada Foto" data-holder-rendered="true">
								</a>
							</div>
							<div class="media-body media-middle">
								<h3 class="list-group-item-heading"><?php echo $nama;?></h3>
								<span class="list-group-item-text"><?php echo $email;?></span>
							</div>
							<div class="media-right post">
								<span class="post-time"><strong><?php echo ucwords($profesi);?></strong></span>
							</div>
						</li>
						<?php }} ?>
					</ul>
							<!-- absensi page numbering -->
							<div class="pmd-card-footer">
							  <ul class="pmd-pagination pull-right list-inline">

								<?php
								$rows = mysql_num_rows(mysql_query("SELECT a.nama, a.email, a.profesi, a.foto FROM tb_user a, tb_mac_address b, tb_logs c WHERE a.id_user = b.id_user AND b.mac_address = c.mac_address AND c.tgl_akses = '$today'"));
								$total = ceil($rows/$limit);
								// if untuk next button
						        for($i=1;$i<=$total;$i++)
						        {
							        if($i==$id)
							        {
							        	echo "<strong> ".$i." </strong>";
							    	}
							        else
							        {
							        	echo " <a href='?id=".$i."'>".$i."</a> ";
							    	}
						        }

								if($id>1)
						        {
						            echo "<a href='?id=".($id-1)."' aria-label='Previous'><i class='material-icons md-dark pmd-sm'>keyboard_arrow_left</i></a>";
					            }
								if($id!=$total)
						          {
						            echo "<a href='?id=".($id+1)."' aria-label='Next'><i class='material-icons md-dark pmd-sm'>keyboard_arrow_right</i></a>";
					              }
								?>
							  </ul>
							</div>
							<!-- page numbering end -->
				<!-- <span class="btn-loader loader hidden">Loading...</span> -->
			</div>
		 </div><!-- end Recent Posts-->

		 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-title">
					<div class="media-left">
						<span class="service-icon img-circle bg-fill-orange">
							<svg x="0px" y="0px" width="45px" height="45px" viewBox="0 0 45 45" enable-background="new 0 0 45 45" xml:space="preserve">
								<g>
									<g>
										<path fill="#FFFFFF" d="M41.097,22.499c0,4.377-1.516,8.396-4.045,11.573l2.777,2.778C43.059,32.955,45,27.954,45,22.499
											s-1.941-10.455-5.171-14.35l-2.777,2.777C39.581,14.104,41.097,18.123,41.097,22.499z"/>
										<path fill="#FFFFFF" d="M3.904,22.499c0-4.376,1.516-8.396,4.045-11.572L5.172,8.149C1.942,12.044,0,17.044,0,22.499
											s1.942,10.456,5.171,14.352l2.778-2.778C5.419,30.896,3.904,26.876,3.904,22.499z"/>
										<path fill="#FFFFFF" d="M34.073,37.051c-3.177,2.529-7.196,4.045-11.573,4.045c-4.376,0-8.396-1.516-11.573-4.045l-2.777,2.777
											C12.044,43.058,17.045,45,22.5,45s10.456-1.942,14.352-5.172L34.073,37.051z"/>
										<path fill="#FFFFFF" d="M10.928,7.948c3.176-2.529,7.196-4.045,11.572-4.045c4.377,0,8.396,1.516,11.573,4.046l2.778-2.778
											C32.956,1.941,27.955,0,22.5,0C17.046,0,12.045,1.941,8.149,5.171L10.928,7.948z"/>
									</g>
									<g>
										<path fill="#FFFFFF" d="M34.452,19.893c-1.131,0-2.119,0.751-2.401,1.785h-2.352c-0.142-1.41-0.66-2.679-1.506-3.712l1.74-1.738
											c0.939,0.425,2.071,0.281,2.823-0.517c0.99-0.987,0.99-2.584,0-3.569c-0.988-0.987-2.588-0.987-3.576,0
											c-0.752,0.75-0.938,1.878-0.519,2.818l-1.222,1.41l-0.425,0.422c-0.988-0.8-2.211-1.315-3.574-1.456v-2.444
											c0.94-0.374,1.646-1.269,1.646-2.348c0-1.41-1.128-2.536-2.542-2.536c-1.411,0-2.54,1.126-2.54,2.536
											c0,1.079,0.706,2.02,1.647,2.348v2.444c-1.317,0.141-2.54,0.705-3.577,1.456l-1.74-1.738c0.142-0.33,0.235-0.658,0.235-1.034
											c0-1.407-1.129-2.535-2.541-2.535s-2.54,1.128-2.54,2.535c0,1.41,1.128,2.539,2.54,2.539c0.376,0,0.752-0.096,1.034-0.236
											l1.74,1.737c-0.799,1.032-1.362,2.3-1.505,3.712h-2.398c-0.376-0.938-1.271-1.643-2.354-1.643c-1.41,0-2.539,1.124-2.539,2.535
											c0,1.408,1.129,2.537,2.539,2.537c1.083,0,2.024-0.706,2.354-1.646h2.446c0.188,1.268,0.706,2.443,1.457,3.429l-1.74,1.739
											c-0.328-0.14-0.658-0.235-1.034-0.235c-1.412,0-2.54,1.129-2.54,2.536c0,1.409,1.128,2.538,2.54,2.538s2.541-1.129,2.541-2.538
											c0-0.374-0.094-0.75-0.235-1.033l1.74-1.739c0.987,0.801,2.211,1.317,3.577,1.46v0.655v1.739
											c-0.941,0.375-1.647,1.269-1.647,2.346c0,1.413,1.129,2.54,2.54,2.54c1.414,0,2.542-1.127,2.542-2.54
											c0-1.077-0.706-2.019-1.646-2.346v-1.739v-0.655c1.318-0.143,2.539-0.706,3.574-1.46l1.742,1.739
											c-0.141,0.33-0.236,0.659-0.236,1.033c0,1.409,1.13,2.538,2.542,2.538c1.318-0.14,2.446-1.268,2.446-2.633
											c0-1.408-1.128-2.535-2.541-2.535c-0.376,0-0.752,0.094-1.035,0.235l-1.74-1.738c0.752-0.985,1.271-2.162,1.458-3.429h2.493
											c0.377,0.892,1.271,1.502,2.308,1.502c1.41,0,2.541-1.127,2.541-2.536C36.993,21.021,35.862,19.893,34.452,19.893z M22.499,26.933
											c-2.452,0-4.44-1.984-4.44-4.433c0-0.474,0.076-0.926,0.214-1.354c0.558-1.793,2.235-3.082,4.188-3.082
											c0.151,0,0.3,0.005,0.447,0.021c2.262,0.208,4.033,2.105,4.033,4.415C26.941,24.948,24.951,26.933,22.499,26.933z"/>
									</g>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Infografis Gender</h2>
					</div>

					<?php
					$Qgender = mysql_query("SELECT gender FROM tb_user");
					$totalgender = mysql_num_rows($Qgender);
					$jml_pria = 0;
					$jml_wanita = 0;

					while($data = mysql_fetch_array($Qgender)){
						if($data['gender']=="pria")
						{
							$jml_pria++;
						}else
						{
							$jml_wanita++;
						}
					}

					$persen_pria = round(($jml_pria/$totalgender)*100);
					$persen_wanita = round(($jml_wanita/$totalgender)*100);
					$persen_total = 100;

					// <!-- Kalkulasi info gender end-->
					?>

				</div>
				<div class="pmd-card-body">
					<div class="total-sales">
						<!--circle chart-->
						<div class="chart circle-chart border-right pull-left">
							<div class="circle">
								<div id="gender-1" value="30"></div>
								<div class="source-semibold text-center chart-title">Pria</div>
							</div>
							<div class="circle">
								<div id="gender-2" value="20"></div>
								<div class="source-semibold text-center chart-title">Wanita</div>
							</div>
							<!-- <div class="circle">
								<div id="circles-3" value="30"></div>
								<div class="source-semibold text-center chart-title">Vistiors</div>
							</div> -->
						</div>
						<!--circle chart end-->

						<!-- chart start-->
						<div class="chart total-revenue pull-left">
							<table align="center">
								<!-- progressbar-->
								<tr>
									<td class="media-left">Pria</td>
									<td class="media-body">
										<div class="progress pria-progressbar">
											<div class="progress-bar"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $jml_pria?></td>
								</tr>
								<tr>
									<td class="media-left">Wanita</td>
									<td class="media-body">
										<div class="progress wanita-progressbar">
											<div class="progress-bar"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $jml_wanita?></td>
								</tr>
								<tr>

							</table>
						</div>
						<!--total cash chart end-->
					</div>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div> <!--end Today's Site Activity -->

		 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-title">
					<div class="media-left">
						<span class="service-icon img-circle" style="background-color:#2ab7ee;">
							<svg x="0px" y="0px" width="45px" height="45px" viewBox="0 0 45 45" enable-background="new 0 0 45 45" xml:space="preserve">
								<g>
									<g>
										<path fill="#FFFFFF" d="M41.097,22.499c0,4.377-1.516,8.396-4.045,11.573l2.777,2.778C43.059,32.955,45,27.954,45,22.499
											s-1.941-10.455-5.171-14.35l-2.777,2.777C39.581,14.104,41.097,18.123,41.097,22.499z"/>
										<path fill="#FFFFFF" d="M3.904,22.499c0-4.376,1.516-8.396,4.045-11.572L5.172,8.149C1.942,12.044,0,17.044,0,22.499
											s1.942,10.456,5.171,14.352l2.778-2.778C5.419,30.896,3.904,26.876,3.904,22.499z"/>
										<path fill="#FFFFFF" d="M34.073,37.051c-3.177,2.529-7.196,4.045-11.573,4.045c-4.376,0-8.396-1.516-11.573-4.045l-2.777,2.777
											C12.044,43.058,17.045,45,22.5,45s10.456-1.942,14.352-5.172L34.073,37.051z"/>
										<path fill="#FFFFFF" d="M10.928,7.948c3.176-2.529,7.196-4.045,11.572-4.045c4.377,0,8.396,1.516,11.573,4.046l2.778-2.778
											C32.956,1.941,27.955,0,22.5,0C17.046,0,12.045,1.941,8.149,5.171L10.928,7.948z"/>
									</g>
									<g>
										<path fill="#FFFFFF" d="M34.452,19.893c-1.131,0-2.119,0.751-2.401,1.785h-2.352c-0.142-1.41-0.66-2.679-1.506-3.712l1.74-1.738
											c0.939,0.425,2.071,0.281,2.823-0.517c0.99-0.987,0.99-2.584,0-3.569c-0.988-0.987-2.588-0.987-3.576,0
											c-0.752,0.75-0.938,1.878-0.519,2.818l-1.222,1.41l-0.425,0.422c-0.988-0.8-2.211-1.315-3.574-1.456v-2.444
											c0.94-0.374,1.646-1.269,1.646-2.348c0-1.41-1.128-2.536-2.542-2.536c-1.411,0-2.54,1.126-2.54,2.536
											c0,1.079,0.706,2.02,1.647,2.348v2.444c-1.317,0.141-2.54,0.705-3.577,1.456l-1.74-1.738c0.142-0.33,0.235-0.658,0.235-1.034
											c0-1.407-1.129-2.535-2.541-2.535s-2.54,1.128-2.54,2.535c0,1.41,1.128,2.539,2.54,2.539c0.376,0,0.752-0.096,1.034-0.236
											l1.74,1.737c-0.799,1.032-1.362,2.3-1.505,3.712h-2.398c-0.376-0.938-1.271-1.643-2.354-1.643c-1.41,0-2.539,1.124-2.539,2.535
											c0,1.408,1.129,2.537,2.539,2.537c1.083,0,2.024-0.706,2.354-1.646h2.446c0.188,1.268,0.706,2.443,1.457,3.429l-1.74,1.739
											c-0.328-0.14-0.658-0.235-1.034-0.235c-1.412,0-2.54,1.129-2.54,2.536c0,1.409,1.128,2.538,2.54,2.538s2.541-1.129,2.541-2.538
											c0-0.374-0.094-0.75-0.235-1.033l1.74-1.739c0.987,0.801,2.211,1.317,3.577,1.46v0.655v1.739
											c-0.941,0.375-1.647,1.269-1.647,2.346c0,1.413,1.129,2.54,2.54,2.54c1.414,0,2.542-1.127,2.542-2.54
											c0-1.077-0.706-2.019-1.646-2.346v-1.739v-0.655c1.318-0.143,2.539-0.706,3.574-1.46l1.742,1.739
											c-0.141,0.33-0.236,0.659-0.236,1.033c0,1.409,1.13,2.538,2.542,2.538c1.318-0.14,2.446-1.268,2.446-2.633
											c0-1.408-1.128-2.535-2.541-2.535c-0.376,0-0.752,0.094-1.035,0.235l-1.74-1.738c0.752-0.985,1.271-2.162,1.458-3.429h2.493
											c0.377,0.892,1.271,1.502,2.308,1.502c1.41,0,2.541-1.127,2.541-2.536C36.993,21.021,35.862,19.893,34.452,19.893z M22.499,26.933
											c-2.452,0-4.44-1.984-4.44-4.433c0-0.474,0.076-0.926,0.214-1.354c0.558-1.793,2.235-3.082,4.188-3.082
											c0.151,0,0.3,0.005,0.447,0.021c2.262,0.208,4.033,2.105,4.033,4.415C26.941,24.948,24.951,26.933,22.499,26.933z"/>
									</g>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Infografis Profesi</h2>
					</div>

					<?php
					$Qprofesi = mysql_query("SELECT profesi FROM tb_user");
					$totalprofesi = mysql_num_rows($Qprofesi);
					$jml_student = 0;
					$jml_startup = 0;
					$jml_freelance = 0;
					$jml_employee = 0;

					while($data = mysql_fetch_array($Qprofesi))
					{
						if($data['profesi']=="student"){$jml_student++;}
						elseif ($data['profesi']=="startup"){$jml_startup++;}
						elseif ($data['profesi']=="freelance"){$jml_freelance++;}
						elseif ($data['profesi']=="employee"){$jml_employee++;}
					}

					$persen_student = round(($jml_student/$totalprofesi)*100);
					$persen_startup = round(($jml_startup/$totalprofesi)*100);
					$persen_freelance = round(($jml_freelance/$totalprofesi)*100);
					$persen_employee = round(($jml_employee/$totalprofesi)*100);
					$persen_total = 100;

					// <!-- Kalkulasi info grafis gender end-->
					?>

				</div>
				<div class="pmd-card-body">
					<div class="total-sales">
						<!--circle chart-->
						<div class="chart circle-chart border-right pull-left">
							<div class="circle">
								<div id="profesi-1" value="30"></div>
								<div class="source-semibold text-center chart-title">Startup</div>
							</div>
							<div class="circle">
								<div id="profesi-2" value="20"></div>
								<div class="source-semibold text-center chart-title">Freelance</div>
							</div>
							<div class="circle">
								<div id="profesi-3" value="30"></div>
								<div class="source-semibold text-center chart-title">Students</div>
							</div>
							<div class="circle">
								<div id="profesi-4" value="30"></div>
								<div class="source-semibold text-center chart-title">Employee</div>
							</div>
						</div>
						<!--circle chart end-->

						<!-- chart start-->
						<div class="chart total-revenue pull-left">
							<table align="center">
								<!-- progressbar-->
								<tr>
									<td class="media-left">Startup</td>
									<td class="media-body">
										<div class="progress startup-progressbar">
											<div class="progress-bar" style="background-color:#2ab7ee;"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $jml_startup; ?></td>
								</tr>
								<tr>
									<td class="media-left">Freelance</td>
									<td class="media-body">
										<div class="progress freelance-progressbar">
											<div class="progress-bar" style="background-color:#2ab7ee;"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $jml_freelance; ?></td>
								</tr>
								<tr>
									<td class="media-left">Students</td>
									<td class="media-body">
										<div class="progress student-progressbar">
											<div class="progress-bar" style="background-color:#2ab7ee;"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $jml_student; ?></td>
								</tr>
									<tr>
									<td class="media-left">Employee</td>
									<td class="media-body">
										<div class="progress student-progressbar">
											<div class="progress-bar" style="background-color:#2ab7ee;"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $jml_employee; ?></td>
								</tr>


							</table>
						</div>
						<!--total cash chart end-->
					</div>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div> <!--end Today's Site Activity -->

		 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-title">
					<div class="media-left">
						<span class="service-icon img-circle" style="background-color:#ff0000">
							<svg x="0px" y="0px" width="45px" height="45px" viewBox="0 0 45 45" enable-background="new 0 0 45 45" xml:space="preserve">
								<g>
									<g>
										<path fill="#FFFFFF" d="M41.097,22.499c0,4.377-1.516,8.396-4.045,11.573l2.777,2.778C43.059,32.955,45,27.954,45,22.499
											s-1.941-10.455-5.171-14.35l-2.777,2.777C39.581,14.104,41.097,18.123,41.097,22.499z"/>
										<path fill="#FFFFFF" d="M3.904,22.499c0-4.376,1.516-8.396,4.045-11.572L5.172,8.149C1.942,12.044,0,17.044,0,22.499
											s1.942,10.456,5.171,14.352l2.778-2.778C5.419,30.896,3.904,26.876,3.904,22.499z"/>
										<path fill="#FFFFFF" d="M34.073,37.051c-3.177,2.529-7.196,4.045-11.573,4.045c-4.376,0-8.396-1.516-11.573-4.045l-2.777,2.777
											C12.044,43.058,17.045,45,22.5,45s10.456-1.942,14.352-5.172L34.073,37.051z"/>
										<path fill="#FFFFFF" d="M10.928,7.948c3.176-2.529,7.196-4.045,11.572-4.045c4.377,0,8.396,1.516,11.573,4.046l2.778-2.778
											C32.956,1.941,27.955,0,22.5,0C17.046,0,12.045,1.941,8.149,5.171L10.928,7.948z"/>
									</g>
									<g>
										<path fill="#FFFFFF" d="M34.452,19.893c-1.131,0-2.119,0.751-2.401,1.785h-2.352c-0.142-1.41-0.66-2.679-1.506-3.712l1.74-1.738
											c0.939,0.425,2.071,0.281,2.823-0.517c0.99-0.987,0.99-2.584,0-3.569c-0.988-0.987-2.588-0.987-3.576,0
											c-0.752,0.75-0.938,1.878-0.519,2.818l-1.222,1.41l-0.425,0.422c-0.988-0.8-2.211-1.315-3.574-1.456v-2.444
											c0.94-0.374,1.646-1.269,1.646-2.348c0-1.41-1.128-2.536-2.542-2.536c-1.411,0-2.54,1.126-2.54,2.536
											c0,1.079,0.706,2.02,1.647,2.348v2.444c-1.317,0.141-2.54,0.705-3.577,1.456l-1.74-1.738c0.142-0.33,0.235-0.658,0.235-1.034
											c0-1.407-1.129-2.535-2.541-2.535s-2.54,1.128-2.54,2.535c0,1.41,1.128,2.539,2.54,2.539c0.376,0,0.752-0.096,1.034-0.236
											l1.74,1.737c-0.799,1.032-1.362,2.3-1.505,3.712h-2.398c-0.376-0.938-1.271-1.643-2.354-1.643c-1.41,0-2.539,1.124-2.539,2.535
											c0,1.408,1.129,2.537,2.539,2.537c1.083,0,2.024-0.706,2.354-1.646h2.446c0.188,1.268,0.706,2.443,1.457,3.429l-1.74,1.739
											c-0.328-0.14-0.658-0.235-1.034-0.235c-1.412,0-2.54,1.129-2.54,2.536c0,1.409,1.128,2.538,2.54,2.538s2.541-1.129,2.541-2.538
											c0-0.374-0.094-0.75-0.235-1.033l1.74-1.739c0.987,0.801,2.211,1.317,3.577,1.46v0.655v1.739
											c-0.941,0.375-1.647,1.269-1.647,2.346c0,1.413,1.129,2.54,2.54,2.54c1.414,0,2.542-1.127,2.542-2.54
											c0-1.077-0.706-2.019-1.646-2.346v-1.739v-0.655c1.318-0.143,2.539-0.706,3.574-1.46l1.742,1.739
											c-0.141,0.33-0.236,0.659-0.236,1.033c0,1.409,1.13,2.538,2.542,2.538c1.318-0.14,2.446-1.268,2.446-2.633
											c0-1.408-1.128-2.535-2.541-2.535c-0.376,0-0.752,0.094-1.035,0.235l-1.74-1.738c0.752-0.985,1.271-2.162,1.458-3.429h2.493
											c0.377,0.892,1.271,1.502,2.308,1.502c1.41,0,2.541-1.127,2.541-2.536C36.993,21.021,35.862,19.893,34.452,19.893z M22.499,26.933
											c-2.452,0-4.44-1.984-4.44-4.433c0-0.474,0.076-0.926,0.214-1.354c0.558-1.793,2.235-3.082,4.188-3.082
											c0.151,0,0.3,0.005,0.447,0.021c2.262,0.208,4.033,2.105,4.033,4.415C26.941,24.948,24.951,26.933,22.499,26.933z"/>
									</g>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Infografis Usia</h2>
					</div>
				</div>

				<?php
				$Qusia = mysql_query("SELECT YEAR(CURRENT_TIMESTAMP) - YEAR(tgl_lahir) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(tgl_lahir, 5)) as age
FROM tb_user");
				$usia1822 = 0 ;
				$usia2326 = 0 ;
				$usia2735 = 0 ;
				$usia36keatas = 0 ;
				$totalpegawai = mysql_num_rows($Qusia);

				while($data = mysql_fetch_array($Qusia)){
					$usia = $data['age'];

					if(($usia >= 18 )&&($usia <= 22 ))
					{
						$usia1822++;
					}
					elseif (($usia >= 23 )&&($usia <= 26 )) {
						$usia2326++;
					}
					elseif (($usia >= 27 )&&($usia <= 35 )) {
						$usia2735++;
					}elseif ( $usia >= 36 ) {
						$usia36keatas++;
					}
				}

				$persen_usia1822 = round(($usia1822/$totalpegawai)*100);
				$persen_usia2326 = round(($usia2326/$totalpegawai)*100);
				$persen_usia2735 = round(($usia2735/$totalpegawai)*100);
				$persen_usia36keatas = round(($usia36keatas/$totalpegawai)*100);

				$persen_total = 100;

				// <!-- Kalkulasi info grafis usia end-->
				?>

				<div class="pmd-card-body">
					<div class="total-sales">
						<!--circle chart-->
						<div class="chart circle-chart border-right pull-left">
							<div class="circle">
								<div id="usia-1" value="30"></div>
								<div class="source-semibold text-center chart-title">18-22 Tahun</div>
							</div>
							<div class="circle">
								<div id="usia-2" value="20"></div>
								<div class="source-semibold text-center chart-title">23-26 Tahun</div>
							</div>
							<div class="circle">
								<div id="usia-3" value="30"></div>
								<div class="source-semibold text-center chart-title">27-36 Tahun</div>
							</div>
							<div class="circle">
								<div id="usia-4" value="30"></div>
								<div class="source-semibold text-center chart-title">>36 Tahun</div>
							</div>
						</div>
						<!--circle chart end-->

						<!-- chart start-->
						<div class="chart total-revenue pull-left">
							<table align="center">
								<!-- progressbar-->
								<tr>
									<td class="media-left">18-22 Tahun</td>
									<td class="media-body">
										<div class="progress 18-progressbar">
											<div class="progress-bar" style="background-color:#ff0000"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $usia1822; ?></td>
								</tr>
								<tr>
									<td class="media-left">23-26 Tahun</td>
									<td class="media-body">
										<div class="progress 23-progressbar">
											<div class="progress-bar" style="background-color:#ff0000"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $usia2326; ?></td>
								</tr>
								<tr>
									<td class="media-left">27-36 Tahun</td>
									<td class="media-body">
										<div class="progress 27-progressbar">
											<div class="progress-bar" style="background-color:#ff0000"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $usia2735; ?></td>
								</tr>
								<tr>
									<td class="media-left">>36 Tahun</td>
									<td class="media-body">
										<div class="progress 36-progressbar">
											<div class="progress-bar" style="background-color:#ff0000"></div>
										</div>
									</td>
									<td class="media-right"><?php echo $usia36keatas; ?></td>
								</tr>
								<tr>

							</table>
						</div>
						<!--total cash chart end-->
					</div>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div> <!--end Today's Site Activity -->


		 <!-- User details-->
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="pmd-card pmd-z-depth">
			 <div class="pmd-card-title">
				 <div class="media-left set-svg">
					 <span class="service-icon img-circle bg-fill-violet">
						 <svg  x="0px" y="0px" width="32px" height="30px" viewBox="0 0 32 30" enable-background="new 0 0 32 30" xml:space="preserve">
							 <g>
								 <path fill="#FFFFFF" d="M16.413,3.584l2.832,6.83l0.594,1.431l1.546,0.105l7.196,0.491L23,17.036l-1.227,1.01l0.394,1.539
									 l1.835,7.174l-6.187-3.846l-1.32-0.82l-1.32,0.82L8.99,26.758l1.834-7.173l0.394-1.539l-1.226-1.01l-5.579-4.595l7.194-0.491
									 l1.583-0.108l0.577-1.477L16.413,3.584 M16.395-0.053c-0.708,0-1.416,0.404-1.72,1.213l-3.238,8.296l-8.902,0.607
									 c-1.619,0.202-2.428,2.226-1.011,3.237l6.879,5.665l-2.225,8.701c-0.316,1.263,0.724,2.28,1.87,2.28
									 c0.322,0,0.651-0.08,0.962-0.258l7.486-4.653l7.486,4.653c0.311,0.178,0.641,0.258,0.962,0.258c1.146,0,2.187-1.018,1.871-2.28
									 l-2.226-8.701l6.88-5.665c1.416-1.012,0.606-3.036-1.012-3.237l-8.903-0.607l-3.439-8.296C17.811,0.352,17.103-0.053,16.395-0.053
									 L16.395-0.053z"/>
							 </g>
						 </svg>
					 </span>
				 </div>
				 <div class="media-body media-middle">
					 <h2 class="pmd-card-title-text typo-fill-secondary">Keahlian</h2>
				 </div>
			 </div>

			 <!-- Kalkulasi info keahlian -->
			 <?php
			 $Qkeahlian = mysql_query("SELECT bagian, keahlian FROM tb_user");
			 $totalkeahlian = mysql_num_rows($Qkeahlian);
			 $jml_hustler = 0;
			 $jml_hacker = 0;
			 $jml_hipster = 0;
			 $jml_other = 0;

			 while($data = mysql_fetch_array($Qkeahlian))
			 {
				 if($data['bagian']=="hustler"){$jml_hustler++;}
				 elseif ($data['bagian']=="hacker"){$jml_hacker++;}
				 elseif ($data['bagian']=="hipster"){$jml_hipster++;}
				 else{$jml_other++;}
			 }

			 $persen_hustler = round(($jml_hustler/$totalkeahlian)*100);
			 $persen_hacker = round(($jml_hacker/$totalkeahlian)*100);
			 $persen_hipster = round(($jml_hipster/$totalkeahlian)*100);
			 $persen_other = round(($jml_other/$totalkeahlian)*100);
			 $persen_total = 100;

			 // <!-- Kalkulasi info grafis keahlian end-->
			 ?>
			 
			 <div class="pmd-card-body text-center value-added">
				 <div class="row">

				 	 <div class="col-xs-6 value-added-section">
						 <div class="source-semibold typo-fill-secondary title">Hustler</div>
						 <div class="pmd-display2"><a href="javascript:void(0)"><?php echo $persen_hustler;?>%</a></div>
					 </div>
					  <div class="col-xs-6 value-added-section">
						 <div class="source-semibold typo-fill-secondary title">Hacker</div>
						 <div class="pmd-display2"><a href="javascript:void(0)"><?php echo $persen_hacker;?>%</a></div>
					 </div>
					  <div class="col-xs-6 value-added-section">
						 <div class="source-semibold typo-fill-secondary title">Hipster</div>
						 <div class="pmd-display2"><a href="passion_check.php?uiux=true"><?php echo $persen_hipster;?>%</a></div>
					 </div>
					  <div class="col-xs-6 value-added-section">
						 <div class="source-semibold typo-fill-secondary title">Other</div>
						 <div class="pmd-display2"><a href="javascript:void(0)"><?php echo $persen_other;?>%</a></div>
					 </div>
				 </div>
			 </div>
			 <span class="btn-loader loader hidden">Loading...</span>
		 </div>
		</div><!-- end User Details-->

	</div>
</div>

</div><!--end content area-->

<!-- Footer Starts -->
<!--footer start-->
<!-- <footer class="admin-footer">
 <div class="container-fluid">
 	<ul class="list-unstyled list-inline">
	 	<li>
			<span class="pmd-card-subtitle-text">Bandung Digital Valley &copy; <span class="auto-update-year"></span>. All Rights Reserved.</span>
		</li>
    </ul>
 </div>
</footer> -->
<!--footer end-->
<!-- Footer Ends -->

<!-- Scripts Starts -->
<script src="../assets/js/jquery-1.12.2.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
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
<script type="text/javascript">
(function() {
  "use strict";
  var toggles = document.querySelectorAll(".c-hamburger");
  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };
  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }

})();
</script>

<script src="../assets/js/propeller.min.js"></script>

<!-- Javascript for revenue progressbar animation effect-->
<script>
	function progress(percent, $element) {
		var progressBarWidth = percent * $element.width() / 50;
		$element.find('.progress-bar').animate({ width: progressBarWidth }, 500);
	}

	progress(<?php echo $jml_pria?>, $('.pria-progressbar'));
	progress(<?php echo $jml_wanita?>, $('.wanita-progressbar'));
	progress(<?php echo $jml_student; ?>, $('.student-progressbar'));
	progress(<?php echo $jml_freelance; ?>, $('.freelance-progressbar'));
	progress(<?php echo $jml_employee; ?>, $('.employee-progressbar'));
	progress(<?php echo $jml_startup; ?>, $('.startup-progressbar'));
	progress(<?php echo $usia1822; ?>, $('.18-progressbar'));
	progress(<?php echo $usia2326; ?>, $('.23-progressbar'));
	progress(<?php echo $usia2735; ?>, $('.27-progressbar'));
	progress(<?php echo $usia36keatas; ?>, $('.36-progressbar'));
</script>
<!-- Javascript for revenue progressbar animation effect-->


<!--circle chart-->



<script src="../themes/js/circles.min.js"></script>
<script>
  <!-- javascript for total sales chart-->
		var colors = [
			['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
		], circles = [];
			var child = document.getElementById('gender-1'),
			percentage = child.val;

			circles.push(Circles.create({
				id:         child.id,
				value:		<?php echo $persen_pria;?>,
				radius:     50,
				width:      7,
				colors:     colors[1],
 				textClass:           'gender-text',
  				styleText:           true
			}));

			var child = document.getElementById('gender-2'),
			percentage = child.val;

			circles.push(Circles.create({
				id:         child.id,
				value:		<?php echo $persen_wanita;?>,
				radius:     50,
				width:      7,
				colors:     colors[1],
 				textClass:           'gender-text',
  				styleText:           true
			}));

  <!-- javascript for total sales chart-->
	</script>

	<script>
	  <!-- javascript for total sales chart-->
			var colors = [
				['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
			], circles = [];
				var child = document.getElementById('profesi-1'),
				percentage = child.val;

				circles.push(Circles.create({
					id:         child.id,
					value:		<?php echo $persen_startup; ?>,
					radius:     50,
					width:      7,
					colors:     colors[3],
	 				textClass:           'profesi-text',
	  				styleText:           true
				}));


					var child = document.getElementById('profesi-2'),
					percentage = child.val;

					circles.push(Circles.create({
						id:         child.id,
						value:		<?php echo $persen_freelance; ?>,
						radius:     50,
						width:      7,
						colors:     colors[3],
		 				textClass:           'profesi-text',
		  				styleText:           true
					}));


						var child = document.getElementById('profesi-3'),
						percentage = child.val;

						circles.push(Circles.create({
							id:         child.id,
							value:		<?php echo $persen_student; ?>,
							radius:     50,
							width:      7,
							colors:     colors[3],
			 				textClass:           'profesi-text',
			  				styleText:           true
						}));

							var child = document.getElementById('profesi-4'),
						percentage = child.val;

						circles.push(Circles.create({
							id:         child.id,
							value:		<?php echo $persen_employee; ?>,
							radius:     50,
							width:      7,
							colors:     colors[3],
			 				textClass:           'profesi-text',
			  				styleText:           true
						}));


	  <!-- javascript for total sales chart-->
		</script>

		<script>
		  <!-- javascript for total sales chart-->
				var colors = [
					['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
				], circles = [];
					var child = document.getElementById('usia-1'),
					percentage = child.val;

					circles.push(Circles.create({
						id:         child.id,
						value:		<?php echo $persen_usia1822; ?>,
						radius:     50,
						width:      7,
						colors:     colors[5],
		 				textClass:           'usia-text',
		  				styleText:           true
					}));


						var child = document.getElementById('usia-2'),
						percentage = child.val;

						circles.push(Circles.create({
							id:         child.id,
							value:		<?php echo $persen_usia2326; ?>,
							radius:     50,
							width:      7,
							colors:     colors[5],
			 				textClass:           'usia-text',
			  				styleText:           true
						}));


							var child = document.getElementById('usia-3'),
							percentage = child.val;

							circles.push(Circles.create({
								id:         child.id,
								value:		<?php echo $persen_usia2735; ?>,
								radius:     50,
								width:      7,
								colors:     colors[5],
				 				textClass:           'usia-text',
				  				styleText:           true
							}));


								var child = document.getElementById('usia-4'),
								percentage = child.val;

								circles.push(Circles.create({
									id:         child.id,
									value:		<?php echo $persen_usia36keatas; ?>,
									radius:     50,
									width:      7,
									colors:     colors[5],
					 				textClass:           'usia-text',
					  				styleText:           true
								}));

		  <!-- javascript for total sales chart-->
			</script>

<!--staked column chart for payment-->
<script src="../themes/js/highcharts.js"></script>
<script src="../themes/js/highcharts-more.js"></script>

<!-- Payment chart js-->
<script>
$(function paymentChart(){
    $('#payment-chart').highcharts({
        chart: {
            type: 'column'
        },
		colors: "#00719d,#2ab7ee".split(","),
        title: {
            text: 'Last 10 days comparison',
			style: {
                color: "#4d575d",
                fontSize: "14px",
            },
        },
        xAxis: {
            categories: ['9-7', '10-7', '11-7', '12-7', '13-7', '14-7', '15-7', '16-7', '17-7', '18-7']
        },
        yAxis: {
            min: 0,
			title: {
					text: "Amount"
			},
			stackLabels: {
					enabled: false,
					style: {
						fontWeight: 'bold',
						color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
					}
				}
			},
        legend: {
            enabled: !0,
            align: "right",
            layout: "horizontal",
            labelFormatter: function() {
                return this.name
            },
            borderColor: false,
            borderRadius: 0,
            navigation: {
                activeColor: "#274b6d",
                inactiveColor: "#CCC"
            },
            shadow: false,
            itemStyle: {
                color: "#888888",
                fontSize: "12px",
                fontWeight: "normal"
            },
            itemHoverStyle: {
                color: "#000"
            },
            itemHiddenStyle: {
                color: "#CCC"
            },
            itemCheckboxStyle: {
                position: "absolute"
            },
			symbolHeight: 10,
			symbolWidth: 10,
            symbolPadding: 5,
            verticalAlign: "bottom",
            x: 0,
            y: 0,
            title: {
                style: {
                    fontWeight: "normal"
                }
            }
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}',
			backgroundColor: '#ffffff',
			borderColor: '#f0f0f0',
			shadow: true
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: false,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
		 credits: {
            enabled: false,
        },
        series: [{
            name: 'Card',
            data: [25000, 50000, 75000, 75000, 60000, 70000, 10000, 2500, 5000, 25000]
        }, {
            name: 'Wallet',
            data: [75000, 50000, 25000, 25000, 30000, 30000, 90000, 25000, 3000, 50000]
        }]

    });
});
</script>

<!--staked column chart for sms details-->
<script>
$( function smsChart() {
    $('#sms-chart').highcharts({
        chart: {
            zoomType: 'none'
        },
		colors: "#e75c5c,#9159b8".split(","),
         title: {
            text: 'Last 7 days comparison',
			style: {
                color: "#4d575d",
                fontSize: "14px",
            },
        },
        xAxis: [{
            categories: ['3-7', '4-7', '5-7', '6-7', '7-7', '8-7', '9-7']
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'User Count',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Total Days',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
		legend: {
            enabled: !0,
            align: "right",
			layout: "horizontal",
            labelFormatter: function() {
                return this.name
            },
            borderColor: false,
            borderRadius: 0,
            navigation: {
                activeColor: "#274b6d",
                inactiveColor: "#CCC"
            },
            shadow: false,
            itemStyle: {
                color: "#888888",
                fontSize: "12px",
                fontWeight: "normal"
            },
            itemHoverStyle: {
                color: "#000"
            },
            itemHiddenStyle: {
                color: "#CCC"
            },
            itemCheckboxStyle: {
                position: "absolute",
                width: "12px",
                height: "12px"
            },
			symbolHeight: 10,
			symbolWidth: 10,
            symbolPadding: 5,
            verticalAlign: "bottom",
            x: 0,
            y: 0,
            title: {
                style: {
                    fontWeight: "normal"
                }
            }
        },

        tooltip: {
            shared: true,
			backgroundColor: '#ffffff',
			borderColor: '#f0f0f0',
			shadow: true
        },
		 credits: {
            enabled: false,
        },

        series: [{
            name: 'Total Days',
            type: 'spline',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6],
            tooltip: {
                pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: '
            }
        }, {
            name: 'Total Days error',
            type: 'errorbar',
            yAxis: 1,
            data: [[48, 51], [68, 73], [92, 110], [128, 136], [140, 150], [171, 179], [135, 143]],
            tooltip: {
                pointFormat: '(error range: {point.low}-{point.high})<br/>'
            }
        }, {
            name: 'User Count',
            type: 'column',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2],
            tooltip: {
                pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: <b>{point.y:.1f}</b> '
            }
        }, {
            name: 'User Count error',
            type: 'errorbar',
            data: [[6, 8], [5.9, 7.6], [9.4, 10.4], [14.1, 15.9], [18.0, 20.1], [21.0, 24.0], [23.2, 25.3]],
            tooltip: {
                pointFormat: '(error range: {point.low}-{point.high})<br/>'
            }
        }]
    });
});
</script>
<!-- Scripts Ends -->
<!-- Javascript for Datepicker -->
<script type="text/javascript" language="javascript" src="../components/datetimepicker/js/moment-with-locales.js"></script>
<script type="text/javascript" language="javascript" src="../components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script>
	// Linked date and time picker
	// start date date and time picker
	$('#datepicker-default').datetimepicker();
	$(".auto-update-year").html(new Date().getFullYear());
</script>

</script>

</body>
</html>
