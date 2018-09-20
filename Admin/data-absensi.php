<?php
include("koneksi.php");
include("ses.php");
session_start();
$role_session = $_SESSION['role'];
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

				<?php if($role_session == "basicuser"){?>

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
		if($role_session == "superuser"){ ?>
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
		<?php } }?>
			
		

	</ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->

<!--content area start-->
<div id="content" class="pmd-content content-area dashboard">
<!--tab start-->
    <div class="container-fluid full-width-container value-added-detail-page">
			<div class="table-title-top-action">
        <div class="range-calendar" style=" height:40px;">
          <div class="form-group pmd-textfield">
            <div class="input-group">
            <form method="GET">
            <div class="pmd-textfield pull-left">
              <input name="searchTanggal" id="datetimepicker-date" type="text" class="form-control datepicker" placeholder="Choose date" required="">
            </div>
              <div class="input-group-addon hidden-xs">
              <button type="submit">
                <svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                  <g>
                  <path fill="#010101" d="M-8.736-20.232c0,2.88-2.304,5.184-5.184,5.184s-5.184-2.304-5.184-5.184v-13.824
                  c0-2.88,2.304-5.184,5.184-5.184s5.184,2.304,5.184,5.184V-20.232z M41.952-34.056c0-2.88-2.304-5.184-5.185-5.184
                  c-2.879,0-5.184,2.304-5.184,5.184v13.824c0,2.88,2.305,5.184,5.184,5.184c2.881,0,5.185-2.304,5.185-5.184V-34.056z M63.84-20.923
                  V58.68c0,3.111-2.534,5.645-5.76,5.645h-92.16c-3.226,0-5.76-2.533-5.76-5.645v-79.603c0-3.11,2.534-5.645,5.76-5.645h11.52v6.336
                  c0,4.954,3.687,8.87,8.64,8.87s8.64-4.032,8.64-8.87v-6.336h33.408v6.336c0,4.954,3.687,8.87,8.64,8.87
                  c4.954,0,8.641-4.032,8.641-8.87v-6.336h12.557C61.075-26.568,63.84-24.034,63.84-20.923z M54.624-5.192
                  c0-1.152-1.036-2.189-2.304-2.189h-80.64c-1.268,0-2.304,0.921-2.304,2.189v58.227c0,1.152,1.037,2.189,2.304,2.189h80.64
                  c1.268,0,2.304-0.922,2.304-2.189V-5.192z"/>
                  </g>
                  <g>
                  <path fill="#A5A4A4" d="M7.2,4.414C7.2,5.08,6.667,5.613,6,5.613S4.8,5.08,4.8,4.414v-3.2c0-0.667,0.534-1.2,1.2-1.2
                  s1.2,0.533,1.2,1.2V4.414z M18.934,1.214c0-0.667-0.533-1.2-1.2-1.2s-1.2,0.533-1.2,1.2v3.2c0,0.666,0.533,1.199,1.2,1.199
                  s1.2-0.533,1.2-1.199V1.214z M24,4.254V22.68c0,0.721-0.587,1.307-1.333,1.307H1.333C0.586,23.986,0,23.4,0,22.68V4.254
                  c0-0.721,0.586-1.307,1.333-1.307H4v1.467c0,1.146,0.854,2.053,2,2.053s2-0.934,2-2.053V2.947h7.733v1.467
                  c0,1.146,0.854,2.053,2,2.053s2-0.934,2-2.053V2.947h2.906C23.36,2.947,24,3.533,24,4.254z M21.867,7.896
                  c0-0.268-0.24-0.507-0.534-0.507H2.667c-0.293,0-0.533,0.213-0.533,0.507v13.478c0,0.268,0.24,0.507,0.533,0.507h18.667
                  c0.294,0,0.534-0.213,0.534-0.507V7.896z"/>
                  </g>
                </svg>
               </button>
              </div>
            </form>
            </div>
          </div>
          <span class="selected-date typo-fill-secondary"></span>
        </div><!— calendar end--></div>
			<!-- Title -->
			<h1 class="section-title" id="services">
				<span>Data Absensi </span>
			</h1><!-- End Title -->
			<!--breadcrum start-->
			<ol class="breadcrumb text-left">
			  <li><a href="index.php">Dashboard</a></li>
			  <li class="active">Data Absensi </li>
			</ol><!--breadcrum end-->
		</div>

		<form class="form-horizontal" method="POST" action="">
					
						<div class="col-lg-5 custom-col-5">
							<label class="control-label col-sm-12" for="id"><span class="badge badge-pill badge-info"><i>Angka 0 Di Awal ID tidak perlu di ketikan</i></span></label>

							<h3 class="heading">Member ID</h3>
							<div class="row">


										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3" for="id">BDV</label>
										  <div class="col-sm-9">
											<input type="text" name="memberid" class="form-control empty" placeholder="123xx">
										  </div>
										</div>


							</div>
						</div>

					<div class="row">
							<div class="col-sm-12" style="margin-left:35px">
							<button type="submit" name="submit" class="btn btn-primary pmd-ripple-effect">Absen Masuk</button>
							</div>
						</div>
          	</form>
		<?php

 date_default_timezone_set("Asia/Bangkok");
    $time = new DateTime();
    $tgl = $time->format('Y-m-d');
          	
    if(isset($_POST['submit'])){


    $jam_masuk = $time->format('h:i:s');
    
    $id = $_POST['memberid'];
    $sql_validation = "SELECT * FROM tb_user WHERE id_user ='$id'";
    $validating = mysql_num_rows(mysql_query($sql_validation));
    if($validating == 0){
    	?>
	<script>alert('USER INVALID');</script>
	<script>window.location.replace("data-absensi.php");</script>
<?php
    }
    else{
    $sql = "INSERT INTO `tb_absensi` (`no`, `id`, `tgl`, `jam_masuk`, `jam_keluar`) VALUES (NULL, '$id', '$tgl', '$jam_masuk', NULL)";
    $query = mysql_query($sql);

    if($query){
	header('location:data-absensi.php');
    }else{

	echo "<script>alert('kesalahan data');</script>";
    }
}
}
if(isset($_GET['member_id']) && $_GET['tgl']==$tgl){

$getid = $_GET['member_id'];
$tglurl = $_GET['tgl'];

    $tgls = $time->format('Y-m-d');
    $jam_keluars = $time->format('h:i:s');

$sql = "UPDATE `tb_absensi` SET `jam_keluar` = '$jam_keluars' WHERE `tb_absensi`.`id` = '$getid' AND `tb_absensi`.`tgl` = '$tglurl' ";
$query = mysql_query($sql);
?>
	<script>alert('Sukses, absensi member selesai');</script>
	<script>window.location.replace("data-absensi.php");</script>
<?php
}
?>



		<!-- Table -->
		<div class="table-responsive pmd-card pmd-z-depth">
			<table class="table table-mc-red pmd-table">
				<thead>
					<tr>
						<th>Foto</th>
						<th>Nama</th>
						<th>Profesi</th>
						<th>Tanggal Kunjungan</th>
						<th>Jam Kunjungan</th>
						<th>Jam Keluar</th>
					</tr>
				</thead>

				<tbody>
				</tr>
					<?php

					//paging initiate variable
					$id = 1;
					$start=0;
					$limit=10;

					if(isset($_GET['searchTanggal']))
					{
					// show data search by query
					// LIMIT query membatasi data yang ditampilkan
						$searchTanggal = $_GET['searchTanggal'];

						$query = mysql_query("SELECT a.id_user, a.nama, a.email, a.profesi, a.foto, b.tgl, b.jam_masuk, b.jam_keluar FROM tb_user a, tb_absensi b WHERE a.id_user = b.id AND b.tgl LIKE '$searchTanggal' LIMIT $start, $limit");

					//Qsum query mencari jumlah data
						$Qsum = mysql_query("SELECT a.id_user, a.nama, a.email, a.profesi, a.foto, b.tgl, b.jam_masuk, b.jam_keluar FROM tb_user a, tb_absensi b WHERE a.id_user = b.id AND b.tgl LIKE '$searchTanggal'");
						$sumdataSearch = mysql_num_rows($query);
					}

					else
					{
					// if variable id for paging
						if(isset($_GET['id']))
						{
							$id=$_GET['id'];
							$start=($id-1)*$limit;
						}
					// show all data query
					// LIMIT query membatasi data yang ditampilkan
						$query = mysql_query("SELECT a.id_user, a.nama, a.email, a.profesi, a.foto, b.tgl, b.jam_masuk, b.jam_keluar FROM tb_user a, tb_absensi b WHERE a.id_user = b.id LIMIT $start, $limit");

					//Qsum query mencari jumlah data
						$Qsum = mysql_query("SELECT a.id_user, a.nama, a.email, a.profesi, a.foto, b.tgl, b.jam_masuk, b.jam_keluar FROM tb_user a, tb_absensi b WHERE a.id_user = b.id");
					}

						$sumdataSearch = mysql_num_rows($Qsum);
							while ($data=mysql_fetch_array($query))
							{
								$ids = $data['id_user'];
								$foto = $data['foto'];
								$name = $data['nama'];
								$profesi = $data['profesi'];
								$tgl_akses = $data['tgl'];
								$jam_akses = $data['jam_masuk'];
								$jam_keluar = $data['jam_keluar'];
					?>
					<tr>
						<td data-title="Month"><a href="javascript:void(0);" class="avatar-list-img" title="profile-link"><img alt="80x80" data-src="holder.js/80x80" class="img-responsive" src="data:image/jpeg;base64, <?php echo base64_encode( $foto )?>" alt="Belum Ada Foto" data-holder-rendered="true"></a></td>
						<td data-title="Nama"><?php echo $name;?></td>
						<td data-title="Browser Name"><?php echo ucwords($profesi);?></td>
						<td data-title="date"><?php echo $tgl_akses;?></td>
						<td data-title="date"><?php echo $jam_akses;?></td>
						<td data-title="date">							<?php if($jam_keluar==""){
								?>
								<a href="?member_id=<?php echo $ids;?>&tgl=<?php echo $tgl;?>" class="pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">Absen Keluar</a>
								<?php 
							}else{?>
							<?php echo $jam_keluar; } ?>
							
</td>
					</tr>
							<?php }
					if($sumdataSearch == 0)
						{
							?>
					<tr>
						<td colspan="5"> Data tidak ditemukan </td>
					</tr>
					<?php } ?>
			</tbody>
		</table>

		</div>

		<?php
	      // if isset pada page numbering berguna agar page number tetap muncul pada saat fungsi search dijalankan
	      if(isset($_GET['searchdata']))
		      {
		        $searchby = $_GET['searchby'];
		        $searchdata = $_GET['searchdata'];

		        $rows=mysql_num_rows(mysql_query("SELECT a.nama, a.email, a.profesi, a.foto, b.tgl, b.jam_masuk, b.jam_keluar FROM tb_user a, tb_absensi b WHERE a.id_user = b.id AND b.tgl = LIKE '%$searchdata%'"));
		      }else
		      {
		        $rows=mysql_num_rows(mysql_query("SELECT a.nama, a.email, a.profesi, a.foto, b.tgl, b.jam_masuk, b.jam_keluar FROM tb_user a, tb_absensi b WHERE a.id_user = b.id"));
		      }
	          $total=ceil($rows/$limit);

	    ?>

		<div class="pmd-card-footer">
		  <ul class="pmd-pagination pull-right list-inline">
			 <?php
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

		<div>
			<div class="pull-right table-title-top-action" style="margin:0 auto">
				<a href="export_data.php?absensi" class="btn btn-primary pmd-btn-raised add-btn pmd-ripple-effect pull-left">Export Data Absensi</a>
			</div>
		</div>
</div>
<!--tab start-->
<!--end content area-->

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
		var progressBarWidth = percent * $element.width() / 100;
		$element.find('.progress-bar').animate({ width: progressBarWidth }, 500);
	}

	progress(50, $('.cash-progressbar'));
	progress(30, $('.card-progressbar'));
	progress(60, $('.wallet-progressbar'));
	progress(40, $('.credit-progressbar'));
	progress(10, $('.other-progressbar'));
</script>
<!-- Javascript for revenue progressbar animation effect-->


<!--circle chart-->
<script src="../themes/js/circles.min.js"></script>
<script>
  <!-- javascript for total sales chart-->
		var colors = [
			['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
		], circles = [];
		for (var i = 1; i <= 3; i++) {
			var child = document.getElementById('gender-' + i),
			percentage = child.val;

			circles.push(Circles.create({
				id:         child.id,
				value:		percentage,
				radius:     50,
				width:      7,
				colors:     colors[i - 1],
 				textClass:           'gender-text',
  				styleText:           true
			}));
		}
  <!-- javascript for total sales chart-->
	</script>

	<script>
	  <!-- javascript for total sales chart-->
			var colors = [
				['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
			], circles = [];
			for (var i = 1; i <= 3; i++) {
				var child = document.getElementById('profesi-' + i),
				percentage = child.val;

				circles.push(Circles.create({
					id:         child.id,
					value:		percentage,
					radius:     50,
					width:      7,
					colors:     colors[i - 1],
	 				textClass:           'profesi-text',
	  				styleText:           true
				}));
			}
	  <!-- javascript for total sales chart-->
		</script>

		<script>
		  <!-- javascript for total sales chart-->
				var colors = [
					['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#f79332'], ['#dfe3e7', '#2ab7ee'], ['#dfe3e7', '#00719d']
				], circles = [];
				for (var i = 1; i <= 4; i++) {
					var child = document.getElementById('usia-' + i),
					percentage = child.val;

					circles.push(Circles.create({
						id:         child.id,
						value:		percentage,
						radius:     50,
						width:      7,
						colors:     colors[i - 1],
		 				textClass:           'usia-text',
		  				styleText:           true
					}));
				}
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
	$('#datetimepicker-date').datetimepicker({
		 format: 'YYYY-MM-DD'
	 });
</script>

</script>

</body>
</html>
