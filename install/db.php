<?php
if ($_POST['submit']) {

    $file_config = $_SERVER['DOCUMENT_ROOT'] . "/config.php";


    if ($_POST['username'] != '') {
        $username = $_POST['username'];
    } else {
        $username = $_CONFIG['username'];
    }
    if ($_POST['password'] != '') {
        $password = md5($_POST['password']);
    } else {
        $password = $_CONFIG['password'];
    }
    if ($_POST['lang'] != '') {
        $lang = $_POST['lang'];
    } else {
        $lang = $_CONFIG['lang'];
    }
    if ($_POST['title_site'] != '') {
        $title_site = $_POST['title_site'];
    } else {
        $title_site = $_CONFIG['title_site'];
    }
    if ($_POST['description'] != '') {
        $description = $_POST['description'];
    } else {
        $description = $_CONFIG['description'];
    }
    if ($_POST['qrcodes_dir'] != '') {
        $qrcodes_dir = $_POST['qrcodes_dir'];
    } else {
        $qrcodes_dir = $_CONFIG['qrcodes_dir'];
    }
    if ($_POST['delete_old_files'] != '') {
        $delete_old_files = $_POST['delete_old_files'];
    } else {
        if ($_CONFIG['delete_old_files'] == 'true') {
            $delete_old_files = 'true';
        } else {
            $delete_old_files = 'false';
        }
    }
    if ($_POST['file_lifetime'] != '') {
        $file_lifetime = $_POST['file_lifetime'];
    } else {
        $file_lifetime = $_CONFIG['file_lifetime'];
    }
    if ($_POST['uploader'] != '') {
        $uploader = $_POST['uploader'];
    } else {
        if ($_CONFIG['uploader'] == 'true') {
            $uploader = 'true';
        } else {
            $uploader = 'false';
        }
    }
    if ($_POST['upload_max_filesize'] != '') {
        $upload_max_filesize = $_POST['upload_max_filesize'];
    } else {
        $upload_max_filesize = $_CONFIG['upload_max_filesize'];
    }
    if ($_POST['thumb_size'] != '') {
        $thumb_size = $_POST['thumb_size'];
    } else {
        $thumb_size = $_CONFIG['thumb_size'];
    }
    if ($_POST['qr_bgcolor'] != '') {
        $qr_bgcolor = $_POST['qr_bgcolor'];
    } else {
        $qr_bgcolor = $_CONFIG['qr_bgcolor'];
    }
    if ($_POST['qr_color'] != '') {
        $qr_color = $_POST['qr_color'];
    } else {
        $qr_color = $_CONFIG['qr_color'];
    }
    if ($_POST['session_name'] != '') {
        $session_name = $_POST['session_name'];
    } else {
        $session_name = $_CONFIG['session_name'];
    }
    if ($_POST['placeholder'] != '') {
        $placeholder = $_POST['placeholder'];
    } else {
        $placeholder = $_CONFIG['placeholder'];
    }

    if ($_SERVER['REQUEST_URI'] === '/admin/modules') {


        if (isset($_POST['link'])) {
            $link = "'link' => true,";
        }

        if (isset($_POST['location'])) {
            $location = "'location' => true,";
        }

        if (isset($_POST['email'])) {
            $email = "'email' => true,";
        }

        if (isset($_POST['text'])) {
            $text = "'text' => true,";
        }

        if (isset($_POST['tel'])) {
            $tel = "'tel' => true,";
        }

        if (isset($_POST['sms'])) {
            $sms = "'sms' => true,";
        }

        if (isset($_POST['whatsapp'])) {
            $whatsapp = "'whatsapp' => true,";
        }

        if (isset($_POST['viber'])) {
            $viber = "'viber' => true,";
        }

        if (isset($_POST['skype'])) {
            $skype = "'skype' => true,";
        }

        if (isset($_POST['wifi'])) {
            $wifi = "'wifi' => true,";
        }

        if (isset($_POST['vcard'])) {
            $vcard = "'vcard' => true,";
        }

        if (isset($_POST['paypal'])) {
            $paypal = "'paypal' => true,";
        }

        if (isset($_POST['bitcoin'])) {
            $bitcoin = "'bitcoin' => true,";
        }
    } else {
        $config_link = $_CONFIG['link'];
        $link = "'link' => '$config_link',";

        $config_location = $_CONFIG['location'];
        $location = "'location' => '$config_location',";

        $config_email = $_CONFIG['email'];
        $email = "'email' => '$config_email',";

        $config_text = $_CONFIG['text'];
        $text = "'text' => '$config_text',";

        $config_tel = $_CONFIG['tel'];
        $tel = "'tel' => '$config_tel',";

        $config_sms = $_CONFIG['sms'];
        $sms = "'sms' => '$config_sms',";

        $config_whatsapp = $_CONFIG['whatsapp'];
        $whatsapp = "'whatsapp' => '$config_whatsapp',";

        $config_viber = $_CONFIG['viber'];
        $viber = "'viber' => '$config_viber',";

        $config_skype = $_CONFIG['skype'];
        $skype = "'skype' => '$config_skype',";

        $config_wifi = $_CONFIG['wifi'];
        $wifi = "'wifi' => '$config_wifi',";

        $config_vcard = $_CONFIG['vcard'];
        $vcard = "'vcard' => '$config_vcard',";

        $config_paypal = $_CONFIG['paypal'];
        $paypal = "'paypal' => '$config_paypal',";

        $config_bitcoin = $_CONFIG['bitcoin'];
        $bitcoin = "'bitcoin' => '$config_bitcoin',";
    }


    if (isset($_POST['default_tab'])) {
        $default_tab = $_POST['default_tab'];
    } else {
        $default_tab = $_CONFIG['default_tab'];
    }
    if (isset($_POST['detect_browser_lang'])) {
        $detect_browser_lang = $_POST['detect_browser_lang'];
    } else {
        if ($_CONFIG['detect_browser_lang'] == 'true') {
            $detect_browser_lang = 'true';
        } else {
            $detect_browser_lang = 'false';
        }
    }
    if (isset($_POST['google_api_key'])) {
        $google_api_key = $_POST['google_api_key'];
    } else {
        $google_api_key = $_CONFIG['google_api_key'];
    }

    if (isset($_POST['color_primary'])) {
        $color_primary = $_POST['color_primary'];
    } else {
        $color_primary = $_CONFIG['color_primary'];
    }



    if (isset($_POST['images'])) {
        $logo_header = $_POST['images'];
    } else {
        $logo_header = $_CONFIG['logo_header'];
    }

    if (isset($_POST['logo_lite'])) {
        $logo_footer = $_POST['logo_lite'];
    } else {
        $logo_footer = $_CONFIG['logo_footer'];
    }

    if (isset($_POST['vkontakte'])) {
        $vkontakte = $_POST['vkontakte'];
    } else {
        $vkontakte = $_CONFIG['vkontakte'];
    }

    if (isset($_POST['odnoklassniki'])) {
        $odnoklassniki = $_POST['odnoklassniki'];
    } else {
        $odnoklassniki = $_CONFIG['odnoklassniki'];
    }

    if (isset($_POST['youtube'])) {
        $youtube = $_POST['youtube'];
    } else {
        $youtube = $_CONFIG['youtube'];
    }

    if (isset($_POST['main_title'])) {
        $main_title = $_POST['main_title'];
    } else {
        $main_title = $_CONFIG['main_title'];
    }

    if (isset($_POST['main_subtitle'])) {
        $main_subtitle = $_POST['main_subtitle'];
    } else {
        $main_subtitle = $_CONFIG['main_subtitle'];
    }

    if (isset($_POST['main_name_button'])) {
        $main_name_button = $_POST['main_name_button'];
    } else {
        $main_name_button = $_CONFIG['main_name_button'];
    }

    if (isset($_POST['main_url_button'])) {
        $main_url_button = $_POST['main_url_button'];
    } else {
        $main_url_button = $_CONFIG['main_url_button'];
    }

    if (isset($_POST['main_image'])) {
        $main_image = $_POST['main_image'];
    } else {
        $main_image = $_CONFIG['main_image'];
    }

    if (isset($_POST['advantage_one'])) {
        $advantage_one = $_POST['advantage_one'];
    } else {
        $advantage_one = $_CONFIG['advantage_one'];
    }

    if (isset($_POST['main_description_one'])) {
        $main_description_one = $_POST['main_description_one'];
    } else {
        $main_description_one = $_CONFIG['main_description_one'];
    }

    if (isset($_POST['advantage_two'])) {
        $advantage_two = $_POST['advantage_two'];
    } else {
        $advantage_two = $_CONFIG['advantage_two'];
    }

    if (isset($_POST['main_description_two'])) {
        $main_description_two = $_POST['main_description_two'];
    } else {
        $main_description_two = $_CONFIG['main_description_two'];
    }

    if (isset($_POST['advantage_three'])) {
        $advantage_three = $_POST['advantage_three'];
    } else {
        $advantage_three = $_CONFIG['advantage_three'];
    }

    if (isset($_POST['main_description_three'])) {
        $main_description_three = $_POST['main_description_three'];
    } else {
        $main_description_three = $_CONFIG['main_description_three'];
    }

    if (isset($_POST['instructions_title'])) {
        $instructions_title = $_POST['instructions_title'];
    } else {
        $instructions_title = $_CONFIG['instructions_title'];
    }

    if (isset($_POST['instructions_subtitle'])) {
        $instructions_subtitle = $_POST['instructions_subtitle'];
    } else {
        $instructions_subtitle = $_CONFIG['instructions_subtitle'];
    }

    if (isset($_POST['instructions_image'])) {
        $instructions_image = $_POST['instructions_image'];
    } else {
        $instructions_image = $_CONFIG['instructions_image'];
    }

    if (isset($_POST['generator_title'])) {
        $generator_title = $_POST['generator_title'];
    } else {
        $generator_title = $_CONFIG['generator_title'];
    }

    if (isset($_POST['generator_description'])) {
        $generator_description = $_POST['generator_description'];
    } else {
        $generator_description = $_CONFIG['generator_description'];
    }

    if (isset($_POST['promo_title'])) {
        $promo_title = $_POST['promo_title'];
    } else {
        $promo_title = $_CONFIG['promo_title'];
    }

    if (isset($_POST['promo'])) {
        $promo = $_POST['promo'];
    } else {
        $promo = $_CONFIG['promo'];
    }

    if (isset($_POST['text_footer'])) {
        $text_footer = $_POST['text_footer'];
    } else {
        $text_footer = $_CONFIG['text_footer'];
    }

    if (isset($_POST['ads'])) {
        $ads = $_POST['ads'];
    } else {
        $ads = $_CONFIG['ads'];
    }

    if (isset($_POST['image_one'])) {
        $image_one = $_POST['image_one'];
    } else {
        $image_one = $_CONFIG['image_one'];
    }

    if (isset($_POST['image_two'])) {
        $image_two = $_POST['image_two'];
    } else {
        $image_two = $_CONFIG['image_two'];
    }

    if (isset($_POST['image_three'])) {
        $image_three = $_POST['image_three'];
    } else {
        $image_three = $_CONFIG['image_three'];
    }

    if (isset($_POST['image_four'])) {
        $image_four = $_POST['image_four'];
    } else {
        $image_four = $_CONFIG['image_four'];
    }

    if (isset($_POST['text_image_four'])) {
        $text_image_four = $_POST['text_image_four'];
    } else {
        $text_image_four = $_CONFIG['text_image_four'];
    }

    if (isset($_POST['text_image_four'])) {
        $text_image_four = $_POST['text_image_four'];
    } else {
        $text_image_four = $_CONFIG['text_image_four'];
    }

    if (isset($_POST['text_image_four'])) {
        $text_image_four = $_POST['text_image_four'];
    } else {
        $text_image_four = $_CONFIG['text_image_four'];
    }

    if (isset($_POST['text_image_four'])) {
        $text_image_four = $_POST['text_image_four'];
    } else {
        $text_image_four = $_CONFIG['text_image_four'];
    }

    if (isset($_POST['galleries_title'])) {
        $galleries_title = $_POST['galleries_title'];
    } else {
        $galleries_title = $_CONFIG['galleries_title'];
    }

    if (isset($_POST['galleries_desc'])) {
        $galleries_desc = $_POST['galleries_desc'];
    } else {
        $galleries_desc = $_CONFIG['galleries_desc'];
    }

    if (isset($_POST['install'])) {
        $install = $_POST['install'];
    } else {
        $install = $_CONFIG['install'];
    }


    $dbNEW = "<?php

\$_CONFIG = array(
    'lang' => '$lang',
    'title_site' => '$title_site',
    'description' => '$description',
    'qrcodes_dir' => '$qrcodes_dir',
    'delete_old_files' => $delete_old_files,
    'file_lifetime' => $file_lifetime,
    'uploader' => $uploader,
    'upload_max_filesize' => $upload_max_filesize,
    'thumb_size' => $thumb_size,
    'qr_bgcolor' => '$qr_bgcolor',
    'qr_color' => '$qr_color',
    'session_name' => '$session_name',
    'placeholder' => '$placeholder',
    'logo_header' => '$logo_header',
    'logo_footer' => '$logo_footer',
    'vkontakte' => '$vkontakte',
	'odnoklassniki' => '$odnoklassniki',
	'youtube' => '$youtube',
    'main_title' => '$main_title',
    'main_subtitle' => '$main_subtitle',
    'main_name_button' => '$main_name_button',
    'main_url_button' => '$main_url_button',
    'main_image' => '$main_image',
    'advantage_one' => '$advantage_one',
	'main_description_one' => '$main_description_one',
	'advantage_two' => '$advantage_two',
	'main_description_two' => '$main_description_two',
	'advantage_three' => '$advantage_three',
	'main_description_three' => '$main_description_three',
    'instructions_title' => '$instructions_title',
	'instructions_subtitle' => '$instructions_subtitle',
	'instructions_image' => '$instructions_image',
    'generator_title' => '$generator_title',
    'generator_description' => '$generator_description',
    'promo_title' => '$promo_title',
	'promo' => '$promo',
    'ads' => '$ads',
    'galleries_title' => '$galleries_title',
	'galleries_desc' => '$galleries_desc',
    'image_one' => '$image_one',
	'image_two' => '$image_two',
	'image_three' => '$image_three',
	'image_four' => '$image_four',
    'text_image_one' => '$text_image_one',
	'text_image_two' => '$text_image_two',
	'text_image_three' => '$text_image_three',
	'text_image_four' => '$text_image_four',
    'text_footer' => '$text_footer',
    $link
    $location
    $email
    $text
    $tel
    $sms
    $whatsapp
    $viber
    $skype
    $wifi
    $vcard
    $paypal
    $bitcoin
    'default_tab' => '$default_tab',
    'detect_browser_lang' => $detect_browser_lang,
    'google_api_key' => '$google_api_key',
    'color_primary' => '$color_primary',
    'username' => '$username',
    'password' => '$password',
    'install' => '$install',
    );

?>";

    file_put_contents($file_config, $dbNEW);

    $_SESSION['admin'] = $username;
    $_SESSION['password'] = $password;

    header("Location: /admin");

?>

    <?php
    $message = '<div class="alert alert-success" role="alert">Изменения успешно сохранены!</div>';
}
