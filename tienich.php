<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>QR Code</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #0d2b45;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: white;
            font-family: sans-serif;
            flex-direction: column;
        }

        .loader {
            border: 6px solid #f3f3f3;
            border-radius: 50%;
            border-top: 6px solid #3498db;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
        }

        #content {
            display: none;
            text-align: center;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="loader"></div>
    <div id="content">
        <h1 style=" font-size: 100px;">Chào bạn! ✨</h1>
        <h1>Chào mừng bạn đến với các tiện ích của chúng tôi.</p>
        <h1>Để hỗ trợ nhu cầu của bạn, chúng tôi có thể giúp bạn Đặt Phòng Khách Sạn và Thuê xe Du Lịch </h1>
        <button style="width:  100px; height: 50px;"><a href="dichvu.php"><b>Đặt Phòng</b> </a></button><br><br><br>
        <button style="width:  100px; height: 50px;"><a href="thuexe.php"><b>Thuê Xe </b> </a></button><br><br><br>

    </div>

    <script>
        // Sau 2 giây, ẩn spinner và hiện nội dung
        setTimeout(function () {
            document.querySelector('.loader').style.display = 'none';
            document.getElementById('content').style.display = 'block';
        }, 2000); // 2000 = 2 giây
    </script>
</body>
</html>
