<?php
$page = "tambah_maklumat_pelajar";

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
	include("assets/proses/proses_tambah_maklumat.php");
}

include('sweetalerts2.php');

if (!empty($_SESSION)){
?>

                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Tambah Maklumat Pelajar</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Maklumat Pelajar</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-file-lines me-1"></i>
                                Tambah Maklumat Pelajar
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST" onSubmit="return capture();">
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
                                                    
                                                        echo "<option value='".$id_gender."'>".$name_gender."</option>";
                                                        // echo "<option value='".$id_department."' ".($id_department==$data_dept?"selected='selected'" :"").">".$name_department."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Tarikh Lahir</label>
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Lahir" name="tarikh_lahir" autocomplete="off" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat Surat Menyurat</label>
                                            <textarea class="form-control" placeholder="Sila Masukkan Alamat Surat Menyurat" name="alamat" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>No Telefon</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan No Telefon" name="no_telefon" required>
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
                                                    
                                                        echo "<option value='".$id_ipta."'>".$name_ipta."</option>";
                                                        // echo "<option value='".$id_department."' ".($id_department==$data_dept?"selected='selected'" :"").">".$name_department."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>No Matrik</label>
                                            <input type="text" class="form-control" placeholder="Sila Masukkan No Matrik" name="no_matrik" required>
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
                                                    
                                                        echo "<option value='".$id_course."'>".$name_course."</option>";
                                                        // echo "<option value='".$id_department."' ".($id_department==$data_dept?"selected='selected'" :"").">".$name_department."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label>Tarikh Mula</label>
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Mula" autocomplete="off" name="tarikh_mula" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tarikh Tamat</label>
                                            <input type="text" class="form-control datepicker" placeholder="Sila Masukkan Tarikh Tamat" name="tarikh_tamat" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 mt-3" style="text-align: center;">
                                            <button type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block">
                                                <i class="fa-sharp-duotone fa-light fa-plus"></i> Tambah Maklumat
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