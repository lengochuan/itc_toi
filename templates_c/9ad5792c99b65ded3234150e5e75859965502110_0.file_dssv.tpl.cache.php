<?php
/* Smarty version 5.5.1, created on 2025-06-17 16:05:33
  from 'file:templates/sinh_vien/dssv.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6851762d339b34_03778053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ad5792c99b65ded3234150e5e75859965502110' => 
    array (
      0 => 'templates/sinh_vien/dssv.tpl',
      1 => 1750169129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6851762d339b34_03778053 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/itctoi/templates/sinh_vien';
$_smarty_tpl->getCompiled()->nocache_hash = '3282992386851762d307955_42661940';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh sách sinh viên</h1>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Môn học</th>
                    <th>Khoa</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('listSV'), 'sv');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sv')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('sv')['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('sv')['ho_ten'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('sv')['mssv'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('sv')['khoa'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('sv')['email'];?>
</td>
                </tr>
                <?php
}
if ($foreach0DoElse) {
?>
                <tr>
                    <td colspan="5" style="text-align: center;">Không có dữ liệu sinh viên</td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</body>
</html><?php }
}
