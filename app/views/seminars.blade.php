@extends('layouts.static')

@section('content')

<?php

$semArray = array(
    '223' => array(
        //'nov223' => array('Великий Новгород', '11 июля', '', 'img/city/vel_nov.jpg'),         
        //'kostroma223' => array('Кострома', '24 июля', '', 'img/city/kostroma.jpg'),         
        //'yaroslavl223' => array('Ярославль', '25 июля', '', 'img/city/yaroslavl.jpg'),
        //'vologda223' => array('Вологда', '01 августа', '', 'http://tourvologda.ru/images/kr_plosh_fl.jpg'),
        //'piter223' => array('Санкт-Петербург', '15 августа', '', 'http://ved69.ru/images/Spb.jpg'),
        //'yl223' => array('Ульяновск', '08 августа', '', 'http://xn----7sbaba0dyat1arg.xn--p1ai/image/3panorama-1.jpg'),
        //'vladimir223' => array('Владимир', '11 августа', '', 'http://www.zapoved.ru/photos/9bab/db77/834c/1083/95b7/ee05/50a8/bbba/large.jpg?2880811'),
        //'birb223' => array('Биробиджан', '15 сентября', '', 'http://biradm.ru/files/potr/pict/2012_2.jpg'), 
        //'petroz223' => array('Петрозаводск', '28 августа', '', 'http://www.vokrugsveta.ru/encyclopedia/images/e/e4/Petrozavodsk_Naberezhnaya.jpg'),
        //'vor223' => array('Воронеж', '22 августа', '', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        //'cheb223' => array('Чебоксары', '29 августа', '', 'http://www.mrtrans.ru/uploads/tiny/ceb.jpg'), 
        'saransk223' => array('Саранск', '05 сентября', '', 'http://www.udikov.ru/wp-content/uploads/2012/11/Saransk.jpg'), 
        'moscow223' => array('Москва', '12 сентября', '', 'http://www.mandri.lg.ua/kcfinder/img/images/Moscow-1600x900-005.jpg'), 
        'kaliningrad223' => array('Псков', '15 сентября', '', 'http://turflot.ru/files/img/holidaysrussia/18/imya-fajla_250.jpg'), 
        'xab223' => array('Хабаровск', '15 сентября', '', 'http://organum-visus.com/sites/default/files/styles/1024x768/public/news_mini_top_img/khabarovsk-organum-visus-eyenews-120712g.jpeg?itok=C7U8OkzE&slideshow=true&slideshowAuto=false&slideshowSpeed=4000&speed=350&transition=fade'),       
        'vlad223' => array('Владивосток', '16 сентября', '', 'http://s.pikabu.ru/post_img/big/2013/10/23/5/1382508326_1790634624.jpg'), 
        ),
    '44'  => array(
        'rostov44' => array('Ростов-на-Дону', '12 сентября', '', 'http://upload.wikimedia.org/wikipedia/ru/0/0f/%D0%9D%D0%B0%D0%B1%D0%B5%D1%80%D0%B5%D0%B6%D0%BD%D0%B0%D1%8F_%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D0%B0-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83.jpg'), 
        ),
    'nal'  => array(
        ),
    );

?>
                <main class="wrapper clearfix">
                    <h2 class="title padding-t25">Расписание семинаров</h2>
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
                                            <a href=\"seminar?act=223&sem=".$val."\">
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'14</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                                <!--<span>Вертол, 5 улица</span>-->
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>

                    <h3 class="seminar-title">Госзакупки. Переход к федеральной контрактной системе: Федеральный закон от 05.04.2013 № 44-ФЗ</h3>
                    <ul class="seminars">
                        <?php
                            foreach($semArray[44] as $val => $sem) {
                                echo   "<li class=\"seminar\">
                                            <div class=\"seminar-back\" style=\"background-image: url(".$sem[3].");\"></div>
                                            <a href=\"seminar?act=44&sem=".$val."\">
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'14</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                                <!--<span>Вертол, 5 улица</span>-->
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>
                </main>
@stop