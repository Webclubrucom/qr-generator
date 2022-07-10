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
                                <label for="google_api_key">Google Api Key</label>
                                <input type="text" name="google_api_key" class="form-control" id="google_api_key" placeholder="Введите Google Api Key" value="<?= $_CONFIG['google_api_key']; ?>">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="container col-4">
                    <div class="card container">
                        <p style="margin-top:20px;">
                            Включите <strong>Maps Javascript API</strong>, а также <strong>Places API</strong> для этого проекта<br>
                            <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key">
                                &gt; Как получить ключ api для Gmaps
                            </a>
                        </p>
                        <div class="card-body d-flex side_right">
                            <input name="submit" type="submit" class="btn btn-primary mt-4" value="Сохранить">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>