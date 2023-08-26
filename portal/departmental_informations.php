<?php

//include auth_session.php file on all user panel pages

include "config.php";
include "auth_session.php";

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Departmental_information</title>

<!-- Tell the browser to be responsive to screen width -->

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="icon" href="dist/img/logof.png">

<!-- Bootstrap 3.3.7 -->


<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

<!-- Font Awesome -->

<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

<!-- Ionicons -->

<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

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

</head>

<body class="fixed hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php 

  include 'header.php';

  include 'aside.php';

  

  ?>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <form action="departmental_informations.php" method="POST" enctype="multipart/form-data">
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
                    <label for="objectives">Objectives</label>
                    <textarea class="form-control"  name="objectives" id="objectives" placeholder="Enter Objectives" rows="3"  data-lt-tmp-id="lt-133622" spellcheck="false" data-gramm="false"></textarea>
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

    </section>



  <footer class="main-footer">

    <div class="pull-right hidden-xs"> <b>Version</b> 2.4.0 </div>

    <strong>Copyright &copy; 2014-2022 <a href="https://hudastechnologies.com">Huda's Technologies</a>.</strong> All rights

    reserved. </footer>

  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Create the tabs -->

    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

    </ul>

    <!-- Tab panes -->

    <div class="tab-content">

      <!-- Home tab content -->

      <div class="tab-pane" id="control-sidebar-home-tab">

        <h3 class="control-sidebar-heading">Recent Activity</h3>

        <ul class="control-sidebar-menu">

          <li> <a href="javascript:void(0)"> <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">

              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)"> <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">

              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)"> <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">

              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)"> <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">

              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>

            </div>

            </a> </li>

        </ul>

        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>

        <ul class="control-sidebar-menu">

          <li> <a href="javascript:void(0)">

            <h4 class="control-sidebar-subheading"> Custom Template Design <span class="label label-danger pull-right">70%</span> </h4>

            <div class="progress progress-xxs">

              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)">

            <h4 class="control-sidebar-subheading"> Update Resume <span class="label label-success pull-right">95%</span> </h4>

            <div class="progress progress-xxs">

              <div class="progress-bar progress-bar-success" style="width: 95%"></div>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)">

            <h4 class="control-sidebar-subheading"> Laravel Integration <span class="label label-warning pull-right">50%</span> </h4>

            <div class="progress progress-xxs">

              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)">

            <h4 class="control-sidebar-subheading"> Back End Framework <span class="label label-primary pull-right">68%</span> </h4>

            <div class="progress progress-xxs">

              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>

            </div>

            </a> </li>

        </ul>

        <!-- /.control-sidebar-menu -->

      </div>

      <!-- /.tab-pane -->

      <!-- Stats tab content -->

      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>

      <!-- /.tab-pane -->

      <!-- Settings tab content -->

      <div class="tab-pane" id="control-sidebar-settings-tab">

        <form method="post">

          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">

            <label class="control-sidebar-subheading"> Report panel usage

            <input type="checkbox" class="pull-right" checked>

            </label>

            <p> Some information about this general settings option </p>

          </div>

          <!-- /.form-group -->

          <div class="form-group">

            <label class="control-sidebar-subheading"> Allow mail redirect

            <input type="checkbox" class="pull-right" checked>

            </label>

            <p> Other sets of options are available </p>

          </div>

          <!-- /.form-group -->

          <div class="form-group">

            <label class="control-sidebar-subheading"> Expose author name in posts

            <input type="checkbox" class="pull-right" checked>

            </label>

            <p> Allow the user to show his name in blog posts </p>

          </div>

          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">

            <label class="control-sidebar-subheading"> Show me as online

            <input type="checkbox" class="pull-right" checked>

            </label>

          </div>

          <!-- /.form-group -->

          <div class="form-group">

            <label class="control-sidebar-subheading"> Turn off notifications

            <input type="checkbox" class="pull-right">

            </label>

          </div>

          <!-- /.form-group -->

          <div class="form-group">

            <label class="control-sidebar-subheading"> Delete chat history <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a> </label>

          </div>

          <!-- /.form-group -->

        </form>

      </div>

      <!-- /.tab-pane -->

    </div>

  </aside>

  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed

       immediately after the control sidebar -->

  <div class="control-sidebar-bg"></div>

</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- FastClick -->

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js"></script>
  <!-- summernot editor -->  <!-- summernot editor -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script>
        $(function () {
          bsCustomFileInput.init();
        });
        $('textarea#description1').summernote({});
        $('textarea#vision').summernote({});
        $('textarea#mission').summernote({});
        $('textarea#goals').summernote({});
        $('textarea#objectives').summernote({});
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
