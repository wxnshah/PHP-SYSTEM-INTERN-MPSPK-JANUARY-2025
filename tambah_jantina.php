<?php
$page = "tambah_jantina";

require_once('conn.php');
include('headeruser.php');

if(isset($_POST['Submit'])) {
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	include("assets/proses/proses_tambah_jantina.php");
}

include('sweetalerts2.php');

if (!empty($_SESSION)){
?>

                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Tambah Jantina</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Jantina</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-file-lines me-1"></i>
                                Tambah Jantina
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4">Nama Jantina</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama Jantina" name="name_gender" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: center;">
                                            <button type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block">
                                                <i class="fa-sharp-duotone fa-light fa-plus"></i> Tambah Jantina
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>

                    </div>
                </main>

<?php
} else {
    redirect('login.php');
}
include('footer.php');
?>