<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://play.streamkit.tv/content/channel/us_jesus_market/live/us_jesus_market.player.json?jsoncallback=?');
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>