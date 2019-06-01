<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ketket Cat Shop Online</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  <script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
  <link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h3><a href="index.php">Ketket Cat Shop Online</a></h3>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Center Nav Section -->
        <ul class="right">
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Akun Saya</a></li>';
            echo '<li><a href="logout.php">Keluar</a></li>';
          }
          else{
            echo '<li><a href="login.php">Masuk</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
        <ul class="center">
          <li><a href="about.php">About</a></li>
          <li><a href="shop.php">Cara Belanja</a></li>
          <li><a href="products.php">Produk</a></li>
          <li><a href="cart.php">Keranjang Belanja</a></li>
          <li><a href="orders.php">Pesanan Saya</a></li>
          <li><a href="contact.php">Kontak</a></li>
          </ul>
        
      </section>
    </nav>




    <img data-interchange="[images/bannerkucing.jpg, (retina)], [images/,bannerkucing.jpg (large)], [images/,bannerkucing.jpg (mobile)], [images/bannerkucing.jpg (medium)]">
  <noscript><img src="images/bannerkucing.jpg" width="1303"></noscript>


    
        
  <p align="center"><strong>PARTNER KAMI:</strong></p>
        <p align="center"> <img src="images/mandiri-logo.jpg" width="96" height="32"><img src="images/bni-logo.jpg" width="88" height="24"> <img src="images/nutro.jpg" width="92" height="86"><img src="images/Whiskas.jpg" width="49" height="34"><img src="images/sampo.jpg" width="94" height="62"></p>
         <ul class="center">
     <p><a href="about.php"><img src="images/twitter.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/ig.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/fb.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/pint.jpg" width="41" height="41"></a>
    </p>
    <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;"><strong>&copy; Team PemWeb. Created By Keket & Team.</strong></p>
  </footer>

     
  <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
$(document).foundation();

    </script>
  </body>
</html>
