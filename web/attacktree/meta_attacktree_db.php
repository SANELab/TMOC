<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "insert into tmoc_attacktree(tree_number,tree_hash,tree_uploader) value ('".$_POST['tree_number']."','".$_POST['tree_hash']."','".$_POST['tree_uploader']."');";
$result = mysqli_query($dbconn, $sql_string);

$img_dir = "./attacktree_img/";
$file_name = basename($_FILES['file']['name']);
echo("<script>console.log(\"File name: $file_name\");</script>");
$imgFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
$file_loc = $img_dir.$_POST['tree_number'].".".$imgFileType;
echo("<script>console.log(\"File location: $file_loc\");</script>");
if(move_uploaded_file($_FILES['file']['tmp_name'], $file_loc)) {
  echo("<script>alert(\"File upload success\");</script>");
} else {
  if (UPLOAD_ERR_OK != $_FILES['file']['error']) {
    switch ($_FILES['file']['error']) {
      case UPLOAD_ERR_INI_SIZE:
        $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
        break;
      case UPLOAD_ERR_FORM_SIZE:
        $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
        break;
      case UPLOAD_ERR_PARTIAL:
        $message = "The uploaded file was only partially uploaded";
        break;
      case UPLOAD_ERR_NO_FILE:
        $message = "No file was uploaded";
        break;
      case UPLOAD_ERR_NO_TMP_DIR:
        $message = "Missing a temporary folder";
        break;
      case UPLOAD_ERR_CANT_WRITE:
        $message = "Failed to write file to disk";
        break;
      case UPLOAD_ERR_EXTENSION:
        $message = "File upload stopped by extension";
        break;
      default:
        $message = "Unknown upload error";
        break;
    }
    echo("<script>alert(\"$message\");</script>");
  }
}
?>
<head>
  <meta http-equiv="refresh" content="0;url=http://localhost:8888/TMoC/web/meta_attacktree" />
</head>
