<?php
require "./connect.php";

$data = $_POST['momo'];

$sql = "insert into momos (name) values ('$data')";
mysqli_query($conn, $sql);

header('Location: /');
// below is the comment for above task
// <?php
// // to get the connection string
// require "./connect.php";

// // get the value from the FORM
// $data = $_POST['momo'];

// // Insert the value to the database
// mysqli_query($conn, "insert into momos (name) values ('$data')");

// // Now redirect back to the index.php file
// header('Location: /');