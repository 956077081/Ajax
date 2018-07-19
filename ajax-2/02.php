<?php

//解析、反编码json信息

$city = array('hebei'=>'shijiazhuang','shandong'=>'jinan','henan'=>'zhengzhou');
$jn_city = json_encode($city);

//反编码
$fan_city = json_decode($jn_city,false);
var_dump($fan_city);//object(stdClass)#1 (3) { ["hebei"]=> string(12) "shijiazhuang" ["shandong"]=> string(5) "jinan" ["henan"]=> string(9) "zhengzhou" } 

$fan_city1 = json_decode($jn_city,true);
var_dump($fan_city1);//array(3) { ["hebei"]=> string(12) "shijiazhuang" ["shandong"]=> string(5) "jinan" ["henan"]=> string(9) "zhengzhou" } 

//给一个自定义的"json字符串"反编码操作
//反编码的json字符串对定义的“单双引号”有要求
//$jn_str = "{name:'kitty',color:'gray',age:5}";  //NULL
$jn_str = "{'name':'kitty','color':'gray','age':'5'}";//NULL

//array(3) { ["name"]=> string(5) "kitty" ["color"]=> string(4) "gray" ["age"]=> string(1) "5" } 
$jn_str = '{"name":"kitty","color":"gray","age":"5"}'; 

$fan_str = json_decode($jn_str,true);//
var_dump($fan_str);
