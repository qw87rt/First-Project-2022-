<?php	
session_start();
?>
<!DOCTYPE html>
<html lang="en-PH">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css" >
	<title>Omiping</title>
</head>
<body>
	<!-- header-->
	<header>
		<?php include 'codes/frontEND/header.php';?>
	</header>
	<!--Menu -->
	<nav id='menu'>
		<input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
		<ul>
			<li><a href='?pg=home'>Home</a></li>
			<li><a class='dropdown-arrow'>Favorites</a>
				<ul class='sub-menus'>
					<li><a href='?pg=food'>Food</a></li>
					<li><a href='?pg=sports'>Sports</a></li>
				</ul>
			</li>
			<li><a class='dropdown-arrow'>Enrollment</a>
				<ul class='sub-menus'>
					<li><a href='?pg=curriculum'>Curriculum</a></li>
					<!-- <li><a href='?pg=subjects'>Subjects</a></li> -->
					<li><a href='?pg=schedule'>Schedule</a></li>
				</ul>
			</li>
			<li><a href='?pg=about'>About</a></li>
			<li>
				<?php
				if(!isset($_SESSION['logged_in']))
				{
					echo '<a id="sample" href="?pg=login">Login</a><br/>';
				} else {
					echo '<a href="?pg=logout">Logout</a><br/>';
				}
			?></li>
		</ul>
	</nav>	
	<div>
		<?php
		if(!isset($_GET['pg'])){
			$pg = "home";
		} else {
			$pg = $_GET['pg'];
		}
		if (!isset($_SESSION['logged_in'])) {
			switch ($pg) {
				case "home":
				include"codes/frontEND/slider.php";
				break;
				case "about":
				include"codes/frontEND/about.php";
				break;
				case "sports":
				include"codes/frontEND/sports.php";
				break;
				case "food":
				include"codes/frontEND/food.php";
				break;
				case "sign_up":
				include "codes/frontEND/add.php";
				break;
				
				default:
				include"codes/authentication/login.php";
				break;
			}
		} else {
			switch($pg){
				
				case "home":
				include"codes/frontEND/slider.php";
				break;
				case 'login':
				include 'codes/authentication/login.php';
				break;
				case 'logout':
				include 'codes/authentication/logout.php';
				break;
				case "sports":
				include"codes/frontEND/sports.php";
				break;
				case "food":
				include"codes/frontEND/food.php";
				break;
				case "curriculum":
				include"codes/frontEND/course_list.php";
				break;
				case "schedule":
				include"codes/frontEND/schedule.php";
				break;
				case "subjects":
				include"codes/frontEND/subjects.php";
				break;
				case "about":
				include"codes/frontEND/about.php";
				break;
				case "BSCS":
				include"codes/frontEND/BSCS.php";
				break;
				case "BSIT":
				include"codes/frontEND/BSIT.php";
				break;
				case "BSBA":
				include"codes/frontEND/BSBA.php";
				break;

				default:
				include "codes/authentication/login.php";
			}	
		}
		?>
		<div></div>
		<div class="footer">
			<?php include 'codes/frontEND/footer.php';?>
		</div>
	</body>