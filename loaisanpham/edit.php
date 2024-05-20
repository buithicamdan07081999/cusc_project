<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sửa Loại sản phẩm</h1>
    <?php
    // 1. Mở kết nối
    include_once __DIR__ . '/../dbconnect.php';
    // 2. Chuẩn bị câu lệnh tìm dữ liệu cũ
    $lsp_ma = $_GET['lsp_ma'];
    $sqlSelectDuLieuCu = "
        SELECT *
        FROM loaisanpham
        WHERE lsp_ma = $lsp_ma;
    ";
    // 3. Thực thi
    $dataCu = mysqli_query($conn, $sqlSelectDuLieuCu);
    // 4. Phân tách dữ liệu thành mảng PHP
    $arrDuLieuCu = [];
    $arrDuLieuCu = mysqli_fetch_array($dataCu, MYSQLI_ASSOC);
    ?>
    <form name="frmSua" id="frmSua" method="post" action="">
        Tên loại sản phẩm: <input type="text" name="lsp_ten" 
            value="<?= $arrDuLieuCu['lsp_ten'] ?>"
        /><br />
        Mô tả loại sản phẩm: <input type="text" name="lsp_mota" 
            value="<?= $arrDuLieuCu['lsp_mota'] ?>"
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
        $lsp_ma = $_GET['lsp_ma'];
        $lsp_ten = $_POST['lsp_ten'];
        $lsp_mota = $_POST['lsp_mota'];

        $sql = "UPDATE loaisanpham
                SET lsp_ten = '$lsp_ten'
                    , lsp_mota = '$lsp_mota'
                WHERE lsp_ma = $lsp_ma;";
        // 3. Thực thi câu lệnh
        mysqli_query($conn, $sql);
        // 4. Chuyển trang về trang danh sách
        echo '<script>location.href = "index.php"</script>';
    }

    ?>
</body>
</html>