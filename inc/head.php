</head>
<?php include_once('config.php'); ?>
<body id="<?php echo $i; ?>">
<div id="background">
<div id="page">
<div id="header">  
  <div id="logo"> <a href="index.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a> </div>
 
  <div id="form">

<?php if(!isset($_COOKIE['user_login']) || empty($_COOKIE['user_login'])) { ; ?> 
  
    <form name="loginform" id="loginform" action="login.php" method="post">
<fieldset>
		<label for="User">Username</label>
        <input name="user" id="user" required  placeholder="Username" size="20" tabindex="1" type="text" data-msg-required="Моля въвдете потребителско име">
        <label for="Password">Password</label>
        <input name="password" id="pass" required  placeholder="Password" size="20" tabindex="2" type="password" data-msg-required="Моля въвдете парола">
<br>
     <a href="register.php" style="border:none; text-decoration:none"><input id="reg" type="button" value="Register" style="font-family: Arial"></a>
      <input id="submit" type="submit" name="submit" value="Login" style="font-family: Arial">

 </fieldset>
 </form>
    
 <?php } else { ?>
    
 Welcome <?php
 $name = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `username`='".($_COOKIE['user_login'])."'"));
 echo $name['name']; ?>
 <br />
 <input id="logout" type="button" value="Logout" onClick="location.href='logout.php'" style="font-family: Arial">

 <?php } ?>   
 
 
  </div>
  <div id="navigation">
    <ul>
      <li class="<?php if($i=="index") { echo ' active'; } ?>"> <a href="index.php">Home</a> </li>
      <li class="<?php if($i=="about") { echo ' active'; } ?>"> <a href="about.php">About</a> </li>
      <li class="<?php if($i=="shops") { echo ' active'; } ?>"> <a href="shops.php">Shops</a> </li>
      <li class="<?php if($i=="galery") { echo ' active'; } ?>"> <a href="galery.php">Galery</a> </li>
      <li class="<?php if($i=="muffins") { echo ' active'; } ?>"> <a href="muffins.php">Muffin</a> </li>
      <li class="<?php if($i=="news") { echo ' active'; } ?>"> <a href="news.php">News</a> </li>
      <li class="<?php if($i=="contact") { echo ' active'; } ?>"> <a href="contact.php">Contact</a> </li>
    </ul>
  </div>
</div>
<div id="slideshow">
<img src="images/sea-sound.jpg" alt="Img" width="100%">
</div>
