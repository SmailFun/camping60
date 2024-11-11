<nav class="navbar navbar-default default">
    <div class="container-fluid"> <!-- Добавил контейнер -->
        <div class="navbar-header">
            <div class="basic-wrapper">
                <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse">
                    <i></i>
                </a>
                <div class="navbar-brand">
                    <a href="/">
                        <img src="#" srcset="{{ asset("style/images/logo.svg") }}" class="logo-light" style=" margin-left: 30px;" alt="" />
                        <img src="#" srcset="{{ asset("style/images/logo.svg") }}" class="logo-dark" style=" margin-left: 30px;" alt="" />
                    </a>
                </div>
                <!-- /.navbar-brand -->
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="current dropdown"><a href="/" class="dropdown-toggle js-activated" data-toggle="dropdown">Главная<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/">Кемпинг Остров</a></li>
                        <li><a href="//">Кемпинг Смоленка</a></li>
                        <li><a href="//">Дома Псков</a></li>
                    </ul>
                </li>
                <li class="dropdown" ><a href="/booking" class="dropdown-toggle">Бронировать</a></li>
                <li class="dropdown" ><a href="/coffee" class="dropdown-toggle">Кафе</a></li>
                <li class="dropdown" ><a href="/contacts" class="dropdown-toggle">Контакты</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- /.navbar -->


