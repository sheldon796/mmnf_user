<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon">
    <title>MMNF</title> <!-- Google Font: Source Sans Pro -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
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
                            <h1>Matrimonial Registration Form</h1>
                            <!-- <h1><a href="matrimoniall.php">Next Page</a></h1> -->
                      </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Matrimonial Registration Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <!-- left column -->
                        <div class="col-md-10">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Registration Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Type of Registrations</label> <select class="form-control" name="Gender" id="Gender">
                                                        <option value="">--Select--</option>
                                                        <option value="₹500">₹ 500/- (Non - Verified)</option>
                                                        <option value="₹2,000">₹ 2,000/- (Verified)</option>
                                                        <option value="₹5,000">₹ 5,000/- (Verified with Personal Assistance)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Full Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Fathers Name</label> <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Father's Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text" class="form-control" name="Mobile" id="Mobile" placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>WhatsApp Number</label> <input type="text" class="form-control" name="whatsno" id="whatsno" placeholder="Enter Whatsapp Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Gender</label> <select class="form-control" name="Gender" id="Gender">
                                                        <option value="">--Select--</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Age</label> <input type="text" class="form-control" name="Age" id="Age" placeholder="Enter Age" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Blood Group </label> <select class="form-control" name="Blood_Group" id="Blood_Group">
                                                        <option value="">--Select--</option>
                                                        <option value="A+">A RhD positive (A+)</option>
                                                        <option value="A-">A RhD negative (A-)</option>
                                                        <option value="B+">B RhD positive (B+)</option>
                                                        <option value="B-">B RhD negative (B-)</option>
                                                        <option value="O+">O RhD positive (O+)</option>
                                                        <option value="O-">O RhD negative (O-)</option>
                                                        <option value="AB+">AB RhD positive (AB+)</option>
                                                        <option value="AB-">AB RhD negative (AB-)</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Caste </label> <select class="form-control" name="Caste" id="Caste" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="OBC">OBC</option>
                                                        <option value="VJ/NT">VJ/NT</option>
                                                        <option value="Open">Open</option>
                                                        <option value="EWS">EWS</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Castigates</label> <select class="form-control" name="Castigates" id="Castigates" required="">
                                                        <option>--Select--</option>
                                                        <option value="Minority">Minority</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Other Castigates</label> <select class="form-control" name="other_castigates" id="other_castigates">
                                                        <option value="">--Select--</option>
                                                        <option value="COVID Affected ">COVID Affected</option>
                                                        <option value="Registered Labour">Registered Labour</option>
                                                        <option value="Transport Staff">Transport Staff</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Marital Status</label> <select class="form-control" name="marital_status" id="marital_status">
                                                        <option>--Select--</option>
                                                        <option value="Un-Married"> Un-Married</option>
                                                        <option value="Married"> Married</option>
                                                        <option value="Divorcee"> Divorcee</option>
                                                        <option value="Widow"> Widow</option>
                                                        <option value="Widower"> Widower</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label> Current Occupation </label> <select class="form-control" name="current_occupation" id="current_occupation" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Unemployes">Unemployed</option>
                                                        <option value="Employed">Employed</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Retired">Retired</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label> Annual family income </label> <select class="form-control" name="Family_Income" id="Family_Income" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="1,00,000">Below 1,00,000</option>
                                                        <option value="1,50,000">Below 1,50,000</option>
                                                        <option value="2,00,000">Below 2,00,000</option>
                                                        <option value="2,50,000">Below 2,50,000</option>
                                                        <option value="4,00,000">Below 4,00,000</option>
                                                        <option value="7,00,000">Below 7,00,000</option>
                                                        <option value="8,00,000">Below 8,00,000</option>
                                                        <option value="And Above">And Above</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Highest Educational Qualifications</label> <select class="form-control" id="current_class" name="current_class" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="S.S.C.">S.S.C.</option>
                                                        <option value="H.S.C.">H.S.C.</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Degree">Degree</option>
                                                        <option value="Master's">Master's</option>
                                                        <option value="Ph.D.">Ph.D.</option>
                                                        <option value="Additional Course">Additional Course</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Please Specify Additional Course Details</label> <input type="text" class="form-control" name="A_course" id="A_course" placeholder="If Yes, Please Specify | If No, Type N.A." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Educational certificate</label><br> <input type="file" name="upload" value="upload" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">For Job Information</h3>
                                    </div>                                
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Appointment Letter</label><br> <input type="file" name="upload2" value="upload2" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-6" >
                                                <div class="form-group"> <label>Salary Slip</label><br> <input type="file" name="upload3" value="upload3" class="form-control"> </div>
                                            </div>                                            
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">For Business Information</h3>
                                    </div>                                
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Business Registration Number</label> <input type="text" class="form-control" name="B_R_number" id="B_R_number" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Supporting Document</label><br> <input type="file" name="upload4" value="upload4" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Pan Card Details</label> <input type="text" class="form-control" name="P_C_details" id="P_C_details" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Pan Card </label><br> <input type="file" name="upload5" value="upload5" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>If Other than Proprietor</label> <input type="text" class="form-control" name="firm_details" id="firm_details" placeholder="If Yes, Please Specify | If No, Type N.A." required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Business Pan Card</label><br> <input type="file" name="upload6" value="upload6" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Balance Sheet</label><br> <input type="file" name="upload6" value="upload6" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Product Profile</label><br> <input type="file" name="upload6" value="upload6" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Business Website</label> <input type="text" class="form-control" name="B_website" id="B_website" placeholder="Enter URL Here" required=""> </div>
                                            </div>                                            
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Financial Details</h3>
                                    </div>  
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload ITR Copy</label><br> <input type="file" name="upload7" value="upload7" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Insurance Policy Number</label> <input type="text" class="form-control" name="insurance" id="insurance" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload File (Insurance Policy Copy)</label><br> <input type="file" name="upload8" value="upload8" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mutual Funds Details</label> <input type="text" class="form-control" name="mutual_fund" id="mutual_fund" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload File (Mutual Fund Details)</label><br> <input type="file" name="upload9" value="upload9" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Share Investment Details</label> <input type="text" class="form-control" name="share_investment" id="share_investment" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Other Investment Details</label> <input type="text" class="form-control" name="other_investment" id="other_investment" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Assests Details</h3>
                                    </div>  
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- checkbox -->
                                                <div class="form-group"><label>Vehicle Details</label>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Two Wheeler</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Three Wheeler</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Four Wheeler</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Six Wheeler</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Ten Wheeler</label> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- checkbox -->
                                                <div class="form-group"><label>Property Details</label>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Shop</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Office</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Factory</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Godown</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Residential Apartment</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Bunglow</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Row House</label> </div>
                                                    <div class="form-check"> <input class="form-check-input" type="checkbox" > <label class="form-check-label">Open Land</label> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Health Details</h3>
                                    </div>  
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Medical Fitness Certificate</label><br> <input type="file" name="upload8" value="upload8" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">ABHA Card Details</label> <input type="text" class="form-control" name="previous_marks" id="previous_marks" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="card-footer"><label>Self Declaration Sample Form</label>
                                            <a href="MMNF_sel-declaration.pdf" target="_blank"><button type="Button" class="btn btn-primary" name="btn_submit">Download</button></a>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Self Declaration Certificate</label><br> <input type="file" name="upload8" value="upload8" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Pre-Marriage Counselling</h3>
                                    </div>  
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Have you completed Pre-Marriage Counselling</label> <input type="text" class="form-control" name="previous_marks" id="previous_marks" placeholder="If Yes the Types Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">If Yes, then by Whom</label> <input type="text" class="form-control" name="previous_marks" id="previous_marks" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Date of Counselling</label> <input type="date" class="form-control" name="previous_marks" id="previous_marks" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Mode of Counselling</label>
                                                    <select class="form-control" name="Gender" id="Gender">
                                                        <option value="">--Select--</option>
                                                        <option value="offline">Offline</option>
                                                        <option value="online">Online</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">After-Marriage Counselling</h3>
                                    </div> 
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Have you completed After-Marriage Counselling</label> <input type="text" class="form-control" name="previous_marks" id="previous_marks" placeholder="If Yes the Types Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">If Yes, then by Whom</label> <input type="text" class="form-control" name="previous_marks" id="previous_marks" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Date of Counselling</label> <input type="date" class="form-control" name="previous_marks" id="previous_marks" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Mode of Counselling</label>
                                                    <select class="form-control" name="Gender" id="Gender">
                                                        <option value="">--Select--</option>
                                                        <option value="offline">Offline</option>
                                                        <option value="online">Online</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Legal Information about Martial Realtionship</h3>
                                    </div>  
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="card-footer">
                                                <!-- <label>Self Declaration Sample Form</label> -->
                                                <button type="Button" class="btn btn-primary" name="btn_submit">Download</button>
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
            </section><!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div> <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a> </strong>
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
    <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/pages/dashboard.js"></script>
    
    <script>
        $(function () {
          bsCustomFileInput.init();
        });
    </script>
</body>

</html>