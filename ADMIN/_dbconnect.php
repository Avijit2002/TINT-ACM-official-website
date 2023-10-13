<?php
//echo "hello world";


//connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "acm database";

// $servername = "ec2-65-2-191-135.ap-south-1.compute.amazonaws.com";
// $username = "acm_sc_user";
// $password = "abcd123";
// $database = "t4b_acm_student_chap_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("sorry we failed to connect" . mysqli_connect_error());
} else {
    //echo "<br>connected";
}
