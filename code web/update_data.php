<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
global $conn;
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
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}
function update_data()
{
    global $conn;
    $data_time = date('Y-m-d H:i:s');
    echo " Thời Gian Update Dữ Liệu:$data_time <br>";
    connect_db();
    $data_temp = $_GET['t'];
    $data_tds = $_GET['tds'];
    $data_ph = $_GET['ph'];
    $data_do = $_GET['do'];
    $data_turb = $_GET['turb'];
    $sql = "INSERT INTO data1 
        (`data_id`, `data_temp`, `data_tds`, `data_ph`, `data_do`, `data_turb`,`data_time`) 
        VALUES ('',$data_temp,$data_tds,$data_ph,$data_do,$data_turb,'$data_time')";
 
// Thực hiện thêm record
if (mysqli_query($conn, $sql)) {
    
    $last_id = mysqli_insert_id($conn);
    echo "Thêm record thành công có ID là [$last_id] <br>";

if ($last_id>100)
{
    $delete = $last_id - 100;
    $sqldelete = "DELETE FROM data WHERE data_id=$delete";
    if (mysqli_query($conn, $sqldelete)) 
                {
    echo "Xóa thành công id=[$delete]";
                }
}
else { echo 'Không Xóa Thành Công';}
} else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}
    //mysql_query("INSERT INTO data VALUE('',$data_temp,$data_tds,$data_ph,$data_do,$data_turb)");
    


    disconnect_db();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
update_data();
?>
    </body>

</html>