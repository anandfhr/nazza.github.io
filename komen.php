<html>
    <head>
        <title>Data Pengunjung</title>
</head>
<body>
    <h2>Data Pengunjung</h2>
    <table border="1px" width="50%">
        <tr align="center">
            <td>Nama</td>
            <td>Email</td> 
            <td>Pesan</td>    
</tr>
<?php
include "koneksi.php";
$query = mysqli_query($conn, "select * from komentar");
while ($data = mysqli_fetch_array($query))
{
?>
    <tr>
        <td><?php echo $data ['nama']; ?></td>
        <td><?php echo $data ['email']; ?></td>
        <td><?php echo $data ['pesan']; ?></td>
       
</tr>
<?php
}
?>
</table>
<a href="portofolio.html"> Tulis pesan lagi? </a>
</body>
</html>