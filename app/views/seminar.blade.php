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
        'bel223' => array('Белгород', '13 ноября', '', 'http://trans-continental.ru/wp-content/uploads/2013/12/41907831.jpg'),
        'eka223' => array('Екатеринбург', '28 ноября', '', 'http://www.ekaterinburg.tv/images/images_city/em57.jpg'),
        'nov223' => array('Новосибирск', '21 ноября', '', 'http://upload.wikimedia.org/wikipedia/commons/5/58/%D0%92%D0%BE%D0%BA%D0%B7%D0%B0%D0%BB_%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%D0%B0.jpg'),
        'bar223' => array('Барнаул', '22 ноября', '', 'http://static.panoramio.com/photos/large/55681876.jpg'),
        'yfa223' => array('Уфв', '04 декабря', '', 'http://cs.holaplaya.com/uploads/sites/3/2014/10/137546_original.jpg'),
        ),
    '44'  => array(
        'stav223' => array('Ставрополь', '24 ноября', '', 'http://photo.vsedomarossii.ru/area_26/city_1651/street_9260/101850_3.jpg'), 
        'rostov44' => array('Ростов-на-Дону', '26 ноября', '', 'http://upload.wikimedia.org/wikipedia/ru/0/0f/%D0%9D%D0%B0%D0%B1%D0%B5%D1%80%D0%B5%D0%B6%D0%BD%D0%B0%D1%8F_%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2%D0%B0-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83.jpg'), 
        'krasnodar' => array('Краснодар', '28 ноября', '', 'http://fratria.ru/downontour/russia/krasnodar/sights/krasnodar_sight_4.jpg'), 
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
                            <a class="apply-btn js-pop-show" data-popup="apply" href="#">Участвовать</a>
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
                                --><span class="sem-val">8500 рублей<!-- , при подаче заявки с сайта <span class="sem-sale">скидка 10%</span> --></span>
                            </div>
                        @else 
                            <div class="row">
                                    <span class="sem-name">Время:</span><span class="sem-val">с 11:00 до 16:00</span>
                            </div>
                            <div class="row">
                                <span class="sem-name">Стоимость:</span><!--
                                --><span class="sem-val">7000 рублей<!-- , при подаче заявки с сайта <span class="sem-sale">скидка 10%</span> --></span>
                            </div>
                        @endif
                            
                        <div class="row">
                            <span class="sem-name">Контактное лицо:</span><span class="sem-val">Надежда Сергеевна</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Телефон:</span><span class="sem-val">+7 (961) 286-91-31</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
                        </div>
                        <hr>
                        <p>«Новые требования к закупкам унитарных предприятий, автономных учреждений, государственных компаний, корпораций и субъектов естественных монополий. Федеральный закон «О закупках товаров, работ, услуг отдельными видами юридических лиц» от 18.07.2011г.  № 223-ФЗ»</p>

                            <h2>Целевая аудитория:</h2>

                            <p>Руководители компаний, руководители и специалисты тендерных отделов, отделов продаж, отделов по маркетингу, юридических отделов, бухгалтеров организаций-поставщиков товаров/работ/услуг, а также руководители и специалисты в сфере закупок — заказчики и специалисты АХЧ, отвечающие за размещение заказов в унитарных предприятиях, автономных учреждениях, государственных компаниях и субъектах естественных монополий.</p>




                            <h2>Программа семинара</h2>

                            <ul>
                            <li><strong>Порядок осуществления контроля.&nbsp; </strong> Роль ФАС России в системе контроля корпоративных закупок после вступления в силу Федерального закона от 18 июля 2011 г. №223-ФЗ «О закупках товаров, работ, услуг отдельными видами юридических лиц».</li>
                            <li><strong>Типичные нарушения заказчиков при размещении заказов.</strong></li>
                            <li><strong>Цели и отношения,</strong> Федеральным  законом № 223-ФЗ от 18.06.2011</li>
                            <li><strong>Установление в положении о закупке требований,</strong> защищающих права и интересы заказчика: требований к участникам закупок, к обеспечению закупки, а также к порядку заключения и исполнения договоров.</li>
                            <li><strong>Порядок и требования к организации и проведению подрядных торгов,</strong> а также участие в них строительных компаний в условиях саморегулирования.</li>
                            <li><strong>Техническое задание</strong> как наиболее проблемный раздел документации о закупке.</li>
                            <li><strong>Практические рекомендации</strong> по применению норм Положения о закупке, регламентирующего закупочную деятельность заказчика</li>
                            </ul>
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
                            --><span class="sem-val">7000 рублей<!-- , при подаче заявки с сайта <span class="sem-sale">скидка 10%</span> --></span>
                        </div>

                        <hr>

                        <h2>Целевая аудитория:</h2>

                        <p>Руководители компаний, руководители и специалисты тендерных отделов, отделов продаж, отделов по маркетингу, юридических отделов, бухгалтеров организаций-поставщиков товаров/работ/услуг, а также руководители и специалисты в сфере закупок — заказчики и специалисты АХЧ, отвечающие за размещение заказов в унитарных предприятиях, автономных учреждениях, государственных компаниях и субъектах естественных монополий.</p>


                        <h2>Программа семинара</h2>

                        <ul>
                            <li>Реформа государственных закупок;
                            <li>Федеральный закон № 44-ФЗ «О контрактной системе в сфере закупок товаров, работ, услуг для обеспечения государственных и муниципальных нужд»;
                            <li>Сфера применения;
                            <li>Терминология нового закона. Участники контрактной системы;
                            <li>Принципы контрактной системы;
                            <li>Планирование государственных и муниципальных закупок;
                            <li>Начальная максимальная цена контракта, методы обоснования;
                            <li>Новые требования к участникам закупки. Ограничения, преференции;
                            <li>Контрактная служба, контрактный управляющий. Специализированная организация. Уполномоченный орган;
                            <li>Порядок и способы определения поставщиков (подрядчиков, исполнителей):
                            <li>Открытый конкурс. Конкурс с ограниченным участием. Двухэтапный конкурс;
                            <li>Электронный аукцион;
                            <li>Запрос котировок;
                            <li>Запрос предложений;
                            <li>Единственный поставщик;
                            <li>Антидемпинговые меры, понятие добросовестности поставщика;
                        </ul>

                        <!-- <table>
                            <tr>
                                <td>Время</td>
                                <td><h2>Программа семинара</h2></td>
                            </tr>

                            <tr>
                                <td>9.45 – 10.00</td>

                                <td>Регистрация участников</td>
                            </tr>
                            <tr></tr>
                            10.00 – 11.30

                            Контрактная система (КС) в РФ:

                            Основные понятия КС, сфера действия, объекты регулирования, информационное обеспечение.

                            Связь 44-ФЗ с 223-ФЗ, иными законами, регулирующими закупки заказчиков, и подзаконными нормативно-правовыми актами.

                            Обзор произошедших и готовящихся изменений КС.

                            Изменения в планировании закупочной деятельности:

                            Особенности планирования закупок: нормирование, обоснование НМЦК, планы-графики, планы закупок.

                            Обоснование НМЦК (начальной цены): методы определения и особенности их использования.

                            Общие требования к осуществлению закупок в рамках 44-ФЗ

                            Извещение и документация о закупке. Требования к описанию предмета закупки («техническому заданию», «ТЗ»). Использование товарных знаков, «диапазонов», требования антимонопольного законодательства. Разбор примеров из практики, а также возможных ошибок поставщиков.

                            Особенности технического задания при размещении заказов в различных отраслях: как читать и на что обратить внимание.

                            Единые и дополнительные требования к участникам закупок. Подтверждение участником соответствия данным требованиям.

                            Требования к обеспечению заявки на участие в закупке и к обеспечению исполнения контракта. Безотзывная банковская гарантия.

                            Антидемпинговые меры. Подтверждение добросовестности поставщиков.

                            Преимущества для отдельных участников закупок: субъектов малого предпринимательства, социально-ориентированных некоммерческих организаций, учреждений и предприятий уголовно-исправительной системы, организаций инвалидов.

                            Преференции и ограничения в рамках национального режима, в том числе запреты на поставку иностранных товаров.

                            11.30 – 11.45

                            Перерыв




                            11.45 – 13.30

                            Заключение, изменение и расторжение контракта.

                            Возможные случаи изменения существенных условий контракта.

                            Расторжение контракта: по соглашению сторон, по решению суда, одностороннее. Основания, процедура и последствия одностороннего расторжения.

                            Особенности заключения, изменения и исполнения контрактов в различных отраслях.

                            Запрос котировок

                            Основания для проведения.
                            Правила подготовки и подачи заявок. Требования к форме и составу заявки.
                            Электронный аукцион.

                            Основания для проведения. «Аукционный перечень».
                            Требования к составу первой части заявки. Особенности указания характеристик.
                            Требования к составу второй части заявки. Обязательный и дополнительный пакет документов.

                            13.30 – 14.30

                            Обед

                            14.30 – 15.45

                            Открытый конкурс.

                            Основания для проведения и особенности процедуры.
                            Критерии оценки заявок и их применение.
                            Правила подачи конкурсных заявок. Требования к составу заявки.
                            Обязательный пакет документов по составу конкурсной заявки

                            Конкурс с ограниченным участием и Двухэтапный конкурс.

                            Основания для проведения.

                            Предквалификационный отбор участников закупок. Порядок подготовки пакета документов в составе заявки для его прохождения.

                            Постановление Правительства РФ № 1089 от 28.11.2013г. «Об условиях проведения процедуры конкурса с ограниченным участием…» и его применение в соответствующих отраслях.




                            Запрос предложений

                            Основания для проведения и особенности процедуры.
                            Критерии оценки заявок.
                            Правила подачи заявок и окончательных предложений. Выставление требований к форме и составу заявки.

                            15.45 – 16.00

                            Перерыв

                            16.00 – 17.00

                            Обжалование и контроль. Ответственность за нарушения
                            Контрольные органы.
                            Часто встречающиеся методы ограничений конкуренции заказчиками в строительстве. Разбор примеров из практики и ошибок поставщиков.
                            Подача жалобы (требования к срокам, форме, составу и способу подачи).

                            Процедура рассмотрения жалобы в ФАС.

                            Реестры недобросовестных поставщиков (РНП). Основания, процедура и последствия включения участника в РНП.

                            17.00 – 18.00

                            «Круглый стол» (ответы на вопросы).
                        </table> -->
                    </div>

                    <?php
                    } if($_GET['act'] == 'nal') {
                    ?>
                    <div class="sem-info">

                        <!-- <div class="row">
                            <span class="sem-name">Место проведения:</span><span class="sem-val">Вертол Экспо</span>
                        </div> -->
                        <div class="row">
                            <span class="sem-name">Время:</span><span class="sem-val">с 10.00 до 17.00</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Стоимость:</span><!--
                            --><span class="sem-val">19 500 руб (2 дня). Включены: обед, комплект для записей, информационный материал к семинару</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Контактное лицо:</span><span class="sem-val">Татьяна Геннадьевна</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Телефон:</span><span class="sem-val">+7 920 612-19-87</span>
                        </div>
                        <div class="row">
                            <span class="sem-name">Электронная почта:</span><span class="sem-val">global-tender@yandex.ru</span>
                        </div>
                        <hr>
                        <p>В 2014 году ужесточился контроль за налоговыми схемами и, как следствие, ответственность за налоговые правонарушения. Появились законы, обличающие схемы по «обналичке», выявлению реальных собственников бизнеса и информацию по их расчетным счетам. В проверках стали участвовать не только рядовые инспекторы, но и сотрудники полиции и ФНС России. Как сэкономить в существующих условиях? По каким ценам продавать и с кем работать? Можно ли держать активы за рубежом? Ответы на эти и другие вопросы вы получите на семинаре. </p>
                        <p><b>СЕМИНАР РАССЧИТАН НА:</b> руководителей, главных бухгалтеров, специалистов финансовых и бухгалтерских служб, аудиторов, налоговых юристов.</p>
                        <p><b>ПО ОКОНЧАНИЮ СЕМИНАРА ВЫ ПОЛУЧИТЕ:</b> практический анализ всех возможных применяемых налоговых схем предприятий, рекомендации по построению эффективного легального бизнеса, инструментарий по успешному прохождению проверок налогового контроля. Участники семинара смогут предложить к обсуждению проблемы, с которыми им пришлось столкнуться на собственном опыте оптимизации налогообложения.</p>
                        <p><b>ПРОГРАММА СЕМИНАРА:</b></p>
                        <p>КАК ПРОХОДИТ НАЛОГОВЫЙ КОНТРОЛЬ В 2014 Г.:
                        - Расчет плана по налоговой проверке: сколько налогов хотят видеть проверяющие и сколько можно будет доказать в суде;
                        - Новые методы выявления схем по «обналичке». Кого и как контролируют полиция, банки и инспекторы;
                        - Какие действия предпринять, чтобы доказать легальность бизнеса до и после проверки;
                        - Как проверить самим свое предприятие: все методы контроля для руководителя.</p>
                        <p>«ТОТАЛЬНЫЙ» КОНТРОЛЬ. РАСКРЫТИЕ БЕНЕФИЦИАРОВ:
                        - Поправки и дополнения, внесенные Федеральным законом № 134 ФЗ от 28.06.2013 в законодательство о противодействии незаконным финансовым операциям;
                        - Как «следят» за бизнесом. Когда банк может блокировать счета предприятия моментально;
                        - Отчетность банков о счетах физических лиц. Порядок взимания недоимок со счетов взаимозависимых лиц;
                        - Раскрытие и идентификация бенефициарных владельцев бизнеса. Новый порядок взаимодействия банков с клиентами;
                        <p>- Изменения уголовного и административного законодательства в сфере противодействия незаконным финансовым операциям.</p>
                        <p>ОСНОВНЫЕ НОРМАТИВНЫЕ АКТЫ ПО ВОПРОСАМ ТРАНФЕРТНОГО ЦЕНООБРАЗОВАНИЯ:
                        - Последствия выхода Постановления Пленума ВАС РФ «Об оценке арбитражными судами обоснованности получения налогоплательщиком налоговой выгоды», изменений Налогового кодекса РФ, Закона «О бухгалтерском учете» в части вопросов налоговой оптимизации и схем уклонения от уплаты налогов; 
                        - Введение Федерального закона «О трансфертном ценообразовании».</p>
                        <p>НОВОВВЕДЕНИЯ В РЕГУЛИРОВАНИИ ЦЕН: 
                        - Определение и круг взаимозависимых лиц (ст. 105.1 НК РФ, 11 оснований); 
                        - Понятие и критерии отнесения сделок к категории контролируемых; 
                        - Пять методов определения цен для целей налогообложения. Возможности обоснование скидок компании на практике; 
                        - Порядок уведомления об осуществлении контролируемых сделок; 
                        - Соглашение о ценообразовании для целей налогообложения и сроки действия; 
                        - Штрафные санкции (по 227-ФЗ), налоговый контроль со стороны ФНС России;
                        - Анализ применения беспроцентных займов, безвозмездных услуг, в т.ч. поручительства в свете контроля трансфертного ценообразования.</p>
                        <p>АНАЛИЗ СХЕМ НАЛОГОВОГО ПЛАНИРОВАНИЯ:</p>
                        <p>- СХЕМЫ И МЕТОДЫ ОПТИМИЗАЦИИ НАЛОГА НА ПРИБЫЛЬ. ИХ АНАЛИЗ. АРБИТРАЖ:
                        - Формирование эффективной учетной политики (резервы, амортизационная премия, распределение расходов и доходов, сопоставимые кредитно-заемные договоры);
                        - Налоговые расходы (маркетинг, управление, лицензионные платежи за товарный знак, реклама, транспорт и логистика, коллекторские услуги, цессия и др.);
                        - Убытки при присоединении и слиянии компаний;
                        - Консолидированная уплата налога на прибыль.</p>
                        <p>- СХЕМЫ ПО ОПТИМИЗАЦИИ НДС. ИХ ПРАВОВОЙ АНАЛИЗ. АРБИТРАЖНАЯ ПРАКТИКА:
                        - Уплата НДС в рассрочку. Планирование НДС. Возмещение НДС. Особый переход права собственности и другие тонкости заключения договоров в целях оптимизации НДС;
                        - Арбитраж по вычету НДС, если поставщика признали фирмой-«однодневкой». Выделение, разделение, ликвидация и банкротство организаций с целью обеления бизнеса;
                        - Возврат товаров: как оформить, чтобы не потерять на НДС;
                        - Применение трансфертного ценообразования. Риски при предоставлении скидок;
                        - Оптимизация НДС при получении предоплаты: заключения договоров о намерениях, простого товарищества, предоставления займа; использование в расчетах векселей, аккредитивов, задатка, залога, посреднических договоров;
                        - Применение опционов для налоговой оптимизации НДС;
                        - Безналоговые и низконалоговые способы передачи активов внутри холдинга (слияние и разделение компаний, вклады в уставный капитал, риски продажи через «упрощенцев»).
                        - Схемы планирования НДС в производстве и торговле, строительстве основных средств.</p>
                        <p>- НАЛОГОВЫЕ И ЮРИДИЧЕСКИЕ РИСКИ ВЫПЛАТЫ «СЕРОЙ» ЗАРАБОТНОЙ ПЛАТЫ. СХЕМЫ И МЕТОДЫ ЕЕ ЛЕГАЛИЗАЦИИ:
                        - Налоговое планирование: аргументы «за» и «против». Зарплата в конверте.
                        - Оптимизация «зарплатных» налогов через договор: какой договор заключить с физическим лицом: трудовой или гражданско-правовой? Использование договоров подряда и договоров возмездного оказания услуг. Преимущества авторских договоров. Особенности налогообложения выплат по ученическим договорам;
                        - Договор аутсорсинга (предоставления персонала): что может сделать сделку недействительной. Документальное оформление операций. Арбитражная практика;
                        - Схемы налоговой оптимизации «зарплатных» налогов: бонусная схема выплат, служебные командировки и служебные поездки, договор аренды или компенсация расходов за использование личного имущества работника;
                        - Оптимизация налогообложения при формировании соцпакета для сотрудника (страхование, лечение, отдых, обучение, питание, проезд, сотовая связь). Беспроцентные займы. Подарки и материальная помощь. Компенсация расходов на уплату процентов по кредитам и займам. Выплаты членам Совета директоров. «Золотые, серебряные и оловянные парашюты»;
                        - Расторгаем трудовой договор с работником: сокращение, увольнение по собственному желанию и по соглашению сторон. Кого увольнять нельзя? Как выгодней оформить взаимоотношения для предприятия. Перевод сотрудника на нижеоплачиваемую работу;
                        - Другие схемы оптимизации с учетом изменений законодательства по страховым взносам и НДФЛ.</p>
                        <p>- ПРИНЦИПЫ НАЛОГОВОГО ПЛАНИРОВАНИЯ ИСПОЛЬЗОВАНИЯ ОСНОВНЫХ СРЕДСТВ:
                        - Использование договоров аренды. Лизинговые схемы: оптимизация налогообложения, если имущество находится на балансе лизингодателя и лизингополучателя. Возвратный лизинг;
                        - ПИФ, как инструмент защиты недвижимости.

                        <p>- АНАЛИЗ ПРИМЕНЕНИЯ ФИРМ НА УСН И ЕНВД, НЕКОММЕРЧЕСКИХ ОРГАНИЗАЦИЙ.</p>
                        <p>- ОФФШОРНЫЙ БИЗНЕС: О ЧЕМ МОЛЧАТ ДРУГИЕ? НОВЫЕ РЕШЕНИЯ И ДЕОФФФШОРИЗАЦИЯ-2014:
                        - Импорт, экспорт. Роялти, дивиденды, займы. Аренда недвижимости;
                        - Меры по противодействию незаконным финансовым операциям;
                        - Альтернативы прибалтийских и кипрских банков: Азия и ЕС;
                        - Конфиденциальность бенефициара и защита от рейдерских захватов. Номинальные директора и акционеры, трасты и семейные фонды, акции на предъявителя;
                        - Введение 30% налог на доход за непредставление документов о бенефициарах.</p>
                        <p>- ПОКАЗАТЕЛИ И РАССЧЕТ ЭФФЕКТИВНОСТИ НАЛОГОВОГО ПЛАНИРОВАНИЯ.
                        - ОТВЕТСТВЕННОСТЬ ЗА ПРИМЕНЕНИЕ НАЛОГОВЫХ СХЕМ. ПРАКТИКА ПОСЛЕДНИХ ГРОМКИХ УГОЛОВНЫХ И АРБИТРАЖНЫХ ДЕЛ.</p>
                        <p>ЗАДАНИЯ по построению схем налоговой оптимизации. Обсуждение возможных вариантов. Перспективы 2015-2018 г.</p>
                        <p>СЕМИНАР ВЕДЕТ: 
                        МИТЮКОВА ЭЛЬВИРА САЙФУЛЛОВНА, к.э.н., победитель конкурса «Бухгалтерский оскар», управляющий партнер аудиторской компании ООО «Академия успешного бизнеса», аттестованный аудитор, лектор ИПБ России, по данным журнала «Семинар для бухгалтера» вошла в десятку лучших лекторов России. Автор книг: «Антикризис. Практические рекомендации для собственников и руководителей компаний», «Налоговое планирование: анализ реальных схем», «Налоговые схемы. Как снизить налоги в соответствии с законодательством», «Расчет налога на прибыль в бухгалтерском и налоговом учете», «Типичные ошибки в учете материалов», «Малый бизнес: налоги и отчетность» и более ста публикаций по бухгалтерскому учету и налогообложению.
                        </p>
                    </div>
                    <?}?>
                </main>
@stop

@section('script')
    
    <script>

        $(document).on('submit', '.apply-form', function(e){
            e.preventDefault();
            if($('#policy').is(':checked')) {
                $('.agree').removeClass('error');
            } else {
                $('.agree').addClass('error');
                return;
            }
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