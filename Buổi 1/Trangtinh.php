<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép Tính Trên Hai Số</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form action="ketquapheptinh.php" method="post">
        <label>Chọn phép tính:</label>
        <input type="radio" name="pheptinh" value="cong" checked> Cộng
        <input type="radio" name="pheptinh" value="tru"> Trừ
        <input type="radio" name="pheptinh" value="nhan"> Nhân
        <input type="radio" name="pheptinh" value="chia"> Chia
        <br><br>
        <label>Số thứ nhất:</label>
        <input type="text" name="so1"><br><br>
        <label>Số thứ hai:</label>
        <input type="text" name="so2"><br><br>
        <input type="submit" value="Tính">
    </form>
</body>
</html>
