<?php include("config.php"); 
include("auth_session.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Madrasa Trust Registration form</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>MMNF</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>MMNF</b></span> </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">Website Administrator</span> </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header"> <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p> Website Administrator </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right"> <a href="logout.php" class="btn btn-default btn-flat">Sign out</a> </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image"> <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div>
        <div class="pull-left info">
          <p>Website Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php include("navigation.php"); ?>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>MMNF</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Contact Us</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Madrasa Trust Registration form</h3>
            </div>
             <?php
				$id = $_GET['id'];
				$sql = "SELECT * FROM reg_madrasa WHERE id = '$id'";  
				$result=$link->query($sql);
               	$row = $result->fetch_array()
                //$id = $roww['id'];?>
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                            <label for="exampleInputEmail1">Name of Trust</label>
                            <input type="text" class="form-control" name="name" id="name"  value="<?php echo $row['name'];?>">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Title </label>
                            <input type="text" class="form-control" name="title" id="title"  value="<?php echo $row['title'];?>">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" name="address" id="address"  value="<?php echo $row['address'];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">District</label>
                            <input type="text" class="form-control" name="district" id="district"  value="<?php echo $row['district'];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1" >Taluka</label>
                            <input type="text" class="form-control" name="taluka" id="taluka"  value="<?php echo $row['taluka'];?>">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">State</label>
                            <input type="text" class="form-control" name="state" id="state"  value="<?php echo $row['state'];?>">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Student Strength</label>
                            <input type="text" class="form-control" name="s_strength" id="s_strength"  value="<?php echo $row['s_strength'];?>">
                          </div>
                          
                           <div class="form-group">
                            <label for="exampleInputEmail1"> Courses available</label>
                            <div class="input-select">
                              <select name="course" id="course">
                                <option  value="<?php echo $row['course'];?>" ><?php echo $row['course'];?></option>
                                <option  value="<?php echo $row[''];?>">RCC</option>
                                <option  value="<?php echo $row[''];?>">Patra Roof</option>
                                <option  value="<?php echo $row[''];?>">Shed</option>
                              </select>
                            </div>
                          </div>
                         <br>
                         <br>
                         <div class="form-group">
                        <label >Person Details who linked with MMNF :</label>
 
                          <br>
                          <br>
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sr.No</th>
                                <th scope="col">Person name</th>
                                <th scope="col">Mobile No</th>
                                <th scope="col">Designation</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td><input type="text"  value="<?php echo $row['p_name'];?>" name="ap_name" id="ap_name" style="margin-bottom: 0px;"></td>
                                <td><input type="text"  value="<?php echo $row['p_mobile'];?>" name="ap_mobile" id="ap_mobile" style="margin-bottom: 0px;"></td>
                                <td><input type="text"  value="<?php echo $row['p_designation'];?>"  name="ap_designation" id="ap_designation" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                     
                          <div class="form-group">
                            <label for="exampleInputEmail1">Classroom Details</label>
                            <div class="input-select">
                              <select name="e_type" id="e_type">
                                <option value="<?php echo $row['class'];?>"><?php echo $row['class'];?></option>
                                <option  value="<?php echo $row[''];?>">Primary</option>
                                <option  value="<?php echo $row[''];?>">Secondary</option>
                                <option  value="<?php echo $row[''];?>">Higher_secondary</option>
                                <option  value="<?php echo $row[''];?>">Junior college</option>
                                <option  value="<?php echo $row[''];?>">Senior college</option>
                              </select>
                            </div>
                          </div>
                          
                            <div "form-group">
                            <label for="exampleInputEmail1">Constucted Area in Sq.ft</label>
                            <input type="text" class="form-control" name="area" id="area" value="<?php echo $row['area'];?>">
                          </div>
                          
                          
                           
                             
                            <div class="form-group">

                         <table class="table table-striped table-bordered table-responsive">
                            <thead>
                              <tr>
                                <th scope="col">Sr.No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Mobile No</th>
                                <th scope="col">Qualification</th>
                                <th scope="col">Degree Qualification</th>
                              </tr>
                            </thead>
                           <tbody>
                              <tr> 
                                <th scope="row">1</th>
                                <td><input type="text" name="u1_name" id="u1_name"  value="<?php echo $row['u1_name'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u1_mobile" id="u1_mobile" value="<?php echo $row['u1_mobile'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u1_qualification" id="u1_qualification"  value="<?php echo $row['u1_qualification'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d1_qualification" id="d1_qualification"  value="<?php echo $row['d1_qualification'];?>" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td><input type="text" name="u2_name" id="u2_name"  value="<?php echo $row['u2_name'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u2_mobile" id="u2_mobile" value="<?php echo $row['u2_mobile'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u2_qualification" id="u2_qualification"  value="<?php echo $row['u2_qualification'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d2_qualification" id="d2_qualification"  value="<?php echo $row['d2_qualification'];?>" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td><input type="text" name="u3_name" id="u3_name"  value="<?php echo $row['u3_name'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u3_mobile" id="u3_mobile" value="<?php echo $row['u3_mobile'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u3_qualification" id="u3_qualification"  value="<?php echo $row['u3_qualification'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d3_qualification" id="d3_qualification"  value="<?php echo $row['d3_qualification'];?>" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td><input type="text" name="u4_name" id="u4_name"  value="<?php echo $row['u4_name'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u4_mobile" id="u4_mobile" value="<?php echo $row['u4_mobile'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u4_qualification" id="u4_qualification"  value="<?php echo $row['u4_qualification'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d4_qualification" id="d4_qualification"  value="<?php echo $row['d4_qualification'];?>" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td><input type="text" name="u5_name" id="u5_name"  value="<?php echo $row['u5_name'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u5_mobile" id="u5_mobile" value="<?php echo $row['u5_mobile'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u5_qualification" id="u5_qualification"  value="<?php echo $row['u5_qualification'];?>" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d5_qualification" id="d5_qualification"  value="<?php echo $row['d5_qualification'];?>" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                           
                          
                          
                                         <div class="form-group">
                            <label for="exampleInputEmail1">Do You Have Own Premises ? (YES / NO)</label>
                            <input type="text" class="form-control" name="premise" id="premise"  value="<?php echo $row['premise'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Is Ground Available to Play Student ? (YES / NO) </label>
                            <input type="text" class="form-control"  name="av_ground" id="av_ground"  value="<?php echo $row['av_ground'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Is Dining Hall Available ? (YES / NO)</label>
                            <input type="text" class="form-control" name+"av_dining" id="av_dining"  value="<?php echo $row['av_dining'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">What is Source of Portable Water ?</label>
                            <input type="text" class="form-control" name="source_water" id="source_water" value="<?php echo $row['source_water'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Do you Have Medical Emergency kit ? (YES / NO)</label>
                            <input type="text" class="form-control" name="em_mkit" id="em_mkit"  value="<?php echo $row['em_mkit'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Do you take beneift of Madrasa Modernisation scheme of State Govt ? (YES / NO)</label>
                            <input type="text" class="form-control" name="govt_scheme" id="govt_scheme"  value="<?php echo $row['govt_scheme'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Do you take benifit of SPQEM Scheme of Central Govt ? (YES / NO)</label>
                            <input type="text" class="form-control"  name="cgovt_scheme" id="cgovt_scheme"  value="<?php echo $row['cgovt_scheme'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Do you have U-Diar Code of Education Dept ? (YES / NO)</label>
                            <input type="text" class="form-control" name="diar_code" id="diar_code"  value="<?php echo $row['diar_code'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">How many Teachers with Madrasa for Teaching Regional language(English, Maths, Science, Skill Courses etc.)</label>
                            <input type="text" class="form-control" name="rl_teachers" id="rl_teachers" value="<?php echo $row['rl_teachers'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Do you update with regular audit ? (YES / NO)</label>
                            <input type="text" class="form-control" name="r_audit" id="r_audit"  value="<?php echo $row['r_audit'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Do you update with Waqf / Charity Compliance ? (YES / NO)</label>
                            <input type="text" class="form-control" name="compliance" id="compliance"  value="<?php echo $row['compliance'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Do you give passout Student's detail to MMNF for the purpose of their financial progress(education,job,skill training,business development) ? (YES / NO)</label>
                            <input type="text" class="form-control" name="p_financial" id="p_financial"  value="<?php echo $row['p_financial'];?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Do you have any commercial activities for fund raising ? (YES / NO)</label>
                            <input type="text" class="form-control" name="f_raising" id="f_raising"  value="<?php echo $row['f_raising'];?>">
                          </div>
                          <div class="form-group">
                            <div class="input-select">
                              <label for="exampleInputEmail1">Upload MMNF registration fee transfer receipt.</label>
                              <input  type="file" name="fee_receipt"  id="fee_receipt"  value="<?php echo $row['fee_receipt'];?>" class="form-control-file" >
                            </div>
                          </div>
              <div class="box-footer" align="center">
                <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
                </div>
            </form>
          </div>
          </div>
        <div class="col-xs-4">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact Us</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name of Trust</th>  
                    <th>Title of Madrasa </th> 
                    <th>Full Address  </th>
                    <th>District </th>
                    <th>Student Strength </th>
                    <th>Courses available </th> 
                    
                    <th>Activity</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
				$sql = 'SELECT * FROM reg_madrasa';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
                  <?php $id = $row['id'];?>
                                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['district'];?></td>
                    <th><?php echo $row['s_strength'];?></th>
                    <th><?php echo $row['course'];?></th> 
                    <th><div class="btn-group"><a href="" class="btn btn-primary"> <span><strong>View</strong></span> </a> </div></th>
                    <td><div class="btn-group"> <a href="events_achievement_edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning"> <span><strong>Edit</strong></span> </a> <a href="delete.php?cid=<?php echo $id;?>" class="btn btn-danger"> <span><strong>Delete</strong></span> </a> </div></td>
                  </tr>
                  <?php
				}
				?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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
