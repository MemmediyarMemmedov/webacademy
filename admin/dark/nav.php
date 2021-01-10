
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- User Profile-->
				<div class="user-profile">
					<div class="user-pro-body">
						<div><img src="../../<?=$profil['sekil']?>" alt="user-img" class="img-circle"></div>
						<div class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$profil['adsoyad']?> <span class="caret"></span></a>
							<div class="dropdown-menu animated flipInY">
								<!-- text-->
								<a href="profil.php" class="dropdown-item"><i class="ti-user"></i>Profil</a>
								<!-- text-->
								<div class="dropdown-divider"></div>
								<!-- text-->
								<a href="logout.php" class="dropdown-item"><i class="fas fa-power-off"></i> Çıxış</a>
								<!-- text-->
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
					<li class="nav-small-cap">--- Menu</li>
					<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Admin Əlavə</span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="admins.php">Siyahı </a></li>
                                <li><a href="admin-add.php">Əlavə Et </a></li>
							</ul>
						</li>

						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Nizamlamalar </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="general-settings.php">Ümumi Nizamlamalar </a></li>
								<li><a href="slide.php">Slide</a></li>
                                <li><a href="contact.php">Əlaqə Nizamlamaları </a></li>
								<li><a href="about.php">Haqqında</a></li>

							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Portfolio </span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="portfolio.php">Siyahı</a></li>
                                <li><a href="portfolio-add.php">Əlavə Et</a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Blog </span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="blogs.php">Siyahı</a></li>
                                <li><a href="blog-add.php">Əlavə Et</a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Xidmətlər </span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="services.php">Siyahı</a></li>
                                <li><a href="services-add.php">Əlavə Et</a></li>
							</ul>
						</li>
						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Təlimlər </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="training.php">Siyahı</a></li>
								<li><a href="qeydiyyat.php">Qeydiyyat</a></li>
                                <li><a href="training-add.php">Əlavə Et</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->