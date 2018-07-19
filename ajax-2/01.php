<?php
//在php里边生成json信息
//json_encode(数组/对象);

//索引数组
$color = array('red','blue','green');
echo json_encode($color),"<br />"; //字符串  ["red","blue","green"]

//关联数组
$city = array('hebei'=>'shijiazhuang','shandong'=>'jinan','henan'=>'zhengzhou');
echo json_encode($city),"<br />";//{"hebei":"shijiazhuang","shandong":"jinan","henan":"zhengzhou"}

//索引关联数组
$city1 = array('hebei'=>'shijiazhuang','shandong'=>'jinan','henan'=>'zhengzhou','shanghai');
echo json_encode($city1),"<br />";//{"hebei":"shijiazhuang","shandong":"jinan","henan":"zhengzhou","0":"shanghai"}

//多维数组，看当前维数的类型:
//关联/索引关联维数----->json对象
//索引------------------>js数组

//对象生成json信息
class Person{
    public $name = "tom";
    public $age = 23;
    public function run(){
        echo "is running";
    }
}
$per = new Person();
//生成json信息只考虑“属性”
echo json_encode($per);//{"name":"tom","age":23}