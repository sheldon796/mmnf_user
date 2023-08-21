<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon">
    <title>MMNF</title> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar --> <?php include "navbar.php" ; ?> <?php include "aside.php" ; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Family Head Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Family Head Details</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Family Head Details</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Family Head Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Family Head Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Home Address</label> <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Home Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>PIN Code</label> <input type="text" class="form-control" name="Mobile" id="Mobile" placeholder="Enter Pin Code" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>WhatsApp Number</label> <input type="text" class="form-control" name="whatsno" id="whatsno" placeholder="Enter Whatsapp Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Ration Card Number</label> <input type="text" class="form-control" name="ration" id="ration" placeholder="Enter Ration Card Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Near By Mashjid</label> <input type="text" class="form-control" name="nearby" id="nearby" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">House Type</label> <select class="form-control" name="house" id="house" >
                                                        <option>--Select--</option>
                                                        <option value="Rented">Rented</option>
                                                        <option value="Own">Own</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="card-footer"> <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button> </div> <!-- /.card-body -->
                                </form>
                            </div> <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!--/.col (right) -->
                    </div> <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Family Members Details</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
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
                                                <th>
                                                    <div align="center">OBC/EWS</div>
                                                </th>
                                                <th>
                                                    <div align="center">Aadhar</div>
                                                </th>
                                                <th>
                                                    <div align="center">Voter ID</div>
                                                </th>
                                                <th>
                                                    <div align="center">Ration</div>
                                                </th>
                                                <th>
                                                    <div align="center">PAN Card</div>
                                                </th>
                                                <th>
                                                    <div align="center">Birth Cert</div>
                                                </th>
                                                <th>
                                                    <div align="center">Passport</div>
                                                </th>
                                                <th>
                                                    <div align="center">Maktab</div>
                                                </th>
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
                                                <td>
                                                    <div class="checkbox">
                                                      <label>
                                                        <div align="center"> <input type="radio">Available <input type="radio">Make New Document <input type="file" name="upload"> </div>
                                                      </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td><button type="submit" class="btn btn-primary">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td>
                                                    <div class="checkbox">
                                                      <label>
                                                        <div align="center"> <input type="radio">Available <input type="radio">Make New Document <input type="file" name="upload"> </div>
                                                      </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td><button type="submit" class="btn btn-primary">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td>
                                                    <div class="checkbox">
                                                      <label>
                                                        <div align="center"> <input type="radio">Available <input type="radio">Make New Document <input type="file" name="upload"> </div>
                                                      </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td><button type="submit" class="btn btn-primary">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                                <td>
                                                    <div class="checkbox">
                                                      <label>
                                                        <div align="center"> <input type="radio">Available <input type="radio">Make New Document <input type="file" name="upload"> </div>
                                                      </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox"> <label>
                                                            <div align="center"> <input type="checkbox"> </div>
                                                        </label> </div>
                                                </td>
                                                <td><button type="submit" class="btn btn-primary">Submit</button></td>
                                            </tr>
                                            <td>5</td>
                                            <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                            <td><input type="text" class="form-control" placeholder="Enter ..."></td>
                                            <td>
                                                    <div class="checkbox">
                                                      <label>
                                                        <div align="center"> <input type="radio">Available <input type="radio">Make New Document <input type="file" name="upload"> </div>
                                                      </label>
                                                    </div>
                                                </td>
                                            <td>
                                                <div class="checkbox"> <label>
                                                        <div align="center"> <input type="checkbox"> </div>
                                                    </label> </div>
                                            </td>
                                            <td>
                                                <div class="checkbox"> <label>
                                                        <div align="center"> <input type="checkbox"> </div>
                                                    </label> </div>
                                            </td>
                                            <td>
                                                <div class="checkbox"> <label>
                                                        <div align="center"> <input type="checkbox"> </div>
                                                    </label> </div>
                                            </td>
                                            <td>
                                                <div class="checkbox"> <label>
                                                        <div align="center"> <input type="checkbox"> </div>
                                                    </label> </div>
                                            </td>
                                            <td>
                                                <div class="checkbox"> <label>
                                                        <div align="center"> <input type="checkbox"> </div>
                                                    </label> </div>
                                            </td>
                                            <td>
                                                <div class="checkbox"> <label>
                                                        <div align="center"> <input type="checkbox"> </div>
                                                    </label> </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                  <label>
                                                    <div align="center"> <input type="checkbox"> </div>
                                                  </label> </div>
                                            </td>
                                            <td><button type="submit" class="btn btn-primary">Submit</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!--/.col (right) -->
                    </div> <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div> <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a> </strong>
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script> <!-- AdminLTE for demo purposes -->
    
    <script>
        $(function () {
          bsCustomFileInput.init();
        });
    </script>
</body>

</html>