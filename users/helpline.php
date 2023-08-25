<?php include "function.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO helpline (name, email, subject, message)
                values ('$name', '$email', '$subject', '$message')";
        if (mysqli_query($conn, $sql)){
            echo "success";
        } else {
            echo"Not Submitted: " . mysqli_error($conn);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper"> <?php include "navbar.php" ; ?> <?php include "aside.php" ; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>24X7 Helpline</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">24X7 Helpline</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body row">
                        <div class="col-5 text-center d-flex align-items-center justify-content-center">
                            <div class="">
                                <h2>24X7<strong> Helpline</strong></h2>
                                <h3 class="lead mb-5"> Phone: +91 9890009890 </h3>
                            </div>
                        </div>
                        <form role="form" method="post" action="" enctype="multipart/form-data">
                            <div class="col-12">
                                <h2>Fill the form, we will call you back..</h2>
                                <div class="form-group"> <label >Name</label> <input type="text" class="form-control" name ="name" id="name"  /> </div>
                                <div class="form-group"> <label >E-Mail</label> <input type="email" class="form-control" name ="email" id="email"  /> </div>
                                <div class="form-group"> <label >Subject</label> <input type="text" name ="subject" id="subject" class="form-control" /> </div>
                                <div class="form-group"> <label >Message</label> <textarea name ="message" id="message" class="form-control" rows="4"></textarea> </div>
                                <div class="form-group"> <button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div> <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script> <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>