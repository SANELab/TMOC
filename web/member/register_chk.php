<?php
	session_start();
	include('dbconn.php');
	
	$id = addslashes($_POST['id']);
	$pw = addslashes($_POST['pw']);
	$name = addslashes($_POST['name']);
	$wallet_address = addslashes($_POST['wallet_address']);
	$now_date = date("Y-m-d H:i:s");
	$salt = "5427"; # sha256 salt

	if(!$id || !$pw || !$name || !$wallet_address){
		echo "<script>alert('NULL value NOT allowed.');history.back();</script>";
	}

	$pw_hash = hash('sha256', addslashes($_POST['pw']).$salt);

	$chk = "SELECT u_name FROM members WHERE u_id='$id'";
	$res = mysqli_query($dbconn, $chk);
	$num = mysqli_num_rows($res);

	if($num != 0){
		echo "<script>alert('ID already Exists...');history.back();</script>";
		exit();
	}
	else{
		$query = "INSERT INTO members (u_id, u_pw, u_name, u_walletaddress, u_date) VALUES ('$id', '$pw_hash', '$name', '$wallet_address', '$now_date')";
		mysqli_query($dbconn, $query);
		echo "<script>alert('Join Successfully')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
	mysqli_close($dbconn);
?>
