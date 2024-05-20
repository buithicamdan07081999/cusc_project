<?php
// 1. Mở kết nối
include_once __DIR__ . '/../../dbconnect.php';
// 2. Chuẩn bị câu lệnh
$lsp_ma = $_GET['lsp_ma'];

$sql = "DELETE FROM loaisanpham
        WHERE lsp_ma = $lsp_ma";

// 3. Thực thi câu lệnh
mysqli_query($conn, $sql);
// 4. Chuyển trang về trang danh sách
echo '<script>location.href = "index.php"</script>';
?>