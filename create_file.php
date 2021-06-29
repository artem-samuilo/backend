<?php
$message = $_POST['message'];
echo $message;
$f = fopen('/var/www/html/message.txt', 'w');
fwrite ($f, $message);
fclose($f);
?>