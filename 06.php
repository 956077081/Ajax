<?php
require_once './page.class.php';
/* Connect to a MySQL server  连接数据库服务器 */
$link = mysqli_connect(
    'localhost:3306',  /* The host to connect to 连接MySQL地址 */
    'root',      /* The user to connect as 连接MySQL用户名 */
    '123456'  /* The password to use 连接MySQL密码 */
    );    /* The default database to query 连接数据库名称*/
    mysqli_query($link, 'set names utf8');
    mysqli_select_db($link, 'shop');
if (!$link) {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
}else
    echo '数据库连接上了！';
$query = 'select * from category';
$resource = mysqli_query($link, $query);
$num = mysqli_num_rows($resource);
$per = 2; //每页显示的资源条数
$page_obj = new Page($num,$per);//类参数为每页传递的参数总个数和  每页显示条数
echo <<<eof
<style tyle='text/css'>
table{ width:700 ; margin:auto ;border:1px  solid black; border-collapse:collapse}
td{border:1px solid black}
</style>
<table>
<tr><td>ID</td> <td>名称</td> </tr>
eof;
$pagelist = $page_obj->fpage(array(3,4,5,6,7,8));
$query = 'select * from category '.$page_obj->limit;
$resource = mysqli_query($link, $query);
while($result= mysqli_fetch_assoc($resource)){
    echo "<tr>";
    echo "<td>".$result['id']."</td>";
    echo "<td>".$result['name']."</td>";
    echo "</tr>";
}

echo "<tr><td colspan='5'>$pagelist</td></tr>";
mysqli_close($link);
?>