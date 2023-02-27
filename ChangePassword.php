<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Action</title>
</head>
<body>

	<?php 


		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$flag = true;
			$cpassword = sanitize($_POST['cpassword']);
			$npassword = sanitize($_POST['npassword']);
            $cnpassword = sanitize($_POST['cnpassword']);
            $ChangePassword = sanitize($_POST['ChangePassword']);

			if (empty($cpassword)) {
				echo "Enter Current Password first<br>";
				$flag = false;
			}
			if (empty($npassword)) {
				echo "Enter a new password<br>";
				$flag = false;	
			}
            if(empty($cnpassword)){
                echo "Match with new password<br>";
                $flag=false;
            }

			if ($flag === true) {
                echo "<table align=center>";
                echo "<th>";
                echo "<fieldset>";
                echo "<legend>LogIn: </legend>";

				echo "Current password was: ".$cpassword;
                echo "<br>";
				echo $npassword;
                echo "<br>";
                if($cnpassword==$npassword){
                    echo "New password was: ".$cnpassword."<br>";
                    echo "Change Password successfully";
                }else{
                    echo "Keep same password"; 
                }             
                echo "</fieldset>";
                echo "</th>";
                echo "</table>";
			}
		}
		

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

</body>
</html>