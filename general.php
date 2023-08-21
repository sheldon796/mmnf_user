<?php  include "function.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];	
    $email = $_POST['email'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $occ = $_POST['occ'];	
    $experty = $_POST['experty'];
    $s_experience = $_POST['s_experience'];
    $age_group = $_POST['age_group'];	
    $gender = $_POST['gender'];
    $r_join = $_POST['r_join'];
    $sql = "INSERT INTO general (name, mobile, email, address, qualification, occ, experty, s_experience, age_group, gender, r_join) values ('$name', '$mobile', '$email', '$address', '$qualification', '$occ', '$experty', '$s_experience', '$age_group', '$gender', '$r_join')";
    mysqli_query($conn,$sql);
}
?>
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
                            <h1>Registration Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Registration Form</li>
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
                                    <h3 class="card-title">Individual Registration Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="general.php" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Name</label> <input type="text" name="name" id="name" placeholder="Enter Full Name" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Email</label> <input type="text" name="email" id="email" placeholder="Enter Email ID" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Address</label> <input type="text" name="address" id="address" placeholder="Enter Full Address" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Qualification</label>
                                                    <div class="input-select">
                                                        <select name="qualification" id="qualification" class="form-control">
                                                            <option>-Select-</option>
                                                            <option value="SSC">SSC</option>
                                                            <option value="HSC">HSC</option>
                                                            <option value="Graduate">Graduate</option>
                                                            <option value="Post-Graduate">Post-Graduate</option>
                                                            <option value="Doctorate">Doctorate</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Occupation</label> <input type="text" name="occ" id="occ" placeholder="Enter Occupation" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Experty</label> <input type="text" name="experty" id="experty" placeholder="Enter Experty" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Social Experience</label>
                                                    <div class="input-select"> <select name="s_experience" id="s_experience" class="form-control">
                                                            <option>-Select-</option>
                                                            <option value="Education">Education</option>
                                                            <option value="Health">Health</option>
                                                            <option value="Urban_Development">Urban Development</option>
                                                            <option value="Rural_Development">Rural Development</option>
                                                            <option value="Environment">Environment</option>
                                                            <option value="Business_Development">Business Development</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Age Group</label>
                                                    <div class="input-select"> <select name="age_group" id="age_group" class="form-control">
                                                            <option>-Select-</option>
                                                            <option value="Below 15">Below 15</option>
                                                            <option value="15-20">15-20</option>
                                                            <option value="20-25">20-25</option>
                                                            <option value="25-30">25-30</option>
                                                            <option value="30-35">30-35</option>
                                                            <option value="35-40">35-40</option>
                                                            <option value="Above 40">Above 40</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Gender</label>
                                                    <div class="input-select"> <select name="gender" id="gender" class="form-control">
                                                            <option>-Select</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Others">Others</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Pay 100 Rs.</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div align="center"> <img src="images/barcode.jpeg" width="300px" height="500px" /> </div>
                                                        </div>
                                                        <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Reason of joining</label> <input type="text" class="form-control" name="r_join" id="r_join" placeholder="Enter The Reason of joining"> </div>
                                            </div>
                                        </div> <!-- /.card-body -->
                                        <div class="card-footer"> <button type="submit" name="submit" class="btn btn-primary">Submit</button> </div>
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