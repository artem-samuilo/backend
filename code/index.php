<?php
$message = $_POST["message"];
echo $message;
$f = fopen('/code/message.txt', 'w');
fwrite ($f, $message);
fclose($f);
shell_exec("aws s3 mv /code/message.txt s3://php-project/backend")
?>
