<?php include "function.php";
if (isset($_POST['submit'])) {
    $sr_no = $_POST['sr_no'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $ministry = $_POST['ministry'];
    $description = $_POST['description'];    
    $target = "upload/documents/GR/";
    
    //Upload GR    
    $target = $target . basename($_FILES['attachment']['name']);
    $attachment = ($_FILES['attachment']['name']);
    $attachmentFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    

    // Check if the uploaded file is a PDF
    if ($attachmentFileType != "pdf") {
      echo "Only PDF files are allowed.";
      exit;
    }
  
    if (move_uploaded_file($_FILES['attachment']['tmp_name'], $target)) {
      echo "Successfully uploaded.";
      ?>
    <script>
        window.location = "gr.php";
    </script>
    <?php
    } else {
      echo "Sorry, the file was not uploaded.";
    }

    $sql = "INSERT INTO government_resolutions (sr_no, month, year, ministry, description, attachment)
            values ('$sr_no', '$month', '$year', '$ministry', '$description', '$attachment')";
    mysqli_query($conn, $sql);
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
        <!-- Navbar --> <?php include "navbar.php";?> <?php include "aside.php";?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <!-- <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Membership Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Membership Form</li>
                            </ol>
                        </div>
                    </div> -->
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
                                    <h3 class="card-title">Government Resolutions Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Serial Number</label> <input type="text" class="form-control" name="sr_no" id="sr_no" placeholder="Enter Serial Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Month</label> <input type="text" class="form-control" name="month" id="month" placeholder="Enter Month" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Year</label> <input type="text" class="form-control" name="year" id="year" placeholder="Enter Year" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Ministry</label> <input type="text" class="form-control" name="ministry" id="ministry" placeholder="Enter Ministry" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Description</label> <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Attachment</label><br> <input type="file" name="attachment" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-footer"> <button type="submit" class="btn btn-primary" name="submit">Submit</button> </div>
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