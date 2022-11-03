<?php
	session_start();
	include('dbconn.php');
	
	$id = addslashes($_POST['id']);
	$current_password = addslashes($_POST['current_password']);
	$pw = addslashes($_POST['pw']);
	$pw_confirm = addslashes($_POST['pw_confirm']);
	$name = addslashes($_POST['name']);
	$wallet_address = addslashes($_POST['wallet_address']);
	#$now_date = date("Y-m-d H:i:s");
	$salt = "5427"; # sha256 salt

	if(!$id || !$current_password){
		echo "<script>alert('NULL value NOT allowed.');history.back();</script>";
	}

	$old_pw_hash = hash('sha256', addslashes($current_password).$salt);
	$chk_name = "SELECT u_name FROM members WHERE u_id='$id' and u_pw='$old_pw_hash'";
	$res_name = mysqli_query($dbconn, $chk_name);
	$num_name = mysqli_num_rows($res_name);

	if($num_name == 1){
		if(isset($pw) and isset($pw_confirm)){
			if($pw != $pw_confirm){
				echo "<script>alert('Passwords do not match!');history.back();</script>";
			}
			else if($current_password == $pw){
				echo "<script>alert('Same as old password!');history.back();</script>";
			}
			$query = "UPDATE members SET u_pw='$pw' where u_id='$id';";
		}
		if(isset($name)){
			$query += "UPDATE members SET u_name='$name' where u_id='$id';";
		}
		if(isset($wallet_address)){
			$query += "UPDATE members SET u_walletaddress='$wallet_address' where u_id='$id';";
		}
		mysqli_query($dbconn, $query);
	}
	else{
		#$query = "INSERT INTO members (u_id, u_pw, u_name, u_walletaddress, u_date) VALUES ('$id', '$pw_hash', '$name', '$wallet_address', '$now_date')";
		echo "<script>alert('Current password is wrong!');history.back();</script>";
	}
	mysqli_close($dbconn);
?>