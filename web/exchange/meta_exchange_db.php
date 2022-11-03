<?php
include('dbconn.php');
$title = 'TMOC';

$remaining = $_POST['remaining'];
//$sql_string = "update members set u_point = ;";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://localhost:8888/TMoC/web/meta_exchange" />
</head>
