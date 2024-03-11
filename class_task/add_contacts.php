<?php
 require "./connect.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
</head>
<body>
    <main>
        <section>
            <form action="" method="POST">
        <input type="text" name="fname" placeholder="First_name"><br><br>
        <input type="text" name="mname" placeholder="middle_name"><br><br>
        <input type="text" name="lname" placeholder="last_name"><br><br>
        <input type="text" name="pnum" placeholder="Phone_number"><br><br>
         <button type="submit">Insert</button>
         </form>

        </section>
        </main>
</body>
</html>

<?php
$data1 = $_POST['fname'];
$data2 = $_POST['mname'];
$data3= $_POST['lname'];
$data4 = $_POST['pnum'];



$sql1 = "insert into contacts (first_name,middle_name,last_name,phone_number) 
        values ('$data1',$data2',$data3',$data4')";
// $sql2 = "insert into contacts (middle_name) values ('$data2')";
// $sql3 = "insert into contacts (last_name) values ('$data3')";
// $sql4 = "insert into contacts (phone_number) values ('$data4')";

mysqli_query($conn, $sql1);
// mysqli_query($conn, $sql2);
// mysqli_query($conn, $sql3);
// mysqli_query($conn, $sql4);

// header('Location: /');

?>
 