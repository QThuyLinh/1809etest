<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>1 . Viết ra 1 chương trình php in ra độ dài của chuỗi bạn nhập vào ?
    Xây dựng 1 form có 1 ô input cho người dùng nhập chuỗi . sau khi họ ấn enter sẽ hiện ra độ dài của chuỗi</h1>
    <?php
        $chuoi = isset($_REQUEST['chuoi'])? $_REQUEST['chuoi'] : '';
        if(isset($_REQUEST['chuoi'])){
            $string = $chuoi;
            $length = strlen($chuoi);
            echo '<br> Độ dài của chuỗi là : ' .$length;
        }
    ?>
    <form name="indodaichuoi" action="" method="post">
        <P>
            <label>Nhập chuỗi :</label>
            <input type="text" name="chuoi" value="">
        </P>
        <P>
            <input type="submit" name="submit" value="submit">
        </P>
    </form>
    <p>In ra độ dài chuỗi</p>
    <?php

    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    ?>

</body>
</html>