<?php
$page = "kemaskini_pengguna";

require_once('conn.php');
include('headeruser.php');

$id_users = isset($_GET['id_users']) && $_GET['id_users']!="" ? $_GET['id_users'] : "";

if(isset($_POST['Submit'])) {
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	include("assets/proses/proses_kemaskini_pengguna.php");
}

if ($id_users != "") {
	# arahan sql untuk memilih homestay yang masih kosong pada tarikh dipilih
	$arahan_SQL_cari1= "SELECT * FROM tb_users WHERE id_users = '".$id_users."'";
	
	# melaksanakan arahan memilih
	$laksana_arahan_cari=mysqli_query($conn,$arahan_SQL_cari1);
	
	# pembolehubah rekod mengambil data yang di pilih baris demi baris
	$rekod = mysqli_fetch_assoc($laksana_arahan_cari);
	$id_users = $rekod['id_users'];
    
	$data_user_name = $rekod['user_name'];
	$data_user_ic = $rekod['user_ic'];
	$data_user_email = $rekod['user_email'];
	$data_user_level = $rekod['user_level'];
	
}

include('sweetalerts2.php');

if (!empty($_SESSION)){
?>

                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Kemaskini Pengguna</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kemaskini Pengguna</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-file-lines me-1"></i>
                                Kemaskini Pengguna
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
                                    
                                    <input type="hidden" name="id_users" value="<?php echo $id_users; ?>">

                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Pengguna</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama Pengguna" name="reg_user_name" value="<?php echo $data_user_name; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No Kad Pengenalan Pengguna</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan No Kad Pengenalan Pengguna" name="reg_user_ic" value="<?php echo $data_user_ic; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Email Pengguna</label>
                                            <input type="email" class="form-control" placeholder="Sila Masukkan Email Pengguna" name="reg_user_email" value="<?php echo $data_user_email; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Kata Laluan Pengguna</label>
                                            <input type="password" class="form-control" placeholder="Sila Masukkan Kata Laluan Pengguna" name="reg_password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Tahap Pengguna</label>
                                            <select class="form-control select2" name="reg_user_level" required autofocus>
                                                <option value="">Sila Pilih Tahap Pengguna</option>
                                                <?php
                                                    $rs = dbquery("SELECT * FROM lt_level");
                                                    while($data=dbarray($rs)){
                                                        $id_level = $data['id_level'];
                                                        $name_level = $data['name_level'];
                                                    
                                                        // echo "<option value='".$id_level."'>".$name_level."</option>";
                                                        echo "<option value='".$id_level."' ".($id_level==$data_user_level?"selected='selected'" :"").">".$name_level."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: center;">
                                            <button type="submit" name="Submit" value="Submit" class="btn btn-warning btn-block">
                                                <i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> Kemaskini Pengguna
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