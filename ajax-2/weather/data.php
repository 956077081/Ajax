<?php
header("content-type:text/html;charset=utf-8");
//php代理获得天气信息
//跨域请求

$url = "http://www.weather.com.cn/adat/sk/101010100.html";
//file_get_contents(file/url); //① 打开文件  ② 想其他地址请求
$cont = file_get_contents($url);
echo $cont;
