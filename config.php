<?php
$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
$config = array();
$config['host'] = $mysql_config["hostname"]; 		
$config['user'] = $mysql_config["username"]; 		
$config['pass'] = $mysql_config["password"];	 		
$config['db'] = $mysql_config["name"]; 		

	

	if(!mysql_connect($config['host'],$config['user'],$config['pass'])){
		die("<h1>ERROR:</h1> ".mysql_error());
		exit;
	}
 
 ?>
