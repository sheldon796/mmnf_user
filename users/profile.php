<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon">
    <title>MMNF</title> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar --> <?php include "navbar.php";?> <?php include "aside.php";?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>User Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2"> </div>
                        <div class="col-md-8">
                            <!-- Profile Image -->
                            <?php
// include database connection file
require_once 'function.php';
// Object creation
$sql = "SELECT * FROM registration where id = " . $_SESSION['user_id'];

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center"> <img class="profile-user-img img-fluid img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture"> </div>
                                    <h3 class="profile-username text-center"><?php echo $row['name']; ?></h3>
                                    <!-- <p class="text-muted text-center">GH32GH0000</p> -->
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item"> <b>Mobile Number</b> <a class="float-right"><?php echo $row['phone']; ?></a> </li>
                                        <li class="list-group-item"> <b>Email Address</b> <a class="float-right"><?php echo $row['email']; ?></a> </li>
                                        <!-- <li class="list-group-item"> <b>Address</b> <a class="float-right">At/post nardana, tal shindhkheda, district dhule 425404.</a> </li> -->
                                    </ul> <a href="#" class="btn btn-primary btn-block"><b>Download your ID Card.</b></a>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                            <?php
}
} else {
    echo "";
}
?>
                        </div> <!-- /.col -->
                        <div class="col-lg-2"> </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div> <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a> </strong>
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script> <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
</body>

</html>