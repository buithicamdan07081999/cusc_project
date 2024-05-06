<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KẾT QUẢ</title>
</head>
<style>
    /* .level-1 {} */
</style>
<body>
    <?php 
    $txthoten = $_POST['txthoten'];


    $txtgioitinh = isset($_POST['txtgioitinh'])? $_POST['txtgioitinh'] :'3' ;
    $txtdiem = $_POST['txtdiem'];
    
    if ($txtdiem >= 0 && $txtdiem <=3)
    {
        echo '<h1 style="color: red;">XIN chia buồn</h1>' ;
    }
    else if($txtdiem < 0 || $txtdiem > 10)
    {
        echo '<h1 style="color: red;">ĐIỂM KHÔNG HỢP LỆ</h1>' ;
    }
    else
    {
        echo '<h1 style="color: blue;">chúc mừng </h1>' ;
    }

    echo $txthoten .'<br/>Giới tính: ' .$txtgioitinh . '</br>Với số điểm: ' . $txtdiem . '<br/>';
    
    if ($txtdiem >= 0 && $txtdiem <=3)
    {
        echo '<h1 style="color: blue;">VỪA RỚT MÔN</h1>' ;
    }
    if($txtdiem < 3 && $txtdiem > 10)
    {
        echo '<h1 style="color: red;">ĐÃ QUA MÔN</h1>' ;
    }
    
    ?>

    <ul>
        <li>
            Giới tính:
            <?php if($txtgioitinh == '1')
            {
                echo 'NAM';
            }
            else if($txtgioitinh == '2')
            {
                echo 'NỮ';
            }
            else
            {
                echo 'LGBT';
            }
            ?>
        </li>
    </ul>
    
    <a href="../get_post/ketquahoctap.php">Tiếp tục kiểm tra kết quả</a>
</body>
</html>