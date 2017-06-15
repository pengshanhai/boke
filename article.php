<?php
include('./conn.php');
include('./header.php');
?>
    <div id="main">
        <?php
            $id=$_GET['id'];
            $sql="select * from category where id=$id";
            $rs=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($rs);

        ?>
        <ul>你当前的目录是：<a href="./index.php">首页</a>&gt;<?php echo $row['cate_name'];?> <hr/>
            <?php
            $sql="select img,cate_id,id,content,title from article where cate_id=$id";
            $rs1=mysqli_query($conn,$sql);
            while($row1=mysqli_fetch_assoc($rs1)){
                echo '<li>';
                echo '<img src="./files/'.$row1['img'].'" alt=""/>';
                echo '<h4><a href="content.php?cate_id='.$row1['cate_id'].'&id='.$row1['id'].'">'.$row1['title'].'</a></h4>';
                echo '<p>'.mb_substr($row1['content'],0,50,'utf-8').'...</p>';
                echo '</li>';
            }
            ?>
        </ul>
    </div>
<?php
include('./right.php');
include('./footer.php');

?>
