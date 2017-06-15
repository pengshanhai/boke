</div>
</div>

<div class="other_bg">
    <div id="other">
        <script>
            window.onload=function(){
                var oBox=document.getElementById('box');
                var oUl=oBox.children[0];
                var aLi=oUl.children;
                //复制一份内容
                oUl.innerHTML+=oUl.innerHTML;
                oUl.style.width=aLi.length*aLi[0].offsetWidth+'px';
                setInterval(function(){
                    var l=oUl.offsetLeft+1;
                    if(l>=0){
                        l=-oUl.offsetWidth/2;
                    }
                    oUl.style.left=l+'px';
                },30);
            };
        </script>
        <div id="box">
            <ul>
                <li><img src="images/pic1.jpg" width="280"></li>
                <li><img src="images/pic2.jpg" width="280"></li>
                <li><img src="images/pic3.jpg" width="280"></li>
                <li><img src="images/pic4.jpg" width="280"></li>
                <li><img src="images/pic5.jpg" width="280"></li>
                <li><img src="images/pic6.jpg" width="280"></li>
            </ul>
        </div>
    </div>
</div>

<div class="menu_bg">
    <div id="menu">
        <a href="./index.php">首页</a>

        <?php
        $sql="select * from category";
        $rs=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($rs)){
            ?>
            <a href="article.php?id=<?php echo $row['id'];?>"><?php echo $row['cate_name'];?></a>
            <?php
        }
        ?>
    </div>
</div>
<div id="footer">
    Copyright &copy; 2016. Company Name. All rights reserved.
</div>
</body>
</html>