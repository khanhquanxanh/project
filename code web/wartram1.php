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
        h3 
        {
            color : blue;
            text-align: center;
            font-size: 20px;
        }

        h2 
        {
            color : red;
            text-align: center;
            font-size: 20px;
        }

table{
    width:100%;
}
table,th,td{
    border:1px solid gray;
    border-collapse: collapse;
}
th,td{
    padding:7px 15px;
}
th{
    background-color: #AEB404;
    color: white;
}
tr:nth-child(even){
    background-color: #151515;
}
tr:hover{
    background-color: #00FFFF;
}

    </style>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <td colspan="3">Trạm 1</td>
        
        
    </tr>
    <?php foreach ($value1 as $item){ ?>
    <tr>
        <td>Nhiệt độ</td>
        <td><?php echo $item['data_temp']; ?></td>
        <td><?php 
                    if ($item['data_temp']<40){
                    ?>
                    <h3>SAFE</h3>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?> </td>
    </tr>
        <tr>
        <td>Chỉ số DO</td>
        <td><?php echo $item['data_do']; ?></td>
        <td>
                    <?php 
                    if ($item['data_do']>4){
                    ?>
                    <h3>SAFE</h3>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
    </tr>
    <tr>
        <td>Chỉ số TDS</td>
        <td><?php echo $item['data_tds']; ?></td>
        <td>
                    <?php 
                    if ($item['data_tds']>15){
                    ?>
                    <h3>SAFE</h3>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
    </tr>
    <tr>
        <td>Chỉ số PH</td>
        <td><?php echo $item['data_ph']; ?></td>
        <td>
                    <?php 
                    if (($item['data_ph'])<9){
                    ?>
                    <h3>SAFE</h3>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
    </tr>
    <tr>
        <td>Chỉ số TURB</td>
        <td><?php echo $item['data_turb']; ?></td>
        <td>
                    <?php 
                    if ($item['data_turb']>15){
                    ?>
                    <h3>SAFE</h3>
                    <?php }else{ ?>
                    <h2>WARNING</h2>
                    <?php } ?>
                </td>
    </tr>
<?php } ?>
</table>
