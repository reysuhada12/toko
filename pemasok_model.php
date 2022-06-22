<?php
include "koneksi.php";
class Pemasok extends database{
    function update_data_pemasok($nama_pemasok,$alamat,$no_hp,$email,$keterangan_pemasok,$id_pemasok)
	{
		$query = mysqli_query($this->koneksi,"update tbl_pemasok set nama_pemasok='$nama_pemasok',alamat='$alamat',no_hp='$no_hp',email='$email',keterangan_pemasok='$keterangan_pemasok' where id_pemasok='$id_pemasok'");
	}
    
	function delete_data_pemasok($id_pemasok)
	{
		$query = mysqli_query($this->koneksi,"delete from tbl_pemasok where id_pemasok='$id_pemasok'");
	}
	function get_by_id_pemasok($id_pemasok)
	{
		return mysqli_fetch_assoc(mysqli_query($this->koneksi,"select * from tbl_pemasok where id_pemasok='$id_pemasok' limit 1"));
	}
	function tambah_data_pemasok($nama_pemasok,$alamat,$no_hp,$email,$keterangan_pemasok)
	{
		mysqli_query($this->koneksi,"insert into tbl_pemasok values ('','$nama_pemasok','$alamat','$no_hp','$email','$keterangan_pemasok')");
	}
	function tampil_data_pemasok()
	{
		return mysqli_query($this->koneksi,"select * from tbl_pemasok");
	}
    
}