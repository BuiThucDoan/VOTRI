
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="Design/css/login.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Quên mật khẩu</h1>
                <input type="text" placeholder="Họ và tên" />
                <input type="text" placeholder="Mã nhân viên" />
                <input type="email" placeholder="Email" />
                <input type="text" placeholder="số điện thoại" />
                <input type="submit" value="Gửi yêu cầu" class="form-submit">
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" id="form-login" method="post">
                <h1 class="form-heading">ĐĂNG NHẬP</h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input type="text" class="form-input" placeholder="Tên đăng nhập" name="username">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-input" placeholder="Mật khẩu" name="password">
                    <div id="eye">
                        <i class="far fa-eye"></i>
                    </div>
                </div>
                <input type="submit" value="Đăng nhập" class="form-submit" name="btn_login">
            </form>
            <button class="ghost" id="signUp">Quên mật khẩu</button>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Xin chào !</h1>
                    <p>Chào mừng bạn đến với bếp ăn Vô Tri - Nơi ẩm thực thăng hoa</p>
                    <button id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Xin chào !</h1>
                    <p>Chào mừng bạn đến với bếp ăn Vô Tri - Nơi ẩm thực thăng hoa</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script type="text/javascript" src="Design/js/login.js"></script>
</body>

</html>
<?php
include_once("Controller/clogin.php");

if (isset($_REQUEST['btn_login'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $p = new controllogin();
    $tblUser = $p->getAllLogin($username, $password);

    if ($_SESSION['is_login']['vaitro'] == 1 || $_SESSION['is_login']['vaitro'] == 2 || $_SESSION['is_login']['vaitro'] == 3) {
        header("Location: admin.php");
        exit();
    } elseif ($_SESSION['is_login']['vaitro'] == 4) {
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Error: Invalid role!')</script>";
        // Optionally, you can redirect to the login page or perform other actions here
    }
    
}
?>




