<?PHP 
# menyemak kewujudan data POST
if (!empty($_POST))
{

	# mengambil data POST
	$name_gender = $_POST['name_gender'];
    
	#pengesahan data
	if (empty ($name_gender)) 
    {
		echo "<script>
			setTimeout(function() {
				Swal.fire({
					position: 'top-end', showConfirmButton: false, titleText: 'Gagal !', text: 'Data Tidak Lengkap !', icon: 'error', timerProgressBar: true, timer: 3000
				})
			}, 600);
		</script>";

	} else {
		# SQL to insert data
        // Note: If image_users or resume_users is NULL, it will be treated as NULL in the query
        $arahan_sql_simpan = "INSERT INTO lt_gender(name_gender)VALUES('$name_gender')";

		#melaksanakan proses menyimpan data dalam syarat if
		if(mysqli_query($conn,$arahan_sql_simpan))
		{
			#jika proses menyimpan berjaya,papar info dan buka laman add.php
			//echo "<script>alert('Kemasukan Data Berjaya')</script>";
			redirect("senarai_jantina.php?success=1");
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
			redirect("tambah_jantina.php");
		}
	}

}
?>