<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cara Belanja|| Ketket Cat Sshop Online</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        
 <li class="logo">
        <a href="#">
        Ketket Cat Shop Online
        <a href="index.php"> <img src="images/sweet.jpg" width="45" height="45"></li>
      </ul>

        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="centert">
          <li><a href="about.php">About</a></li>
          <li class="active"><a href="shop.php">Cara Belanja</a></li>
          <li><a href="products.php">Produk</a></li>
          <li><a href="cart.php">Keranjang Belanja</a></li>
          <li><a href="orders.php">Pesanan Saya</a></li>
          <li><a href="contact.php">Kontak</a></li>
          
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
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>&nbsp;</p>
        <h3>CARA BERBELANJA DI KETKET CAT SHOP ONLINE<h3>
      
        <p>&nbsp; </p>
        <p><strong>1. Anda membuat akun terlebih dahulu di menu Register</strong></p>
        <p><strong>2. Pilih KUCING yang ingin anda beli </strong></p>
        <p><strong>3. Lakukan pembayaran transfer bank ataupun sistem COD (informasi dikirim melalui e-mail).</strong></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h3><strong>Partner Kami:</strong><h3>
        <p align="center"> <img src="images/mandiri-logo.jpg" width="155" height="168"><img src="images/bni-logo.jpg" width="226" height="88"> </p>
        <p>&nbsp;</p>

<ul class="center">
     <p><a href="#"><img src="images/twitter.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/ig.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/fb.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/pint.jpg" width="41" height="41"></a>
    </p>
        <footer>
          <p style="text-align:center; font-size:0.8em;"><strong>&copy; Team PemWeb.Created By Ketket & Team.</strong>.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>