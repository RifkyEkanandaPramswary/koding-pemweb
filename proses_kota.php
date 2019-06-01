<?php
include "../koneksi.php";

$kota		= $_POST['kota'];

if (empty ($kota))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='input_kota.php'; </script>\n"; exit ;
}

$query = mysql_query ('insert into kota (nama_kota)values("'.$kota.'")');

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='kota.php'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='input_kota.php'; </script>\n";
}
?>