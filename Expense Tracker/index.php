<?php
require "./connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses Tracker</title>
</head>
<body>
    <main>
        <section> 
            <form action="./" method="post">
                Name: <input type="text" name="name"><br><br>
                Amount: <input type="text" name="amount"><br><br>
                Description:   <input type="text" name="description" ><br><br>
               Enter Type:<select name="categories" id="categories">
                 <option selected hidden>
                    <?php
                    $sql ="select label from categories";
                    $result = mysqli_query($conn,$sql);
                    $rows =mysqli_fetch_all($result,MYSQLI_ASSOC);
                    foreach($rows as $value)
                    {
                        echo"<option value = '{$value['label']}'>{$value['label']}</option>";
                    }
                    ?>



                
                    
                    </select><br><br>
                <button type="submit">Add Expenses</button>
            </form>
        </section>
</main>
</body>
</html>