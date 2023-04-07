<?php
$conn = new mysqli("localhost", "root","","enrollment");

if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
 ?>