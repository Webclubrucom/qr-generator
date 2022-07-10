<?php
session_start();
require "config.php";

if ($_CONFIG['install'] == '') {
    header("Location: /install/");
}

if ($_GET['do'] == 'logout') {
    unset($_SESSION['admin']);
    unset($_SESSION['password']);
    session_destroy();
}

if ($_POST['submit']) {
    if ($_CONFIG['username'] == $_POST['username'] and $_CONFIG['password'] == md5($_POST['password'])) {
        $_SESSION['admin'] = $_CONFIG['username'];
        $_SESSION['password'] = $_CONFIG['password'];
        header("Location: /admin/dashboard");
        exit;
    } else {
        $error = 'Логин или пароль неверны!';
        unset($_SESSION['admin']);
        unset($_SESSION['password']);
        session_destroy();
    }
}

if ($_CONFIG['username'] == $_SESSION['admin'] and $_CONFIG['password'] == $_SESSION['password']) {

    header("Location: /admin/dashboard");
    exit;
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация | <?php echo $_CONFIG['title_site']; ?></title>
    <meta name="description" content="<?php echo $_CONFIG['description']; ?>">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
</head>

<body class="body_login">


    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <form class="form-horizontal" method="post">
                        <span class="heading"><?php echo $_CONFIG['title_site']; ?></span>
                        <p class="text-center text-danger"><?php echo $error; ?></p>
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="Имя пользователя">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group help">
                            <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Пароль">
                            <i class="fa fa-lock"></i>
                            <a href="#" class="fa fa-eye-circle"></a>
                        </div>
                        <div class="form-group">

                            <input name="submit" type="submit" class="btn btn-default" value="Вход">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="js/admin.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        $('body').on('click', '.fa-eye-circle', function() {
            if ($('#inputPassword3').attr('type') == 'password') {
                $(this).addClass('view');
                $('#inputPassword3').attr('type', 'text');
            } else {
                $(this).removeClass('view');
                $('#inputPassword3').attr('type', 'password');
            }
            return false;
        });
    </script>
</body>

</html>