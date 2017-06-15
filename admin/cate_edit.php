<?php
include('../conn.php');
include('./header.php');
$id=$_GET['id'];
$sql="select * from category where id=$id";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs);
?>
    <div class="mainbox">
        <div class="note">
            <h4>修改列表</h4>
            <form action="cate_action.php?act=modify" method="post">
                <table class="news_form">
                    <tr>
                        <td>ID：</td>
                        <td><input type="text" name="old_id" value="<?php echo $id;?>" readonly class="inbox"/> 不可修改</td>
                    </tr>
                    <tr>
                        <td>分类名字：</td>
                        <td><input type="text" name="cate_name" value="<?php echo $row['cate_name'];?>" class="inbox"/></td>
                    </tr>
                    <tr>
                        <td>分类编号：</td>
                        <td><input type="text" name="order_no" value="<?php echo $row['order_no'];?>" class="inbox"/></td>
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