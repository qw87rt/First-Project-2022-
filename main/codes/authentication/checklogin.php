<?php
session_start();
$error = '';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['captcha'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $captcha = $_POST['captcha'];

    if ($username == '' || $password == '') {
        $error = 'Please fill out all the required fields';
    } else {
        include $_SERVER['DOCUMENT_ROOT']."/new/main/codes/functions/db_conn.php";
        global $conn;
        // retrieve the user information from the database
        $sql = "SELECT * FROM students WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        $count = mysqli_num_rows($result);

        // if the entered details match a record in the database
        if ($captcha != $_SESSION['captcha']){
            $_SESSION['error_msg'] = 'Invalid CAPTCHA.';
            header("location: ../../index.php?pg=login");  
        }
        else if ($count == 1) {
            // if authentication successful, redirect the user to the appropriate page
            if ($row["user_type"] == 'admin') {
             $_SESSION['logged_in'] = 'yes';
             header("location: ../../index.php?username=$row[first_name]");

         } else if ($row["user_type"] == 'student') {
             $_SESSION['logged_in'] = 'yes';
             header("location: ../../lndex.php?username=$row[first_name]");
         }
         
     } else {
        $_SESSION['error_msg'] = 'Invalid Credentials.';
        header("location: ../../index.php?pg=login");  
    }

        // close the database connection
    mysqli_close($conn);
}
}
?>