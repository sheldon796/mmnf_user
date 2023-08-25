<?php
// include database connection file

require_once 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eligible Schemes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper"> <?php include "navbar.php";?> <?php include "aside.php";?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Eligible Schemes</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Eligible Schemes</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="scholarship_form.php">Add Scholarships</a></li>
                                    </ul>
                                </div> <!-- /.card-header -->
                                <div class="card-body justify-content-center">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Scholarship Schemes</th>
                                                <th class="text-center">Educational Background</th>
                                                <th class="text-center">Eligibility Criteria</th>
                                                <th class="text-center"> Minimum Required Percentage</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

$sql_portal = "SELECT * FROM portal_membership where user_id = " . $_SESSION['user_id'];
$result_portal = mysqli_query($conn, $sql_portal);
$row_portal = mysqli_fetch_assoc($result_portal);

$sql = "SELECT * FROM scholarship_details where id in (SELECT scheme_id FROM schemes_trans where class_id=" . $row_portal['current_class'] . ") and gender = " . $_SESSION['gender'] . " or gender = 2";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $sr = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $sr++; ?></td>
                                                <td class="text-center"><?php echo $row['scholarship']; ?></td>
                                                <td class="text-center"><?php echo $row['beneficiaries']; ?></td>
                                                <td class="text-center"> <?php
if ($row['eligibility_income'] == 0) {
            echo "Not Applicable";
        } else {
            echo " Income Limit Rs. " . $row['eligibility_income'];

        }
        ?></td>

                                                <td class="text-center"> <?php
if ($row['percentage'] == 0) {
            echo "Not Applicable";
        } else {
            echo " Minimum " . $row['percentage'] . "%";

        }
        ?></td>
                                                <td class="text-center">
                                                <?php
if ($row['gender'] == 0) {
            echo "Male";
        }
        if ($row['gender'] == 1) {
            echo "Female";
        }
        if ($row['gender'] == 2) {
            echo "Both (Male &amp; Female)";
        }
        ?>
                                                </td>
                                                <td class="project-actions text-center">
                                                    <a class="btn btn-danger btn-sm" href="scholarship_delete.php?delete=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i>Delete</a>
                                                </td>
                                            </tr>
                                            <?php
}
} else {
    echo "";
}
?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Scholarship Schemes</th>
                                                <th class="text-center">Educational Background</th>
                                                <th class="text-center">Eligibility Criteria</th>
                                                <th class="text-center"> Minimum Required Percentage</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </section> <!-- /.content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="government_form.php">Add Government Schemes</a></li>
                                    </ul>
                                </div> <!-- /.card-header -->
                                <div class="card-body justify-content-center">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Scholarship Schemes</th>
                                                <th class="text-center">Beneficiaries</th>
                                                <th class="text-center">Eligibility Criteria</th>
                                                <th class="text-center">Desired Percentage</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
// include database connection file
require_once 'function.php';
// Object creation
$sql = "SELECT * FROM government_scheme_details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $row['id']; ?></td>
                                                <td class="text-center"><?php echo $row['scholarship']; ?></td>
                                                <td class="text-center"><?php echo $row['beneficiaries']; ?></td>
                                                <td class="text-center"><?php echo $row['eligibility']; ?></td>
                                                <td class="text-center"><?php echo $row['percentage']; ?></td>
                                                <td class="text-center"><?php echo $row['gender']; ?></td>
                                                <td class="project-actions text-center">
                                                    <a class="btn btn-danger btn-sm" href="government_delete.php?delete=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i>Delete</a>
                                                </td>
                                            </tr>
                                            <?php
}
} else {
    echo "";
}
?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Scholarship Schemes</th>
                                                <th class="text-center">Beneficiaries</th>
                                                <th class="text-center">Eligibility Criteria</th>
                                                <th class="text-center">Desired Percentage</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </section> <!-- /.content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="non_government_form.php">Add Non Government Schemes</a></li>
                                    </ul>
                                </div> <!-- /.card-header -->
                                <div class="card-body justify-content-center">
                                    <table id="example5" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Scholarship Schemes</th>
                                                <th class="text-center">Beneficiaries</th>
                                                <th class="text-center">Eligibility Criteria</th>
                                                <th class="text-center">Desired Percentage</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
// include database connection file
require_once 'function.php';
// Object creation
$sql = "SELECT * FROM non_government_scheme_details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $row['id']; ?></td>
                                                <td class="text-center"><?php echo $row['scholarship']; ?></td>
                                                <td class="text-center"><?php echo $row['beneficiaries']; ?></td>
                                                <td class="text-center"><?php echo $row['eligibility']; ?></td>
                                                <td class="text-center"><?php echo $row['percentage']; ?></td>
                                                <td class="text-center"><?php echo $row['gender']; ?></td>
                                                <td class="project-actions text-center">
                                                    <a class="btn btn-danger btn-sm" href="non_government_delete.php?delete=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i>Delete</a>
                                                </td>
                                            </tr>
                                            <?php
}
} else {
    echo "";
}
?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Scholarship Schemes</th>
                                                <th class="text-center">Beneficiaries</th>
                                                <th class="text-center">Eligibility Criteria</th>
                                                <th class="text-center">Desired Percentage</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </section> <!-- /.content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="educational_form.php">Add Educational Loan</a></li>
                                    </ul>
                                </div> <!-- /.card-header -->
                                <div class="card-body justify-content-center">
                                    <table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Scholarship Schemes</th>
                                                <th class="text-center">Beneficiaries</th>
                                                <th class="text-center">Eligibility Criteria</th>
                                                <th class="text-center">Desired Percentage</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
// include database connection file
require_once 'function.php';
// Object creation
$sql = "SELECT * FROM educational_details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $row['id']; ?></td>
                                                <td class="text-center"><?php echo $row['scholarship']; ?></td>
                                                <td class="text-center"><?php echo $row['beneficiaries']; ?></td>
                                                <td class="text-center"><?php echo $row['eligibility']; ?></td>
                                                <td class="text-center"><?php echo $row['percentage']; ?></td>
                                                <td class="text-center"><?php echo $row['gender']; ?></td>
                                                <td class="project-actions text-center">
                                                    <a class="btn btn-danger btn-sm" href="scholarship_delete.php?delete=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i>Delete</a>
                                                </td>
                                            </tr>
                                            <?php
}
} else {
    echo "";
}
?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Scholarship Schemes</th>
                                                <th class="text-center">Beneficiaries</th>
                                                <th class="text-center">Eligibility Criteria</th>
                                                <th class="text-center">Desired Percentage</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div> <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script> <!-- AdminLTE for demo purposes -->

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });


        $(function () {
          $("#example3").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
          $('#example4').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });


        $(function () {
          $("#example5").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');
          $('#example6').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });


        $(function () {
          $("#example7").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example7_wrapper .col-md-6:eq(0)');
          $('#example8').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
    </script>
</body>
</html>
