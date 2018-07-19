<?php
//收集到普通表单域信息$_POST 和 上传文件域信息$_FILES

//echo "POST:";
//print_r($_POST);

//echo "FILES:";
//print_r($_FILES);

//判断附件是否有问题
if($_FILES['userpic']['error']>0){
    exit('附件有异常问题');
}

//① 附件的存储位置、附件的名字
$path = "./upload/";
$name = mt_rand(1000,9999).$_FILES['userpic']['name'];  //原名字
$truename = $path.$name;

//② 把附件从临时路径位置 移动到真实位置move_uploaded_file()
if(move_uploaded_file($_FILES['userpic']['tmp_name'],$truename)){
    echo "upload success";
}else{
    echo "upload fail";
}

