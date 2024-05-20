<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sửa Nhà sản xuất</h1>
    <?php
    // 1. Mở kết nối
    include_once __DIR__ . '/../dbconnect.php';
    // 2. Chuẩn bị câu lệnh tìm dữ liệu cũ
    $nsx_ma = $_GET['nsx_ma'];
    $sqlSelectDuLieuCu = "
        SELECT *
        FROM nhasanxuat
        WHERE nsx_ma = $nsx_ma;
    ";
    // 3. Thực thi
    $dataCu = mysqli_query($conn, $sqlSelectDuLieuCu);
    // 4. Phân tách dữ liệu thành mảng PHP
    $arrDuLieuCu = [];
    $arrDuLieuCu = mysqli_fetch_array($dataCu, MYSQLI_ASSOC);
    ?>
    <form name="frmSua" id="frmSua" method="post" action="">
        Tên Nhà sản xuất: <input type="text" name="nsx_ten" 
            value="<?= $arrDuLieuCu['nsx_ten'] ?>"
        /><br />
        Mô tả Nhà sản xuất: <input type="text" name="nsx_mota" 
            value="<?= $arrDuLieuCu['nsx_mota'] ?>"
        /><br />

        <a href="index.php">Quay về Danh sách</a>
        <button type="submit" name="btnLuu">Lưu dữ liệu</button>
    </form>
    <?php
    // Nếu người dùng có bấm nút Lưu -> thì mới xử lý
    if( isset($_POST['btnLuu']) ) {
        // 1. Mở kết nối
        include_once __DIR__ . '/../dbconnect.php';
        // 2. Chuẩn bị câu lệnh
        $nsx_ma = $_GET['nsx_ma'];
        $nsx_ten = $_POST['nsx_ten'];
        $nsx_mota = $_POST['nsx_mota'];

        $sql = "UPDATE nhasanxuat
                SET nsx_ten = '$nsx_ten'
                    , nsx_mota = '$nsx_mota'
                WHERE nsx_ma = $nsx_ma;";
        // 3. Thực thi câu lệnh
        mysqli_query($conn, $sql);
        // 4. Chuyển trang về trang danh sách
        echo '<script>location.href = "index.php"</script>';
    }

    ?>
</body>
</html>