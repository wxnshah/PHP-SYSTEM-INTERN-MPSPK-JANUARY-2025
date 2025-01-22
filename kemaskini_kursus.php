<?php
$page = "kemaskini_kursus";

require_once('conn.php');
include('headeruser.php');

$id_course = isset($_GET['id_course']) && $_GET['id_course']!="" ? $_GET['id_course'] : "";

if(isset($_POST['Submit'])) {
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	include("assets/proses/proses_kemaskini_kursus.php");
}

if ($id_course != "") {
	# arahan sql untuk memilih homestay yang masih kosong pada tarikh dipilih
	$arahan_SQL_cari1= "SELECT * FROM lt_course WHERE id_course = '".$id_course."'";
	
	# melaksanakan arahan memilih
	$laksana_arahan_cari=mysqli_query($conn,$arahan_SQL_cari1);
	
	# pembolehubah rekod mengambil data yang di pilih baris demi baris
	$rekod = mysqli_fetch_assoc($laksana_arahan_cari);
	$id_course = $rekod['id_course'];
    
	$data_name_course = $rekod['name_course'];
	
}

include('sweetalerts2.php');

if (!empty($_SESSION)){
?>

                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Kemaskini Kursus</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kemaskini Kursus</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-file-lines me-1"></i>
                                Kemaskini Kursus
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
                                    
                                    <input type="hidden" name="id_course" value="<?php echo $id_course; ?>">
                                    
                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4">Nama Kursus</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Sila Masukkan Nama Kursus" name="name_course" value="<?php echo $data_name_course; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: center;">
                                            <button type="submit" name="Submit" value="Submit" class="btn btn-warning btn-block">
                                                <i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> Kemaskini Kursus
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