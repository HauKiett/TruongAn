<?php
require_once(__DIR__ . '/fpdf/fpdf.php');
include('../../model/connect.php'); 
$db = new connect_database();
$conn = $db->connect();

$id = (int)$_GET['id'];
$phieu = $conn->query("SELECT * FROM phieuxuat WHERE id=$id")->fetch_assoc();
$ct = $conn->query("SELECT * FROM chitietphieuxuat WHERE id_phieu=$id");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'PHIEU XUAT KHO', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(100, 10, 'Nguoi nhan: ' . $phieu['nguoinhan'], 0, 1);
$pdf->Cell(100, 10, 'Dia chi: ' . $phieu['diachi'], 0, 1);
$pdf->Cell(100, 10, 'Ly do: ' . $phieu['lydo'], 0, 1);
$pdf->Cell(100, 10, 'Ngay: ' . $phieu['ngay'], 0, 1);

$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 8, 'STT', 1);
$pdf->Cell(70, 8, 'Ten san pham', 1);
$pdf->Cell(20, 8, 'SL', 1);
$pdf->Cell(30, 8, 'Don gia', 1);
$pdf->Cell(30, 8, 'Thanh tien', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
$stt = 1;
$tong = 0;
while ($r = $ct->fetch_assoc()) {
    $tt = $r['soluong'] * $r['dongia'];
    $tong += $tt;
    $pdf->Cell(10, 8, $stt++, 1);
    $pdf->Cell(70, 8, $r['tensp'], 1);
    $pdf->Cell(20, 8, $r['soluong'], 1);
    $pdf->Cell(30, 8, $r['dongia'], 1);
    $pdf->Cell(30, 8, $tt, 1);
    $pdf->Ln();
}

$pdf->Cell(130, 8, 'Tong cong', 1);
$pdf->Cell(30, 8, $tong, 1);
$pdf->Output();
