
<?php 
include "../koneksi.php";
?>

<?php

$id_kota  = $_GET['id'];


$query = mysql_query("delete from kota where id_kota='$id_kota'");

if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='kota.php'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='kota.php'; </script>\n";}


?>
