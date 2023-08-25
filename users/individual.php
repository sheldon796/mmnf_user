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
                            <h1>Registration by Individual</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Registration by Individual</li>
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
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Adhar Card (Front)</label><br> <input type="file" name="Afront" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Adhar Card (Back)</label><br> <input type="file" name="Aback" value="" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Mobile Number</label> <input type="text" class="form-control" name="mnumber" id="mnumber" placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-3" style="padding-top:30px;"> <button type="submit" class="btn btn-primary" name="btn_submit" style="width:200px">Generate OTP</button> </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Submit the Generated OTP</label> <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter the OTP" required=""> </div>
                                            </div>
                                            <div class="col-lg-3" style="padding-top:30px;"> <button type="submit" class="btn btn-primary" name="btn_submit" style="width:200px">Submit OTP</button> </div>
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
                                                    </select> </div>
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
                                                <div class="form-group"> <label for="">Other Castigates</label> <select class="form-control" name="Other_castigates" id="Other_castigates">
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
                                                        <option value="Unemployes">Unemployes</option>
                                                        <option value="Employed">Employed</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Retired">Retired</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label> Anual family income </label> <select class="form-control" name="Family_Income" id="Family_Income" required="">
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
                                                <div class="form-group"> <label>Current Class</label> <select class="form-control" id="current_class" name="current_class" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="Class 1">Class 1</option>
                                                        <option value="Class 2">Class 2</option>
                                                        <option value="Class 3">Class 3</option>
                                                        <option value="Class 4">Class 4</option>
                                                        <option value="Class 5">Class 5</option>
                                                        <option value="Class 6">Class 6</option>
                                                        <option value="Class 7">Class 7</option>
                                                        <option value="Class 8">Class 8</option>
                                                        <option value="Class 9">Class 9</option>
                                                        <option value="Class 10">Class 10</option>
                                                        <option value="Class 11">Class 11</option>
                                                        <option value="Class 12">Class 12</option>
                                                        <option value="Graducation F.Y.">Graducation F.Y.</option>
                                                        <option value="Graducation S.Y.">Graducation S.Y.</option>
                                                        <option value="Graducation T.Y.">Graducation T.Y.</option>
                                                        <option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
                                                        <option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
                                                        <option value="Ph.D.">Ph.D.</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Previous Class</label> <select class="form-control" id="previous_class" name="previous_class" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="Class 1">Class 1</option>
                                                        <option value="Class 2">Class 2</option>
                                                        <option value="Class 3">Class 3</option>
                                                        <option value="Class 4">Class 4</option>
                                                        <option value="Class 5">Class 5</option>
                                                        <option value="Class 6">Class 6</option>
                                                        <option value="Class 7">Class 7</option>
                                                        <option value="Class 8">Class 8</option>
                                                        <option value="Class 9">Class 9</option>
                                                        <option value="Class 10">Class 10</option>
                                                        <option value="Class 11">Class 11</option>
                                                        <option value="Class 12">Class 12</option>
                                                        <option value="Graducation F.Y.">Graducation F.Y.</option>
                                                        <option value="Graducation S.Y.">Graducation S.Y.</option>
                                                        <option value="Graducation T.Y.">Graducation T.Y.</option>
                                                        <option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
                                                        <option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
                                                        <option value="Ph.D.">Ph.D.</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Marks Obtained</label> <input type="text" class="form-control" name="previous_marks" id="previous_marks" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Address</label> <textarea class="form-control" name="Address" id="" rows="3" placeholder="Enter Address" data-lt-tmp-id="lt-867403" spellcheck="false" data-gramm="false" required=""></textarea> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>District</label> <input type="text" class="form-control" name="District" id="District" placeholder="Enter District" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Taluka</label> <input type="text" class="form-control" name="Taluka" id="Taluka" placeholder="Enter Taluka" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">State - Domicile</label> <input type="text" class="form-control" name="State" id="State" placeholder="Enter State" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>PIN</label> <input type="text" class="form-control" name="PIN" id="PIN" placeholder="Enter Pin - code" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Near By Masjid</label> <input type="text" class="form-control" name="Mashjid" id="Mashjid" placeholder="Enter Near By Masjid..." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Masjid Chairman Name</label> <input type="text" class="form-control" name="Mashjid_chairman" id="Mashjid_chairman" placeholder="Enter Mashjid Chairman Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 style="color:#9E358A"><b>Do you have following document :</b></h4>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>OBC/EWS</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Aadhar</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Voter ID</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Ration</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>PAN Card</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Birth Certificate</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Passport</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Maktab</label><br> <input type="radio" name="fruit" value="apple"> Completed <input type="radio" name="fruit" value="orange"> Pursuing <input type="radio" name="fruit" value="orange"> Intrest to learn </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Voter Card</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Domicile & Nationality</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Ayushman Bharat Card</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>E-Shram Card</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Labour card</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Accidental Insurance</label><br> <input type="radio" name="fruit" value="apple"> Available <input type="radio" name="fruit" value="orange"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 style="color:#9E358A"><b>Do you want to use locker :</b></h4> <input type="radio" name="fruit" value="apple"> Yes <input type="radio" name="fruit" value="orange"> No
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Adhar Card</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Pan Card</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Voter Card</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload OBC/EWS</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Birth Certificate</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Ration Card</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Passport</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Domicile & Nationality</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Ayushman Bharat Card</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload E-Shram Card</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Labour card</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Accidental Insurance</label><br> <input type="file" name="fruit" value="apple" class="form-control" disabled> </div>
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