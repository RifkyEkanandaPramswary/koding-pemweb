<?php
include "../koneksi.php";
include"../config/fungsi_gambar.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];


$kategori		= $_POST['kategori'];
$produk			= $_POST['produk'];
$deskripsi		= $_POST['deskripsi'];
$harga			= $_POST['harga'];
$stock			= $_POST['stock'];
$berat			= $_POST['berat'];
$dibeli			= $_POST['dibeli'];

if (empty ($kategori) or empty ($produk) or empty($deskripsi) or empty($harga) or empty($stock) or empty ($berat) or empty ($dibeli))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='input_produk.php'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

$query = mysql_query ('insert into produk (kategori,nama_produk,deskripsi,harga,stock,berat,tgl_masuk,dibeli,gambar)values("'.$kategori.'","'.$produk.'","'.$deskripsi.'","'.$harga.'","'.$stock.'","'.$berat.'","'.date('Y-m-d').'","'.$dibeli.'","'.$nama_file.'")');
} else {
$query=mysql_query('insert into produk (kategori,nama_produk,deskripsi,harga,stock,berat,tgl_masuk,dibeli) values("'.$kategori.'","'.$produk.'","'.$deskripsi.'","'.$harga.'","'.$stock.'","'.$berat.'","'.date('Y-m-d').'","'.$dibeli.'")');
}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='produk.php'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='input_produk.php'; </script>\n";
}
?>