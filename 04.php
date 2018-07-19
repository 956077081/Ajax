<?php
$file = fopen('./text.txt', 'a');
$string = implode('-', $_GET);
$string.= implode('_', $_POST);
fwrite($file,$string );
fclose($file);
$id = urldecode($_GET['id']);  //对于前端进行编码的内容进行反编码
var_dump($id);
var_dump($_POST);
