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
                            <h1>NGO / Charity Trust Registration</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">NGO / Charity Trust Registration</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Portal Membership Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Registration Number</label> <input type="text" class="form-control" name="registration" id="registration" placeholder="Enter Registration Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Type of NGO (Charity / Section 8)</label> <input type="text" class="form-control" name="type" id="type" placeholder="Enter Type of NGO" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Name of NGO / Charity trust</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of NGO" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Full Address</label> <input type="text" class="form-control" name="address" id="address" placeholder="Enter Full Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>District</label> <input type="text" class="form-control" name="district" id="district" placeholder="Enter District" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Taluka</label> <input type="text" class="form-control" name="taluka" id="taluka" placeholder="Enter Taluka" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Pin-code</label> <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Enter Pin-code" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Official Contact Number</label> <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Enter Official Contact Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email1" id="email1" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>12A</label> <input type="text" class="form-control" name="12a" id="12a" placeholder="12A" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload 12A Certificate (PDF Only)</label><br> <input type="file" name="12au" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>80G</label> <input type="text" class="form-control" name="80g" id="80g" placeholder="80G" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload 80G Certificate (PDF Only)</label><br> <input type="file" name="80gu" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>FCRA</label> <input type="text" class="form-control" name="fcra" id="fcra" placeholder="FCRA" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload FCRA Certificate (PDF Only)</label><br> <input type="file" name="fcrau" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>CSR 1</label> <input type="text" class="form-control" name="csr1" id="csr1" placeholder="CSR 1" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload CSR 1 Certificate (PDF Only)</label><br> <input type="file" name="csr1u" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>CSR 2</label> <input type="text" class="form-control" name="csr2" id="csr2" placeholder="CSR 2" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload CSR 2 Certificate (PDF Only)</label><br> <input type="file" name="csr2u" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>GST</label> <input type="text" class="form-control" name="gst" id="gst" placeholder="GST" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload GST Certificate (PDF Only)</label><br> <input type="file" name="gstu" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>MSME Registration</label> <input type="text" class="form-control" name="msme" id="msme" placeholder="MSME Registration" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload MSME Certificate (PDF Only)</label><br> <input type="file" name="msmeu" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Darpan Reg. Number</label> <input type="text" class="form-control" name="darpan" id="darpan" placeholder="Darpan Reg. Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Darpan Certificate (PDF Only)</label><br> <input type="file" name="darpanu" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Focus Area 1</label> <input type="text" class="form-control" name="fa1" id="fa1" placeholder="Enter Focus Area 1" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Focus Area 2</label> <input type="text" class="form-control" name="fa2" id="fa2" placeholder="Enter Focus Area 2" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Focus Area 3</label> <input type="text" class="form-control" name="fa3" id="fa3" placeholder="Enter Focus Area 3" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Focus Area 4</label> <input type="text" class="form-control" name="fa4" id="fa4" placeholder="Enter Focus Area 4" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Focus Area 5</label> <input type="text" class="form-control" name="fa5" id="fa5" placeholder="Enter Focus Area 5" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Website</label> <input type="text" class="form-control" name="website" id="website" placeholder="Enter Website" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Authority President Name</label> <input type="text" class="form-control" name="president1" id="president1" placeholder="Enter Authority President Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text" class="form-control" name="phone2" id="phone2" placeholder="Enter Mobile" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Email Id</label> <input type="text" class="form-control" name="email2" id="email2" placeholder="Enter Email Id" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Authority President Name</label> <input type="text" class="form-control" name="president2" id="president2" placeholder="Enter Authority President Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text" class="form-control" name="phone3" id="phone3" placeholder="Enter Mobile" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Email Id</label> <input type="text" class="form-control" name="email3" id="email3" placeholder="Enter Email Id" required=""> </div>
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