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
                                <label for="advantage_one">Преимущество 1</label>
                                <input name="advantage_one" type="text" class="form-control" id="advantage_one" placeholder="Введите преимущество 1" value="<?= $_CONFIG['advantage_one']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="main_description_one">Описание 1</label>
                                <textarea rows="3" name="main_description_one" class="form-control" id="main_description_one" placeholder="Введите описание 1"><?= $_CONFIG['main_description_one']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="advantage_two">Преимущество 2</label>
                                <input name="advantage_two" type="text" class="form-control" id="advantage_two" placeholder="Введите преимущество 2" value="<?= $_CONFIG['advantage_two']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="main_description_two">Описание 2</label>
                                <textarea rows="3" name="main_description_two" class="form-control" id="main_description_two" placeholder="Введите описание 2"><?= $_CONFIG['main_description_two']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="advantage_three">Преимущество 3</label>
                                <input name="advantage_three" type="text" class="form-control" id="advantage_three" placeholder="Введите преимущество 3" value="<?= $_CONFIG['advantage_three']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="main_description_three">Описание 3</label>
                                <textarea rows="3" name="main_description_three" class="form-control" id="main_description_three" placeholder="Введите описание 3"><?= $_CONFIG['main_description_three']; ?></textarea>
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