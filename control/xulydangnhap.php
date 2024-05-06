<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả đăng nhập GET</title>
</head>
<body>
    <?php 
     $tk = $_GET['txttaikhoan'];
        echo "Tài khoản là: " . $_GET['txttaikhoan'] . "</br> In bằng cách khai báo biến: ". $tk . "<br/>Mật khẩu là: " .$_GET['txtmatkhau'] ."<br/>"; 
    ?>
<a href="../get_post/login.php" >Quay lại trang Đăng nhập</a>
</body>
</html>