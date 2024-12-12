<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang sản phẩm hàng hóa tiêu dùng giải trí</title>
    <link type="text/css" rel="stylesheet" href="public_files/pmycss.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="lvOne"></div>
    
    <div id="lvTwo">
        <?php require './apart/menuLoaihang.php'; ?>
    </div>
    <div id="lvThree">
        <?php require './apart/menuThuonghieu.php'; ?>
    </div>
    <div id="lvFour">
        <form method="GET" action="./index.php" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
        
    </div>
    <div id="lvFive">
        <?php
        if (isset($_GET['search'])) {
            require './apart/timkiem.php';
        } else {
            if (!isset($_GET['reqHanghoa'])) {
                require 'apart/viewListLoaihang.php';
            } else {
                require './apart/viewHanghoa.php';
            }
        }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
