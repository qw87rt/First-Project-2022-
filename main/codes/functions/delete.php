<?php 
include_once('classFunc.php');
if (isset($_GET["student_id"])){
	$student_id = $_GET["student_id"];

	include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
	global $conn;

	$sql = "DELETE FROM students WHERE student_id='$student_id'";
	$functions = new myFunctions();
	$row = $functions->run_query($sql);
	
	header("Location: ../../index.php?pg=students");
	exit;
}
?>
