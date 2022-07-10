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
                                <label for="promo_title">Заголовок</label>
                                <input name="promo_title" type="text" class="form-control" id="promo_title" placeholder="Введите заголовок" value="<?= $_CONFIG['promo_title']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="promo">URL видео Youtube</label>
                                <input name="promo" type="text" class="form-control" id="promo" placeholder="Введите ссылку на видео Youtube" value="<?= $_CONFIG['promo']; ?>">
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