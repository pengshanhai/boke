<?php
include('../conn.php');
include('./header.php');
$id=$_GET['id'];
$sql="select * from article where id=$id";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs);
?>
    <div class="mainbox">
        <div class="note">
            <h4>修改列表</h4>
            <form action="article_action.php?act=modify" method="post" enctype="multipart/form-data">
                <table class="news_form">
                    <tr>
                        <td>新闻ID：</td>
                        <td><input type="text" name="old_id" value="<?php echo $id;?>" readonly class="inbox"/> 不可修改</td>
                    </tr>
                    <tr>
                        <td>新闻标题：</td>
                        <td><input type="text" name="title" value="<?php echo $row['title'];?>" class="inbox"/></td>
                    </tr>
                    <!--<tr>
                        <td>新闻类型：</td>
                        <td><input type="text" name="cate_id" value="<?php /*echo $row['cate_id'];*/?>" class="inbox"/></td>
                    </tr>-->
                    <tr>
                        <td>新闻类型：</td>
                        <td>
                            <select name="cate_id" class="inbox">
                                <option value="0">请选择分类</option>
                                <?php
                                $sql="select * from category";
                                $rs=mysqli_query($conn,$sql);
                                while($row2=mysqli_fetch_assoc($rs)){
                                    if($row2['id']==$row['cate_id']){
                                        echo '<option value="'.$row2['id'].'" selected>'.$row2['cate_name'].'</option>';
                                    }else{
                                        echo '<option value="'.$row2['id'].'">'.$row2['cate_name'].'</option>';
                                    }
                                }
                                mysqli_free_result($rs);
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>作者：</td>
                        <td><input type="text" name="author" value="<?php echo $row['author'];?>" class="inbox"/></td>
                    </tr>
                    <tr>
                        <td>发布时间：</td>
                        <td><input type="text" name="intime" value="<?php echo $row['intime'];?>" readonly class="inbox"/> 不可修改</td>
                    </tr>
                    <tr>
                        <td>点击率：</td>
                        <td><input type="text" name="view" value="<?php echo $row['view'];?>" class="inbox"/></td>
                    </tr>
                    <tr>
                        <td>内容：</td>
                        <td><textarea cols="40" rows="10" name="content"><?php echo $row['content'];?></textarea></td>
                    </tr>
                    <tr>
                        <td>上传的图片：</td>
                        <td>
                            <img src="../files/<?php echo $row['img'];?>"/ width=200><br/>
                            <input type="file" name="img" class="inbox"/>
                            <input type="hidden" name="old_img" value="<?echo $row['img'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td><input type="hidden" name="id" value="<?php echo $id;?>"/>
                        <td><input type="submit" value="提交"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>


<?php
include('./footer.php');
?>