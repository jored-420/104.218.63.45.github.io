<?php
$ip = $_SERVER['REMOTE_ADDR']; //sets the visitors IP ($_SERVER['REMOTE_ADDR']) to the variable "$ip"
$handle = fopen('ipaddresses.txt', 'a+'); //opens ipaddresses.txt for reading and writing (MUST HAVE FILE NAMED ipaddresses.txt)
fwrite($handle, "{$ip}\n");  //writes the IP address to ipaddresses.txt
fclose($handle); //closes ipaddresses.txt for reading and writing
?>
