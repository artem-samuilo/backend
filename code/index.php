<?php
$message = $_POST["message"];
echo $message;
$f = fopen('/code/message.txt', 'w');
fwrite ($f, $message);
fclose($f);
?>
