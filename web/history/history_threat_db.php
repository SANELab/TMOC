<!--첨부터 수정해야함-->
<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "select threat_number, element_name, threat_contents, threat_reason, library_number, writer, threat_score from tmoc_threat;";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://127.0.0.1/web/history" />
</head>