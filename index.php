<?php 
require 'include/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>Dashboard - <?= $judul; ?></title>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate.css/animate.min.css">
		<link rel="stylesheet" href="vendor/jscrollpane/jquery.jscrollpane.css">
		<link rel="stylesheet" href="vendor/waves/waves.min.css">
		<link rel="stylesheet" href="vendor/chartist/chartist.min.css">
		<link rel="stylesheet" href="vendor/switchery/dist/switchery.min.css">
		<link rel="stylesheet" href="vendor/morris/morris.css">
		<link rel="stylesheet" href="vendor/jvectormap/jquery-jvectormap-2.0.3.css">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="css/core.css">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="large-sidebar fixed-sidebar fixed-header">
		<div class="wrapper">

			<?php require 'include/sidebar.php'; ?>

			<div class="site-content">
				<!-- Content -->
				<div class="content-area p-y-1">
					<div class="container-fluid">
						<div class="row row-md">
							<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Orders</h6>
										<h1 class="m-b-1">1,325</h1>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Revenue</h6>
										<h1 class="m-b-1">$ 47,855</h1>
									</div>
								</div>
							</div>
						</div>
						<div class="row row-md m-b-2">
							<div class="col-md-12">
								<div class="box bg-white">
									<table class="table table-grey-head m-md-b-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Username</th>
												<th>Project</th>
												<th>Last update</th>
												<th>Progress</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Jonathan Mel</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">First project</span></a>
												</td>
												<td>
													<span class="text-muted">5 minutes ago</span>
												</td>
												<td>
													<progress class="progress progress-success progress-sm d-inline-block m-b-0" value="44" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Larry Hal</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Second project</span></a>
												</td>
												<td>
													<span class="text-muted">3 days ago</span>
												</td>
												<td>
													<progress class="progress progress-danger progress-sm d-inline-block m-b-0" value="75" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Ron Carran</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Third project</span></a>
												</td>
												<td>
													<span class="text-muted">Last monday</span>
												</td>
												<td>
													<progress class="progress progress-warning progress-sm d-inline-block m-b-0" value="20" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Carleton Josiah</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Another project</span></a>
												</td>
												<td>
													<span class="text-muted">5 minutes ago</span>
												</td>
												<td>
													<progress class="progress progress-primary progress-sm d-inline-block m-b-0" value="10" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Wolfe Stevie</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Old project</span></a>
												</td>
												<td>
													<span class="text-muted">3 days ago</span>
												</td>
												<td>
													<progress class="progress progress-info progress-sm d-inline-block m-b-0" value="90" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">6</th>
												<td>Vance Osborn</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Important project</span></a>
												</td>
												<td>
													<span class="text-muted">Last monday</span>
												</td>
												<td>
													<progress class="progress progress-warning progress-sm d-inline-block m-b-0" value="35" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">7</th>
												<td>Jonathan Mel</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">First project</span></a>
												</td>
												<td>
													<span class="text-muted">5 minutes ago</span>
												</td>
												<td>
													<progress class="progress progress-success progress-sm d-inline-block m-b-0" value="44" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">8</th>
												<td>Larry Hal</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Second project</span></a>
												</td>
												<td>
													<span class="text-muted">3 days ago</span>
												</td>
												<td>
													<progress class="progress progress-danger progress-sm d-inline-block m-b-0" value="75" max="100">100%</progress>
												</td>
											</tr>
											<tr>
												<th scope="row">9</th>
												<td>Ron Carran</td>
												<td>
													<a class="text-primary" href="#"><span class="underline">Third project</span></a>
												</td>
												<td>
													<span class="text-muted">Last monday</span>
												</td>
												<td>
													<progress class="progress progress-warning progress-sm d-inline-block m-b-0" value="20" max="100">100%</progress>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php require 'include/footer.php'; ?>
			</div>

		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="vendor/tether/js/tether.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/mwheelIntent.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="vendor/waves/waves.min.js"></script>
		<script type="text/javascript" src="vendor/chartist/chartist.min.js"></script>
		<script type="text/javascript" src="vendor/switchery/dist/switchery.min.js"></script>
		<script type="text/javascript" src="vendor/flot/jquery.flot.min.js"></script>
		<script type="text/javascript" src="vendor/flot/jquery.flot.resize.min.js"></script>
		<script type="text/javascript" src="vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
		<script type="text/javascript" src="vendor/CurvedLines/curvedLines.js"></script>
		<script type="text/javascript" src="vendor/TinyColor/tinycolor.js"></script>
		<script type="text/javascript" src="vendor/sparkline/jquery.sparkline.min.js"></script>
		<script type="text/javascript" src="vendor/raphael/raphael.min.js"></script>
		<script type="text/javascript" src="vendor/morris/morris.min.js"></script>
		<script type="text/javascript" src="vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script type="text/javascript" src="vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="js/demo.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>