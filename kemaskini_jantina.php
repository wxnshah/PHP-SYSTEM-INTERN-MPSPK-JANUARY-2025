<?php
$page = "kemaskini_jantina";

require_once('conn.php');
include('headeruser.php');

$id_gender = isset($_GET['id_gender']) && $_GET['id_gender']!="" ? $_GET['id_gender'] : "";

if(isset($_POST['Submit'])) {
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	include("assets/proses/proses_kemaskini_jantina.php");
}

if ($id_gender != "") {
	# arahan sql untuk memilih homestay yang masih kosong pada tarikh dipilih
	$arahan_SQL_cari1= "SELECT * FROM lt_gender WHERE id_gender = '".$id_gender."'";
	
	# melaksanakan arahan memilih
	$laksana_arahan_cari=mysqli_query($conn,$arahan_SQL_cari1);
	
	# pembolehubah rekod mengambil data yang di pilih baris demi baris
	$rekod = mysqli_fetch_assoc($laksana_arahan_cari);
	$id_gender = $rekod['id_gender'];
    
	$data_name_gender = $rekod['name_gender'];
	
}

include('sweetalerts2.php');

if (!empty($_SESSION)){
?>

                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Kemaskini Jantina</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kemaskini Jantina</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-file-lines me-1"></i>
                                Kemaskini Jantina
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
                                    
                                    <input type="hidden" name="id_gender" value="<?php echo $id_gender; ?>">

                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <label>Nama Jantina</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama Jantina" name="name_gender" value="<?php echo $data_name_gender; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: center;">
                                            <button type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block">
                                                <i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> Kemaskini Jantina
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