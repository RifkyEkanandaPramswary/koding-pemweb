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
    <title>Admin || Ketket Cat Shop Online</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  <style type="text/css">
  .style1 {color: #FFFFFF}
  </style>
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
        <table width="206" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="258" align="center" bgcolor="#000000"><span class="style1"><strong>Menu</strong></span></td>
          </tr>
          <tr>
            <td bgcolor="#000048"><a href="kategori/kategori.php"><span class="style1">- Kategori</span></a></td>
          </tr>
          <tr>
            <td bgcolor="#00006A"><a href="produk/produk.php"><span class="style1">- Produk</span></a></td>
          </tr>
          <tr>
            <td bgcolor="#000048"><a href="kota/kota.php"><span class="style1">- Kota </span></td>
          </tr>
          <tr>
            <td bgcolor="#00006A"><span class="style1">- Ongkos Kirim </span></td>
          </tr>
          <tr>
            <td bgcolor="#000048"><span class="style1">- Contact Us </span></td>
          </tr>
          <tr>
            <td bgcolor="#00006A"><span class="style1">- Cara Belanja</span></td>
          </tr>
          <tr>
            <script language="javascript">
<!--
function logout()
{
	tanya=confirm("Keluar sekarang? ?")
	if (tanya !="0")
	{
		top.location="logout.php"
	}
}
//-->
            </script>
            <td bgcolor="#000048"><span class="style1"><a href="#"onClick="logout()"><strong>- Logout</strong></a></span></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </div>
    </div>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <center><p><input style="clear:both;" type="submit" class="button" value="Update"></p></center>
        </form>
        <ul class="center">
     <p><a href="#"><img src="images/twitter.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/ig.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/fb.jpg" width="41" height="41"></a>
        <a href="#"><img src="images/pint.jpg" width="41" height="41"></a>
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
