<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
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
                <h1>Danh sách sản phẩm</h1>
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