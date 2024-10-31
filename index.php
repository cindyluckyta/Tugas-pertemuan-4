<?php
include "Koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
</head>
<body>
    <table border="1">
        <caption>Laporan Penjualan</caption>
        <tr>
            <th>No</th>
            <th>tanggal_penjual</th>
            <th>nama</th>
            <th>harga</th>
            <th>jumlah_penjualan</th>
            <th>total_penjumlahan</th>
</tr>
<?php
$query = "SELECT * FROM penjualan";
$result = $mysqli->query($query);
$no = 1;
while($row =  $result->fetch_object()){
 ?>  
   
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row->tanggal_penjual ?></td>
            <td><?php echo $row->nama ?></td>
            <td><?php echo $row->harga ?></td>
            <td><?php echo $row->jumlah_penjualan ?></td>
            <td><?php echo $row->total_penjumlahan ?></td>
        </tr>
        <?php 
    }
    ?>
    </table>
</body>
</html>