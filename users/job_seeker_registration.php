<?php include "function.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $G_name = $_POST['G_name'];
    $DOB = $_POST['DOB'];
    $pre_address = $_POST['pre_address'];
    $per_name = $_POST['per_name'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $C_name1 = $_POST['C_name1'];
    $board1 = $_POST['board1'];
    $P_year1 = $_POST['P_year1'];
    $percentage1 = $_POST['percentage1'];
    $C_name2 = $_POST['C_name2'];
    $board2 = $_POST['board2'];
    $P_year2 = $_POST['P_year2'];
    $percentage2 = $_POST['percentage2'];
    $C_name3 = $_POST['C_name3'];
    $board3 = $_POST['board3'];
    $P_year3 = $_POST['P_year3'];
    $percentage3 = $_POST['percentage3'];
    $C_name4 = $_POST['C_name4'];
    $board4 = $_POST['board4'];
    $P_year4 = $_POST['P_year4'];
    $percentage4 = $_POST['percentage4'];
    $C_name5 = $_POST['C_name5'];
    $board5 = $_POST['board5'];
    $P_year5 = $_POST['P_year5'];
    $percentage5 = $_POST['percentage5'];
    $company1 = $_POST['company1'];
    $designation1 = $_POST['designation1'];
    $period1 = $_POST['period1'];
    $responsibilities1 = $_POST['responsibilities1'];
    $company2 = $_POST['company2'];
    $designation2 = $_POST['designation2'];
    $period2 = $_POST['period2'];
    $responsibilities2 = $_POST['responsibilities2'];
    $company3 = $_POST['company3'];
    $designation3 = $_POST['designation3'];
    $period3 = $_POST['period3'];
    $responsibilities3 = $_POST['responsibilities3'];
    $company4 = $_POST['company4'];
    $designation4 = $_POST['designation4'];
    $period4 = $_POST['period4'];
    $responsibilities4 = $_POST['responsibilities4'];
    $company5 = $_POST['company5'];
    $designation5 = $_POST['designation5'];
    $period5 = $_POST['period5'];
    $responsibilities5 = $_POST['responsibilities5'];
    $activity1 = $_POST['activity1'];
    $activity2 = $_POST['activity2'];
    $activity3 = $_POST['activity3'];
    $hobby1 = $_POST['hobby1'];
    $hobby2 = $_POST['hobby2'];
    $hobby3 = $_POST['hobby3'];
    $project1 = $_POST['project1'];
    $completion1 = $_POST['completion1'];
    $project2 = $_POST['project2'];
    $completion2 = $_POST['completion2'];
    $project3 = $_POST['project3'];
    $completion3 = $_POST['completion3'];
    $salary = $_POST['salary'];
    $N_period = $_POST['N_period'];
    $disabled = $_POST['disabled'];
    $target = "upload/documents/";

    //Upload Adhar Card
    $target = $target . basename($_FILES['upload5']['name']);
    $upload5 = ($_FILES['upload5']['name']);
    $upload5FileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    //Upload Pan Card
    $target = $target . basename($_FILES['upload4']['name']);
    $upload4 = ($_FILES['upload4']['name']);
    $upload4FileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    //Upload OBC / EWS
    $target = $target . basename($_FILES['upload3']['name']);
    $upload3 = ($_FILES['upload3']['name']);
    $upload3FileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    //Upload  Birth Cetificate
    $target = $target . basename($_FILES['upload2']['name']);
    $upload2 = ($_FILES['upload2']['name']);
    $upload2FileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    //Upload Ration Card
    $target = $target . basename($_FILES['upload1']['name']);
    $upload1 = ($_FILES['upload1']['name']);
    $upload1FileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    //Upload Passport
    $target = $target . basename($_FILES['resume']['name']);
    $resume = ($_FILES['resume']['name']);
    $resumeFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    // Check if the uploaded file is a PDF
    if ($upload5FileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    // Check if the uploaded file is a PDF
    if ($upload4FileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    // Check if the uploaded file is a PDF
    if ($upload3FileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    // Check if the uploaded file is a PDF
    if ($upload2FileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    // Check if the uploaded file is a PDF
    if ($upload1FileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    // Check if the uploaded file is a PDF
    if ($resumeFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }
    ?>
        <script>
            function showConfirmationPopup() {
            var result = confirm("Your registration is completed. Do you want to proceed?");
            if (result) {
                window.location.href = "https://mmnf.in/jobsportal/"; // Replace with the actual URL
            } else {
                window.location.href = "index.php";  // Replace with the actual URL
            }
            }
        </script>
      <?php
$sql = "INSERT INTO job_seeker ( name, email, mobile, password, c_password, resume, G_name, DOB, pre_address, per_name, city, state, pincode, C_name1, board1, P_year1, percentage1, upload1, C_name2, board2, P_year2, percentage2, upload2, C_name3, board3, P_year3, percentage3, upload3, C_name4, board4, P_year4, percentage4, upload4, C_name5, board5, P_year5, percentage5, upload5, company1, designation1, period1, responsibilities1, company2, designation2, period2, responsibilities2, company3, designation3, period3, responsibilities3, company4, designation4, period4, responsibilities4, company5, designation5, period5, responsibilities5, activity1, activity2, activity3, hobby1, hobby2, hobby3, project1, completion1, project2, completion2, project3, completion3, salary, N_period, disabled)
                values ('$name', '$email', '$mobile', '$password', '$c_password', '$resume', '$G_name', '$DOB', '$pre_address', '$per_name', '$city', '$state', '$pincode', '$C_name1', '$board1', '$P_year1', '$percentage1', '$upload1', '$C_name2', '$board2', '$P_year2', '$percentage2', '$upload2', '$C_name3', '$board3', '$P_year3', '$percentage3', '$upload3', '$C_name4', '$board4', '$P_year4', '$percentage4', '$upload4', '$C_name5', '$board5', '$P_year5', '$percentage5', '$upload5', '$company1', '$designation1', '$period1', '$responsibilities1', '$company2', '$designation2', '$period2', '$responsibilities2', '$company3', '$designation3', '$period3', '$responsibilities3', '$company4', '$designation4', '$period4', '$responsibilities4', '$company5', '$designation5', '$period5', '$responsibilities5', '$activity1', '$activity2', '$activity3', '$hobby1', '$hobby2', '$hobby3', '$project1', '$completion1', '$project2', '$completion2', '$project3', '$completion3', '$salary', '$N_period', '$disabled')";
    mysqli_query($conn, $sql);
    ?>
            <script>
        showConfirmationPopup();
        </script>
          <?php
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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar --> <?php include "navbar.php";?> <?php include "aside.php";?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Job Seeker Registration Form</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Taking your career to the next level.</li>
                            </ol>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Job Seeker Registration Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-flex">
                    <div class="row justify-content-center" >
                        <!-- left column -->
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Registration Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Full Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Mobile Number</label> <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label for="">Work Status</label>
                                                    <select class="form-control" name="work" id="work">
                                                        <option value="">--Select--</option>
                                                        <option value="Experienced">Experienced</option>
                                                        <option value="Fresher">Fresher</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label for="">Enter Password</label> <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Confirm Password</label> <input type="password" class="form-control" name="c_password" id="c_password" placeholder="Confirm Password" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Resume</label><br> <input type="file" name="resume" value="resume" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Personal Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Guardian's Name</label> <input type="text" class="form-control" name="G_name" id="G_name" placeholder="Enter Guardian's Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Date of Birth</label> <input type="date" class="form-control" name="DOB" id="DOB" placeholder="Enter Date of Birth" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Present Address</label> <input type="text" class="form-control" name="pre_address" id="pre_address" placeholder="Enter Present Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Permanent Address</label> <input type="text" class="form-control" name="per_name" id="per_name" placeholder="Enter Permanent Address" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>City</label> <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>State</label> <input type="text" class="form-control" name="state" id="state" placeholder="Enter State" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Pincode</label> <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pin code" required=""> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Educational Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row ">
                                        <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">School / College Name</th>
                                                            <th style="border: 1px solid black;">Educational Board</th>
                                                            <th style="border: 1px solid black;">Passing Year</th>
                                                            <th style="border: 1px solid black;">Percentage / CGPA / SGPA</th>
                                                            <th style="border: 1px solid black;">Upload</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="C_name1" id="C_name1" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="board1" id="board1" placeholder="Enter Educational Board" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="P_year1" id="P_year1" placeholder="Enter Passing Year" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="percentage1" id="percentage1" placeholder="Enter your Percentage" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload1" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="C_name2" id="C_name2" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="board2" id="board2" placeholder="Enter Educational Board" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="P_year2" id="P_year2" placeholder="Enter Passing Year" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="percentage2" id="percentage2" placeholder="Enter your Percentage" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload2" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="C_name3" id="C_name3" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="board3" id="board3" placeholder="Enter Educational Board" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="P_year3" id="P_year3" placeholder="Enter Passing Year" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="percentage3" id="percentage3" placeholder="Enter your Percentage" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload3" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">04</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="C_name4" id="C_name4" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="board4" id="board4" placeholder="Enter Educational Board" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="P_year4" id="P_year4" placeholder="Enter Passing Year" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="percentage4" id="percentage4" placeholder="Enter your Percentage" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload4" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">05</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="C_name5" id="C_name5" placeholder="Enter Details here" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="board5" id="board5" placeholder="Enter Educational Board" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="P_year5" id="P_year5" placeholder="Enter Passing Year" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="percentage5" id="percentage5" placeholder="Enter your Percentage" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="file" name="upload5" style="width:300px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Work Experience</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;">
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Company's Name</th>
                                                            <th style="border: 1px solid black;">Designation</th>
                                                            <th style="border: 1px solid black;">Period</th>
                                                            <th style="border: 1px solid black;">Responsibilities</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="company1" id="company1" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="designation1" id="designation1" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="period1" id="period1" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="responsibilities1" id="responsibilities1" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="company2" id="company2" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="designation2" id="designation2" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="period2" id="period2" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="responsibilities2" id="responsibilities2" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="company3" id="company3" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="designation3" id="designation3" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="period3" id="period3" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="responsibilities3" id="responsibilities3" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">04</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="company4" id="company4" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="designation4" id="designation4" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="period4" id="period4" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="responsibilities4" id="responsibilities4" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">05</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="company5" id="company5" placeholder="Enter Company's Name" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="designation5" id="designation5" placeholder="Enter Designations" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="period5" id="period5" placeholder="Enter your Period of work" required="" style="width:300px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="responsibilities5" id="responsibilities5" placeholder="Enter your Responsibilites / Tasks" required="" style="width:300px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Other Informations</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-md-6" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;"><label>Extra Curricular Activities</label>
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Enter Details Here</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="activity1" id="activity1" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="activity2" id="activity2" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="activity3" id="activity3" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;"><label>Hobbies</label>
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Enter Details Here</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="hobby1" id="hobby1" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="hobby2" id="hobby2" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="hobby3" id="hobby3" placeholder="Enter Details Here" required="" style="width:350px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;overflow-x:auto;">
                                                <table class="Tableresponsive" style="width: 100%;"><label>Project Details</label>
                                                    <tbody style="border: 1px solid black;">
                                                        <tr align="center" style="height:50px;border: 1px solid #black;">
                                                            <th style="border: 1px solid black;">Sr. No.</th>
                                                            <th style="border: 1px solid black;">Project Title</th>
                                                            <th style="border: 1px solid black;">Year of Completion</th>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">01</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="project1" id="project1" placeholder="Enter Title Here" required="" style="width:400px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="completion1" id="completion1" placeholder="Enter Year of Completion" required="" style="width:400px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">02</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="project2" id="project2" placeholder="Enter Title Here" required="" style="width:400px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="completion2" id="completion2" placeholder="Enter Year of Completion" required="" style="width:400px"></td>
                                                        </tr>
                                                        <tr align="center" style="height:50px">
                                                            <td style="border: 1px solid black;">03</td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="project3" id="project3" placeholder="Enter Title Here" required="" style="width:400px"></td>
                                                            <td style="border: 1px solid black;"><input type="text" class="form-control" name="completion3" id="completion3" placeholder="Enter Year of Completion" required="" style="width:400px"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Expected Salary <small>*Per Annumm.</small></label> <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter Amount in Lacs" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Notice Period <small>*Enter in Days.</small></label> <input type="text" class="form-control" name="N_period" id="N_period" placeholder="Enter Amount in Days" required=""> </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Are you Physically Disabled? <small>If Yes, then state the disability!</small></label> <input type="text" class="form-control" name="disabled" id="disabled" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-footer"> <button type="submit" class="btn btn-primary" name="submit">Submit</button> </div>
                                </form>
                            </div> <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!--/.col (right) -->
                    </div> <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
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