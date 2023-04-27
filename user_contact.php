<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $sql = "INSERT INTO feedback VALUES
  ('" . $_POST['name'] . "','" . $_POST['phone'] . "','" . $_POST['email'] . "','" . $_POST['subject'] . "','" . $_POST['massage'] . "')";
  $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>contact us</title>
  <link rel="stylesheet" href="css/ourframe.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="shortcut icon" href="img/main-logo.ico" type="image/x-icon">
  <title>feedback</title>
</head>

<body>
  <div id="loading">
    <div class="spinner"></div>
  </div>
  <nav class="navbar">
    <div>
      <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="listings.php">listing</a></li>
        <li><a class="chosen">contact</a></li>
        <li><a href="About.php">about us</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">

    <h1>Connect With Us</h1>
    <p>We would love to respond to your queries and help you succeed. feel free to get in touch with us.</p>
    <div class="contact-box glass">

      <h3>Send your request</h3>
      <form method="post" action="">

        <div class="content">
          <div class="group">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="phone" placeholder="Phone" required>
          </div>
          <div class="group">
            <input type="email" name="email" placeholder="email" required>
            <input type="text" name="subject" placeholder="subject" required>
          </div>
          <textarea rows="5" name="massage" placeholder="Your Massage"></textarea>
        </div>
        <div><input type="submit" value="Send" class="submit"></div>
      </form>
      <div class="logo glass">
        <div class="face">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-solid fa-envelope"></i>
          <i class="fa-brands fa-twitter" style="color: #0996dc;"></i>
        </div>

      </div>
      <script src="js/ourframe.js"></script>
</body>

</html>