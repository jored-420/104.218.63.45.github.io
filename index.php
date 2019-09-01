<?php
$ip = $_SERVER['REMOTE_ADDR']; //sets the visitors IP ($_SERVER['REMOTE_ADDR']) to the variable "$ip"
$handle = fopen('ipaddresses.txt', 'a+'); //opens ipaddresses.txt for reading and writing (MUST HAVE FILE NAMED ipaddresses.txt)
fwrite($handle, "{$ip}\n");  //writes the IP address to ipaddresses.txt
fclose($handle); //closes ipaddresses.txt for reading and writing
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta char-set="utf-8">
    <title>Page title</title>
  </head>
  <body>
    <?php if (isset($something)){ echo '<span>'.$something.'</span>'}?>;
    <form action="" method="POST">
      <input type="text" value="default value, you can edit it" name="myfield">
      <input type="submit" value = "post">
    </form>
  </body>
</html>
