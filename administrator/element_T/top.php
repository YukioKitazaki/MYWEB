<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylecss_T/myscc.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="fade-in-text text-center">
        <?php 
        if(isset($_SESSION['USER'])){
            $namelogin = $_SESSION['USER'];
        }
        if(isset($_SESSION['ADMIN'])){
            $namelogin = $_SESSION['ADMIN'];
        }
        if(isset($_COOKIE[$namelogin])){
            echo 'Xin chào '. $namelogin . '<br/>';
            echo 'Lần đăng nhập gần nhất: ' . $_COOKIE[$namelogin];
        }
        echo '<br/>';
        if(isset($_REQUEST['result'])){
            if($_REQUEST['result'] == 'ok'){
                ?>
               <img src="img_T/success.png" height="50px">
                <?php
            } else {
                ?>
                <img src="img_T/fail.png" height="50px">
                <?php
            }
        } else {
            ?>
                <img src="img_T/wait.png" height="50px">
            <?php
        }
        ?>
    </div>

</body>
</html> 