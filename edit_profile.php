<?php

	include 'connection.php';

	session_start ();

	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";

	$user_name_Session = $_SESSION['user_name'];

	if ($_SERVER['REQUEST_METHOD'] === 'POST'){

		if (isset($_POST["back_to_profile"])){

			header("location: user_profile.php");
			exit();
		}
		elseif (isset($_POST['update'])){

			$username = $_POST['username'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			// echo $username;
			// echo $name;
			// echo $email;
			// echo $phone;
			// echo $password;
			// echo $cpassword;

			if ($_SESSION['user_name'] != $username){

				$userNameInfo = $conn->prepare("select * from users where user_name = '" . $username . "'");
				$userNameInfo->execute();
				$userNameResult = $userNameInfo->get_result();
				$row = $userNameResult->fetch_assoc();
				// print_r($row) ;
				// var_dump(empty($row['user_name']));
			
				if (!empty($row['user_name'])){
					$wrongMsg = 'User name already exists';
	
					// echo $wrongMsg;
				}
				else {

					$sql = "UPDATE users SET user_name='$username',`name`='$name', email='$email', `password`='$password',
					`profile`='blank-profile.png' WHERE user_name='$user_name_Session'";
			
			
					if ($conn->query($sql) === TRUE){
						setcookie("user_name", $username);

						$_SESSION['user_name'] = $username;
						$_SESSION['name'] = $name;
						$_SESSION['email'] = $email;
						$_SESSION['password'] = $password;

						header('Location: user_profile.php');
						exit;
					}
				}
			}
			else {

				$sql = "UPDATE users SET user_name='$username',`name`='$name', email='$email', `password`='$password',
				`profile`='blank-profile.png' WHERE user_name='$user_name_Session'";
		
		
        		if ($conn->query($sql) === TRUE){
           	 		setcookie("user_name", $username);


					$_SESSION['user_name'] = $username;
					$_SESSION['name'] = $name;
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;

            		header('Location: user_profile.php');
            		exit;
        		}
			}




		}
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Profile Information</title>
	<link rel="stylesheet" href="css/edit_profile.css">
</head>
<body>
	<div class="container">
		<div class="left">
			<img src="img/blank-profile.png">
			<h2><?php echo $_SESSION ['name']; ?></h2>
		</div>
		<div class="right">
			<h2>Update Profile Information</h2>
			<?php
            if (isset($wrongMsg)) {
                echo '<div class="alert alert-danger" role="alert"><i class="fa-solid fa-circle-exclamation fa-beat"></i>' . $wrongMsg . '</div>';
            }
            ?>
			<div class="alert alert-danger" role="alert" id="alert"></div>
			<form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
				<label>
					Username: 
					<input type="text" name="username" value=<?php echo $_SESSION ['user_name']; ?>>
				</label>
				<label>
					Name: 
					<input type="text" name="name" value=<?php echo $_SESSION ['name']; ?>>
				</label>
				<label>
					Email:
					<input type="email" name="email" value=<?php echo $_SESSION ['email']; ?>>
				</label>
				<label>
					Phone:
					<input type="tel" name="phone" value="11111111111">
				</label>
                <label>
                    Password:
                    <input type="password" name="password" value=<?php echo $_SESSION ['password']; ?>>
                </label>
				<label>
                    Confirm Password:
                    <input type="password" name="cpassword" value=<?php echo $_SESSION ['password']; ?>>
                </label>
					<button type="submit" name="update">Update Profile Information</button>

					<button type="submit" name="back_to_profile">back To Profile</button>

				<!-- <a href="user_profile.php">back To Profile</a> -->
			</form>
			
		</div>
	</div>

	<script src="js/ourframe.js"></script>
</body>
</html>

<?php

// 	$user_name_Session = $_SESSION['user_name'];

// 	$username = $_POST['username'];
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$phone = $_POST['phone'];
// 	$password = $_POST['password'];
// 	$cpassword = $_POST['cpassword'];

// 	$sql = "UPDATE users SET user_name='$username' , name='$name', email='$email'
// 	password='$password', profile='blank-profile.png' WHERE user_name='$user_name_Session'";


// 	if ($conn->query($sql) === TRUE){
// 		echo "Regisetred Successfully";
// 	}
// 	else {  
// 		echo "Error: " . $sql . "<br>" . $conn->error;
// 	}

// 	$conn->close();


// 

?>