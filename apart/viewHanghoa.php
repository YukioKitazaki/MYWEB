<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login website</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
</head>
<body> 
    <body>
    <script>
    function goBack(){
        window.history.back();

    }
    </script>
        <?php
        require './administrator/element_T/mod/hanghoaCls.php';
        $hanghoa = new hanghoa();
        if(isset($_GET['reqHanghoa'])){
            $idhanghoa = $_GET['reqHanghoa'];
            $obj = $hanghoa->hanghoaGetbyId($idhanghoa);
        }
        ?>
        <div class="container itemsViewHanghoa">
            <div class="row">
                <div class="col-md-6">
                    <img class="imgViewHanghoa" src="data:image/png;base64,<?php echo $obj->hinhanh; ?>">
                </div>
                <div class="col-md-6">
                    <p><strong>Sản phẩm:</strong> <?php echo $obj->tenhanghoa; ?></p>
                    <p><strong>Giá bán:</strong> <?php echo $obj->giathamkhao; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p><strong>Mô tả:</strong> <?php echo $obj->mota; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-secondary" onclick="goBack()">Go back</button>
                </div>
            </div>
        </div>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>