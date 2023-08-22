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
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background-color:#c0b1c7">
<div class="wrapper">
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center"> <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="250" width="250"> </div>
<!-- Navbar -->
<?php include "navbar.php" ; ?>
<?php include "aside.php" ; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> <br>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">About us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
          <p align="justify"> This brainchild connected over 300 NGOs from 31 districts in Maharashtra. Now a recognized state organization, MMNF focuses on projects like Minority Development Centre (MDC), Community Development Centre (CDC), and more, empowering NGOs and the community across the state.MMNF is committed to connect and co-relate all NGOS from all corners of the state to empower them & to empower the community at large. MMNF creates a state level federation of Minority NGO’s, as well as create a bunch of expert persons, which called as Knowledge Tank with the help of Knowledge tank, MMNF always trying to give solutions to community in education, health, Industry, business, skills, legal, financial etc. to up-liftment of community in all manner.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block " src="images/9.jpg" alt="First slide"> </div>
              <div class="carousel-item"> <img class="d-block " src="images/9.jpg" alt="Second slide"> </div>
              <div class="carousel-item"> <img class="d-block " src="images/9.jpg" alt="Third slide"> </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="sr-only">Next</span> </a> </div>
        </div>
        <div class="col-lg-8 ">
          <div class="card">
            <div class="card-body">
              <h4><b>MAHARASHTRA MINORITY NGO FORUM (MMNF)</b></h4>
              <p align="justify">The Maharashtra Minority NGO Forum's roots are intertwined with Jakir Shikalgar's life and social work. In September 2018, he realized the need for collective efforts to bring about revolutionary change. Thus, he initiated WhatsApp groups to address untouched issues, providing solutions and forming MMNF.</p>
              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="background-color:#b84463; color: white;"> Read More </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "marquee_second.php"; ?>
  <section class="content mt-4">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Service Request</h3>
            <div class="card-tools">
              <!-- <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"> <i class="fas fa-sync-alt"></i> </button> -->
              <button type="button" class="btn btn-tool" data-card-widget="maximize"> <i class="fas fa-expand"></i> </button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="padding-left: 5px; padding-right: 5px; padding-top: 5px; padding-bottom: 5px;">
            <div class="row">
              <div class="col-6"> </div>
              <div class="col-6"> <a href="service_request_form.php" class="btn btn-success  btn-block btn-sm">Request for new service</a> </div>
            </div>
            <hr>
            <div class="card-body table-responsive p-0" style="padding-left: 5px; padding-right: 5px; padding-top: 5px; padding-bottom: 5px;">
              <table class="table table-hover text-nowrap table-bordered" >
                <thead style="background-color:#28a745;color:white">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Applied Date</th>
                    <th>Status</th>
                    <th>Comment</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // include database connection file
                    require_once'function.php';
                    // Object creation
                    $sql = "SELECT * FROM service_request";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['applied_name']; ?></td>
                    <td><?php echo $row['Applied_Date']; ?></td>
                    <td><span class="tag tag-success"><?php echo $row['status']; ?></span></td>
                    <td><?php echo $row['comment']; ?></td>
                  </tr>
                  <?php
                    }
                    } else {
                    echo "";
                    }                
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Premium Access</h3>
              <div class="card-tools">
                <!-- <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"> <i class="fas fa-sync-alt"></i> </button> -->
                <button type="button" class="btn btn-tool" data-card-widget="maximize"> <i class="fas fa-expand"></i> </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="padding-left: 5px; padding-right: 5px; padding-top: 5px; padding-bottom: 5px;">
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Job Portal: Registration</h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-shopping-cart"></i> </div>
                    <a href="job_seeker_registration.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Matrimonial: Registration</h5>
                      </strong> </div>
                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="matrimoniall.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-warning" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>MMNF Network</h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-user-plus"></i> </div>
                    <a href="mmnf_network.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Helping Hands (Crowd Funding)</h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-chart-pie"></i> </div>
                    <a href="helping_hands.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>NGO's with Us</h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-shopping-cart"></i> </div>
                    <a href="ngo_members.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Eligible Schemes</h5>
                      </strong> </div>
                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="eligible_schemes.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-warning" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Document Locker</h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-user-plus"></i> </div>
                    <a href="document_locker.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>GR (Government Resolutions)</h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-chart-pie"></i> </div>
                    <a href="gr.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Notices</h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-shopping-cart"></i> </div>
                    <a href="notices.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Mailbox</h5>
                      </strong> </div>
                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="mailbox/mailbox.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-warning" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Mera Bazaar</h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-user-plus"></i> </div>
                    <a href="https://mmnf.in/meenabazaar/" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Community Chat </h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-chart-pie"></i> </div>
                    <a href="community_chat.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>24*7 Helpline </h5>
                      </strong> </div>
                    <div class="icon"> <i class="fas fa-shopping-cart"></i> </div>
                    <a href="helpline.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success" style="margin-bottom: 5px;">
                    <div class="inner"> <strong>
                      <h5>Network</h5>
                      </strong> </div>
                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="network.php" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Complains & Feedback</h3>
              <div class="card-tools">
                <!-- <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"> <i class="fas fa-sync-alt"></i> </button> -->
                <button type="button" class="btn btn-tool" data-card-widget="maximize"> <i class="fas fa-expand"></i> </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="
    padding-left: 5px;
    padding-right: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
">
              <div class="row">
                <div class="col-lg-6 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info">
                    <div class="inner"> <i class="fas fa-shopping-cart"></i> </div>
                    <a href="#" class="small-box-footer"> Complain <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success">
                    <div class="inner"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="#" class="small-box-footer"> Feedback <i class="fas fa-arrow-circle-right"></i> </a> </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Departments</h3>
              <div class="card-tools">
                <!-- <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false"> <i class="fas fa-sync-alt"></i> </button> -->
                <button type="button" class="btn btn-tool" data-card-widget="maximize"> <i class="fas fa-expand"></i> </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="
    padding-left: 5px;
    padding-right: 5px;
    padding-top: 5px;
    padding-bottom: 5px;
">
              <div class="row">
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h5>Minority Development Centre</h5>
                      <p>New Orders</p>
                    </div>
                    <div class="icon"> <i class="ion ion-bag"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h5>Community Development Centre</h5>
                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h5>Data and Planning Centre</h5>
                      <p>User Registrations</p>
                    </div>
                    <div class="icon"> <i class="ion ion-person-add"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h5>Minority Affairs Research</h5>
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon"> <i class="ion ion-pie-graph"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-gray">
                    <div class="inner">
                      <h5>Academy for Competitive Exam</h5>
                      <p>New Orders</p>
                    </div>
                    <div class="icon"> <i class="ion ion-bag"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-pink">
                    <div class="inner">
                      <h5>Human Rights and Legal Forum</h5>
                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <h5>Skill Development Forum</h5>
                      <p>User Registrations</p>
                    </div>
                    <div class="icon"> <i class="ion ion-person-add"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-purple">
                    <div class="inner">
                      <h5>Technobuiz</h5>
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon"> <i class="ion ion-pie-graph"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-orange">
                    <div class="inner">
                      <h5>Business Development Forum</h5>
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon"> <i class="ion ion-pie-graph"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-pink">
                    <div class="inner">
                      <h5>Healthcare and Paramedical</h5>
                      <p>New Orders</p>
                    </div>
                    <div class="icon"> <i class="ion ion-bag"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h5>Women Empowerment Centre</h5>
                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h5>Financial Development Centre</h5>
                      <p>User Registrations</p>
                    </div>
                    <div class="icon"> <i class="ion ion-person-add"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h5>Travel and Guidance Centre</h5>
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon"> <i class="ion ion-pie-graph"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h5>Disaster Management Centre</h5>
                      <p>User Registrations</p>
                    </div>
                    <div class="icon"> <i class="ion ion-person-add"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-12">
                  <!-- small box -->
                  <div class="small-box bg-purple">
                    <div class="inner">
                      <h5>Waqf Development Forum</h5>
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon"> <i class="ion ion-pie-graph"></i> </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
                </div>
                <!-- col -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <!-- /.content -->

  <!-- /.content-wrapper -->
  <footer class="main-footer"> <span>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a>.</span>
    <div class="float-right d-none d-sm-inline-block"> <b>Version</b> 3.2.0 </div>
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
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
