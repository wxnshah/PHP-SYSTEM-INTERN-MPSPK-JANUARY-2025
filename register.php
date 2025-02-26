<?php
require_once("conn.php");

if(isset($_POST['Submit'])) {
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	include("assets/proses/proses_daftar.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
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
        <script src="js/jquery-3.7.1.js"></script>
        <!-- SweetAlert2 -->
        <link rel="stylesheet" type="text/css" href="assets/libs/sweetalert2/sweetalert2.min.css"/>
        <!-- End SweetAlert2 -->
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="reg_user_name" required />
                                                        <label for="inputFirstName">Nama Penuh</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="reg_user_ic" required />
                                                        <label for="inputLastName">No Kad Pengenalan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="email" placeholder="Enter your first name" name="reg_user_email" required />
                                                        <label for="inputFirstName">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="password" placeholder="Enter your last name" name="reg_password" required />
                                                        <label for="inputLastName">Kata Laluan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block mb-2">Create Account</button>
                                                    <button type="reset" class="btn btn-danger btn-block">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/bootstrap@5.2.3/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Sweet Alerts js ends -->   
    </body>
</html>
