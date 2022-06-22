<?php
include "koneksi.php";
class kategori extends database
{
	function tampil_data_kategori()
	{
		return mysqli_query($this->koneksi, "select * from tbl_kategori ");
	}
	function update_data_kategori($kategori, $id_kategori)
	{
		$query = mysqli_query($this->koneksi, "update tbl_kategori set kategori='$kategori' where id_kategori='$id_kategori'");
	}
	function delete_data_kategori($id_kategori)
	{
		$query = mysqli_query($this->koneksi, "delete from tbl_kategori where id_kategori='$id_kategori'");
	}
	function get_by_id_kategori($id_kategori)
	{
		$query = mysqli_query($this->koneksi, "select * from tbl_kategori where id_kategori='$id_kategori'");
		return $query->fetch_array();
	}
	function tambah_data_kategori($kategori_barang)
	{
		return mysqli_query($this->koneksi, "insert into tbl_kategori values ('','$kategori_barang')");
	}
}
