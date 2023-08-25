<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?><?php include("config.php"); 
error_reporting (0);
if(isset($_POST['btn_submit']))
{  
		 $name = $_POST['name'];
		 $mobile = $_POST['mobile'];
		 $email = $_POST['email'];
		 $education = $_POST['education'];
		 $address = $_POST['address'];
		 $o_address = $_POST['o_address'];
		 $w_address = $_POST['w_address'];
		 $b_type = $_POST['b_type'];
		 $b_title = $_POST['b_title'];
		 $shopact = $_POST['shopact'];
		 $gst = $_POST['gst'];
		 $msme = $_POST['msme'];
		 $p_tax = $_POST['p_tax'];
		 $esic = $_POST['esic'];
		 $fassai = $_POST['fassai'];

		 $s_skilled = $_POST['s_skilled'];
		 $s_loan = $_POST['s_loan'];
		 $m_scheme = $_POST['m_scheme'];
		 $f_loan = $_POST['f_loan'];
		 $credit_loan = $_POST['credit_loan'];
		 $b_turnover = $_POST['b_turnover'];
		 $website = $_POST['website'];
		 $app = $_POST['app'];
		 $soc_media = $_POST['soc_media'];
		 $platform = $_POST['platform'];
		 $traning = $_POST['traning'];
		 $account_h = $_POST['account_h'];
		 $coach = $_POST['coach'];
		 $expect = $_POST['expect'];
		 
	echo $sql="INSERT INTO `reg_tijarat`(`name`, `mobile`, `email`, `education`, `address`, `o_address`, `w_address`, `b_type`, `b_title`, `shopact`, `gst`, `msme`, `p_tax`, `esic`, `fassai`, `s_skilled`, `s_loan`, `m_scheme`, `f_loan`, `credit_loan`, `b_turnover`, `website`, `app`, `soc_media`, `platform`, `traning`, `account_h`, `coach`, `expect`) VALUES ('$name',  '$mobile',  '$email',  '$education',  '$address',  '$o_address',  '$w_address',  '$b_type',  '$b_title',  '$shopact',  '$gst',  '$msme',  '$p_tax',  '$esic',  '$fassai',  '$s_skilled',  '$s_loan',  '$m_scheme',  '$f_loan',  '$credit_loan',  '$b_turnover',  '$website',  '$app',  '$soc_media',  '$platform',  '$traning',  '$account_h',  '$coach',  '$expect')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> 
			window.alert("Information Updated")
        	window.location.href="reg_tijarat.php";
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
  <title> Tijarat Registration </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="dist/img/logof.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">  <!-- Font Awesome -->
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
      <h1>Registration Form</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="registration.php">Registration </a></li>
        <li class="active">Tijarat Registration </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tijarat Registration </h3>
            </div>
            
            
           
                
           
            <form action="" method="post" role="form"  enctype="multipart/form-data">
                         <div class="box-body">
                          <div class="form-group">
                            <label>Name of NGO</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="name" id="name" placeholder="Enter the name of Ngo">
                          </div>
                          <div class="form-group">
                            <label>Mobile</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="mobile" id="mobile" placeholder="Enter the mobile no +91 xxxxx77">
                          </div>
                          <div class="form-group">
                            <label>Email Id</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="email" id="email" placeholder="Enter the Email ngo@4333">
                          </div>
                          <div class="form-group">
                            <label>Education</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="education" id="education" placeholder="Enter the Education">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="form-group">
                            <label>Office Address</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="o_address" id="o_address" placeholder="Enter the Office address">
                          </div>
                          <div class="form-group">
                            <label>Work / Godown</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="w_address" id="w_address" placeholder="Enter work or godown">
                          </div>
                          <div class="form-group">
                            <label>Type Of Business</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="b_type" id="b_type" placeholder="Enter the bussiness type.">

                          </div>
                          <div class="form-group">
                            <label>Title of Business. </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="b_title" id="b_title" placeholder="Enter the title of business.">
                          </div>
                          <div class="form-group">
                            <label>Do you have shopact ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="shopact" id="shopact" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have GST ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="gst" id="gst" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have MSME ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="msme" id="msme" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have professional TAX ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="p_tax" id="p_tax" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have ESIC ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="esic" id="esic" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have fassai ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="fassai" id="fassai" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Staff with you</label>
                            <div class="input-select">
                              <select name="s_skilled" id="s_skilled"  class="form-control">
                                <option >-select-</option>
                                <option value="skilled">skilled</option>
                                <option value="Unskilled">Unskilled</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Do You enjoy Government scheme of subsidy loan ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="s_loan" id="s_loan" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you enjoy minority loan scheme  ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="m_scheme" id="m_scheme" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you require intrest free loan ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="f_loan" id="f_loan" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have cash / credit loan ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="credit_loan" id="credit_loan" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Your Business turnover.</label>
                            <div class="input-select">
                              <select name="b_turnover" id="b_turnover"  class="form-control">
                                <option >-select-</option>
                                <option value="upto1">Upto 5 lakh</option>
                                <option value="upto2">Upto 10 lakh</option>
                                <option value="upto3">Upto 25 lakh</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Do you have website ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="website" id="website" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have mobile app ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="app" id="app" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Which Social / Digital media presence you have ?</label>
                            <div class="input-select">
                              <select name="soc_media" id="soc_media"  class="form-control">
                                <option >-select-</option>
                                <option value="fb">Facebook</option>
                                <option value="tw">Twitter</option>
                                <option value="in">Insta</option>
                                <option value="li">Linked in</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Are you linked with E-Commerce platform if yes then give its name. </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="platform" id="platform" placeholder="Enter the name of platform">
                          </div>
                          <div class="form-group">
                            <label>Do you have completed any professional training or transforming lectures, if yes then please write about it ? </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="training" id="training" placeholder="Enter the detail here">
                          </div>
                          <div class="form-group">
                            <label>Are you connected with C.A who handles account  ? </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="account_h" id="account_h" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have any business coach portfolio manager ? </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="coach" id="coach" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>What you Expect from MMNF for own growth as well as for community upliftment ?</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="expect" id="expect" placeholder="Enter detail here">
                          </div>
                          
                        </div>
                        
                        <div class="box-footer">
              <div class="col-md-12" align="center">
                            <button type="submit" class="btn btn-warning" name="btn_submit"><strong>Submit</strong></button>
                          </div>
              
              </div>
                      </form>
            
            
             
          </div> 

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Important Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button> 
              </div>
             
          </div> 
        </div>
        <!--/.col (right) -->
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
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
