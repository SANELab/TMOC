<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "insert into tmoc_attacklibrary(library_number,library_element,library_stride,library_contents,library_url,library_writer)
 value ('".$_POST['no']."','".$_POST['lib_element']."','".$_POST['stride']."','".$_POST['contents']."',
 '".$_POST['url']."','".$_POST['lib_writer']."');";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://localhost:8888/TMoC/web/meta_lib" />
</head>
