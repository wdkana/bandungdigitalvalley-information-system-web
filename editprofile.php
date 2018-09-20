<?php


session_start();

include_once('Admin/koneksi.php');

if(!isset($_SESSION['emailLogin'])){
    header('Location: login.php');
}



$emailSession = $_SESSION['emailLogin'];
$query = "SELECT * FROM tb_user WHERE email ='$emailSession'";
$result = mysql_query($query);
$data = mysql_fetch_array($result);

$nama = $data['nama'];
$id = $data['id_user'];
$profesi = $data['profesi'];
$perusahaan = $data['perusahaan'];
$keahlian = $data['keahlian'];
$kota = $data['kota'];
$nohp = $data['no_hp'];
$tgllhr= $data['tgl_lahir'];
$bagian = $data['bagian'];
$gender = $data['gender'];
$instagram = $data ['instagram'];
$linkedin = $data ['linkedln'];
$facebook = $data ['facebook'];
$foto= $data['foto'];




?>


<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Profile | Propeller - Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Profile | Edit Profile</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.min.css">

<!-- Propeller css -->
<link rel="stylesheet" type="text/css" href="Admin/assets/css/propeller.min.css">

<link rel="stylesheet" type="text/css" href="components/file-upload/css/upload-file.css">
<link rel="stylesheet" type="text/css" href="components/file-upload/css/image-upload.css">

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="Admin/themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="Admin/themes/css/propeller-admin.css">

</head>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<br>
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth" >
<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<!-- <a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a> -->
      <a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a>
      <a class="navbar-brand">
		    BDV User
		  </a>
		</div>
  </div>
</nav><!--End Nav bar -->
<!-- Header Ends -->
<<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">

		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left" >
								<?php
       								//if else jika ada user yang belum upload foto
						       if(empty($foto)){
						       ?>
						        <img  width="50px" height="50px" src="themes/images/upload.jpg" alt="Kosong">
						       <?php
						       }else{
						       ?>
						        <img width="50px" height="50px" border:"10px" src="data:image/jpeg;base64, <?php echo base64_encode( $foto )?>" alt="image error">
						       <?php
						       }
						       ?>
					<!-- <img class="avatar" width="50px" height="50px" src="data:image/jpeg;base64, <?php echo base64_encode( $foto )?>" alt="Belum Ada Foto" > -->
				</div>
				<div class="media-body media-middle"><?php echo $nama;?></div>
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
				<span class="media-body">User Dashboard</span>
			</a>
		</li>

				<li>
      <a class="pmd-ripple-effect" href="editprofile.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="18.001px" viewBox="0 0 18 18.001" enable-background="new 0 0 18 18.001" xml:space="preserve">
<path fill="#C9C8C8" d="M6.188,0.001C5.232,0.001,4.5,0.732,4.5,1.688c0,0.394,0.166,0.739,0.334,1.02L5.45,3.71
	c0.113,0.113,0.176,0.341,0.176,0.51v0.281c0,0.619-0.506,1.125-1.125,1.125H0.282c-0.169,0-0.281,0.112-0.281,0.281V17.72
	c0,0.168,0.112,0.281,0.281,0.281h4.219c0.619,0,1.125-0.506,1.125-1.125v-0.281c0-0.168-0.063-0.397-0.176-0.509
	c0,0-0.615-0.946-0.615-1.002C4.666,14.802,4.5,14.457,4.5,14.063c0-0.956,0.731-1.688,1.688-1.688s1.688,0.731,1.688,1.688
	c0,0.394-0.166,0.739-0.334,1.02l-0.616,1.002c-0.056,0.112-0.176,0.341-0.176,0.509v0.281c0,0.619,0.506,1.125,1.125,1.125h4.219
	c0.168,0,0.281-0.113,0.281-0.281V13.5c0-0.619,0.506-1.125,1.125-1.125h0.281c0.169,0,0.396,0.063,0.51,0.176
	c0,0,0.945,0.616,1.002,0.616c0.337,0.168,0.626,0.334,1.02,0.334c0.956,0,1.687-0.731,1.687-1.687c0-0.957-0.731-1.688-1.687-1.688
	c-0.394,0-0.738,0.166-1.02,0.334l-1.002,0.616c-0.113,0.056-0.341,0.176-0.51,0.176H13.5c-0.619,0-1.125-0.506-1.125-1.125V5.908
	c0-0.168-0.113-0.281-0.281-0.281H7.875c-0.619,0-1.125-0.506-1.125-1.125V4.221c0-0.168,0.063-0.397,0.176-0.51
	c0,0,0.616-0.945,0.616-1.001c0.168-0.281,0.334-0.626,0.334-1.02C7.875,0.733,7.144,0.002,6.188,0.001L6.188,0.001z"></path>
</svg></i>
				<span class="media-body">Edit Profile</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>
		</li>

	<?php if($profesi != NULL || $bagian == NULL || $gender == NULL || $perusahaan == NULL || $keahlian == NULL || $kota == NULL || $tgllhr == NULL || $nohp == NULL){ ?>
			<li>
      <a class="pmd-ripple-effect" href="akses-wifi.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="18.001px" viewBox="0 0 18 18.001" enable-background="new 0 0 18 18.001" xml:space="preserve">
<path fill="#C9C8C8" d="M6.188,0.001C5.232,0.001,4.5,0.732,4.5,1.688c0,0.394,0.166,0.739,0.334,1.02L5.45,3.71
	c0.113,0.113,0.176,0.341,0.176,0.51v0.281c0,0.619-0.506,1.125-1.125,1.125H0.282c-0.169,0-0.281,0.112-0.281,0.281V17.72
	c0,0.168,0.112,0.281,0.281,0.281h4.219c0.619,0,1.125-0.506,1.125-1.125v-0.281c0-0.168-0.063-0.397-0.176-0.509
	c0,0-0.615-0.946-0.615-1.002C4.666,14.802,4.5,14.457,4.5,14.063c0-0.956,0.731-1.688,1.688-1.688s1.688,0.731,1.688,1.688
	c0,0.394-0.166,0.739-0.334,1.02l-0.616,1.002c-0.056,0.112-0.176,0.341-0.176,0.509v0.281c0,0.619,0.506,1.125,1.125,1.125h4.219
	c0.168,0,0.281-0.113,0.281-0.281V13.5c0-0.619,0.506-1.125,1.125-1.125h0.281c0.169,0,0.396,0.063,0.51,0.176
	c0,0,0.945,0.616,1.002,0.616c0.337,0.168,0.626,0.334,1.02,0.334c0.956,0,1.687-0.731,1.687-1.687c0-0.957-0.731-1.688-1.687-1.688
	c-0.394,0-0.738,0.166-1.02,0.334l-1.002,0.616c-0.113,0.056-0.341,0.176-0.51,0.176H13.5c-0.619,0-1.125-0.506-1.125-1.125V5.908
	c0-0.168-0.113-0.281-0.281-0.281H7.875c-0.619,0-1.125-0.506-1.125-1.125V4.221c0-0.168,0.063-0.397,0.176-0.51
	c0,0,0.616-0.945,0.616-1.001c0.168-0.281,0.334-0.626,0.334-1.02C7.875,0.733,7.144,0.002,6.188,0.001L6.188,0.001z"></path>
</svg></i>
				<span class="media-body">Akses WIFI</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>
		</li>
		<?php } ?>

		<li>
      <a class="pmd-ripple-effect" href="changepassword.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="14.187px" height="18px" viewBox="0 0 14.187 18" enable-background="new 0 0 14.187 18" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v18h14.187V0H0z M3.121,3.293h2.023v4.767H3.121V3.293z M11.211,14.764H2.948v-2.022h8.263V14.764
	L11.211,14.764z M11.211,11.585H2.948V9.563h8.263V11.585L11.211,11.585z M11.211,8.407H7.455V6.385h3.756V8.407z M11.211,5.229
	H7.455V3.207h3.756V5.229z"></path>
</svg></i>
				<span class="media-body">Change Password</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>
		</li>
		<!-- <li>
			<a class="pmd-ripple-effect" href="data-absensi.php">
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i>
				<span class="media-body">Data Absensi</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a>

		</li> -->



	</ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->

<!--content area start-->
<div id="content" class="pmd-content inner-page">
  <div class="container-fluid full-width-container value-added-detail-page">
  <div>
	<!--tab start-->
		<!-- Title -->
    <h1 class="section-title" id="services">
      <span>Edit Profile</span>
    </h1><!-- End Title -->
    <!--breadcrum start-->
    <ol class="breadcrumb text-left">
      <li><a href="index.php">Dashboard</a></li>
      <li class="active">Edit Profile </li>
    </ol><!--breadcrum end-->
  </div>
</div>


		<div class="page-content profile-edit dashboard">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">
					<div class="row">
						<form class="form-horizontal" action="edit.php" method="post" enctype="multipart/form-data" >

						<div data-provides="fileinput" class="fileinput fileinput-new col-lg-3">
							<div data-trigger="fileinput" class="fileinput-preview thumbnail img-circle img-responsive">
								<?php
       								//if else jika ada user yang belum upload foto
						       if(empty($foto)){
						       ?>
						        <img src="themes/images/upload.jpg" alt="Kosong">
						       <?php
						       }else{
						       ?>
						        <img src="data:image/jpeg;base64, <?php echo base64_encode( $foto )?>" alt="image error">
						       <?php
						       }
						       ?>
							</div>
							<div class="action-button">
								<span class="btn btn-default btn-raised btn-file ripple-effect">
									<span class="fileinput-new"><i class="material-icons md-light pmd-xs">add</i></span>
									<span class="fileinput-exists"><i class="material-icons md-light pmd-xs">mode_edit</i></span>
									<input type="file" name="foto">
								</span>
								<a data-dismiss="fileinput" class="btn btn-default btn-raised btn-file ripple-effect fileinput-exists" href="javascript:void(0);"><i class="material-icons md-light pmd-xs">close</i></a>
							</div>
						</div>

						<div class="col-lg-9 custom-col-9">
							<h3 class="heading">Edit Your Profile</h3>
							<div class="row">

								<!-- <form method="POST" action="pengiklan_input_dataP.php" enctype="multipart/form-data"> -->
								  <fieldset>
										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3">Nama</label>
										  <div class="col-sm-9">
										   <p class="form-control-static" name"nama" ><strong><?php echo ucwords($data['nama'])?></strong></p>

										  </div>
										</div>


										<div class="form-group pmd-textfield">
										  <label class="col-sm-3 control-label" for="u_fname">Profesi</label>
										  <div class="col-sm-9">
											 <select class="select-simple form-control pmd-select2" style="width: 100%;" name="profesi" id="profesi" required onchange="
											 if(this.value=='student')
											 {
                          							document.getElementById('company').innerHTML = 'Sekolah';
                          					 }
                          					 else if(this.value=='startup')
                          					 {
                          							document.getElementById('company').innerHTML = 'Perusahaan';

                          					 }else if(this.value=='freelance')
                          					 {
                          							document.getElementById('company').innerHTML = 'Perusahaan';

                          					 }
                          					 else
                          					 {
                          					 	
                          					 	this.form['other'].style.visibility='hidden';
                          					 
                          					 }" 
                      						

                      						name="keahlian" id="keahlian">

		                                    <?php
		                                        if($profesi=="student")
		                                        {
		                                    ?>
		                                    <option value="student" selected=""><?php echo ucwords($profesi);?></option>
		                                    <option value="startup">Startup</option>
		                                    <option value="freelance">Freelance</option>
		                                    <option value="employee">Employee</option>
		                                    <?php
		                                        }
		                                        else if($profesi=="startup")
		                                        {
		                                    ?>
		                                    <option value="student">Student</option>
		                                    <option value="startup" selected=""><?php echo ucwords($profesi);?></option>
		                                    <option value="freelance">Freelance</option>
		                                    <option value="employee">Employee</option>
		                                    <?php
		                                        }
		                                        else if($profesi=="freelance")
		                                        {
		                                    ?>
		                                    <option value="student">Student</option>
		                                    <option value="startup">Startup</option>
		                                    <option value="freelance" selected=""><?php echo ucwords($profesi);?></option>
		                                    <option value="employee">Employee</option>
		                                    <?php
		                                        }else
		                                        {
		                                    ?>
		                                    <option value="student">Student</option>
		                                    <option value="startup">Startup</option>
		                                    <option value="freelance">Freelance</option>
		                                    <option value="employee" selected>Employee</option>
		                                    <?php
		                                        }
		                                    ?>
		                                	 </select>

										  </div>
										</div>

										<div class="form-group pmd-textfield">
										<label class="col-sm-3 control-label" for="u_fname">Bagian</label>
										<div class="col-sm-9">

										<select class="select-simple form-control pmd-select2" style="width: 100%;" name="bagian">
										<?php 
										if($bagian == 'hustler'){
											?>
											<option value="hustler" selected="">Hustler</option>
									<option value="hacker">Hacker</option>
									<option value="hipster">Hipster</option>
									<option value="other">Other</option>
									<?php
										}else if($bagian == 'hacker'){
	?>
											<option value="hustler">Hustler</option>
									<option value="hacker" selected>Hacker</option>
									<option value="hipster">Hipster</option>
									<option value="other">Other</option>
									<?php
										}else if ($bagian == 'hipster') {
												?>
											<option value="hustler">Hustler</option>
									<option value="hacker">Hacker</option>
									<option value="hipster" selected>Hipster</option>
									<option value="other">Other</option>
									<?php
										}else{
	?>
											<option value="hustler">Hustler</option>
									<option value="hacker">Hacker</option>
									<option value="hipster">Hipster</option>
									<option value="other" selected>Other</option>
									<?php
										}
										?>
									
										</select>
										</div>
										</div>
							

										<div class="form-group pmd-textfield">
											<?php if($profesi == 'student') {
												?>
													<label class="col-sm-3 control-label" for="u_fname" id="company">Sekolah</label>
												<?php
											}else {?>
										  <label class="col-sm-3 control-label" for="u_fname" id="company">Perusahaan</label>
										  <?php }?>
										  <div class="col-sm-9">
											  <input type="text" class="form-control empty" name="perusahaan" value="<?php echo $perusahaan;?>">
										  </div>
										</div>
										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3">Keahlian</label>
										  <div class="col-sm-9">
											<select class="select-simple form-control pmd-select2" style="width: 100%;" name="keahlian" id="profesi" onchange="if
                          (this.value=='other'){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};" name="keahlian" id="keahlian" required>
                          <?php
                              if($keahlian=="management_business")
                              {
                          ?>
                        				<option value="management_business" selected>Management Business</option>
										<option value="web_developer" selected>Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>
					                  	<option value="other">Other</option>
                          <?php
                              }
                              else if ($keahlian=="web_developer")
                              {
                          ?>
	                       				<option value="management_business">Management Business</option>
										<option value="web_developer" selected>Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer" selected>Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>
					                  	<option value="other">Other</option>
                          <?php
                              }else if ($keahlian=="finance")
                              {
                          ?>
			                     		<option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance" selected>Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>
					                  	<option value="other">Other</option>
                          <?php
                              }else if ($keahlian=="marketing")
                              {
                          ?>
			                        <option value="management_business">Management Business</option>
										<option value="web_developer">Web Deveoper</option>
										<option value="finance">Finance</option>
										<option value="marketing" selected>Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>
					                  	<option value="other">Other</option>
                          <?php
                              }else if ($keahlian=="digital_marketing")
                              {
                          ?>
                         <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing" selected>Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>             
					                  	<option value="other">Other</option>
							<?php
                              }else if ($keahlian=="human_resource")
                              {
                          ?>
                          <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource" selected>Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>
					                  	<option value="other">Other</option>

                          <?php }else if($keahlian == "content_writer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer" selected>Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "frontend_developer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer" selected>FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "backend_developer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer" selected>Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "android_developer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer" selected>Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "ios_developer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer" selected>Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "internet_of_things"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things" selected>Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "game_developer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer" selected>Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>	
					                  	<option value="other">Other</option>	
                          } ?>
                           <?php }else if($keahlian == "seo_specialist"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist" selected>SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>	
					                  	<option value="other">Other</option>	
                          } ?>
                           <?php }else if($keahlian == "it_networking"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking" selected>IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "it_security"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security" selected>IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>	
					                  	<option value="other">Other</option>	
                          } ?>
                           <?php }else if($keahlian == "ui_designer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer" selected>UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "ux_designer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer" selected>UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>	
					                  	<option value="other">Other</option>	
                          } ?>
                           <?php }else if($keahlian == "graphic_designer"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer" selected>Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "video_editor"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor" selected>Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>
                          } ?>
                           <?php }else if($keahlian == "animator"){ ?>
                          			  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator" selected>Animator</option>		
					                  	<option value="other">Other</option>
                       
                          <?php }else{
                       			   	?>
                          				  <option value="<?php echo $keahlian?>" selected><?php echo $keahlian;?></option>
                          				  <option value="management_business">Management Business</option>
										<option value="web_developer">Web Developer</option>
										<option value="finance">Finance</option>
										<option value="marketing">Marketing</option>
										<option value="digital_marketing">Digital Marketing</option>
										<option value="human_resource">Human Resource</option>
										<option value="content_writer">Content Writer</option>
									 	<option value="frontend_developer">FrontEnd Developer</option>
					                 	<option value="backend_developer">Back End Developer</option>
					                  	<option value="android_developer">Android Developer</option>
					                  	<option value="ios_developer">Ios Developer</option>
					                  	<option value="internet_of_things">Internet Of Things</option>
					                  	<option value="game_developer">Game Developer</option>
					                  	<option value="seo_specialist">SEO Specialist</option>
					                  	<option value="it_networking">IT Networking</option>
					                  	<option value="it_security">IT Security</option>
					                 	<option value="ui_designer">UI Designer</option>
					                  	<option value="ux_designer">UX Designer</option>
					                  	<option value="graphic_designer">Graphic Designer</option>
					                  	<option value="video_editor">Video Editor</option>
					                  	<option value="animator">Animator</option>		
					                  	<option value="other">Other</option>		

						<?php 	
					}
                           ?>
                           </select>

                          <div class="help-block with-errors"></div>
                          <div class="form-group pmd-textfield pmd-textfield-floating-label">
          							<input type="text" name="other" class="form-control" style="visibility:hidden;" placeholder="Keahlian Lainnya ..">
          						</div>
										  </div>
										</div>
                      
										</div>

										<div class="form-group pmd-textfield">
										  <label class="col-sm-3 control-label" for="u_fname">Kota</label>
										  <div class="col-sm-9">
											  <input type="text" class="form-control empty" name="kota" value="<?php echo $kota;?>">
										  </div>
										</div>
										<div class="form-group pmd-textfield">
										  <label class="col-sm-3 control-label" for="u_fname">Email</label>
										  <div class="col-sm-9">
										  	  <input type="text" class="form-control empty" name="email" value="<?php echo ucwords($_SESSION['emailLogin'])?>" readonly>
										  </div>
										</div>
										<div class="form-group pmd-textfield">
										  <label class="col-sm-3 control-label" for="u_fname">No Handphone</label>
										  <div class="col-sm-9">
											  <input type="text" class="form-control empty" name="no_hp" value="<?php echo $nohp;?>">
										  </div>
										</div>
										<br>


							<h3 class="heading">Social Media Account</h3>
									<div class="form-group pmd-textfield">
										<label class="control-label col-sm-3" for="u_password">Instagram</label>
										<div class="col-sm-9">
											<input type="text" class="form-control empty" name="instagram" value="<?php echo $instagram;?>">
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label class="control-label col-sm-3" for="u_password">LinkedIn</label>
										<div class="col-sm-9">
											<input type="text" class="form-control empty" name="linkedln" value="<?php echo $linkedin;?>">
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label class="control-label col-sm-3" for="u_password">Facebook</label>
										<div class="col-sm-9">
											<input type="text" class="form-control empty" name="facebook" value="<?php echo $facebook;?>">
										</div>
									</div>
<br>
									<div class="form-group btns margin-bot-30">
										  <div class="col-sm-9 col-sm-offset-3">
											<input type="submit" value="Update" name="tedit" class="btn btn-primary pmd-ripple-effect">
											<input type="button" value="Cancel" class="btn btn-default btn-link pmd-ripple-effect" onclick="window.location.href='index.php'"/>
											<!-- <button class="btn btn-default btn-link pmd-ripple-effect">Cancel</button> -->
										  </div>
										</div>

									<!-- <br>
									<br>
									<input type="button" value="Back To Profile"class="btn btn-primary pmd-ripple-effect" onclick="window.location.href='index.php'"/> -->
								  </fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- tab end -->

</div><!-- content area end -->

<!-- Footer Starts -->
<footer class="admin-footer">
 <div class="container-fluid">
 	<ul class="list-unstyled list-inline">
	 	<li>
			<span class="pmd-card-subtitle-text">Bandung Digital Valley &copy; <span class="auto-update-year"></span>. All Rights Reserved.</span>
			<h3 class="pmd-card-subtitle-text">Startup Incubator and Co-Working Space</h3>
        </li>
    </ul>
 </div>
</footer>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<script src="assets/js/jquery-1.12.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/propeller.min.js"></script>
<script src="components/file-upload/js/upload-image.js"></script>
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
		$(".auto-update-year").html(new Date().getFullYear());
	});
</script>

<!-- Scripts Ends -->

</body>
</html>
