<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin || Jersey Online</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="logo">
        <a href="#">
        Jersey Online
        <a href="index.php"> <img src="images/home.png" width="60" height="41"></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="center">
          <li><a href="about.php">About</a></li>
          <li><a href="shop.php">Cara Belanja</a></li>
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
      <div class="large-12">
        <p><?php echo '<h3>Halo... ' .$_SESSION['Nama Awal'] . '</h3>'; ?></p>
        <h3>Selamat datang di halaman<strong>administrator</strong>!</h3>
 
        <?php
          $result = $mysqli->query("SELECT * from products order by id asc");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Kode Produk</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Deskripsi</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Stok</strong>: '.$obj->qty.'</p>';
              echo '<div class="large-6 columns" style="padding-left:0;">';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>Input Stok Terbaru</strong>:</p>';
              echo '</div>';
              echo '<div class="large-6 columns">';
              echo '<input type="number" name="quantity[]"/>';

              echo '</div>';
              echo '</div>';
            }
          }
        ?>



      </div>
    </div>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <center><p><input style="clear:both;" type="submit" class="button" value="Update"></p></center>
        </form>
        <ul class="center">
     <p><a href="#"><img src="images/twitterlogo.png" width="41" height="41"></a>
        <a href="#"><img src="images/insta.png" width="41" height="41"></a>
        <a href="#"><img src="images/fblogo.png" width="41" height="41"></a>
        <a href="#"><img src="images/pinterest.png" width="41" height="41"></a>
    </p>
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Team UTS. Created By Arifin & Time.</p>
        </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
