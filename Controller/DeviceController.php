<?php
    include_once("../../Model/connect.php");
    class device extends connect_database{
        public function selectalldevice($sql){
            $link = $this->connect();
            $ketqua = mysqli_query($link, $sql);
            $i = mysqli_num_rows($ketqua);
            if($i>0){
                echo '<table class="table m-0">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên sản phẩm</th>
                                <th>Giá</th>
								<th>Tình trạng</th>
                                <th>Số lượng</th>
								<th>Hình ảnh</th>
                                <th>Tùy Chỉnh</th>
							</tr>
						</thead>';
                    $dem=1;
                    while($row = mysqli_fetch_array($ketqua)){
                        $idtb = $row['MaTB'];
                        $tenTB = $row['TenTB'];
                        $gia = $row['gia'];
                        $tingtrang = $row['TinhTrangTB'];
                        $soluong = $row['soLuong'];
                        $hinh = $row['Hinhanh'];
                        echo '
                            <tbody>
								<tr>
									<td style="padding-top: 18px;">'.$dem.'</td>
									<td style="padding-top: 18px;">'.$tenTB.'</td>
                                    <td style="padding-top: 18px;">'.$gia.'</td>
									<td style="padding-top: 18px;">'.$tingtrang.'</td>
                                    <td style="padding-top: 18px;">'.$soluong.'</td>
									<td>
	                                    <img src="./assets/img/device/'.$hinh.'" alt="" width="50px" height="50px">
                                    </td>
                                    <form action=""   method="post">
									    <td> 
                                            <a href="../../View/Admin/updateDevice.php?id='.$idtb.'" class="btn btn-outline-success h-100">Sửa</a>
                                            <button type="submit" value='.$idtb.'  name="nutXoa" class="btn btn-outline-danger" onclick="return confirmDelete()">Xóa</button>

                                        </td>
                                    </form>
								</tr>
                            </tbody>';
                        $dem++;
                    }
                    echo '</table>';
            }else{
                echo 'Đang cập nhật dữ liệu';
            }
        }


        public function selectdsghinhan($sql){
            $link = $this->connect();
            $ketqua = mysqli_query($link, $sql);
            $i = mysqli_num_rows($ketqua);
            if($i>0){
                echo '<table class="table m-0">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên thiết bị</th>
								<th>Mô tả tình trạng</th>
								<th>Nhân viên ghi nhận</th>
								<th>Ngày ghi nhận</th>
								<th>Thời gian ghi nhận</th>
                                <th>Trạng thái</th>
							</tr>
						</thead>';
                    $dem=1;
                    while($row = mysqli_fetch_array($ketqua)){
                        $id = $row['ID'];
                        $idTB = $row['MaTB'];
                        $tenTB = $row['TenTB'];
                        $mota = $row['Motatinhtrang'];
                        $ngay = $row['Ngayghinhan'];
                        $gio = $row['Time'];
                        $tenNV = $row['TenNV'];
                        $trangthai = ($row['trangthai']!="Chưa bảo trì")?
                        ' <a href="" class="btn btn-outline-success h-100">Đã bảo trì</a>':
                            ' <a href="../../View/Admin/formBaotriTB.php?id='.$id.'&idTB='.$idTB.'" class="btn btn-outline-warning h-100">Chưa bảo trì</a>';
                        echo '
                            <tbody>
								<tr>
									<td style="padding-top: 18px;">'.$dem.'</td>
									<td style="padding-top: 18px;">'.$tenTB.'</td>
									<td style="padding-top: 18px;">'.$mota.'</td>
									<td style="padding-top: 18px;">'.$tenNV.'</td>
									<td style="padding-top: 18px;">'.$ngay.'</td>
									<td style="padding-top: 18px;">'.$gio.'</td>
                                    <td>
                                        '.$trangthai.'
                                    </td>
								</tr>
                            </tbody>';
                        $dem++;
                    }
                    echo '</table>';
            }else{
                echo 'Đang cập nhật dữ liệu';
            }
        }



        // public function selectDsBaotriTB($sql){
        //     $link = $this->connect();
        //     $ketqua = mysqli_query($link, $sql);
        //     $i = mysqli_num_rows($ketqua);
        //     if($i>0){
        //         echo '<table class="table m-0">
		// 				<thead>
		// 					<tr>
		// 						<th>STT</th>
		// 						<th>Tên thiết bị</th>
		// 						<th>Nhân viên bảo trì</th>
		// 						<th>Mô tả bảo trì</th>
		// 						<th>Giải Pháp</th>
		// 						<th>Ngày bảo trì</th>
        //                         <th>Kết quả</th>
		// 					</tr>
		// 				</thead>';
        //             $dem=1;
        //             while($row = mysqli_fetch_array($ketqua)){
        //                 $tenTB = $row['TenTB'];
        //                 $mota = $row['Motabaotri'];
        //                 $ngaybaotri = $row['Ngaybaotri'];
        //                 $giaiphap = $row['GiaiPhap'];
        //                 $ketqua = $row['KetQua'];
        //                 $tenNV = $row['TenNV'];
        //                 echo '
        //                     <tbody>
		// 						<tr>
		// 							<td style="padding-top: 18px;">'.$dem.'</td>
		// 							<td style="padding-top: 18px;">'.$tenTB.'</td>
		// 							<td style="padding-top: 18px;">'.$tenNV.'</td>
		// 							<td style="padding-top: 18px;">'.$mota.'</td>
		// 							<td style="padding-top: 18px;">'.$giaiphap.'</td>
		// 							<td style="padding-top: 18px;">'.$ngaybaotri.'</td>
		// 							<td style="padding-top: 18px;">'.$ketqua.'</td>
		// 						</tr>
        //                     </tbody>';
        //                 $dem++;
        //             }
        //             echo '</table>';
        //     }else{
        //         echo 'Đang cập nhật dữ liệu';
        //     }
        // }
        public function selectDsBaotriTB($sql) {
            $link = $this->connect();
            $result = mysqli_query($link, $sql);
            if (!$result) {
                echo 'Lỗi truy vấn dữ liệu: ' . mysqli_error($link);
                return;
            }
        
            if (mysqli_num_rows($result) > 0) {
                echo '<table class="table m-0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên thiết bị</th>
                                <th>Nhân viên bảo trì</th>
                                <th>Mô tả bảo trì</th>
                                <th>Giải Pháp</th>
                                <th>Ngày bảo trì</th>
                                <th>Kết quả</th>
                            </tr>
                        </thead>
                        <tbody>';
                $stt = 1; 
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                            <td>' . $stt . '</td>
                            <td>' . htmlspecialchars($row['TenTB']) . '</td>
                            <td>' . htmlspecialchars($row['TenNV']) . '</td>
                            <td>' . htmlspecialchars($row['Motabaotri']) . '</td>
                            <td>' . htmlspecialchars($row['GiaiPhap']) . '</td>
                            <td>' . htmlspecialchars($row['Ngaybaotri']) . '</td>
                            <td>' . htmlspecialchars($row['KetQua']) . '</td>
                          </tr>';
                    $stt++;
                }
                echo '</tbody></table>';
            } else {
                echo 'Không có dữ liệu trong danh sách.';
            }
        }
        
        
}
?>

