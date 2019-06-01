<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register || Ketket Cat Shop Online</title>
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
            echo '<li class="active"><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>



    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">
<p><strong>SILAHKAN ISI DATA DIRI ANDA PADA KOLOM DIBAWAH INI</strong></p>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Nama Awal</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Ketket" name="Nama Awal">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Nama Akhir</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="S" name="Nama_Akhir">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Alamat</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Indonesia" name="Alamat">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Kota</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Lampung" name="Kota">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Kode Pos</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="123456" name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="ketket@gmail.com" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="password">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
  </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
 <ul class="center">
        <a href="#"><img src="images/twitter.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/ig.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/fb.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/pint.jpg" width="41" height="41"></a>
    
        <footer>
           <p style="text-align:center; font-size:0.8em;"><strong>&copy; Team PemWeb. Created By Ketket & Team.</strong>.</p>
        </footer>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>