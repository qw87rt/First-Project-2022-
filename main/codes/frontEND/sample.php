<link rel="stylesheet" type="text/css" href="css/CRUDs.css">

<div class="firstTable">
    <?php 
    include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
    global $conn;

    echo '<h2 class="Q">Bachelor of Science in Information Technology</h2>';
    echo '<table class="table_sql">
    <tr>
    <th>Code</th>
    <th>Descriptive Title</th>
    <th>Units</th>
    </tr>';

    $sql = "SELECT * FROM curriculum";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Invalid query: ' . mysqli_error($conn));
    }

    // Display data in table
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['subject']."</td>";
        echo "<td>".$row['subject_desc']."</td>";
        echo "<td>".$row['units']."</td>";
        echo "</tr>";
    }
    
    echo '</table>';
    ?>
</div>
<div style="padding-bottom: 25%; background-color: #727273;"></div>
