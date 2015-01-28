@extends('layouts.main')

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
        'yaroslavl' => array('Ярославль', '2 февраля', '15', 'img/city/yaroslavl.jpg'),
        'murmansk' => array('Мурманск', '6 февраля', '15', 'http://miriam-tour.ru/pic/kola_murmansk_01b.jpg'),
        'perm' => array('Пермь', '9 февраля', '15', 'http://cs14114.vk.me/c540101/v540101358/18bc/RMQMN0TirLc.jpg'),
        'kaliningrad' => array('Калининград', '13 февраля', '15', 'http://turflot.ru/files/img/holidaysrussia/18/otdih-v-kaliningradskoj-oblasti---starinnie-ulochki-kaliningradskoj-oblasti_250.jpg'),
        'tumen' => array('Тюмень', '16 февраля', '15', 'http://www.argoturs.ru/userfiles/image/catalog/original/1355322418_dsc05201.jpg?PHPSESSID=f10466dcb0ccab58cf928330ab91c007'),
        'volgograd' => array('Волгоград', '19 февраля', '15', 'http://skuki.net/photos/5076/b5ddd5a7.jpg')
        ),
    '44'  => array(
        'belgorod' => array('Белгород', '30 января', '15', 'http://trans-continental.ru/wp-content/uploads/2013/12/41907831.jpg'),
        'voronezh' => array('Воронеж', '18 февраля', '15', 'http://bestmaps.ru/files/content_images/20130204134915.jpg'), 
        'ryzan' => array('Рязань', '18 февраля', '15', 'http://ryazan.igid.ru/img/upload/photos/66939df1c60a354c5c76e5def4cddd6a_1024_0.jpg'), 
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

    $seminar = $semArray[$_GET['act']][$_GET['sem']];

?>

            <div class="wrapper-full sem-city" style="background-image: url(<?=$seminar[3]?>)">
                    <div class="city-info">
                        <div class="wrapper">
                            <div><span class="city-date"><?=$seminar[1]?> 2014</span> <?=$seminar[0]?></div>
                        </div>
                    </div>
                </div>
                <main class="wrapper clearfix">

                    <?php 
                        if($_GET['act'] == '223') {
                    ?>

                    <div class="sem-info">

                        <!-- <div class="row">
                            <span class="sem-name">Место проведения:</span><span class="sem-val">Вертол Экспо</span>
                        </div> -->
                        @if($seminar[0] == 'Москва')
                            <div class="row">
                                    <span class="sem-name">Время:</span><span class="sem-val">с 11:00 до 17:00</span>
                            </div>
                            <div class="row">
                                <span class="sem-name">Стоимость:</span><!--
                                --><span class="sem-val">6500 рублей <a class="apply-us-btn js-pop-show" data-popup="apply" href="#">Подать заявку</a><!-- , при подаче заявки с сайта <span class="sem-sale">скидка 10%</span> --></span>
                            </div>
                        @else 
                            <div class="row">
                                    <span class="sem-name">Время:</span><span class="sem-val">с 11:00 до 16:00</span>
                            </div>
                            <div class="row">
                                <span class="sem-name">Стоимость:</span><!--
                                --><span class="sem-val">6500 рублей <a class="apply-us-btn js-pop-show" data-popup="apply" href="#">Подать заявку</a><!-- , при подаче заявки с сайта <span class="sem-sale">скидка 10%</span> --></span>
                            </div>
                        @endif
                            
                        <div class="row">
                            <span class="sem-name">Контактное лицо:</span><span class="sem-val">Кристина Олеговна</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Телефон:</span><span class="sem-val">+7 (961) 286-91-31</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
                        </div>
                        <hr>
                        <table class="seminar-table">
                            <tr>
                                <td>Время</td>
                                <td>Тема</td>
                            </tr>
                            <tr>
                                <td>10:30-11:00</td>
                                <td>
                                    Регистрация участников
                                </td>
                            </tr>
                            <tr>
                                <td>11:00-11:05</td>
                                <td>
                                    Приветственное слово участникам семинара
                                </td>
                            </tr>
                            <tr>
                                <td>11:05-13:00</td>
                                <td>
                                    <ul>
                                        <li>Федеральный закон от 18 июля 2011 г. 223-ФЗ «О закупках товаров, работ, услуг отдельными видами юридических лиц»
                                        <li>Правовая основа закупки товаров, работ, услуг. Основания и возможности проведения бюджетными учреждениями закупок по 223-ФЗ.
                                        <li>Основные нормы и правила, сроки и порядок вступления в силу федерального закона  223-ФЗ: 
                                        <li>Цели и отношения, регулируемые Федеральным  законом  223-ФЗ от 18.07.2011
                                        <li>Общие принципы закупки товаров, работ, услуг
                                        <li>Основные требования к закупке товаров, работ, услуг
                                        <li>Неурегулированные вопросы закона.
                                        <li>Вопросы, планируемые к внесению в законодательство.
                                        <li>Изменения 223-ФЗ. КоАПы;
                                        <li>Проекты Постановлений Правительства РФ
                                        <li>Порядок осуществления контроля. Роль ФАС России в системе контроля корпоративных закупок после вступления в силу Федерального закона от 18 июля 2011 г. 223-ФЗ «О закупках товаров, работ, услуг отдельными видами юридических лиц». Функции Федеральной антимонопольной службы при проведении плановых и внеплановых проверок отдельных видов юридических лиц
                                        <li>Штрафные санкции за нарушение норм и требований Федерального закона и иных принятых в соответствии с ним нормативных правовых актов Российской Федерации
                                        <li>Предмет и порядок обжалования действий (бездействий) заказчика при закупке товаров, работ, услуг 
                                        <li>Реестр недобросовестных поставщиков (по 44-ФЗ и 223-ФЗ) 
                                        <li>Типичные нарушения заказчиков при размещении заказов 
                                        <li>Обжалование в антимонопольных  органах и в суде действий (бездействий) заказчика, совершенных при закупке товаров, работ, услуг. Новый порядок обжалования закупок
                                        <li>Практика обжалований. Подготовка заказчика к защите своих интересов в случае подачи участником закупочной процедуры жалобы или иска 
                                        <li>Установление в положении о закупке требований, защищающих права и интересы заказчика: требований к участникам закупок, к обеспечению закупки, а также к порядку заключения и исполнения договоров
                                        <li>Порядок соблюдения норм и требований 135-ФЗ «О защите конкуренции»
                                        <li>Особенности закупок, осуществляемых бюджетным, автономным учреждениями, государственным, муниципальным унитарными предприятиями и иными юридическими лицами (44-ФЗ и 223-ФЗ)
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>13:00-14:00</td>
                                <td>Кофе-брейк</td>
                            </tr>
                            <tr>
                                <td>14:00-16:00</td>
                                <td>
                                    <ul>
                                        <li>Практические рекомендации по применению норм Положения о закупке, регламентирующего закупочную деятельность заказчика:
                                        <li>Порядок  подготовки и проведения процедур закупки (включая способы закупки) и условия их применения
                                        <li>Последовательность, продолжительность и содержание процедур, оформляемые документы 
                                        <li>Установление требований к участникам закупки 
                                        <li>Критерии и порядок оценки заявок
                                        <li>Порядок заключения и исполнения договоров
                                        <li>Особенности расторжения заключенных договоров
                                        <li>Дробление закупок на мелкие суммы
                                        <li>Дополнительные соглашения к заключенным сделкам
                                        <li>Судебная практика
                                        <li>Требования к участникам размещения заказа, отклонение заявок на стадии рассмотрения
                                        <li>Техническое задание как наиболее проблемный раздел документации о закупке
                                        <li>Ответы на вопросы участников
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <?php 
                    } if($_GET['act'] == '44') {
                    ?>
                    <div class="sem-info">
                        <div class="row">
                                <span class="sem-name">Время:</span><span class="sem-val">с 10:00 до 18:00</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Стоимость:</span><!--
                            --><span class="sem-val">6500 рублей <a class="apply-us-btn js-pop-show" data-popup="apply" href="#">Подать заявку</a><!-- , при подаче заявки с сайта <span class="sem-sale">скидка 10%</span> --></span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Контактное лицо:</span><span class="sem-val">Кристина Олеговна</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Телефон:</span><!--
                            --><span class="sem-val">+7 (961) 286-91-31</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
                        </div>
                        <hr>
                        <table class="seminar-table">
                            <tr>
                                <td>Время:</td>
                                <td>Программа семинара:</td>
                            </tr>
                            <tr>
                                <td>9.45 – 10.00</td>
                                <td>Регистрация участников</td>
                            </tr>
                            <tr>
                                <td>10.00 – 11.30</td>
                                <td>

                                    <h3>Контрактная система (КС) в РФ:</h3>
                                    <ul>
                                        <li>Основные понятия КС, сфера действия, объекты регулирования, информационное обеспечение.
                                        <li>Связь 44-ФЗ с 223-ФЗ, иными законами, регулирующими закупки заказчиков, и подзаконными нормативно-правовыми актами.
                                        <li>Обзор произошедших и готовящихся изменений КС.
                                    </ul>

                                    <h3>Изменения в планировании закупочной деятельности:</h3>
                                    <ul>
                                        <li>Особенности планирования закупок: нормирование, обоснование НМЦК, планы-графики, планы закупок.
                                        <li>Обоснование НМЦК (начальной цены): методы определения и особенности их использования.
                                    </ul>

                                    <h3>Общие требования к осуществлению закупок в рамках 44-ФЗ</h3>
                                    <ul>
                                        <li>Извещение и документация о закупке. Требования к описанию предмета закупки («техническому заданию», «ТЗ»). Использование товарных знаков, «диапазонов», требования антимонопольного законодательства. Разбор примеров из практики, а также возможных ошибок поставщиков.
                                        <li>Особенности технического задания при размещении заказов в различных отраслях: как читать и на что обратить внимание.
                                        <li>Единые и дополнительные требования к участникам закупок. Подтверждение участником соответствия данным требованиям.
                                        <li>Требования к обеспечению заявки на участие в закупке и к обеспечению исполнения контракта. Безотзывная банковская гарантия.
                                        <li>Антидемпинговые меры. Подтверждение добросовестности поставщиков.
                                        <li>Преимущества для отдельных участников закупок: субъектов малого предпринимательства, социально-ориентированных некоммерческих организаций, учреждений и предприятий уголовно-исправительной системы, организаций инвалидов.
                                        <li>Преференции и ограничения в рамках национального режима, в том числе запреты на поставку иностранных товаров.
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>11.30 – 11.45</td>
                                <td>Перерыв</td>
                            </tr>
                            <tr>
                                <td>11.45 – 13.30</td>
                                <td>
                                    <h3>Заключение, изменение и расторжение контракта.</h3>
                                    <ul>
                                        <li>Возможные случаи изменения существенных условий контракта.
                                        <li>Расторжение контракта: по соглашению сторон, по решению суда, одностороннее. Основания, процедура и последствия одностороннего расторжения.
                                        <li>Особенности заключения, изменения и исполнения контрактов в различных отраслях.
                                    </ul>
                                    <h3>Запрос котировок</h3>
                                    <ul>
                                        <li>Основания для проведения.
                                        <li>Правила подготовки и подачи заявок. Требования к форме и составу заявки.
                                    </ul>
                                    <h3>Электронный аукцион.</h3>
                                    <ul>
                                        <li>Основания для проведения. «Аукционный перечень».
                                        <li>Требования к составу первой части заявки. Особенности указания характеристик.
                                        <li>Требования к составу второй части заявки. Обязательный и дополнительный пакет документов.
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>13.30 – 14.30</td>
                                <td>Обед</td>
                            </tr>
                            <tr>
                                <td>14.30 – 15.45</td>
                                <td>
                                    <h3>Открытый конкурс.</h3>
                                    <ul>
                                        <li>Основания для проведения и особенности процедуры.
                                        <li>Критерии оценки заявок и их применение.
                                        <li>Правила подачи конкурсных заявок. Требования к составу заявки.
                                        <li>Обязательный пакет документов по составу конкурсной заявки
                                    </ul>

                                    <h3>Конкурс с ограниченным участием и Двухэтапный конкурс.</h3>
                                    <ul>
                                        <li>Основания для проведения.
                                        <li>Предквалификационный отбор участников закупок. Порядок подготовки пакета документов в составе заявки для его прохождения.
                                        <li>Постановление Правительства РФ № 1089 от 28.11.2013г. «Об условиях проведения процедуры конкурса с ограниченным участием…» и его применение в соответствующих отраслях.
                                    </ul>

                                    <h3>Запрос предложений</h3>
                                    <ul>
                                        <li>Основания для проведения и особенности процедуры.
                                        <li>Критерии оценки заявок.
                                        <li>Правила подачи заявок и окончательных предложений. Выставление требований к форме и составу заявки.
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>15.45 – 16.00</td>
                                <td>Перерыв</td>
                            </tr>
                            <tr>
                                <td>16.00 – 17.00</td>
                                <td>
                                    <h3>Обжалование и контроль. Ответственность за нарушения</h3>
                                    <ul>
                                        <li>Контрольные органы.
                                        <li>Часто встречающиеся методы ограничений конкуренции заказчиками в строительстве. Разбор примеров из практики и ошибок поставщиков.
                                        <li>Подача жалобы (требования к срокам, форме, составу и способу подачи).
                                        <li>Процедура рассмотрения жалобы в ФАС.
                                        <li>Реестры недобросовестных поставщиков (РНП). Основания, процедура и последствия включения участника в РНП.
                                    </ul>
                                </td>
                            </tr>
                                    
                            <tr>
                                <td>17.00 – 18.00</td>
                                <td>«Круглый стол» (ответы на вопросы).</td>
                            </tr>
                        </table>
                        <div class="download-block">
                            <a href="#"><i class="fa fa-file"></i> Скачать программу</a>
                        </div>
                    </div>

                    <?php
                    }
                    ?>
                </main>
            </div>
@stop

@section('script')
    
    <script>

        $(document).on('submit', '.apply-form', function(e){
            e.preventDefault();
            $('.btn-subm').addClass('active').attr('disabled', 'disabled');
            $.ajax({
                url: '{{URL::to("mailsend")}}',
                type: 'POST',
                data: $(this).serialize()
            }).always(function(){
                $('.btn-subm').removeClass('active').removeAttr('disabled');
                Popup.close('apply');
                setTimeout(function(){
                    Popup.show('result');

                    setTimeout(function(){
                        Popup.close('result');
                    }, 3000);
                }, 600);
            }).done(function(){
                $('.result-icon').html('<i class="fa fa-paper-plane"></i>');
                $('.result-text').html('Ваша заявка успешно отправленна');
            }).fail(function(data){
                console.log(data);
                $('.result-icon').html('<i class="fa fa-times-circle"></i>');
                $('.result-text').html('Произошла ошибка при отправке, попробуйте позже');
            });
            return false;
        });

    </script>

@stop