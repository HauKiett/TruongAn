<?php
include('../../model/connect.php');
$db = new connect_database();
$conn = $db->connect();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm phiếu xuất</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="text-center mb-4">Thêm phiếu xuất kho</h3>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nguoinhan" class="form-label">Người nhận</label>
            <input type="text" name="nguoinhan" class="form-control" id="nguoinhan" required>
        </div>
        <div class="mb-3">
            <label for="diachi" class="form-label">Địa chỉ</label>
            <input type="text" name="diachi" class="form-control" id="diachi" required>
        </div>
        <div class="mb-3">
            <label for="lydo" class="form-label">Lý do</label>
            <input type="text" name="lydo" class="form-control" id="lydo">
        </div>
        <div class="mb-3">
            <label for="ngay" class="form-label">Ngày xuất</label>
            <input type="date" name="ngay" class="form-control" id="ngay" required>
        </div>

        <h5>Danh sách sản phẩm</h5>
        <div id="sp-list">
            <div class="row mb-2">
                <div class="col-md-5">
                    <input type="text" name="tensp[]" class="form-control" placeholder="Tên sản phẩm" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="soluong[]" class="form-control" placeholder="Số lượng" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="dongia[]" class="form-control" placeholder="Đơn giá" required>
                </div>
            </div>
        </div>
        <button type="button" onclick="themDong()" class="btn btn-secondary mb-3">+ Thêm sản phẩm</button>
        <br>
        <button type="submit" class="btn btn-primary">Lưu phiếu xuất</button>
    </form>
</div>

<script>
function themDong() {
    document.getElementById('sp-list').innerHTML += `
    <div class="row mb-2">
        <div class="col-md-5">
            <input type="text" name="tensp[]" class="form-control" placeholder="Tên sản phẩm" required>
        </div>
        <div class="col-md-3">
            <input type="number" name="soluong[]" class="form-control" placeholder="Số lượng" required>
        </div>
        <div class="col-md-3">
            <input type="number" name="dongia[]" class="form-control" placeholder="Đơn giá" required>
        </div>
    </div>`;
}
</script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Thêm phiếu xuất
    $stmt = $conn->prepare("INSERT INTO phieuxuat (nguoinhan, diachi, lydo, ngay) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['nguoinhan'], $_POST['diachi'], $_POST['lydo'], $_POST['ngay']);
    $stmt->execute();
    $id_phieu = $conn->insert_id;

    // Thêm sản phẩm chi tiết
    for ($i = 0; $i < count($_POST['tensp']); $i++) {
        $ten = $_POST['tensp'][$i];
        $sl = (int)$_POST['soluong'][$i];
        $dg = (int)$_POST['dongia'][$i];

        $stmt2 = $conn->prepare("INSERT INTO chitietphieuxuat (id_phieu, tensp, soluong, dongia) VALUES (?, ?, ?, ?)");
        $stmt2->bind_param("isii", $id_phieu, $ten, $sl, $dg);
        $stmt2->execute();

        $check = $conn->query("SELECT id FROM kho WHERE ten = '$ten'");
        if ($check->num_rows) {
            $sp = $check->fetch_assoc();
            $conn->query("UPDATE kho SET tonkho = tonkho - $sl WHERE id = {$sp['id']}");
        } else {
            $conn->query("INSERT INTO kho (ten, donvi, tonkho) VALUES ('$ten', 'cái', $sl)");
        }
    }

    // In phiếu
    echo "<script>location='export_pdf.php?id=$id_phieu'</script>";
}
?>
