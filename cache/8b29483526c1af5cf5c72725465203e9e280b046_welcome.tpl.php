<?php
/* Smarty version 5.5.1, created on 2025-06-24 16:11:11
  from 'file:templates/user/welcome.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685ab1ff630bf3_89431904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b29483526c1af5cf5c72725465203e9e280b046' => 
    array (
      0 => 'templates/user/welcome.tpl',
      1 => 1750168602,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
))) {
function content_685ab1ff630bf3_89431904 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/itctoi/templates/user';
?><!DOCTYPE html>
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
        <p>Chào mừng bạn trở lại, <strong>linh@gmail.com</strong>!</p>
        <p>Bạn đã đăng nhập vào hệ thống thành công. Bây giờ bạn có thể truy cập các tính năng dành riêng cho thành viên.</p>
        <a href="/?c=user&v=logout" class="logout-button">Đăng xuất</a>
    </div>
</body>
</html><?php }
}
