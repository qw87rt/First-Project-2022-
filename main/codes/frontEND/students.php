<link rel="stylesheet" type="text/css" href="css/CRUDs.css">
<link rel="stylesheet" type="text/css" href="css/buttons.css">
<div style="background-color: #727273; padding: 15px; position: absolute; top: 6.7%; z-index: -1; width: 1350px;"></div>
<div id="targetElement2" style="display:none;">
  <br><br>
  <?php include 'codes/frontEND/add.php';?>
</div>

<?php

include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
global $conn;
{

  echo '<h2 class="Q"class="centernt">Lists</h2>';
  echo "<table class='table_sql'>";
  echo "<tr>
  <th>ID</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Date of Birth</th>
  <th>Address</th>
  <th>Phone Number</th>
  <th>Gender</th>
  <th>User Type</th>
  <th>Username</th>
  <th>Password</th>
  <th><button id='add' class='add-button'>+</button></th>

  </tr>";
  echo '<script>
  const addUserButton = document.getElementById("add");
  const targetElement2 = document.getElementById("targetElement2");

  let users = [];
  add.addEventListener("click", function() {
    if (targetElement2.style.display === "block") {
      targetElement2.style.display = "none";
      add.innerHTML = "Add";
      } else {
        targetElement2.style.display = "block";
        add.innerHTML = "Cancel";
      }
      });
      </script>';
		// display multiple records

      $sql = "SELECT * FROM students";
      $result = $conn->query($sql);
      if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<tr>";
          echo "<td>" . $row["student_id"] . "</td>";
          echo "<td>" . $row["first_name"] . "</td>";
          echo "<td>" . $row["last_name"] . "</td>";
          echo "<td>" . $row["date_of_birth"] . "</td>";
          echo "<td>" . $row["address"] . "</td>";
          echo "<td>" . $row["phone_number"] . "</td>";
          echo "<td>" . $row["gender"] . "</td>";
          echo "<td>" . $row["user_type"] . "</td>";
          echo "<td>" . $row["username"] . "</td>";
          echo "<td>" . $row["password"] . "</td>";
          echo "<td> <a class='add-button' href='codes/frontEND/edit.php?student_id=" . $row["student_id"] . "'>Edit</a> <a class='butON' href='codes/functions/delete.php?student_id=" . $row["student_id"] . "'>Del</a></td>";


          echo "</tr>";


        }
      } else {
       echo "no record(s) found.";
     }	

     echo "</table>";
   }
   ?>
