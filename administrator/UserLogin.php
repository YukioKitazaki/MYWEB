<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login website</title>
    <link rel="stylesheet" href="./stylecss_T/myscc.css">
</head>
<body>
    <div id="loginBody">
    <h4 align="center ">ĐĂNG NHẬP HỆ THỐNG</h4>
    <form method="post" name="frmLogin" action="./element_T/mUser/userAct.php?reqact=checklogin">
        <table>
            <tr>
                <td>Tên tài khoản :</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password" id="id_password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>