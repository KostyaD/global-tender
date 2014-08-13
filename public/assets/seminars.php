<?php
    include('sems.php');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=500px, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600&subset=cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container page">
            <div class="inside">
                <header class="menu-fixed menu-colored">
                    <nav>
                        <ul class="menu-ul">
                            <li class="menu-li"><a href="index.html">Главная</a></li>
                            <li class="menu-li active"><a href="seminars.php">Семинары</a></li>
                            <li class="menu-li"><a href="feedback.html">Отзывы</a></li>
                            <li class="menu-li"><a href="lektors.html">Лекторы</a></li>
                            <li class="menu-li"><a href="contacts.html">Контакты</a></li>
                        </ul>
                    </nav>
                </header>

                <main class="wrapper clearfix">
                    <h2 class="title padding-t25">Расписание семинаров</h2>
                    <h3 class="seminar-title">Проверки налоговых схем и «обналички» в 2014 г. Раскрытие собственников. Оптимизация по закону </h3>
                    <ul class="seminars">
                        <?php
                            foreach($semArray['nal'] as $val => $sem) {
                                echo   "<li class=\"seminar\">
                                            <div class=\"seminar-back\" style=\"background-image: url(".$sem[3].");\"></div>
                                            <a href=\"seminar-one.php?act=nal&sem=".$val."\">
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'14</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                                <!--<span>Вертол, 5 улица</span>-->
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>
                    <h3 class="seminar-title">223-ФЗ: новые требования к закупкам унитарных предприятий, автономных учреждений, государственных компаний и субъектов естественных монополий</h3>
                    <ul class="seminars">
                        <!-- <li class="seminar">
                            <div class="seminar-back" style="background-image: url(img/rostov.jpeg);"></div>
                            <a href="seminar-one.html">
                                <span class="sem-date">24 мая <span class="year">'14</span></span>
                                <span class="place">Краснодар</span>
                                <span>Вертол, 5 улица</span>
                            </a>
                        </li> -->
                        <?php
                            foreach($semArray[223] as $val => $sem) {
                                echo   "<li class=\"seminar\">
                                            <div class=\"seminar-back\" style=\"background-image: url(".$sem[3].");\"></div>
                                            <a href=\"seminar-one.php?act=223&sem=".$val."\">
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'14</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                                <!--<span>Вертол, 5 улица</span>-->
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>

                    <!--<h3 class="seminar-title">«Контрактная система в сфере закупок товаров, работ, услуг для обеспечения государственных и муниципальных нужд». Последние обновления в 44 Ф.З. Специальный семинар для поставщиков.</h3>-->
                    <ul class="seminars">
                        <?php
                            foreach($semArray[44] as $val => $sem) {
                                echo   "<li class=\"seminar\">
                                            <div class=\"seminar-back\" style=\"background-image: url(".$sem[3].");\"></div>
                                            <a href=\"seminar-one.php?act=223&sem=".$val."\">
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'14</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                                <!--<span>Вертол, 5 улица</span>-->
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>
                </main>
            </div>
        </div>
        <footer class="footer">
            <span class="fl-l footer-text">Global-Tender &copy; 2010 - 2014</span>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
