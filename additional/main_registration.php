    <?php include "function.php";
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mobile = $_POST['mobile'];
        $whatsno = $_POST['whatsno'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $blood_group = $_POST['blood_group'];
        $Caste = $_POST['Caste'];
        $Castigates = $_POST['Castigates'];
        $other_castigates = $_POST['other_castigates'];
        $marital_status = $_POST['marital_status'];
        $current_occupation = $_POST['current_occupation'];
        $Family_Income = $_POST['Family_Income'];
        $current_class = $_POST['current_class'];
        $previous_class = $_POST['previous_class'];
        $previous_marks = $_POST['previous_marks'];
        $Address = $_POST['Address'];
        $District = $_POST['District'];
        $Taluka = $_POST['Taluka'];
        $State = $_POST['State'];
        $PIN = $_POST['PIN'];
        $Mashjid = $_POST['Mashjid'];
        $OBC_EWS = $_POST['OBC_EWS'];
        $Aadhar = $_POST['Aadhar'];
        $VoterID = $_POST['VoterID'];
        $Ration = $_POST['Ration'];
        $PANCard = $_POST['PANCard'];
        $BirthCertificate = $_POST['BirthCertificate'];
        $Passport = $_POST['Passport'];
        $Maktab = $_POST['Maktab'];
        $VoterCard = $_POST['VoterCard'];
        $Domicile_Nationality = $_POST['Domicile_Nationality'];
        $Ayushman_Bharat_Card = $_POST['Ayushman_Bharat_Card'];
        $E_Shram_Card = $_POST['E_Shram_Card'];
        $Labourcard = $_POST['Labourcard'];
        $AccidentalInsurance = $_POST['AccidentalInsurance'];
        $locker = $_POST['locker'];
        $target = "upload/documents/";
        
        //Upload Adhar Card    
        $target = $target . basename($_FILES['U_Adhar_Card']['name']);
        $U_Adhar_Card = ($_FILES['U_Adhar_Card']['name']);
        $U_Adhar_CardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
        
        //Upload Pan Card    
        $target = $target . basename($_FILES['U_Pan_Card']['name']);
        $U_Pan_Card = ($_FILES['U_Pan_Card']['name']);
        $U_Pan_CardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
        
        //Upload OBC / EWS    
        $target = $target . basename($_FILES['U_OBC_EWS']['name']);
        $U_OBC_EWS = ($_FILES['U_OBC_EWS']['name']);
        $U_OBC_EWSFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload  Birth Cetificate   
        $target = $target . basename($_FILES['U_BirthCertificate']['name']);
        $U_BirthCertificate = ($_FILES['U_BirthCertificate']['name']);
        $U_BirthCertificateFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Ration Card    
        $target = $target . basename($_FILES['U_RationCard']['name']);
        $U_RationCard = ($_FILES['U_RationCard']['name']);
        $U_RationCardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Passport    
        $target = $target . basename($_FILES['U_Passport']['name']);
        $U_Passport = ($_FILES['U_Passport']['name']);
        $U_PassportFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Domicile & Nationality    
        $target = $target . basename($_FILES['U_DomicileNationality']['name']);
        $U_DomicileNationality = ($_FILES['U_DomicileNationality']['name']);
        $U_DomicileNationalityFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Bharat Card    
        $target = $target . basename($_FILES['U_BharatCard']['name']);
        $U_BharatCard = ($_FILES['U_BharatCard']['name']);
        $U_BharatCardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Shram Card    
        $target = $target . basename($_FILES['U_E_ShramCard']['name']);
        $U_E_ShramCard = ($_FILES['U_E_ShramCard']['name']);
        $U_E_ShramCardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Labour Card    
        $target = $target . basename($_FILES['U_Labourcard']['name']);
        $U_Labourcard = ($_FILES['U_Labourcard']['name']);
        $U_LabourcardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
            
        //Upload Accidental Insurace    
        $target = $target . basename($_FILES['U_AccidentalInsurance']['name']);
        $U_AccidentalInsurance = ($_FILES['U_AccidentalInsurance']['name']);
        $U_AccidentalInsuranceFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

        //Upload voter Card    
        $target = $target . basename($_FILES['U_VoterCard']['name']);
        $U_VoterCard = ($_FILES['U_VoterCard']['name']);
        $U_VoterCardFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));


        // Check if the uploaded file is a PDF
        if ($U_Adhar_CardFileType != "pdf") {
        echo "Only PDF files are allowed.";
        exit;
        }
    
        if (move_uploaded_file($_FILES['U_Adhar_Card']['tmp_name'], $target)) {
        echo "Successfully uploaded.";
        } else {
        echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_Pan_CardFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_Pan_Card']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_VoterCardFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_VoterCard']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_OBC_EWSFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_OBC_EWS']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_BirthCertificateFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_BirthCertificate']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }


        // Check if the uploaded file is a PDF
        if ($U_RationCardFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_RationCard']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_PassportFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_Passport']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_DomicileNationalityFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_DomicileNationality']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_BharatCardFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_BharatCard']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_E_ShramCardFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_E_ShramCard']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_LabourcardFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_Labourcard']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        

        // Check if the uploaded file is a PDF
        if ($U_AccidentalInsuranceFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit;
        }
        
        if (move_uploaded_file($_FILES['U_AccidentalInsurance']['tmp_name'], $target)) {
            echo "Successfully uploaded.";
        } else {
            echo "Sorry, the file was not uploaded.";
        }
        $sql = "INSERT INTO portal_membership (name, fname, mobile, whatsno, email, gender, age, blood_group, Caste, Castigates, other_castigates, marital_status, current_occupation, Family_Income, current_class, previous_class, previous_marks, Address, District, Taluka, State, PIN, Mashjid, OBC_EWS, Aadhar, VoterID, Ration, PANCard, BirthCertificate, Passport, Maktab, VoterCard, Domicile_Nationality, Ayushman_Bharat_Card, E_Shram_Card, Labourcard, AccidentalInsurance, locker, U_Adhar_Card, U_Pan_Card, U_VoterCard, U_OBC_EWS, U_BirthCertificate, U_RationCard, U_Passport, U_DomicileNationality, U_BharatCard, U_E_ShramCard, U_Labourcard, U_AccidentalInsurance)
                values ('$name', '$fname', '$mobile', '$whatsno', '$email', '$gender', '$age', '$blood_group', '$Caste', '$Castigates', '$other_castigates', '$marital_status', '$current_occupation', '$Family_Income', '$current_class', '$previous_class', '$previous_marks', '$Address', '$District', '$Taluka', '$State', '$PIN', '$Mashjid', '$OBC_EWS', '$Aadhar', '$VoterID', '$Ration', '$PANCard', '$BirthCertificate', '$Passport', '$Maktab', '$VoterCard', '$Domicile_Nationality', '$Ayushman_Bharat_Card', '$E_Shram_Card', '$Labourcard', '$AccidentalInsurance', '$locker', '$U_Adhar_Card', '$U_Pan_Card', '$U_VoterCard', '$U_OBC_EWS', '$U_BirthCertificate', '$U_RationCard', '$U_Passport', '$U_DomicileNationality', '$U_BharatCard', '$U_E_ShramCard', '$U_Labourcard', '$U_AccidentalInsurance')";
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
                            <h1>Membership Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Membership Form</li>
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
                                    <h3 class="card-title">Portal Membership Form</h3>
                                </div> <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Full Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Fathers Name</label> <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Father's Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Mobile</label> <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>WhatsApp Number</label> <input type="text" class="form-control" name="whatsno" id="whatsno" placeholder="Enter Whatsapp Number" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Email Address</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Gender</label> <select class="form-control" name="gender" id="gender">
                                                        <option value="">--Select--</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Age</label> <input type="text" class="form-control" name="age" id="age" placeholder="Enter Age" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Blood Group </label> <select class="form-control" name="blood_group" id="blood_group">
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
                                                        <option value="Farmer">Farmer</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Unemployed">Unemployed</option>
                                                        <option value="Entrepreneur">Entrepreneur</option>
                                                        <option value="Academician">Academician</option>
                                                        <option value="Research">Research</option>
                                                        <option value="Social Worker">Social Worker</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label> Anual family income </label> <select class="form-control" name="Family_Income" id="Family_Income" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="Less than 1,00,000">Less than 1,00,000</option>
                                                        <option value="Less than 1,50,000">Less than 1,50,000</option>
                                                        <option value="Less than 2,50,000">Less than 2,50,000</option>
                                                        <option value="Less than 5,00,000">Less than 5,00,000</option>
                                                        <option value="Less than 8,00,000">Less than 8,00,000</option>
                                                        <option value="And Above">And Above</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Current Class</label> <select class="form-control" id="current_class" name="current_class" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="Class 1">Class 1</option>
                                                        <option value="Class 2">Class 2</option>
                                                        <option value="Class 3">Class 3</option>
                                                        <option value="Class 4">Class 4</option>
                                                        <option value="Class 5">Class 5</option>
                                                        <option value="Class 6">Class 6</option>
                                                        <option value="Class 7">Class 7</option>
                                                        <option value="Class 8">Class 8</option>
                                                        <option value="Class 9">Class 9</option>
                                                        <option value="Class 10">Class 10</option>
                                                        <option value="Class 11">Class 11</option>
                                                        <option value="Class 12">Class 12</option>
                                                        <option value="Graducation F.Y.">Graducation F.Y.</option>
                                                        <option value="Graducation S.Y.">Graducation S.Y.</option>
                                                        <option value="Graducation T.Y.">Graducation T.Y.</option>
                                                        <option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
                                                        <option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
                                                        <option value="Ph.D.">Ph.D.</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Previous Class</label> <select class="form-control" id="previous_class" name="previous_class" required="">
                                                        <option value="">--Select--</option>
                                                        <option value="Class 1">Class 1</option>
                                                        <option value="Class 2">Class 2</option>
                                                        <option value="Class 3">Class 3</option>
                                                        <option value="Class 4">Class 4</option>
                                                        <option value="Class 5">Class 5</option>
                                                        <option value="Class 6">Class 6</option>
                                                        <option value="Class 7">Class 7</option>
                                                        <option value="Class 8">Class 8</option>
                                                        <option value="Class 9">Class 9</option>
                                                        <option value="Class 10">Class 10</option>
                                                        <option value="Class 11">Class 11</option>
                                                        <option value="Class 12">Class 12</option>
                                                        <option value="Graducation F.Y.">Graducation F.Y.</option>
                                                        <option value="Graducation S.Y.">Graducation S.Y.</option>
                                                        <option value="Graducation T.Y.">Graducation T.Y.</option>
                                                        <option value="Post Graducation F.Y.">Post Graducation F.Y.</option>
                                                        <option value="Post Graducation S.Y.">Post Graducation S.Y.</option>
                                                        <option value="Ph.D.">Ph.D.</option>
                                                    </select> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Marks Obtained</label> <input type="text" class="form-control" name="previous_marks" id="previous_marks" placeholder="Enter Details" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Address</label> <textarea class="form-control" name="Address" id="" rows="3" placeholder="Enter Address" data-lt-tmp-id="lt-867403" spellcheck="false" data-gramm="false" required=""></textarea> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>District</label> <input type="text" class="form-control" name="District" id="District" placeholder="Enter District" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Taluka</label> <input type="text" class="form-control" name="Taluka" id="Taluka" placeholder="Enter Taluka" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">State - Domicile</label> <input type="text" class="form-control" name="State" id="State" placeholder="Enter State" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>PIN</label> <input type="text" class="form-control" name="PIN" id="PIN" placeholder="Enter Pin - code" required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Near By Masjid</label> <input type="text" class="form-control" name="Mashjid" id="Mashjid" placeholder="Enter Near By Masjid..." required=""> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label for="">Masjid Chairman Name</label> <input type="text" class="form-control" name="Mashjid_chairman" id="Mashjid_chairman" placeholder="Enter Mashjid Chairman Name" required=""> </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 style="color:#9E358A"><b>Do you have following document :</b></h4>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>OBC/EWS</label><br> <input type="radio" name="OBC_EWS" value="Available"> Available <input type="radio" name="OBC_EWS" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Aadhar</label><br> <input type="radio" name="Aadhar" value="Available"> Available <input type="radio" name="Aadhar" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Voter ID</label><br> <input type="radio" name="VoterID" value="Available"> Available <input type="radio" name="VoterID" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Ration</label><br> <input type="radio" name="Ration" value="Available"> Available <input type="radio" name="Ration" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>PAN Card</label><br> <input type="radio" name="PANCard" value="Available"> Available <input type="radio" name="PANCard" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Birth Certificate</label><br> <input type="radio" name="BirthCertificate" value="Available"> Available <input type="radio" name="BirthCertificate" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Passport</label><br> <input type="radio" name="Passport" value="Available"> Available <input type="radio" name="Passport" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Maktab</label><br> <input type="radio" name="Maktab" value="Completed"> Completed <input type="radio" name="Maktab" value="Pursuing"> Pursuing <input type="radio" name="Maktab" value="Interest to learn"> Interest to learn </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Voter Card</label><br> <input type="radio" name="VoterCard" value="Available"> Available <input type="radio" name="VoterCard" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Domicile & Nationality</label><br> <input type="radio" name="Domicile_Nationality" value="Available"> Available <input type="radio" name="Domicile_Nationality" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Ayushman Bharat Card</label><br> <input type="radio" name="Ayushman_Bharat_Card" value="Available"> Available <input type="radio" name="Ayushman_Bharat_Card" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>E-Shram Card</label><br> <input type="radio" name="E_Shram_Card" value="Available"> Available <input type="radio" name="E_Shram_Card" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Labour card</label><br> <input type="radio" name="Labourcard" value="Available"> Available <input type="radio" name="Labourcard" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Accidental Insurance</label><br> <input type="radio" name="AccidentalInsurance" value="Available"> Available <input type="radio" name="AccidentalInsurance" value="Make New Document"> Make New Document </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <h4 style="color:#9E358A"><b>Do you want to use locker :</b></h4> <input type="radio" name="locker" value="Yes"> Yes <input type="radio" name="locker" value="No"> No
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Adhar Card</label><br> <input type="file" name="U_Adhar_Card" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Pan Card</label><br> <input type="file" name="U_Pan_Card" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Voter Card</label><br> <input type="file" name="U_VoterCard" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload OBC/EWS</label><br> <input type="file" name="U_OBC_EWS" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Birth Certificate</label><br> <input type="file" name="U_BirthCertificate" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Ration Card</label><br> <input type="file" name="U_RationCard" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Passport</label><br> <input type="file" name="U_Passport" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Domicile & Nationality</label><br> <input type="file" name="U_DomicileNationality" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Ayushman Bharat Card</label><br> <input type="file" name="U_BharatCard" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload E-Shram Card</label><br> <input type="file" name="U_E_ShramCard" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Labour card</label><br> <input type="file" name="U_Labourcard" class="form-control"> </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group"> <label>Upload Accidental Insurance</label><br> <input type="file" name="U_AccidentalInsurance" class="form-control"> </div>
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