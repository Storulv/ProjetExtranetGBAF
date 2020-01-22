<?php 
session_unset();
setcookie('PHPSESSID', '', 1);
header('Location: signinpage.php')
?>