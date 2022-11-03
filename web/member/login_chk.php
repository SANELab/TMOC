<?php
	session_start();
	include('dbconn.php');
	
	$id = addslashes($_POST['id']);
	$pw = addslashes($_POST['pw']);
	$salt = "5427"; # sha256 salt

	if(!$id || !$pw){
		echo "<script>alert('NULL value NOT allowed.');history.back();</script>";
	}

	$pw_hash = hash('sha256', addslashes($_POST['pw']).$salt);

	$query = "SELECT u_id FROM members WHERE u_id='$id' and u_pw='$pw_hash'";
	$res = mysqli_query($dbconn, $query);
	$num = mysqli_num_rows($res);

	if($num == 1){
		$_SESSION['id']=$id;
		if(isset($_SESSION['id'])){
			echo "<script>alert('Login as $id');location.href='index.php';</script>";
		}
		else{
			echo "<script>alert('Login Fail!');history.back();</script>";
		}
	}
	else if($num == 0){
		echo "<script>alert('No Such ID or Wrong PW!');history.back();</script>";
	}
	else{
		echo "<script>alert('Error... Contact ADMIN.');history.back();</script>";
	}
	mysqli_close($dbconn);
?>
