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
                            <h1>Job Seeker Registration Form</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Taking your career to the next level.</li>
                            </ol>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Job Seeker Registration Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-flex">
                    <div class="row justify-content-center" >
                        <!-- left column -->
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Registration Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Full Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Mobile Number</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label for="">Work Status</label> 
                                                    <select class="form-control" name="work" id="work">
                                                        <option value="">--Select--</option>
                                                        <option value="Male">Experienced</option>
                                                        <option value="Female">Fresher</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label for="">Enter Password</label> <input type="password" class="form-control" name="email" id="email" placeholder="Enter Password" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Confirm Password</label> <input type="password" class="form-control" name="name" id="name" placeholder="Confirm Password" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Resume</label><br> <input type="file" name="resume" value="resume" class="form-control"> </div>
                                            </div>                                            
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Personal Information</h3>
                                    </div>                             
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Guardian's Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Date of Birth</label> <input type="date" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Present Address</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Permanent Address</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>City</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>State</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Pincode</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>                                          
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Educational Details</h3>
                                    </div>                                
                                    <div class="card-body">
                                        <div class="row ">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">School / College Name</th>
                                                            <th style="border: 1px solid black;">Educational Board</th>
                                                            <th style="border: 1px solid black;">Passing Year</th>
                                                            <th style="border: 1px solid black;">Percentage / CGPA / SGPA</th>
                                                            <th style="border: 1px solid black;">Upload</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone2" id="phone2" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification1" id="qualification1" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification1" id="dqualification1" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name3" id="name3" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone3" id="phone3" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification2" id="qualification2" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification2" id="dqualification2" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name4" id="name4" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone4" id="phone4" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification3" id="qualification3" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification3" id="dqualification3" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">04</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name5" id="name5" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone5" id="phone5" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification4" id="qualification4" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification4" id="dqualification4" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">05</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name6" id="name6" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone6" id="phone6" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification5" id="qualification5" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification5" id="dqualification5" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload" style="width:300px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>                                           
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Work Experience</h3>
                                    </div>                               
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Company's Name</th>
                                                            <th style="border: 1px solid black;">Designation</th>
                                                            <th style="border: 1px solid black;">Period</th>
                                                            <th style="border: 1px solid black;">Responsibilities</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone2" id="phone2" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification1" id="qualification1" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification1" id="dqualification1" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name3" id="name3" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone3" id="phone3" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification2" id="qualification2" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification2" id="dqualification2" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name4" id="name4" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone4" id="phone4" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification3" id="qualification3" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification3" id="dqualification3" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">04</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name5" id="name5" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone5" id="phone5" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification4" id="qualification4" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification4" id="dqualification4" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">05</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name6" id="name6" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone6" id="phone6" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification5" id="qualification5" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification5" id="dqualification5" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>                                           
                                        </div>
                                    </div> <!-- /.card-body -->                                    
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Other Informations</h3>
                                    </div>                               
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-md-6" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;"><label>Extra Curricular Activities</label>
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Enter Details Here</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name3" id="name3" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name4" id="name4" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;"><label>Hobbies</label>
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Enter Details Here</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name3" id="name3" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name4" id="name4" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;"><label>Project Details</label>
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Project Title</th>
                                                            <th style="border: 1px solid black;">Year of Completion</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Title Here" required="" style="width:400px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone2" id="phone2" placeholder="Enter Year of Completion" required="" style="width:400px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name3" id="name3" placeholder="Enter Title Here" required="" style="width:400px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone3" id="phone3" placeholder="Enter Year of Completion" required="" style="width:400px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name4" id="name4" placeholder="Enter Title Here" required="" style="width:400px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone4" id="phone4" placeholder="Enter Year of Completion" required="" style="width:400px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Expected Salary <small>*Per Annumm.</small></label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Amount in Lacs" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Notice Period <small>*Enter in Days.</small></label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Amount in Lacs" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Are you Physically Disabled? <small>If Yes, then state the disability!</small></label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Details Here" required=""> </div>
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
            </section>
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