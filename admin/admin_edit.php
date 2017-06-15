<?php
include('../conn.php');
include('./header.php');
$id=$_GET['id'];
$sql="select * from admin where id=$id";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs);
?>
    <div class="mainbox">
        <div class="note">
            <h4>修改列表</h4>
            <form action="admin_action.php?act=modify" method="post">
                <table class="news_form">
                    <tr>
                        <td>ID：</td>
                        <td><input type="text" name="old_id" value="<?php echo $id;?>" readonly class="inbox"/> 不可修改</td>
                    </tr>
                    <tr>
                        <td>管理员账号：</td>
                        <td><input type="text" name="username" value="<?php echo $row['username'];?>" class="inbox"/></td>
                    </tr>
                    <tr>
                        <td>管理员密码：</td>
                        <td><input type="password" name="password" value="<?php echo $row['password'];?>" class="inbox"/></td>
                    </tr>
                    <tr>
                        <td>管理员身份：</td>
                        <td><input type="text" name="flag" value="<?php echo $row['flag'];?>" class="inbox"/></td>
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