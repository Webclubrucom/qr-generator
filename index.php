<?php



if ($_SERVER['REQUEST_URI'] === '/login') {
	include dirname(__FILE__) . '/template/login.php';
} else if ($_SERVER['REQUEST_URI'] === '/login?do=logout') {
	include dirname(__FILE__) . '/template/login.php';
} else {

	error_reporting(E_ALL ^ E_NOTICE);

	$version = '4.0.3';
	require dirname(__FILE__) . "/config.php";

	$config = __DIR__ . "/config.php";

	if ($_CONFIG['install'] == '') {
		header("Location: /install/");
	}

	session_name($_CONFIG['session_name']);
	session_start();

	if ($_GET['do'] == 'logout') {
		unset($_SESSION['admin']);
		unset($_SESSION['password']);
		session_destroy();
	}

	if (isset($_GET['reset'])) {
		unset($_SESSION['logo']);
	}

	global $_ERROR;

	if (isset($_SESSION['error'])) {
		$_ERROR = $_SESSION['error'];
		unset($_SESSION['error']);
	}

	require dirname(__FILE__) . "/include/functions.php";

	$browserDetect = array_key_exists('detect_browser_lang', $_CONFIG) ? $_CONFIG['detect_browser_lang'] : false;
	$defaultlang = array_key_exists('lang', $_CONFIG) ? $_CONFIG['lang'] : 'en';
	$color_primary = array_key_exists('color_primary', $_CONFIG) ? $_CONFIG['color_primary'] : false;

	$lang = getLang($defaultlang, $browserDetect);

	if (file_exists(dirname(__FILE__) . "/translations/" . $lang . ".php")) {
		include dirname(__FILE__) . "/translations/" . $lang . ".php";
	}
	require dirname(__FILE__) . "/include/head.php";
	require dirname(__FILE__) . "/lib/countrycodes.php";

?>

	<!DOCTYPE html>
	<html lang="ru">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title><?php echo $_CONFIG['title_site']; ?></title>
		<meta name="description" content="<?php echo getString('description'); ?>">
		<meta name="keywords" content="<?php echo getString('tags'); ?>">

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
				<script src="js/ie8.js"></script>
			<![endif]-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/fa-viber.css">
		<link href="js/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

		<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="plugins/slick/slick.css">
		<link rel="stylesheet" href="plugins/slick/slick-theme.css">
		<link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
		<link rel="stylesheet" href="plugins/aos/aos.css">

		<link href="style.css" rel="stylesheet">
		<!-- CUSTOM CSS -->
		<link href="css/styles.css" rel="stylesheet">

		<script src="js/jquery-3.5.1.min.js"></script>
		<?php echo setMainColor($color_primary); ?>
	</head>

	<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

		<?php
		if (file_exists(dirname(__FILE__) . '/template/header.php')) {
			include dirname(__FILE__) . '/template/header.php';
		}
		if (file_exists(dirname(__FILE__) . '/include/generator.php')) {
			include dirname(__FILE__) . '/include/generator.php';
		}
		if (file_exists(dirname(__FILE__) . '/template/footer.php')) {
			include dirname(__FILE__) . '/template/footer.php';
		}
		?>
		<script src="js/popper.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
		<script src="js/all.min.js?v=<?php echo $version; ?>"></script>

		<script src="plugins/slick/slick.min.js"></script>
		<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
		<script src="plugins/syotimer/jquery.syotimer.min.js"></script>
		<script src="plugins/aos/aos.js"></script>
		<script src="js/script.js"></script>

		<!-- END QRcdr -->
	</body>

	</html>
<?php }
