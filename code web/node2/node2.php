<?php
// Set the JSON header
header("Content-type: text/json");
 
    $servername = "localhost";
	$username = "root";
	$password = "vertrigo"; 
	$dbname = "data_khanh"; 		
	$link = new mysqli($servername,$username,$password, $dbname) or die ("no connect!!!!");
	mysqli_query($link,'SET NAMES UTF8');
	$query =  "SELECT * FROM data1 ORDER BY data_id DESC LIMIT 0,1";;
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
	while ($row = mysqli_fetch_array($result)){	
		if ($row['data_id'] != -1) {
		    $y= (double)$row['data_temp'];
                    
                    $x=$row['data_time'];
		}
	}
    // Create a PHP array and echo it as JSON
    $ret = array($x, $y);
    //echo $ret;
    echo json_encode($ret);
?>