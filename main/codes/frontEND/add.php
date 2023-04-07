<link rel="stylesheet" type="text/css" href="css/addStyles.css">
<form action="codes/functions/add_student.php" method="post">
  <div>
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id">
  </div>
  <div>
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name">
  </div>
  <div>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name">
  </div>
  <div>
    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" id="date_of_birth" name="date_of_birth">
  </div>
  <div>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address">
  </div>
  <div>
    <label for="phone_number">Phone Number:</label>
    <input type="text" id="phone_number" name="phone_number">
  </div>
  <div>
    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
  <div>

    <label for="user_type">User Type:</label>
    <select name="user_type" id="user_type">
      <option value="admin">Admin</option>
      <option value="user">User</option>
    </select>
  </div>
  <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
  </div>
  <input type="submit" value="Register">
</form>
