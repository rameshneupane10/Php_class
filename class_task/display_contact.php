<?php
require "./connect.php";

$sql = "select * from contacts";
$result =mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Contact </title>
 </head>
 <body>
    <main>
        <h1>List of Contacts</h1>
        <ul>
            <?php
              foreach($rows as $value) {
                echo "<li>
                {$value['id']}&nbsp;&nbsp;
                {$value['first_name']}&nbsp;&nbsp;
                {$value['middle_name']}&nbsp;&nbsp;
                {$value['last_name']}&nbsp;&nbsp;
                {$value['phone_number']}
                </li>";
              }
             ?>
        </ul>
    </main>
 </body>
 </html>
