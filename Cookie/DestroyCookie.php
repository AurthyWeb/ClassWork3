<?php
setcookie("color", "", time() +(86400 * 20)); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroyed</title>

</head>

<body>
    <?php 

            header("Location: Cookie.php?msg="."Cookie destroyed");
    ?>
</body>

</html>