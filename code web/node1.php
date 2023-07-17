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
    background: url('./pic2.jpg');
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
<script language="javascript">
    function ajaxFunction(){
var ajaxRequest;  // Khai bao mot bien
try{		   
  // Voi cac trinh duyet hien dai: Opera 8.0+, Firefox, Safari
  ajaxRequest = new XMLHttpRequest();
}catch (e){
  try{
     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
  }catch (e) {
     
     try{
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
     }catch (e){
     
        // Thong bao khi xay ra loi
        alert("Co loi xay ra voi trinh duyet cua ban!");
        return false;
     }
  }
}
ajaxRequest.onreadystatechange = function (){

  if(ajaxRequest.readyState == 4){
     var ajaxDisplay = document.getElementById('wrap_main');
     ajaxDisplay.innerHTML = ajaxRequest.responseText;
  }
}	   
ajaxRequest.open("GET", "get.php");
ajaxRequest.send(); 
setTimeout("ajaxFunction()",500);
}
</script>
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
    <h1>Bảng Gía Trị Đo Được</h1>
    <div id="clock1">
        <script language="javascript">
            time();
        </script>
    </div>
    <div id="wrap_main">
        <script language="javascript">
            ajaxFunction();
        </script>
    </div>
    <div id="chart1" style="min-width: 310px; height: 400px; margin: 0 auto">
        <?php include "./graph.php"; ?>	
    </div>
    
  
</div>
<div id="footer">
    <p>&copy; Nhóm Thực Hiện: Trương Ngọc Khanh, Trần Tiến Cường -- Đồ án tốt nghiệp - Khóa 2013</p>
</div>
 </body>
</html>
