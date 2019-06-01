<?php
include "../koneksi.php";



extract($_POST);
if (empty ($kota))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='kota.php'; </script>\n"; exit ;
}
$q=mysql_query("UPDATE kota SET 
									
                                    
                                    nama_kota 				= '$_POST[kota]'
                                   	WHERE id_kota		= '$_GET[id]'");
									
									
 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='kota.php'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='kota.php'; </script>\n";
}
?>

