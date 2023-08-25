<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '184.168.112.105');
define('DB_USERNAME', 'mmnfdb');
define('DB_PASSWORD', 'Lgk(*9^o540Q');
define('DB_NAME', 'mmnf');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>