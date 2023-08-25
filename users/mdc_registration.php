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
                            <h1>MDC Registration</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">MDC Registration</li>
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
                                                <div class="form-group"> <label>Taluka</label> <input type="text" class="form-control" name="taluka" id="taluka" placeholder="Enter Taluka." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>State</label> <input type="text" class="form-control" name="state" id="state" placeholder="Enter State" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>City</label> <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Charity Registration No</label> <input type="text" class="form-control" name="registration" id="registration" placeholder="Enter Charity Registration No." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Registration Certificate</label><br> <input type="file" name="upload" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Name of Authority Person</label> <input type="text" class="form-control" name="Aperson" id="Aperson" placeholder="Enter Name of Authority Person" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Designation</label> <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Member id Number with MMNF.</label> <input type="text" class="form-control" name="memberid" id="memberid" placeholder="Enter Member id Number with MMNF." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile No</label> <input type="text" class="form-control" name="phone1" id="phone1" placeholder="Enter Mobile No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Website name if have.</label> <input type="text" class="form-control" name="website" id="website" placeholder="Enter Website name if have.." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Operator Name of MDC.</label> <input type="text" class="form-control" name="operator" id="operator" placeholder="Enter Operator Name of MDC." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Mobile No</label> <input type="text" class="form-control" name="phone2" id="phone2" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Education</label> <input type="text" class="form-control" name="education" id="education" placeholder="Enter Education." required=""> </div>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;"> <label for="">Details of all Trusty:</label>
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Designation</th>
                                                            <th style="border: 1px solid black;">Name</th>
                                                            <th style="border: 1px solid black;">Mobile Number</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;">President</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="president" id="president" placeholder="Enter President Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile1" id="mobile1" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;">Vice President</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="vpresident" id="vpresident" placeholder="Enter Vice President Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile2" id="mobile2" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;">Secretary</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="secretary" id="secretary" placeholder="Enter Secretary Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile3" id="mobile3" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">04</td>
                                                            <td style="border: 1px solid black;">General Secretary</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="Gsecretary" id="Gsecretary" placeholder="Enter General Secretary Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile4" id="mobile4" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">05</td>
                                                            <td style="border: 1px solid black;">Treasurer</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="treasurer" id="treasurer" placeholder="Enter Treasurer Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile5" id="mobile5" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">06</td>
                                                            <td style="border: 1px solid black;">Member</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="member1" id="member1" placeholder="Enter Member Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile6" id="mobile6" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">07</td>
                                                            <td style="border: 1px solid black;">Member</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="member2" id="member2" placeholder="Enter Member Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile7" id="mobile7" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">08</td>
                                                            <td style="border: 1px solid black;">Member</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="member3" id="member3" placeholder="Enter Member Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile8" id="mobile8" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">09</td>
                                                            <td style="border: 1px solid black;">Member</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="member4" id="member4" placeholder="Enter Member Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile9" id="mobile9" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px"><label for="">Details about MDC :</label><br></div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Website name if have.</label> <input type="text" class="form-control" name="website2" id="website2" placeholder="Enter Website name if have.." required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Operator Name of MDC.</label> <input type="text" class="form-control" name="operator2" id="operator2" placeholder="Enter Operator Name of MDC." required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label for="">Mobile No</label> <input type="text" class="form-control" name="phone3" id="phone3" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Education</label> <input type="text" class="form-control" name="education2" id="education2" placeholder="Enter Education." required=""> </div>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px"><label for="">Furniture With MDC:</label><br></div>
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Type</th>
                                                            <th style="border: 1px solid black;">Yes / No</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;">Table</td>
                                                            <td style="border: 1px solid black;"> <input name="check1" id="check1" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;">Chair</td>
                                                            <td style="border: 1px solid black;"> <input name="check2" id="check2" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;">Cup Board</td>
                                                            <td style="border: 1px solid black;"> <input name="check3" id="check3" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">04</td>
                                                            <td style="border: 1px solid black;">PC</td>
                                                            <td style="border: 1px solid black;"> <input name="check4" id="check4" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">05</td>
                                                            <td style="border: 1px solid black;">Printer</td>
                                                            <td style="border: 1px solid black;"> <input name="check5" id="check5" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">06</td>
                                                            <td style="border: 1px solid black;">Scanner</td>
                                                            <td style="border: 1px solid black;"> <input name="check6" id="check6" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">07</td>
                                                            <td style="border: 1px solid black;">Internet</td>
                                                            <td style="border: 1px solid black;"> <input name="check7" id="check7" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Inside image of MDC</label><br> <input type="file" name="upload2" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Outside image of MDC</label><br> <input type="file" name="upload3" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Name board image of MDC</label><br> <input type="file" name="upload4" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload MDC Registration fee Transfer receipt</label><br> <input type="file" name="upload5" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group" <label>How many Masjid , which is accessible to you ?</label> <input type="text" class="form-control" name="masjid" id="masjid" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Total how many masjid are there in your city ?</label> <input type="text" class="form-control" name="total" id="total" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>How many Educational institutions are there in your city ?</label> <input type="text" class="form-control" name="institute" id="institute" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>How many Educational institutions in your Taluka ?</label> <input type="text" class="form-control" name="Tinstitute" id="Tinstitute" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Institution list.</label><br> <input type="file" name="upload6" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Address</label> <input type="text" class="form-control" name="address2" id="address2" placeholder="Enter Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Contact Number</label> <input type="text" class="form-control" name="phone4" id="phone4" placeholder="Enter Contact Number." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Are you tie-up with any Notary ?</label> <input type="text" class="form-control" name="notary" id="notary" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Are you tie-up with any stamp Vender ?</label> <input type="text" class="form-control" name="vender" id="vender" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have CSS Center ?</label> <input type="text" class="form-control" name="css" id="css" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have BC of any Notionalise bank ?</label> <input type="text" class="form-control" name="bank" id="bank" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have insurance adviser ?</label> <input type="text" class="form-control" name="adviser" id="adviser" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Are you interested in MRC (Medical Relief Center) ?</label> <input type="text" class="form-control" name="mrc" id="mrc" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>How much mininum expenses to run MDC ?</label> <input type="text" class="form-control" name="expenses" id="expenses" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you give service free to benifical ?</label> <input type="text" class="form-control" name="service" id="service" placeholder="If yes then type Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Give short note on your suggestion for MDC.</label> <input type="text" class="form-control" name="suggestion" id="suggestion" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Give short note on your suggestion for MMNF.</label> <input type="text" class="form-control" name="Snote" id="Snote" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>How much monthly contribution will give by your NGO to MMNF or social responsibility ?</label> <input type="text" class="form-control" name="contribution" id="contribution" placeholder="If yes then type Yes | If No then type No" required=""> </div>
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