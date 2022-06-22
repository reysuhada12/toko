<?php
include "koneksi.php";
class barang extends database
{
	function tampil_data_barang()
	{
		if (isset($_POST['cari'])) {
			$cari = $_POST['cari'];
			return mysqli_query($this->koneksi, "SELECT
        tbl_pemasok.*, tbl_kategori.*, tbl_barang.*
        from tbl_barang
            JOIN tbl_pemasok ON tbl_barang.id_pemasok = tbl_pemasok.id_pemasok
            JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori  
			WHERE tbl_barang.id_barang LIKE '%" . $cari . "%' OR tbl_barang.nama_barang LIKE '%" . $cari . "%' ");
		} else {

			return mysqli_query($this->koneksi, "SELECT
        tbl_pemasok.*, tbl_kategori.*, tbl_barang.*
        from tbl_barang
            JOIN tbl_pemasok ON tbl_barang.id_pemasok = tbl_pemasok.id_pemasok
            JOIN tbl_kategori ON tbl_barang.id_kategori = tbl_kategori.id_kategori;");
		}
	}
	function update_data_barang($nama_barang, $id_kategori, $id_pemasok, $harga, $keterangan, $id_barang)
	{
		$query = mysqli_query($this->koneksi, "update tbl_barang set nama_barang='$nama_barang',id_kategori='$id_kategori',id_pemasok='$id_pemasok',harga='$harga',keterangan='$keterangan' where id_barang='$id_barang'");
	}
	function delete_data_barang($id_barang)
	{
		return mysqli_query($this->koneksi, "delete from tbl_barang where id_barang='$id_barang'");
	}
	function get_by_id_barang($id_barang)

	{
		$query = mysqli_query($this->koneksi, "select * from tbl_barang where id_barang='$id_barang' limit 1");
		return $query->fetch_array();
	}
	function tambah_data_barang($nama_barang, $id_kategori, $id_pemasok, $harga, $keterangan)
	{
		return mysqli_query($this->koneksi, "insert into tbl_barang values ('','$nama_barang','$id_kategori','$id_pemasok','$harga','$keterangan')");
	}
}
