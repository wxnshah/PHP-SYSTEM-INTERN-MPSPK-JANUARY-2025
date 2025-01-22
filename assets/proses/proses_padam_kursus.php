<?php
$id_course = isset($_GET['delete_id']) && $_GET['delete_id']!="" ? $_GET['delete_id'] : "";

#arahan SQL untuk padam data
$arahan_sql_kemaskini = "DELETE FROM lt_course WHERE id_course = '".$id_course."'";
	
#melaksanakan proses menyimpan data dalam syarat if
	if(mysqli_query($conn, $arahan_sql_kemaskini))
	{
		#jika proses menyimpan berjaya,papar info dan buka laman add.php
		//echo "<script>alert('Data Berjaya Dipadam')</script>";
		redirect("senarai_kursus.php?success=3");
	}
	else
	{	
		#jika proses menyimpan gagal,papar laman sebelumnya
        echo "<script>
        setTimeout(function() {
            Swal.fire({
                position: 'top-end', showConfirmButton: false, titleText: 'Gagal !', text: 'Gagal !', icon: 'error', timerProgressBar: true, timer: 3000
            })
        }, 600);
        </script>";
        redirect("kemaskini_kursus.php");
	}
?>