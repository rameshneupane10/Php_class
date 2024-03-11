<?php

$shopping_list = ["Buy beer 🍺", "Buy chicken 🍗"];

echo "<pre>";
var_dump($shopping_list);
echo "</pre>";

?>ls
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do the Shopping!</title>
</head>

<body>
  <main>
    <h1>Lets GOOOOO Shopping 🛒</h1>
    <!-- Form to submit -->
    <section>
      <form action="" method="post">
        <input type="text" name="shopping">
        <button type="submit">Add to Cart 🛒</button>
      </form>
    </section>
    <section>
      <h4>Shopping list here 👇</h4>
      <ul>
        <li>Buy beer 🍺</li>
        <li>Buy chicken 🍗</li>
      </ul>
    </section>
  </main>
</body>

</html>