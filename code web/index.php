<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Hệ Thống Cảnh Báo Ô Nhiễm Nước Thải</title>
    <meta charset="utf-8">
    <script language="javascript" src="clock.js"></script>
</head>
<style type="text/css">
    * {
margin: 0;
padding: 0;
}
#container
            {
                width: 100%;      /*Rộng 1000px*/
                margin: 0px auto;   /*Canh giữa màn hình*/
                text-align: center; /*Text bên trong canh giữa*/
                font-size: 30px;    /*Font chữ 30px*/
                color: #FFF;        /*Font màu trắng*/
                background: url('./pic2.jpg');
            }
            #header
            {
                font-family: Helvetica, Arial,sans-serif;
                font-size: 22px;
                height: 140px;      /*Cao 100px*/
                //background: greenyellow;   /*Nền màu xanh*/
            }
            .content{
                float:left;     /*Nằm bên trái*/
                width: 50%;   /*Rộng 700px*/
                height: 460px;  /*Cao 300px*/
                background: #58ACFA;/*Nền màu đỏ*/
            }
            .sidebar{
                width: 50%;   /*Rộng 300px*/
                float: right;   /*Nằm bên phải*/
                height: 460px;  /*Cao 100px*/
                //background: pink;/*Nền màu hồng*/
            }
            #footer{
                background: blue;
                height: 40px;
            }
            .clear{
                clear:both
            }
#menu li 
{
  color: #f1f1f1;
  display: inline-block;
  width: 120px;
  height: 40px;
  line-height: 40px;
  margin-left: -5px;
}
#menu ul 
{
  background: #1F568B;
  list-style-type: none;
  overflow: hidden;
  width: 100%;
  text-align: center;
}
#menu a 
{
  text-decoration: none;
  color: #fff;
  display: block;
  text-align: center;
}
#menu a:hover 
{
  background: #F1F1F1;
  color: #333;
  text-align: center;
}

</style>
<body>
    <div id="container">
            <div id="header">
                <h1>Hệ Thống Cảnh Báo Ô Nhiễm Nước Thải</h1>
                <div id="menu">
    <ul> 
        <li><a href="index.php" target="_self" title="học lập trình online" rel="follow, index">Trang Chủ</a></li>
        <li><a href="student-list.php" target="_self" title="học lập trình online" rel="follow, index">Trạm</a></li>
        <li><a href="node1.php" target="_self" title="node1" rel="follow, index">Trạm 1</a></li>
        <li><a href="node2/node2.php" target="_self" title="node2" rel="follow, index">Trạm 2</a></li>
        <li><a href="node3.php" target="_self" title="node3" rel="follow, index">Live</a></li>
    </ul>
</div>
                <div id="clock1">
        <script language="javascript">
            time();
        </script>
    </div>
            </div>
            <div id="main">
                <div class="content">
                    <?php include "./wartram1.php"; ?>
                    <p>Các thông số hệ thống:</p>
                        <p>Nguồn Acquy(supply):</p>
                        <p>Chất Lượng Tín hiệu(signal quality):</p>
                </div>
                <div class="sidebar">
                   Trạm 2
                </div>
                <div class="clear"></div>
            </div>
            <div id="footer">
                <p>&copy; Nhóm Thực Hiện: Trương Ngọc Khanh, Trần Tiến Cường -- Đồ án tốt nghiệp - Khóa 2013</p>
                
            </div>
    </div>
<!--Phần #header-
<div id="header">
    <h1>Hệ Thống Cảnh Báo Ô Nhiễm Nước Thải</h1>
    
</div>
<div id="menu">
    <ul> 
        <li><a href="index.php" target="_self" title="học lập trình online" rel="follow, index">HOME</a></li>
        <li><a href="student-list.php" target="_self" title="học lập trình online" rel="follow, index">NODE</a></li>
        <li><a href="node1.php" target="_self" title="node1" rel="follow, index">NODE1</a></li>
        <li><a href="node2/node2.php" target="_self" title="node2" rel="follow, index">NODE2</a></li>
        <li><a href="node3.php" target="_self" title="node3" rel="follow, index">NODE3</a></li>
    </ul>
</div>
<div id="body1">
    <h1>Hệ Thống Cảnh Báo Ô Nhiễm Nước Thải</h1>
    <div id="clock1">
        <script language="javascript">
            time();
        </script>
    </div>
 <!--   <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8352580226006!2d108.1431214143367!3d16.07403644357982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218d4fb0510c7%3A0x63843ff26f5e7678!2zxJDhu5NuZyBLw6gsIEhvw6AgS2jDoW5oIELhuq9jLCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1540355196208" width="1350" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
</div>
<div id="body2">
    <p2> dkmmmmmmm</p2>
</div>
<div id="footer">
    <p>&copy; Nhóm Thực Hiện: Trương Ngọc Khanh</p>
</div> -->
 </body>
</html>
