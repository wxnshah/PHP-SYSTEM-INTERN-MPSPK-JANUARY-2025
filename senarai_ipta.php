<?php
$page = "senarai_ipta";

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
	include("assets/proses/proses_padam_ipta.php");
}

if (!empty($_SESSION)){

include('sweetalerts2.php');

?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Senarai IPTA</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Senarai IPTA</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Senarai IPTA
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama IPTA</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama IPTA</th>
                                            <th>Kemaskini</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $result = dbquery("SELECT * FROM lt_ipta");
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
                                                        <p>".$data['name_ipta']."</p>
                                                    </td>
                                                    <td align='center' width='1%'>
                                                        <a href='kemaskini_ipta.php?id_ipta=".$data['id_ipta']."'><i class='fas fa-edit fa-2x'></i></a>&nbsp;&nbsp;
                                                        <a href='".htmlspecialchars($_SERVER['PHP_SELF'])."?delete_id=".$data['id_ipta']."' onClick=\"return deletebuttonask()\"><i class='fas fa-trash fa-2x'></i></a>
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