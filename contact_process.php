<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra nếu dữ liệu được gửi đi
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Kiểm tra email hợp lệ
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email không hợp lệ!'); window.location.href = 'contact.php';</script>";
        exit;
    }

    // Kiểm tra xem form có nhận dữ liệu không (Ghi vào file log)
    $logFile = "contact_log.txt";
    $logData = "Tên: $name\nEmail: $email\nTin nhắn: $message\n-------------------\n";
    file_put_contents($logFile, $logData, FILE_APPEND);

    // Kiểm tra xem file log có được ghi chưa
    if (file_exists($logFile)) {
        echo "<script>alert('Yêu cầu của bạn đã được ghi nhận! Kiểm tra file contact_log.txt'); window.location.href = 'contact.php';</script>";
    } else {
        echo "<script>alert('Lỗi khi ghi dữ liệu. Vui lòng thử lại!'); window.location.href = 'contact.php';</script>";
    }
}
?>
