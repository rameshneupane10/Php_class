<?php 

    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['loginbutton'])){
            $_SESSION['logedin'] = true;


        }
        if(isset($_POST['loginoutbutton'])){
        //   unset($_SESSION['logedin']) ;
          $_SESSION['logedin'] = false;

        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    // if(isset($_SESSION['logedin'])){
        if($_SESSION['logedin']== true){
            echo '<form action="./" method="POST">
            <button type="submit" name="loginoutbutton">logout</button>
            </form>
        ';
        }else{
            echo '<form action="./" method="POST">
            <button type="submit" name="loginbutton">login</button>
            </form>
        ';
        }
    // }
    // else{
    //     echo '<form action="./" method="POST">
    //     <button type="submit" name="loginbutton">login</button>
    //     </form>
    // ';
    // }
   
   
    
    
  ?>
    
  
</body>
</html>