<?php
// thiet lap tieng viet
header('Content-Type: text/html; charset=utf-8');
// Hàm kết nối database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'id8220852_root', 'vertrigo', 'id8220852_data1') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}
function get_all_datas()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from data1 ORDER BY data_id DESC LIMIT 0,5";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     
    // Trả kết quả về
    return $result;
}
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}
function get_datas()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from data1 ORDER BY data_id DESC LIMIT 0,1";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result1 = array();
     
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result1[] = $row;
        }
    }
     
    // Trả kết quả về
    return $result1;
}
$value = get_all_datas();
$value1 = get_datas();
disconnect_db();
?>
    <style type='text/css'>
        h1 {
            color : blue;
            text-align: center;
        }

        h2 {
            color : red;
            text-align: center;
        }

        
    </style>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>TEMP(<sup>0</sup>C)</td>
                <td>TDS(ppm)</td>
                <td>PH</td>
                <td>DO(%)</td>
                <td>TURB(%)</td>
                <td>TIME UPDATE</TD>
            </tr>
            <?php foreach ($value as $item){ ?>
            <tr>
                <td><?php echo $item['data_id']; ?></td>
                <td><?php echo $item['data_temp']; ?></td>
                <td><?php echo $item['data_tds']; ?></td>
                <td><?php echo $item['data_ph']; ?></td>
                <td><?php echo $item['data_do']; ?></td>
                <td><?php echo $item['data_turb']; ?></td>
                <td><?php echo $item['data_time']; ?></td>
               
            </tr>
            <?php } ?>
            <?php foreach ($value1 as $item){ ?>
            <tr>
                <td></td>
                <td><?php 
                    if ($item['data_temp']>40){
                    ?>
                    <h1>SAFE</h1>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
                <td>
                    <?php 
                    if ($item['data_tds']>15){
                    ?>
                    <h1>SAFE</h1>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
                <td>
                    <?php 
                    if (($item['data_ph'])<9){
                    ?>
                    <h1>SAFE</h1>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
                <td>
                    <?php 
                    if ($item['data_do']>4){
                    ?>
                    <h1>SAFE</h1>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
                <td>
                    <?php 
                    if ($item['data_turb']>15){
                    ?>
                    <h1>SAFE</h1>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
                
               
            </tr>
            <?php } ?>
        </table>
    