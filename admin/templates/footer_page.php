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
                                <label for="text_footer">Текст в футере</label>
                                <textarea rows="6" name="text_footer" class="form-control" id="text_footer" placeholder="Введите тескт"><?= $_CONFIG['text_footer']; ?></textarea>
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