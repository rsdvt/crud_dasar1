<?php
include '../koneksidb.php';

if(isset($_POST['simpan'])){
    $nama1 = $_POST['nama_depan'];
    $nama2 = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $pgrm = $_POST['program'];

    $sql = "UPDATE user SET nama_depan='$nama1', nama_belakang='$nama2', email='$email', program='$pgrm'";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: user.php');
    }else {
        die('gagal menyimpan perubahan');
    }
}else {
    die('akses dilarang...');
}