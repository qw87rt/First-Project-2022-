<?php
include_once('classFunc.php');
include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
global $conn;

// Get the form data from the request
$student_id = $_POST['student_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$gender = $_POST['gender'];
$user_type = $_POST['user_type'];
$username = $_POST['username'];
$password = $_POST['password'];

// Perform the update query
$sql = "UPDATE students SET first_name='$first_name', last_name='$last_name', date_of_birth='$date_of_birth', address='$address', phone_number='$phone_number', gender='$gender', user_type='$user_type', username='$username', password='$password' WHERE student_id='$student_id'";

$functions = new myFunctions();
$functions->run_query($sql);

// Close the database connection
header("Location: ../../index.php?pg=students");
exit;



?>
