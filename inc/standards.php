<?php
$i=basename($_SERVER['SCRIPT_FILENAME'],".php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?php echo $title[$i]; ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/form-styles.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/domain.js"></script>
<script type="text/javascript" src="js/formtools.js"></script>


<?php if($i=="kontakt"||$i=="beratung") { ?>
<link href="css/form-styles.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="js/form_validation.js" type="text/javascript"></script>
<?php } ?>