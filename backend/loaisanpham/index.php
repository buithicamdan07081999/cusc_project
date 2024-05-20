<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Loại sản phẩm</title>
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
                <h1>Danh sách loại sản phẩm</h1>
                <?php
                // 1. Tạo kết nối
                include_once __DIR__ . '/../../dbconnect.php';

                // 2. Chuẩn bị câu lệnh SQL Query
                $sql = "SELECT *
                        FROM loaisanpham;";

                // 3. Yêu cầu PHP thực thi query
                $data = mysqli_query($conn, $sql);

                // 4. Phân tách dữ liệu
                $arrDanhSachLSP = [];
                while($row = mysqli_fetch_array($data, MYSQLI_ASSOC) ) {
                    $arrDanhSachLSP[] = array(
                        'lsp_ma' => $row['lsp_ma'],
                        'lsp_ten' => $row['lsp_ten'],
                        'lsp_mota' => $row['lsp_mota'],
                    );
                }
                //var_dump($arrDanhSachLSP);
                ?>

                <a href="create.php" class="btn btn-outline-primary">Thêm mới <i class="fa-solid fa-plus"></i></a>
                <table class="table table-hover table-bordered mt-3">
                    <tr>
                        <th>Mã LSP</th>
                        <th>Tên LSP</th>
                        <th>Mô tả LSP</th>
                        <th>Hành động</th>
                    </tr>
                    <?php foreach($arrDanhSachLSP as $lsp): ?>
                    <tr>
                        <td><?= $lsp['lsp_ma'] ?></td>
                        <td><?= $lsp['lsp_ten'] ?></td>
                        <td><?= $lsp['lsp_mota'] ?></td>
                        <td>
                    <a href="edit.php?lsp_ma=<?= $lsp['lsp_ma'] ?>" class="btn btn-warning">
                        Sửa <i class="fa-regular fa-pen-to-square"></i>
                    </a>

                    <a href="delete.php?lsp_ma=<?= $lsp['lsp_ma'] ?>" class="btn btn-danger">
                        Xóa <i class="fa-regular fa-trash-can"></i>
                    </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
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