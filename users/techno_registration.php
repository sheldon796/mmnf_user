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
                            <h1>Techno Buiz Registration</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Techno Buiz Registration</li>
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
                                                <div class="form-group"> <label>Name of Trust</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Trust" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Title of institute</label> <input type="text" class="form-control" name="institute" id="institute" placeholder="Enter Title of institute" required=""> </div>
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
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;"> <label for="">Authority Person Details who linked with MMNF :</label>
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Person Name</th>
                                                            <th style="border: 1px solid black;">Mobile Number</th>
                                                            <th style="border: 1px solid black;">Designation</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="Pname" id="Pname" placeholder="Enter Person Name" required="" style="width:300px"></td>
                                                            </td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Student Strength</label> <input type="text" class="form-control" name="strength" id="strength" placeholder="Enter Student Strength" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Education Availability</label> <select class="form-control" name="education" id="education">
                                                        <option value="">--Select--</option>
                                                        <option value="">Primary</option>
                                                        <option value="">Secondary</option>
                                                        <option value="">Higher Secondary</option>
                                                        <option value="">Junior College</option>
                                                        <option value="">Senior College</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have professional courses,if yes then give the name of course ?</label> <input type="text" class="form-control" name="courses" id="courses" placeholder="Enter Details." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>How much strength does teaching staff have ?</label> <input type="text" class="form-control" name="teaching" id="teaching" placeholder="Enter Details." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>How much strength does non teaching staff have ?</label> <input type="text" class="form-control" name="non-teaching" id="non-teaching" placeholder="Enter Details." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Medium Of Teaching</label> <select class="form-control" name="medium" id="medium">
                                                        <option value="">--Select--</option>
                                                        <option value="">English</option>
                                                        <option value="">Hindi</option>
                                                        <option value="">Marathi</option>
                                                        <option value="">Urdu</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have Registered with YCMOU / IGNOU ? (YES/NO)</label> <input type="text" class="form-control" name="IGNOU" id="IGNOU" placeholder="If Yes then type Yes | If NO then type NO" required=""> </div>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px"><label for="">How much Infrastructure does Institute have:</label><br></div>
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Type</th>
                                                            <th style="border: 1px solid black;">Enter in Sq. ft.</th>
                                                            <th style="border: 1px solid black;">Yes / No</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;">Number Of Classrooms</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="classromm" id="classromm" placeholder="If Yes then type Yes | If NO then type NO" required=""></td>
                                                            <td style="border: 1px solid black;"> <input name="check1" id="check1" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;">Grounds</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="grounds" id="grounds" placeholder="If Yes then type Yes | If NO then type NO" required=""></td>
                                                            <td style="border: 1px solid black;"> <input name="check2" id="check2" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;">Computer Labs</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="labs" id="labs" placeholder="If Yes then type Yes | If NO then type NO" required=""></td>
                                                            <td style="border: 1px solid black;"> <input name="check3" id="check3" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">04</td>
                                                            <td style="border: 1px solid black;">Library</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="library" id="library" placeholder="If Yes then type Yes | If NO then type NO" required=""></td>
                                                            <td style="border: 1px solid black;"> <input name="check4" id="check4" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">05</td>
                                                            <td style="border: 1px solid black;">Laboratory</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="laboratory" id="laboratory" placeholder="If Yes then type Yes | If NO then type NO" required=""></td>
                                                            <td style="border: 1px solid black;"> <input name="check5" id="check5" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">06</td>
                                                            <td style="border: 1px solid black;">Internet Availability</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="internet" id="internet" placeholder="If Yes then type Yes | If NO then type NO" required=""></td>
                                                            <td style="border: 1px solid black;"> <input name="check6" id="check6" type="checkbox" style="width:35px;height:35px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Institute Status</label> <select class="form-control" name="status" id="status">
                                                        <option value="">--Select--</option>
                                                        <option value="">Aided</option>
                                                        <option value="">Non - Aided</option>
                                                        <option value="">Permanent</option>
                                                        <option value="">Minority</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you take benifit of Govt / CSR Funds for Infrastructure development</label> <input type="text" class="form-control" name="benifit" id="benifit" placeholder="Enter Details." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have NIOS / MIOS Registration ?</label> <input type="text" class="form-control" name="mios" id="mios" placeholder="Enter Details." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have External Student exam center ?</label> <input type="text" class="form-control" name="external" id="external" placeholder="Enter Details." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have any additional coaching activities, if yes then give details.</label> <input type="text" class="form-control" name="activities" id="activities" placeholder="Enter Details." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Registration fee transfer details with MMNF.</label><br> <input type="file" name="upload" value="" class="form-control"> </div>
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
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Trusty Adhar document ? (only PDF)</label><br> <input type="file" name="upload2" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>What kind of Support you Expect from MMNF ?</label> <input type="text" class="form-control" name="support" id="support" placeholder="Enter Details." required=""> </div>
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