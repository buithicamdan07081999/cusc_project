<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../index.php">Trang chủ</a><br/>
    <h1>
        Chọn ngày tháng năm
    </h1>
    <a>Đây là html thuần</a>
    <select id="ngaythangnam" name="ngaythangnam">
    <option value="1">
        Ngày 1
    </option>
    <option value="2">
        Ngày 2
    </option>
    </select>

   <br/> <a>Đây là php</a><br/>
   Ngày: <select id="ngaythangnam2" name="ngaythangnam2">
        <?php 
        for($i=1 ; $i<=30; $i++)
        {
            echo '
            <option value="'.$i.'">
            Ngày ' . $i .'
        </option>
            ';
        }
        ?>
    </select>
    Tháng: <select id="ngaythangnam3" name="ngaythangnam3">
        <?php 
        for($i=1 ; $i<=12; $i++)
        {
            echo '
            <option value="'.$i.'">
            Tháng ' . $i .'
        </option>
            ';
        }
        ?>
    </select>
    Năm: <select id="ngaythangnam4" name="ngaythangnam4">
        <?php 
        $a = getdate()['year'];
        var_dump(getdate());

        for($i= $a ; $i>=2000; $i--)
        {
            echo '
            <option value="'.$i.'">
            Năm ' . $i .'
        </option>
            ';
        }
        ?>
    </select>

    <h1>foreach</h1>
    <a style="color:red;">Lấy giá trị thường</a>    <br/>
    <?php 
    $arrTen = ['Đan','Vy','Cường'];
    foreach($arrTen as $ten)
    {
        echo 'Xin chào ' . $ten . '<br/>';
    }
    ?>
    <br/>
    <a style="color:red;">Lấy giá trị index</a><br/>    
    <?php 
    $arrTen = ['Đan','Vy','Cường'];
    foreach($arrTen as $index => $ten)
    {
        echo 'Nhân viên thứ '. $index+1 . ': ' . $ten . '<br/>';
    }
    ?>

</body>
</html>