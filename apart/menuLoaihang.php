<?php
require './administrator/element_T/mod/loaihangCls.php';
?>

<!-- <a href="./index.php">
    <div class="itemsmenu">
        <img class="imgmenu" src="./administrator/img_T/home.png" alt="">Trang chủ
    </div>
</a>

<?php
// Hiển thị danh sách loại hàng
$obj = new loaihang();
$list_lh = $obj->loaihangGetAll();
foreach ($list_lh as $v) {
    ?>
    <a href="./index.php?reqView=<?php echo $v->idloaihang; ?>">
        <div class="itemsmenu">
            <img class="imgmenu" src="data:image/png;base64,<?php echo $v->hinhanh; ?>">
            <?php echo $v->tenloaihang; ?>
        </div>
    </a>
    <?php
}
?> -->

<nav class="navbar navbar-expand ">
    <div class="container-fluid">

        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Trang chủ</a></li>

            <?php
            // Hiển thị danh sách loại hàng trong navigation
            foreach ($list_lh as $v) {
                ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php?reqView=<?php echo $v->idloaihang; ?>">
                        <img class="imgmenu" src="data:image/png;base64,<?php echo $v->hinhanh; ?>" alt="<?php echo $v->tenloaihang; ?>">
                        <?php echo $v->tenloaihang; ?>
                    </a>
                </li>
                <?php
            }
            ?>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>
    </div>
</nav>
