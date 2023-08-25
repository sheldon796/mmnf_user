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
  <?php include "navbar.php";?>

  <?php include "aside.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Academy for Competitive Exams</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Academy for Competitive Exams</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"><!-- left column -->
          <div class="col-md-12"><!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Portal Membership Form</h3>
              </div><!-- /.card-header -->              
              <form role="form" method="post" action="" enctype="multipart/form-data"><!-- form start -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>MMNF ID Number</label>
                        <input type="text" class="form-control" name="mmnf_id" id="mmnf_id" placeholder="Enter MMNF ID Number" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Person Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Person Name" required="">
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
                        <label>WhatsApp Number</label>
                        <input type="text" class="form-control" name="wnumber" id="wnumber" placeholder="Enter WhatsApp Number" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Current Class</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Current Class" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Qualification Year</label>
                        <input type="text" class="form-control" name="qualification" id="qualification" placeholder="Enter Qualification" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Marks Obtained</label>
                        <input type="text" class="form-control" name="wnumber" id="wnumber" placeholder="Enter Marks Obtained" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Extra Curricular Activities</label>
                        <input type="text" class="form-control" name="extra" id="extra" placeholder="Enter Details here" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="">Which Training you required</label>
                        <select class="form-control" name="training" id="training">
                          <option value="">--Select--</option>
                          <option value="">SSC</option>
                          <option value="">Railway</option>
                          <option value="">MPSC</option>
                          <option value="">UPSC</option>
                          <option value="">Vanrakshak</option>
                          <option value="">Agniveer Military</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="">Which mode do you prefer?</label>
                        <select class="form-control" name="mode" id="mode">
                          <option value="">--Select--</option>
                          <option value="">Offline</option>
                          <option value="">Online</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Are you Dependent?</label>
                        <input type="text" class="form-control" name="dependent" id="dependent" placeholder="If Yes then type Yes | If No then type No" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>If No, Please write about your Job / Business?</label>
                        <input type="text" class="form-control" name="job" id="job" placeholder="Enter Details." required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>What is your Monthly income</label>
                        <input type="text" class="form-control" name="income" id="income" placeholder="Enter Details." required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>What do you expect from MMNF</label>
                        <input type="text" class="form-control" name="expect" id="expect" placeholder="Enter Details." required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Do you  need a Mentor</label>
                        <input type="text" class="form-control" name="mentor" id="mentor" placeholder="If Yes then type Yes | If No then type No" required="">
                      </div>
                    </div>
                  </div>
                </div><!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
                </div>
              </form>
            </div><!-- /.card -->
          </div><!--/.col (left) -->          
        </div><!--/.col (right) --><!-- /.row -->        
      </div><!-- /.container-fluid -->
    </section><!-- /.content -->    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a>
    </strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
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
