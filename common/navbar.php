<?php
?>
<header>
  <div id="navigation">

    <div class="hamburger" id="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>

    <ul class="nav-links" id="nav-links">

      <li class="active"><a href="index.php">HOME</a></li>
      <?php
        if(isset($_SESSION['role']) && $_SESSION['role']=='admin')
          echo '<li><a href="tour-package.php">Tour Packages</a></li>
          <li><a href="admin_hotel.php">Hotel Dashboard</a></li>
          <li><a href="admin_flight.php">Flight Dashboard</a></li>      
          <li><a href="admin_contact.php">Contact Dashboard</a></li>';
        else
          echo '
          <li><a href="tour-package.php">Tour Packages</a></li>
          <li><a href="hotel.php">Hotel</a></li>
          <li><a href="flight.php">Flight</a></li>      
          <li><a href="contact.php">Contact</a></li>
          '
      ?>
      
      <?php
      if(isset($_SESSION['u_id'])){
        echo'<li><div class="dropdown">
          <a href="./settings.php"><button class="dropbtn" id="account">Account
            <i class="fa fa-fw fa-user"></i>
            </button> </a>
          </div></li>
          <li><a href="db/db_logout.php" class="btn btn-warning">Log Out</a></li>
          ';
      } else {
        echo '
          <li><a href="login.php" class="btn btn-warning">Log in</a></li>
        ';
      }
      ?>
    </ul>
  </div>
</header>