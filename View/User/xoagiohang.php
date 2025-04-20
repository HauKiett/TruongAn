<?php
session_start();

if (isset($_GET['index'])) {
    $index = intval($_GET['index']);
    if (isset($_SESSION['giohang'][$index])) {
        unset($_SESSION['giohang'][$index]);
        $_SESSION['giohang'] = array_values($_SESSION['giohang']); // Sắp xếp lại key
    }
}

header("Location: xemgiohang.php");
exit();
?>
