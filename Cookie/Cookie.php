<?php 
 $color = "#fff";
 $Color = "#fff";

    if(isset($_GET['color'])){
        $Color = $_GET['color'] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>


    <div style="background-color: <?= $Color ?>" >
    
        <h1>Cookie</h1>
        <h4>Time zone : Asia/Dhaka</h4>
        <hr>
        <br>
        <h3>Set Cookie</h3>
        <hr>
        <br>
        <form action="SetCookie.php" method="post">
            <table>
            <tr>
                <td>Select a color </td>
                <td><input type="color" name="color" id="color"></td>
            </tr>
            <tr>
                <td><label for="expire">Expire on: </label></td>
                <td><input type="time" name ="expire" id="expire"></td>
                <td>    <?php $_POST['expire']; ?> </td>
            </tr>
            <tr>
                <td><button type="submit">Set Cookie</button></td>
            </tr>
        </table>
        </form>

        <h4>Destroy Cookie</h4>
        <form action="DestroyCookie.php">
        <button >Destroy Cookie</button> 
        </form>
        <?php 
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
        ?>
        

        <hr>
        
    </div>

</body>
</html>