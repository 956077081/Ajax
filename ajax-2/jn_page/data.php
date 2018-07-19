<?php
header("content-type:text/html;charset=utf-8");
//制作传统分页效果,连接数据库、获得数据、分页显示
$link = mysql_connect('localhost','root','123456');
mysql_select_db('shop0609', $link);
mysql_query('set names utf8');

//实现数据分页
//① 引入分页类
include("./page.class.php");
//② 获得总记录条数
$sql = "select * from sw_goods";
$qry = mysql_query($sql);
$total = mysql_num_rows($qry);
$per = 7;
//③ 实例化分页类对象
$page_obj = new Page($total, $per);
//④ 制作sql语句，获得每页信息
//$page_obj->limit: 分页类会根据当前的页码把"limit 偏移量,长度" 给制作好
$sql3 = "select goods_name n,goods_price p,goods_number u,goods_weight w from sw_goods ".$page_obj->limit;
$qry3 = mysql_query($sql3);
//⑤ 获得页码列表
$pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
$p = isset($_GET['page'])?$_GET['page']:1;
$num = ($p-1)*$per;
$info = array();
while($rst3 = mysql_fetch_assoc($qry3)){
    //$rst3代表每条记录的一维数组信息
    //要把全部的$rst3整合到一起，变为一个二维数组
    $rst3['x'] = ++$num;//设置序号
    $info[] = $rst3;
}
$info[] = $pagelist;

//需要把全部的信息整合到一起，
//json_encode()只能使用一次
echo json_encode($info);//[jn,jn,jn,jn,jn,jn,jn,页面列表]
