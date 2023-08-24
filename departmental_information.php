<?php
// include database connection file

require_once 'function.php';

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
  <?php include "navbar.php";?>
  <?php include "aside.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="departmental_information.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Department</label>
                    <select name="department" class="form-control">
                      <option value="Minority Development Centre">Minority Development Centre</option>
                      <option value="Community Development Centre">Community Development Centre</option>
                      <option value="Minority Affairs Research">Minority Affairs Research</option>
                      <option value="Academy for Competitive Exam">Academy for Competitive Exam</option>
                      <option value="Human Rights and Legal Forum">Human Rights and Legal Forum</option>
                      <option value="Skill Development Forum">Skill Development Forum</option>
                      <option value="Technobuiz">Technobuiz</option>
                      <option value="Minority">Minority</option>
                      <option value="Business Development Forum">Business Development Forum</option>
                      <option value="Healthcare and Paramedical">Healthcare and Paramedical</option>
                      <option value="Women Empowerment Centre">Women Empowerment Centre</option>
                      <option value="Financial Development Centre">Financial Development Centre</option>
                      <option value="Travel and Guidance Centre">Travel and Guidance Centre</option>
                      <option value="Disaster Management Centre">Disaster Management Centre</option>
                      <option value="Waqf Development Forum">Waqf Development Forum</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Departmental Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="department_images1">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append"> <span class="input-group-text">Upload</span> </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Title of Content</label>
                    <input type="text" class="form-control" name="title1" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description </label>
                    <textarea class="form-control" name="description1" rows="3" placeholder="Enter ..." data-lt-tmp-id="lt-133622" spellcheck="false" data-gramm="false"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Vision</label>
                    <input type="text" class="form-control" name="vision" id="exampleInputEmail1" placeholder="Enter Vision">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Mission</label>
                    <input type="text" class="form-control" name="mission" id="exampleInputEmail1" placeholder="Enter Mission">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Goals</label>
                    <input type="text" class="form-control" name="goals" id="exampleInputEmail1" placeholder="Enter Goals">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Objectives</label>
                    <input type="text" class="form-control" name="objectives" id="exampleInputEmail1" placeholder="Enter Objectives">
                  </div>
                </div>
                <div class="card-header" style="background-color:#007bff">
                    <h3 class="card-title" style="color:white">Work and Achievements</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Departmental Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="department_images2">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append"> <span class="input-group-text">Upload</span> </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Title of Content</label>
                    <input type="text" class="form-control" name="title2" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description </label>
                    <textarea class="form-control" name="description2" rows="3" placeholder="Enter ..." data-lt-tmp-id="lt-133622" spellcheck="false" data-gramm="false"></textarea>
                  </div>
                </div>
                <div class="card-footer"> <button type="submit" class="btn btn-primary" name="submit">Submit</button> </div>
              </form>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Horizontal Form -->
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div>
    <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a> </strong> </footer>
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
<?php
if (isset($_POST['submit'])) {
    $department = $_POST['department'];
    $title1 = $_POST['title1'];
    $description1 = $_POST['description1'];
    $vision = $_POST['vision'];
    $mission = $_POST['mission'];
    $goals = $_POST['goals'];
    $objectives = $_POST['objectives'];
    $title2 = $_POST['title2'];
    $description2 = $_POST['description2'];
    $target = "upload/departments/";

    // Check if the upload directory exists, create it if necessary
    if (!file_exists($target)) {
        mkdir($target, 0777, true);
    }

    $department_images1 = $_FILES['department_images1']['name'];
    $department_images2 = $_FILES['department_images2']['name'];

    $uploadStatus = true; // Variable to track upload status

    // Upload the first file
    if (!empty($_FILES['department_images1']['tmp_name'])) {
        $department_images1Target = $target . basename($department_images1);
        if (move_uploaded_file($_FILES['department_images1']['tmp_name'], $department_images1Target)) {
            echo "File 1 uploaded successfully.";
        } else {
            echo "Error uploading File 1.";
            $uploadStatus = false;
        }
    }

    // Upload the second file
    if (!empty($_FILES['department_images2']['tmp_name'])) {
        $department_images2Target = $target . basename($department_images2);
        if (move_uploaded_file($_FILES['department_images2']['tmp_name'], $department_images2Target)) {
            echo "File 2 uploaded successfully.";

        } else {
            echo "Error uploading File 2.";
            $uploadStatus = false;
        }
    }

    if ($uploadStatus) {
        $sql = "INSERT INTO departmental_information (department, department_images1, title1, description1, vision, mission, goals, objectives, department_images2, title2, description2)
                values ('$department', '$department_images1', '$title1', '$description1', '$vision', '$mission', '$goals', '$objectives', '$department_images2', '$title2', '$description2')";
        if (mysqli_query($conn, $sql)) {
            unset($_POST);
            unset($_REQUEST);
            echo "Data inserted successfully.";
            $last_id = mysqli_insert_id($conn);
            echo "Last inserted ID is: " . $last_id;
            ?>
            <script>

              window.location = "departmental_team.php?id=<?php echo $last_id; ?>";
            </script>
            <?php
} else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error uploading files.";
    }

    exit;
}
?>