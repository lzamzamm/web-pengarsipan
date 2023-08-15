<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="../index3.html" class="brand-link">
		<span class="brand-text font-weight-light">Web-Arsip</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			{{-- <div class="image">
				<img src="../template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div> --}}
			<div class="info">
				<a href="../#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column nav-compact" data-widget="treeview" role="menu"
				data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->

				<li class="nav-item">
					<a id="dsb-link" href="../index.php" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Home
							<!-- <span class="right badge badge-danger">New</span> -->
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="../#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Berkas
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../inventaris/daftar-barang.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Statistik Berkas</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../inventaris/tambah-barang.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Input Berkas</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="../#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Arsip
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../kategori/daftar-kategori.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Input Arsip</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../kategori/daftar-kategori.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Input Box</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="../#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Peminjaman
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../kasir/buat-pesanan.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Statistik Peminjaman</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../kasir/daftar-invoice.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Input Peminjaman</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../kasir/daftar-invoice.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Kembalikan Peminjaman</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../kasir/daftar-invoice.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Manage Peminjaman</p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>