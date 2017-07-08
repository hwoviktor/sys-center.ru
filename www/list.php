<?php

define('_SYS', 1);
define('__ROOT__', dirname(__FILE__));

header('Content-Type: text/html; charset=utf-8');

if (!file_exists(__ROOT__.'/config.php')) {
    require_once(__ROOT__.'/config.php');
}

?>
<!DOCTYPE html>
<html lang="ru">
<?php

include 'header.php'

?>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-default topnav" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="#">SYS-CENTER.RU</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/index.php"><i class="fa fa-home"></i> На главную</a></li>
                <li><a href="https://vk.com/mikrotik_os" target="_blank">Группа VK</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#partners">Партнёры</a></li>
                <li><a href="#partners"><i class="fa fa-bars"></i></a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Фильтры</div>
                <div class="panel-body">
                    <ul>
                        <li>Фильтр 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Новости и статьи</div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="https://vk.com/thoruvell">
                                <img src="https://pp.userapi.com/c638625/v638625080/3fd3e/OVMYlOZvih0.jpg">
                            </a>
                            <a href="https://vk.com/thoruvell">Марк Бузоверов</a>
                            <span class="label label-default">сегодня в 15:50</span>
                        </div>
                        <div class="panel-body">
                            <p>Соцопрос на тему резервирования) кто как реализует? Рекурсивный маршрут, netwatch, ospf, собственные скрипты?</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
