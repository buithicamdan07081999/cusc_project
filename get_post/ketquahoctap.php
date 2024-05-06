<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KẾT QUẢ HỌC TẬP</title>
</head>
<body>
    <h1>KẾT QUẢ HỌC TẬP</h1>
    <form name="ketquahoctap_form" id="ketquahoctap_form" method="post" action="../control/xulyketqua.php">
    <label>HỌ TÊN: </label>
    <input type="text" id="txthoten" name="txthoten"><br/>
    <label>GIỚI TÍNH: </label></br>
    <input type="radio" id="txtgioitinh_nam" name="txtgioitinh" value="1" >Nam
    <input type="radio" id="txtgioitinh_nu" name="txtgioitinh" value="2">Nữ
    <br/><a>checked để chọn mặc định</a><br/>
    <label>ĐIỂM</label>
    <input type="number" id="txtdiem" name="txtdiem"><br/>
    <button type="submit">Tra cứu</button>
    </form>
    <a href="../index.php">Trang chủ</a>

</body>
</html>