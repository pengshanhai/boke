<?php
include('../conn.php');
include('./header.php');
?>
<div class="mainbox">
    <div class="note">
        <h4>留言列表</h4>
        <!--        <form method="post" action="" class="search_form">
                    <input type="text" name="keywords" placeholder="请输入要搜索的关键词"/>
                    <input type="submit" value="搜索"/>
                </form>-->
        <table class="news_list">
            <thead>
            <tr>
                <th>留言ID</th>
                <th>用户名</th>
                <th>评论的文章ID</th>
                <th>内容</th>
                <th>发布时间</th>
                <th>审核</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql="select * from guestbook order by intime desc";
            $rs=mysqli_query($conn,$sql);

            while($row=mysqli_fetch_assoc($rs)){
             //   var_dump($row);exit;
                echo   '<tr>';
                echo   '<td>'.$row['id'].'</td>';
                echo   '<td>'.$row['username'].'</td>';
                echo    '<td>'.$row['art_id'].'</td>';
                echo    '<td>'.$row['content'].'</td>';
                echo    '<td>'.$row['intime'].'</td>';
                echo    '<td>'.$row['flag'].'</td>';
                echo  '<td>
                            <a href="guestbook_action.php?act=permit&id='.$row['id'].'" onclick="return confirm(\'你确定要审核通过吗\')">审核</a> 
                            <a href="guestbook_action.php?act=delete&id='.$row['id'].'" onclick="return confirm(\'你确定要删除吗\')">删除</a>
                        </td>';
                echo '</tr>';
            }?>
            </tbody>
        </table>
        <div class="page">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#" class="on">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
        </div>
    </div>
</div>


<?php
include('./footer.php');
?>
