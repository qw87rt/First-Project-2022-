<?php
echo '<form class="filter" method="post">';
echo '<label for="semester">Select Semester:</label>';
echo '<select id="semester" name="semester">
      <option value="1"'.($semester == "1" ? " selected" : "").'>1st Semester</option>
      <option value="2"'.($semester == "2" ? " selected" : "").'>2nd Semester</option>
      </select>';
echo '<label for="year">Select Year:</label>';
echo '<select id="year" name="year">
      <option value="1"'.($year == "1" ? " selected" : "").'>1st Year</option>
      <option value="2"'.($year == "2" ? " selected" : "").'>2nd Year</option>
      <option value="3"'.($year == "3" ? " selected" : "").'>3rd Year</option>
      <option value="4"'.($year == "4" ? " selected" : "").'>4th Year</option>
      </select>';
echo '<button type="submit">Filter</button>';
echo '</form>';

?>