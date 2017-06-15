<?php
include('../conn.php');
$act=$_GET['act'];

//创建列表
if($act=='create'){
    $cate_name=$_POST['cate_name'];
    $order_no=$_POST['order_no'];
    $sql="insert into category(cate_name,order_no) values('$cate_name','$order_no')";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('添加分类成功','cate_list.php');
    }else{
        echo '添加失败';
        echo mysqli_error($conn);
    }
}




//删除列表

if($act=='delete'){
    $id=$_GET['id'];
    $sql="delete from category where id=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('删除成功','./cate_list.php');
    }else{
        echo '删除失败';
        echo mysqli_error($conn);
    }
}



//修改列表
if($act=='modify'){
    $id=$_POST['id'];
    $cate_name=$_POST['cate_name'];
    $order_no=$_POST['order_no'];
    $sql="update category set cate_name='$cate_name',order_no='$order_no' where id=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('修改成功','./cate_list.php');
    }else{
        echo '修改失败！';
        echo mysqli_error($conn);
    }
}