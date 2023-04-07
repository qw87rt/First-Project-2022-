<link rel="stylesheet" type="text/css" href="css/slider.css">
<script type="text/javascript" src="script/slider.js"></script>

<div id="slider">
  <div class="slide">
    <img src="img/sports6.jpg" alt="Slide 1">
  </div>
  <div class="slide">
    <img src="img/food3.jpeg" alt="Slide 2">
  </div>
  <div class="slide">
    <img src="img/sports1.jpg" alt="Slide 3">
  </div>
  <div class="slide">
    <img src="img/food4.jpeg" alt="Slide 4">
  </div>
  <div class="slide">
    <img src="img/sports2.jpg" alt="Slide 5">
  </div>
  <div class="slide">
    <img src="img/sports4.jfif" alt="Slide 6">
  </div>
</div>
<div style="
position: absolute;
top: 0;
opacity: .6;
z-index: -1;
">
<img style="width: 100%;" src="img/bg_lines.gif">
</div>

<!--//user////***-->
<?php 
if (isset($_SESSION['logged_in'])) {
  include 'codes/frontEND/user_acc.php';
}
?>