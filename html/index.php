<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords"
		content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

	<!-- Title -->
	<title> BPS KAB.SUBANG </title>

	<!--- Favicon --->
	<link rel="icon" href="../assets/img/brand/logo Bps.PNG" type="image/x-icon" />

	<!-- Bootstrap css -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style" />

	<!--- Style css --->
	<link href="style.css" rel="stylesheet">
	<link href="../assets/css/plugins.css" rel="stylesheet">

	<!--- Icons css --->
	<link href="../assets/css/icons.css" rel="stylesheet">

	<!--- Animations css --->
	<link href="../assets/css/animate.css" rel="stylesheet">

	<!-- chartjs -->
	<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
	<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
</head>

<body class="main-body app sidebar-mini ltr">

	<!-- Loader -->
	<div id="global-loader">
		<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- page -->
	<div class="page custom-index">


		<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
		<div class="sticky">
			<aside class="app-sidebar align-items-sm-center">
				
				<div class="main-sidemenu">
					<div class="main-sidebar-loggedin">
						<div class="app-sidebar__user">
							<div class="dropdown user-pro-body text-center">
								<div class="user-pic">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 12 12">
  <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
</svg>
										
								</div>
								<div class="user-info">
									<h6 class=" mb-0 text-dark">BPS SUBANG</h6>
									<span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
								</div>
							</div>
						</div>
					</div>
					<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
							fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
							<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
						</svg></div>
					<ul class="side-menu ">
						<li class="slide">
							<a class="side-menu__item" href="index.php"><i
									class="side-menu__icon fe fe-airplay"></i><span
									class="side-menu__label">Dashboard</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item" href="form-layouts.php"><i
									class="side-menu__icon fe fe-airplay"></i><span
									class="side-menu__label">FORMULIR</span></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="form-layouts.php">FORMULIR TAMU</a></li>
							</ul>
						</li>

						</li>
					</ul>

					<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
							width="24" height="24" viewBox="0 0 24 24">
							<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
						</svg></div>
				</div>
			</aside>
		</div>
		<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- main-content-body -->
				<div class="m-2 main-content-body">
					<div class="row row-sm">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="card overflow-hidden project-card">
								<div class="card-body mg-b-4">
									<div class="d-flex">
										<div class="my-auto">
											<svg xmlns="http://www.w3.org/2000/svg" width="100" height="50"
												fill="currentColor" class="bi bi-universal-access-circle"
												viewBox="0 0 20 20">
												<path
													d="M8 4.143A1.071 1.071 0 1 0 8 2a1.071 1.071 0 0 0 0 2.143m-4.668 1.47 3.24.316v2.5l-.323 4.585A.383.383 0 0 0 7 13.14l.826-4.017c.045-.18.301-.18.346 0L9 13.139a.383.383 0 0 0 .752-.125L9.43 8.43v-2.5l3.239-.316a.38.38 0 0 0-.047-.756H3.379a.38.38 0 0 0-.047.756Z" />
												<path
													d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8" />
											</svg>
										</div>
										<div class="project-content bg-transparent">
											<h6 align="center">Pengunjung Harian</h6>
											<ul>
												<li>
													<?php
													include ("porgses.php");
													$db_tamu = mysqli_query($koneksi, "SELECT * FROM data_tamu");
													$jumlah_barang = mysqli_num_rows($db_tamu);

													?>
													<p align="right">Jumlah tamu : <b><?php echo $jumlah_barang; ?></b>
													</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="card overflow-hidden project-card">
								<div class="card-body">
									<div class="d-flex">
										<div class="my-auto">
											<svg xmlns="http://www.w3.org/2000/svg" width="100" height="50"
												fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 20 20">
												<path
													d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5m2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.04 8.04 0 0 0 .86 5.387M11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.04 8.04 0 0 0-3.527-3.527" />
											</svg>
										</div>
										<div class="project-content">
											<h6 align="center">Jam Dan Tanggal</h6>
											<ul>
												<li>
													<div id="clock">
														<div id="time">
															<div>
																<span id="amOrpm">AM</span>
															</div>
															<div>
																<span id="seconds">00</span>
															</div>
															<div>
																<span>.</span>
															</div>
															<div>
																<span id="minutes">00</span>
															</div>
															<div>
																<span>.</span>
															</div>
															<div>
																<span id="hours">00</span>
															</div>
														</div>
														<br>
														<div id="cal">
															<span id="fullyear">25 Januari 2021</span>
														</div>
													</div>
													<script type="text/javascript">
														function SettingCurrentTime() {
															var currentTime = new Date();
															var hours = currentTime.getHours();
															var minutes = currentTime.getMinutes();
															var seconds = currentTime.getSeconds();
															var amOrPm = hours < 12 ? "AM" : "PM";
															hours = hours === 0 ? 12 : hours > 12 ? hours - 12 : hours;
															hours = addZero(hours);
															minutes = addZero(minutes);
															seconds = addZero(seconds);
															var currentDate = currentTime.getDate();
															var currentMonth = ConvertMonth(currentTime.getMonth());
															var currentYear = currentTime.getFullYear();
															var fullDateDisplay = `${currentDate} ${currentMonth} ${currentYear}`;
															document.getElementById("hours").innerText = hours;
															document.getElementById("minutes").innerText = minutes;
															document.getElementById("seconds").innerText = seconds;
															document.getElementById("amOrpm").innerText = amOrPm;
															document.getElementById("fullyear").innerText = fullDateDisplay;
															var timer = setTimeout(SettingCurrentTime, 1000);
														}
														function addZero(component) {
															return component < 10 ? "0" + component : component;
														}
														function ConvertMonth(component) {
															month_array = new Array('Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
															return month_array[component];
														}
														SettingCurrentTime();
													</script>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row -->
						<div class="row row-sm">
							<div class="col-xl-8 col-lg-12 col-md-12 col-sm-10">
								<div class="card overflow-hidden">
									<div class="card-header bg-transparent">
										<div class="d-block justify-content-between">
											<h4 class="title-iframe">Info BPS Subang</h4>
											<i class="mdi mdi-dots-horizontal text-gray"></i>
										</div>
										<iframe src="https://subangkab.bps.go.id/" width="800px"
											height="400px"></iframe>
									</div>
									<div class="card-body">
										<div class="area mb-0">

										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body mg-b-60">
										<div class="d-flex justify-content-between">
											<h4 class="card-title ">Kantor BPS Subang</h4>
											<i class="mdi mdi-dots-horizontal text-gray"></i>
										</div>
										<div class="">
											<div class="card overflow-hidden">
												<div class="">
													<div class="d-block justify-content-between">
													</div>
												</div>
												<div class="card-body">
													<div class="">
														<div class="row justify-content-md-center">
															<div class="col-sm-12">
																<div class="">

																	<img src="../assets/img/bps_2.jpg" alt=""
																		width="500px">

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<tr>
									</div>

									<!-- /row -->

									<!-- row -->

									<!-- /row -->


								</div>
								<!-- /container -->
							</div>
							<div class="m-2 card overflow-hidden review-project">
								<div class="card-body">
									<div class=" ">

									</div>
									<div class="bg-light rounded-top">

										<h3 align="center">DATA TAMU BPS KABUPATEN SUBANG</h3>
										<hr>
										<table width="1200">

											<tr>
												<th>NO</th>
												<th>Nama</th>
												<th>INSTANSI</th>
												<th>ALAMAT</th>
												<th>TUJUAN</th>
												<th>WA</th>
												<th>DATE</th>
												<th>CVC</th>
											</tr>


											<?php
											include 'porgses.php';
											$no = 1;
											$data = mysqli_query($koneksi, "select * from data_tamu ");
											while ($d = mysqli_fetch_array($data)) {
												?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $d['NAMA']; ?></td>
													<td><?php echo $d['INSTANSI']; ?></td>
													<td><?php echo $d['ALAMAT']; ?></td>
													<td><?php echo $d['TUJUAN']; ?></td>
													<td><?php echo $d['WA']; ?></td>
													<td><?php echo $d['DATE']; ?></td>
													<td><?php echo $d['CVC']; ?></td>
													<td>
													</td>
												</tr>

												<?php
											}
											?>
										</table>
										</span>
									</div>
								</div>
							</div>
						</div>

						<!-- /main-content -->

						<!-- Footer opened -->
						<div class="main-footer ht-45">
							<div class="container-fluid pd-t-0-f ht-100p">
								<span> Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Azira</a>.
									Designed
									with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);">
										Spruko
									</a> All rights reserved.</span>
							</div>
						</div>
						<!-- Footer closed -->
					</div>

					<!-- page closed -->

					<!--- Back-to-top --->
					<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

					<!--- JQuery min js --->
					<script src="../assets/plugins/jquery/jquery.min.js"></script>

					<!--- Datepicker js --->
					<script src="../assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

					<!--- Bootstrap Bundle js --->
					<script src="../assets/plugins/bootstrap/popper.min.js"></script>
					<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

					<!--- Ionicons js --->
					<script src="../assets/plugins/ionicons/ionicons.js"></script>

					<!--- Chart bundle min js --->
					<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>

					<!--- JQuery sparkline js --->
					<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

					<!--- Internal Sampledata js --->
					<script src="../assets/js/chart.flot.sampledata.js"></script>

					<!--- Eva-icons js --->
					<script src="../assets/js/eva-icons.min.js"></script>

					<!--- Moment js --->
					<script src="../assets/plugins/moment/moment.js"></script>

					<!--- Perfect-scrollbar js --->
					<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
					<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

					<!--- Sidebar js --->
					<script src="../assets/plugins/side-menu/sidemenu.js"></script>

					<!--- sticky js --->
					<script src="../assets/js/sticky.js"></script>

					<!-- right-sidebar js -->
					<script src="../assets/plugins/sidebar/sidebar.js"></script>
					<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

					<!-- Morris js -->
					<script src="../assets/plugins/raphael/raphael.min.js"></script>
					<script src="../assets/plugins/morris.js/morris.min.js"></script>

					<!--- Scripts js --->
					<script src="../assets/js/script.js"></script>

					<!--- Index js --->
					<script src="../assets/js/index.js"></script>

					<!--themecolor js-->
					<script src="../assets/js/themecolor.js"></script>

					<!--swither-styles js-->
					<script src="../assets/js/swither-styles.js"></script>

					<!--- Custom js --->
					<script src="../assets/js/custom.js"></script>

</body>

</html>