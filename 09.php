<?php
//php生成json值类型
//可通过json_encode($value) 将数组和对象转换为 json格式的数据{'':'','':""};
$ass =array("a"=>'red',"b"=>'black',"c"=>'red');
$json = json_encode($ass);
var_dump($json);
//反编码 json信息 解码的为 关联数组时返回的是一个对象   如果需要的是一个数组需要值加一个参数true 转为 数组 json_decode($json,true)
//反编码要求为 外部为单引号  内部为双引号  '{"a"=>"asd","b"=>"wqe"}'
$s ='{"a":"asd","b":"wqe"}';
$strarr = json_decode($json, true);
$strobj = json_decode($json);
$str = json_decode($s,true);
var_dump($str);
var_dump($strarr);
var_dump($strobj);