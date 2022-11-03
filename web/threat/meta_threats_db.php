<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "insert into tmoc_threat(threat_number,element_name,threat_contents,library_number,writer,threat_reason) value ('".$_POST['threat_number']."','".$_POST['threat_element']."','".$_POST['threat_detail']."','".$_POST['lib_number']."','".$_POST['threat_writer']."','".$_POST['threat_reason']."');";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://localhost:8888/TMoC/web/meta_threats" />
</head>
