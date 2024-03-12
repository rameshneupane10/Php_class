<?php

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database_name = 'phone_book';

$conn = mysqli_connect($hostname, $username, $password, $database_name);

        if(isset($_POST['fname'], $_POST['mname'], $_POST['lname'], $_POST['pnum'])) {
            
            $first_name = $_POST['fname'];
            $middle_name = $_POST['mname'];
            $last_name = $_POST['lname'];
            $phone_num = $_POST['pnum'];
        
            // SQL query with parameterized values
            $sql = "INSERT INTO contacts (first_name, middle_name, last_name, phone_number) 
                    VALUES ('$first_name', '$middle_name', '$last_name', '$phone_num')";
        
            if(mysqli_query($conn, $sql)) {
                echo 'Contact added successfully.';
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    

// header('Location: /');

  
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
            <form action="\" method="POST">
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

