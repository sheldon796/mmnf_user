<?php //include "function.php";
    if (isset($_POST['submit'])) {
        $services = $_POST['services'];
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $Mobile = $_POST['Mobile'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $cif_number = $_POST['cif_number'];
        $address = $_POST['address'];
        $Mashjid = $_POST['Mashjid'];
        $department = $_POST['department'];
        $birth_certificate = $_POST['birth_certificate'];
        $income_certificate = $_POST['income_certificate'];
        $last_marksheet = $_POST['last_marksheet'];
        $caste_certificate = $_POST['caste_certificate'];
        $disability_certificate = $_POST['disability_certificate'];
        $adhar_card = $_POST['adhar_card'];
        $pan_card = $_POST['pan_card'];
        $bank_account = $_POST['bank_account'];
        $target = "upload/documents/services/";
        
        //Upload Adhar Card    
        $target = $target . basename($_FILES['upload_birth_certificate']['name']);
        $upload_birth_certificate = ($_FILES['upload_birth_certificate']['name']);
        $upload_birth_certificateFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
        
        //Upload Pan Card    
        $target = $target . basename($_FILES['upload_income_certificate']['name']);
        $upload_income_certificate = ($_FILES['upload_income_certificate']['name']);
        $upload_income_certificateFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
        
        //Upload OBC / EWS    
        $target = $target . basename($_FILES['upload_last_marksheet']['name']);
        $upload_last_marksheet = ($_FILES['upload_last_marksheet']['name']);
        $upload_last_marksheetFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload  Birth Cetificate   
        $target = $target . basename($_FILES['upload_caste_certificate']['name']);
        $upload_caste_certificate = ($_FILES['upload_caste_certificate']['name']);
        $upload_caste_certificateFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Ration Card    
        $target = $target . basename($_FILES['upload_disability_certificate']['name']);
        $upload_disability_certificate = ($_FILES['upload_disability_certificate']['name']);
        $upload_disability_certificateFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Passport    
        $target = $target . basename($_FILES['upload_adhar_card']['name']);
        $upload_adhar_card = ($_FILES['upload_adhar_card']['name']);
        $upload_adhar_cardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Passport    
        $target = $target . basename($_FILES['upload_pan_card']['name']);
        $upload_pan_card = ($_FILES['upload_pan_card']['name']);
        $upload_pan_cardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Passport    
        $target = $target . basename($_FILES['upload_bank_account']['name']);
        $upload_bank_account = ($_FILES['upload_bank_account']['name']);
        $upload_bank_accountFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

        // Check if the uploaded file is a PDF
        if ($upload_birth_certificateFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
        }
        

        // Check if the uploaded file is a PDF
        if ($upload_income_certificateFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        

        // Check if the uploaded file is a PDF
        if ($upload_last_marksheetFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }

        // Check if the uploaded file is a PDF
        if ($upload_caste_certificateFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }

        // Check if the uploaded file is a PDF
        if ($upload_disability_certificateFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }


        // Check if the uploaded file is a PDF
        if ($upload_adhar_cardFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }


        // Check if the uploaded file is a PDF
        if ($upload_pan_cardFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }


        // Check if the uploaded file is a PDF
        if ($upload_bank_accountFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        $sql = "INSERT INTO service_request (services, uid, name, Mobile, email, city, cif_number, address, Mashjid, department, birth_certificate, upload_birth_certificate, income_certificate, upload_income_certificate, last_marksheet, upload_last_marksheet, caste_certificate, upload_caste_certificate, disability_certificate, upload_disability_certificate, adhar_card, upload_adhar_card, pan_card, upload_pan_card, bank_account, upload_bank_account)
                values ('$services', '$uid', '$name', '$Mobile', '$email', '$city', '$cif_number', '$address', '$Mashjid', '$department', '$birth_certificate', '$upload_birth_certificate', '$income_certificate', '$upload_income_certificate', '$last_marksheet', '$upload_last_marksheet', '$caste_certificate', '$upload_caste_certificate', '$disability_certificate', '$upload_disability_certificate', '$adhar_card', '$upload_adhar_card', '$pan_card', '$upload_pan_card', '$bank_account', '$upload_bank_account')";
        mysqli_query($conn, $sql);
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon">
    <title>MMNF</title> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar --> <?php include "navbar.php" ; ?> <?php include "aside.php" ; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content ">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12 mt-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Portal Membership Form</h3>
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
                    </div> <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div> <strong>© 2023-25. All rights
                reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's
                    Technologies</a> </strong>
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
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
</body>

</html>