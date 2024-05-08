<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vòng lặp</title>
</head>
<body>

<a href="../index.php">Trang chủ</a><br/>
    <?php 
    
    $i = 0;
    while($i<=50)
    {
        if($i % 5 == 0)
        {
            echo '<span style="color:blue">Số ' . $i . ' chia hết cho 5: ' . '</span><br/>';
        }
        else
        {
            echo 'Số ' . $i . ' không chia hết cho 5: ' . '<br/>';
        }
        $i+=1;
    }

    ?>
</body>
</html>