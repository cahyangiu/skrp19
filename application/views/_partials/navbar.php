<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
		<a class="navbar-brand brand-logo" href="<?php echo base_url('assets') ?>/index.html">
			<div class="brand-teks">
				<span style="font-size: 40px">SIMONAP</span><br>
				<span style="font-size: 27px">Bone Bolango</span>
			</div>
			<!-- <img src="<?php echo base_url('assets') ?>/images/logo.svg" alt="logo" /> -->
		</a>
		<a class="navbar-brand brand-logo-mini" href="<?php echo base_url('assets') ?>/index.html">
			<img src="<?php echo base_url('assets') ?>/images/logo-mini.svg" alt="logo" />
		</a>

	</div>
	<div class="navbar-menu-wrapper d-flex align-items-center">
		<ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
			<li class="nav-item active">
				<a href="#" class="nav-link">
					<i class="fa fa-home"></i>
					Beranda
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="fa fa-gear"></i>Setelan</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="fa fa-list-alt"></i>Riwayat</a>
			</li>
		</ul>
		<ul class="navbar-nav navbar-nav-right">
			<li class="nav-item dropdown d-none d-xl-inline-block">
				<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
					<span class="profile-text">Halo, Cahya Ngiu !</span>
					<img class="img-xs rounded-circle" src="<?php echo base_url('assets') ?>/images/faces/cahya.jpg" alt="Profile image">
				</a>
				<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
					<a class="dropdown-item mt-2">
						Manajemen Akun
					</a>
					<a class="dropdown-item">
						Ubah Profil
					</a>
					<a class="dropdown-item">
						Ubah Password
					</a>
					<a class="dropdown-item">
						Log Out
					</a>
				</div>
			</li>
		</ul>
		<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
			<span class="icon-menu"></span>
		</button>
	</div>
</nav>
