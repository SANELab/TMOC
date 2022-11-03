<!--첨부터 수정해야함-->
<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "select library_number, library_element, library_stride, library_contents, library_url, library_writer, library_score from tmoc_attacklibrary;";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://127.0.0.1/web/history" />
</head>