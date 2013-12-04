<?php
include_once('config.php');

if (empty($_POST['user']) || empty($_POST['password'])) {
Header("Location: index.php");
 }
else { 
	$mysqluser = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `username`='".addslashes($_POST['user'])."' LIMIT 1;"));
	if($mysqluser['password']==$_POST['password']){
       setcookie('user_login', addslashes($_POST['user']), date(time() + 1800), "/");
      Header("Location: index.php");
	}
 else {
 Header("Location: index.php");
 }
  }
?>