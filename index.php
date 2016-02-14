<?php 
$user_ip =getenv('REMOTE_ADDR');
$geo=unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city=$geo["geoplugin_city"];
$city=$geo["geoplugin_city"];
$city=$geo["geoplugin_city"];
echo "City: ".$city."<br>";
echo "City: ".$city."<br>";
echo "City: ".$city."<br>";
 ?>