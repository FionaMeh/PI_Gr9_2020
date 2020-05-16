<?php
session_start();
echo "Welcome:<br>".$_SESSION['email'];
echo "<a href='logout.php'><br> LogOut</a>";
?>
