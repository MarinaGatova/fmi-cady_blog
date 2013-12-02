</head>
<body>
<div id="background">
<div id="page">
<div id="header">  
  <div id="logo"> <a href="index.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a> </div>
  <div id="form">
    <form name="loginform" id="loginform" action="index.php" method="post">
      <label>Username:<br>
        <input name="user" id="user" value="" size="20" tabindex="1" type="text">
      </label>
      <br />
      <label>Password:<br>
        <input name="password" id="pass" value="" size="20" tabindex="2" type="password">
      </label>
      <br />
      <input id="submit" type="submit" name="submit" value="Login" style="font-family: Arial">
      <input id="reg" type="button" value="Register" onClick="location.href='register.php'" style="font-family: Arial">
    </form>
  </div>
  <div id="navigation">
    <ul>
      <li class="<?php if($i=="index") { echo ' active'; } ?>"> <a href="index.php">Home</a> </li>
      <li class="<?php if($i=="about") { echo ' active'; } ?>"> <a href="about.php">About</a> </li>
      <li class="<?php if($i=="shops") { echo ' active'; } ?>"> <a href="shops.php">Shops</a> </li>
      <li class="<?php if($i=="galery") { echo ' active'; } ?>"> <a href="galery.php">Galery</a> </li>
      <li class="<?php if($i=="muffin") { echo ' active'; } ?>"> <a href="muffins.php">Muffin</a> </li>
      <li class="<?php if($i=="news") { echo ' active'; } ?>"> <a href="news.php">News</a> </li>
      <li class="<?php if($i=="contact") { echo ' active'; } ?>"> <a href="contact.php">Contact</a> </li>
    </ul>
  </div>
</div>
