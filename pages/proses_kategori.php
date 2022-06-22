<?php 
include('../kategori_model.php');
$koneksi = new kategori();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data_kategori($_POST['kategori']);
	header('location:tabel_kategori.php');
}elseif($action=="delete")
{
	$id_kategori = $_GET['id'];
	$koneksi->delete_data_kategori($id_kategori);
	header('location:tabel_kategori.php');
}elseif($action=="update")
{
	$koneksi->update_data_kategori($_POST['kategori'],$_POST['id_kategori']);
	header('location:tabel_kategori.php');
}
?>