<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
</head>
<body>
<a href="../index.php" >Quay lại trang chủ</a>
    <h1>ĐĂNG NHẬP GET</h1>
    <form id="login_from" name="login_form" method="get" action="../control/xulydangnhap.php">
    <label>Tài khoản</label>
    <input type="text" name="txttaikhoan" id="txttaikhoan" />

    <label>Mật khẩu</label>
    <input type="password" name="txtmatkhau" id="txtmatkhau" />

    <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>