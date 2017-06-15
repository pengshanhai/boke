<?php
header('Content-Type:text/html;charset=utf-8');
$conn=@mysqli_connect('localhost','root','root','blog') or die('error');
mysqli_query($conn,"set names utf8");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Blog</title>
    <link type="text/css" rel="stylesheet" href="skin/index.css"/>
    <link rel="stylesheet" href="skin/calendar.css">
    <style type="text/css">

        ul, ol, li {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #demo {
            width: 300px;
            margin: 5px auto;
        }

        #dt {
            margin: 30px auto;
            height: 28px;
            width: 200px;
            padding: 0 6px;
            border: 1px solid #ccc;
            outline: none;
        }
    </style>
</head>
<body>

<div id="header">
    <h1>R's BLOG</h1>
    <img src="images/icon.jpg" alt=""/>
    <form action="search.php" method="get">
        <input type="text" name="keywords" class="inbox"/>
        <input type="image" src="images/search.jpg" class="inbtn"/>
    </form>
</div>
<div class="menu_bg">
    <div id="menu">
        <a href="./index.php">首页</a>

        <?php
            $sql="select * from category";
            $rs=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($rs)){
                ?>
         <a href="article.php?id=<?php echo $row['id'];?>"><?php echo $row['cate_name'];?></a>
        <?php
            }
        ?>
    </div>
</div>
<div class="banner">

        <div class="phoenix-feather"> <img src="images/6.jpg" alt="" width="100%"/> </div>

</div>
<div class="content_bg">
    <div id="content">