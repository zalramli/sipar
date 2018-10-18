<?php
	$koneksi = mysqli_connect("localhost","root","","sipar");
	if ($koneksi == false) {
		echo "Koneksi Anda gagal karena ".mysqli_connect_error();
	}
	else{
		 //echo "Haloo Berhasilll";
	}

	function autogenerate($field,$tabel,$digit,$kode){
	$data = mysql_fetch_array(mysql_query($koneksi,"SELECT MAX(RIGHT($field,$digit)) FROM $tabel"));
	$id = (int)$data[0]+1;
	$id_baru = $kode.sprintf('%0'.$digit.'s',$id);
	echo $id_baru;
	}
?>
