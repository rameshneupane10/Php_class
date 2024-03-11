<?php 
     require "./connect.php";

     //fetching data from database
     $sql ="select * from contacts";
     $result = mysqli_query($conn,$sql);
     $rows =mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
</head>
<body>
    <main>
       <section>
        <form action="add_contacts.php" method="post">
            <button type="submit">Create</button>
        </form> <br>
        <ul>
            <?php
            foreach($rows as $value)
            {
                echo "<li>{$value['first_name' ]} {$value['middle_name' ]} {$value['last_name' ]} {$value['phone_number' ]}</li>";
            }
            ?>
        </ul>
        <section>
        <form action="edit_contacts.php" method="post">
            <button type="submit">Read</button>
        </form> <br>
        <form action="edit_contact.php" method="post">
            <button type="submit">Update</button>
        </form><br>
        <form action="delete_contact.php" method="post">
            <button type="submit">Delete</button>
        </form>
       </section>
    </main>
</body>
</html>