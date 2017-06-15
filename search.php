<?php
include('./conn.php');
include('./header.php');
?>

<div id="main">
    <ul>
        <?php
            $keywords=$_GET['keywords'];
            $sql="select * from article where title like '%$keywords%'";
            $rs=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($rs)){
        ?>
            <li>
                <img src="./files/<?php echo $row['img']?>" alter=""/>
                <h4><?php echo '<a href="content.php?cate_id='.$row['cate_id'].'&id='.$row['id'].'">'.$row['title'].'</a>';?></h4>
                <p><?php echo mb_substr($row['content'],0,50,'utf-8').'...';?></p>
            </li>
        <?php
            }
        ?>

    </ul>
</div>
<?php
include('./right.php');
include('./footer.php');

?>

<!--$keywords=$_GET['keywords'];-->
<!--$sql="select * from article where title like '%$keywords%'";-->
<!--mysqli_query($conn,$sql);-->