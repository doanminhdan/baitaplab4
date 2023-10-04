<!DOCTYPE html>
<html>
<head>
    <title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
    <meta charset="utf-8">
    <style>
        *{
            font-family: Tahoma;
        }
        table{
            width: 400px;
            margin: 100px auto;
        }
        table th{
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }
        input{
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
    // Hàm đếm số lần xuất hiện và tạo mảng duy nhất
    function count_and_unique_array($input_array) {
        $occurrences = array_count_values($input_array);
        $unique_array = array_keys($occurrences);
        return array('occurrences' => $occurrences, 'unique_array' => $unique_array);
    }

    // Kiểm tra nếu có dữ liệu được gửi đi từ form
    if (isset($_POST['nhap_mang'])) {
        $input_array = explode(',', $_POST['nhap_mang']);
        $result = count_and_unique_array($input_array);
        $so_lan_xuat_hien = implode(', ', $result['occurrences']);
        $mang_duy_nhat = implode(', ', $result['unique_array']);
    }
    ?>

    <form action="" method="POST">
        <table>
            <thead>
                <tr>
                    <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mảng:</td>
                    <td><input type="text" name="nhap_mang" value="<?php echo isset($_POST['nhap_mang']) ? $_POST['nhap_mang'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td>Số lần xuất hiện:</td>
                    <td><input type="text" name="so_lan_xuat_hien" value="<?php echo isset($so_lan_xuat_hien) ? $so_lan_xuat_hien : ''; ?>" disabled="disabled"></td>
                </tr>
                <tr>
                    <td>Mảng duy nhất:</td>
                    <td><input type="text" name="mang_duy_nhat" value="<?php echo isset($mang_duy_nhat) ? $mang_duy_nhat : ''; ?>" disabled="disabled"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Thực hiện"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>