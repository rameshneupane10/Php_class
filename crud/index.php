<?php
require "./connect.php";


// fetch the data from the backend 
$sql = "select * from momos";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting into the database</title>
</head>
<body>
<main>
    <section>
      <form action="add-momo.php" method="post">
        <input type="text" name="momo">
        <button type="submit">Add 🛒</button>
      </form>
    </section>

   
  </main>
</body>
</html>