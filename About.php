<html>

<head>
  <meta charset="UTF-8" ? />
  <title> ABOUT US </title>
  <meta name="description" content="This is all about us" />
  <!-- css -->
  <link rel="stylesheet" href="css/ourframe.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="shortcut icon" href="img/main-logo.ico" type="image/x-icon">

</head>

<body>
  <div id="loading">
    <div class="spinner"></div>
  </div>
  <nav class="navbar" id="navbar">
    <div>
      <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="listings.php">listings</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><a class="chosen">about us</a></li>
      </ul>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['user_name'])) {
    ?>
      <div class="profile">
        <img src="<?php echo $_SESSION['profile']; ?>" alt="error" onclick="dropList();" style="cursor: pointer;border-radius: 50%;">
        <div class="drop-list">
          <ul id="drop-list">
            <li><a href="user_profile.php">profile</a></li>
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

    <?php
    }
    ?>
  </nav>
  <nav class="nav-btn" id="nav-btn">
    <ul class="first">
      <li><a><i class="fa-solid fa-house"></i></a></li>
      <li><a><i class="fa-solid fa-car"></i></a></li>
      <li><a><i class="fa-solid fa-headset"></i></a></li>
      <li><a><i class="fa-solid fa-people-group"></i></a></li>

    </ul>
    <div>
      <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="listings.php">listings</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><a class="chosen">about us</a></li>
      </ul>
    </div>
  </nav>

  <span id="up-btn" onclick="scrollToTop();">
    <i class="fa-solid fa-angles-up"></i>
  </span>


  <div class="container">
    <h1 style="margin: 20px 0 50px;">ABOUT US</h1>
    <p>
      Our company was established
      <strong>in 1998 .</strong>
    </p>
    <div class="row">
      <div class="col-lg-6">
        <h2> We won many awards in the automotive world... </h2>

        Excellence Award <u>in 1999,</u>
        Quality award <u> in 2001</u> , Approved by the World Cars Organization


        <p>Award for the best car
          company in the Middle East <u>in 2004.</u></p>


      </div>
      <div class="col-lg-6">

        <video controls autoplay muted poster="img/car5.jpg">
          <source src="video/Car Promo.mp4" type="video/mp4" loop>
          Your Browser Not Support Video Tag
        </video>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-6">
        <img src="img/car8.jpg" alt="" width="500">
      </div>
      <div class="col-lg-6">
        <h2> Our Success </h2>
        <p>
          Our success is possible because of the hard work and dedication of our 25,000+ associates nationwide.
          If you join our team, you will join a culture of transparency, integrity,
          and an unwavering focus on doing what is right for each other.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h2> What Distinguishes Us </h2>
        <p>
          Acquired Dealer Inspire®,
          an innovative technology company building solutionsthat future-proof dealerships
          with more efficient operations,
          a faster and easier car buying process,
          and connected digital experiences that sell and service more vehicles...
          We're the car experts,
          We literally get in the driver's seat to show shoppers how each car performs on the road.
        </p>
      </div>
      <div class="col-lg-6">
        <img src="img/car3.jpg" alt="" width="600" height="200">
      </div>
    </div>



    <div class="row">
      <div class="col-lg-6">
        <img src="img/sale1.jpg" alt="" width="500" height="300">
      </div>
      <div class="col-lg-6">
        <h2> - TO Our Customers - </h2>
        <p>
          Today, our customers have the ability to buy completely on their terms,
          whether that is online, in the store,
          or using a seamless combination of both.
          Couple our flexibility with our industry-leading Love Your Car Guarantee (learn more),
          including 24-hour test drives and 30-day returns (up to 1500 mi.),
          and today we are delivering iconic car buying experiences unlike
          any you have seen before.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h2> Our Team </h2>
        <p>
          One of our most important advantages is that we work as one team,
          and with dedication to work in order to do our best to satisfy you.
          If you join: <a href="us.html" target="_blank">Our Team</a>,
          you will join a culture of transparency,
          integrity, and an unwavering focus on doing what is right for each other ..
          our customers, and our communities.
          We are committed to helping you innovate, learn, grow,
          and shape your career in ways you have not even imagined.
        </p>
      </div>
      <div class="col-lg-6">
        <img src="img/img1.jpg" alt="" height="380" width="600">
      </div>
    </div>
  </div>
  <footer>
    <h2> Connect With US :</h2>
    <div>
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-discord"></i>
      <i class="fa-brands fa-github"></i>
      <i class="fa-brands fa-linkedin"></i>
      <i class="fa-solid fa-envelope"></i>

    </div>
    <a href="us.html" target="_blank"><button type="button" class="btn btn-outline-warning btn-lg"><i class="fa-solid fa-people-group">
        </i>Our Team</button></a>
  </footer>

  </div>
  <script src="js/ourframe.js"></script>
  <script src="js/listngs.js"></script>


</body>


</html>