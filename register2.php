<!doctype html>
<?php
//php script
include_once("function/controller_register.php");

?>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Form Examples | Propeller - Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Registrasi BDV</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<!-- /build -->

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="assets/css/propeller.min.css">
<!-- /build -->

<!-- Propeller date time picker css-->
<!-- build:[href] components/datetimepicker/css/ -->
<link rel="stylesheet" type="text/css" href="components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="components/datetimepicker/css/pmd-datetimepicker.css" />
<!-- /build -->

<!-- Select2 css-->
<!-- build:[href] components/select2/css/ -->
<link rel="stylesheet" type="text/css" href="components/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="components/select2/css/select2-bootstrap.css" />
<link rel="stylesheet" type="text/css" href="components/select2/css/pmd-select2.css" />
<!-- /build -->

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">
<link rel="stylesheet" type="text/css" href="themes/css/user.css">

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body class="body-custom">

<!-- Nav menu with search -->

    <div class="jumbotron hero">
        <div class="container">
            <div class="row" align="center">
                <div class="col-lg-12 col-md-6 col-md-offset-3 col-md-pull-3 get-it">
                	<a href="http://bandungdigitalvalley.com"><img alt="Brand" src="assets/images/bdvlogo.png" style="height:100px"></a>
                    <h1>Registrasi BDV Membership</h1>
                    <p id="ket">Membership ditentukan dari kelengkapan data dan kesesuaian skill. BDV mengkhususkan diri untuk penggiat 	digital kreatif mulai dari mahasiswa, komunitas, freelancer, dan praktisi IT, serta startups. BDV berhak menolak registrasi ulang
                        dari user yang tidak memenuhi kriteria diatas. </p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
<!--content area start-->
<div id="content" class="pmd-content inner-page centered">
	<div class="container">
	<!--tab start-->
	<div class="container-fluid full-width-container" align="center">

		<!-- Title -->
		<div class="section section-custom billinfo" align="left">
			<!--section-title -->
			<!--section-title end -->
			<!-- section content start-->
			<form data-toggle="validator" id="validationForm" action="register.php" method="post">
					<div class="group-fields clearfix row">
					<h2 align="center" style="color:#231F20">Personal Info</h2>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="nama" class="control-label" style="color:#6D6F71">
									Nama*
								</label>
								<input type="text" name="nama" id="nama" class="form-control" required>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="email" class="control-label" style="color:#6D6F71">
									E-mail*
								</label>
								<input type="email" name="email" id="email" class="form-control" required>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
          <div class="group-fields clearfix row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="password" class="control-label" style="color:#6D6F71">
									Password*
								</label>
								<input type="password" name="pass" id="pass" class="form-control" required>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
          <div class="group-fields clearfix row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="password" class="control-label" style="color:#6D6F71">
									Confirm Password*
								</label>
								<input type="password" name="confrimpass" id="confirmpass" class="form-control" onchange="checkPasswordMatch()" required>
								<div class="help-block with-errors" id="divCheckPasswordMatch"></div>
							</div>
						</div>
					</div>
					<div class="group-fields clearfix row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
						<label for="gender" class="control-label" style="color:#6D6F71">
									Gender*
					</label>
					</div>
					</div>
					<div class="group-fields clearfix row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
										<!-- Simple radio with label -->
									<div class="radio">
										<label class="pmd-radio pmd-radio-ripple-effect">
											<input type="radio" name="gender" id="pria" value="pria">
											<span for="gender">Pria</span> </label>
									</div>
									</div>
									</div>
					<div class="group-fields clearfix row margin-row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered">
									<!-- Radio button checked -->
									<div class="radio radio-margin">
										<label class="pmd-radio pmd-radio-ripple-effect">
											<input type="radio" name="gender" id="wanita" value="wanita">
											<span for="gender">Wanita</span> </label>
									</div>
								</div>
					</div>
						<div class="group-fields clearfix row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
						<div class="form-group pmd-textfield">
								<label for="tanggallahir" class="control-label"style="color:#6D6F71">Tanggal lahir*</label>
                				<input type="date" name="tgl_lahir" class="form-control" required>
								<div class="help-block with-errors"></div>
								<!--<p class="help-block">(YYYY-MM-DD) Ex: 1991-08-17</p> -->
							</div>
						</div>
						</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="kota" class="control-label" style="color:#6D6F71">
									Kota*
								</label>
								<input type="text" name="kota" id="kota" class="form-control" required>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered">
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
							   <label for="regular1" class="control-label" style="color:#6D6F71">
								 Nomor Handphone*
							   </label>
							   <input type="tel" name="no_hp" id="nohp" class="form-control" required>
								<div class="help-block with-errors"></div>
							   <p class="help-block">Ex: 0812345678</p>
							</div>
						</div>
						</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="profesi" align="left" style="color:#6D6F71">Profesi*</label>
								<select class="select-simple form-control pmd-select2" style="width: 100%;" name="profesi" id="profesi" required>

									<option></option>
									<option value="student">Student</option>
									<option value="startup">Startup</option>
									<option value="freelance">Freelance</option>
									<option value="employee">Employee</option>
									</select>
									<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="perusahaan" class="control-label" style="color:#6D6F71">
									Nama Perusahaan*
								</label>
								<input type="text" name="perusahaan" id="perusahaan" class="form-control" required>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
          <br/>
          <div class="group-fields clearfix row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
            <small>informasi seputar bagian <a href="">cek disini</a></small>
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="bagian" align="left" style="color:#6D6F71">Bagian*</label>
								<select class="select-simple form-control pmd-select2" style="width: 100%;" onchange="if
             						(this.value=='hustler'){
                          var option1 = document.getElementById('opts');
                          option1.setAttribute('value', 'itbisnis');
                          var text1 = document.createTextNode('IT bisnis');
                          option1.appendChild(text1);

                          var option2 = document.createElement('option');
                          option2.setAttribute('value', 'generalbisnis');
                          var text2 = document.createTextNode('general bisnis');
                          option2.appendChild(text2);

                          var option3 = document.createElement('option');
                          option3.setAttribute('value', 'test');
                          var text3 = document.createTextNode('test');
                          option3.appendChild(text3);

                          document.getElementById('keahlian').appendChild(option1);
                          document.getElementById('keahlian').appendChild(option2);
                          document.getElementById('keahlian').appendChild(option3);
                      }
                        else if(this.value=='hacker'){

                          var select = document.getElementById('keahlian');

                            for (var i=0; i<select.length; i++){
  								if (select.options[i].value == 'itbisnis' )
     							select.remove(i);
  							}

                          var options = document.getElementById('opts');
                          options.setAttribute('value', 'webdeveloper');
                          var texta = document.createTextNode('web developer');
                          options.appendChild(texta);


                          document.getElementById('keahlian').appendChild(options);



                        }
                        else if(this.value=='hipster'){

                        }
                        else {

                          };" name="bagian" id="bagian" required>
									<option></option>
									<option value="hustler">Hustler</option>
									<option value="hacker">Hacker</option>
									<option value="hipster">Hipster</option>
									</select>
									<div class="help-block with-errors"></div>
						</div>
					</div>
					</div>

					<div class="group-fields clearfix row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="keahlian" align="left" style="color:#6D6F71">Keahlian*</label>
								<select class="select-simple form-control pmd-select2" id="keahlian" style="width: 100%;">
                    
                    <option></option>
                    <option id="opts"></option>
					

									</select>
									<div class="help-block with-errors"></div>
						</div>

					</div>
					</div>




					<div class="section section-custom billinfo" align="left">
			<!--section-title -->
			<h2 align="center" style="color:#231F20">Social Media</h2><!--section-title end -->
			<!-- section content start-->
					<!-- User name with floating label -->
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
					<div class="form-group pmd-textfield pmd-textfield-floating-label">
					<label for="instagram" class="control-label pmd-input-group-label" style="color:#6D6F71">Instagram</label>
					<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-instagram"></i></div>
					<input type="text" name="instagram" class="form-control" id="instagram">
					</div>
					</div>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
					<div class="form-group pmd-textfield pmd-textfield-floating-label">
					<label for="linkedln" class="control-label pmd-input-group-label" style="color:#6D6F71">linkedln</label>
					<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-linkedin"></i></div>
					<input type="text" name="linkedln"class="form-control" id="linkedln">
					</div>
					</div>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-centered" >
					<div class="form-group pmd-textfield pmd-textfield-floating-label">
					<label for="facebook" class="control-label pmd-input-group-label" style="color:#6D6F71">facebook</label>
					<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-facebook"></i></div>
					<input type="text" name="facebook" class="form-control" id="facebook">
					</div>
					</div>
					</div>
					</div>

				</div>
				<div class="pmd-card-actions" align="center">
          <button type="submit" name="submit" class="btn btn-primary next" style="background-color:#2ca8e0">Submit</button>
					<!-- <a role="button" href="login.php" name="submit" class="btn btn-primary next" type="submit"x>Submit</a> -->
          <a href="javascript:void(0);" class="btn btn-default">Cancel</a>

				</div>
			</div> <!-- section content end -->
			</form>
		</div>

		<div class="section section-custom billinfo">
			<!-- section content end -->
		</div>

	</div><!-- tab end -->

</div><!-- content area end -->
 <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 style="color:#231F20">Bandung Digital Valley © 2017</h5></div>
                <div class="col-sm-6 social-icons">
                  <a href="https://www.facebook.com/bandungdigitalvalley" class="icon circle fa fa-facebook" title="Facebook" style="background-color: #3b5998;"></a>
                  <a href="https://www.linkedin.com/company-beta/2949754/" style="background-color: #007bb6;" class="icon circle fa fa-linkedin" title="linkedln"></a>
                  <a href="https://www.instagram.com/telkom_bdv/" class="icon circle fa fa-instagram" style="background-color: #517fa4;" title="instagram"></a>
                  <a href="https://www.youtube.com/user/bandungdigitalvalley" class="icon circle fa fa-youtube" style="background-color: #a82400;" title="Youtube"></a>
        				</i></a></div>
            </div>
        </div>
    </footer>

<!-- Scripts Starts -->
<!-- build:[src] assets/js/ -->
<script src="assets/js/jquery-1.12.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/propeller.min.js"></script>
<script src="assets/js/validator.js"></script>
<script src="assets/js/validator.min.js"></script>
<!-- /build -->
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
<!-- Select2 js-->
<!-- build:[src] components/select2/js/ -->
<script type="text/javascript" src="components/select2/js/select2.full.js"></script>
<!-- /build -->

<!-- Propeller Select2 -->
<script type="text/javascript">
	$(document).ready(function() {
		<!-- Simple Selectbox -->
		$(".select-simple").select2({
			theme: "bootstrap",
			minimumResultsForSearch: Infinity,
		});
		<!-- Selectbox with search -->
		$(".select-with-search").select2({
			theme: "bootstrap"
		});
		<!-- Select Multiple Tags -->
		$(".select-tags").select2({
			tags: false,
			theme: "bootstrap",
		});
		<!-- Select & Add Multiple Tags -->
		$(".select-add-tags").select2({
			tags: true,
			theme: "bootstrap",
		});
	});
</script>
<!-- build:[src] components/select2/js/ -->
<script type="text/javascript" src="components/select2/js/pmd-select2.js"></script>
<!-- /build -->
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
			$('.login-card').show()
			$('.forgot-password-card').hide();
		});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
		$(".login-register").click(function(){
			$('.login-card').hide()
			$('.forgot-password-card').hide();
			$('.register-card').show();
		});

		$(".register-login").click(function(){
			$('.register-card').hide()
			$('.forgot-password-card').hide();
			$('.login-card').show();
		});
		$(".forgot-password").click(function(){
			$('.login-card').hide()
			$('.register-card').hide()
			$('.forgot-password-card').show();
		});
});
</script> <script type="text/javascript" language="javascript" src="components/datetimepicker/js/moment-with-locales.js"></script>
<script type="text/javascript" language="javascript" src="components/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<!-- /build -->

<script>
	// Default date and time picker
	$('#datetimepicker-default').datetimepicker();

	// View mode datepicker [shows only years and month]
	$('#datepicker-view-mode').datetimepicker({
		viewMode: 'years',
		format: 'MM/YYYY'
	});

	// Inline datepicker
	$('#datepicker-inline').datetimepicker({
		inline: true
	});

	// Time picker only
	$('#timepicker').datetimepicker({
		format: 'LT'
	});

	// Linked date and time picker
	// start date date and time picker
	$('#datepicker-start').datetimepicker();

	// End date date and time picker
	$('#datepicker-end').datetimepicker({
		useCurrent: false
	});

	// start date picke on chagne event [select minimun date for end date datepicker]
	$("#datepicker-start").on("dp.change", function (e) {
		$('#datepicker-end').data("DateTimePicker").minDate(e.date);
	});
	// Start date picke on chagne event [select maxmimum date for start date datepicker]
	$("#datepicker-end").on("dp.change", function (e) {
		$('#datepicker-start').data("DateTimePicker").maxDate(e.date);
	});

	// Disabled Days of the Week (Disable sunday and saturday) [ 0-Sunday, 1-Monday, 2-Tuesday   3-wednesday 4-Thusday 5-Friday 6-Saturday]
	$('#datepicker-disabled-days').datetimepicker({
		 daysOfWeekDisabled: [0, 6]
	});

	// Datepicker in popup
	$('#datepicker-popup-inline').datetimepicker({
		inline: true
	});

	$("[data-header-left='true']").parent().addClass("pmd-navbar-left");

	// Datepicker left header
	$('#datepicker-left-header').datetimepicker({
		'format' : "YYYY-MM-DD HH:mm:ss", // HH:mm:ss
	});

	 $('#datetimepicker-date').datetimepicker({
      format: 'YYYY-MM-DD'
    });

</script>

<script>
  function checkPasswordMatch() {
    var password = $("#pass").val();
    var confirmPassword = $("#confirmpass").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {
 $("#pass, #confirmpass").keyup(checkPasswordMatch);
});

</script>


<!-- Scripts Ends -->

</body>
</html>
