<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách liên hệ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fc;
            padding: 30px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {    
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }
        th {
            background: green;
            color: #fff;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 text align = "center">📋 DANH SÁCH LIÊN HỆ </h1>
    <table>
        <tr>
            <th>Tên</th>
            <th>Email</th>
            <th>Tin nhắn</th>
        </tr>
        <?php
        $file = 'contact_log.txt';
        if (file_exists($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $data = [];
            for ($i = 0; $i < count($lines); $i++) {
                if (strpos($lines[$i], 'Tên:') === 0) {
                    $name = trim(substr($lines[$i], 5));
                    $email = trim(substr($lines[$i + 1], 7));
                    $message = trim(substr($lines[$i + 2], 9));
                    echo "<tr>
                            <td>" . htmlspecialchars($name) . "</td>
                            <td>" . htmlspecialchars($email) . "</td>
                            <td>" . htmlspecialchars($message) . "</td>
                          </tr>";
                    $i += 3;
                }
            }
        } else {
            echo "<tr><td colspan='3'>Không tìm thấy file contact_log.txt</td></tr>";
        }
        ?>
    </table>
</body>
</html>
