<?php
session_start();
$_SESSION = null;
session_destroy();
print_r($_SESSION);
echo "<center>";
echo "you have been logot";
header("Location:index.php");
?>