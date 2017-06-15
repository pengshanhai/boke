<?php
include('../conn.php');
include('./header.php');
?>
<div class="mainbox">
    <div class="note">
        <h4>分类列表</h4>
        <!--        <form method="post" action="" class="search_form">
                    <input type="text" name="keywords" placeholder="请输入要搜索的关键词"/>
                    <input type="submit" value="搜索"/>
                </form>-->
        <table class="news_list">
            <thead>
            <tr>
                <th>ID</th>
                <th>管理员账号</th>
                <th>管理员密码</th>
                <th>管理员身份</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql="select * from admin";
            $rs=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($rs)){
                echo   '<tr>';
                echo   '<td>'.$row['id'].'</td>';
                echo   '<td>'.$row['username'].'</td>';
                echo    '<td>'.$row['password'].'</td>';
                echo    '<td>'.$row['flag'].'</td>';
                echo  '<td>
                            <a href="admin_edit.php?id='.$row['id'].'">修改</a> 
                            <a href="admin_action.php?act=delete&id='.$row['id'].'">删除</a>
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
