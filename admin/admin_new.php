<?php
include('../conn.php');
include('./header.php');
?>
			<div class="mainbox">
				<div class="note">
					<h4>新增管理员</h4>
					<form action="admin_action.php?act=create" method="post">
						<table class="news_form">
							<tr>
								<td>管理员账号：</td>
								<td><input type="text" name="username" class="inbox"/></td>
							</tr>
                            <tr>
                                <td>管理员密码：</td>
                                <td><input type="password" name="password" class="inbox"/></td>
                            </tr>
                            <tr>
                                <td>管理员身份：</td>
                                <td><input type="text" name="flag" class="inbox"/></td>
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