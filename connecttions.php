<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "technician";

    $connect = mysqli_connect($host,$username,$password,$dbname);
    mysqli_query($connect,"SET NAMES 'utf8'");
    if(!$connect){
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connection successfully";
?>