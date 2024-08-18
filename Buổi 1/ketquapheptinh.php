<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Phép Tính</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $so1 = $_POST['so1'];
            $so2 = $_POST['so2'];
            $pheptinh = $_POST['pheptinh'];
            
            if (is_numeric($so1) && is_numeric($so2)) {
                switch ($pheptinh) {
                    case "cong":
                        $ketqua = $so1 + $so2;
                        $pheptinh_text = "Cộng";
                        break;
                    case "tru":
                        $ketqua = $so1 - $so2;
                        $pheptinh_text = "Trừ";
                        break;
                    case "nhan":
                        $ketqua = $so1 * $so2;
                        $pheptinh_text = "Nhân";
                        break;
                    case "chia":
                        if ($so2 == 0) {
                            $ketqua = "Không thể chia cho 0";
                        } else {
                            $ketqua = $so1 / $so2;
                        }
                        $pheptinh_text = "Chia";
                        break;
                }
    ?>

                 <?php echo " Chọn Phép Tính: $pheptinh_text"; ?><br>
                
                <label for="so1">Số 1:</label>
                <input type="text" id="so1" name="so1" value="<?php echo $so1; ?>" readonly><br><br>
                
                <label for="so2">Số 2:</label>
                <input type="text" id="so2" name="so2" value="<?php echo $so2; ?>" readonly><br><br>
                
                <label for="ketqua">Kết quả:</label>
                <input type="text" id="ketqua" name="ketqua" value="<?php echo $ketqua; ?>" readonly><br><br>
    <?php
            } else {
                echo "Vui lòng nhập số hợp lệ.";
            }
        }
    ?>
    <br>
    <a href="Trangtinh.php">Quay lại trang trước</a>
</body>
</html>
