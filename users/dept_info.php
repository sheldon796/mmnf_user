<?php
// include database connection file
require_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon">
    <title>MMNF</title> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css"> <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color:#c0b1c7">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center"> <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="250" width="250"> </div> <!-- Navbar --> <?php include "navbar.php";?> <?php include "aside.php";?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        <!-- Main content -->
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">About us</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <p align="justify"> This brainchild connected over 300 NGOs from 31 districts in Maharashtra. Now a recognized state organization, MMNF focuses on projects like Minority Development Centre (MDC), Community Development Centre (CDC), and more, empowering NGOs and the community across the state.MMNF is committed to connect and co-relate all NGOS from all corners of the state to empower them & to empower the community at large. MMNF creates a state level federation of Minority NGO’s, as well as create a bunch of expert persons, which called as Knowledge Tank with the help of Knowledge tank, MMNF always trying to give solutions to community in education, health, Industry, business, skills, legal, financial etc. to up-liftment of community in all manner.</p>
                    </div>
                    <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                </div>
            </div>
        </div>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex p-0">
                    <ul class="nav nav-pills ml-auto p-2">
                      <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">About Department</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Our Team</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Achievements and Projects</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Associates with us</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Schemes</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_6" data-toggle="tab">Services</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_7" data-toggle="tab">Information</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_8" data-toggle="tab">Project</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_9" data-toggle="tab">Programs</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_10" data-toggle="tab">Feedback</a></li>
                      <li class="nav-item"><a class="nav-link" href="#tab_11" data-toggle="tab">Service Request Form</a></li>
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <span class="caret"></span></a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" tabindex="-1" href="#">Download</a>
                          <a class="dropdown-item" tabindex="-1" href="#">Notice Board</a>
                          <a class="dropdown-item" tabindex="-1" href="#">Chat Box</a>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <?php
                  // include database connection file
                  $dept_id ;
                  if (isset($_GET['name'])) {
                      $dpt_name = $_GET['name'];
                      $sql = "SELECT * FROM departmental_information where department = '$dpt_name'";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                              $dept_id = $row['id'];
                              $sql = "SELECT * FROM team_member where department_id = $row[id]";
                              $team_result = mysqli_query($conn, $sql);
                              ?>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab_1">
                        <div class="row">
                          <?php include "marquee.php";?>
                        </div>
                        <div class="row">
                          <div class="col-lg-7">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="upload/departments/<?php echo $row['department_images1']; ?>" alt="First slide">
                                </div>
                                <!-- <div class="carousel-item">
                                  <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                                </div> -->
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-custom-icon" aria-hidden="true">
                                  <i class="fas fa-chevron-left"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-custom-icon" aria-hidden="true">
                                  <i class="fas fa-chevron-right"></i>
                                </span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                          </div>
                          <div class="col-lg-5">
                              <div class="card">
                                  <div class="card-body">
                                      <h4><b><?php echo $row['department']; ?></b></h4>
                                      <p align="justify"><?php echo $row['description1']; ?></p> <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="background-color:#b84463; color: white;"> Read More </button>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4  col-sm-12">
                            <div class="small-box bg-info">
                              <div style="margin: 10px; padding-top:10px">
                                <img src="images/logos/m.png" alt="Third" width="100px" height="100px">
                              </div>
                              <div class="inner">
                                <h5>Our Mission</h5>
                                <p align="justify"><?php echo $row['mission']; ?></p>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                          </div>
                          <div class="col-lg-4  col-sm-12">
                              <div class="small-box bg-success">
                                  <div style="margin: 10px; padding-top:10px">
                                    <img src="images/logos/v.png" alt="Third" width="100px" height="100px">
                                  </div>
                                  <div class="inner">
                                    <h5>Our Vision</h5>
                                    <p align="justify"><?php echo $row['vision']; ?></p></p>
                                  </div> <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                          <div class="col-lg-4  col-sm-12">
                            <div class="small-box bg-danger">
                                <div style="margin: 10px; padding-top:10px">
                                  <img src="images/logos/o.png" alt="Third" width="100px" height="100px">
                                </div>
                                <div class="inner">
                                    <h5>Our Objectives</h5>
                                    <p align="justify"><?php echo $row['objectives']; ?></p>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane" id="tab_2">
                        <div class="card-header d-flex p-0">
                          <ul class="nav nav-pills ml-auto p-2">
                            <li class="nav-item"><a class="nav-link" href="departmental_team.php?id=<?php echo $row['id']; ?>" >Add Team Members</a></li>
                          </ul>
                        </div>
                        <div class="row">
                        <?php
                          while ($team_row = mysqli_fetch_assoc($team_result)) {
                                          ?>
                          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                              <div class="card-header text-muted border-bottom-0">
                                Team of MDC
                              </div>

                              <div class="card-body pt-0">
                                <div class="row">
                                  <div class="col-7">
                                    <h2 class="lead"><b><?php echo $team_row['name']; ?></b></h2>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail"></i></span> Email: <?php echo $team_row['email']; ?></li>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: <?php echo $team_row['location']; ?></li>
                                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone :<?php echo $team_row['phone']; ?></li>
                                    </ul>
                                  </div>
                                  <div class="col-5 text-center">
                                    <img src="upload/departments/team/<?php echo $team_row['photo']; ?>" alt="user-avatar" class="img-circle img-fluid">
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer">
                                <h2 class="lead"><b><?php echo $team_row['designation']; ?></b></h2>
                              </div>
                            </div>
                          </div>
                          <?php
}
            ?>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab_3">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Carousel</h3>
                              </div>
                              <div class="card-body" style="padding:0">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="upload/departments/<?php echo $row['department_images2']; ?>" alt="First slide">
                                    </div>
                                    <!-- <div class="carousel-item">
                                      <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                                    </div>
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                                    </div> -->
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                      <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                      <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Carousel</h3>
                              </div>
                              <div class="card-body" style="padding:0">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="upload/departments/<?php echo $row['department_images2']; ?>" alt="First slide">
                                    </div>
                                    <!-- <div class="carousel-item">
                                      <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                                    </div>
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                                    </div> -->
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                      <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                      <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Carousel</h3>
                              </div>
                              <div class="card-body" style="padding:0">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="upload/departments/<?php echo $row['department_images2']; ?>" alt="First slide">
                                    </div>
                                    <!-- <div class="carousel-item">
                                      <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                                    </div>
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                                    </div> -->
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                      <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-custom-icon" aria-hidden="true">
                                      <i class="fas fa-chevron-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">Carousel</h3>
                                </div>
                                <div class="card-body" style="padding:0">
                                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="upload/departments/<?php echo $row['department_images2']; ?>" alt="First slide">
                                    </div>
                                      <!-- <div class="carousel-item">
                                        <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                                      </div>
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                                      </div> -->
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-left"></i>
                                      </span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                      </span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">Carousel</h3>
                                </div>
                                <div class="card-body" style="padding:0">
                                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="upload/departments/<?php echo $row['department_images2']; ?>" alt="First slide">
                                    </div>
                                      <!-- <div class="carousel-item">
                                        <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                                      </div>
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                                      </div> -->
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-left"></i>
                                      </span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-custom-icon" aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                      </span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="tab_4">
                             <div class="card-body justify-content-center">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Attachment</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // include database connection file
                                            require_once 'function.php';
                                            // Object creation
                                            $sql = "SELECT * FROM ngo";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                            <tr>
                                                <td class="text-center"><?php echo $row['id']; ?></td>
                                                <td class="text-center"><?php echo $row['title']; ?></td>
                                                <td class="text-center"><?php echo $row['description']; ?></td>
                                                <td class="text-center">
                                                    <a href="upload/documents/ngo/<?php echo $row['attachment']; ?>"
                                                        target="_blank">
                                                        <img src="pdf.png" alt="PDF Icon" width="32" height="32">
                                                    </a>
                                                </td>
                                                <td class="project-actions text-center">
                                                    <a class="btn btn-danger btn-sm"
                                                        href="ngo_delete.php?delete=<?php echo $row['id']; ?>"><i
                                                            class="fas fa-trash"></i>Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            } else {
                                                echo "";
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Sr.No.</th>
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Attachment</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                        </div>
                        <div class="tab-pane" id="tab_10">
                          <div class="row justify-content-center">
                              <div class="col-md-4"> <!-- Adjust the column width as needed -->
                                  <div class="card">
                                      <div class="card-body">
                                          <h2>Feedback Form</h2>
                                          <form role="form" method="post" action="departmental_feedback_form.php" enctype="multipart/form-data">
                                              <div class="form-group">
                                                  <input type="hidden" class="form-control" name="dept_id" id="dept_id" value="<?php echo $dept_id; ?>"/>
                                              </div>
                                              <div class="form-group">
                                                  <label>Name</label>
                                                  <input type="text" class="form-control" name="name" id="name" />
                                              </div>
                                              <div class="form-group">
                                                  <label>E-Mail</label>
                                                  <input type="email" class="form-control" name="email" id="email" />
                                              </div>
                                              <div class="form-group">
                                                  <label>Subject</label>
                                                  <input type="text" name="subject" id="subject" class="form-control" />
                                              </div>
                                              <div class="form-group">
                                                  <label>Message</label>
                                                  <textarea name="message" id="message" class="form-control" rows="4"></textarea>
                                              </div>
                                              <div class="form-group">
                                                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="tab_11">
                            <div class="row">
                        <!-- left column -->
                        <div class="col-md-12 mt-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Service Request Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Type of Services</label>


                                                    <select class="form-control" name="services" id="services">
                                                        <?php
                                                    $sql = 'SELECT * FROM services';
                                                        
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . $row['id'] . '">' . $row['Service_Name'] . '</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">MMNF Unique ID Number</label>
                                                    <input type="text" class="form-control" name="uid" id="uid"
                                                        placeholder="Enter Unique id" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Full Name</label> <input type="text"
                                                        class="form-control" name="name" id="name"
                                                        placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text"
                                                        class="form-control" name="Mobile" id="Mobile"
                                                        placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input
                                                        type="email" class="form-control" name="email" id="email"
                                                        placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">City</label> <input type="text"
                                                        class="form-control" name="city" id="city"
                                                        placeholder="Enter City" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">CIF Registered Number</label>
                                                    <input type="text" class="form-control" name="cif_number"
                                                        id="cif_number" placeholder="Enter CIF Number" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Address</label> <input
                                                        type="text" class="form-control" name="address" id="address"
                                                        placeholder="Enter Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Near By Masjid Name</label> <input
                                                        type="text" class="form-control" name="Mashjid" id="Mashjid"
                                                        placeholder="Enter Near By Masjid..." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Departments</label> <select
                                                        class="form-control" name="department" id="department">
                                                        <option value="">--Select--</option>
                                                        <option value="Minority Affairs Research">Minority Affairs
                                                            Research</option>
                                                        <option value="Academy for Competitive Exam">Academy for
                                                            Competitive Exam</option>
                                                        <option value="Human Rights and Legal Forum">Human Rights and
                                                            Legal Forum</option>
                                                        <option value="Skill Development Forum">Skill Development Forum
                                                        </option>
                                                        <option value="Technobuiz">Technobuiz</option>
                                                        <option value="Business Development Forum">Business Development
                                                            Forum</option>
                                                        <option value="Healthcare and Paramedical">Healthcare and
                                                            Paramedical</option>
                                                        <option value="Women Empowerment Centre">Women Empowerment
                                                            Centre</option>
                                                        <option value="Financial Development Centre">Financial
                                                            Development Centre</option>
                                                        <option value="Travel and Guidance Centre">Travel and Guidance
                                                            Centre</option>
                                                        <option value="Disaster Management Centre">Disaster Management
                                                            Centre</option>
                                                        <option value="Waqf Development Forum">Waqf Development Forum
                                                        </option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group"> <label for="">Do you have following documents
                                                        :</label> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Birth Certificate : &nbsp;</label>
                                                    <input type="radio" name="birth_certificate" value="Yes"> Yes <input
                                                        type="radio" name="birth_certificate" value="No"> No <input
                                                        type="file" class="form-control" name="upload_birth_certificate"
                                                        id="upload_birth_certificate">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Income Certificate : &nbsp;</label>
                                                    <input type="radio" name="income_certificate" value="Yes"> Yes
                                                    <input type="radio" name="income_certificate" value="No"> No <input
                                                        type="file" class="form-control"
                                                        name="upload_income_certificate" id="upload_income_certificate">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Marksheet of last year : &nbsp;</label>
                                                    <input type="radio" name="last_marksheet" value="Yes"> Yes <input
                                                        type="radio" name="last_marksheet" value="No"> No <input
                                                        type="file" class="form-control" name="upload_last_marksheet"
                                                        id="upload_last_marksheet">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Cast Certificate : &nbsp;</label> <input
                                                        type="radio" name="caste_certificate" value="Yes"> Yes <input
                                                        type="radio" name="caste_certificate" value="No"> No <input
                                                        type="file" class="form-control" name="upload_caste_certificate"
                                                        id="upload_caste_certificate"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Disability Certificate : &nbsp;</label>
                                                    <input type="radio" name="disability_certificate" value="Yes"> Yes
                                                    <input type="radio" name="disability_certificate" value="No"> No
                                                    <input type="file" class="form-control"
                                                        name="upload_disability_certificate"
                                                        id="upload_disability_certificate">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Adhar Card : &nbsp;</label> <input
                                                        type="radio" name="adhar_card" value="Yes"> Yes <input
                                                        type="radio" name="adhar_card" value="No"> No <input type="file"
                                                        class="form-control" name="upload_adhar_card"
                                                        id="upload_adhar_card"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Pan Card : &nbsp;</label> <input
                                                        type="radio" name="pan_card" value="Yes"> Yes <input
                                                        type="radio" name="pan_card" value="No"> No <input type="file"
                                                        class="form-control" name="upload_pan_card"
                                                        id="upload_pan_card"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Bank account detail : &nbsp;</label>
                                                    <input type="radio" name="bank_account" value="Yes"> Yes <input
                                                        type="radio" name="bank_account" value="No"> No <input
                                                        type="file" class="form-control" name="upload_bank_account"
                                                        id="upload_bank_account">
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-footer"> <button type="submit" class="btn btn-primary"
                                            name="submit">Submit</button> </div>
                                </form>
                            </div> <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!--/.col (right) -->
                    </div> 
                        </div>
                      </div>
                    </div>  
                    <?php
                      }
                          }
                      } else {
                          echo "";
                      }

                      ?>
                      
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        <footer class="main-footer"> <span>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a>.</span>
            <div class="float-right d-none d-sm-inline-block"> <b>Version</b> 3.2.0 </div>
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script> <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script> <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script> <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script> <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script> <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script> <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script> <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script> <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>