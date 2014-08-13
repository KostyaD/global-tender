@extends('layouts.static')

@section('content')

<?php

$semArray = array(
    '223' => array(
        //'nov223' => array('Великий Новгород', '11 июля', '', 'img/city/vel_nov.jpg'),         
        //'kostroma223' => array('Кострома', '24 июля', '', 'img/city/kostroma.jpg'),         
        //'yaroslavl223' => array('Ярославль', '25 июля', '', 'img/city/yaroslavl.jpg'),
        //'vologda223' => array('Вологда', '01 августа', '', 'http://tourvologda.ru/images/kr_plosh_fl.jpg'),
        'piter223' => array('Санкт-Петербург', '15 августа', '', 'http://ved69.ru/images/Spb.jpg'),
        'yl223' => array('Ульяновск', '08 августа', '', 'http://xn----7sbaba0dyat1arg.xn--p1ai/image/3panorama-1.jpg'),
        //'vladimir223' => array('Владимир', '11 августа', '', 'http://www.zapoved.ru/photos/9bab/db77/834c/1083/95b7/ee05/50a8/bbba/large.jpg?2880811'),
        'petroz223' => array('Петрозаводск', '28 августа', '', 'img/city/petroz.jpg'),
        'vor223' => array('Воронеж', '22 августа', '', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        'cheb223' => array('Чебоксары', '29 августа', '', 'http://www.mrtrans.ru/uploads/tiny/ceb.jpg'), 
        'birb223' => array('Биробиджан', '15 сентября', '', 'http://biradm.ru/files/potr/pict/2012_2.jpg'), 
        'xab223' => array('Хабаровск', '19 сентября', '', 'http://organum-visus.com/sites/default/files/styles/1024x768/public/news_mini_top_img/khabarovsk-organum-visus-eyenews-120712g.jpeg?itok=C7U8OkzE&slideshow=true&slideshowAuto=false&slideshowSpeed=4000&speed=350&transition=fade'),       
        /*
        'city223' => array('Ярославль', '25 июля 2014', '', 'http://'),         
        */
        ),
    '44'  => array(
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

                    <!--<h3 class="seminar-title">«Контрактная система в сфере закупок товаров, работ, услуг для обеспечения государственных и муниципальных нужд». Последние обновления в 44 Ф.З. Специальный семинар для поставщиков.</h3>-->
                    <ul class="seminars">
                        <?php
                            foreach($semArray[44] as $val => $sem) {
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
                </main>
@stop