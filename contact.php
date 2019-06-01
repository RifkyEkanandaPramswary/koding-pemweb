<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak || Ketket Cat Shop Online</title>
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
        <ul class="center">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Produk</a></li>
          <li><a href="cart.php">Keranjang Belanja</a></li>
          <li><a href="orders.php">Pesanan Saya</a></li>
          <li class="active"><a href="contact.php">Kontak</a></li>
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

        <p>Anda bisa menghubungi kami disini: <a href="mailto:ekananda99@gmail.com">ketket@gmail.com</a></p>
        <form name="form1" method="post" action="">
          <label for="kontak"><img src="images /telepon.jpg" width="68" height="71"></label>
          <select name="kontak" id="kontak">
<option>Call Center</option>
<option>Rifky E.P      +6283897503577</option>
<option>Rizka W.A.P        +6283876512334</option>
<option>Yenny H         +628387654632</option>
<option>Ketket        +6283197503546</option>
<option>Erpanda        +6283987654201</option>
          </select>
        </form>
        <p><img src="images/google.jpg" width="56" height="53"><strong> KetketAdmin@gmail.com</strong></p>
        <p><strong><img src="images/line.jpg" width="56" height="53"> </strong>ketket.rry</p>
        <p><img src="images/wa.jpg" width="56" height="53"> <strong>+6283897503577</strong></p>
<ul class="center">
     <p><a href="#"><img src="images/twitter.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/ig.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/fb.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/pint.jpg" width="41" height="41"></a>
    </p>
        <footer>
           <p style="text-align:center; font-size:0.8em;"><strong>&copy; Team PemWeb. Created By Ketket & Team.</strong></p>
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
