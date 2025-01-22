<?php
$page = "senarai_pengguna";

require_once('conn.php');
include('headeruser.php');

if(isset($_GET['delete_id'])) {
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	include("assets/proses/proses_padam_pengguna.php");
}

if (!empty($_SESSION)){

include('sweetalerts2.php');

?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Senarai Pengguna</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Senarai Pengguna</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Senarai Pengguna
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pengguna</th>
                                            <th>No Kad Pengenalan Pengguna</th>
                                            <th>Email Pengguna</th>
                                            <th>Tahap Pengguna</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Pengguna</th>
                                        <th>No Kad Pengenalan Pengguna</th>
                                        <th>Email Pengguna</th>
                                        <th>Tahap Pengguna</th>
                                        <th>Kemaskini</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $result = dbquery("SELECT * FROM tb_users");
                                            if(dbrows($result)) {
                                                $i=0;
                                                while($data=dbarray($result)) {
                                                $i++;
                                                echo "
                                                <tr>
                                                    <td align='center'>
                                                        ".$i."
                                                    </td>
                                                    <td>
                                                        <p>".$data['user_name']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['user_ic']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".$data['user_email']."</p>
                                                    </td>
                                                    <td>
                                                        <p>".getDataFromTable('name_level',$data['user_level'],'id_level','lt_level')."</p>
                                                    </td>
                                                    <td align='center' width='1%'>
                                                        <a href='kemaskini_pengguna.php?id_users=".$data['id_users']."'><i class='fas fa-edit fa-2x'></i></a>&nbsp;&nbsp;
                                                        <a href='".htmlspecialchars($_SERVER['PHP_SELF'])."?delete_id=".$data['id_users']."' onClick=\"return deletebuttonask()\"><i class='fas fa-trash fa-2x'></i></a>
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