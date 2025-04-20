<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuê Xe Du Lịch</title>
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
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thuê Xe Du Lịch</h2>
        <form>
            <label for="name">Họ và Tên:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="phone">Số Điện Thoại:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="pickup">Ngày Nhận Xe:</label>
            <input type="date" id="pickup" name="pickup" required>
            
            <label for="dropoff">Ngày Trả Xe:</label>
            <input type="date" id="dropoff" name="dropoff" required>
            
            <label for="car">Loại Xe:</label>
            <select id="car" name="car">
                <option value="sedan">Sedan</option>
                <option value="suv">SUV</option>
                <option value="van">Xe Van</option>
            </select>
            
            <button type="submit">Thuê Xe Ngay</button>
        </form>
    </div>
</body>
</html>
