<?php require $_SERVER['DOCUMENT_ROOT'] . "/admin/request/db.php"; ?>

<main class="content-wrapper">
    <div class="container-fluid">
        <div class="container p-4">
            <h1 class="title_admin mb-4"><?php echo $title; ?></h1>
            <form class="row" method="post">
                <div class="container col-8">
                    <div class="card container">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="main_title">Заголовок</label>
                                <input name="main_title" type="text" class="form-control" id="main_title" placeholder="Введите заголовок" value="<?= $_CONFIG['main_title']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="main_subtitle">Подзаголовок</label>
                                <input name="main_subtitle" type="text" class="form-control" id="main_subtitle" placeholder="Введите подзаголовок" value="<?= $_CONFIG['main_subtitle']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="main_name_button">Название кнопки</label>
                                <input name="main_name_button" type="text" class="form-control" id="main_name_button" placeholder="Введите название кнопки" value="<?= $_CONFIG['main_name_button']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="main_url_button">URL кнопки</label>
                                <input name="main_url_button" type="text" class="form-control" id="main_url_button" placeholder="Введите URL кнопки" value="<?= $_CONFIG['main_url_button']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container col-4">
                    <div class="card container">
                        <div class="upload_image">
                            <div class="form-group">
                                <label>Изображение главного экрана:</label>
                                <input id="js-file-main" class="form_upload_image" type="file" name="file-main" accept=".jpg,.jpeg,.png,.gif">
                            </div>
                            <div class="img-list" id="js-file-list-main">
                                <div class="img-item bg_logo_main">
                                    <img src="/images/<?php echo $_CONFIG['main_image']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex side_right">
                            <input name="submit" type="submit" class="btn btn-primary mt-4" value="Сохранить">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>