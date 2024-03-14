<?php
require "./connect.php";
$first=$_POST['fname'];
$middle=$_POST['mname'];
$last=$_POST['lname'];
$number=$_POST['pnum'];

$sql="update into contacts(first_name, middle_name,last_name,phone_number)"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contacts</title>
</head>
<body>
    <form action="edit_contact.php" method="post">
    <input type="text" name="fname" placeholder="First name"><br><br>
        <input type="text" name="mname" placeholder="middle name"><br><br>
        <input type="text" name="lname" placeholder="last name"><br><br>
        <input type="text" name="pnum" placeholder="Phone number"><br><br>
         <button type="submit">Update</button>
    </form> 
</body>
</html>