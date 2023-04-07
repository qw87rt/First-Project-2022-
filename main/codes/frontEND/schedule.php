<link rel="stylesheet" type="text/css" href="css/CRUDs.css">
<link rel="stylesheet" type="text/css" href="css/filter.css">
<?php 
include_once('codes/functions/classFunc.php');
include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
global $conn;

 $semester = isset($_POST['semester']) ? $_POST['semester'] : "";
$year = isset($_POST['year']) ? $_POST['year'] : "";
$course = isset($_POST['course']) ? $_POST['course'] : "";

	$courseCodes = ['BSCS', 'BSIT', 'BSBA', 'BBA', 'BA', 'BEd', 'BE', 'BCom', 'BFA', 'BArch', 'BPharm', 'BPT', 'BDS', 'LLB', 'BSc', 'B.Tech', 'BHM', 'BMM', 'BDes', 'BSW', 'BAMS', 'BUMS', 'BN', 'BMT', 'BMLT', 'B.Pharm', 'BScN', 'BSE', 'BEM', 'BVA', 'BFT', 'B.Plan'];

include "filter_sched.php";


echo '<h2 class="Q" class="centernt">Schedule</h2>';
echo '<table class="table_sql">
<tr>
<th>Code</th>
<th>Subject</th>
<th>In</th>
<th>Out</th>
<th>Day</th>
<th>Units</th>
<th>Room</th>
<th>Section</th>
<th>Course</th>
</tr>';

$functions = new myFunctions($conn);
if (!empty($semester) && !empty($year)) {
    $functions->schedule_query_filter($course,$semester, $year);
} else {
    $functions->schedule_query();
}


echo '</table>';
?>
