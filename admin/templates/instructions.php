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
                                <label for="instructions_title">Заголовок</label>
                                <input name="instructions_title" type="text" class="form-control" id="instructions_title" placeholder="Введите заголовок" value="<?= $_CONFIG['instructions_title']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="instructions_subtitle">Подзаголовок</label>
                                <textarea rows="8" name="instructions_subtitle" class="form-control" id="instructions_subtitle" placeholder="Введите подзаголовок"><?= $_CONFIG['instructions_subtitle']; ?></textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container col-4">
                    <div class="card container">
                        <div class="upload_image">
                            <div class="form-group">
                                <label>Изображение блока:</label>
                                <input id="js-file-instructions" class="form_upload_image" type="file" name="file-instructions" accept=".jpg,.jpeg,.png,.gif">
                            </div>
                            <div class="img-list" id="js-file-list-instructions">
                                <div class="img-item bg_logo_main">
                                    <img src="/images/<?php echo $_CONFIG['instructions_image']; ?>">
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