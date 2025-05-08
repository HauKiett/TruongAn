<?php
require "../Admin/assets/PHPMailer-master/src/PHPMailer.php"; 
require "../Admin/assets/PHPMailer-master/src/SMTP.php"; 
require '../Admin/assets/PHPMailer-master/src/Exception.php'; 
include_once('../../Model/quanlytapthu.php');

$obj = new dkytapthu();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["dkytap"])) {
    // Lấy thông tin người dùng
    $HoTen  = $_POST["name"];
    $SDT    = $_POST["phone"];
    $Email  = trim(strtolower($_POST['email']));
    $CanCuoc = $_POST["idCard"];
    $Thoigianlienlac = $_POST["Thoigianlienlac"];
    $DiaChi = $_POST["diachi"];
    
    // Thông tin sản phẩm (mảng)
    $TenSPs     = isset($_POST["tensp"]) ? $_POST["tensp"] : [];
    $Soluongs   = isset($_POST["soluong"]) ? $_POST["soluong"] : [];
    $Gias       = isset($_POST["gia"]) ? $_POST["gia"] : [];
    $Tongtiens  = isset($_POST["tongtien"]) ? $_POST["tongtien"] : [];
    
    $dsdkytap = $obj->dsdkytapthu();
    $ss = 0;

    // Kiểm tra trùng
    if ($dsdkytap) {
        foreach ($dsdkytap as $row) {
            if ($row["SDT"] == $SDT || $row["Email"] == $Email || $row["CanCuoc"] == $CanCuoc) {
                $ss = 1;
                break;
            }
        }
    }

    if ($ss == 0) {
        $ok_all = true;
        $noidung_email = "";
        $ngaylap = date("Y-m-d");

        // Lặp và thêm từng sản phẩm
        for ($i = 0; $i < count($TenSPs); $i++) {
            $tensp = $TenSPs[$i];
            $soluong = $Soluongs[$i];
            $gia = $Gias[$i];

            $sql = "INSERT INTO khtapthu (Hoten, SDT, Email, CanCuoc, tensp, soluong, gia, Thoigianlienlac, diachi, ngaylap)
                    VALUES ('$HoTen', '$SDT', '$Email', '$CanCuoc', '$tensp', '$soluong', '$gia', '$Thoigianlienlac', '$DiaChi', '$ngaylap')";

            if (!$obj->dkytapthu($sql)) {
                $ok_all = false;
                break;
            }

            // Gộp nội dung đơn hàng để gửi email
            $noidung_email .= "- $tensp | SL: $soluong | Giá: " . number_format($gia) . " đ<br>";
        }
        echo "<script>alert('Đặt hàng thành công!'); window.location='device.php';</script>";

        if ($ok_all) {
            // Gửi email
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            try {
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com'; 
                $mail->SMTPAuth = true; 
                $tennguoigui = 'Phòng Gym WarmGuys'; 
                $mail->Username = 'kietlacbox@gmail.com'; 
                $mail->Password = '159359azAZ'; 
                $mail->SMTPSecure = 'ssl';   
                $mail->Port = 465;              
                $mail->setFrom('kietlacbox@gmail.com', $tennguoigui); 
                $mail->addAddress($Email); 
                $mail->isHTML(true);  
                $mail->Subject = 'Xác nhận đặt hàng - Phòng Gym WarmGuys';      
                $mail->Body = "
                    Cảm ơn bạn đã đăng ký buổi tập thử tại WarmGuys.<br><br>
                    <b>Thông tin khách hàng:</b><br>
                    Họ và tên: $HoTen<br>
                    SĐT: $SDT<br>
                    Email: $Email<br>
                    CCCD: $CanCuoc<br>
                    Địa chỉ: $DiaChi<br>
                    Thời gian liên lạc: $Thoigianlienlac<br><br>
                    <b>Chi tiết đơn hàng:</b><br>
                    $noidung_email
                ";

                $mail->smtpConnect([
                    "ssl" => [
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true,
                    ],
                ]);
                $mail->send();
                
            } catch (Exception $e) {
                echo 'Không thể gửi email. Lỗi: ', $mail->ErrorInfo;
            }
        } else {
            echo "<script>alert('Thêm đơn hàng thất bại!'); window.location='thanhtoan.php';</script>";
        }

    } else {
        echo "<script>alert('Thông tin khách đã tồn tại!'); window.location='thanhtoan.php';</script>";
    }
}
