<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php
include("config.php");  
error_reporting (0);
if(isset($_POST['btn_submit']))
{ 
 

$name = $_POST['name'];
$fname = $_POST['fname'];
$Mobile = $_POST['Mobile'];
$whatsno = $_POST['whatsno'];
$email = $_POST['email'];
$Password = $_POST['Password'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Blood_Group = $_POST['Blood_Group'];
$Caste = $_POST['Caste'];
$Address = $_POST['Address'];
$District = $_POST['District'];
$Taluka = $_POST['Taluka'];
$State = $_POST['State'];
$PIN = $_POST['PIN'];
$Mashjid = $_POST['Mashjid'];

 
//This is the directory where images will be saved 
		$target = "upload/helpline/"; 
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

 
		 
	echo $sql="INSERT INTO `mdc_individual_reg`(`name`, `fname`, `upload`, `Mobile`, `whatsno`, `email`, `Password`, `Gender`, `Age`, `Blood_Group`, `Caste`, `Address`, `District`, `Taluka`, `State`, `PIN`, `Mashjid`) VALUES ('name', '$fname', '$upload', '$Mobile', '$whatsno', '$email', '$Password', '$Gender', '$Age', '$Blood_Group', '$Caste', '$Address', '$District', '$Taluka', '$State', '$PIN', '$Mashjid')";
	
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> window.alert("Information Updated")
        window.location = 'mdc_individual_view.php';
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
<title>Individual Beneficiary</title>
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


<!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
      <h1>Individual Beneficiary Registration </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Beneficiary Registration</a></li>
        <li class="active">Individual Beneficiary Registration</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Personal Details</h3>
              </div> 
               <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Photo</th>
                  <th>Full Name</th>
                  <th>Mobile</th>
                  <th>Email </th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$sql = 'SELECT * FROM mdc_individual_reg  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
                
                
                <tr>                                
                <td><img src="upload/individual_reg/<?php echo $row['upload'];?>" width="60" height="80"></td>                  
                <td><a href="mdc_individual_profile.php?mipid=<?php echo $row['id'];?>"><?php echo $row['name'];?> </a></td>                  
                <td><?php echo $row['Mobile'];?></td>                  
                <td><?php echo $row['email'];?></td>                  
                <td><?php echo $row['Gender'];?></td>                  
                <td><?php echo $row['Age'];?></td>                  
                <td><?php echo $row['Address'];?></td>                                 
                 </tr> 
                
                
                <?php }  ?>
                </tbody> 
              </table>
            </div>
               
              <!-- /.box-body -->
            </div>
           <!-- <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Educational Details</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <label for="">SSC</label>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="SSC_Marks" id="SSC_Marks" placeholder="Marks">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="SSC_Institute" id="SSC_Institute" placeholder="Institute">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="SSC_BU" id="SSC_BU" placeholder="Board/University">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">HSC</label>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="HSC_Marks" id="HSC_Marks" placeholder="Marks">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="HSC_Institute" id="HSC_Institute" placeholder="Institute">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="HSC_BU" id="HSC_BU" placeholder="Board/University">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Graduation</label>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="Grad_Marks" id="Grad_Marks" placeholder="Marks">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="Grad_Institute" id="Grad_Institute" placeholder="Institute">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="Grad_BU" id="Grad_BU" placeholder="Board/University">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Post-Graduation</label>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="PGrad_Marks" id="PGrad_Marks" placeholder="Marks">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="PGrad_Institute" id="PGrad_Institute" placeholder="Institute">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="PGrad_BU" id="PGrad_BU" placeholder="Board/University">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Doctorate </label>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="phd_Marks" id="phd_Marks" placeholder="Marks">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="phd_Institute" id="phd_Institute" placeholder="Institute">
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <input type="text"  class="form-control" name="phd_BU" id="phd_BU" placeholder="Board/University">
                    </div>
                  </div>
                </div>
              </div>
               /.box-body 
            </div>
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Occupational Details</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6"> Current Occupation </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select  class="form-control" name="Current_Occupation" id="Current_Occupation">
                        <option value="Student">Student</option>
                        <option value="Unemployes">Unemployes</option>
                        <option value="Employed">Employed</option>
                        <option value="Business">Business</option>
                        <option value="Retired">Retired</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
               /.box-body 
            </div>
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Educational Details</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <label for="">Current Class</label>
                      <select class="form-control">
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
                        <option value="Graducation F.Y.">Graducation F.Y.</option>
                        <option value="Graducation S.Y.">Graducation S.Y.</option>
                        <option value="Graducation T.Y.">Graducation T.Y.</option>
                        <option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
                        <option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
                        <option value="Ph.D.">Ph.D.</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <label for="">Previous Class</label>
                      <select class="form-control">
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
                        <option value="Graducation F.Y.">Graducation F.Y.</option>
                        <option value="Graducation S.Y.">Graducation S.Y.</option>
                        <option value="Graducation T.Y.">Graducation T.Y.</option>
                        <option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
                        <option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
                        <option value="Ph.D.">Ph.D.</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                      <label for="">Marks Obtained</label>
                      <input type="text"  class="form-control" name="1_Marks" id="1_Marks" placeholder="Marks">
                    </div>
                  </div>
                </div>
              </div>
               /.box-body 
            </div>
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Financials </h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6"> Family Income Per Year </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select  class="form-control" name="Family_Income" id="Family_Income">
                        <option value="1,00,000">Bolow 1,00,000</option>
                        <option value="1,50,000">Bolow 1,50,000</option>
                        <option value="2,00,000">Bolow 2,00,000</option>
                        <option value="2,50,000">Bolow 2,50,000</option>
                        <option value="4,00,000">Bolow 4,00,000</option>
                        <option value="7,00,000">Bolow 7,00,000</option>
                        <option value="8,00,000">Bolow 8,00,000</option>
                        <option value="And Above">And Above</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" align="left">Do You have a Bank Account in Nationalized Bank. Linked With Mobile & PAN Number</div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="checkbox" name="account" id="account">
                    </div>
                  </div>
                </div>
              </div>
               /.box-body 
            </div>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Document Details</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Aadhar Card</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Aadhar_Card" id="yes_Aadhar_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Aadhar_Card" id="Change__Aadhar_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Voter Card</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Voter_Card" id="yes_Voter_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Voter_Card" id="Change_Voter_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Ration Card </label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Ration_Card" id="yes_Ration_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Ration_Card" id="Change_Ration_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">PAN Card</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_PAN_Card" id="yes_PAN_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_PAN_Card" id="Change_PAN_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Birth Certificate </label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Birth_Certificate" id="yes_Birth_Certificate">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Birth_Certificate" id="Change_Birth_Certificate">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Passport</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Passport" id="yes_Passport">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Passport" id="Change_Passport">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Caste Certificate </label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Caste_Certificate" id="yes_Caste_Certificate">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Caste_Certificate" id="Change_Caste_Certificate">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Domicile & Nationality</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Domicile_Nationality" id="yes_Domicile_Nationality">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Domicile_Nationality" id="Change_Domicile_Nationality">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Ayushman Bharat Card</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Ayushman_Bharat_Card" id="yes_Ayushman_Bharat_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Ayushman_Bharat_Card" id="Change_Ayushman_Bharat_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">E-Shram Card</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_E-Shram_Card" id="yes_E-Shram_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_E-Shram_Card" id="Change_E-Shram_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Labour Card</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Labour_Card" id="yes_Labour_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Labour_Card" id="Change_Labour_Card">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Accidental Insurance</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Accidental_Insurance" id="yes_Accidental_Insurance">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Accidental_Insurance" id="Change_Accidental_Insurance">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="" style="padding-top:5px;">Document Name </label>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="yes_Document_Name" id="yes_Document_Name">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Availability">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                  <div class="col-lg-4">
                    <div class="input-group"> <span class="input-group-addon">
                      <input type="checkbox" name="Change_Document_Name" id="Change_Document_Name">
                      </span>
                      <input type="text" class="form-control" disabled placeholder="Any Correction Required">
                    </div>
                     /input-group 
                  </div>
                   /.col-lg-6 
                </div>
              </div>
               /.box-body 
            </div>
             /.box 
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Vechicle Details</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-6 control-label">Cycle</label>
                      <div class="col-sm-6">
                        <input type="checkbox" name="Vechicle_MotorCycle" id="Vechicle_MotorCycle">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-6 control-label">Motor Cycle</label>
                      <div class="col-sm-6">
                        <input type="checkbox"  name="Vechicle_MotorCycle" id="Vechicle_MotorCycle">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-6 control-label">Car</label>
                      <div class="col-sm-6">
                        <input type="checkbox"  name="Vechicle_Car" id="Vechicle_Car">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-6 control-label">Transport Vechicel</label>
                      <div class="col-sm-6">
                        <input type="checkbox"  name="Vechicle_Transport" id="Vechicle_Transport">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-6 control-label">Agricultural Vechicel</label>
                      <div class="col-sm-6">
                        <input type="checkbox"  name="Vechicle_Agricultural" id="Vechicle_Agricultural">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Document Locker</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-md-4">
                    <select class="form-control">
                      <option value="Aadhar Card">Aadhar Card</option>
                      <option value="Voter Card">Voter Card</option>
                      <option value="Ration Card">Ration Card</option>
                      <option value="PAN Card">PAN Card</option>
                      <option value="Birth Certificate">Birth Certificate</option>
                      <option value="Passport">Passport</option>
                      <option value="Caste Certificate">Caste Certificate</option>
                      <option value="Domicile & Nationality">Domicile & Nationality</option>
                      <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                      <option value="E-Shram Card">E-Shram Card</option>
                      <option value="Labour Card">Labour Card</option>
                      <option value="Accidental Insurance">Accidental Insurance</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <input type="text"  class="form-control" name="DocmunetUID_1" id="DocmunetUID_1" placeholder="Docmunet UID">
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="file" id="exampleInputFile">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4">
                    <select class="form-control">
                      <option value="Aadhar Card">Aadhar Card</option>
                      <option value="Voter Card">Voter Card</option>
                      <option value="Ration Card">Ration Card</option>
                      <option value="PAN Card">PAN Card</option>
                      <option value="Birth Certificate">Birth Certificate</option>
                      <option value="Passport">Passport</option>
                      <option value="Caste Certificate">Caste Certificate</option>
                      <option value="Domicile & Nationality">Domicile & Nationality</option>
                      <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                      <option value="E-Shram Card">E-Shram Card</option>
                      <option value="Labour Card">Labour Card</option>
                      <option value="Accidental Insurance">Accidental Insurance</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <input type="text"  class="form-control" name="DocmunetUID_2" id="DocmunetUID_2" placeholder="Docmunet UID">
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="file" id="exampleInputFile">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-4">
                    <select class="form-control">
                      <option value="Aadhar Card">Aadhar Card</option>
                      <option value="Voter Card">Voter Card</option>
                      <option value="Ration Card">Ration Card</option>
                      <option value="PAN Card">PAN Card</option>
                      <option value="Birth Certificate">Birth Certificate</option>
                      <option value="Passport">Passport</option>
                      <option value="Caste Certificate">Caste Certificate</option>
                      <option value="Domicile & Nationality">Domicile & Nationality</option>
                      <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                      <option value="E-Shram Card">E-Shram Card</option>
                      <option value="Labour Card">Labour Card</option>
                      <option value="Accidental Insurance">Accidental Insurance</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <input type="text"  class="form-control" name="DocmunetUID_3" id="DocmunetUID_3" placeholder="Docmunet UID">
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="file" id="exampleInputFile">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_4" id="DocmunetUID_4" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_5" id="DocmunetUID_5" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_6" id="DocmunetUID_6" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_7" id="DocmunetUID_7" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_8" id="DocmunetUID_8" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_9" id="DocmunetUID_9" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_10" id="DocmunetUID_10" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_11" id="DocmunetUID_11" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_12" id="DocmunetUID_12" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_13" id="DocmunetUID_13" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_14" id="DocmunetUID_14" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_15" id="DocmunetUID_15" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <select class="form-control">
                        <option value="Aadhar Card">Aadhar Card</option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="Ration Card">Ration Card</option>
                        <option value="PAN Card">PAN Card</option>
                        <option value="Birth Certificate">Birth Certificate</option>
                        <option value="Passport">Passport</option>
                        <option value="Caste Certificate">Caste Certificate</option>
                        <option value="Domicile & Nationality">Domicile & Nationality</option>
                        <option value="Ayushman Bharat Card">Ayushman Bharat Card</option>
                        <option value="E-Shram Card">E-Shram Card</option>
                        <option value="Labour Card">Labour Card</option>
                        <option value="Accidental Insurance">Accidental Insurance</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text"  class="form-control" name="DocmunetUID_16" id="DocmunetUID_16" placeholder="Docmunet UID">
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="file" id="exampleInputFile">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
        
      </div>
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
