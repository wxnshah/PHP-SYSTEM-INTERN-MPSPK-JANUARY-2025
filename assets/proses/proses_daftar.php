<?PHP 
# menyemak kewujudan data POST
if (!empty($_POST))
{

	# mengambil data POST
	$user_name = $_POST['reg_user_name'];
	$user_ic = $_POST['reg_user_ic'];
	$user_email = $_POST['reg_user_email'];
    $password = hash_hmac("sha512", $_POST['reg_password'], "majlisperbandaransungaipetani");
    
	#pengesahan data
	if (empty ($user_name) || empty ($user_ic) || empty ($user_email) || empty ($password)) {
		die("<script>alert('Data tidak lengkap.');
		window.history.back();</script>");
	}

	# Check if user_ic or user_email already exists in the database
	$check_sql = "SELECT id_users FROM tb_users WHERE (user_ic = '$user_ic' OR user_email = '$user_email')";
	$check_result = mysqli_query($conn, $check_sql);

	if (mysqli_num_rows($check_result) > 0) {
		# If user_ic or user_email exists, show error message
		echo "<script>
			setTimeout(function() {
				Swal.fire({
					position: 'top-end', showConfirmButton: false, titleText: 'Gagal !', text: 'IC atau Email telah wujud !', icon: 'error', timerProgressBar: true, timer: 3000
				})
			}, 600);
		</script>";
	} else {
		#arahan SQL untuk menyimpan data	
		$arahan_sql_simpan = "INSERT INTO tb_users(user_name,user_ic,user_email,password,user_level)VALUES('$user_name','$user_ic','$user_email','$password','2')";
		// echo "INSERT INTO tb_users(user_name,user_ic,user_email,password)VALUES('$user_name','$user_ic','$user_email','$password')";

		#melaksanakan proses menyimpan data dalam syarat if
		if(mysqli_query($conn,$arahan_sql_simpan)) {
			#jika proses menyimpan berjaya,papar info dan buka laman login.php
			redirect("login.php?success=1");
		}
		else
		{	
			#jika proses menyimpan gagal,papar laman sebelumnya
			echo"<script>alert('Gagal');
			window.history.back();</script>";
		}
	}

}
?>