<?php include_once('config.php'); ?>
<?php include_once('inc/standards.php'); ?>
<?php include_once('inc/head.php'); ?>

<?php
if(!empty($_POST['user']) && !empty($_POST['name']) && !empty($_POST['password'])){
mysql_query("INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES ('', '".addslashes($_POST['name'])."', '".addslashes($_POST['user'])."', '".addslashes($_POST['password'])."')");
Header("Location: index.php");
}
?>

<div id="contents" class="reg">

 <form name="register" id="register" action="register.php" method="post">
 <label>Name:<br>
        <input name="name" id="name" required value="" size="20" tabindex="1" type="text" data-msg-required="Моля въвдете име">
      </label> <br />
      <label>Username:<br>
        <input name="user" id="user" required value="" size="20" tabindex="1" type="text" data-msg-required="Моля въвдете потребителско име">
      </label>
      <br />
      <label>Password:<br>
        <input name="password" id="pass" required value="" size="20" tabindex="2" type="password"  data-msg-required="Моля въвдете парола">
      </label>
      <br />
      <input id="submit" type="submit" name="Register" value="Register" style="font-family: Arial">
   </form>

 </div>  
   
<?php include_once('inc/footer.php'); ?>
