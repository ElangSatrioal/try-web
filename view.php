<!DOCTYPE html>
<html>
    <head>
        <title>Bismillah</title>
    <h1> menampilkan tabel</h1>
    
    </head>
<body>
    <h3>data mobil</h3>
        <table border = "1" class="table">
            <tr>
                <th>Nomor</th>
                <th>id mobil</th>
                <th>nama mobil</th>
                <th>tarif</th>
                <th>merk</th>
                <th>jenis</th>
            </tr>
            <?php
include "hai.php";
$query_mysql = mysqli_query($koneksi,"SELECT * FROM mobil") or die(mysqli_error());
$nomor = 1;
while ($data = mysqli_fetch_array($query_mysql)){
?>    
    <tr>
        <td><?php echo $nomor++;?></td>
        <td><?php echo $data['id_mobil']; ?></td>
        <td><?php echo $data['nama_mobil']; ?></td>
        <td><?php echo $data['tarif']; ?></td>
        <td><?php echo $data['merk']; ?></td>
        <td><?php echo $data['jenis'] ;?></td>
    </tr>    
    <?php }?>
        </table>    
</body>
</html>

