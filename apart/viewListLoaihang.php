<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<?php
require 'administrator/element_T/mod/hanghoaCls.php';
$hanghoa = new hanghoa();
if (isset($_GET['reqView'])) {
    $idloaihang = $_GET['reqView'];
    $list_hanghoa = $hanghoa->HanghoaGetbyIdloaihang($idloaihang);
} else {
    $list_hanghoa = $hanghoa->hanghoaGetAll();
}
?>
<?php
require 'administrator/element_T/mod/hanghoaCls.php';
$hanghoa = new hanghoa();
if (isset($_GET['reqView'])) {
    $idthuoctinh = $_GET['reqView'];
    $list_hanghoa = $hanghoa->HanghoaGetbyIdloaihang($idthuoctinh);
} else {
    $list_hanghoa = $hanghoa->hanghoaGetAll();
}
?>
<div class="container">
    <div class="row">
        <?php 
        if (count($list_hanghoa) > 0) {
            foreach ($list_hanghoa as $item) {
                ?>
                <div class="col-md-2 mb-2">
                    <div class="card">
                        <img src="data:image/png;base64,<?php echo $item->hinhanh; ?>" class="card-img-top imgHanghoa" alt="<?php echo $item->tenhanghoa; ?>">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm: <?php echo $item->tenhanghoa; ?></h5>
                            <p class="card-text">Giá bán: <?php echo $item->giathamkhao; ?> đ</p>
                            <a href="./index.php?reqHanghoa=<?php echo $item->idhanghoa; ?>" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<div class='col-12'><p class='text-center'>Không có sản phẩm nào.</p></div>";
        }
        ?>
    </div>
</div>
</body>
</html>
