<?php
session_start();
include_once('../../Model/Modeldevice.php');
include('../../Controller/DeviceQL.php');

$obj = new deviceQL();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Thêm'])) {
    $tenTB = trim($_POST["tenTB"]);
    $idloaisp = $_POST["idloaisp"];
    $tinhtrang = $_POST["tinhtrang"];
    $gia = $_POST["gia"];
    $donvitinh = $_POST["donvitinh"];

    $folder = "./assets/img/device/";
    if (!is_dir($folder)) mkdir($folder, 0777, true);

    $name = $_FILES['myfile']['name'] ?? '';
    $tmp_name = $_FILES['myfile']['tmp_name'] ?? '';

    if ($name != '') {
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed_ext)) {
            echo "<script>alert('Chỉ được phép upload file ảnh jpg, jpeg, png, gif');</script>";
            exit;
        }
        $path = $folder . $name;
        if (!move_uploaded_file($tmp_name, $path)) {
            echo "<script>alert('Upload ảnh thất bại');</script>";
            exit;
        }
    } else {
        $name = ''; // Không có ảnh
    }

    if (empty($tenTB) || empty($tinhtrang) || empty($gia) || empty($donvitinh)) {
    } else {
        $sql = "INSERT INTO thietbi (TenTB, TinhTrangTB, idloaisp, Hinhanh, gia, donvitinh, mota, soLuong) 
                VALUES ('$tenTB', '$tinhtrang', '$idloaisp', '$name', '$gia', '$donvitinh', '', 0)";
        $obj->thuchien($sql);
        echo "<script>alert('Thêm thiết bị thành công!'); window.location.href='device.php';</script>";
        exit;
    }
}

include('sidebar.php');
include_once('header.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Thêm thiết bị</title>
    <link rel="stylesheet" href="assets/css/main.min.css">
</head>
<body>
    <div class="page-wrapper">
        <div class="main-container">
            <h3 class="text-center mb-4">Thêm thiết bị</h3>
            <form method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: auto;">
                <div class="mb-3">
                    <label for="tenTB" class="form-label">Tên thiết bị</label>
                    <input type="text" class="form-control" name="tenTB" id="tenTB" required>
                </div>

                <div class="mb-3">
                    <label for="idloaisp" class="form-label">Loại sản phẩm</label>
                    <select name="idloaisp" id="idloaisp" class="form-control" required>
                        <?php
                        $list = $obj->truyvan("SELECT * FROM loaisp");
                        foreach ($list as $row) {
                            echo "<option value='{$row['idloaisp']}'>{$row['tenloaisp']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tinhtrang" class="form-label">Tình trạng</label>
                    <select name="tinhtrang" id="tinhtrang" class="form-control" required>
                        <option value="Bình thường">Bình thường</option>
                        <option value="Bảo trì">Bảo trì</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="gia" class="form-label">Giá</label>
                    <input type="number" step="0.01" class="form-control" name="gia" id="gia" required>
                </div>

                <div class="mb-3">
                    <label for="donvitinh" class="form-label">Đơn vị tính</label>
                    <input type="text" class="form-control" name="donvitinh" id="donvitinh" required>
                </div>

                <div class="mb-3">
                    <label for="myfile" class="form-label">Ảnh thiết bị</label>
                    <input type="file" class="form-control" name="myfile" id="myfile" accept="image/*">
                </div>

                <button type="submit" name="Thêm" class="btn btn-primary">Thêm thiết bị</button>
            </form>
        </div>
    </div>
</body>
</html>
