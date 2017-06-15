<?php
header('Content-Type:text/html;charset=utf-8');
$conn=@mysqli_connect('localhost','root','root','blog') or die('error');
mysqli_query($conn,"set names utf8");
?>
<div id="rightbar">
    <ul class="right4">

            <script type="text/javascript">
                var in_1 = document.getElementById('input');
                function showTime(){
                    var date = new Date();
                    var week = date.getDay();
                    var weekday;
                    switch(week){
                        case 0: weekday = '星期天';break;
                        case 1: weekday = '星期一';break;
                        case 2: weekday = '星期二';break;
                        case 3: weekday = '星期三';break;
                        case 4: weekday = '星期四';break;
                        case 5: weekday = '星期五';break;
                        case 6: weekday = '星期六';break;       }
                    var year = date.getFullYear();
                    var month = date.getMonth() + 1;
                    var day = date.getDate();
                    var hour = date.getHours();
                    var minute = date.getMinutes();
                    var second = date.getSeconds();
                    var in_1 = document.getElementById('input');
                    in_1.value = year + '年' + month + "月" + day + '日'+' ' + weekday + ' ' + hour + ':' + minute + ':' +second;       setTimeout(showTime,1000);     }     showTime();
            </script>

    </ul>
    <div id="demo">
        <div id="ca"></div>
        <div id="dd"></div>
    </div>
    <script src="skin/jquery.js"></script>
    <script src="skin/calendar.js"></script>
    <script>
        $('#ca').calendar({
            width: 320,
            height: 320,
            data: [
                {
                    date: '2015/12/24',
                    value: 'Christmas Eve'
                },
                {
                    date: '2015/12/25',
                    value: 'Merry Christmas'
                },
                {
                    date: '2016/01/01',
                    value: 'Happy New Year'
                }
            ],
            onSelected: function (view, date, data) {
                console.log('view:' + view)
                alert('date:' + date)
                console.log('data:' + (data || 'None'));
            }
        });

        $('#dd').calendar({
            trigger: '#dt',
            zIndex: 999,
            format: 'yyyy-mm-dd',
            onSelected: function (view, date, data) {
                console.log('event: onSelected')
            },
            onClose: function (view, date, data) {
                console.log('event: onClose')
                console.log('view:' + view)
                console.log('date:' + date)
                console.log('data:' + (data || 'None'));
            }
        });
    </script>
    <hr/>
    <h3 class="right3">热门评论</h3>
    <ul class="right4">
        <?php
        $pagesize1=3;   //每页显示2条
        $page1=isset($_GET['page1']) ? $_GET['page1'] : 1; //设置接受到的page默认值
        $sql="select * from article";
        $rs=mysqli_query($conn,$sql);
        $records1=mysqli_num_rows($rs);  //获得总条数
        $pagecount1=ceil($records1/$pagesize1);  //一共有多少分页，ceil向上取整
        //     echo $page;exit;
        $start1=($page1-1)*$pagesize1;
    //    $sql="select * from article limit $start1,$pagesize1";
    //    $rs=mysqli_query($conn,$sql);

        $sql3="select guestbook.*,article.id,article.cate_id,article.view from guestbook,article where guestbook.art_id=article.id order by intime desc limit $start1,$pagesize1";
        $rs3=mysqli_query($conn,$sql3);
        while($row=mysqli_fetch_assoc($rs3)){
        ?>
        <li>
            <h4>用户名：<?php echo $row['username'];?></h4>
            评论：<a href="content.php?id=<?php echo $row['art_id'];?>&cate_id=<?php echo $row['cate_id'];?>"><?php echo $row['content'];?></a>
        </li>
        <?php
        }
        echo '<div class="page">';
        for($i=1;$i<=$pagecount1;$i++){
            if($i==$page1){
                echo '<a href="index.php?page1='.$i.'" class="on">'.$i.'</a>';
            }else{
                echo '<a href="index.php?page1='.$i.'">'.$i.'</a>';
            }
        }
        echo '</div>';
        ?>

    </ul>
</div>