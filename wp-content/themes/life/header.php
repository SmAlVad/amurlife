<!doctype html>
<html class="no-js t-life" lang="ru-RU">

<head>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="<?php bloginfo("charset"); ?>" />

	<?php wp_head(); ?>
</head>

<body class="page">

<div class="menu-f">

    <div class="mob-m">
	    <?php wp_nav_menu([
		    "theme_location" => "mob-m",
		    "container" => false,
		    "menu_class" => "",
	    ]); ?>
    </div>

    <ul class="step">

    </ul>

	<?php wp_nav_menu([
		"theme_location" => "left",
		"container" => false,
		"menu_class" => "",
	]); ?>

    <a href="/news/news/adduser" class="btn btn_blue">Поделиться новостью</a>

    <div class="mob-footer">
        <ul>
            <li><a href="#" id="par">Партнёры</a>
            </li>
            <li><a href="#" id="spec">Спецпроекты</a>
            </li>
            <li><a href="#" id="cont">Контакты</a>
            </li>
        </ul>
        <a href="/news/news/adduser" class="btn btn_blue">Поделиться новостью</a>
        <a href="#" class="btn btn_blue">войти на сайт</a>

        <div class="wrap-logo">

            <a href="http://life.amur.info/" class="s-logo">
                <img src="/templates/life/images/lifelogo.png" alt="amur.info"/>

                <div class="ogr"><span>+18</span>
                </div>
            </a>

        </div>
        <div class="copy">
            <p>© 2002—2018, в новостной ленте используются материалы Информационного Агентства «Амур.инфо». Все права
                защищены.
                <br/>Свидетельство о регистрации СМИ ИА № ФС77-24536 от 29.05.2006 г., выдано Федеральной службой по
                надзору за соблюдением законодательства в сфере массовых коммуникаций и охране культурного
                наследия.<br/>
                Учредитель: ООО «Компания Игра»
            </p>
        </div>
    </div>
</div>

<div class="menu-f-popup menu-f-popup_par">
    <a href="#" class="prev"><i></i>Назад</a>
    <ul>
        <li><a href="http://video.amur.info/deti/">Телемарафон «крылья»</a>
        </li>
        <li><a href="http://expo.amur.info/">Амурэкспофорум</a>
        </li>
    </ul>
</div>
<div class="menu-f-popup menu-f-popup_cont">
    <a href="#" class="prev"><i></i>Назад</a>

    <div class="cont">
        <span>Телемарафон «крылья»</span>

        <div class="tel">
            <a href="tel:(4162) 222-744">(4162) 222-744</a>
        </div>
        <div class="mail">
            <a href="mailto:info@amur.info">info@amur.info</a>
        </div>
        <div class="link">
            <a href="http://www.amur.info/page/usage">Условия использованияматериалов</a>
        </div>
        <div class="link">
            <a href="http://about.amur.info/">О нас</a>
        </div>
    </div>
    <div class="cont">
        <span>Реклама</span>

        <div class="tel">
            <a href="tel:(4162) 222-711">(4162) 222-711</a>
        </div>
        <div class="mail">
            <a href="mailto:reklama@amur.info">reklama@amur.info</a>
        </div>
        <div class="link">
            <a href="http://www.amur.info/files/price_amurinfo.pdf">Скачать прайс-лист</a>
        </div>
    </div>
    <div class="cont">
        <span>ТК Альфа-канал</span>

        <div class="tel">
            <a href="tel:(4162) 222-727">(4162) 222-727</a>
        </div>
    </div>
</div>

<!--<div class="mob-menu">-->

<!--</div>-->

<header>
    <div class="header-top">

        <a href="<?= home_url(); ?>" class="logo">
            <?//= get_custom_logo(); ?>
        </a>

        <div class="burger mobile-show">
            <div class="burger_s">
                <div class="row row-1"><span class="line-1"></span><span class="line-2"></span>
                </div>
                <div class="row row-2"><span class="line-1"></span><span class="line-2"></span>
                </div>
                <div class="row row-3"><span class="line-1"></span><span class="line-2"></span>
                </div>
            </div>
        </div>
        <div class="wrap-center greedy mobile-hide">
            <div class="burger">
                <div class="burger_s">
                    <div class="row row-1"><span class="line-1"></span><span class="line-2"></span>
                    </div>
                    <div class="row row-2"><span class="line-1"></span><span class="line-2"></span>
                    </div>
                    <div class="row row-3"><span class="line-1"></span><span class="line-2"></span>
                    </div>
                </div>
            </div>

			<?php wp_nav_menu([
				"theme_location" => "top",
				"container" => false,
				"menu_class" => "link-menu",
			]); ?>

        </div>

        <div class="data">
            <span><?= date("d"); ?>.</span><b><?= date("m"); ?></b>
        </div>
    </div>
    <div class="header-info" style="background-color: #FCC;">
        <div class="comerc">
        </div>

        <div class="head-tools" style="float: right; padding-right: 32px;">

            <!--WhatsApp block-->
            <div class="" style="margin-bottom: 5px;">
            </div>
        </div>
    </div>
</header>