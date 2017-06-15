<?php
include('../conn.php');
$act=$_GET['act'];


//添加留言
if($act=='create'){
    $id=$_POST['id'];
    $cate_id=$_POST['cate_id'];
    $username=$_POST['username'];
    $content=$_POST['content'];
    $sql="insert into guestbook(username,art_id,content) values('$username',$id,'$content') ";
   // print_r($sql);exit;
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('添加留言成功','../content.php?cate_id='.$cate_id.'&id='.$id.'');
    }else{
        echo '添加管理员失败';
        echo mysqli_error($conn);
    }
}


//删除留言
if($act=='delete'){
    $id=$_GET['id'];
    $sql="delete from guestbook where id=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('删除留言成功！','guestbook_list.php');
    }else{
        echo '删除失败';
        echo mysqli_error($conn);
    }
}



//审核留言
if($act=='permit'){
        $id=$_GET['id'];
        $sql="update guestbook set flag=1 where id=$id";
        $r=mysqli_query($conn,$sql);
        if($r){
            alert('审核通过！','guestbook_list.php');
        }
    }