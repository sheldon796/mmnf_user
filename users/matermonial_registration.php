<?php
include "function.php";

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $Mobile = $_POST['Mobile'];
    $whatsno = $_POST['whatsno'];
    $email = $_POST['email'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $Blood_Group = $_POST['Blood_Group'];
    $Caste = $_POST['Caste'];
    $Castigates = $_POST['Castigates'];
    $other_castigates = $_POST['other_castigates'];
    $marital_status = $_POST['marital_status'];
    $current_occupation = $_POST['current_occupation'];
    $Family_Income = $_POST['Family_Income'];
    $current_class = $_POST['current_class'];
    $A_course = $_POST['A_course'];
    $B_R_number = $_POST['B_R_number'];
    $P_C_details = $_POST['P_C_details'];
    $firm_details = $_POST['firm_details'];
    $B_website = $_POST['B_website'];
    $insurance = $_POST['insurance'];
    $mutual_fund = $_POST['mutual_fund'];
    $share_investment = $_POST['share_investment'];
    $other_investment = $_POST['other_investment'];
    $vehicle_detail = isset($_POST['vehicle_detail']) ? $_POST['vehicle_detail'] : array();
    $property_detail = isset($_POST['property_detail']) ? $_POST['property_detail'] : array();


    $vehicle_detail_serialized = serialize($vehicle_detail);
    $property_detail_serialized = serialize($property_detail);
    $abha_card = $_POST['abha_card'];
    $counselling1 = $_POST['counselling1'];
    $whom1 = $_POST['whom1'];
    $date2 = $_POST['date2'];
    $mode1 = $_POST['mode1'];
    $counselling2 = $_POST['counselling2'];
    $whom2 = $_POST['whom2'];
    $date3 = $_POST['date3'];
    $mode2 = $_POST['mode2'];
    $target = "upload/documents/";


    $target = $target . basename($_FILES['educational_certificate']['name']);
    $educational_certificate = ($_FILES['educational_certificate']['name']);
    $educational_certificateFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));


    $target = $target . basename($_FILES['appointment_letter']['name']);
    $appointment_letter = ($_FILES['appointment_letter']['name']);
    $appointment_letterFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));


    $target = $target . basename($_FILES['salary_slip']['name']);
    $salary_slip = ($_FILES['salary_slip']['name']);
    $salary_slipFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));


    $target = $target . basename($_FILES['supporting_document']['name']);
    $supporting_document = ($_FILES['supporting_document']['name']);
    $supporting_documentFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));


    $target = $target . basename($_FILES['pan_card']['name']);
    $pan_card = ($_FILES['pan_card']['name']);
    $pan_cardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));


    $target = $target . basename($_FILES['business_pan_card']['name']);
    $business_pan_card = ($_FILES['business_pan_card']['name']);
    $business_pan_cardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));


    $target = $target . basename($_FILES['balance_sheet']['name']);
    $balance_sheet = ($_FILES['balance_sheet']['name']);
    $balance_sheetFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    
    $target = $target . basename($_FILES['product_profile']['name']);
    $product_profile = ($_FILES['product_profile']['name']);
    $product_profileFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    
    $target = $target . basename($_FILES['itr']['name']);
    $itr = ($_FILES['itr']['name']);
    $itrFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    
    $target = $target . basename($_FILES['insurance_policy']['name']);
    $insurance_policy = ($_FILES['insurance_policy']['name']);
    $insurance_policyFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    
    $target = $target . basename($_FILES['upload_mutual_fund']['name']);
    $upload_mutual_fund = ($_FILES['upload_mutual_fund']['name']);
    $upload_mutual_fundFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    
    $target = $target . basename($_FILES['fitness_certificate']['name']);
    $fitness_certificate = ($_FILES['fitness_certificate']['name']);
    $fitness_certificateFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

    
    $target = $target . basename($_FILES['self_declaration']['name']);
    $self_declaration = ($_FILES['self_declaration']['name']);
    $self_declarationFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));


    if ($educational_certificateFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }


    if ($appointment_letterFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }


    if ($salary_slipFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }


    if ($supporting_documentFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }


    if ($pan_cardFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }


    if ($business_pan_cardFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }


    if ($balance_sheetFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }


    if ($product_profileFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    
    if ($itrFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    
    if ($insurance_policyFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    
    if ($upload_mutual_fundFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }

    
    if ($fitness_certificateFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }


    if ($self_declarationFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
    }
    ?>
        <script>
            function showConfirmationPopup() {
            var result = confirm("Your registration is completed. Do you want to proceed?");        
            if (result) {
                window.location.href = "https://mmnf.in/MMNF_Matrimonial/"; // Replace with the actual URL
            } else {
                window.location.href = "index.php";  // Replace with the actual URL
            }
            }
        </script>
      <?php

    $sql = "INSERT INTO matrimonial_registration (type, name, fname, Mobile, whatsno, email, Gender, Age, Blood_Group, Caste, Castigates, other_castigates, marital_status,
                                                current_occupation, Family_Income, current_class, A_course, educational_certificate, appointment_letter, salary_slip, B_R_number,
                                                supporting_document, P_C_details, pan_card, firm_details, business_pan_card, balance_sheet, product_profile, B_website, itr,
                                                insurance, insurance_policy, mutual_fund, upload_mutual_fund, share_investment, other_investment, vehicle_detail, property_detail,
                                                fitness_certificate, abha_card, self_declaration, counselling1, whom1, date2, mode1, counselling2, whom2, date3, mode2)
                                                values ('$type', '$name', '$fname', '$Mobile', '$whatsno', '$email', '$Gender', '$Age', '$Blood_Group', '$Caste', '$Castigates',
                                                '$other_castigates', '$marital_status', '$current_occupation', '$Family_Income', '$current_class', '$A_course', '$educational_certificate',
                                                '$appointment_letter', '$salary_slip', '$B_R_number', '$supporting_document', '$P_C_details', '$pan_card', '$firm_details', '$business_pan_card',
                                                '$balance_sheet', '$product_profile', '$B_website', '$itr', '$insurance', '$insurance_policy', '$mutual_fund', '$upload_mutual_fund', '$share_investment',
                                                '$other_investment', '$vehicle_detail_serialized', '$property_detail_serialized', '$fitness_certificate', '$abha_card', '$self_declaration', '$counselling1', '$whom1', '$date2',
                                                '$mode1', '$counselling2', '$whom2', '$date3', '$mode2')";
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
                            <h1>Matrimonial Registration Form</h1>
                            <!-- <h1><a href="matrimoniall.php">Next Page</a></h1> -->
                      </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Matrimonial Registration Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <!-- left column -->
                        <div class="col-md-10">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Registration Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Type of Registrations</label> <select class="form-control" name="type" id="type">
                                                        <option value="">--Select--</option>
                                                        <option value="₹500">₹ 500/- (Non - Verified)</option>
                                                        <option value="₹2,000">₹ 2,000/- (Verified)</option>
                                                        <option value="₹5,000">₹ 5,000/- (Verified with Personal Assistance)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Full Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Fathers Name</label> <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Father's Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text" class="form-control" name="Mobile" id="Mobile" placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>WhatsApp Number</label> <input type="text" class="form-control" name="whatsno" id="whatsno" placeholder="Enter Whatsapp Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Gender</label> <select class="form-control" name="Gender" id="Gender">
                                                        <option value="">--Select--</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Age</label> <input type="text" class="form-control" name="Age" id="Age" placeholder="Enter Age" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Blood Group </label> <select class="form-control" name="Blood_Group" id="Blood_Group">
                                                        <option value="">--Select--</option>
                                                        <option value="A+">A RhD positive (A+)</option>
                                                        <option value="A-">A RhD negative (A-)</option>
                                                        <option value="B+">B RhD positive (B+)</option>
                                                        <option value="B-">B RhD negative (B-)</option>
                                                        <option value="O+">O RhD positive (O+)</option>
                                                        <option value="O-">O RhD negative (O-)</option>
                                                        <option value="AB+">AB RhD positive (AB+)</option>
                                                        <option value="AB-">AB RhD negative (AB-)</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Caste </label> <select class="form-control" name="Caste" id="Caste" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="OBC">OBC</option>
                                                        <option value="VJ/NT">VJ/NT</option>
                                                        <option value="Open">Open</option>
                                                        <option value="EWS">EWS</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Castigates</label> <select class="form-control" name="Castigates" id="Castigates" required="">
                                                        <option>--Select--</option>
                                                        <option value="Minority">Minority</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Other Castigates</label> <select class="form-control" name="other_castigates" id="other_castigates">
                                                        <option value="">--Select--</option>
                                                        <option value="COVID Affected ">COVID Affected</option>
                                                        <option value="Registered Labour">Registered Labour</option>
                                                        <option value="Transport Staff">Transport Staff</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Marital Status</label> <select class="form-control" name="marital_status" id="marital_status">
                                                        <option>--Select--</option>
                                                        <option value="Un-Married"> Un-Married</option>
                                                        <option value="Married"> Married</option>
                                                        <option value="Divorcee"> Divorcee</option>
                                                        <option value="Widow"> Widow</option>
                                                        <option value="Widower"> Widower</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label> Current Occupation </label> <select class="form-control" name="current_occupation" id="current_occupation" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Unemployes">Unemployed</option>
                                                        <option value="Employed">Employed</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Retired">Retired</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label> Annual family income </label> <select class="form-control" name="Family_Income" id="Family_Income" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="1,00,000">Below 1,00,000</option>
                                                        <option value="1,50,000">Below 1,50,000</option>
                                                        <option value="2,00,000">Below 2,00,000</option>
                                                        <option value="2,50,000">Below 2,50,000</option>
                                                        <option value="4,00,000">Below 4,00,000</option>
                                                        <option value="7,00,000">Below 7,00,000</option>
                                                        <option value="8,00,000">Below 8,00,000</option>
                                                        <option value="And Above">And Above</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Highest Educational Qualifications</label> <select class="form-control" id="current_class" name="current_class" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="S.S.C.">S.S.C.</option>
                                                        <option value="H.S.C.">H.S.C.</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Degree">Degree</option>
                                                        <option value="Master's">Master's</option>
                                                        <option value="Ph.D.">Ph.D.</option>
                                                        <option value="Additional Course">Additional Course</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Please Specify Additional Course Details</label> <input type="text" class="form-control" name="A_course" id="A_course" placeholder="If Yes, Please Specify | If No, Type N.A." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Educational certificate</label><br> <input type="file" name="educational_certificate" value="educational_certificate" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">For Job Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group"> <label>Appointment Letter</label><br> <input type="file" name="appointment_letter" value="appointment_letter" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-6" >
                                                <div class="form-group"> <label>Salary Slip</label><br> <input type="file" name="salary_slip" value="salary_slip" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">For Business Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Business Registration Number</label> <input type="text" class="form-control" name="B_R_number" id="B_R_number" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Supporting Document</label><br> <input type="file" name="supporting_document" value="supporting_document" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Pan Card Details</label> <input type="text" class="form-control" name="P_C_details" id="P_C_details" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Pan Card </label><br> <input type="file" name="pan_card" value="pan_card" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>If Other than Proprietor</label> <input type="text" class="form-control" name="firm_details" id="firm_details" placeholder="If Yes, Please Specify | If No, Type N.A." required=""> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Business Pan Card</label><br> <input type="file" name="business_pan_card" value="business_pan_card" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Balance Sheet</label><br> <input type="file" name="balance_sheet" value="balance_sheet" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Upload Product Profile</label><br> <input type="file" name="product_profile" value="product_profile" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group"> <label>Business Website</label> <input type="text" class="form-control" name="B_website" id="B_website" placeholder="Enter URL Here" required=""> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Financial Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload ITR Copy</label><br> <input type="file" name="itr" value="itr" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Insurance Policy Number</label> <input type="text" class="form-control" name="insurance" id="insurance" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload File (Insurance Policy Copy)</label><br> <input type="file" name="insurance_policy" value="insurance_policy" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mutual Funds Details</label> <input type="text" class="form-control" name="mutual_fund" id="mutual_fund" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload File (Mutual Fund Details)</label><br> <input type="file" name="upload_mutual_fund" value="upload_mutual_fund" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Share Investment Details</label> <input type="text" class="form-control" name="share_investment" id="share_investment" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Other Investment Details</label> <input type="text" class="form-control" name="other_investment" id="other_investment" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Assests Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- checkbox -->
                                                <div class="form-group"><label>Vehicle Details</label>
                                                    <div class="form-check"> <input name="vehicle_detail[]" value="Two Wheeler" class="form-check-input" type="checkbox" > <label class="form-check-label">Two Wheeler</label> </div>
                                                    <div class="form-check"> <input name="vehicle_detail[]" value="Three Wheeler" class="form-check-input" type="checkbox" > <label class="form-check-label">Three Wheeler</label> </div>
                                                    <div class="form-check"> <input name="vehicle_detail[]" value="Four Wheeler" class="form-check-input" type="checkbox" > <label class="form-check-label">Four Wheeler</label> </div>
                                                    <div class="form-check"> <input name="vehicle_detail[]" value="Six Wheeler" class="form-check-input" type="checkbox" > <label class="form-check-label">Six Wheeler</label> </div>
                                                    <div class="form-check"> <input name="vehicle_detail[]" value="Ten Wheeler" class="form-check-input" type="checkbox" > <label class="form-check-label">Ten Wheeler</label> </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- checkbox -->
                                                <div class="form-group"><label>Property Details</label>
                                                    <div class="form-check"> <input name="property_detail[]" value="Shop" class="form-check-input" type="checkbox" > <label class="form-check-label">Shop</label> </div>
                                                    <div class="form-check"> <input name="property_detail[]" value="Office" class="form-check-input" type="checkbox" > <label class="form-check-label">Office</label> </div>
                                                    <div class="form-check"> <input name="property_detail[]" value="Factory" class="form-check-input" type="checkbox" > <label class="form-check-label">Factory</label> </div>
                                                    <div class="form-check"> <input name="property_detail[]" value="Godown" class="form-check-input" type="checkbox" > <label class="form-check-label">Godown</label> </div>
                                                    <div class="form-check"> <input name="property_detail[]" value="Residential Apartment" class="form-check-input" type="checkbox" > <label class="form-check-label">Residential Apartment</label> </div>
                                                    <div class="form-check"> <input name="property_detail[]" value="Bunglow" class="form-check-input" type="checkbox" > <label class="form-check-label">Bunglow</label> </div>
                                                    <div class="form-check"> <input name="property_detail[]" value="Row House" class="form-check-input" type="checkbox" > <label class="form-check-label">Row House</label> </div>
                                                    <div class="form-check"> <input name="property_detail[]" value="Open Land" class="form-check-input" type="checkbox" > <label class="form-check-label">Open Land</label> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Health Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Medical Fitness Certificate</label><br> <input type="file" name="fitness_certificate" value="fitness_certificate" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">ABHA Card Details</label> <input type="text" class="form-control" name="abha_card" id="abha_card" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="card-footer"><label>Self Declaration Sample Form</label>
                                            <a href="MMNF_sel-declaration.pdf" target="_blank"><button type="Button" class="btn btn-primary" name="btn_submit">Download</button></a>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Self Declaration Certificate</label><br> <input type="file" name="self_declaration" value="self_declaration" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Pre-Marriage Counselling</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Have you completed Pre-Marriage Counselling</label> <input type="text" class="form-control" name="counselling1" id="counselling1" placeholder="If Yes the Types Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">If Yes, then by Whom</label> <input type="text" class="form-control" name="whom1" id="whom1" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Date of Counselling</label> <input type="date" class="form-control" name="date2" id="date2" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Mode of Counselling</label>
                                                    <select class="form-control" name="mode1" id="mode1">
                                                        <option value="">--Select--</option>
                                                        <option value="offline">Offline</option>
                                                        <option value="online">Online</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">After-Marriage Counselling</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Have you completed After-Marriage Counselling</label> <input type="text" class="form-control" name="counselling2" id="counselling2" placeholder="If Yes the Types Yes | If No then type No" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">If Yes, then by Whom</label> <input type="text" class="form-control" name="whom2" id="whom2" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Date of Counselling</label> <input type="date" class="form-control" name="date3" id="date3" placeholder="Enter Details Here" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Mode of Counselling</label>
                                                    <select class="form-control" name="mode2" id="mode2">
                                                        <option value="">--Select--</option>
                                                        <option value="offline">Offline</option>
                                                        <option value="online">Online</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.card-body -->
                                    <div class="card-header" style="background-color:#007bff">
                                        <h3 class="card-title" style="color:white">Legal Information about Martial Realtionship</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="card-footer">
                                                <!-- <label>Self Declaration Sample Form</label> -->
                                                <button type="Button" class="btn btn-primary" name="btn_submit">Download</button>
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
            </section><!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div> <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a> </strong>
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
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

    <script>
        $(function () {
          bsCustomFileInput.init();
        });
    </script>
</body>

</html>