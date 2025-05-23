<?php 
session_start();
include('sidebar.php');
include_once('header.php');
$idSua = 1;
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

		<!-- Title -->
		<title>Bootstrap Admin Dashboards</title>
		<!-- Animated css -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Bootstrap font icons css -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css">
		<!-- Main css -->
		<link rel="stylesheet" href="assets/css/main.min.css">
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css">
		<style>
		.btn-loc {
            background-color: green;
            width: 100px;
			color: white;
        }	
		.date{
			float: left;
			padding-left:50px
		}
		</style>

	</head>

	<body>

		<div class="page-wrapper">
			<div class="main-container">
			<?php
			
            include('../../model/quanlydoanhthu.php');
			$obj = new hoadontt();
            if (isset($_POST['subngay'])) {
    $from = $_POST['tungay'];
    $to = $_POST['denngay'];
    $hoadon = $obj->danhsachhoadontt_theongay($from, $to);
} else {
    $hoadon = $obj->danhsachhoadontt();
}
			$tong=0;
			if ($hoadon) {
            echo '    <div class="row" style="margin-left: 10px;">
							<div class="col-12">
							<h4>Thống kê doanh thu</h4>
								<div class="card">
								<form method="Post">
<div class="card col-8">
    <div class="card col-8 date" style="display: inline-block; margin-left:20px;">Từ ngày &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đến ngày</div>
	<div class="card col-8 date" style="display: inline-block; margin-left:20px;">
	<input type="date" name="tungay" id="tungay" required style="display: flex; width: 150px; float:left;"> 
	<input type="date" name="denngay" id="denngay" required style="display: flex; width: 150px;margin-left:10px ;float:left;">
	<input type="submit" name="subngay" value="Thống kê" style="margin-left:10px ; width: 100px; background-color:#99999 ; border-color: green; border-radius: 2px;">
	</div>
</div>	
</form>
											</form method="post">
											
										</div>
										
									<div class="card-body">
										<div class="table-responsive">
											<table class="table m-0">
												<thead>
													<tr>
														<th>Mã hóa đơn</th>
														<th>Tên sản phẩm</th>
														<th>Ngày lập</th>
														<th>Số Lượng</th>	
														<th>Giá</th>
														<th>Tổng Giá</th>
													</tr>
												</thead>
												<tbody>';
			for ($i = 0; $i < count($hoadon); $i++) {
				$tong+=($hoadon[$i]["gia"]*$hoadon[$i]["soluong"]);
							echo                       '<tr>
														<td>'.$hoadon[$i]["ID"].'</td>
														<td>'.$hoadon[$i]["tensp"].'</td>
														<td>'.$hoadon[$i]["ngaylap"].'</td>
														<td>'.$hoadon[$i]["soluong"].'</td>
														<td>'.$hoadon[$i]["gia"].'</td>	
														<td>'.$hoadon[$i]["gia"]*$hoadon[$i]["soluong"].'</td>														
													</tr>
                                                    ';}
                echo '
						<tr>
														<td></td>
                                                        <td></td>
														<td></td>
														<td></td>
														<td></td>
                                                        <td>Tổng : '.number_format($tong).' VND</td>
													</tr>
				</tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>'; }
			else {
				echo '    <div class="row" style="margin-left: 10px;">
				<div class="col-12">
				<h4>Thống kê doanh thu</h4>
					<div class="card">
					<form method="Post">
<div class="card col-8">
<div class="card col-8 date" style="display: inline-block; margin-left:20px;">Từ ngày &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đến ngày</div>
<div class="card col-8 date" style="display: inline-block; margin-left:20px;">
<input type="date" name="tungay" id="tungay" required style="display: flex; width: 150px; float:left;"> 
<input type="date" name="denngay" id="denngay" required style="display: flex; width: 150px;margin-left:10px ;float:left;">
<input type="submit" name="subngay" value="Thống kê" style="margin-left:10px ; width: 100px; background-color:#99999 ; border-color: green; border-radius: 2px;">
</div>
</div>	
</form>
								</form method="post">
								
							</div>
							
						<div class="card-body">
							<div class="table-responsive">
								<table class="table m-0">
									<thead>
										<tr>
											<th>Mã KH</th>
														<th>Họ và tên</th>
														<th>Số điện thoại</th>
														<th>Email</th>
														<th>Số Tên sản phẩm</th>
														<th>Phương thức thanh toán</th>
														<th>Địa chỉ</th>
														<th>Ngày lập</th>
														<th>Số Giá</th>
										</tr>
									</thead>
									<tbody>';
	echo '
			<tr>
											<td>Không có hóa đơn được lập trong ngày thống kê</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										
										</tr>
	</tbody>
			</table>
		</div>
	</div>
</div>
</div>'; 	}
			?>
		<!-- Page wrapper end -->


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

		<!-- Apex Charts -->
		<script src="assets/vendor/apex/apexcharts.min.js"></script>
		<script src="assets/vendor/apex/custom/sales/salesGraph.js"></script>
		<script src="assets/vendor/apex/custom/sales/revenueGraph.js"></script>
		<script src="assets/vendor/apex/custom/sales/taskGraph.js"></script>

		<!-- Main Js Required -->
		<script src="assets/js/main.js"></script>
<?php


// Biểu đồ doanh thu theo ngày
$doanhthuByDate = [];
for ($i = 0; $i < count($hoadon); $i++) {
    $ngay = $hoadon[$i]["ngaylap"];
    $tien = $hoadon[$i]["gia"] * $hoadon[$i]["soluong"];
    if (!isset($doanhthuByDate[$ngay])) {
        $doanhthuByDate[$ngay] = 0;
    }
    $doanhthuByDate[$ngay] += $tien;
}
$labels = json_encode(array_keys($doanhthuByDate));
$values = json_encode(array_values($doanhthuByDate));
?>

<div style="display: flex; gap: 20px; justify-content: space-between; padding: 10px 20px;">
  <!-- Biểu đồ cột -->
  <div style="flex: 2; border: 1px solid #ccc; padding: 10px; border-radius: 8px;">
    <div id="chart-bar" style="height: 300px;"></div>
  </div>

  <!-- Biểu đồ tròn -->
  <div style="flex: 1; border: 1px solid #ccc; padding: 10px; border-radius: 8px;">
    <div id="chart-pie" style="height: 300px;"></div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Bar chart
    var optionsBar = {
        chart: { type: 'bar', height: 300 },
        series: [{ name: 'Doanh thu', data: <?= $values ?? '[]' ?> }],
        xaxis: { categories: <?= $labels ?? '[]' ?> },
        title: { text: 'Biểu đồ doanh thu theo ngày', align: 'center' }
    };
    new ApexCharts(document.querySelector("#chart-bar"), optionsBar).render();

    // Pie chart
    var optionsPie = {
        chart: { type: 'pie', height: 300 },
        series: <?= $values ?? '[]' ?>,
        labels: <?= $labels ?? '[]' ?>,
        title: { text: 'Tỷ trọng doanh thu', align: 'center' }
    };
    new ApexCharts(document.querySelector("#chart-pie"), optionsPie).render();
});
</script>






		
	</body>
</html>