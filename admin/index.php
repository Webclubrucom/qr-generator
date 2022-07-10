<?php

session_start();
error_reporting(E_ALL ^ E_NOTICE);
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
$version = '4.0.3';
require "../config.php";

if ($_CONFIG['install'] == '') {
    header("Location: /install/");
}

if ($_CONFIG['username'] != $_SESSION['admin'] || $_CONFIG['password'] != $_SESSION['password']) {

    header("Location: /login");
    exit;
}



require "../include/functions.php";

$browserDetect = array_key_exists('detect_browser_lang', $_CONFIG) ? $_CONFIG['detect_browser_lang'] : false;
$defaultlang = array_key_exists('lang', $_CONFIG) ? $_CONFIG['lang'] : 'ru';
$color_primary = array_key_exists('color_primary', $_CONFIG) ? $_CONFIG['color_primary'] : false;

$lang = getLang($defaultlang, $browserDetect);

if (file_exists("../translations/" . $lang . ".php")) {
    include "../translations/" . $lang . ".php";
}
require "../include/head.php";
require "../lib/countrycodes.php";

if ($_SERVER['REQUEST_URI'] === '/admin/dashboard') {
    $title = 'Главный экран';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/') {
    $title = 'Главный экран';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/settings') {
    $title = 'Настройки';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/profile') {
    $title = 'Профиль';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/modules') {
    $title = 'Модули';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/main') {
    $title = 'Главный экран';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/advantages') {
    $title = 'Преимущества';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/instructions') {
    $title = 'Инструкции';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/generator') {
    $title = 'Генератор';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/promo') {
    $title = 'Промо видео';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/footer_page') {
    $title = 'Футер';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/ads') {
    $title = 'Реклама';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/galleries') {
    $title = 'Галерея';
} elseif ($_SERVER['REQUEST_URI'] === '/admin/google_api') {
    $title = 'Google Api Key';
} else {
    $title = 'Страница не найдена';
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | <?php echo $_CONFIG['title_site']; ?></title>
    <meta name="description" content="<?php echo $_CONFIG['description']; ?>">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
            <script src="js/ie8.js"></script>
        <![endif]-->
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../../css/admin.css" rel="stylesheet">

    <script src="../../js/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php

    include dirname(__FILE__) . '/templates/sidebar.php';
    if ($_SERVER['REQUEST_URI'] === '/admin/dashboard') {
        include dirname(__FILE__) . '/templates/dashboard.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/') {
        include dirname(__FILE__) . '/templates/dashboard.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/settings') {
        include dirname(__FILE__) . '/templates/settings.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/profile') {
        include dirname(__FILE__) . '/templates/profile.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/modules') {
        include dirname(__FILE__) . '/templates/modules.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/main') {
        include dirname(__FILE__) . '/templates/main.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/advantages') {
        include dirname(__FILE__) . '/templates/advantages.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/instructions') {
        include dirname(__FILE__) . '/templates/instructions.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/generator') {
        include dirname(__FILE__) . '/templates/generator.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/promo') {
        include dirname(__FILE__) . '/templates/promo.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/footer_page') {
        include dirname(__FILE__) . '/templates/footer_page.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/ads') {
        include dirname(__FILE__) . '/templates/ads.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/galleries') {
        include dirname(__FILE__) . '/templates/galleries.php';
    } elseif ($_SERVER['REQUEST_URI'] === '/admin/google_api') {
        include dirname(__FILE__) . '/templates/google_api.php';
    } else {
        include dirname(__FILE__) . '/templates/404.php';
        header("HTTP/1.1 404 Not Found");
    }
    include dirname(__FILE__) . '/templates/footer.php';

    ?>
    <script src="../../js/admin.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="../../js/all.min.js?v=<?php echo $version; ?>"></script>
</body>

</html>