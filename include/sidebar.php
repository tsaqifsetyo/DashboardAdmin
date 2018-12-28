<!-- Sidebar -->
			<div class="site-sidebar-overlay"></div>
			<div class="site-sidebar">
				<a class="logo" href="<?= $link; ?>">
					<span class="l-text"><?= $judul; ?></span>
					<span class="l-icon"></span>
				</a>
				<div class="custom-scroll custom-scroll-light">
					<ul class="sidebar-menu">
						<li class="menu-title m-t-0-5">Menu Utama</li>
						<li>
							<a href="<?= $link; ?>" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-dashboard"></i></span>
								<span class="s-text">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="<?= $link; ?>/page/kelola-siswa" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-user"></i></span>
								<span class="s-text">Kelola Siswa</span>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Header -->
			<div class="site-header">
				<nav class="navbar navbar-light">
					<ul class="nav navbar-nav">
						<li class="nav-item m-r-1 hidden-lg-up">
							<a class="nav-link collapse-button" href="#">
								<i class="ti-menu"></i>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-xs-right">
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
								<div class="avatar box-32">
									<img src="<?= $link; ?>/img/avatars/1.jpg" alt="">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right animated flipInY">
								<a class="dropdown-item" href="#">
									<i class="ti-email m-r-0-5"></i> Inbox
								</a>
								<a class="dropdown-item" href="#">
									<i class="ti-user m-r-0-5"></i> Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="ti-settings m-r-0-5"></i> Settings
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="ti-help m-r-0-5"></i> Help</a>
								<a class="dropdown-item" href="#"><i class="ti-power-off m-r-0-5"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>