<?php
 // include database connection file
 require_once 'function.php';
// Destroy session
if (session_destroy()) {
    // Redirecting To Home Page
    header("Location: login.php");
}
