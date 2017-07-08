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
    <div class="panel panel-default">
        <div class="panel-heading">MikroTik, Ubiquiti, Linux, FreeBSD</div>
        <div class="panel-body">
            <div class="row">
            <div class="col-md-2">
                <img class="img-responsive center-block" src="/static/images/logo.png" />
            </div>
            <div class="col-md-10">
                <p>Компьютерные сети - от новичка к профессионалу!</p>
                <p>Здесь мы будем учиться настраивать и правильно строить компьютерную сеть. Вести обсуждение оборудования разных производителей, рассмотрение технологий, топологий и решать возникшие трудности.</p>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">О нас</div>
        <div class="panel-body">
            <p>Мы - группа бойцов невидимого фронта.</p>
        </div>
    </div>
</div>

<a name="partners"></a>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">Партнёры</div>
        <div class="panel-body">
            <a class="btn btn-default" href="https://justhost.ru/" target="_blank">JustHost.ru</a>
            <a class="btn btn-default" href="http://telecom-sales.ru/" target="_blank">telecom-sales.ru</a>
            <a class="btn btn-default" href="http://mikrotik-sibir.ru/" target="_blank">mikrotik-sibir.ru</a>
            <a class="btn btn-default" href="http://ru.blitzortung.org" target="_blank">Молния и гроза в реальном времени - Карты Google</a>
            <a class="btn btn-default" href="http://ubnt.com" target="_blank">Ubiquiti Networks</a>
            <a class="btn btn-default" href="http://eth0.me" target="_blank">твой IP</a>
            <a class="btn btn-default" href="http://mikrotik.com" target="_blank">MikroTik Routers and Wireless</a>
            <a class="btn btn-default" href="http://searchmac.com" target="_blank">SearchMac.com - vendor search by MAC | MAC address lookup service</a>
        </div>
    </div>
</div>

</body>
</html>
