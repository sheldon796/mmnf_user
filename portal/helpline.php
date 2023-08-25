<?php include("config.php"); 
include("auth_session.php"); ?>

<?php
error_reporting (0);
if(isset($_POST['btn_submit']))
{ 
 
 
 
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$reason = $_POST['reason'];
$category = $_POST['category'];
 
 
		 
	echo $sql="INSERT INTO `helpline_messages`( `name`, `email`, `mobile`, `reason`, `category`) VALUES ( '$name', '$email', '$mobile', '$reason', '$category')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> window.alert("Information Updated")
        window.location = 'home.php';
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
  <title> User Profile</title>
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
  <script src="https://kit.fontawesome.com/d5a72dfcde.js" crossorigin="anonymous"></script>
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
      <h1>Help Line
      <small><a href="helpline_add_contactpersons.php">MMNF Trustee</a></small> | <small><a href="helpline_add_directors.php">Add MDC Directors & Operators</a></small> | <small><a href="helpline_messages.php">View Messages</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="dist/img/logo.png" alt="User profile picture">

              <h3 class="profile-username text-center">MMNF</h3>

              <p class="text-muted text-center">Maharashtra Minority NGO Forum</p>
<hr>
                

              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted">C4 / 404, Bramha Avenue, Kondhwa, Pune, M.S., India</p>

              <hr>

              <a href="tel:+918390381731" class="btn btn-primary btn-block"><b>Call Now</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               

               

              <strong><i class="fa  fa-server margin-r-5"></i> Socual Network</strong>
<div class="text-left"> 
                <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a> 
                <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a> 
              </div>
              

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">MMNF Trustee</a></li>
              <li><a href="#timeline" data-toggle="tab">MDC Directors & Operators</a></li>
              <li><a href="#MMNFNetwork" data-toggle="tab">MMNF Network</a></li>
              <li><a href="#CityNetwork" data-toggle="tab">City Network</a></li>
              <li><a href="#NGO" data-toggle="tab">NGO's</a></li>
              <li><a href="#MinorityInstitutes" data-toggle="tab">Minority Institutes</a></li>
              <li><a href="#settings" data-toggle="tab">Contact Us</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              
              <table id="example15" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center" >Id</th>
                  <th class="text-center" >Applied Date</th>
                  <th class="text-center" >Name</th>
                  <th class="text-center" >Email</th>
                  <th class="text-center" >Subject</th>
                  <th class="text-center" >Message</th> 
                  <th class="text-center" >Action</th> 
                </tr>
                </thead>
                <tbody>
                <?php
				          $sql = 'SELECT * FROM helpline  ORDER BY id DESC';  
				          $result=$link->query($sql);
                  while($row = $result->fetch_array()){
                ?>
                <tr>
                  <td  class="text-center" ><?php echo $row['id'];?></td>
                  <td  class="text-center" ><?php echo $row['applied_date'];?></td>
                  <td  class="text-center" ><?php echo $row['name'];?></td>
                  <td  class="text-center" ><?php echo $row['email'];?></td>
                  <td  class="text-center" ><?php echo $row['subject'];?></td>
                  <td  class="text-center" ><?php echo $row['message'];?></td>
                  <td class="project-actions text-center">
                      <a class="btn btn-danger btn-sm" href="#?delete=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i>&ensp;Delete</a>
                  </td>
                </tr>
                <?php 	
                  }
                ?>
                </tbody>
              </table>
              
              
                <div class="box box-danger">
                 
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  
                   <?php
				              $sql = 'SELECT * FROM add_contactperson  ORDER BY id DESC';  
				              $result=$link->query($sql);
                      while($row = $result->fetch_array()){
                    ?>
                    <li>
                 
                      <img src="upload/helpline/<?php echo $row['image'];?>" alt="User Image">
                      <span class="users-list-date"><?php echo $row['category'];?></span>
                      <a class="users-list-name" href="#"><?php echo $row['name'];?></a>
                      <span class="users-list-date"><?php echo $row['mobile'];?></span>
                      <span class="users-list-date"><?php echo $row['email'];?></span> 
                                           
                    </li>
                    <?php 	} ?>
                    
                     
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div> 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
              <table id="example16" class="table table-bordered table-striped">
                <thead>
                <tr> 
                  <th>MDC Name</th>
                  <th>Director Name</th>
                  <th>Director Mobile</th>
                  <th>Director Email</th> 
                  <th>Operators Name</th>
                  <th>Operators Mobile</th>
                  <th>Operators Email</th> 
                </tr>
                </thead>
                <tbody>
                <?php
				$sql = 'SELECT * FROM add_directors  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>

                <tr>
                  <td><?php echo $row['MDC_Name'];?></td>
                  <td><?php echo $row['director_name'];?></td>
                  <td><?php echo $row['director_mobile'];?></td>
                  <td><?php echo $row['director_email'];?></td>
                  <td><?php echo $row['operators_name'];?></td>
                  <td><?php echo $row['operators_mobile'];?></td>
                  <td><?php echo $row['operators_email'];?></td>
                </tr>
                <?php 	} ?>
                </tbody>
                <!--<tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>-->
              </table>
                <div class="box box-danger">
                 
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  
                   <?php
				$sql = 'SELECT * FROM add_directors  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
                    <li>
                 
                      <img src="upload/helpline/<?php echo $row['image'];?>" alt="User Image">
                      <span class="users-list-date"><?php echo $row['category'];?></span>
                      <a class="users-list-name" href="#"><?php echo $row['name'];?></a>
                      <span class="users-list-date"><?php echo $row['mobile'];?></span>
                      <span class="users-list-date"><?php echo $row['email'];?></span> 
                                           
                    </li>
                    <?php 	} ?>
                    
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
              
              </div>
                 
              </div>
              <!-- /.tab-pane -->



			<div class="tab-pane" id="MMNFNetwork">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>E-Mail</th>
                  <th>Address</th> 
                </tr>
                </thead>
                <tbody>
                <?php
				$sql = 'SELECT * FROM reg_individual  ';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?> 

                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['mobile'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['address'];?></td>
                </tr>
                <?php 	} ?>
                </tbody>
                <!--<tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>-->
              </table></div>
            <div class="tab-pane" id="CityNetwork">
            
            <div class="box box-info">
             
              <div class="box-body">
                 
                 
                 <div class="row">
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">City Name </h3>
              <h5 class="widget-user-desc">Catogary Name: MDC</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">NGO/Charity Trust<span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li>
                <li><a href="#">Waqf Trust  <span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li>
                <li><a href="#">Madrsa Trust  <span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li>
                <li><a href="#">Kabrastan Trust <span class="pull-right badge bg-blue">31   Click Here to see all</span> </a></li>
                <li><a href="#">Inam Waqf  <span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li>
                <li><a href="#">MDC   <span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li>
                <li><a href="#">CDC  <span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li>
                <li><a href="#">MRC  <span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li>
                <li><a href="#">Technobuiz  <span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li>
                <li><a href="#">Tijarat  <span class="pull-right badge bg-blue">31   Click Here to see all</span></a></li> 
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div> 
      </div>
      
      
      
      
              </div> 
          </div>
            
            
            
            <table id="example12" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>E-Mail</th>
                  <th>Address</th> 
                </tr>
                </thead>
                <tbody>
                <?php
				$sql = 'SELECT * FROM reg_individual  ';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?> 

                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['mobile'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['address'];?></td>
                </tr>
                <?php 	} ?>
                </tbody>
                <!--<tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>-->
              </table></div>
            <div class="tab-pane" id="NGO"><table id="example13" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>E-Mail</th>
                  <th>Address</th> 
                </tr>
                </thead>
                <tbody>
                <?php
				$sql = 'SELECT * FROM reg_individual  ';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?> 

                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['mobile'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['address'];?></td>
                </tr>
                <?php 	} ?>
                </tbody>
                <!--<tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>-->
              </table></div>
            <div class="tab-pane" id="MinorityInstitutes"><table id="example14" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>E-Mail</th>
                  <th>Address</th> 
                </tr>
                </thead>
                <tbody>
                <?php
				$sql = 'SELECT * FROM reg_individual  ';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?> 

                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['mobile'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['address'];?></td>
                </tr>
                <?php 	} ?>
                </tbody>
                <!--<tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>-->
              </table></div> 








              <div class="tab-pane" id="settings">
                <form role="form" method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Name" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Mobile Number</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="Mobile Number" name="mobile">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Reason of Contact</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="" placeholder="Reason of Contact" name="reason"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Catogary</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="category" id="category">
                     <option value="Minority Affairs Research training Institute (MARTI)">Minority Affairs Research training Institute (MARTI)</option>
                     <option value="Academy for Competitive Exam (ACE)">Academy for Competitive Exam (ACE)</option>
                     <option value="Human Rights and Legal Forum">Human Rights and Legal Forum</option>
                     <option value="Skill Development Forum">Skill Development Forum</option>
                    <option value="Technobuiz-Business">Technobuiz-Business </option>
                    <option value="Tijarat">Tijarat </option>
                    <option value="Healthcare and Paramedical Training Centre">Healthcare and Paramedical Training Centre</option>
                    <option value="Women Empowerment Centre">Women Empowerment Centre</option>
                    <option value="Financial Development Centre">Financial Development Centre</option>
                    <option value="Travel and Guidance Centre">Travel and Guidance Centre</option>
                    <option value="Disaster Management Centre">Disaster Management Centre</option>
                    <option value="Waqf Development Forum">Waqf Development Forum</option>
                    <option value="Others">Others</option>
                  </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" required> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger"  name="btn_submit">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2022 <a href="https://hudastechnologies.com">Huda's Technologies</a>.</strong> All rights
    reserved.
  </footer>

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
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
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
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
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
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
	$('#example12').DataTable()
	$('#example13').DataTable()
	$('#example14').DataTable()
	$('#example15').DataTable()
	$('#example16').DataTable()
	
	
	
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
