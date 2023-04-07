<link rel="stylesheet" type="text/css" href="css/CRUDs.css">
<link rel="stylesheet" type="text/css" href="css/filter.css">
<div class="firstTable">
    <?php 
    include_once('codes/functions/classFunc.php');
    include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
    global $conn;
    $semester = isset($_POST['semester']) ? $_POST['semester'] : "1";
$year = isset($_POST['year']) ? $_POST['year'] : "1";
include "filter_curr.php";

echo '<h2 class="Q">Bachelor of Science in Information Technology</h2>';
echo '<table class="table_sql">
<tr>
<th>Code</th>
<th>Descriptive Title</th>
<th>Units</th>
</tr>';

$functions = new myFunctions($conn);
$functions->BSIT_query_filter($semester, $year);


echo '</table>';
?>
</div>
<div style="padding-bottom: 25%; background-color: #727273;"></div>