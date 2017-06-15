<?php
include('../conn.php');
include('./header.php');
?>
    <div class="mainbox">
        <div class="note">
            <h4>发布新闻</h4>
            <form action="article_action.php?act=create" method="post" enctype="multipart/form-data">
                <table class="news_form">
                    <tr>
                        <td>分类标题：</td>
                        <td><input type="text" name="title" class="inbox"/></td>
                    </tr>
                    <tr>
                        <td>新闻作者：</td>
                        <td><input type="text" name="author" class="inbox"/></td>
                    </tr>
                    <tr>
                        <td>新闻分类：</td>
                        <td>
                            <select name="cate_id" class="inbox">
                                <option value="0">请选择分类</option>
                                <?php
                                    $sql="select * from category";
                                    $rs=mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($rs)){
                                        echo '<option value="'.$row['id'].'">'.$row['cate_name'].'</option>';
                                    }
                                    mysqli_free_result($rs);
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>新闻内容：</td>
                        <td><textarea cols="40" rows="10" name="content"></textarea></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>上传图片：</td>
                        <td><input type="file" name="img" class="inbox"/></td>
                    </tr>
                        <td></td>
                        <td><input type="submit" value="提交"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>


<?php
include('./footer.php');
?>