<?php
session_start();

$item = $_POST['shopping'];

if (isset($_SESSION['manjan'])) {
  array_push($_SESSION['manjan'], $item);
} else {
  $_SESSION['manjan'] = [$item];
}

header("Location: /");
<?php
session_start();
$shopping_list = $_SESSION['manjan'];

?>