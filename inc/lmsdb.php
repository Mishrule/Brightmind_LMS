<?php
    $connectionError = 'Connection Error';
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'lms';

    $con = mysqli_connect($host, $username, $pass, $db);
    if($con){
        // echo'Connected Successfully';
    }else{
        mysqli_error($con);
    }

?>