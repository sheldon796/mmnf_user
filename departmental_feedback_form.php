<?php include "function.php";
    if (isset($_POST['submit'])) {
        $_SESSION['user_id'];
        $dept_id = $_POST['dept_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO departmental_feedback_form (name, email, subject, message, dept_id, user_id)
                values ('$name', '$email', '$subject', '$message', '$dept_id', " . $_SESSION['user_id'] . ")";
        if (mysqli_query($conn, $sql)){
            echo "Feedback Submitted";
            ?>        
            <script>
                window.location = "index.php"
            </script>
            <?php
        } else {
            echo "Error Found";
        }        
    }
    ?>  