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
                            <h1>Tijarat Registration</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tijarat Registration</li>
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
                                                <div class="form-group"> <label>Name of Bussiness Men/Women</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Bussiness Men/Women" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Education</label> <input type="text" class="form-control" name="education" id="education" placeholder="Enter Education" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Address</label> <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Office Address</label> <input type="text" class="form-control" name="Oaddress" id="Oaddress" placeholder="Enter Office Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Work / Godown</label> <input type="text" class="form-control" name="godown" id="godown" placeholder="Enter Work / Godown" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Type Of Business</label> <input type="text" class="form-control" name="business" id="business" placeholder="Enter Type Of Business" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Title of Business.</label> <input type="text" class="form-control" name="title_business" id="title_business" placeholder="Enter Title of Business." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have shopact ? (YES/NO)</label> <input type="text" class="form-control" name="shopact" id="shopact" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have GST ? (YES/NO)</label> <input type="text" class="form-control" name="gst" id="gst" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have MSME ? (YES/NO)</label> <input type="text" class="form-control" name="msme" id="msme" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have professional TAX ? (YES/NO)</label> <input type="text" class="form-control" name="tax" id="tax" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have ESIC ? (YES/NO)</label> <input type="text" class="form-control" name="esic" id="esic" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have fassai ? (YES/NO)</label> <input type="text" class="form-control" name="fassai" id="fassai" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Staff with you</label> <select class="form-control" name="staff" id="staff">
                                                        <option value="">--Select--</option>
                                                        <option value="">Skilled</option>
                                                        <option value="">Unskilled</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do You enjoy Government scheme of subsidy loan ? (YES/NO)</label> <input type="text" class="form-control" name="loan" id="loan" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you enjoy minority loan scheme ? (YES/NO)</label> <input type="text" class="form-control" name="scheme" id="scheme" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you require interest free loan ? (YES/NO)</label> <input type="text" class="form-control" name="interest" id="interest" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have cash / credit loan ? (YES/NO)</label> <input type="text" class="form-control" name="credit_loan" id="credit_loan" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Your Business turnover.</label> <select class="form-control" name="turnover" id="turnover">
                                                        <option value="">--Select--</option>
                                                        <option value="">Upto 5 lakhs</option>
                                                        <option value="">Upto 10 lakhs</option>
                                                        <option value="">Upto 25 lakhs</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have website ? (YES/NO)</label> <input type="text" class="form-control" name="website" id="website" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have mobile app ? (YES/NO)</label> <input type="text" class="form-control" name="app" id="app" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Which Social / Digital media presence you have ?</label> <select class="form-control" name="social" id="social">
                                                        <option value="">--Select--</option>
                                                        <option value="">Facebook</option>
                                                        <option value="">Twitter</option>
                                                        <option value="">Instagram</option>
                                                        <option value="">Linked In</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Are you linked with E-Commerce platform if yes then give its name.</label> <input type="text" class="form-control" name="e-commerce" id="e-commerce" placeholder="Enter Details." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Are you connected with C.A who handles account ?</label> <input type="text" class="form-control" name="ca" id="ca" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have any business coach portfolio manager ?</label> <input type="text" class="form-control" name="manager" id="manager" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>What you Expect from MMNF for own growth as well as for community upliftment ?</label> <input type="text" class="form-control" name="mmnf" id="mmnf" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have completed any professional training or transforming lectures, if yes then please write about it ?</label> <input type="text" class="form-control" name="training" id="training" placeholder="Enter Details." required=""> </div>
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