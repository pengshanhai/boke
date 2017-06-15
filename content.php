<?php
include('./conn.php');
include('./header.php');
?>
    <div id="main">
        <?php
            $cate_id=$_GET['cate_id'];
            $id=$_GET['id'];
          //  $sql="select * from category where id=$id";
            $sql="select article.*,category.cate_name from article,category where article.cate_id=category.id and article.id=$id";
            $rs=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($rs);
            mysqli_query($conn,"update article set view=view+1 where id=$id");

        ?>
        <ul>你当前的目录是：<a href="./index.php">首页</a>&gt;<a href="article.php?id=<?php echo $row['cate_id'];?>"><?php echo $row['cate_name'];?></a> &gt;<?php echo $row['title'];?> <hr/>
            <h1><?php echo $row['title'];?></h1>
            <p><?php echo '发布时间：'.$row['intime'].' 作者：'.$row['author']. ' 访问量：'.$row['view'];?></p>
            <p><?php echo nl2br($row['content']);?></p>
        </ul>
        <hr/>
        <ul>
            <h4>发表评论</h4>
            <form action="./admin/guestbook_action.php?act=create" method="post">
                <p>用户名<input type="text" name="username"/></p>
                <p>评  论<textarea cols="30" rows="10" name="content"></textarea></p>
                <input type="hidden" name="id" value="<?php echo $id;?>"/>
                <input type="hidden" name="cate_id" value="<?php echo $cate_id;?>"/>
                <p><input type="submit" value="提交评论" onclick="return confirm('留言审核后才能显示')"/></p>
            </form>
        </ul>
        <hr/>
        <ul>
            <h4>评论区</h4>
        </ul>
        <ul>
            <?php
                $sql="select guestbook.*,article.id from guestbook,article where guestbook.art_id=article.id and article.id=$id and flag=1 order by intime desc";
                $rs=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($rs)){
                    echo '用户名：'.$row['username'];
                    echo '&emsp;&emsp;&emsp;评论时间：'.$row['intime'];
                    echo '<br/>评论：'.$row['content'].'<br/>'.'<br/>';
                }
            ?>
        </ul>
    </div>
<?php
include('./right.php');
include('./footer.php');

?>
