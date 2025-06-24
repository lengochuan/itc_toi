<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng bạn </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
            text-align: center;
        }

        .welcome-container {
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .welcome-container h1 {
            color: #28a745; /* Màu xanh lá cây cho thông báo thành công */
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        .welcome-container p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .welcome-container strong {
            color: #007bff; /* Màu xanh dương cho tên người dùng */
        }

        .logout-button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #dc3545; /* Màu đỏ cho nút đăng xuất */
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Đăng nhập thành công!</h1>
        <p>Chào mừng bạn trở lại, <strong>{$email}</strong>!</p>
        <p>Bạn đã đăng nhập vào hệ thống thành công. Bây giờ bạn có thể truy cập các tính năng dành riêng cho thành viên.</p>
        <a href="/?c=user&v=logout" class="logout-button">Đăng xuất</a>
    </div>
</body>
</html>