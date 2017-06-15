<?php
include('./conn.php');
include('./header.php');
?>

			<div id="main">
				<ul>
                    <?php
                        $pagesize=5;   //每页显示4条
                        $page=isset($_GET['page']) ? $_GET['page'] : 1; //设置接受到的page默认值
                        $sql="select * from article";
                        $rs=mysqli_query($conn,$sql);
                        $records=mysqli_num_rows($rs);  //获得总条数
                        $pagecount=ceil($records/$pagesize);  //一共有多少分页，ceil向上取整
                   //     echo $page;exit;
                        $start=($page-1)*$pagesize;
                        $sql="select * from article limit $start,$pagesize";
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
                        echo '<div class="page">';
                        for($i=1;$i<=$pagecount;$i++){
                            if($i==$page){
                                echo '<a href="index.php?page='.$i.'" class="on">'.$i.'</a>';
                            }else{
                                echo '<a href="index.php?page='.$i.'">'.$i.'</a>';
                            }
                        }
                          echo '</div>';
                    ?>

				</ul>
			</div>


<?php
include('./right.php');
include('./footer.php');

?>
