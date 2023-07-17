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
function get()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from data1 ORDER BY data_id DESC LIMIT 0,10";
     
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
$data = get();
disconnect_db();
$time1 = array();
$temp1 = array();
foreach ($data as $item){
    $time1[]= $item['data_time'] ;
}
foreach ($data as $item){
    $temp1[]= $item['data_temp'] ;
}
?>
<script language="javascript">
    $(function () {
    var chart = Highcharts.chart('chart1', {
        title: {
            text: 'Biểu Đồ Nhiệt Độ',
        },
        xAxis: {
            categories: 
                    [
                         <?php for ($i = 9; $i>=0; $i--){ ?>'<?php echo $time1[$i]; ?>',<?php } ?>                
                
                    ]
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            data: 
                    [
                        <?php for ($i = 9; $i>=0; $i--){  echo $temp1[$i]; ?> ,<?php } ?>   
                    ]
        }]
    });
    
});

</script>
