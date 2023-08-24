<?php  include "function.php";
if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $mmnf_id = $_POST['mmnf_id'];	
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mnumber = $_POST['mnumber'];
    $qualification = $_POST['qualification'];	
    $experience = $_POST['experience'];
    $profession = $_POST['profession'];
    $relocate = $_POST['relocate'];	
    $charges = $_POST['charges'];
    $sql = "INSERT INTO trainer_form (pname, mmnf_id, email, address, mnumber, qualification, experience, profession, relocate, charges) values ('$pname', '$mmnf_id', '$email', '$address', '$mnumber', '$qualification', '$experience', '$profession', '$relocate', '$charges')";
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
                            <h1>Registration as a Trainer</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Registration as a Trainer</li>
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
                                <form method="post" action="trainer_form.php" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Person Name</label> <input type="text" class="form-control" name="pname" id="pname" placeholder="Enter Person Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>MMNF ID</label> <input type="text" class="form-control" name="mmnf_id" id="mmnf_id" placeholder="Enter MMNF ID" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Address</label> <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile Number</label> <input type="text" class="form-control" name="mnumber" id="mnumber" placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Qualification</label> <input type="text" class="form-control" name="qualification" id="qualification" placeholder="Enter Qualification" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Experience</label> <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter Experience" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Current Profession</label> <input type="text" class="form-control" name="profession" id="profession" placeholder="Enter Current Profession" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Are you ready to relocate to Maharashtra</label> <input type="text" class="form-control" name="relocate" id="relocate" placeholder="If Yes then type Yes| If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>How much charges expected per Hour</label> <input type="text" class="form-control" name="charges" id="charges" placeholder="Enter Details" required=""> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-footer"> <button type="submit" name="submit" class="btn btn-primary" >Submit</button> </div>
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