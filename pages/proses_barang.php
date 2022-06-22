<?php
session_start();
include('../barang_model.php');
$koneksi = new barang();

$action = $_GET['action'];
if ($action == "add") {
	$add = $koneksi->tambah_data_barang($_POST['nama_barang'], $_POST['id_kategori'], $_POST['id_pemasok'], $_POST['harga'], $_POST['keterangan']);
	if ($add) {
		$_SESSION['sukses'] = "Data barang berhasil ditambahkan";
	}
	header('location:tabel_barang.php');
} elseif ($action == "delete") {
	$id_barang = $_GET['id'];
	$dell = 	$koneksi->delete_data_barang($id_barang);
	if ($dell) {
		$_SESSION['sukses'] = "Data barang berhasil ditambahkan";
	} else {
		$_SESSION['error'] = "Data barang Gagal ditambahkan";
	}
	header('location:tabel_barang.php');
} elseif ($action == "update") {
	$koneksi->update_data_barang($_POST['nama_barang'], $_POST['id_kategori'], $_POST['id_pemasok'], $_POST['harga'], $_POST['keterangan'], $_POST['id_barang']);
	header('location:tabel_barang.php');
}
