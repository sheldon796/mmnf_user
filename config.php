<?php

/* Database credentials. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

// define('DB_SERVER', 'localhost');

// define('DB_USERNAME', 'u481847985_mmnf_users');

// define('DB_PASSWORD', 'Z#ep+/Uwoz84');

// define('DB_NAME', 'u481847985_mmnf_datab');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mmnf_datab2');


/* Attempt to connect to MySQL database */

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



// Check connection

if ($link === false) {

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

?>