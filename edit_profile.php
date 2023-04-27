<?php
include 'connection.php';

session_start();


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

$user_name_Session = $_SESSION['user_name'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {




	$username = $_POST['user_name'];
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

	if ($_SESSION['user_name'] != $username) {

		$userNameInfo = $conn->prepare("select * from users where user_name = '" . $username . "'");
		$userNameInfo->execute();
		$userNameResult = $userNameInfo->get_result();
		$row = $userNameResult->fetch_assoc();
		// print_r($row) ;
		// var_dump(empty($row['user_name']));

		if (!empty($row['user_name'])) {
			$wrongMsg = 'User name already exists';

			// echo $wrongMsg;
		} else {

			$sql = "UPDATE users SET user_name='$username',`name`='$name', email='$email', `password`='$password'
				 WHERE user_name='$user_name_Session'";


			if ($conn->query($sql) === TRUE) {
				setcookie("user_name", $username);

				$_SESSION['user_name'] = $username;
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
			}
		}
	} else {

		$sql = "UPDATE users SET user_name='$username',`name`='$name', email='$email', `password`='$password'
			 WHERE user_name='$user_name_Session'";


		if ($conn->query($sql) === TRUE) {
			setcookie("user_name", $username);


			$_SESSION['user_name'] = $username;
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
		}
	}
	if (isset($_FILES['img'])) {
		$file_name = $_FILES['img']['name'];
		$file_size = $_FILES['img']['size'];
		$file_tmp = $_FILES['img']['tmp_name'];
		$file_type = $_FILES['img']['type'];
		$file_ext = strtolower(end(explode('.', $_FILES['img']['name'])));
		$upload_path = 'img/' . $_SESSION['user_name'] . "." . $file_ext;
		echo '<br>';
		echo $file_tmp;
		echo '<br>';
		if (move_uploaded_file($file_tmp, $upload_path)) {
			$sql = "UPDATE users SET profile = '$upload_path' WHERE user_name='$user_name_Session'";
			if ($conn->query($sql)) {
				$_SESSION['profile'] = $upload_path;
			}
		} else {
			echo "Error uploading file";
		}
	}

	header('Location: user_profile.php');
	exit;
}
?>
<!DOCTYPE html>
<html>




<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile Page</title>
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/ourframe.css">
	<link rel="stylesheet" href="css/drop-zone.css">
	<link rel="stylesheet" href="css/profile.css">
	<link rel="stylesheet" href="css/edit_profile.css">
	<link rel="shortcut icon" href="img/main-logo.ico" type="image/x-icon">

</head>

<body>
	<nav class="navbar">
		<div>
			<ul>
				<li><a class="chosen">home</a></li>
				<li><a href="listings.php">listing</a></li>
				<li><a href="contact.php">contact</a></li>
				<li><a href="About.php">about us</a></li>
			</ul>
		</div>
		<div class="profile">
			<img src="<?php echo $_SESSION['profile']; ?>" alt="error" onclick="dropList();" style="cursor: pointer; border-radius: 50%;">
			<div class="drop-list">
				<ul id="drop-list">
					<li><a href="user_profile.php">back to profile</a></li>
					<li>
						<a>
							<form action="user_profile.php" method="post" style="cursor: pointer;" name="logout_btn" onclick="_logout();">
								logout
								<i class="fa-solid fa-right-from-bracket"></i>
								<input type="hidden" name="logout" value="1">
							</form>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="container">
		<div id="loading">
			<div class="spinner"></div>
		</div>
		<form action="edit_profile.php" method="POST" enctype="multipart/form-data">
			<div class="info-box">
				<div class="photo-box">
					<!-- <img src="img/blank-profile.png"> -->
					<div class="glass" onclick="toggleVisibility()"><i class="fa-regular fa-pen-to-square"></i></div>
					<h2><?php echo $_SESSION['name']; ?></h2>
				</div>
				<h3>Profile Information</h3>
				<div class="drop-zone">
					<span class="drop-zone__prompt">Drop file here or click to upload</span>
					<input type="file" name="img" class="drop-zone__input">
				</div>
				<div class="edit">
					<ul>
						<li>Username:</li>
						<li>Name:</li>
						<li>Email:</li>
						<li>Phone:</li>
						<li>Password:</li>
						<li>Confirm:</li>
					</ul>
					<div class="info">
						<input type="text" name="user_name" value=<?php echo $_SESSION['user_name']; ?>>
						<input type="text" name="name" value=<?php echo $_SESSION['name']; ?>>
						<input type="text" name="email" value=<?php echo $_SESSION['email']; ?>>
						<input type="text" name="phone" value="phone">
						<input type="password" name="password" value=<?php echo $_SESSION['password']; ?>>
						<input type="password" name="cpassword" value=<?php echo $_SESSION['password']; ?>>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="edit">Edit Profile</button>
				<a href="user_profile.php"><button class="btn btn-secondary">cancel</button></a>
		</form>
	</div>
	</div>


	<script src="js/ourframe.js"></script>
	<script src="js/drop-zone.js"></script>
</body>

</html>