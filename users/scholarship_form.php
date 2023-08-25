<?php
include "function.php";

if (isset($_POST['submit'])) {
    $scholarship = mysqli_escape_string($conn, $_POST['scholarship']);
    $beneficiaries = mysqli_escape_string($conn, $_POST['beneficiaries']);
    $eligibility = mysqli_escape_string($conn, $_POST['eligibility']);
    $percentage = mysqli_escape_string($conn, $_POST['percentage']);
    $gender = mysqli_escape_string($conn, $_POST['gender']);
    $class_id = $_POST['class_id'];

    $sql = "INSERT INTO scholarship_details (scholarship, beneficiaries, eligibility_income, percentage, gender)
            VALUES ('$scholarship', '$beneficiaries', '$eligibility', '$percentage', '$gender')";

    if ($res_sch = mysqli_query($conn, $sql)) {
        unset($_POST);
        unset($_REQUEST);
        echo "Data inserted successfully.";
        $last_id = mysqli_insert_id($conn);

        foreach ($class_id as $class_id) {
            $sql_scheme_trans = "INSERT INTO `schemes_trans`(`class_id`, `scheme_id`) VALUES ($class_id,  $last_id)";
            mysqli_query($conn, $sql_scheme_trans);
        }

        echo "Last inserted ID is: " . $last_id;
        ?>
        <script>
            window.location = "eligible_schemes.php";
        </script>
<?php
} else {
        echo "Error: " . mysqli_error($conn);
    }

}

// Select all eduation list from tbl_edu_master
$sql_edu_master = "SELECT * FROM `tbl_education_master`";
$res_edu_master = mysqli_query($conn, $sql_edu_master);
$rows_edu_mater = mysqli_fetch_all($res_edu_master, MYSQLI_ASSOC);

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
                                    <h3 class="card-title">Scholarship Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="scholarship_form.php" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- <div class="col-lg-4">
                                                <div class="form-group"> <label>Serial Number</label> <input type="text" class="form-control" name="sr_no" id="sr_no" placeholder="Enter Serial Number" required=""> </div>
                                            </div> -->
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Scholarship Name</label> <input type="text" class="form-control" name="scholarship" id="scholarship" placeholder="Enter Scholarship Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Beneficiaries</label> <input type="text" class="form-control" name="beneficiaries" id="beneficiaries" placeholder="Enter Beneficiaries Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Eligibility Income Criteria</label> <input type="number" class="form-control" name="eligibility" id="eligibility" placeholder="Enter Eligibility Income Criteria" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Desirable Percentage</label> <input type="number" class="form-control" name="percentage" id="percentage" placeholder="Enter Percentage" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="gender">Education Criteria</label>
<?php

if (count($rows_edu_mater) > 0) {

    foreach ($rows_edu_mater as $value) {
        ?>
            <div class="form-check">
                <input type="checkbox" name="class_id[]" class="form-check-input" id="<?=$value['id'];?>" value="<?=$value['id'];?>">
                <label class="form-check-label" for="<?=$value['id'];?>" style="cursor: pointer;"><?=$value['edu_name'];?></label>
            </div>
<?php
}
}
?>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" name="gender" id="gender" required>
                                                    <option value="">Select gender</option>
                                                    <option value="0">Male</option>
                                                    <option value="1">Female</option>
                                                    <option value="2">Both (Male &amp; Female)</option>
                                                </select>
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