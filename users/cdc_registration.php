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
  <?php include "navbar.php" ; ?>

  <?php include "aside.php" ; ?>  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CDC Registration</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">CDC Registration</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Portal Membership Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">                  
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Name of Waqf / charity trust / NGO</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name of Waqf / charity trust / NGO" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>District</label>
                        <input type="text" class="form-control" name="district" id="district" placeholder="Enter District" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Taluka</label>
                        <input type="text" class="form-control" name="taluka" id="taluka" placeholder="Enter Taluka" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter State" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Name of Authority Person</label>
                        <input type="text" class="form-control" name="Aperson" id="Aperson" placeholder="Enter Name of Authority Person" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Degination with Trust</label>
                        <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Degination with Trust" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Education</label>
                        <input type="text" class="form-control" name="education" id="education" placeholder="Enter Education" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Mobile No</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Mobile No" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Member Id with MMNF</label>
                        <input type="text" class="form-control" name="memberid" id="memberid" placeholder="Enter Member Id with MMNF" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Title of Masjid</label>
                        <input type="text" class="form-control" name="masjid" id="masjid" placeholder="Enter Title of Masjid" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Waqf Registration No</label>
                        <input type="text" class="form-control" name="registration" id="registration" placeholder="Enter Waqf Registration No" required="">
                    </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Upload waqf certificate(only PDF)</label><br>
                        <input type="file" name="upload" value="" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Space selected for CDC in Sq.ft</label>
                        <input type="text" class="form-control" name="space" id="space" placeholder="Enter Space selected for CDC in Sq.ft" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Is it inside area of masjid.</label>
                        <input type="text" class="form-control" name="inside" id="inside" placeholder="If yes then type Yes | If No then type No" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>If Outside give addresss.</label>
                        <input type="text" class="form-control" name="outside" id="outside" placeholder="Enter Details." required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>How many muslim families are surrounded by masjid ?</label>
                        <input type="text" class="form-control" name="surrounded" id="surrounded" placeholder="Enter Details." required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>How many minority other than muslim are surrounded by masjid ?</label>
                        <input type="text" class="form-control" name="minority" id="minority" placeholder="Enter Details." required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>How many are families in surrounding of area ?</label>
                        <input type="text" class="form-control" name="families" id="families" placeholder="Enter Details" required="">
                      </div>
                    </div>                  
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Do you permit to fix led screen for display ?</label>
                        <input type="text" class="form-control" name="permit" id="permit" placeholder="If yes then type Yes | If No then type No" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>How much space are reserved for display board specially for your MMNF notification ?</label>
                        <input type="text" class="form-control" name="reserved" id="reserved" placeholder="Enter Details." required="">
                      </div>
                    </div>
                    <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                      <label for="">Details of all Trusty:</label>
                      <table class="Tableresponsive" style="width: 100%;">
                        <tbody style="border: 1px solid black;">
                          <tr align="center" style="height:50px;border: 1px solid #black;" >
                            <th style="border: 1px solid black;">Sr. No.</th>
                            <th style="border: 1px solid black;">Name</th>
                            <th style="border: 1px solid black;">Education</th>
                            <th style="border: 1px solid black;">Have Own Tab</th>
                            <th style="border: 1px solid black;">Have Own Smart Phone</th>
                            <th style="border: 1px solid black;">How much spare time for khidmat with cdc</th>	
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">01</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Name" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="education1" id="education1" placeholder="Enter Education" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="tab1" id="tab1" placeholder="Enter Details" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone2" id="phone2" placeholder="Enter Details" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="time1" id="time1" placeholder="Enter Details" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">02</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name3" id="name3" placeholder="Enter Name" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="education2" id="education2" placeholder="Enter Education" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="tab2" id="tab2" placeholder="Enter Details" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone3" id="phone3" placeholder="Enter Details" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="time2" id="time2" placeholder="Enter Details" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">03</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name4" id="name4" placeholder="Enter Name" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="education3" id="education3" placeholder="Enter Education" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="tab3" id="tab3" placeholder="Enter Details" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone4" id="phone4" placeholder="Enter Details" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="time3" id="time3" placeholder="Enter Details" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">04</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name5" id="name5" placeholder="Enter Name" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="education4" id="education4" placeholder="Enter Education" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="tab4" id="tab4" placeholder="Enter Details" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone5" id="phone5" placeholder="Enter Details" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="time4" id="time4" placeholder="Enter Details" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">05</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="name6" id="name6" placeholder="Enter Name" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="education5" id="education5" placeholder="Enter Education" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="tab5" id="tab5" placeholder="Enter Details" required="" style="width:300px"></td></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="phone6" id="phone6" placeholder="Enter Details" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="time5" id="time5" placeholder="Enter Details" required="" style="width:300px"></td></td>
                          </tr>			
										    </tbody>  
									    </table>
                    </div>
                    <div class="col-md-12" style="padding-top:30px;padding-bottom:20px;overflow-x:auto;">
                      <label for="">Detailed Information about Trusty:</label>
                      <table class="Tableresponsive" style="width: 100%;">
                        <tbody style="border: 1px solid black;">
                          <tr align="center" style="height:50px;border: 1px solid #black;" >
                            <th style="border: 1px solid black;">Sr. No.</th>
                            <th style="border: 1px solid black;">Designation</th>
                            <th style="border: 1px solid black;">Name</th>
                            <th style="border: 1px solid black;">Mobile Number</th>	
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">01</td>
                            <td style="border: 1px solid black;">President</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="president" id="president" placeholder="Enter President Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile1" id="mobile1" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">02</td>
                            <td style="border: 1px solid black;">Vice President</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="vpresident" id="vpresident" placeholder="Enter Vice President Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile2" id="mobile2" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">03</td>
                            <td style="border: 1px solid black;">Secretary</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="secretary" id="secretary" placeholder="Enter Secretary Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile3" id="mobile3" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">04</td>
                            <td style="border: 1px solid black;">General Secretary</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="Gsecretary" id="Gsecretary" placeholder="Enter General Secretary Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile4" id="mobile4" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">05</td>
                            <td style="border: 1px solid black;">Treasurer</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="treasurer" id="treasurer" placeholder="Enter Treasurer Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile5" id="mobile5" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">06</td>
                            <td style="border: 1px solid black;">Member</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="member1" id="member1" placeholder="Enter Member Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile6" id="mobile6" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">07</td>
                            <td style="border: 1px solid black;">Member</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="member2" id="member2" placeholder="Enter Member Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile7" id="mobile7" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">08</td>
                            <td style="border: 1px solid black;">Member</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="member3" id="member3" placeholder="Enter Member Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile8" id="mobile8" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>
                          <tr align="center" style="height:50px">
                            <td style="border: 1px solid black;">09</td>
                            <td style="border: 1px solid black;">Member</td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="member4" id="member4" placeholder="Enter Member Name" required="" style="width:300px"></td>
                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="mobile9" id="mobile9" placeholder="Mobile Number" required="" style="width:300px"></td></td>
                          </tr>				
                        </tbody>  
									    </table>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->          
          </div>
          <!--/.col (left) -->    
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a></strong>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
    <!-- Control sidebar content goes here -->  
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
