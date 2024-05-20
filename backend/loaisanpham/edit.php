<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Loại sản phẩm</title>
    <?php
    include_once __DIR__ . '/../layouts/partials/styles.php';
    ?>
</head>
<body>
    <?php
    include_once __DIR__ . '/../layouts/partials/header.php';
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php
                include_once __DIR__ . '/../layouts/partials/sidebar.php';
                ?>
            </div>
            <div class="col-9">
                <h1>Sửa Loại sản phẩm</h1>
                <?php
                // 1. Mở kết nối
                include_once __DIR__ . '/../../dbconnect.php';
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
                        value="<?= $arrDuLieuCu['lsp_ten'] ?>" class="form-control"
                    /><br />
                    Mô tả loại sản phẩm: <input type="text" name="lsp_mota" 
                        value="<?= $arrDuLieuCu['lsp_mota'] ?>" class="form-control"
                    /><br />

                    <a href="index.php" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-arrow-left"></i> Quay về Danh sách
                    </a>
                    <button type="submit" name="btnLuu" class="btn btn-primary">
                        Lưu dữ liệu <i class="fa-regular fa-floppy-disk"></i>
                    </button>
                </form>
                <?php
                // Nếu người dùng có bấm nút Lưu -> thì mới xử lý
                if( isset($_POST['btnLuu']) ) {
                    // 1. Mở kết nối
                    include_once __DIR__ . '/../../dbconnect.php';
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
            </div>
        </div>
    </div>

    <?php
    include_once __DIR__ . '/../layouts/partials/footer.php';
    ?>

    <?php
    include_once __DIR__ . '/../layouts/partials/scripts.php';
    ?>
</body>
</html>