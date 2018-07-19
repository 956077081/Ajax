<?php
//不同的浏览器识别的方式不同 因此需要写三个禁止catch
header('Cache-Control:no-cache');
header('Pragma:no-cache');
header('Expires:-1');

$file = fopen('text.txt', 'a');
fwrite($file, "java");
fclose($file);

