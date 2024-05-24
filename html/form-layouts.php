<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">

		<!-- Title -->
		<title> Formulir Tamu </title>

		<!--- Favicon --->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini ltr">
		

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	   <div class="page custom-index">

			<!-- main-sidebar-->
			<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
			<div class="sticky">
				<aside class="app-sidebar sidebar-scroll">
					<div class="main-sidebar-header active">
						<a class="desktop-logo logo-light active" href="index.html"><img src="../assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
						<a class="desktop-logo logo-dark active" href="index.html"><img src="../assets/img/brand/logo-white.png" class="main-logo" alt="logo"></a>
						<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="../assets/img/brand/favicon.png" alt="logo"></a>
						<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="../assets/img/brand/favicon-white.png" alt="logo"></a>
					</div>
					<div class="main-sidemenu">
						<div class="main-sidebar-loggedin">
							<div class="app-sidebar__user">
								<div class="dropdown user-pro-body text-center">
									<div class="user-pic">
										<img src="../assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded">
									</div>
									<div class="user-info">
										<h6 class=" mb-0 text-dark">BPS SUBANG</h6>
										<span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
						<ul class="side-menu ">
							<li class="slide">
								<a class="side-menu__item" href="index.php"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
							</li>
							
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide"   href="javascript:void(0);"><i class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Forms</span><span class="badge bg-info side-badge">6</span><i class="angle fe fe-chevron-down  hor-angle"></i></a>
								<ul class="slide-menu">
								
									<li><a class="slide-item" href="form-layouts.html">Form Layouts</a></li>
								
								</ul>
							</li>
							

						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
					</div>
				</aside>
			</div>
			<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- row -->
				<form action="" method="post">
				<div class="col-lg-12 col-md-10 m-1">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									<p>FORM BUKU TAMU</p>
								</div>
								<p class="mg-b-20">BADAN PUSAT PELAYANAN STATISTIK KABUPATEN SUBANG</p>
								<div class="row">
									<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
										<div class="card card-body pd-20 pd-md-40 border shadow-none">
											<h5 class="card-title mg-b-20">Identitas</h5>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">NAMA PENGUNJUNG</label>
												<input class="form-control" name="NAMA" required="" type="text ">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">INSTANSI/LEMBAGA</label>
												<div class="pos-relative">
													<input class="form-control pd-e-80" name="INSTANSI" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">ALAMAT INSTANSI/LEMBAGA</label>
												<div class="pos-relative">
													<input class="form-control pd-e-80" name="ALAMAT" required="" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">TUJUAN/KEPERLUAN</label>
												<div class="pos-relative">
													<input class="form-control pd-e-80" name="TUJUAN" required="" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">NO.TLP/WA</label>
												<div class="pos-relative">
													<input class="form-control pd-e-80" name="WA" type="text">
													
												</div>
											</div>
											<div class="form-group">
												<div class="row row-sm">
													<div class="col-sm-9">
														<label class="main-content-label tx-11 tx-medium tx-gray-600">Tanggal</label>
														<input class="form-control pd-e-80" name="DATE" required="" type="date">
													</div>
													<div class="col-sm-3 mg-t-20 mg-sm-t-0">
														<label class="main-content-label tx-11 tx-medium tx-gray-600">JAM</label>
														<input class="form-control" name="CVC" required="" type="time">
													</div>
												</div>
											</div>
											<div class="form-group mg-b-20">
												<input class="btn btn-outline-success btn-lg btn-block" type="submit" name="proses" value="simpan">
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</form>
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!--Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-primary card mb-0">
				<div class="panel-body tabs-menu-body p-0 border-0">
					<ul class="Date-time">
						<li class="time">
							<h1 class="animated ">21:00</h1>
							<p class="animated ">Sat,October 1st 2029</p>
						</li>
					</ul>
					<div class="card-body latest-tasks">
						<h3 class="events-title"><span>Events For Week </span></h3>
						<div class="event">
							<div class="Day">Monday 20 Jan</div>
							<a   href="javascript:void(0);">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Tuesday 21 Jan</div>
							<a   href="javascript:void(0);">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Wednessday 22 Jan</div>
							<div class="tasks">
								<div class=" task-line primary">
									<a   href="javascript:void(0);" class="label">
										XML Import &amp; Export
									</a>
									<div class="time">
										12:00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input checked="" type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line danger">
									<a   href="javascript:void(0);" class="label">
										Connect API to pages
									</a>
									<div class="time">
										08:00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Thursday 23 Jan</div>
							<div class="tasks">
								<div class="task-line success">
									<a   href="javascript:void(0);" class="label">
										Create Wireframes
									</a>
									<div class="time">
										06:20 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Friday 24 Jan</div>
							<div class="tasks">
								<div class="task-line warning">
									<a   href="javascript:void(0);" class="label">
										Test new features in tablets
									</a>
									<div class="time">
										02: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line teal">
									<a   href="javascript:void(0);" class="label">
										Design Evommerce
									</a>
									<div class="time">
										10: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks mb-0">
								<div class="task-line purple">
									<a   href="javascript:void(0);" class="label">
										Fix Validation Issues
									</a>
									<div class="time">
										12: 00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="d-flex pagination wd-100p">
							<a   href="javascript:void(0);">Previous</a>
							<a   href="javascript:void(0);" class="ms-auto">Next</a>
						</div>
					</div>
					<div class="card-body border-top border-bottom">
						<div class="row">
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
								<div>Inbox</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
								<div>Settings</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
								<div>Sign out</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		<!-- Footer opened -->
		<div class="main-footer ht-45">
			<div class="container-fluid pd-t-0-f ht-100p">
					<span> Copyright © 2024 <a   href="javascript:void(0);" class="text-primary">BPS</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a   href="javascript:void(0);"> TIM RPL </a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->
	</div>
		<!-- page closed -->

		<!-- modal -->
		<div id="modaldemo1" class="modal">
			<div class="modal-dialog wd-xl-400" role="document">
				<div class="modal-content">
					<div class="modal-body pd-20 pd-sm-40">
						<button type="button" class="close pos-absolute t-15 r-20 tx-26" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h5 class="modal-title mg-b-5">Create New Account</h5>
						<p class="mg-b-20">Let's get you all setup so you can begin using our app.</p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Firstname">
						</div><!-- form-group -->
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Lastname">
						</div><!-- form-group -->
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone">
						</div><!-- form-group -->
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email">
						</div><!-- form-group -->
						<div class="form-group mg-b-25">
							<label class="ckbox mg-b-5">
								<input type="checkbox">
								<span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span>
							</label>
							<label class="ckbox">
								<input type="checkbox" checked>
								<span class="tx-13">Yes, I want to receive email from your newsletter.</span>
							</label>
						</div><!-- form-group -->
						<button class="btn btn-primary btn-block">Continue</button>
					</div><!-- modal-body -->
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->

		


		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="ti-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- Perfect-scrollbar js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!--- Select2 js --->
		<script src="../assets/plugins/select2/js/select2.min.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Sidebar js --->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../assets/js/sticky.js"></script>

		<!--- Right-sidebar js --->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!--- Internal Form-layouts js --->
		<script src="../assets/js/form-layouts.js"></script>

		<!--- Index js --->
		<script src="../assets/js/script.js"></script>

		<!--themecolor js--
		<script src="../assets/js/themecolor.js"></script>

		<!-swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>

<?php include "porgses.php"; 
		
		?>