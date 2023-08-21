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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>MRC Registration</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">MRC Registration</li>
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
                                                <div class="form-group"> <label>Name of NGO</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of NGO" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Address</label> <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>District</label> <input type="text" class="form-control" name="district" id="district" placeholder="Enter District" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Taluka</label> <input type="text" class="form-control" name="taluka" id="taluka" placeholder="Enter Taluka" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>State</label> <input type="text" class="form-control" name="state" id="state" placeholder="Enter State" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>MMNF's MDC Registration Number</label> <input type="text" class="form-control" name="registration" id="registration" placeholder="Enter MMNF's MDC Registration Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Name of Authority Person who manage MRC Responsibility</label> <input type="text" class="form-control" name="Aperson" id="Aperson" placeholder="Enter Name of Authority Person who manage MRC Responsibility" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile No</label> <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Designation of Authority Person</label> <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation of Authority Person" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>On Work Time</label> <input type="text" class="form-control" name="time" id="time" placeholder="Enter On Work Time" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Name of care taker/ Dr. of MRC.</label> <input type="text" class="form-control" name="care_taker" id="care_taker" placeholder="Enter Name of care taker/ Dr. of MRC." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Qualification of care taker.</label> <input type="text" class="form-control" name="qualification" id="qualification" placeholder="Enter Qualification of care taker." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile No Of care taker.</label> <input type="text" class="form-control" name="mobile2" id="mobile2" placeholder="Enter Mobile No Of care taker." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Space Available for MRC, Excluding MDC</label> <input type="text" class="form-control" name="space" id="space" placeholder="Enter Space Available for MRC, Excluding MDC" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do You Have a pathology lab/ collection center?</label> <input type="text" class="form-control" name="center" id="center" placeholder="Enter Do You Have a pathology lab/ collection center?" required=""> </div>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;"> <label for="">Give Details of Muslim person in your city who is working in medical field. :</label>
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Name</th>
                                                            <th style="border: 1px solid black;">Qualification</th>
                                                            <th style="border: 1px solid black;">Mobile Number</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Name" required="" style="width:300px"></td>
                                                            </td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification2" id="qualification2" placeholder="Enter Qualification" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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