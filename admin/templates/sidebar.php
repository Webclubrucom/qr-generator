<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/admin/dashboard"><?= $_CONFIG['title_site']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
            <li class="nav-item active">
                <a class="nav-link" href="/admin/dashboard">Главный экран</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/advantages">Преимущества</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/instructions">Инструкции</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/generator">Генератор</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/promo">Промо видео</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/ads">Реклама</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/galleries">Галерея</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/footer_page">Футер</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-collapse" href="#" id="hasSubItems" data-toggle="collapse" data-target="#collapseSubItems2" aria-controls="collapseSubItems2" aria-expanded="false">Настройки</a>
                <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/settings">
                            <span class="nav-link-text">Настройки сайта</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/modules">
                            <span class="nav-link-text">Модули</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/google_api">
                            <span class="nav-link-text">Google Api Key</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/profile">Профиль </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login?do=logout">Выход </a>
            </li>

        </ul>
        <div class="header">
            <div>
                <a href="/" target="_blank" class="btn btn-outline-primary my-2 my-sm-0">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </div>
</nav>