<link rel="stylesheet" type="text/css" href="../../css/editStyles.css">
<?php
include_once('../functions/classFunc.php');
$id_var = $_GET['student_id'];
include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
global $conn;

  // fetch user data
$sql = "SELECT * FROM students WHERE student_id = '$id_var'";
$functions = new myFunctions($conn);
$row = $functions->run_query($sql);
?>

<form action="../functions/update.php" method="post">
    <input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
    <div>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $row['first_name']; ?>">
    </div>
    <div>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $row['last_name']; ?>">
    </div>
    <div>
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>">
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">
    </div>
    <div>
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" value="<?php echo $row['phone_number']; ?>">
    </div>
    <div>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value="<?php echo $row['gender']; ?>">
    </div>
    <div>
        <label for="user_type">User Type:</label>
        <input type="text" id="user_type" name="user_type" value="<?php echo $row['user_type']; ?>">
    </div>
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>" required>
    </div>
    <input type="submit" value="Update">
    <input type="submit" value="Cancel">
</form>
