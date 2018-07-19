<?php

print_r($_POST);
//权 为filepic 的数组  filepic[error]大于 0时 出现错误 为1时 超出php_ini 的 配置大小 2 时为超出MAX_FILE_SIZE的 表单限制 3 为只上传了部分 4 位没有上传文件
if(!empty($_FILES)){
    var_dump($_FILES);
    //将上传的文件存储起来
    // 1 定义路径 
    $path = './upload/';
    $name = mt_rand(1,10000).$_FILES['filepic']['name'];   //文件原名
    $path .=$name;
    echo $path;
    $bool = move_uploaded_file( $_FILES['filepic']['tmp_name'],$path );
    if( $bool ){
        echo "sucess";
    }else{
        echo "error";
    }
}