<?php
require './administrator/element_T/mod/hanghoaCls.php';
$hanghoa = new hanghoa();

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $list_hanghoa = $hanghoa->searchHanghoa($searchTerm);
    $s = count($list_hanghoa);
} else {
    $list_hanghoa = $hanghoa->hanghoaGetAll();
    $s = count($list_hanghoa);
}
?>
<div class="container mt-4">
    <?php
    if ($s > 0) {
        foreach ($list_hanghoa as $s) {
            ?>
            <div class="card mb-10 itemsHanghoa">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="imgHanghoa card-img" src="data:image/png;base64,<?php echo $s->hinhanh; ?>" alt="<?php echo $s->tenhanghoa; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $s->tenhanghoa; ?></h5>
                            <p class="card-text">Giá bán: <?php echo $s->giathamkhao; ?></p>
                            <a href="./index.php?reqHanghoa=<?php echo $s->idhanghoa; ?>" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<p class='text-center'>Không tìm thấy sản phẩm nào.</p>";
    }
    ?>
</div>