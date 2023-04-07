<link rel="stylesheet" type="text/css" href="css/CRUDs.css">
<?php 
include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
     global $conn;
      {
  echo '<h2 class="centernt">Subject Information</h2>';
  echo '<table class="table_sql">
  <tr>
  <th>Code</th>
  <th>Subject</th>
  <th>Units</th>
  </tr>';

  $sql = "SELECT * FROM subject";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row["subject_code"] . '</td>';
      echo '<td>' . $row["subject_name"] . '</td>';
      echo '<td>' . $row["units"] . '</td>';
      echo '</tr>';
    }
  } else {
    echo 'no record(s) found.';
  }
  echo '</table>';
}
?>