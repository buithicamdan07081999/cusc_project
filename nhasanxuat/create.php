<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới Nhà sản xuất</h1>
    <form name="frmThemMoi" id="frmThemMoi" method="post" action="">
        Tên Nhà sản xuất: <input type="text" name="nsx_ten" /><br />
        Mô tả Nhà sản xuất: <input type="text" name="nsx_mota" /><br />

        <a href="index.php">Quay về Danh sách</a>
        <button type="submit" name="btnLuu">Lưu dữ liệu</button>
    </form>
    <?php
    // Nếu người dùng có bấm nút Lưu -> thì mới xử lý
    if( isset($_POST['btnLuu']) ) {
        // 1. Mở kết nối
        include_once __DIR__ . '/../dbconnect.php';
        // 2. Chuẩn bị câu lệnh
        $nsx_ten = $_POST['nsx_ten'];
        $nsx_mota = $_POST['nsx_mota'];

        $sql = "INSERT INTO nhasanxuat(nsx_ten, nsx_mota)
                VALUES ('$nsx_ten', '$nsx_mota');";
        // 3. Thực thi câu lệnh
        mysqli_query($conn, $sql);
        // 4. Chuyển trang về trang danh sách
        echo '<script>location.href = "index.php"</script>';
    }

    ?>
</body>
</html>