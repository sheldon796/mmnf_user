<?php
require 'function.php';
// When form submitted, check and create user session.
if (isset($_POST['submit'])) {
    $username = stripslashes($_POST['phone']); // removes backslashes
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    // Check user is exist in the database
    $query = "SELECT * FROM `registration` WHERE phone='$username' AND password='" . ($password) . "'";
    $result = mysqli_query($conn, $query) or die(mysql_error());
    $numrows = mysqli_num_rows($result);
    $rows = mysqli_fetch_array($result);

    if ($numrows > 0) {
        $_SESSION['phone'] = $username;
        $_SESSION['user_id'] = $rows['id'];
        $_SESSION['is_profile_complete'] = $rows['is_profile_complete'];

        $sql_portal = "SELECT * FROM portal_membership where user_id = " . $rows['id'];
        $result_portal = mysqli_query($conn, $sql_portal);
        $row_portal = mysqli_fetch_assoc($result_portal);
        $_SESSION['class_id'] = $row_portal['current_class'];
        $_SESSION['gender'] = $row_portal['gender'];

        // Redirect to user dashboard page
        header("Location: index.php");
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='conn'>Try again with correct username and password.</p>
                  </div>";
    }
} else {

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
<body class="hold-transition login-page" style="background:radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card" style="box-shadow: 5px 5px 5px;">
            <div class="card-body login-card-body">
                <div align="center"> <img src="images/logo_main.png" width="140px" height="140px" />
                    <p class="login-box-msg"><b>Maharashtra Minority NGO Forum</b></p>
                </div>
                <form action="login.php" method="post">
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
                        <div class="col-4"> <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button> </div> <!-- /.col -->
                    </div>
                </form> <!-- /.social-auth-links -->
                <p class="mb-1"> <a href="forgot-password.php">I forgot my password</a> </p>
                <p class="mb-1"> <a href="register.php">New Here! Please Register</a> </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>
