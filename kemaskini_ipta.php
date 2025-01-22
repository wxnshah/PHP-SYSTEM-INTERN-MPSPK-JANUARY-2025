<?php
$page = "kemaskini_ipta";

require_once('conn.php');
include('headeruser.php');

$id_ipta = isset($_GET['id_ipta']) && $_GET['id_ipta']!="" ? $_GET['id_ipta'] : "";

if(isset($_POST['Submit'])) {
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	include("assets/proses/proses_kemaskini_ipta.php");
}

if ($id_ipta != "") {
	# arahan sql untuk memilih homestay yang masih kosong pada tarikh dipilih
	$arahan_SQL_cari1= "SELECT * FROM lt_ipta WHERE id_ipta = '".$id_ipta."'";
	
	# melaksanakan arahan memilih
	$laksana_arahan_cari=mysqli_query($conn,$arahan_SQL_cari1);
	
	# pembolehubah rekod mengambil data yang di pilih baris demi baris
	$rekod = mysqli_fetch_assoc($laksana_arahan_cari);
	$id_ipta = $rekod['id_ipta'];
    
	$data_name_ipta = $rekod['name_ipta'];
	
}

include('sweetalerts2.php');

if (!empty($_SESSION)){
?>

                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Kemaskini IPTA</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kemaskini IPTA</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-file-lines me-1"></i>
                                Kemaskini IPTA
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
                                    
                                    <input type="hidden" name="id_ipta" value="<?php echo $id_ipta; ?>">

                                    <div class="form-group row">
                                        <div class="form-group col-md-12">
                                            <label>Nama Kursus</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama IPTA" name="name_ipta" value="<?php echo $data_name_ipta; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: center;">
                                            <button type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block">
                                                <i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> Kemaskini IPTA
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