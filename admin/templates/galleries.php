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
                                <label for="galleries_title">Заголовок</label>
                                <input name="galleries_title" type="text" class="form-control" id="galleries_title" placeholder="Введите заголовок" value="<?= $_CONFIG['galleries_title']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="galleries_desc">Описание</label>
                                <textarea rows="3" name="galleries_desc" class="form-control" id="galleries_desc" placeholder="Введите описание"><?= $_CONFIG['galleries_desc']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image_one">Ссылка на изображение 1</label>
                                <input name="image_one" type="text" class="form-control" id="image_one" placeholder="Введите ссылку на изображение" value="<?= $_CONFIG['image_one']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="text_image_one">Подпись изображения 1</label>
                                <input name="text_image_one" type="text" class="form-control" id="text_image_one" placeholder="Введите подпись изображения" value="<?= $_CONFIG['text_image_one']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="image_two">Ссылка на изображение 2</label>
                                <input name="image_two" type="text" class="form-control" id="image_two" placeholder="Введите ссылку на изображение" value="<?= $_CONFIG['image_two']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="text_image_two">Подпись изображения 2</label>
                                <input name="text_image_two" type="text" class="form-control" id="text_image_two" placeholder="Введите подпись изображения" value="<?= $_CONFIG['text_image_two']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="image_three">Ссылка на изображение 3</label>
                                <input name="image_three" type="text" class="form-control" id="image_three" placeholder="Введите ссылку на изображение" value="<?= $_CONFIG['image_three']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="text_image_three">Подпись изображения 3</label>
                                <input name="text_image_three" type="text" class="form-control" id="text_image_three" placeholder="Введите подпись изображения" value="<?= $_CONFIG['text_image_three']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="image_four">Ссылка на изображение 4</label>
                                <input name="image_four" type="text" class="form-control" id="image_four" placeholder="Введите ссылку на изображение" value="<?= $_CONFIG['image_four']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="text_image_four">Подпись изображения 4</label>
                                <input name="text_image_four" type="text" class="form-control" id="text_image_four" placeholder="Введите подпись изображения" value="<?= $_CONFIG['text_image_four']; ?>">
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