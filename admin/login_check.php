<?php
include('../conn.php');
$username=$_POST['username'];
$password=$_POST['password'];
if(strlen($username)<3){
    echo '用户名不能少于3个字';exit;
}
$sql="select * from admin where username='$username' and password='$password'";
$rs=mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($rs)){
    session_start();
    $_SESSION['userid']=$row['id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['flag']=$row['flag'];
    alert('登录成功','index.php');
}else{
    alert('登录失败,账号或者密码错误！！','login.php');
}