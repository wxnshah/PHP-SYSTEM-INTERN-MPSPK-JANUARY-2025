							<div class="sb-sidenav-menu-heading">Admin Menu</div>
							
							<a class="nav-link collapsed <?php echo ($page == 'tambah_kursus' || $page == 'senarai_kursus') ? "active" : ""; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseKursus" aria-expanded="false" aria-controls="collapseKursus">
								<div class="sb-nav-link-icon"> 
                                    <i class="fa-sharp-duotone fa-solid fa-book"></i>
								</div> Kursus
								<div class="sb-sidenav-collapse-arrow">
									<i class="fas fa-angle-down"></i>
								</div>
							</a>
							<div class="collapse <?php echo ($page == 'tambah_kursus' || $page == 'senarai_kursus') ? "show" : ""; ?>" id="collapseKursus" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link <?php echo ($page == 'tambah_kursus') ? "active" : ""; ?>" href="tambah_kursus.php">
										Tambah Kursus
									</a>
									<a class="nav-link <?php echo ($page == 'senarai_kursus') ? "active" : ""; ?>" href="senarai_kursus.php">
										Senarai Kursus
									</a>
								</nav>
							</div>

							<a class="nav-link collapsed <?php echo ($page == 'tambah_ipta' || $page == 'senarai_ipta') ? "active" : ""; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseIPTA" aria-expanded="false" aria-controls="collapseIPTA">
								<div class="sb-nav-link-icon">
                                    <i class="fa-sharp-duotone fa-solid fa-school"></i>
								</div> IPTA
								<div class="sb-sidenav-collapse-arrow">
									<i class="fas fa-angle-down"></i>
								</div>
							</a>
							<div class="collapse <?php echo ($page == 'tambah_ipta' || $page == 'senarai_ipta') ? "show" : ""; ?>" id="collapseIPTA" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link <?php echo ($page == 'tambah_ipta') ? "active" : ""; ?>" href="tambah_ipta.php">
										Tambah IPTA
									</a>
									<a class="nav-link <?php echo ($page == 'senarai_ipta') ? "active" : ""; ?>" href="senarai_ipta.php">
										Senarai IPTA
									</a>
								</nav>
							</div>

							<a class="nav-link collapsed <?php echo ($page == 'tambah_jantina' || $page == 'senarai_jantina') ? "active" : ""; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseJantina" aria-expanded="false" aria-controls="collapseJantina">
								<div class="sb-nav-link-icon">
                                    <i class="fa-sharp-duotone fa-solid fa-venus-mars"></i>
								</div> Jantina
								<div class="sb-sidenav-collapse-arrow">
									<i class="fas fa-angle-down"></i>
								</div>
							</a>
							<div class="collapse <?php echo ($page == 'tambah_jantina' || $page == 'senarai_jantina') ? "show" : ""; ?>" id="collapseJantina" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link <?php echo ($page == 'tambah_jantina') ? "active" : ""; ?>" href="tambah_jantina.php">
										Tambah Jantina
									</a>
									<a class="nav-link <?php echo ($page == 'senarai_jantina') ? "active" : ""; ?>" href="senarai_jantina.php" href="#">
										Senarai Jantina
									</a>
								</nav>
							</div>

							<div class="sb-sidenav-menu-heading">Maklumat Pelajar</div>
                            <a class="nav-link <?php echo ($page == 'tambah_maklumat_pelajar') ? "active" : ""; ?>" href="tambah_maklumat_pelajar.php">
								<div class="sb-nav-link-icon">
									<i class="fa-sharp-duotone fa-solid fa-user-plus"></i>
								</div> Tambah Maklumat
							</a>
                            <a class="nav-link <?php echo ($page == 'senarai_maklumat_pelajar') ? "active" : ""; ?>" href="senarai_maklumat_pelajar.php">
								<div class="sb-nav-link-icon">
									<i class="fa-sharp-duotone fa-regular fa-list-check"></i>
								</div> Senarai Maklumat
							</a>

							<div class="sb-sidenav-menu-heading">Pengguna</div>

							<a class="nav-link collapsed <?php echo ($page == 'tambah_pengguna' || $page == 'senarai_pengguna') ? "active" : ""; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePengguna" aria-expanded="false" aria-controls="collapsePengguna">
								<div class="sb-nav-link-icon">
									<i class="fa-sharp-duotone fa-solid fa-users"></i>
								</div> Pengguna
								<div class="sb-sidenav-collapse-arrow">
									<i class="fas fa-angle-down"></i>
								</div>
							</a>
							<div class="collapse <?php echo ($page == 'tambah_pengguna' || $page == 'senarai_pengguna') ? "show" : ""; ?>" id="collapsePengguna" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
								<nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link <?php echo ($page == 'tambah_pengguna') ? "active" : ""; ?>" href="tambah_pengguna.php">
										Tambah Pengguna
									</a>
									<a class="nav-link <?php echo ($page == 'senarai_pengguna') ? "active" : ""; ?>" href="senarai_pengguna.php" href="#">
										Senarai Pengguna
									</a>
								</nav>
							</div>