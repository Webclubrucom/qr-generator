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
                                <label for="formGroupExampleInput">Логин</label>
                                <input name="username" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин" value="<?= $_CONFIG['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Пароль</label>
                                <input name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="Введите новый пароль">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container col-4">
                    <div class="card container">
                        <div class="card-body d-flex side_right">
                            <p class="mb-4 mt-4">Если вы хотите оставить пароль прежним, не заполняйте поле для ввода пароля, оставьте его пустым.</p>
                            <input name="submit" type="submit" class="btn btn-primary mt-4" value="Сохранить">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>