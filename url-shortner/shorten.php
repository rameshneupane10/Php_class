<?php 
require "./connect.php";

$long_url =$_POST['urls'];
$short_url=$_POST['urls'];

mysqli_query($conn,"INSERT INTO links(long_url,short_url) VALUES ('$long_url','$short_url')");
header("location :index.php");
exit;
?>


