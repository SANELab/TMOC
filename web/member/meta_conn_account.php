
<?php
  include('dbconn.php');
  $id=$_SESSION['id'];
  $sql="SELECT u_walletaddress FROM members WHERE u_id='".$id."'"; // 쿼리 넣는걸로 변경
  $result=mysqli_query($dbconn, $sql);
  $record=mysqli_fetch_array($result);
?>
