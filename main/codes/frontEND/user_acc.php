<?php 

if (isset($_GET['username'])) {
 $_SESSION['username'] = $_GET['username'];
}
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
?>

<link rel="stylesheet" type="text/css" href="css/user_head.css">
<div style="text-align: center; ">
  <h5 id="text" class="userHead">Hi,  <?php echo $username; ?></h5> </br>

  <img class="userIMG" src="img/admin.png"></div>

  <script>
  // Set initial opacity to 1 (fully visible)
    var opacity = 1;

  // Define function to gradually reduce opacity
    function fadeOut() {
      if (opacity > 0) {
      opacity -= 0.2;  // reduce opacity by 0.1 (10%) each time
      document.getElementById("text").style.opacity = opacity;
      setTimeout(fadeOut, 200);  // call the function again after 1 second
    }
  }

  // Call the function after 1 seconds (1000 milliseconds)
  setTimeout(fadeOut, 2000);
</script>