<?php

include("connection.php");

$passid = $_GET['passid'];

$sel = "select filename from passdetails where passid='$passid'";
$res=$con->query($sel);
$data = mysqli_fetch_assoc($res);
$filename = $data['filename'];
$filename = "files/".$filename;	

$contenttype = "application/force-download";
header("Content-Type: " . $contenttype);
header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\";");
readfile($filename);
exit();

?>