<?php
session_start();
include('sidebar.php');
include_once('header.php');
include_once('../../model/connect.php');
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="Best Bootstrap Admin Dashboards">
	<meta name="author" content="Bootstrap Gallery" />
	<link rel="canonical" href="https://www.bootstrap.gallery/">
	<meta property="og:url" content="https://www.bootstrap.gallery">
	<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<meta property="og:site_name" content="Bootstrap Gallery">
	<link rel="shortcut icon" href="assets/images/favicon.svg">
	<link rel="stylesheet" href="../Admin/assets/css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<!-- Title -->
	<title>Bootstrap Admin Dashboards</title>


	<!-- *************
			************ Common Css Files *************
		************ -->

	<!-- Animated css -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Bootstrap font icons css -->
	<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">

	<!-- Main css -->
	<link rel="stylesheet" href="assets/css/main.min.css">


	<!-- *************
			************ Vendor Css Files *************
		************ -->

	<!-- Scrollbar CSS -->
	<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">

</head>

<body>

	<!-- Loading wrapper start -->
	<!-- <div id="loading-wrapper">
			<div class="spinner">
                <div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
            </div>
		</div> -->
	<div class="page-wrapper">
		<div class="main-container">

			<!-- Content wrapper scroll start -->
			<div class="content-wrapper-scroll">

				<!-- Content wrapper start -->
				<div class="content-wrapper">
                <?php
              include_once('../../Model/xuatdulieu.php');
					$obj = new database();

					$thanhvien = $obj->danhsachtheodoi();
					$thanhvien1 = $obj->danhsachthanhvien();

					// xử lý
					// thêm
					if (isset($_POST["btThem"])) {
						$MaTV = $_POST["MaTV"];
						$NgayTap = $_POST["NgayTap"];
						$GioVao = $_POST["GioVao"];
					
						// Kiểm tra sự tồn tại của MaTV
						$checkQuery = "SELECT COUNT(*) AS count FROM thanhvien WHERE MaTV = '$MaTV'";
						$result = $obj->xuatdulieu($checkQuery);
					
						if ($result[0]["count"] > 0) {
							// Nếu tồn tại MaTV, thêm vào lịch sử tập luyện
							$sql = "INSERT INTO theodoitapluyen (MaTV, NgayTap, GioVao) VALUES ('$MaTV', '$NgayTap', '$GioVao')";
							if ($obj->themsanpham($sql)) {
								echo "<script>alert('Ghi nhận thành công');window.location.href = 'theodoitapluyen.php';</script>";
							} else {
								echo "<script>alert('Thêm thất bại, vui lòng thử lại!');</script>";
							}
						} else {
							// Nếu không tồn tại MaTV
							echo "<script>alert('Mã Thành Viên không tồn tại!');</script>";
						}
					}
                  ?>
                
                <div class="card-body">
						<div class="table-responsive">
							<form method="post">
								<table class="table m-0">
									<thead>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#momodalthem">Ghi nhận lịch sử tập</button>
										<tr>
                                            <th>ID</th>
											<th>Mã Thành Viên</th>
											<th>Tên Viên</th>
											<th>Số điện thoại</th>
											<th>Ngày tập</th>
											<th>giờ vào</th>
							
											
										</tr>
									</thead>
									<tbody>

										<?php foreach ($thanhvien as $item): ?>
											<tr>
												<td><?= $item["ID"] ?></td>
												<td><?= $item["MaTV"] ?></td>
												<td><?= $item["TenTV"] ?></td>
												<td><?= $item["SoDTTV"] ?></td>
												<td><?= $item["NgayTap"] ?></td>
												<td><?= $item["GioVao"] ?></td>
											<?php endforeach; ?>


									</tbody>
								</table>
							</form>
						</div>
					</div>

                    <!-- themtheodoi -->
					<div class="modal fade" role="dialog" id="momodalthem">
    <div class="modal-dialog">
        <form method="POST" id="editCategoryForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center">Điểm danh</h3>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="MaTV" id="editMaTV">

                    <!-- Mã Thành Viên -->
                    <div class="mb-3">
                        <label for="editTenTV" class="form-label">Mã Thành Viên</label>
                        <input type="text" class="form-control" name="MaTV" id="editTenTV"
                               pattern="[A-Za-z0-9]+" title="Mã thành viên chỉ chứa ký tự chữ và số." required>
                    </div>

                    <!-- Ngày Tập -->
                   <!-- Ngày Tập -->
<div class="mb-3">
    <label for="editNgayTap" class="form-label">Ngày Tập</label>
    <input type="date" class="form-control" name="NgayTap" id="editNgayTap"
           value="<?php echo date('Y-m-d'); ?>" 
           max="<?php echo date('Y-m-d'); ?>" required>
</div>


                    <!-- Giờ Vào -->
                    <div class="mb-3">
                        <label for="editGioPhut" class="form-label">Giờ</label>
                        <input type="time" class="form-control" name="GioVao" id="editGioPhut"
                               value="<?php 
                                   date_default_timezone_set('Asia/Ho_Chi_Minh');
                                   echo date('H:i'); 
                               ?>" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    <button type="submit" name="btThem" class="btn btn-primary">Cập Nhật</button>
                </div>
            </div>
        </form>
    </div>
</div>






			    </div>
			<!-- Content wrapper end -->
            </div>
			<!-- App Footer start -->
			<div class="app-footer">
				<span>© Arise admin 2023</span>
			</div>
			<!-- App footer end -->

		</div>
		<!-- Content wrapper scroll end -->

	</div>
	<!-- *************
				************ Main container end *************
			************* -->

	</div>
	</form>
	<!-- Page wrapper end -->

	<!-- *************
			************ Required JavaScript Files *************
		************* -->
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/moment.js"></script>

	<!-- *************
			************ Vendor Js Files *************
		************* -->

	<!-- Overlay Scroll JS -->
	<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
	<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

	<!-- Main Js Required -->
	<script src="assets/js/main.js"></script>
	<!-- <script>
		function off() {
			document.getElementById("modal-them").style.display = "none";
		}

		function on() {
			document.getElementById("modal-them").style.display = "flex";
		}

		function off1() {
			document.getElementById("modal-sua").style.display = "none";
		}

		function on1() {
			document.getElementById("modal-sua").style.display = "flex";
		}
	</script> -->
<script>
	document.getElementById("editCategoryForm").addEventListener("submit", function (event) {
    const maTV = document.getElementById("editTenTV").value.trim();
    const gioVao = document.getElementById("editGioPhut").value.trim();
    const ngayTap = document.getElementById("editNgayTap").value.trim();

    if (!maTV || !/^[A-Za-z0-9]+$/.test(maTV)) {
        alert("Mã thành viên chỉ chứa ký tự chữ và số!");
        event.preventDefault();
        return;
    }

    if (!ngayTap) {
        alert("Ngày tập không được để trống!");
        event.preventDefault();
        return;
    }
	if (ngayTap > today) {
        alert("Ngày tập không được vượt quá ngày hiện tại!");
        event.preventDefault();
        return;
    }

    if (!gioVao) {
        alert("Giờ không được để trống!");
        event.preventDefault();
        return;
    }
});

</script>
</body>

</html>