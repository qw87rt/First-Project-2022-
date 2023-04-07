<?php
// Start the session
$error ='';
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['error_msg'])){
  $error = $_SESSION['error_msg'];
}
session_destroy();
?>
<link rel="stylesheet" type="text/css" href="css/logStyles.css">

<div class="body">
  <header class="header">
    <h1>Login</h1>
  </header>
  <main>
    <form action="codes/authentication/checklogin.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input id="username" required="required" placeholder="Username" type="text" name="username" />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input id="password" required="required" placeholder="Password" type="password" name="password" />
      </div>
      <div class="form-group">
        <label for="captcha">CAPTCHA:</label>
        <img class="captcha" src="codes/authentication/captcha.php" /><br>
        <input id="captcha" class="form-control" type="text" name="captcha" required="required"/>
      </div>
      <button class="submit-btn" type="submit">Submit</button>
    </form>
    <div class="error"><?php echo $error; ?></div>
  </main>
  <footer>
    <a class="submit-btn" href="?pg=sign_up">Sign Up</a>
  </footer>

</div>
<br><br>