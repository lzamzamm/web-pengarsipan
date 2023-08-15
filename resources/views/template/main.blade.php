<!DOCTYPE html>
<html lang="en">

<head>
	@include('components.header')

</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-closed sidebar-collapse">
	<div class="wrapper">

		<!-- Preloader -->

		<!-- Navbar -->
		@include('components.navbar')
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		@include('components.sidebar')

		<div id="date-container"></div>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">  </h1>
						</div><!-- /.col -->

						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="../#">Home</a></li>
								<li class="breadcrumb-item active">Dashboard v1</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title font-weight-bolder">Cash Flow</h3>
								</div>
								<div class="card-body">
									<div>
										@yield('container')
									</div>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
					</div>
				</div>
		</div>
		</section>

	</div><!-- /.row -->
	</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->




	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->


	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	@include('components.footer')
</body>

</html>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
	integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
	crossorigin="anonymous"></script>

<script src="./script.js"></script>