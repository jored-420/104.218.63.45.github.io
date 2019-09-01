<?php
print ($_SERVER['REMOTE_ADDR']; //prints the IP on the page (Obviously)
?>
<?php
$ip = $_SERVER['REMOTE_ADDR']; //sets the visitors IP ($_SERVER['REMOTE_ADDR']) to the variable "$ip"
$handle = fopen('ipaddresses.txt', 'a+'); //opens ipaddresses.txt for reading and writing (MUST HAVE FILE NAMED ipaddresses.txt)
fwrite($handle, "{$ip}\n");  //writes the IP address to ipaddresses.txt
fclose($handle); //closes ipaddresses.txt for reading and writing
?>
<?php
<html>
<?php
$file = "ipaddresses.txt"; //turns the text file into a variable
$f=fopen($file, 'a+'); //opens up the text file for reading and writing
fwrite($f,$_SERVER['REMOTE_ADDR']."\n"); //writes the IP address to ipaddresses.txt
fclose($f); //closes ipaddresses.txt for reading and writing
?>
<h1>File Not Found</h1>
</body>
</html> 
