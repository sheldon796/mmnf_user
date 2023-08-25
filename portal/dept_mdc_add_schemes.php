<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
include("config.php");  
error_reporting (0);
if(isset($_POST['btn_submit']))
{ 

$category = $_POST['category'];
$name = $_POST['name'];
$short_description = $_POST['short_description'];
$services_details = $_POST['services_details'];
$linkk  = $_POST['linkk'];
$eligibility  = $_POST['eligibility'];
$caste  = $_POST['caste'];
$gender  = $_POST['gender'];
$castigates  = $_POST['castigates'];
$othercastigates  = $_POST['othercastigates'];
$marital_status  = $_POST['marital_status'];
$current_occupation  = $_POST['current_occupation'];
$income_limit   = $_POST['income_limit'];
$domacile = $_POST['domacile'];
$current_class   = $_POST['current_class'];
$previous_class   = $_POST['previous_class'];
$previous_marks   = $_POST['previous_marks'];
$documents_required1 = $_POST['documents_required1'];
$documents_required2 = $_POST['documents_required2'];
$documents_required3 = $_POST['documents_required3'];
$documents_required4 = $_POST['documents_required4'];
$documents_required5 = $_POST['documents_required5'];
$documents_required6 = $_POST['documents_required6'];
$documents_required7 = $_POST['documents_required7'];
$documents_required8 = $_POST['documents_required8'];
$documents_required9 = $_POST['documents_required9'];
$documents_required10 = $_POST['documents_required10'];
$datee = $_POST['datee'];

$eligible1 = $_POST['eligible1'];
$eligible2 = $_POST['eligible2'];
$eligible3 = $_POST['eligible3'];
$eligible4 = $_POST['eligible4'];
$eligible5 = $_POST['eligible5'];
$eligible6 = $_POST['eligible6'];
$eligible7 = $_POST['eligible7'];
$eligible8 = $_POST['eligible8'];
$eligible9 = $_POST['eligible9'];
$eligible10 = $_POST['eligible10'];	
	 
	$sql="INSERT INTO `add_schemes`
	(`category`, `name`, `short_description`, `services_details`, `linkk`, `eligibility`, `caste`, `gender`,`castigates`, `othercastigates`, `marital_status`, `current_occupation`, `income_limit`,`domacile`, `documents_required1`, `documents_required2`, `documents_required3`, `documents_required4`, `documents_required5`, `documents_required6`, `documents_required7`, `documents_required8`, `documents_required9`, `documents_required10`, `datee`, `current_class`, `previous_class`, `previous_marks`, `eligible1`,`eligible2`,`eligible3`,`eligible4`,`eligible5`,`eligible6`,`eligible7`,`eligible8`,`eligible9`,`eligible10`) VALUES 
	
	
	('$category', '$name', '$short_description', '$services_details', '$linkk', '$eligibility', '$caste', '$gender','$castigates', '$othercastigates', '$marital_status', '$current_occupation', '$income_limit', '$domacile', '$documents_required1', '$documents_required2', '$documents_required3', '$documents_required4', '$documents_required5', '$documents_required6', '$documents_required7', '$documents_required8', '$documents_required9', '$documents_required10', '$datee', '$current_class', '$previous_class', '$previous_marks', '$eligible1', '$eligible2', '$eligible3', '$eligible4', '$eligible5', '$eligible6', '$eligible7', '$eligible8', '$eligible9', '$eligible10')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> window.alert("Information Updated")
        window.location = 'dept_mdc_schemes.php';
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
<title>Add Schemes</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="icon" href="dist/img/logof.png">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="plugins/iCheck/all.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
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
      <h1> Add Schemes <small>Preview</small> </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Schemes</a></li>
        <li class="active">Add Schemes</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Scheems</h3>
            </div>
            <!-- /.box-header -->
            <form role="form" method="post" action="" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Schemes Category</label>
                  <select class="form-control" name="category" id="category" >
                    <option value="Education">Education </option>
                    <option value="Health">Health </option>
                    <option value="Pension">Pension </option>
                    <option value="Housing">Housing</option>
                    <option value="Business"> Business </option>
                    <option value="Insurance">Insurance </option>
                    <option value="Financial">Financial </option>
                    <option value="Agriculture">Agriculture </option>
                    <option value="Labour">Labour </option>
                    <option value="CWS">CWS</option>
                    <option value="Others">Others </option>
                  </select>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Scheme Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Schemes Short Discription</label>
                  <textarea class="form-control" rows="2" placeholder="Enter ..." name="short_description" id="short_description" ></textarea>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Schemes Details</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="schemes_details" id="services_details" ></textarea>
                </div>
                <div class="form-group">
                  <label>Link</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="linkk" id="linkk">
                </div>
                <!-- text input -->
              
                <div class="form-group">
                  <label for="">Caste </label>
                  <select  class="form-control" name="caste" id="caste">
                  <option>--Select--</option> 
                  <option value="All">All</option>
                    <option value="OBC">OBC</option>
                    <option value="SC">SC</option>
                    <option value="SBC">SBC</option>
                    <option value="VJ/NT">VJ/NT</option>
                    <option value="Open">Open</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Gender</label>
                  <select  class="form-control" name="gender" id="gender">
                  <option>--Select--</option>
                    <option value="For All">For All</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Marital Status</label>
                  <select  class="form-control" name="marital_status" id="marital_status">
                  <option>--Select--</option>
                    <option value="Un-Married"> Un-Married</option>
                    <option value="Married"> Married</option>
                    <option value="Divorcee"> Divorcee</option>
                    <option value="Widow"> Widow</option>
                    <option value="Widower"> Widower</option>
                  </select>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Community</label>
                      <select  class="form-control" name="castigates" id="castigates" required>
                        <option>--Select--</option>
                        <option value="Minority">Minority</option> 
                      </select>
                    </div> 
                    
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Other Community</label>
                      <select  class="form-control" name="othercastigates" id="othercastigates">
                      	<option value="">--Select--</option>
                        <option value="COVID Affected ">COVID Affected</option>
                        <option value="Registered Labour">Registered Labour</option>
                        <option value="Transport Staff">Transport Staff</option>
                      </select>
                    </div> 
                    
                  </div>

</div>


   

                <div class="form-group">
                  <label for="">Current Occupation</label>
                  <select  class="form-control" name="current_occupation" id="current_occupation">
                  <option>--Select--</option>
                    <option value="Student">Student</option>
                    <option value="Un-Employes">Un-Employes</option>
                    <option value="Employed">Employed</option>
                    <option value="Business">Business</option>
                    <option value="Retired">Retired</option>
                    <option value="Registered Worker">Registered Worker</option>
                     
  

                    <option value="Driver">Driver</option>
                    <option value="Driver/Helper">Driver/Helper</option>
                  </select>
                </div>
                
                <div class="row">
        <!-- left column -->
        <div class="col-md-4">
        <div class="form-group">
                   
<label for="">Current Class</label>
<select class="form-control" name="current_class" id="current_class">
<option>Current Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
                   
<label for="">Previous Class</label>
<select class="form-control" name="previous_class" id="previous_class">
<option>Previous Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        
        <div class="col-md-4">
                <div class="form-group">
                  <label>Previous Marks</label>
                  <input type="number" class="form-control" placeholder="Enter Marks..." name="previous_marks" id="Marks" >
                  
                  
                </div>
        </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
         <label >Scheme Eligible for</label>
        <div class="row" align="left">
        <!-- left column -->
       
        <div class="col-md-2 col-xs-4">
        <div class="form-group">
                   

<select class="form-control" name="eligible1" id="eligible1">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        
        <div class="col-md-2 col-xs-4">
        <div class="form-group">
<select class="form-control" name="eligible2" id="eligible2">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        <div class="col-md-2 col-xs-4">
        <div class="form-group"> 
<select class="form-control" name="eligible3" id="eligible3">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        <div class="col-md-2 col-xs-4">
        <div class="form-group">
<select class="form-control" name="eligible4" id="eligible4">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
         <div class="col-md-2 col-xs-4">
        <div class="form-group">
<select class="form-control" name="eligible5" id="eligible5">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        <div class="col-md-2 col-xs-4">
        <div class="form-group">
<select class="form-control" name="eligible6" id="eligible6">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        
        
        <div class="col-md-2 col-xs-4">
        <div class="form-group"> 
<select class="form-control" name="eligible7" id="eligible7">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        <div class="col-md-2 col-xs-4">
        <div class="form-group">
<select class="form-control" name="eligible8" id="eligible8">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
         <div class="col-md-2 col-xs-4">
        <div class="form-group">
<select class="form-control" name="eligible9" id="eligible9">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        <div class="col-md-2 col-xs-4">
        <div class="form-group">
<select class="form-control" name="eligible10" id="eligible10">
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
<option value="Class 4">Class 4</option>
<option value="Class 5">Class 5</option>
<option value="Class 6">Class 6</option>
<option value="Class 7">Class 7</option>
<option value="Class 8">Class 8</option>
<option value="Class 9">Class 9</option>
<option value="Class 10">Class 10</option>
<option value="Class 11">Class 11</option>
<option value="Class 12">Class 12</option>
<option value="Deploma F.Y.">Deploma F.Y.</option>
<option value="Deploma S.Y.">Deploma S.Y.</option>
<option value="Deploma T.Y.">Deploma T.Y.</option>
<option value="Graducation F.Y.">Graducation F.Y.</option>
<option value="Graducation S.Y.">Graducation S.Y.</option>
<option value="Graducation T.Y.">Graducation T.Y.</option>
<option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
<option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
<option value="Ph.D.">Ph.D.</option>
</select> 
                </div>
        </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                
                 <div class="form-group">
                  <label>Income Limit</label>
                  <select  class="form-control" name="income_limit" id="income_limit">
                  	<option>--Select--</option>
                    <option value="BPL">BPL</option>
                    <option value="1,00,000">Below 1,00,000</option>
                    <option value="1,50,000">Below 1,50,000</option>
                    <option value="2,00,000">Below 2,00,000</option>
                    <option value="2,50,000">Below 2,50,000</option>
                    <option value="4,00,000">Below 4,00,000</option>
                    <option value="7,00,000">Below 7,00,000</option>
                    <option value="8,00,000">Below 8,00,000</option>
                    <option value="And Above">And Above</option>
                  </select>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="form-group">
                  <label>Domacile</label>
                  <select  class="form-control" name="domacile" id="domacile">
                  	<option>--Select--</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Dadra and Nagar Haveli and Daman & Diu">Dadra and Nagar Haveli and Daman & Diu</option>
                    <option value="The Government of NCT of Delhi">The Government of NCT of Delhi</option>
                    <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                    <option value="Ladakh">Ladakh</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    
                    </select>
                    
                   
                </div>
                
                <div class="form-group">
                  <label>Current Education</label>
                  <select  class="form-control" name="eurrent_education" id="eurrent_education">
                  	<option>--Select--</option>
                    <option value="Regular">Regular</option>
                    <option value="Professional">Professional</option> 
                  </select>
                </div>
                <div class="form-group">
                  <label>Documents Required</label>
                  <input type="text" class="form-control" placeholder="Enter Documents 1..." name="documents_required1" id="documents_required1" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 2..." name="documents_required2" id="documents_required2" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 3..." name="documents_required3" id="documents_required3" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 4..." name="documents_required4" id="documents_required4" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 5..." name="documents_required5" id="documents_required5" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 6..." name="documents_required6" id="documents_required6" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 7..." name="documents_required7" id="documents_required7" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 8..." name="documents_required8" id="documents_required8" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 9..." name="documents_required9" id="documents_required9" ><br>
                  <input type="text" class="form-control" placeholder="Enter Documents 10..." name="documents_required10" id="documents_required10" ><br>
                </div>
                <div class="form-group">
                  <label>Date:</label>
                  <div class="input-group date">
                    <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                    <input type="text" class="form-control pull-right"   name="datee" id="datee" >
                  </div>
                  <!-- /.input group -->
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"  name="btn_submit">Sumbit</button>
              </div>
            </form>
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--<div class="col-md-4">
           Horizontal Form 
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Eligibility</h3>
            </div>
              <div class="box-body">
              
              
              <div class="form-group">
                  <label>Currently studing in:</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name">
                </div>
                <div class="form-group">
                  <label>Previous class you studied: </label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name">
                </div>
                <div class="form-group">
                  <label>Scheme Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name">
                </div>
                <div class="form-group">
                  <label>Scheme Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name">
                </div>
                <div class="form-group">
                  <label>Scheme Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name">
                </div>
                <div class="form-group">
                  <label>Scheme Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name">
                </div>
                <div class="form-group">
                  <label>Scheme Name</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="name" id="name"> 
              </div> 
               
          </div>
           /.box 
        </div>
        /.col (right) 
      </div>-->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
