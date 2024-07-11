<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>KITAB GHAR</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <a href="homepage.php"><img src="mylogo.png" alt="Logo" class="logo"></a>
      </div>
      <ul class="navigation">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="browse.php">Browse</a></li>
        <li><a href="cart.php">Cart</a></li>
        <?php
        session_start();
        if (isset($_SESSION['email'])) {
          echo '<li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i> Profile</a></li>'; // User icon linked to profile page
          echo '<li><a href="logout.php">Logout</a></li>';
        } else {
          echo '<li><a href="login.php">Login/Signup</a></li>';
        }
        ?>
      </ul>
    </nav>
  </header>

  <!-- <section class="hero">
    <div class="container">
      <?php
      if (isset($_SESSION['fullname'])) {
        echo '<h1><span>Welcome     ' . $_SESSION['fullname'] . '</span></h1>';
      } else {
        echo '<h2><span> Kitab Ghar</span></h2>';
      }
      ?>
      <p><span>Buy books with ease</span></p>
      <a href="browse.php" class="btn">BUY Now</a>
    </div>
    
  </section> -->
  

  <footer>
    <div class="footer">
      <p>&copy; <a href="./learnmore.html">ABOUT US</a>.</p>
    </div>
  </footer>
</body>

</html>