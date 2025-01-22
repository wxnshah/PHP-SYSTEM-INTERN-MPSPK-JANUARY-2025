<?php
$page = "index";

require_once('conn.php');
include('headeruser.php');

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
if (!empty($_SESSION)){
?>
			
				<main>
					<div class="container-fluid px-4">
						<h1 class="mt-4">Dashboard</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
						<div class="row">
							<div class="col-xl-3 col-md-6">
								<div class="card bg-primary text-white mb-4">
									<div class="card-body">Jumlah Pengguna
										<h4 class="mt-3">
											<?php echo dbcount('id_users','tb_users', '', $conn); ?>
										</h4>
									</div>
									<div class="card-footer d-flex align-items-center justify-content-between">
										<a class="small text-white stretched-link" href="#">View Details</a>
										<div class="small text-white">
											<i class="fas fa-angle-right"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-warning text-white mb-4">
									<div class="card-body">
										Jumlah Maklumat Pelajar
										<h4 class="mt-3">
											<?php echo dbcount('id_maklumat','tb_maklumat', '', $conn); ?>
										</h4>
									</div>
									<div class="card-footer d-flex align-items-center justify-content-between">
										<a class="small text-white stretched-link" href="#">View Details</a>
										<div class="small text-white">
											<i class="fas fa-angle-right"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-success text-white mb-4">
									<div class="card-body">
										Jumlah Tamat Latihan
										<p class="mt-3">0</p>
									</div>
									<div class="card-footer d-flex align-items-center justify-content-between">
										<a class="small text-white stretched-link" href="#">View Details</a>
										<div class="small text-white">
											<i class="fas fa-angle-right"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-danger text-white mb-4">
									<div class="card-body">
										Jumlah Dalam Latihan
										<p class="mt-3">0</p>
									</div>
									<div class="card-footer d-flex align-items-center justify-content-between">
										<a class="small text-white stretched-link" href="#">View Details</a>
										<div class="small text-white">
											<i class="fas fa-angle-right"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Senarai Maklumat Pelajar
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Resume</th>
                                            <th>Nama</th>
                                            <th>Jantina</th>
                                            <th>Tarikh Lahir</th>
                                            <th>Alamat</th>
                                            <th>No Telefon</th>
                                            <th>Nama IPTA</th>
                                            <th>No Matrik</th>
                                            <th>Tarikh Mula</th>
                                            <th>Tarikh Tamat</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Resume</th>
                                            <th>Nama</th>
                                            <th>Jantina</th>
                                            <th>Tarikh Lahir</th>
                                            <th>Alamat</th>
                                            <th>No Telefon</th>
                                            <th>Nama IPTA</th>
                                            <th>No Matrik</th>
                                            <th>Tarikh Mula</th>
                                            <th>Tarikh Tamat</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $result = dbquery("SELECT * FROM tb_maklumat");
                                            if(dbrows($result)) {
                                                $i=0;
                                                while($data=dbarray($result)) {
                                                $i++;
                                                echo "
                                                <tr>
                                                    <td align='center'>
                                                        ".$i."
                                                    </td>
                                                    <td>";
                                                    ?>
                                                    <?php
                                                        $image_users = $data['image_users'];
                                                        if($image_users != "" && $image_users != NULL){
                                                            echo "<img src='assets/uploads/".$image_users."' class='rounded-circle' alt='img' style='width: 50px; height: 50px; object-fit: cover; border-radius: 50%;'>";
                                                        } else {
                                                            echo "<img src='assets/img/user.png' class='rounded-circle' alt='img' style='width: 50px; height: 50px; object-fit: cover; border-radius: 50%;'>";
                                                        }
                                                    ?>
                                                    <?php
                                                    echo "
                                                    </td>
                                                    <td>";
                                                    ?>
                                                    <?php
                                                        $resume_users = $data['resume_users'];
                                                        if($resume_users != "" && $resume_users != NULL){
                                                            echo "
                                                            <a href='assets/resume/" . $resume_users . "' target='_blank'>
                                                                <p>Resume " . getDataFromTable('user_name', $data['id_users'], 'id_users', 'tb_users') . "</p>
                                                            </a>
                                                            ";
                                                        } else {
                                                            echo "<p>Tiada Resume</p>";
                                                        }
                                                    ?>
                                                    <?php
                                                    echo "
                                                    </td>
                                                    <td>
                                                        <p>".getDataFromTable('user_name',$data['id_users'],'id_users','tb_users')."</p>
                                                    </td>
                                                    <td>
                                                        <p>".getDataFromTable('name_gender',$data['id_gender'],'id_gender','lt_gender')."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['tarikh_lahir']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['alamat']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['no_telefon']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['id_ipta']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['no_matrik']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['tarikh_mula']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['tarikh_tamat']."</p>
                                                    </td>
                                                    <td align='center' width='1%'>
                                                        <a href='kemaskini_maklumat_pelajar.php?id_maklumat=".$data['id_maklumat']."'><i class='fas fa-edit fa-2x'></i></a>&nbsp;&nbsp;
                                                        <a href='".htmlspecialchars($_SERVER['PHP_SELF'])."?delete_id=".$data['id_maklumat']."' onClick=\"return deletebuttonask()\"><i class='fas fa-trash fa-2x'></i></a>
                                                    </td>
                                                </tr>";
                                                }   
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
					</div>
				</main>
<?php
} else {
	redirect('login.php');
}
include('footer.php');
?>
		
