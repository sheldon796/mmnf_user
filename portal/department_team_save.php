<?php
//include auth_session.php file on all user panel pages
include("config.php"); include("auth_session.php");

if (isset($_POST['submit'])) {
    $department_id = $_POST['last_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $designation = $_POST['designation'];
    $target = "upload/departments/team/";

    // Check if the upload directory exists, create it if necessary
    if (!file_exists($target)) {
        mkdir($target, 0777, true);
    }

    $photo = $_FILES['photo']['name'];

    $uploadStatus = true; // Variable to track upload status

    // Upload the first file
    if (!empty($_FILES['photo']['tmp_name'])) {
        $photoTarget = $target . basename($photo);
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $photoTarget)) {
            echo "File 1 uploaded successfully.";
        } else {
            echo "Error uploading File 1.";
            $uploadStatus = false;
        }
    }

    if ($uploadStatus) {
        $sql = "INSERT INTO team_member (department_id, name, phone, email, location, designation, photo)
                values ('$department_id','$name', '$phone', '$email', '$address', '$designation', '$photo')";
        if (mysqli_query($link, $sql)) {
            unset($_POST);
            unset($_REQUEST);
            echo "Data inserted successfully.";
            ?>
            <script>

              window.location = "index.php";
            </script>
            <?php
} else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    } else {
        echo "Error uploading files.";
    }

    exit;
}
?>