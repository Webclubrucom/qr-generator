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
                                <label for="formGroupExampleInput">Название сайта</label>
                                <input name="title_site" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите название сайта" value="<?= $_CONFIG['title_site']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Описание сайта</label>
                                <textarea name="description" rows="3" class="form-control" id="formGroupExampleInput" placeholder="Введите описание сайта"><?= $_CONFIG['description']; ?></textarea>
                            </div>
                            <div class="upload_image">
                                <div class="form-group">
                                    <label>Логотип тёмный:</label>
                                    <input id="js-file" class="form_upload_image" type="file" name="file" accept=".jpg,.jpeg,.png,.gif">
                                </div>
                                <div class="img-list" id="js-file-list">
                                    <div class="img-item">
                                        <img src="/images/tmp/<?php echo $_CONFIG['logo_header']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="upload_image">
                                <div class="form-group">
                                    <label>Логотип светлый:</label>
                                    <input id="js-file-lite" class="form_upload_image" type="file" name="file-lite" accept=".jpg,.jpeg,.png,.gif">
                                </div>
                                <div class="img-list" id="js-file-list-lite">
                                    <div class="img-item bg_logo_lite">
                                        <img src="/images/tmp/<?php echo $_CONFIG['logo_footer']; ?>">
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
                <div class="container col-4">
                    <div class="card container">
                        <div class="form-group">
                            <label for="vkontakte">ВКонтакте</label>
                            <input name="vkontakte" type="text" class="form-control" id="vkontakte" placeholder="Введите ссылку на страницу ВК" value="<?= $_CONFIG['vkontakte']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="odnoklassniki">Одноклассники</label>
                            <input name="odnoklassniki" type="text" class="form-control" id="odnoklassniki" placeholder="Введите ссылку на страницу ОК" value="<?= $_CONFIG['odnoklassniki']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input name="youtube" type="text" class="form-control" id="youtube" placeholder="Введите ссылку на страницу Youtube" value="<?= $_CONFIG['youtube']; ?>">
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