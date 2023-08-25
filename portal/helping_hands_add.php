<?php
include("config.php"); 
include("auth_session.php"); 
error_reporting (0);
if(isset($_POST['btn_submit']))
{  
		 
		 
		 
		  $amount = $_POST['amount'];
		  $category = $_POST['category'];
		  $name = $_POST['name'];
		  $age = $_POST['age'];
		  $description = $_POST['description'];
		   
		  $ngo_name = $_POST['ngo_name'];
		  $verifier_name = $_POST['verifier_name'];
		  $datee = $_POST['datee'];
		 
		 
		 
		 
		 

		//This is the directory where images will be saved 
		$target = "upload/helping_hands_portal/"; 
		$target = $target . basename( $_FILES['upload']['name']);
		 
		//This gets all the other information from the form 
		$upload = ($_FILES['upload']['name']); 
		
		//Writes the photo to the server 
		if (move_uploaded_file($_FILES['upload']['tmp_name'], $target)) { 
			//Tells you if its all ok 
			echo "The file ". basename( $_FILES['upload']['name']). " has been uploaded, and your information has been added to the directory"; 
		} else { 
			//Gives an error if its not 
			echo "Sorry, there was a problem uploading your file.";
		} 

				 

	 echo $sql="INSERT INTO `helping_hands_portal`(`amount`, `category`, `name`, `age`, `description`, `upload`, `ngo_name`, `verifier_name`, `datee`) VALUES ('$amount', '$category', '$name', '$age', '$description', '$upload', '$ngo_name', '$verifier_name', '$datee')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
		<script> window.alert("Information Updated")
		window.location = 'helping_hands.php';
        
        </script>
	<?php
	}
	else 
	{?>
		<script> window.alert("Unable to Update")</script>
	<?php 
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Add Helping Hands</title>
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
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   
  <?php 
  include 'header.php';
  include 'aside.php';
  
  ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Helpig Hands</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Case</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
       
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
        
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Helping Hands</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">
                  <label>Category</label>
                  <select name="category" id="category"  class="form-control">                
                    <option>--Select--</option> 
                    <option value="Education">Education</option>
                    <option value="Health">Health</option>
                    <option value="Business">Business</option>
                    <option value="Disaster">Disaster</option>
                    <option value="Marriage">Marriage</option>
                    <option value="Ration Kit">Ration Kit</option>
                    <option value="Daily Medicine">Daily Medicine</option>
                    <option value="Homeless">Homeless</option>
                                        
                  </select> 
                </div>
                <div class="form-group">
                  <label>NGO Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="ngo_name" id="ngo_name">
                </div>
                <div class="form-group">
                  <label>Verifier Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="verifier_name" id="verifier_name">
                </div>
                <div class="form-group">
                  <label>Amount</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="amount" id="amount">
                </div>
                
                 
                
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name">
                </div>
                
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="description" id="description"></textarea>
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="age" id="age">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="upload" id="upload">

                  <p class="help-block">Upload Image</p>
                </div>
                
                
                 <div class="form-group">
                  <label>Date</label>
                  <input type="text" class="form-control" placeholder="22 Jan 2022" name="datee" id="datee">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
              </div>
            </form>
          </div>
          
          
          
           
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs"> <b>Version</b> 2.4.0 </div>
    <strong>Copyright &copy; 2022-2023 <a href="hudastechnologies.com">Huda's Technologies</a>.</strong> All rights
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
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
