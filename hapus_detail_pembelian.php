<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$Stok = $_POST['Stok'];
$JumlahProduk = $_POST['JumlahProduk'];
$DetailID = $_POST['DetailID'];
$PelangganID = $_POST['PelangganID'];
$ProdukID = $_POST['ProdukID'];
$Stok_total = $Stok + $JumlahProduk;


// menghapus data dari database
mysqli_query($koneksi,"update produk set Stok='$Stok_total' where ProdukID='$ProdukID'");
mysqli_query($koneksi,"delete from detailpenjualan where DetailID='$DetailID'");

// mengalihkan halaman kembali ke data_barang.php
header("location:detail_pembelian.php?PelangganID=$PelangganID");

?>