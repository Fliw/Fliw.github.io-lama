<?php
require_once('koneksii.php');
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];
$tanggal=$_POST['tanggal'];
$ip=$_POST['ip'];
$sql = "INSERT INTO pesen ".
       "(nama,email,pesan,tanggal,ip) ".
       "VALUES('$nama','$email',$pesan,$tanggal,$ip, NOW())";
       $tambahdata = mysqli_query( $sql, $konek );
       if ($tambahdata){
           echo "input Berhasil";
       }
       else {
           echo"input gagal";
       }
?>