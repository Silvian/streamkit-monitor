<?php
$config_array = parse_ini_file("config.ini");

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $config_array["URL"]);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
