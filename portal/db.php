<?php

    // Enter your host name, database username, password, and database name.

    // If you have not set database password on localhost then set empty.

    // $con = mysqli_connect("localhost","u481847985_mmnf_users","Z#ep+/Uwoz84","u481847985_mmnf_datab");
$con = mysqli_connect("localhost", "root", "", "mmnf_datab2");
    // Check connection

    if (mysqli_connect_errno()){

        echo "Failed to connect to MySQL: " . mysqli_connect_error();

    }

?>