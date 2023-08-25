<?php
include "function.php";

if(isset($_POST['submit'])){
    $organization = $_POST['organization'];
    $type = $_POST['type'];    
    $baddress = $_POST['baddress'];
    $pcode = $_POST['pcode'];
    $designation = $_POST['designation'];
    $Oarea = $_POST['Oarea'];    
    $Tarea = $_POST['Tarea'];
    $capacity = $_POST['capacity'];

    // Create a prepared statement
    $sql = "INSERT INTO developer_form (organization, type, baddress, pcode, designation, Oarea, Tarea, capacity) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, "ssssssss", $organization, $type, $baddress, $pcode, $designation, $Oarea, $Tarea, $capacity);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="images/logo.png" rel="icon">
  <title>MMNF</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include "navbar.php" ; ?>

  <?php include "aside.php" ; ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registration as a Skill Developer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration as a Skill Developer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Portal Membership Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="developer_form.php" enctype="multipart/form-data">
                <div class="card-body">                  
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Name of the Organization</label>
                        <input type="text" class="form-control" name="organization" id="organization" placeholder="Enter Name of the Organization" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Type</label><br>
                        <input type="radio" name="type" value="NGO"> NGO &emsp;                   
                        <input type="radio" name="type" value="Proprietor"> Proprietor &emsp;
                        <input type="radio" name="type" value="Partnership"> Partnership &emsp;                   
                        <input type="radio" name="type" value="Private Limited"> Private Limited &emsp;
                        <input type="radio" name="type" value="LLP"> LLP                        
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Address of Business</label>
                        <input type="text" class="form-control" name="baddress" id="baddress" placeholder="Enter Address of Business" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Pin-Code</label>
                        <input type="text" class="form-control" name="pcode" id="pcode" placeholder="Enter Pin-Code" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Your Designation</label>
                        <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Your Designation" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Office Space Area</label>
                        <input type="text" class="form-control" name="Oarea" id="Oarea" placeholder="Enter Office Space Area" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Training Room Area</label>
                        <input type="text" class="form-control" name="Tarea" id="Tarea" placeholder="Enter Training Room Area" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Seating Capacity</label>
                        <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Enter Seating Capacity" required="">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          
          </div>
          <!--/.col (left) -->
    
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a>
    </strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
