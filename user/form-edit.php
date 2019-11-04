<?php

include '../koneksidb.php';

if( !isset($_GET['id'])){
    header('Location: proses-daftar.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM user where id=$id";
$query = mysqli_query($db, $sql);
$pendaftar = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ( "data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Register
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="form" method="POST" action="proses-edit.php">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Edit User</h4>
                            </div>
                            <div class="card-body">
                            <input type="hidden" name="id" value="<?php echo $pendaftar['id'] ?>" />
                                <div class="form-group">
                                    <label for="nama_depan">Nama Depan</label>
                                    <input type="text" name="nama_depan" class="form-control" placeholder="First name" value="<?php echo $pendaftar['nama_depan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama_belakang">Nama Belakang</label>
                                    <input type="text" name="nama_belakang" class="form-control" placeholder="Last name" value="<?php echo $pendaftar['nama_belakang'] ?>">
                                </div>


                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Name@example.com" value="<?php echo $pendaftar['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="web">Minat Program</label>
                                    <?php $pgrm = $pendaftar['program']; ?>
                                    <div class="form-check form-check-radio form-check-inline">
                                        <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="program" id="web" value="Web Programing" <?php echo ($pgrm == 'Web Programing') ? "checked": "" ?>> Web
                                                  <span class="circle">
                                                      <span class="check"></span>
                                                  </span>
                                                </label>
                                    </div>
                                    <?php $pgrm = $pendaftar['program']; ?>
                                    <div class="form-check form-check-radio form-check-inline">
                                        <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="program" id="android" value="Android Developer" <?php echo ($pgrm == 'Android Devepolper') ? "checked": "" ?>> Android
                                                      <span class="circle">
                                                          <span class="check"></span>
                                                      </span>
                                                    </label>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src=../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
</body>

</html>