<?php
include('../conn.php');
include('./header.php');
?>
    <div class="mainbox">
        <div class="note">
            <h4>新增分类</h4>
            <form action="cate_action.php?act=create" method="post">
                <table class="news_form">
                    <tr>
                        <td>分类标题：</td>
                        <td><input type="text" name="cate_name" class="inbox"/></td>
                    </tr>
                    <tr>
                        <td>分类ID：</td>
                        <td><input type="text" name="order_no" class="inbox"/></td>
                    </tr>
                    <tr>
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