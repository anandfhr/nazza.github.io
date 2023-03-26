<?php
//connect ke database
include 'koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

if (empty($nama) ||  empty($email) ||  empty($pesan)) {
    echo "Form ada yang kosong, silahkan isi ulang";
} else {
    $query = mysqli_query($conn,"insert into komentar set nama = '$nama' , email = '$email', pesan = '$pesan'");
    if ($query == TRUE) {
        echo
        "Data berhasil ditambah,silahkan lihat daftar 
        <a href='komen.php'> lihat pengunjung</a>";
    } else {
        echo "data gagal disimpan" ; 
    }
}