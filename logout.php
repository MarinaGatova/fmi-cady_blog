<?php
if(!isset($_COOKIE['user_login']) || empty($_COOKIE['user_login'])){Header("Location: index.php");exit;}
setcookie('user_login', NULL, time(), "/");
Header("Location: index.php");
?>