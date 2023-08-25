<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Family  Beneficiary</title>
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
      <h1>Family Registration
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Beneficiary</a></li>
        <li class="active">Family  Beneficiary</li>
      </ol>
    </section>

 


    <!-- Main content -->
    <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Family  Head Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              <div class="form-group">
                  <label>Family Head Name</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>WhatsApp Number</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                
                <div class="form-group">
                  <label>Home Address</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label>PIN Code</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Ration Card Number</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Near By Mashjid</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                
                
                
                <div class="form-group">
                <label for="exampleInputEmail1">House Type</label>
                
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      Oun
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Rented
                    </label>
                  </div>
                   
                </div>
                 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        
        
        <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Family  Head Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
             <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <thead>
              <tr>
                  <th>Sr. No.</th>
                  <th>Full Name of Family members</th>
                  <th>Qualification</th>
                  <th>Occupation</th>
                  <th>Whatsapp number</th>
                  <th>Age</th>
                  <th><div align="center">OBC/EWS</div></th>
                  <th><div align="center">Aadhar</div></th>
                  <th><div align="center">Voter ID</div></th>
                  <th><div align="center">Ration</div></th>
                  <th><div align="center">PAN Card</div></th>
                  <th><div align="center">Birth Cert</div></th>
                  <th><div align="center">Passport</div></th>
                  <th><div align="center">Maktab</div></th>
                  <th>Submit</th>
                </tr>
              </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                <tr>
                  <td>2</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                 <tr>
                  <td>3</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                <tr>
                  <td>4</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                <tr>
                  <td>5</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                <tr>
                  <td>6</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                 <tr>
                  <td>7</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                <tr>
                  <td>8</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                <tr>
                  <td>9</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
                <tr>
                  <td>10</td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td>
                  <td><div class="checkbox">
                    <label>
                      <div align="center">
                        <input type="checkbox">
                        </div>
                    </label>
                  </div></td> 
                  
                  <td><button type="submit" class="btn btn-primary">Submit</button></td>                 
                </tr>
              </tbody></table>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        </div>
    
    
    
    
    
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Document Details</h3>
            </div>
            <div class="box-body">
               
 




 

 

 


              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Aadhar Card </label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div> 
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Voter Card</label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Ration Card </label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div> 
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">PAN Card</label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Birth Certificate </label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div> 
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Passport</label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Caste Certificate </label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div> 
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Domicile & Nationality</label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Ayushman Bharat Card</label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div> 
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">E-Shram Card</label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Labour card</label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div> 
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Accidental Insurance</label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <div class="row">
              <div class="col-lg-4">
              <label for="" style="padding-top:5px;">Document Name  </label>
              </div>
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Availability">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control " disabled placeholder="Any Correction Required">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
               
               

 

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Vechicle Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cycle</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Motor Cycle</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Car</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Transport Vechicel</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Agricultural Vechicel</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                
                 
                
                
                
                 
                 
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Document Bank</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                 <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
                <div class="form-group">
                  
				<div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet Name">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Docmunet UID">
                  </div>
                   <div class="col-md-4">
                    <div class="form-group">
                  <input type="file" id="exampleInputFile"> 
                </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-4">
          <!-- Horizontal Form -->
           
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
