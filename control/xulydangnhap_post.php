<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả đăng nhập POST</title>
</head>
<body>
    <?php 
     $tk = $_POST['txttaikhoan'];
        echo "Tài khoản là: " . $_POST['txttaikhoan'] . "</br> In bằng cách khai báo biến: ". $tk . "<br/>Mật khẩu là: " .$_POST['txtmatkhau'] ."<br/>"; 
    ?>
<a href="../get_post/login2.php">Quay lại trang Đăng nhập</a>
</body>
</html>