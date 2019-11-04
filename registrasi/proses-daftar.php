<?php

include '../koneksidb.php';

if(isset($_POST['daftar'])){
    $nama1 = $_POST['nama_depan'];
    $nama2 = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $pgrm = $_POST['program'];

    $sql = "INSERT INTO user (nama_depan, nama_belakang, email, program) 
    VALUE ('$nama1', '$nama2', '$email', '$pgrm')";
    $query = mysqli_query($db, $sql);
    // echo $sql;


    if($query){
        header('Location: ../index.php?status=sukses');
    } else {
        header('Location: ../index.php?status=gagal');
    }

} else {
    die('Akses dilarang...');
}

// echo $_POST['nama_depan'];
?>