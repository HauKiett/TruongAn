<?php
session_start();

// Lấy thông tin sản phẩm từ URL
if (isset($_GET['TenTB']) && isset($_GET['gia']) && isset($_GET['soluong']) && isset($_GET['Hinhanh'])) {
    $TenTB = $_GET['TenTB'];
    $gia = $_GET['gia'];
    $soluong = intval($_GET['soluong']);
    $Hinhanh = $_GET['Hinhanh'];

    // Khởi tạo giỏ hàng nếu chưa có
    if (!isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = [];
    }

    $found = false;

    // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng thì cộng số lượng
    foreach ($_SESSION['giohang'] as &$item) {
        if ($item['TenTB'] === $TenTB) {
            $item['soluong'] += $soluong;
            $found = true;
            break;
        }
    }

    // Nếu chưa có thì thêm mới
    if (!$found) {
        $_SESSION['giohang'][] = [
            'TenTB' => $TenTB,
            'gia' => $gia,
            'soluong' => $soluong,
            'Hinhanh' => $Hinhanh
        ];
    }

    // Chuyển hướng về trang hiển thị giỏ hàng
    header("Location: xemgiohang.php");
    exit();
} else {
    echo "Thiếu dữ liệu sản phẩm.";
}
?>
