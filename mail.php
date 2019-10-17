<?php
include 'pesen/koneksii.php';
$nama=$_POST['name'];
$email=$_POST['email'];
$pesan=$_POST['pesen'];
$tanggal= date("d-m-y h:i:sa");
$ip=$_SERVER['REMOTE_ADDR'];
$kueri=mysqli_query($konek,"insert into pesen values(null,'$nama','$email','$pesan','$tanggal','$ip')") or die (mysql_error());
if ($kueri) {
	echo '<script>
function myFunction() {
  alert("Terimakasih Sudah Menghubungi Saya ! Kamu Akan Dikembalikan Ke Halaman Awal ");
}
myFunction()
</script>';
$url ="index.html";
echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=" . $url. "'>";
}
else {
	echo "input gagal !\n";
	echo "<a href='index.php'>Kembali</a>";
}
?>