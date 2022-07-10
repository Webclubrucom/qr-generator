<?php require $_SERVER['DOCUMENT_ROOT'] . "/admin/request/db.php"; ?>

<main class="content-wrapper">
    <div class="container-fluid">
        <div class="container p-4">
            <h1 class="title_admin mb-4"><?php echo $title; ?></h1>
            <form class="row" method="post">
                <div class="container col-8">
                    <div class="card container">
                        <div class="card-body">

                            <div class="list-group-item">
                                Ссылка
                                <label class="switch ">
                                    <input type="checkbox" name="link" class="primary" value="1" <?php if ($_CONFIG['link'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                Местоположение
                                <label class="switch ">
                                    <input type="checkbox" name="location" class="primary" value="1" <?php if ($_CONFIG['location'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                Электронная почта
                                <label class="switch ">
                                    <input type="checkbox" name="email" class="primary" value="1" <?php if ($_CONFIG['email'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                Текст
                                <label class="switch ">
                                    <input type="checkbox" name="text" class="primary" value="1" <?php if ($_CONFIG['text'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                Звонок
                                <label class="switch ">
                                    <input type="checkbox" name="tel" class="primary" value="1" <?php if ($_CONFIG['tel'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                СМС
                                <label class="switch ">
                                    <input type="checkbox" name="sms" class="primary" value="1" <?php if ($_CONFIG['sms'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                WhatsApp
                                <label class="switch ">
                                    <input type="checkbox" name="whatsapp" class="primary" value="1" <?php if ($_CONFIG['whatsapp'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                Viber
                                <label class="switch ">
                                    <input type="checkbox" name="viber" class="primary" value="1" <?php if ($_CONFIG['viber'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                Skype
                                <label class="switch ">
                                    <input type="checkbox" name="skype" class="primary" value="1" <?php if ($_CONFIG['skype'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                Wi-Fi
                                <label class="switch ">
                                    <input type="checkbox" name="wifi" class="primary" value="1" <?php if ($_CONFIG['wifi'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                V-card
                                <label class="switch ">
                                    <input type="checkbox" name="vcard" class="primary" value="1" <?php if ($_CONFIG['vcard'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                PayPal
                                <label class="switch ">
                                    <input type="checkbox" name="paypal" class="primary" value="1" <?php if ($_CONFIG['paypal'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="list-group-item">
                                BitCoin
                                <label class="switch ">
                                    <input type="checkbox" name="bitcoin" class="primary" value="1" <?php if ($_CONFIG['bitcoin'] == true) { ?>checked<?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="container col-4">
                    <div class="card container">
                        <div class="card-body d-flex side_right">

                            <input name="submit" type="submit" class="btn btn-primary mt-4" value="Сохранить">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>