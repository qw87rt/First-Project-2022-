<?php

class myFunctions{
	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function add_query_func($student_id, $first_name, $last_name, $date_of_birth, $address, $phone_number, $gender, $user_type, $username, $password) {
		global $conn;
		$sql = "INSERT INTO students (student_id, first_name, last_name, date_of_birth, address, phone_number, gender, user_type, username, password)
		VALUES ('$student_id', '$first_name', '$last_name', '$date_of_birth', '$address', '$phone_number', '$gender', '$user_type', '$username', '$password')";
		$this->run_query($sql);
	}

	public function run_query($sql){
		global $conn;
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	

	public function schedule_query_filter($course = '', $semester = '', $year = ''){
    // Retrieve data from database
        $sql = "SELECT s.*, c.subject_desc, c.units FROM schedule s JOIN curriculum c ON s.subject_code = c.subject_code";
        if (!empty($course) && $course !== 'all') {
            $sql .= " WHERE course = ".$course;
        }
        if (!empty($semester) && $semester !== 'all') {
            $sql .= " WHERE Semester = ".$semester;
        }

        if (!empty($year) && $year !== 'all') {
            if (strpos($sql, 'WHERE') !== false) {
                $sql .= " AND Year = ".$year;
            } else {
                $sql .= " WHERE Year = ".$year;
            }
        }

        $result = mysqli_query($this->conn, $sql);

    // Display data in table
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['schedule_id']."</td>";
            echo "<td>".$row['subject_desc']."</td>";
            echo "<td>".$row['start_time']."</td>";
            echo "<td>".$row['end_time']."</td>";
            echo "<td>".$row['day']."</td>";
            echo "<td>".$row['units']."</td>";
            echo "<td>".$row['room']."</td>";
            echo "<td>".$row['section']."</td>";
            echo "<td>".$row['course_code']."</td>";
            echo "</tr>";
        }
    }

    public function schedule_query(){
    // Retrieve data from database
        $sql = "SELECT s.*, c.subject_desc, c.units FROM schedule s JOIN curriculum c ON s.subject_code = c.subject_code";

        

        $result = mysqli_query($this->conn, $sql);

    // Display data in table
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['schedule_id']."</td>";
            echo "<td>".$row['subject_desc']."</td>";
            echo "<td>".$row['start_time']."</td>";
            echo "<td>".$row['end_time']."</td>";
            echo "<td>".$row['day']."</td>";
            echo "<td>".$row['units']."</td>";
            echo "<td>".$row['room']."</td>";
            echo "<td>".$row['section']."</td>";
            echo "<td>".$row['course_code']."</td>";
            echo "</tr>";
        }
    }



    public function BSBA_query() {
    // Retrieve data from database
      $sql = "SELECT * FROM curriculum WHERE subject='PMF5' OR subject='PMF6' OR subject='PMF8' OR subject='PMF9' OR subject='PMF10' OR subject='PMF11' OR subject='PMF12' OR subject='PMF13' OR subject='MATH53' OR subject='MATH17' OR subject='ENG10' OR subject='NSTP1'";
      $result = mysqli_query($this->conn, $sql);

    // Display data in table
      while($row = mysqli_fetch_assoc($result)) {
         echo "<tr>";
         echo "<td>".$row['subject']."</td>";
         echo "<td>".$row['subject_desc']."</td>";
         echo "<td>".$row['units']."</td>";
         echo "</tr>";
     }
 }

 public function BSCS_query_filter($semester, $year) {
    // Retrieve data from database
    $sql = "SELECT * FROM curriculum WHERE subject_code IN (SELECT subject_code FROM schedule WHERE course_code = 'BSCS')";

    if (!empty($semester)) {
        $sql .= " AND Semester = ".$semester;
    }

    if (!empty($year)) {
        $sql .= " AND Year = ".$year;
    }

    $result = mysqli_query($this->conn, $sql);

    // Display data in table
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['subject_code']."</td>";
        echo "<td>".$row['subject_desc']."</td>";
        echo "<td>".$row['units']."</td>";
        echo "</tr>";
    }
}

public function BSIT_query_filter($semester, $year) {
    // Retrieve data from database
    $sql = "SELECT * FROM curriculum WHERE subject_code IN (SELECT subject_code FROM schedule WHERE course_code = 'BSIT')";

    if (!empty($semester)) {
        $sql .= " AND Semester = ".$semester;
    }

    if (!empty($year)) {
        $sql .= " AND Year = ".$year;
    }

    $result = mysqli_query($this->conn, $sql);

    // Display data in table
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['subject_code']."</td>";
        echo "<td>".$row['subject_desc']."</td>";
        echo "<td>".$row['units']."</td>";
        echo "</tr>";
    }
}

public function BSBA_query_filter($semester, $year) {
    // Retrieve data from database
    $sql = "SELECT * FROM curriculum WHERE subject_code IN (SELECT subject_code FROM schedule WHERE course_code = 'BSBA')";

    if (!empty($semester)) {
        $sql .= " AND Semester = ".$semester;
    }

    if (!empty($year)) {
        $sql .= " AND Year = ".$year;
    }

    $result = mysqli_query($this->conn, $sql);

    // Display data in table
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['subject_code']."</td>";
        echo "<td>".$row['subject_desc']."</td>";
        echo "<td>".$row['units']."</td>";
        echo "</tr>";
    }
}


}
?>
