<?php
session_start();
include 'dbcon.php'; // Kết nối database

// Kiểm tra xem đã truyền mã đặt chỗ chưa
if (!isset($_GET['code'])) {
    echo "<h3>Mã đặt chỗ không hợp lệ.</h3>";
    exit;
}

$booking_code = trim($_GET['code']);

$query = "SELECT * FROM ticket WHERE booking_code = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$booking_code]);
$ticket = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$ticket) {
    echo "<h3>Không tìm thấy thông tin đặt chỗ.</h3>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin Check-in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }
        .container {
            margin-top: 80px;
            max-width: 600px;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center text-success">✅ Quý khách đã check-in thành công!</h2>
    <hr>
    <p><strong>Họ tên hành khách:</strong> <?= htmlspecialchars($ticket['passenger_name']) ?></p>
    <p><strong>Mã đặt chỗ:</strong> <?= htmlspecialchars($ticket['booking_code']) ?></p>
    <p><strong>Mã chuyến bay:</strong> <?= htmlspecialchars($ticket['flight_number']) ?></p>
    <p><strong>Số ghế:</strong> <?= htmlspecialchars($ticket['seat_number']) ?></p>
    <p><strong>Thời gian đặt vé:</strong> <?= htmlspecialchars($ticket['created_at']) ?></p>
    <div class="mt-4 text-center">
        <a href="index.php" class="btn btn-primary">🔙 Quay lại trang chủ</a>
    </div>
</div>
</body>
</html>
