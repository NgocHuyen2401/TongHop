<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Phòng Khách Sạn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đặt Phòng Khách Sạn</h2>
        <form>
            <label for="name">Họ và Tên:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="checkin">Ngày Nhận Phòng:</label>
            <input type="date" id="checkin" name="checkin" required>
            
            <label for="checkout">Ngày Trả Phòng:</label>
            <input type="date" id="checkout" name="checkout" required>
            
            <label for="room">Loại Phòng:</label>
            <select id="room" name="room">
                <option value="standard">Tiêu chuẩn</option>
                <option value="deluxe">Cao cấp</option>
                <option value="suite">Suite</option>
            </select>
            
            <button type="submit">Đặt Phòng</button>
        </form>
    </div>
</body>
</html>
