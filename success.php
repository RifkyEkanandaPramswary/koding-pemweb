<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ketket Cat Shop Online Online</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="logo">
          <a href="#">
        <li><strong>Ketket Cat Shop Online</strong><a href="index.php"><img src="images/home.png" width="60" height="41"></li>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="center">
          <li><a href="about.php">About</a></li>
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




    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <p>Perubahan Data berhasil disimpan. Terimakasih</p>
        <p>selanjutnya silahkan cek E-mail anda untuk informasi selanjutnya.</p>

<ul class="center">
     <p><a href="#"><img src="images/twitter.png" width="41" height="41"></a>
        <a href="#"><img src="images/ig.png" width="41" height="41"></a>
        <a href="#"><img src="images/fb.png" width="41" height="41"></a>
        <a href="#"><img src="images/pint.png" width="41" height="41"></a>
    </p>
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Team PemWeb. Created BY Ketket & Team.</p>
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
