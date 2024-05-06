<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KẾT QUẢ</title>
</head>
<body>
    <?php 
    $txthoten = $_POST['txthoten'];
    $txtgioitinh = $_POST['txtgioitinh'];
    $txtdiem = $_POST['txtdiem'];
    
    if ($txtdiem >= 0 && $txtdiem <=3)
    {
        echo '<h1 style="color: blue;">XIN CHÚC MỪNG</h1>' ;
    }
    else if($txtdiem < 0 && $txtdiem > 10)
    {
        echo '<h1 style="color: red;">ĐIỂM KHÔNG HỢP LỆ</h1>' ;
    }
    else
    {
        echo '<h1 style="color: red;">RẤT TIẾC VÌ </h1>' ;
    }
    
    echo $txthoten .'<br/>Giới tính: ' .$txtgioitinh . '</br>Với số điểm: ' . $txtdiem . '<br/>';
    
    if ($txtdiem >= 0 && $txtdiem <=3)
    {
        echo '<h1 style="color: blue;">VỪA RỚT MÔN</h1>' ;
    }
    if($txtdiem < 0 && $txtdiem > 10)
    {
        echo '<h1 style="color: red;">ĐÃ QUA MÔN</h1>' ;
    }
    
    ?>
    
    <a href="../get_post/ketquahoctap.php">Tiếp tục kiểm tra kết quả</a>
</body>
</html>