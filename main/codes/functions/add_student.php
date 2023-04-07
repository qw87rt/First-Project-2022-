<?php
include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
include_once('classFunc.php');

$student_id = $_POST["student_id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$date_of_birth = $_POST["date_of_birth"];
$address = $_POST["address"];
$phone_number = $_POST["phone_number"];
$gender = $_POST["gender"];
$user_type = $_POST["user_type"];
$username = $_POST["username"];
$password = $_POST["password"];

$functions = new myFunctions();
$functions->add_query_func($student_id, $first_name, $last_name, $date_of_birth, $address, $phone_number, $gender, $user_type, $username, $password);
header("Location: ../../index.php?pg=students");
exit;


?>