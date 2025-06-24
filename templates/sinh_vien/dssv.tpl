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
                {foreach from=$listSV item=sv}
                <tr>
                    <td>{$sv.id}</td>
                    <td>{$sv.ho_ten}</td>
                    <td>{$sv.mssv}</td>
                    <td>{$sv.khoa}</td>
                    <td>{$sv.email}</td>
                </tr>
                {foreachelse}
                <tr>
                    <td colspan="5" style="text-align: center;">Không có dữ liệu sinh viên</td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</body>
</html>