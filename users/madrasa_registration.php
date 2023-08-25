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
                            <h1>Madrasa Trust Registration</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Madrasa Trust Registration</li>
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
                                                <div class="form-group"> <label>Name of Trust</label> <input type="text" class="form-control" name="name1" id="name1" placeholder="Enter Name of Trust" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Title of Madrasa</label> <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title of Madrasa" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Full Address</label> <input type="text" class="form-control" name="address" id="address" placeholder="Enter Full Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>District</label> <input type="text" class="form-control" name="district" id="district" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Taluka</label> <input type="text" class="form-control" name="taluka" id="taluka" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>State</label> <input type="text" class="form-control" name="state" id="state" placeholder="Enter State" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Student Strength</label> <input type="text" class="form-control" name="strength" id="strength" placeholder="Enter Student Strength" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label for="">Courses available </label> <select class="form-control" name="courses" id="courses">
                                                        <option value="">--Select--</option>
                                                        <option value="">-----</option>
                                                        <option value="">-----</option>
                                                        <option value="">-----</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label for="">Classroom Details</label> <select class="form-control" name="classroom" id="classroom">
                                                        <option value="">--Select--</option>
                                                        <option value="">-----</option>
                                                        <option value="">-----</option>
                                                        <option value="">-----</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Constucted Area in Sq.ft</label> <input type="text" class="form-control" name="area" id="area" placeholder="Enter Construction Area" required=""> </div>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;"> <label for="">Person Details who linked with MMNF :</label>
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
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="person" id="person" placeholder="Enter Person Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone1" id="phone1" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;"> <label for="">Ulema's with Madrasa:</label>
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Name</th>
                                                            <th style="border: 1px solid black;">Mobile Number</th>
                                                            <th style="border: 1px solid black;">Qualification</th>
                                                            <th style="border: 1px solid black;">Degree Qualification</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone2" id="phone2" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification1" id="qualification1" placeholder="Enter Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification1" id="dqualification1" placeholder="Enter Degree Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name3" id="name3" placeholder="Enter Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone3" id="phone3" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification2" id="qualification2" placeholder="Enter Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification2" id="dqualification2" placeholder="Enter Degree Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name4" id="name4" placeholder="Enter Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone4" id="phone4" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification3" id="qualification3" placeholder="Enter Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification3" id="dqualification3" placeholder="Enter Degree Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">04</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name5" id="name5" placeholder="Enter Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone5" id="phone5" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification4" id="qualification4" placeholder="Enter Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification4" id="dqualification4" placeholder="Enter Degree Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">05</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name6" id="name6" placeholder="Enter Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone6" id="phone6" placeholder="Mobile Number" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="qualification5" id="qualification5" placeholder="Enter Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="dqualification5" id="dqualification5" placeholder="Enter Degree Qualification" required="" style="width:300px"></td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do You Have Own Premises ? (YES / NO)</label> <input type="text" class="form-control" name="premises" id="premises" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Is Ground Available to Play Student ? (YES / NO)</label> <input type="text" class="form-control" name="student" id="student" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Is Dining Hall Available ? (YES / NO)</label> <input type="text" class="form-control" name="hall" id="hall" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>What is Source of Portable Water ?</label> <input type="text" class="form-control" name="water" id="water" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you Have Medical Emergency kit ? (YES / NO)</label> <input type="text" class="form-control" name="medical" id="medical" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you take benifit of SPQEM Scheme of Central Govt ? (YES / NO)</label> <input type="text" class="form-control" name="benefit" id="benefit" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you update with regular audit ? (YES / NO)</label> <input type="text" class="form-control" name="audit" id="audit" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have U-Diar Code of Education Dept ? (YES / NO)</label> <input type="text" class="form-control" name="code" id="code" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you update with Waqf / Charity Compliance ? (YES / NO)</label> <input type="text" class="form-control" name="update" id="update" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you take beneift of Madrasa Modernisation scheme of State Govt ? (YES / NO)</label> <input type="text" class="form-control" name="scheme" id="scheme" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>How many Teachers with Madrasa for Teaching Regional language(English, Maths, Science, Skill Courses etc.)</label> <input type="text" class="form-control" name="teachers" id="teachers" placeholder="Enter Number of Teachers" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you give passout Student's detail to MMNF for the purpose of their financial progress(education,job,skills,development) ? (YES / NO)</label> <input type="text" class="form-control" name="passout" id="passout" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Do you have any commercial activities for fund raising ? (YES / NO)</label> <input type="text" class="form-control" name="activities" id="activities" placeholder="If Yes the type Yes | If NO then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload MMNF registration fee transfer receipt.</label><br> <input type="file" name="upload" value="" class="form-control"> </div>
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