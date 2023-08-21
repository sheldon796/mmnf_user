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
                <form action="login.php" method="post">
                    <?php
                        if (isset($_SESSION['status'])) {
                        echo "<h4>" . $_SESSION['status'] . "</h4>";
                        unset($_SESSION['status']);
                        }
                    ?>
                    <div class="input-group mb-3"> <input type="text" class="form-control" placeholder="Mobile" name="phone">
                        <div class="input-group-append">
                            <div class="input-group-text"> <span class="fas fa-envelope"></span> </div>
                        </div>
                    </div>
                    <div class="input-group mb-3"> <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text"> <span class="fas fa-lock"></span> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary"> <input type="checkbox" id="remember"> <label for="remember"> Remember Me </label> </div>
                        </div> <!-- /.col -->
                        <div class="col-4"> <button type="submit" class="btn btn-primary btn-block" name="signin">Sign In</button> </div> <!-- /.col -->
                    </div>
                </form> <!-- /.social-auth-links -->
                <p class="mb-1"> <a href="forgot-password.php">I forgot my password</a> </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>
<?php
session_start();
require_once 'function.php';

if (isset($_POST['signin'])) {
    // Retrieve form data
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $query = "SELECT * FROM registration WHERE phone = '$phone' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['id']=$user->id;
    $_SESSION['role']=$user->role;

    // Validate credentials
    if ($user) {
        // Redirect to parent dashboard or perform appropriate actions
        header("Location: index.php");
        exit();
    }
    

    // Close the database connection
    mysqli_close($conn);
}
?>