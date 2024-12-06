<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login website</title>
    <link rel="stylesheet" href="./stylecss_T/myscc.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
</head>
<body>
    <div id="loginBody">
    <h4 align="center ">ĐĂNG NHẬP HỆ THỐNG</h4>
    <form method="post" name="frmLogin" action="./element_T/mUser/userAct.php?reqact=checklogin">
        <table>
            <tr>
                <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">username:</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="username" id="username" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </tr>
            <tr>
            <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
                <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
                </span>
            </div>
            </div>
            </tr>
            <tr>
                <td><input type="submit" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>