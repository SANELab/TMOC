<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "UPDATE tmoc_attacklibrary SET library_score=('".$_POST['eval_lib_score']."') where library_number=('".$_POST['eval_lib_number']."');";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://localhost:8888/TMoC/web/evaluate" />
</head>
