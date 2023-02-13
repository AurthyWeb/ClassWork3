<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Action</title>
</head>

<body>

    <?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$flag = true;
			$fname = sanitize($_POST['firstname']);
			$lname = sanitize($_POST['lastname']);
            $fatname = sanitize($_POST['fathername']);
            $motname = sanitize($_POST['mothername']);
            $birth = sanitize($_POST['datebirth']);
            $blood = sanitize($_POST['bloodgroup']);


			if (empty($fname)) {
				echo "Please give first name";
				$flag = false;
                echo "<br>";
			}
			
			if (empty($lname)) {
				echo "Please give last name";
				$flag = false;	
                echo "<br>";
			}

            if (empty($fatname)) {
				echo "Please give father name";
				$flag = false;	
                echo "<br>";
			}
  
            if (empty($motname)) {
				echo "Please give mother name";
				$flag = false;
                echo "<br>";	
			}


            if (empty($birth)) {
				echo "Please select your birth date";
				$flag = false;	
                echo "<br>";
			}

            if (empty($blood)) {
				echo "Please select your blood group";
				$flag = false;	
			}
            

            $email=sanitize($_POST['email']);
            $phone=sanitize($_POST['phone']);
            $website=sanitize($_POST['website']);
            $paddress=sanitize($_POST['prasentaddress']);

            if(empty($email)){
                echo "Please give your email";
                $flag = false;
                echo "<br>";
            }

            if(empty($phone)){
                echo "Please give your phone number";
                $flag = false;
                echo "<br>";
            }
            if(empty($website)){
                echo "Please give your website name";
                $flag = false;
                echo "<br>";
            }
            if(empty($paddress)){
                echo "Please give your present address";
                $flag = false;
                echo "<br>";
            }

         

            $username=sanitize($_POST['username']);
            $password=sanitize($_POST['password']);

            if(empty($username))
            {
                echo "Please give user name";
                $flag=false;
                echo "<br>";
            }

            if(empty($password))
            {
                echo "Please give your password";
                $flag=false;
                echo "<br>";
            }



			if ($flag === true) {
                echo "<table align=center>";
                echo "<th>";

                echo "<fieldset>";
                echo "<legend>General Information: </legend>";
                echo "First Name: $fname";
                echo "<br>";
				echo "Last Name: $lname";
                echo "<br>";
                echo "Father's Name: $fatname" ;
				echo "<br>";
                echo "Mother's Name:  $motname";
                echo "<br>";
                echo "Date of Birth: $birth" ;
                echo "<br>";
                echo "Blood Group: $blood" ;
                echo "<br>";
                echo "</fieldset>";

                echo "<fieldset>";
                echo "<legend>Contact Information: </legend>";
                echo "Email: $email";
                echo "<br>";
				echo "Mobile/Phone: $phone";
                echo "<br>";
                echo "Website: $website" ;
				echo "<br>";
                echo "Present Address:  $paddress";
                echo "<br>";
                echo "</fieldset>";
                
                echo "<fieldset>";
                echo "<legend>Account information: </legend>";
                echo "User Name: $username";
                echo "<br>";
                echo "Password: $password";
                echo "<br>";
                echo "</fieldset>";

                echo "</th>";
                echo "</table>";
			}
		}
		else {
			echo "Sorry you can't access without my permission..............";
		}

		function sanitize($data) {
			$data1 = trim($data);
			$data1 = stripslashes($data);
			$data1 = htmlspecialchars($data);
			return $data;
		}
	?>

</body>

</html>