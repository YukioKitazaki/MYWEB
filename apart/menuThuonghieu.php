
<?php
    require './administrator/element_T/mod/thuonghieuCls.php';
?>
<?php
    $obj = new thuonghieu();
    $list_tt = $obj->thuonghieuGetAll();
?>
    <nav class="navbar navbar-expand ">
        <div class="container-fluid">
    
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Trang chủ</a></li>
    
                <?php
                // Hiển thị danh sách loại hàng trong navigation
                foreach ($list_tt as $v) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php?reqView=<?php echo $v->idthuonghieu; ?>">
                            <img class="imgmenu" src="data:image/png;base64,<?php echo $v->hinhanh; ?>" alt="<?php echo $v->tenthuonghieu; ?>">
                            
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </nav>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>