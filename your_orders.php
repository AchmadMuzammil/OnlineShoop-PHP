<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if (empty($_SESSION['user_id'])) {
	header('location:login.php');
} else {
?>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="#">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>My Orders</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animsition.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<style type="text/css" rel="stylesheet">
			.indent-small {
				margin-left: 5px;
			}

			.form-group.internal {
				margin-bottom: 0;
			}

			.dialog-panel {
				margin: 10px;
			}

			.datepicker-dropdown {
				z-index: 200 !important;
			}

			.panel-body {
				background: #e5e5e5;
				/* Old browsers */
				background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
				/* FF3.6+ */
				background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
				/* Chrome,Safari4+ */
				background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
				/* Chrome10+,Safari5.1+ */
				background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
				/* Opera 12+ */
				background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
				/* IE10+ */
				background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
				/* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
				font: 600 15px "Open Sans", Arial, sans-serif;
			}

			label.control-label {
				font-weight: 600;
				color: #777;
			}
			@media only screen and (max-width: 760px),
			(min-device-width: 768px) and (max-device-width: 1024px) { }
		</style>

	</head>

	<body>


		<header id="header" class="header-scroll top-header headrom">

			<nav class="navbar navbar-dark">
				<div class="container">
					<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
					<a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/img/logo.jpg" width="40" alt=""> </a>
					<div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
						<ul class="nav navbar-nav">
							<li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
							<li class="nav-item"> <a class="nav-link active" href="restaurants.php">Toko <span class="sr-only"></span></a> </li>

							<?php
							if (empty($_SESSION["user_id"])) {
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							} else {


								echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Pesanan</a> </li>';
								echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

							?>

						</ul>
					</div>
				</div>
			</nav>

		</header>
		<div class="page-wrapper">

			<div class="inner-page-hero bg-image" data-image-src="images/img/1.png">
				<div class="container"> </div>
			</div>
			<div class="result-show">
				<div class="container">
					<div class="row">

					</div>
				</div>
			</div>

			<section class="restaurants-page">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
						</div>
						<div class="col-xs-12">
							<div class="bg-gray">
								<div class="row">

									<table class="table table-bordered table-hover">
										<thead style="background: #404040; color:white;">
											<tr>

												<th>Nama</th>
												<th>Kuantitas</th>
												<th>Harga</th>
												<th>Status</th>
												<th>Tgl-Pemesanan</th>
												<th>Edit</th>

											</tr>
										</thead>
										<tbody>


											<?php

											$query_res = mysqli_query($db, "select * from users_orders where u_id='" . $_SESSION['user_id'] . "'");
											if (!mysqli_num_rows($query_res) > 0) {
												echo '<td colspan="6"><center>Anda belum melakukan pemesanan. </center></td>';
											} else {

												while ($row = mysqli_fetch_array($query_res)) {

											?>
													<tr>
														<td data-column="Item"> <?php echo $row['title']; ?></td>
														<td data-column="Quantity"> <?php echo $row['quantity']; ?></td>
														<td data-column="price">$<?php echo $row['price']; ?></td>
														<td data-column="status">
															<?php
															$status = $row['status'];
															if ($status == "" or $status == "NULL") {
															?>
																<button type="button" class="btn btn-info"><span class="fa fa-bars" aria-hidden="true"></span> Diproses</button>
															<?php
															}
															if ($status == "in process") { ?>
																<button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin" aria-hidden="true"></span> Sedang dikirim!</button>
															<?php
															}
															if ($status == "closed") {
															?>
																<button type="button" class="btn btn-success"><span class="fa fa-check-circle" aria-hidden="true"></span> Terkirim</button>
															<?php
															}
															?>
															<?php
															if ($status == "rejected") {
															?>
																<button type="button" class="btn btn-danger"> <i class="fa fa-close"></i> Dibatalkan</button>
															<?php
															}
															?>

														</td>
														<td data-column="Date"> <?php echo $row['date']; ?></td>
														<td data-column="Action"> <a href="delete_orders.php?order_del=<?php echo $row['o_id']; ?>" onclick="return confirm('Are you sure you want to cancel your order?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a>
														</td>
													</tr>

											<?php }
											} ?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		</section>


		<footer class="footer">
			<div class="row bottom-footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-3 payment-options color-gray">
							<h5>Pembayaran</h5>
							<ul>
								<li>
									<a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
								</li>
								<li>
									<a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
								</li>
								<li>
									<a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
								</li>
								<li>
									<a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
								</li>
								<li>
									<a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-4 address color-gray">
							<h5>Alamat</h5>
							<p>Dusun Wijenan Lor, Rt/Rw 001/002, Desa Singolatren, Kecamatan Singojuruh</p>
							<div class="color-white">
								<a href="https://instagram.com/_chicha.shop?igshid=MXRvODF0YzVicmh4OA=="><i class="fa-brands fa-instagram"></i></a>
								<a href="http://shopee.co.id/chichashop23"><i class="fa-solid fa-cart-shopping"></i></a>
								<a href="https://wa.me/6287889169191/?text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20Anda."><i class="fa-brands fa-whatsapp"></i></a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-5 additional-info color-gray">
							<h5>Informasi</h5>
							<p>Ciptaan Mahasiwa stikom.</p>
						</div>
					</div>
				</div>
			</div>

			</div>
		</footer>

		</div>


		<script src="js/jquery.min.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/animsition.min.js"></script>
		<script src="js/bootstrap-slider.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/headroom.js"></script>
		<script src="js/foodpicky.min.js"></script>
	</body>

</html>
<?php
}
?>