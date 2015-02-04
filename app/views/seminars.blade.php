@extends('layouts.static')

@section('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>"Глобал Тендер" CЕМИНАРЫ ПО ГОСУДАРСТВЕННЫМ ЗАКУПКАМ</title>
        <meta name="description" content="">
@stop

@section('content')

<?php

$semArray = array(
    '223' => array(
        // 'nov223' => array('Великий Новгород', '11 июля', '', 'img/city/vel_nov.jpg'),         
        // 'kostroma223' => array('Кострома', '24 июля', '', 'img/city/kostroma.jpg'),         
        // 'yaroslavl223' => array('Ярославль', '25 июля', '', 'img/city/yaroslavl.jpg'),
        // 'vologda223' => array('Вологда', '01 августа', '', 'http://tourvologda.ru/images/kr_plosh_fl.jpg'),
        // 'piter223' => array('Санкт-Петербург', '15 августа', '', 'http://ved69.ru/images/Spb.jpg'),
        // 'yl223' => array('Ульяновск', '08 августа', '', 'http://xn----7sbaba0dyat1arg.xn--p1ai/image/3panorama-1.jpg'),
        // 'vladimir223' => array('Владимир', '11 августа', '', 'http://www.zapoved.ru/photos/9bab/db77/834c/1083/95b7/ee05/50a8/bbba/large.jpg?2880811'),
        // 'birb223' => array('Биробиджан', '15 сентября', '', 'http://biradm.ru/files/potr/pict/2012_2.jpg'), 
        // 'petroz223' => array('Петрозаводск', '28 августа', '', 'http://www.vokrugsveta.ru/encyclopedia/images/e/e4/Petrozavodsk_Naberezhnaya.jpg'),
        // 'vor223' => array('Воронеж', '22 августа', '', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        // 'cheb223' => array('Чебоксары', '29 августа', '', 'http://www.mrtrans.ru/uploads/tiny/ceb.jpg'), 
        // 'saransk223' => array('Саранск', '05 сентября', '', 'http://www.udikov.ru/wp-content/uploads/2012/11/Saransk.jpg'), 
        // 'moscow223' => array('Москва', '12 сентября', '', 'http://www.mandri.lg.ua/kcfinder/img/images/Moscow-1600x900-005.jpg'), 
        // 'kaliningrad223' => array('Псков', '15 сентября', '', 'http://turflot.ru/files/img/holidaysrussia/18/imya-fajla_250.jpg'), 
        // 'xab223' => array('Хабаровск', '15 сентября', '', 'http://organum-visus.com/sites/default/files/styles/1024x768/public/news_mini_top_img/khabarovsk-organum-visus-eyenews-120712g.jpeg?itok=C7U8OkzE&slideshow=true&slideshowAuto=false&slideshowSpeed=4000&speed=350&transition=fade'),       
        // 'vlad223' => array('Владивосток', '16 сентября', '', 'http://s.pikabu.ru/post_img/big/2013/10/23/5/1382508326_1790634624.jpg'), 
        //'krasn223' => array('Красноярск', '03 октября', '', 'http://img-fotki.yandex.ru/get/5708/dedmaxopka.12/0_5737b_b8cfde9d_orig'),
        //'yo223' => array('Йошкар-Ола', '10 октября', '', 'http://www.udikov.ru/wp-content/uploads/2013/01/Yoyo2.jpg'),
        //'chel223' => array('Челябинск', '17 октября', '', 'http://img.balakirev.me/2014/03-chelyabinsk-from-height/11.jpg'),
        //'elista223' => array('Элиста', '17 октября', '', 'http://ttkufo.ru/sites/default/files/images/gallery/elista_07_by_abirvalg1989-d4yx2xw.jpg'),
        //'kurgan223' => array('Курган', '18 октября', '', 'http://ic.pics.livejournal.com/sleeppy_peeppy/29526628/75418/original.jpg'),
        //'piter223' => array('Санкт-Петербург', '20 октября', '', 'http://ved69.ru/images/Spb.jpg'),
        //'nizh223' => array('Нижний Новгород', '27 октября', '', 'http://www.zercalo.org/ihost/images/2014/06/17/%D0%B1%D0%B0%D0%B1%D1%8C%D0%B5_%D0%BB%D0%B5%D1%82%D0%BE_%D0%BD%D0%B8%D0%B6%D0%BD%D0%B8%D0%B9_%D0%BD%D0%BE%D0%B2%D0%B3%D0%BE%D1%80%D0%BE%D0%B48.jpg'),
        //'arch223' => array('Архангельск', '31 октября', '', 'http://fotki29.ru/images/1/dvina_arkhangelsk_.jpg'),
        //'stav223' => array('Ставрополь', '06 ноября', '', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'),
        //'eka223' => array('Екатеринбург', '28 ноября', '', 'http://www.ekaterinburg.tv/images/images_city/em57.jpg'),
        //'nov223' => array('Новосибирск', '21 ноября', '', 'http://upload.wikimedia.org/wikipedia/commons/5/58/%D0%92%D0%BE%D0%BA%D0%B7%D0%B0%D0%BB_%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%D0%B0.jpg'),
        //'bar223' => array('Барнаул', '22 ноября', '', 'http://static.panoramio.com/photos/large/55681876.jpg'),
        //'yfa223' => array('Уфа', '04 декабря', '', 'http://cs.holaplaya.com/uploads/sites/3/2014/10/137546_original.jpg'),
        //'vladimir223' => array('Владимир', '11 декабря', '', 'http://www.zapoved.ru/photos/9bab/db77/834c/1083/95b7/ee05/50a8/bbba/large.jpg?2880811'),
        //'ivanovo223' => array('Иваново', '11 декабря', '', 'http://bestmaps.ru/files/content_images/20130603114336.jpg'),
        //'blag' => array('Благовещенск', '15 января', '15', 'http://www.infokart.ru/wp-content/uploads/2013/02/blagoveshchensk_gorod.jpg'),
        //'xab' => array('Хабаровск', '16 января', '15', 'http://organum-visus.com/sites/default/files/styles/1024x768/public/news_mini_top_img/khabarovsk-organum-visus-eyenews-120712g.jpeg?itok=C7U8OkzE&slideshow=true&slideshowAuto=false&slideshowSpeed=4000&speed=350&transition=fade'),       
        //'astrahan' => array('Астрахань', '23 января', '15', 'http://nesiditsa.ru/wp-content/uploads/2012/07/Astrahan.jpeg'),
        //'yaroslavl' => array('Ярославль', '2 февраля', '15', 'img/city/yaroslavl.jpg'),
        'murmansk' => array('Мурманск', '6 февраля', '15', 'http://miriam-tour.ru/pic/kola_murmansk_01b.jpg'),
        'perm' => array('Пермь', '9 февраля', '15', 'http://cs14114.vk.me/c540101/v540101358/18bc/RMQMN0TirLc.jpg'),
        'kaliningrad' => array('Калининград', '13 февраля', '15', 'http://turflot.ru/files/img/holidaysrussia/18/otdih-v-kaliningradskoj-oblasti---starinnie-ulochki-kaliningradskoj-oblasti_250.jpg'),
        'tumen' => array('Тюмень', '16 февраля', '15', 'http://www.argoturs.ru/userfiles/image/catalog/original/1355322418_dsc05201.jpg?PHPSESSID=f10466dcb0ccab58cf928330ab91c007'),
        'volgograd' => array('Волгоград', '19 февраля', '15', 'http://skuki.net/photos/5076/b5ddd5a7.jpg'),
        'surgut' => array('Сургут', '02 марта', '15', 'http://www.surgeo.ru/wp-content/uploads/2012/02/%D0%92%D0%B8%D0%B4-%D0%BD%D0%B0-%D0%93%D1%80%D0%B5%D1%81-%D0%A1%D1%83%D1%80%D0%B3%D1%83%D1%82-%D0%A1%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D1%8F-%D0%92%D0%B5%D0%BD%D0%B5%D1%86%D0%B8%D1%8F.jpg'),
        'rostov' => array('Ростов-на-Дону', '04 марта', '', 'http://upload.wikimedia.org/wikipedia/ru/0/0f/%D0%9D%D0%B0%D0%B1%D0%B5%D1%80%D0%B5%D0%B6%D0%BD%D0%B0%D1%8F_%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D0%B0-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83.jpg'),
        'saratov' => array('Саратов', '05 марта', '15', 'http://upload.wikimedia.org/wikipedia/commons/6/6c/%D0%A1%D0%B0%D1%80%D0%B0%D1%82%D0%BE%D0%B2_%D1%81_%D0%92%D0%BE%D0%BB%D0%B3%D0%B8_(2012).jpg'),
        'krasn' => array('Красноярск', '05 марта', '15', 'http://img-fotki.yandex.ru/get/5708/dedmaxopka.12/0_5737b_b8cfde9d_orig'),
        'orel' => array('Орел', '26 марта', '15', 'http://www.megatur.ru/images/turi_v_orel.jpg'),
        'tula' => array('Тула', '27 марта', '15', 'http://www.bintrip.net/news/64/img_64_2.jpg'),
        ),
    '44'  => array(
         //'belgorod' => array('Белгород', '30 января', '15', 'http://trans-continental.ru/wp-content/uploads/2013/12/41907831.jpg'),
        'voronezh' => array('Воронеж', '18 февраля', '15', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        //'ryzan' => array('Рязань', '18 февраля', '15', 'http://ryazan.igid.ru/img/upload/photos/66939df1c60a354c5c76e5def4cddd6a_1024_0.jpg'), 
        'stavropol' => array('Ставрополь', '27 февраля', '15', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'), 
        //'stav223' => array('Ставрополь', '24 ноября', '', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'), 
        //'rostov44' => array('Ростов-на-Дону', '11 декабря', '', 'http://upload.wikimedia.org/wikipedia/ru/0/0f/%D0%9D%D0%B0%D0%B1%D0%B5%D1%80%D0%B5%D0%B6%D0%BD%D0%B0%D1%8F_%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D0%B0-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83.jpg'), 
        //'moscow' => array('Москва', '28 ноября', '', 'http://www.mandri.lg.ua/kcfinder/img/images/Moscow-1600x900-005.jpg'),
        //'stav44' => array('Ставрополь', '10 октября', '', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'),
        //'arch44' => array('Архангельск', '16 октября', '', 'http://fotki29.ru/images/1/dvina_arkhangelsk_.jpg'),
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
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'".$sem[2]."</span></span>
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
                                                <span class=\"sem-date\">".$sem[1]." <span class=\"year\">'".$sem[2]."</span></span>
                                                <span class=\"place\">".$sem[0]."</span>
                                                <!--<span>Вертол, 5 улица</span>-->
                                            </a>
                                        </li>";
                            }
                        ?>
                    </ul>
                </main>
@stop