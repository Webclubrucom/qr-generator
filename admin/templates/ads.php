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
                                <label for="ads">Код рекламного блока</label>
                                <textarea rows="7" name="ads" class="form-control" id="ads" placeholder="Введите код рекламного блока"><?= $_CONFIG['ads']; ?></textarea>
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