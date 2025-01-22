<?php
$page = "kemaskini_maklumat_pelajar";

require_once('conn.php');
include('headeruser.php');

$id_maklumat = isset($_GET['id_maklumat']) && $_GET['id_maklumat']!="" ? $_GET['id_maklumat'] : "";

if(isset($_POST['Submit'])) {
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	include("assets/proses/proses_kemaskini_maklumat.php");
}

if ($id_maklumat != "") {
	# arahan sql untuk memilih homestay yang masih kosong pada tarikh dipilih
	$arahan_SQL_cari1= "SELECT * FROM tb_maklumat WHERE id_maklumat = '".$id_maklumat."'";
	
	# melaksanakan arahan memilih
	$laksana_arahan_cari=mysqli_query($conn,$arahan_SQL_cari1);
	
	# pembolehubah rekod mengambil data yang di pilih baris demi baris
	$rekod = mysqli_fetch_assoc($laksana_arahan_cari);
	$id_maklumat = $rekod['id_maklumat'];
    
	$data_id_users = $rekod['id_users'];
	$data_id_gender = $rekod['id_gender'];
	$data_tarikh_lahir = $rekod['tarikh_lahir'];
	$data_alamat = $rekod['alamat'];
	$data_no_telefon = $rekod['no_telefon'];
	$data_id_ipta = $rekod['id_ipta'];
	$data_no_matrik = $rekod['no_matrik'];
	$data_id_course = $rekod['id_course'];
	$data_tarikh_mula = $rekod['tarikh_mula'];
	$data_tarikh_tamat = $rekod['tarikh_tamat'];
	
}

if (!empty($_SESSION)){
?>

                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Kemaskini Maklumat Pelajar</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kemaskini Maklumat Pelajar</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-file-lines me-1"></i>
                                Kemaskini Maklumat Pelajar
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST" onSubmit="return capture();">

                                    <input type="hidden" value="<?php echo $id_maklumat; ?>" name="id_maklumat">

                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Gambar Pelajar</label>
                                            <input type="file" class="form-control" name="image_users">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Resume Pelajar</label>
                                            <input type="file" class="form-control" name="resume_users">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Pelajar</label>
                                            <input type="hidden" class="form-control" placeholder="Sila Masukkan Nama Pelajar" name="id_users" value="<?php echo $id_users; ?>">
                                            <input type="text" class="form-control" placeholder="Sila Masukkan Nama Pelajar" value="<?php echo $user_name; ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Jantina</label>
                                            <select class="form-control select2" name="id_gender" required autofocus>
                                                <option value="">Sila Pilih Jantina</option>
                                                <?php
                                                    $rs = dbquery("SELECT * FROM lt_gender");
                                                    while($data=dbarray($rs)){
                                                        $id_gender = $data['id_gender'];
                                                        $name_gender = $data['name_gender'];
                                                    
                                                        // echo "<option value='".$id_gender."'>".$name_gender."</option>";
                                                        echo "<option value='".$id_gender."' ".($id_gender==$data_id_gender?"selected='selected'" :"").">".$name_gender."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tarikh Lahir</label>
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Lahir" name="tarikh_lahir" autocomplete="off" value="<?php echo $data_tarikh_lahir; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat Surat Menyurat</label>
                                            <textarea class="form-control" placeholder="Sila Masukkan Alamat Surat Menyurat" name="alamat" required><?php echo $data_alamat; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>No Telefon</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan No Telefon" name="no_telefon" value="<?php echo $data_no_telefon; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nama IPTA</label>
                                            <select class="form-control select2" name="id_ipta" required autofocus>
                                                <option value="">Sila Pilih Nama IPTA</option>
                                                <?php
                                                    $rs = dbquery("SELECT * FROM lt_ipta");
                                                    while($data=dbarray($rs)){
                                                        $id_ipta = $data['id_ipta'];
                                                        $name_ipta = $data['name_ipta'];
                                                    
                                                        // echo "<option value='".$id_ipta."'>".$name_ipta."</option>";
                                                        echo "<option value='".$id_ipta."' ".($id_ipta==$data_id_ipta?"selected='selected'" :"").">".$name_ipta."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>No Matrik</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan No Matrik" name="no_matrik" value="<?php echo $data_no_matrik; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Nama Kursus</label>
                                            <select class="form-control select2" name="id_course" required autofocus>
                                                <option value="">Sila Pilih Nama Kursus</option>
                                                <?php
                                                    $rs = dbquery("SELECT * FROM lt_course");
                                                    while($data=dbarray($rs)){
                                                        $id_course = $data['id_course'];
                                                        $name_course = $data['name_course'];
                                                    
                                                        // echo "<option value='".$id_course."'>".$name_course."</option>";
                                                        echo "<option value='".$id_course."' ".($id_course==$data_id_course?"selected='selected'" :"").">".$name_course."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Tarikh Mula</label>
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Mula" autocomplete="off" name="tarikh_mula" value="<?php echo $data_tarikh_mula; ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tarikh Tamat</label>
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Tamat" name="tarikh_tamat" autocomplete="off" value="<?php echo $data_tarikh_tamat; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: center;">
                                            <button type="submit" name="Submit" value="Submit" class="btn btn-warning btn-block">
                                                <i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> Kemaskini Maklumat
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