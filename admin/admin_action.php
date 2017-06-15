<?php
include('../conn.php');
$act=$_GET['act'];


//添加管理员
if($act=='create'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $flag=$_POST['flag'];
    $sql="insert into admin(username,password,flag) values('$username','$password','$flag') ";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('新增管理员成功','admin_list.php');
    }else{
        echo '添加管理员失败';
        echo mysqli_error($conn);
    }
}


//删除管理员
if($act=='delete'){
    $id=$_GET['id'];
    $sql="delete from admin where id=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('删除管理员成功！','admin_list.php');
    }else{
        echo '删除失败';
        echo mysqli_error($conn);
    }
}



//修改管理员
if($act=='modify'){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $flag=$_POST['flag'];
    $sql="update admin set username='$username',password='$password',flag='$flag' where id=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('修改成功！','admin_list.php');
    }
}