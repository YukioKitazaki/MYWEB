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
    require './administrator/element_T/mod/thuonghieuCls.php';
    $obj = new thuonghieu();
    $list_tt = $obj->thuonghieuGetAll();
?>

<nav class="navbar navbar-expand">
    <div class="container-fluid d-flex justify-content-center">
        <ul class="navbar-nav">
            <?php
            foreach ($list_tt as $v) {
                ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php?reqthuonghieu=<?php echo $v->idthuonghieu; ?>">
                        <img class="imgmenu" src="data:image/png;base64,<?php echo $v->hinhanh; ?>" alt="<?php echo $v->tenthuonghieu; ?>" style="max-width: 70px; height: auto;">
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
