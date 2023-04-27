<!DOCTYPE html>
<html>
<head>
	<title>Upload a Photo</title>
</head>
<body>
	<h1>Upload a Photo</h1>
	<form action="file.php" method="POST" enctype="multipart/form-data">
		<label for="photo">Choose a photo:</label>
		<input type="file" name="photo" id="photo">
		<input type="submit" value="Upload">
	</form>
</body>
</html>
<?php
  session_start();
 if(isset($_FILES['photo'])){
  $file_name = $_FILES['photo']['name'];
  $file_size =$_FILES['photo']['size'];
  $file_tmp =$_FILES['photo']['tmp_name'];
  $file_type=$_FILES['photo']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
  $upload_path = 'img/'.$_SESSION['user_name'].".".$file_ext ;
  echo '<br>' ;
  echo $file_tmp ;
  echo '<br>' ;
  if(move_uploaded_file($file_tmp,$upload_path)){
    echo "Success! Your file has been uploaded.";
    echo '<br>' ;
    echo $upload_path ;

  }else{
    echo "Error uploading file";
  }
}


// // Check if the user has uploaded a file
// if (isset($_FILES['photo'])) {

// 	// Check if there was an error uploading the file
// 	if ($_FILES['photo']['error'] > 0) {
// 		echo "Error: " . $_FILES['photo']['error'];
// 	}

// 	// Save the file to the "uploads" folder
// 	else {
// 		move_uploaded_file($_FILES['photo']['tmp_name'], "img/" . $_FILES['photo']['name']);
// 		echo "File uploaded successfully!";
//         echo"<br>";
// 		echo $_FILES['photo']['tmp_name'];
//         echo"<br>";
// 		echo $_FILES['photo']['name'];
// 	}

// }

// ?>

