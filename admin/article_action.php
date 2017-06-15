<?php
include('../conn.php');
$act=$_GET['act'];


//添加新闻
if($act=='create'){
    $title=$_POST['title'];
    $cate_id=$_POST['cate_id'];
    $author=$_POST['author'];
    $content=$_POST['content'];
    $img=$_FILES['img'];
    if($img['name']){
        $ext=strrchr($img['name'],'.');
        $name=date('YmdHis').'-'.rand(100,900);
        $filename=$name.$ext;
        $allow=['.jpg','.png','.gif','jpeg'];
        if(!in_array($ext,$allow)){
            echo '文件上传的类型不符合要求';exit;
        }
        move_uploaded_file($img['tmp_name'],'../files/'.$filename);
    }else{
        $filename='';
    }
    $sql="insert into article(title,cate_id,author,content,img) values('$title','$cate_id','$author','$content','$filename') ";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('发布新闻成功','article_list.php');
    }else{
        echo '添加失败';
        echo mysqli_error($conn);
    }
}


//删除新闻
if($act=='delete'){
    $id=$_GET['id'];
    $rs=mysqli_query($conn,"select img from article where id=$id");
    $row=mysqli_fetch_assoc($rs);
    if(strlen($row['img'])>1){
        unlink('../files/'.$row['img']);
    }
    mysqli_free_result($rs);
    $sql="delete from article where id=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('删除新闻成功！','article_list.php');
    }else{
        echo '删除失败';
        echo mysqli_error($conn);
    }
}



//修改管新闻
if($act=='modify'){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $cate_id=$_POST['cate_id'];
    $author=$_POST['author'];
    $view=$_POST['view'];
    $content=$_POST['content'];
    $img=$_FILES['img'];
    $old_img=$_POST['old_img'];
    //print_r($img);exit;
    if($img['name']){
        $ext=strrchr($img['name'],'.');
        $name=date('YmdHis').'-'.rand(100,999);
        $filename=$name.$ext;
        $allow=['.jpg','jpeg','png','gif'];
        if(!in_array($ext,$allow)){
            echo '你上传的文件不符合要求';exit;
        }
   //     unlink('../files/'.$row['img']);
        $sql="select img from article where id=$id";
        $rs=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($rs);
        unlink('../files/'.$row['img']);
        move_uploaded_file($img['tmp_name'],'../files/'.$filename);
    }else{
        $filename=$old_img;
    }
    $sql="update article set title='$title',cate_id='$cate_id',author='$author',content='$content',
view='$view',img='$filename' where id=$id";
  //  echo $sql;exit;
    $r=mysqli_query($conn,$sql);
    if($r){
        alert('修改成功！','article_list.php');
    }else{
        echo '修改失败';
        echo mysqli_error($conn);
    }
}