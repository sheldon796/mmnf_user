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
            <h1>Membership Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Membership Form</li>
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
                        <label>Upload Your Profile Picture</label>
                        <input type="file" class="form-control" name="name" id="name" placeholder="Enter ..." required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Qualification</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Qualifications" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" class="form-control" name="Mobile" id="Mobile" placeholder="Enter Occupation" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>WhatsApp Number</label>
                        <input type="text" class="form-control" name="whatsno" id="whatsno" placeholder="Enter Whatsapp Number" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="">Age</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Age" required="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>OBC/EWS</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                     
                        <input type="radio" name="fruit" value="orange"> Make New Document                  
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Aadhar</label><br>
                        <input type="radio" name="fruit" value="apple"> Available
                        <input type="radio" name="fruit" value="orange"> Make New Document 
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Voter ID</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                  
                        <input type="radio" name="fruit" value="orange"> Make New Document
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Ration</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                  
                        <input type="radio" name="fruit" value="orange"> Make New Document
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>PAN Card</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                  
                        <input type="radio" name="fruit" value="orange"> Make New Document
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Birth Certificate</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                  
                        <input type="radio" name="fruit" value="orange"> Make New Document 
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Passport</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                  
                        <input type="radio" name="fruit" value="orange"> Make New Document 
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Maktab</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                  
                        <input type="radio" name="fruit" value="orange"> Make New Document 
                      </div>
                    </div>                
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Voter Card</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                     
                        <input type="radio" name="fruit" value="orange"> Make New Document                  
                      </div>                 
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Domicile & Nationality</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                     
                        <input type="radio" name="fruit" value="orange"> Make New Document                  
                      </div>                 
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Ayushman Bharat Card</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                     
                        <input type="radio" name="fruit" value="orange"> Make New Document                  
                      </div>                 
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>E-Shram Card</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                   
                        <input type="radio" name="fruit" value="orange"> Make New Document                  
                      </div>                 
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Labour card</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                   
                        <input type="radio" name="fruit" value="orange"> Make New Document                  
                      </div>                 
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                        <label>Accidental Insurance</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                    
                        <input type="radio" name="fruit" value="orange"> Make New Document                  
                      </div>                 
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Document Name</label><br>
                        <input type="radio" name="fruit" value="apple"> Available                   
                        <input type="radio" name="fruit" value="orange"> Make New Document                  
                      </div>                 
                    </div>
                  </div>                  
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
                  </div>
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
