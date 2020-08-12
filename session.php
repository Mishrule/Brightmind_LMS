<?php
session_start();

    $check_user = $_SESSION['login_user'];
        $ses_sql = mysqli_query($con, "SELECT * FROM student WHERE 	indexnumber = '$check_user'");
        $row = mysqli_fetch_array($ses_sql);
        $login_indexnumber = $row['indexnumber'];
        $login_level = $row['studentlevel'];
        if(!isset($_SESSION['login_user'])){
            header('Location:../index.php');
        }
?>