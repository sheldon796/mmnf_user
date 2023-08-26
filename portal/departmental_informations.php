<?php
//include auth_session.php file on all user panel pages
include "config.php";include "auth_session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/logo.png" rel="icon">
<title>MMNF</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="dist/img/logof.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- summernot editor -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
  <!-- Summernote end editor -->
  <script src="https://kit.fontawesome.com/d5a72dfcde.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php
include 'header.php';
include 'aside.php';
?>
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
                    <textarea class="form-control" name="description1" id="description1" rows="3" placeholder="Enter ..." data-lt-tmp-id="lt-133622" spellcheck="false" data-gramm="false"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Vision</label>
                    <textarea class="form-control" name="vision" id="vision" rows="3" placeholder="Enter Vision ..." data-lt-tmp-id="lt-133622" spellcheck="false" data-gramm="false"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Mission</label>
                    <textarea class="form-control" name="mission" id="mission" rows="3" placeholder="Enter Mission ..." data-lt-tmp-id="lt-133622" spellcheck="false" data-gramm="false"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Goals</label>
                    <textarea class="form-control" name="goals" id="goals" rows="3" placeholder="Enter Goals ..." data-lt-tmp-id="lt-133622" spellcheck="false" data-gramm="false"></textarea>
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
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
        $(function () {
          bsCustomFileInput.init();
        });
    </script>
</body>
<!-- AdminLTE for demo purposes -->
<script>
        $(function () {
          bsCustomFileInput.init();
        });
        $('textarea#description1').summernote({});
        $('textarea#vision').summernote({});
        $('textarea#mission').summernote({});
        $('textarea#goals').summernote({});
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
        if (mysqli_query($link, $sql)) {
            unset($_POST);
            unset($_REQUEST);
            echo "Data inserted successfully.";
            $last_id = mysqli_insert_id($link);
            echo "Last inserted ID is: " . $last_id;
            ?>
            <script>

              window.location = "departmental_team.php?id=<?php echo $last_id; ?>";
            </script>
            <?php
} else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    } else {
        echo "Error uploading files.";
    }

    exit;
}
?>