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
        <!-- Navbar --> <?php include "navbar.php" ; ?> <?php include "aside.php" ; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content " style="background-image:url(images/bg.jpg); ">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12 mt-4" style="background-color: rgba(255, 255, 255, 0.2); backdrop-filter: blur(5px); border-radius: 1rem;">
                            <!-- general form elements -->
                            <div>
                                <div class="card-header">
                                    <h3 class="card-title">Portal Membership Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Full Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text" class="form-control" name="Mobile" id="Mobile" placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">City</label> <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">MMNF Unique ID Number</label> <input type="text" class="form-control" name="uid" id="uid" placeholder="Enter Unique id" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">CIF Registered Number</label> <input type="text" class="form-control" name="uid" id="uid" placeholder="Enter CIF Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Address</label> <input type="text" class="form-control" name="uid" id="uid" placeholder="Enter Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Near By Masjid Name</label> <input type="text" class="form-control" name="Mashjid" id="Mashjid" placeholder="Enter Near By Masjid..." required=""> </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group"> <label for="">Do you have following documents :</label> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Birth Certificate : &nbsp;</label> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No <input type="file" class="form-control" name="Mashjid" id="Mashjid" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Income Certificate : &nbsp;</label> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No <input type="file" class="form-control" name="Mashjid" id="Mashjid" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Marksheet of last year : &nbsp;</label> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No <input type="file" class="form-control" name="Mashjid" id="Mashjid" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Cast Certificate : &nbsp;</label> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No <input type="file" class="form-control" name="Mashjid" id="Mashjid" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Disability Certificate : &nbsp;</label> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No <input type="file" class="form-control" name="Mashjid" id="Mashjid" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Adhar Card : &nbsp;</label> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No <input type="file" class="form-control" name="Mashjid" id="Mashjid" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Pan Card : &nbsp;</label> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No <input type="file" class="form-control" name="Mashjid" id="Mashjid" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Bank account detail : &nbsp;</label> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No <input type="file" class="form-control" name="Mashjid" id="Mashjid" disabled> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-footer"> <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button> </div>
                                </form>
                            </div> <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!--/.col (right) -->
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
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script> <!-- AdminLTE for demo purposes -->
    
    <script>
        $(function () {
          bsCustomFileInput.init();
        });
    </script>
</body>

</html>