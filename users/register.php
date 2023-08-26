<?php  include "function.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];	
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $sql = "INSERT INTO registration (name, email, phone, password, role ) values ('$name', '$email', '$phone', '$password', '$role')";
    mysqli_query($conn,$sql);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon">
    <title>MMNF</title> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page" style="background:radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);">
    <div class="register-box">
        <div class="card" style="box-shadow: 5px 5px 5px;">
            <div class="card-body register-card-body">
                <div align="center"> <img src="images/logo_main.png" width="140px" height="140px" />
                    <p class="login-box-msg"><b>Maharashtra Minority NGO Forum</b></p>
                </div>
                <p class="login-box-msg">Register a new membership</p>
                <form action="register.php"method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-3"> <input type="text" class="form-control" name="name" placeholder="Enter your name" required="">
                        <div class="input-group-append">
                            <div class="input-group-text"> <span class="fas fa-user"></span> </div>
                        </div>
                    </div>
                    <div class="input-group mb-3"> <input type="email" class="form-control" name="email" placeholder="Enter your email" required="">
                        <div class="input-group-append">
                            <div class="input-group-text"> <span class="fas fa-envelope"></span> </div>
                        </div>
                    </div>
                    <div class="input-group mb-3"> <input type="mobile" class="form-control" name="phone" placeholder="Enter your mobile" required="">
                        <div class="input-group-append">
                            <div class="input-group-text"> <span class="fas fa-lock"></span> </div>
                        </div>
                    </div>
                    <div class="input-group mb-3"> <input type="password" class="form-control" name="password" placeholder="Enter password" required="">
                        <div class="input-group-append">
                            <div class="input-group-text"> <span class="fas fa-lock"></span> </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-select">
                                <select name="role" id="role" class="form-control">
                                    <option>-Select your Role-</option>
                                    <option value="2">Director</option>
                                    <option value="3">User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4"> <button type="submit" name="submit" class="btn btn-primary" >Submit</button> </div>
                    </div>
                </form> </br> <a href="login.php" class="text-center">I already have a membership</a>
            </div> <!-- /.form-box -->
        </div><!-- /.card -->
    </div> <!-- /.register-box -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>