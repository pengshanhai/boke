<?php
include('../conn.php');
include('./header.php');
?>
<div class="mainbox">
    <div class="note">
        <h4>新闻列表</h4>
        <!--        <form method="post" action="" class="search_form">
                    <input type="text" name="keywords" placeholder="请输入要搜索的关键词"/>
                    <input type="submit" value="搜索"/>
                </form>-->
        <table class="news_list">
            <thead>
            <tr>
                <th>新闻ID</th>
                <th>新闻标题</th>
                <th>新闻类型</th>
                <th>作者</th>
                <th>新闻内容</th>
                <th>发布时间</th>
                <th>点击率</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
      //      $sql="select article.*,category.cate_name from article,category where article.cate_id=category.id";
            $sql="select article.*, category.cate_name from article,category where article.cate_id=category.id order by article.id asc";
            $rs=mysqli_query($conn,$sql);

            while($row=mysqli_fetch_assoc($rs)){
             //   var_dump($row);exit;
                echo   '<tr>';
                echo   '<td>'.$row['id'].'</td>';
                echo   '<td>'.$row['title'].'</td>';
                echo    '<td>'.$row['cate_name'].'</td>';
                echo    '<td>'.$row['author'].'</td>';
                echo    '<td>'.mb_substr($row['content'],0,15,'utf-8').'</td>';
                echo    '<td>'.$row['intime'].'</td>';
                echo    '<td>'.$row['view'].'</td>';
                echo  '<td>
                            <a href="article_edit.php?id='.$row['id'].'">修改</a> 
                            <a href="article_action.php?act=delete&id='.$row['id'].'" 
                            onclick="return confirm(\'你确定要删除吗\')">删除</a>
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
