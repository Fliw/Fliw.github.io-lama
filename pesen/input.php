<?php
if ($_POST['pass']=="fliw123") //jika submitan barusan sesuai jeng kondisi, nu dihandap ieu bakal dieksekusi
 { 
 	echo '<script>
function myFunction() {
  alert("Login Berhasil !");
}
myFunction()
</script>';
    $url='dataa.php';
echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=" . $url. "'>"; 
}
     else { //lamun berbeda iye kode anu bakal di eksekusi
    echo '<script>
function myFunction() {
  alert("Maaf Bosqu, Password Anda Salah ! anda akan dikembalikan ke halaman login !");
}
myFunction()
</script>';
$url='http://www.rafli.site/pesen';
echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=" . $url. "'>";  

    }
?>