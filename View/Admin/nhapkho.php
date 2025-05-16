<?php
session_start();
error_reporting(1);
include_once('../../Model/Modeldevice.php');
include_once('../../Controller/DeviceQL.php');
$obj = new deviceQL();
include('sidebar.php');
include_once('header.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nhập kho thiết bị</title>
    <link rel="stylesheet" href="assets/css/main.min.css">
</head>
<body>
    <div class="page-wrapper">
        <div class="main-container">
            <h3 class="text-center mb-4">Nhập kho</h3>
            <form method="POST" style="max-width: 600px; margin: auto;">
                <div class="mb-3">
                    <label class="form-label">Chọn thiết bị:</label>
                    <select name="MaTB" class="form-control" required>
                        <?php
                        $list = $obj->truyvan("SELECT * FROM thietbi");
                        foreach ($list as $row) {
                            echo "<option value='{$row['MaTB']}'>{$row['TenTB']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Người nhập:</label>
                    <input type="text" class="form-control" name="nguoi_nhap"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Số lượng nhập:</label>
                    <input type="number" class="form-control" name="soluong" min="1" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ngày nhập:</label>
                    <input type="date" class="form-control" name="ngay_nhap" value="<?= date('Y-m-d') ?>" required>
                </div>

                <button type="submit" name="nhapkho" class="btn btn-primary">Nhập kho</button>
            </form>
        </div>
    </div>
</body>
</html>
