<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <title>nav bar</title>
  <link rel="stylesheet" href="navbar.css">
  <!-- <link rel="stylesheet" href="body.css"> -->
</head>

<body>

  <!-- navbar section -->

  <nav>
    <div class="nav__content">
      <div class="logo">
        <a href=""> <img src="image/LOGO.png" alt=""></a>
      </div>
      <div class="home-list">
        <a href="body.php">Home</a>
      </div>
      <div class="search-container">
        <input class="search-input" type="text" placeholder="Search...">
        <button class="serarch-btn" type="submit">🔍</button>
      </div>
      <div class="loginborder">
        <a href="login.php" class="login-link">Login </a>
        <p>|</p>
        <a href="sigin.php" class="sign-link">Sign up</a>
      </div>

    </div>
  </nav>

  <!-- second nav bar -->

  <section class="second-navbar">
    <div class="second-nav-content">
      <label for="check" class="checkbox">
        <i class="ri-menu-line"></i>
      </label>
      <input type="checkbox" name="check" id="check">
      <ul>
        <li class="nav-container"><a href="today special.php">Today Special</a></li>
        <li class="nav-container"><a href="just for you.php">Just For you</a></li>
        <li class="nav-container"><a href="about.php">About Us</a></li>
        <li class="nav-container"><a href="cantact.php">Contact Us </a></li>
        <!-- <li><a href="#">Help & Support</a></li> -->
        <div class="checklogin">
          <a href="login.php" class="login-link2">Login </a>
          <p>|</p>
          <a href="sigin.php" class="sign-link2">Sign up</a>
        </div>
      </ul>
    
    </div>
  </section>
</body>

</html>