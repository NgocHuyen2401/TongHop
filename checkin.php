<?php
session_start();
include 'dbcon.php'; // Kết nối database

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_code = trim($_POST['booking_code']);

    // Kiểm tra xem mã đặt chỗ có tồn tại không
    $query = "SELECT * FROM ticket WHERE booking_code = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$booking_code]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Cập nhật trạng thái check-in
        $update_query = "UPDATE tickets  SET checked_in = 1 WHERE booking_code = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->execute([$booking_code]);

        header("Location: checkin_success.php?code=" . urlencode($booking_code));
        exit;
    } else {
        $message = "<div class='alert alert-danger text-center'>❌ Mã đặt chỗ không hợp lệ! Vui lòng thử lại.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check-in Chuyến Bay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f4f4f4;
        }
        .container {
            margin-top: 80px;
            max-width: 500px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">🛫 Check-in Chuyến Bay</h2>
        <hr>
        <?php echo $message; ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nhập mã đặt chỗ:</label>
                <input type="text" class="form-control" name="booking_code" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Check-in</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
