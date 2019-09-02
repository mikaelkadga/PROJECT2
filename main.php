<?php
session_start();
if (ISSET($_SESSION['username']))
{
print $_SESSION['username'];
print "<br><a href=logout.php>logout</a>";
}
else
header("location: login.php");
?>