<?php
global $conn;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Hệ Thống Cảnh Báo Ô Nhiễm Nước Thải</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="./fontawesome.min.css"/>
    <script language="javascript" src="./jquery-3.3.1.min.js"></script>
    <script language="javascript" src="clock.js"></script>
    <script language="javascript" src="./highcharts.js"></script>
</head>
<style type="text/css">
    * {
 
padding: 0;
 

 
}
body {
    //width: 1000px;
    height: 400px;
    margin: auto;
    font-family: Helvetica, Arial,sans-serif;
    font-size: 16px;
    
}
#header {
    //width: 1000px;
    height: 60px;
    background: green;
    color: white;
    padding: 1em;
    text-align: center;
    margin:auto;
}
#menu li {
  color: #f1f1f1;
  display: inline-block;
  width: 120px;
  height: 40px;
  line-height: 40px;
  margin-left: -5px;
}
#menu ul {
  background: #1F568B;
  list-style-type: none;
  overflow: hidden;
  width: 100%;
  text-align: center
}
#menu a {
  text-decoration: none;
  color: #fff;
  display: block;
  text-align: center;
}
#menu a:hover {
  background: #F1F1F1;
  color: #333;
  text-align: center;
}
#footer {
    //width: 1000px;
    height: 19px;
    clear: both;
    background: blue;
    color: white;
    padding: 1em;
    text-align: center
}
#map{
    float: right;
}
</style>
<body>

<!--Phần #header-->
<div id="header">
    <h1>Hệ Thống Cảnh Báo Ô Nhiễm Nước Thải</h1>
    
 </div>
<div id="menu">
    <ul> 
        <li><a href="index.php" target="_self" title="học lập trình online" rel="follow, index"><i class="fa fa-home"></i>HOME</a></li>
        <li><a href="student-list.php" target="_self" title="học lập trình online" rel="follow, index">NODE</a></li>
        <li><a href="node1.php" target="_self" title="node1" rel="follow, index">NODE1</a></li>
        <li><a href="node2/node2.php" target="_self" title="node2" rel="follow, index">NODE2</a></li>
        <li><a href="node3.php" target="_self" title="node3" rel="follow, index">NODE3</a></li>
    </ul>
</div>
<div id="body" >
    <h1>Biểu Đồ Live</h1>
    <div id="clock1">
        <script language="javascript">
            time();
        </script>
    </div>
    <div id="chart" >
        <script language="javascript">
            ajaxFunction();
        </script>
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">
            <?php include "./bieudo.php"; ?>	
        </div>
    </div>
 <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15335.027761171987!2d108.1521942017041!3d16.0780979372184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x714561e9f3a7292c!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBLaG9hIC0gxJDhuqFpIGjhu41jIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1540396930813" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>   
</div>
<div id="footer">
    <p>&copy; Nhóm Thực Hiện: Trương Ngọc Khanh</p>
</div>
 </body>
</html>
