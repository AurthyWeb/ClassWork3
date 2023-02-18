<?php
$cookie_name = "color";
$cookie_value = $_POST['color'];
setcookie($cookie_name, $cookie_value, time() + (86400*30) ,"/"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
</head>

<body>
    <?php if($_SERVER['REQUEST_METHOD'] === 'GET'){

        if(empty($_POST['color'])){
            
            header("Location: Cookie.php");
            
        }else{
           
            header("Location: Cookie.php?color="."$cookie_value");
            
        }
        
    }else{
        echo "Do Get request." ;
    }
   
    
    
    ?>
</body>

</html>