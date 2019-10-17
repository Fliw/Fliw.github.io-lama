<?php
$konek=mysqli_connect('localhost','raflisit_rafli','rafli123','raflisit_pesan');
if (mysqli_connect_errno()){
	echo "Koneksi ke DB gagal pli : " . mysqli_connect_error();
}
?>