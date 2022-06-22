<?php 
include('../pemasok_model.php');
$koneksi = new Pemasok();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data_pemasok($_POST['nama_pemasok'],$_POST['alamat'],$_POST['no_hp'],$_POST['email'],$_POST['keterangan_pemasok']);
	header('location:tabel_pemasok.php');
}elseif($action=="delete")
{
	$id_pemasok = $_GET['id'];
	$koneksi->delete_data_pemasok($id_pemasok);
	header('location:tabel_pemasok.php');
}elseif($action=="update")
{
	$koneksi->update_data_pemasok($_POST['nama_pemasok'],$_POST['alamat'],$_POST['no_hp'],$_POST['email'],$_POST['keterangan_pemasok'],$_POST['id_pemasok']);
	header('location:tabel_pemasok.php');
}
?>