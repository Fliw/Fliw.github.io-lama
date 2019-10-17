<style>
    table, th {
  border: 3px inset black;
}
td {
    background-color:darkgray;
    color:black;
}
</style>
<body style="background:linear-gradient(to bottom right,purple,red);">
<?php
require_once('koneksii.php');
 
$query = "SELECT * FROM pesen";
?>
<center>
    <br> <br> <br>
    <span style="background-color:black; color:white; border-radius:10px;font-size:30px;padding:5px;">Pesan Di Rafli.site</span>
    <br>
    <br>
     <table style="width:80%; border-radius:10px;font-size:16px;">
        <tr style="background-color:black; color:white;">
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal</th>
            <th>IP</th>
        </tr>
     <?php
     if($data=mysqli_query($konek,$query)){
        $a=1;
        while($obj=mysqli_fetch_object($data)){
     ?>
        <tr>
            <td><?= $a ?></td>
            <td><?= $obj->nama ?></td>
            <td><?= $obj->email ?></td>
            <td><?= $obj->pesan ?></td>
            <td><?= $obj->tanggal ?></td>
            <td><?= $obj->ip ?></td>
        </tr>
        </center>
        </body>
        <?php
        $a++;
        }
     }
     ?>