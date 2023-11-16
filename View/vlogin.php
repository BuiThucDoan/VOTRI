<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="Design/css/login.css">
	
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Quên mật khẩu</h1>
                <input type="text" placeholder="Họ và tên" />
                <input type="text" placeholder="Mã nhân viên" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="số điện thoại" />
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
                    <p>Chào mừng bạn đến với bếp ăn của chúng tôi</p>
                    <button id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Xin chào !</h1>
                    <p>Chào mừng bạn đến với bếp ăn của chúng tôi</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript" src="Design/js/login.js"></script>
</html>

<?php
include_once("Controller/clogin.php");
if (isset($_REQUEST['btn_login'])) {
    $user =  $_REQUEST['user'];
    $pas = $_REQUEST['pas'];

    $p = new controlLogin();
    $tblUser = $p->getAllLogin($user, $pas);
	
	// Kiểm tra xem đăng nhập thành công và có vai trò là 4 hay không
    if ($tblUser == 1 && $_SESSION['is_login']['vaitro'] == 4) {
		header("refresh: 0; index.php'");
        exit();
    } elseif ($tblUser == 1 && $_SESSION['is_login']['vaitro'] == 1) {
        header("Location: index.php");
        exit();
    }
	
}
?>