<?php
session_start();
if (!$_SESSION["dangnhapKH"])
    header("Location:dangky.php");
include("header.php");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; margin: 0; padding: 40px; }
        table { width: 90%; margin: auto; background: white; border-collapse: collapse; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        th, td { padding: 16px; text-align: center;}
        th { background: #f0f4fa; color: #0e2d5c; font-size: 14px; }
        td img { width: 100px; }
        .ten-sp { font-weight: bold; color: #0e2d5c; }
        .btn-xoa { color: #007bff; text-decoration: none; display: block; margin-top: 8px; }
        .so-luong { display: flex; justify-content: center; align-items: center; gap: 10px; }
        .so-luong input { width: 40px; text-align: center; }
        .btn-control { padding: 5px 10px; font-weight: bold; background: #ddd; border: none; cursor: pointer; }
        .footer { width: 90%; margin: 20px auto; text-align: right; }
        .tong-tien { font-weight: bold; color: #0e2d5c; font-size: 18px; }
        .btn-submit {
            padding: 10px 25px;
            background: #3399ff;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }

    </style>
</head>
<body>
<main>
<section class="team-area fix section-padding30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55">
                            <br>
                            <h2 >Giỏ hàng của bạn - Vật tư phụ trợ hệ M&E</h2>
                        </div>
                    </div>
                </div>
            </div>
            </section>
    </main>
    <h2>GIỎ HÀNG</h2>
    <?php if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>Thông tin chi tiết sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Tổng giá</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tongtien = 0;
            foreach ($_SESSION['giohang'] as $index => $item):
                $thanhtien = $item['gia'] * $item['soluong'];
                $tongtien += $thanhtien;
            ?>
            <tr>
                <td style="text-align: left;">
                    <img src="../Admin/assets/img/device/<?php echo htmlspecialchars($item['Hinhanh']); ?>" alt="">
                    <div style="display:inline-block; vertical-align: top; margin-left: 15px;">
                        <div class="ten-sp"><?php echo htmlspecialchars($item['TenTB']); ?></div>
                        <div style="font-size: 14px; margin-top: 4px;">Thương hiệu: Trường An Group</div>
                        <a href="xoagiohang.php?index=<?php echo $index; ?>" class="btn-xoa">Xóa</a>
                    </div>
                </td>
                <td style="color:#3399ff;">
                    <span class="gia" data-gia="<?php echo $item['gia']; ?>"><?php echo number_format($item['gia']); ?> đ</span>
                </td>
                <td>
                    <div class="so-luong">
                        <button type="button" class="btn-control" onclick="giam(<?php echo $index; ?>)">-</button>
                        <input type="number" id="qty-<?php echo $index; ?>" value="<?php echo $item['soluong']; ?>" min="1" onchange="capnhatDong(<?php echo $index; ?>)">
                        <button type="button" class="btn-control" onclick="tang(<?php echo $index; ?>)">+</button>
                    </div>
                </td>
                <td style="color:#3399ff;">
                    <span id="thanhtien-<?php echo $index; ?>"><?php echo number_format($thanhtien); ?> đ</span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="footer">
        <div class="tong-tien">Tổng tiền: <span id="tong-tien"><?php echo number_format($tongtien); ?> đ</span></div>
                <br><br>
                <a href="index.php" class="btn-submit" style="background: #ccc; color: #000;">QUAY LẠI</a>
                <button type="button" class="btn-submit" onclick="thanhToan()">THANH TOÁN</button>

    </div>
    <?php else: ?>
        <p style="text-align:center;">Giỏ hàng trống.</p>
    <?php endif;
    include("footer.php");
    ?>

    <script>
        function tang(index) {
            const qty = document.getElementById("qty-" + index);
            qty.value = parseInt(qty.value) + 1;
            capnhatDong(index);
        }

        function giam(index) {
            const qty = document.getElementById("qty-" + index);
            if (parseInt(qty.value) > 1) {
                qty.value = parseInt(qty.value) - 1;
                capnhatDong(index);
            }
        }

        function capnhatDong(index) {
            const qty = document.getElementById("qty-" + index);
            const gia = document.querySelectorAll(".gia")[index].getAttribute("data-gia");
            const thanhTien = parseInt(qty.value) * parseInt(gia);
            document.getElementById("thanhtien-" + index).innerText = formatCurrency(thanhTien) + " đ";
            capnhatTongTien();
        }

        function capnhatTongTien() {
            let tong = 0;
            <?php foreach ($_SESSION['giohang'] as $index => $item): ?>
                let qty<?php echo $index; ?> = parseInt(document.getElementById("qty-<?php echo $index; ?>").value);
                let gia<?php echo $index; ?> = <?php echo $item['gia']; ?>;
                tong += qty<?php echo $index; ?> * gia<?php echo $index; ?>;
            <?php endforeach; ?>
            document.getElementById("tong-tien").innerText = formatCurrency(tong) + " đ";
        }

        function formatCurrency(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        function thanhToan() {
        let query = "";
        <?php foreach ($_SESSION['giohang'] as $index => $item): ?>
            const soluong<?php echo $index; ?> = document.getElementById("qty-<?php echo $index; ?>").value;
            const tongtien<?php echo $index; ?> = soluong<?php echo $index; ?> * <?php echo $item['gia']; ?>;

            query += "&Hinhanh<?php echo $index; ?>=" + encodeURIComponent("<?php echo "../Admin/assets/img/device/" . $item['Hinhanh']; ?>");
            query += "&TenTB<?php echo $index; ?>=" + encodeURIComponent("<?php echo $item['TenTB']; ?>");
            query += "&gia<?php echo $index; ?>=" + encodeURIComponent("<?php echo $item['gia']; ?>");
            query += "&soluong<?php echo $index; ?>=" + encodeURIComponent(soluong<?php echo $index; ?>);
            query += "&tongtien<?php echo $index; ?>=" + encodeURIComponent(tongtien<?php echo $index; ?>);
        <?php endforeach; ?>
        window.location.href = "thanhtoan.php?" + query.slice(1);
    }
    </script>
</body>
</html>
