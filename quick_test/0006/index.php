<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$day = isset($_REQUEST['day']) ? (int)$_REQUEST['day'] : '';
$month = isset($_REQUEST['month']) ? (int)$_REQUEST['month'] : '';
$year = isset($_REQUEST['year']) ? (int)$_REQUEST['year'] : '';
if(isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year'])){
    $namhientai = date('Y', time());
    echo '<br> Năm hiện tại : ' . $namhientai;

    $namsinh = $year;
    echo '<br> Năm sinh của bạn : ' .$namsinh;
    $tuoi = $namhientai - $namsinh;
    echo '<br> Tuổi của bạn là : ' . $tuoi;

}

?>


    <h1>1 . Viết ra 1 chương trình php tính tuổi của 1 người khi biết ngày tháng năm sinh của họ</h1>
    <form name="tinhtuoi" action="" method="post">
        <P>
            <label>Nhập ngày sinh :</label>
            <input type="text" name="day" value="">
        </P>
        <P>
            <label>Nhập tháng sinh :</label>
            <input type="text" name="month" value="">
        </P>
        <P>
            <label>Nhập năm sinh :</label>
            <input type="text" name="year" value="">
        </P>
        <P>
            <input type="submit" name="submit" value="submit">
        </P>
    </form>
    <p>Tính tuổi của người ấy của người ấy</p>
    <?php

    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    ?>

</body>
</html>