<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Dashboard - SB Admin</title>
		
		<!-- Styling / Icons CSS -->
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/all.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/sharp-light.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/sharp-regular.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/sharp-solid.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/sharp-thin.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/duotone-light.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/duotone-regular.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/duotone-thin.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/sharp-duotone-light.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/sharp-duotone-regular.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/sharp-duotone-solid.css" />
        <link rel="stylesheet" type="text/css" href="css/v6.7.2/sharp-duotone-thin.css" />
		<!-- End Styling / Icons CSS -->
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" type="text/css" href="css/datatables/dataTables.bootstrap5.min.css">
		<link rel="stylesheet" type="text/css" href="css/datatables/buttons.bootstrap5.min.css">
		<!-- End Datatables CSS -->
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" type="text/css" href="css/select2/select2.min.css" />
		<link rel="stylesheet" type="text/css" href="css/select2/select2-bootstrap-5-theme.min.css" />
		<!-- End Select2 CSS -->
		
		<!-- DatePicker CSS -->
		<link rel="stylesheet" type="text/css" href="css/datepicker/bootstrap-datepicker.min.css" />
		<!-- End DatePicker CSS -->
		
		<!-- SweetAlert2 -->
		<link rel="stylesheet" type="text/css" href="assets/libs/sweetalert2/sweetalert2.min.css" />
		<!-- End SweetAlert2 -->
		
		<script src="js/jquery-3.7.1.js"></script>
		
	</head>
	<body class="sb-nav-fixed">
		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
			<!-- Navbar Brand-->
			<a class="navbar-brand ps-3" href="index.php">System Intern</a>
			<!-- Sidebar Toggle-->
			<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
				<i class="fas fa-bars"></i>
			</button>
			<!-- Navbar Search-->
			<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
				<div class="input-group">
					<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
					<button class="btn btn-primary" id="btnNavbarSearch" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</form>
			<!-- Navbar-->
			<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-user fa-fw"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
						<li>
							<a class="dropdown-item" href="#!">Settings</a>
						</li>
						<li>
							<a class="dropdown-item" href="#!">Activity Log</a>
						</li>
						<li>
							<hr class="dropdown-divider" />
						</li>
						<li>
							<a class="dropdown-item" href="#!">Logout</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="layoutSidenav">
			<div id="layoutSidenav_nav">
				<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
					<div class="sb-sidenav-menu">
						<div class="nav">
                            
							<div class="sb-sidenav-menu-heading">Laman Utama</div>
							<a class="nav-link <?php echo ($page == 'index') ? "active" : ""; ?> " href="index.php">
								<div class="sb-nav-link-icon">
                                    <i class="fa-sharp-duotone fa-solid fa-house"></i>
								</div> Dashboard
							</a>

							<?php
								if($user_level == 1){
									// User Level 1 [Admin]
									include('header_admin.php');
								} else {
									// User Level 2 [Student]
									include('header_student.php');
								}
							?>

							<div class="sb-sidenav-menu-heading">Session</div>
                            <a class="nav-link" href="logout.php?logout=yes" onClick="return logoutask();">
								<div class="sb-nav-link-icon">
									<i class="fa-sharp-duotone fa-solid fa-right-from-bracket"></i>
								</div> Log Keluar
							</a>
							
						</div>
					</div>
					<div class="sb-sidenav-footer">
						<div class="small">Logged in as:</div> <?php echo $user_name; ?>
					</div>
				</nav>
			</div>
            <div id="layoutSidenav_content">