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

<body class="hold-transition login-page" style="background:radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card" style="box-shadow: 5px 5px 5px;">
            <div class="card-body login-card-body">
                <div align="center"> <img src="images/logo_main.png" width="140px" height="140px" />
                    <p class="login-box-msg"><b>Maharashtra Minority NGO Forum</b></p>
                </div>
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                <form action="index.php" method="post">
                    <div class="input-group mb-3"> <input type="userId" class="form-control" placeholder="userId">
                        <div class="input-group-append">
                            <div class="input-group-text"> <span class="fas fa-envelope"></span> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"> <button type="submit" class="btn btn-primary btn-block">Request new password</button> </div> <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1"> <a href="login.php">Login</a> </p>
                <p class="mb-0"> <a href="register.php" class="text-center">Register a new membership</a> </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>