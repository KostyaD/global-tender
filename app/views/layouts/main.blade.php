<?php if(!isset($_GET['sem'])) { $seminar = [0, 0]; } ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @yield('meta')
        <meta name="viewport" content="width=500px, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600&subset=cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::to('assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets/css/main.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="{{URL::to('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <div class="inside">
                <header class="menu menu-white">
                    <nav>
                        <ul class="menu-ul">
                            <li class="menu-li"><a href="{{URL::to('/')}}">Главная</a></li>
                            <li class="menu-li"><a href="{{URL::to('/seminars')}}">Семинары</a></li>
                            <li class="menu-li"><a href="{{URL::to('/services')}}">Юр. услуги</a></li>
                            <li class="menu-li"><a href="{{URL::to('/feedback')}}">Отзывы</a></li>
                            <!-- <li class="menu-li"><a href="{{URL::to('/lektors')}}">Лекторы</a></li> -->
                            <li class="menu-li"><a href="{{URL::to('/contacts')}}">Контакты</a></li>
                        </ul>
                    </nav>
                </header>

                @yield('content')
                
            </div>
        </div>
        <footer class="footer">
            <span class="fl-l footer-text">Global-Tender &copy; 2010 - 2014</span>
        </footer>
        <div class="overlay">
            <div class="pop-window closed" data-popup="apply">
                <a href="#" class="pop-cross js-pop-close">
                    <i class="fa fa-times"></i>
                </a>
                <form class="apply-form">
                    <input type="hidden" name="seminar" value="<?=$seminar[0]?> <?=$seminar[1]?>">
                    <div class="one-block">
                        <div class="block-title">Организация:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>Полное название организации (включая форму собственности):</span>
                                <span><input type="text" name="org-name"></span>
                            </div>
                            <div class="block-row">
                                <span>Название организации (краткое):</span>
                                <span><input type="text" name="org-short"></span>
                            </div>
                            <div class="block-row">
                                <span>ИНН:</span>
                                <span><input type="text" name="inn"></span>
                                <span>КПП: <input type="text" name="kpp"></span>
                            </div>
                            <div class="block-h2">
                                Почтовый адрес
                                <span class="desc">Указываются индекс и фактический адрес организации. Необходимо указать тот адрес, который указывался при регистрации в ИФНС.</span>
                                
                            </div>
                            <div class="block-row">
                                <span>совпадает с юридическим</span>
                                <span><input type="checkbox" name="uri"></span>
                            </div>
                            <div class="block-row">
                                <span>Индекс:</span>
                                <span><input class="min-input" type="text" name="zip-code"></span>
                                <span>Область: <input type="text" name="region"></span>
                            </div>
                            <div class="block-row">
                                <span>Город:</span>
                                <span><input type="text" name="city"></span>
                                <span>Улица: <input type="text" name="street"></span>
                                <span>Дом: <input class="min-input" type="text" name="home"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Руководитель:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>ФИО:</span>
                                <span><input type="text" name="fio"></span>
                            </div>
                            <div class="block-row">
                                <span>Должность:</span>
                                <span><input type="text" name="post"></span>
                            </div>
                            <div class="block-h2">
                                Руководитель действует на основании
                            </div>
                            <div class="block-row">
                                <span>Устава:</span>
                                <span><input type="checkbox" name="act" value="ustav"></span>
                                <span>Положения: <input type="checkbox" name="act" value="polozhenie"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Список участников семинара:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>Количество участников:</span>
                                <span><input type="text" name="amount"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Контактное лицо:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>ФИО:</span>
                                <span><input type="text" name="contact-name"></span>
                            </div>
                            <div class="block-row">
                                <span>Должность:</span>
                                <span><input type="text" name="contact-post"></span>
                            </div>
                            <div class="block-row">
                                <span>E-mail:</span>
                                <span><input type="text" name="contact-email"></span>
                            </div>
                            <div class="block-row">
                                <span>Телефон:</span>
                                <span><input type="text" name="contact-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="one-block">
                        <div class="block-title">Комментарий:</div>
                        <div class="block-body">
                            <div class="block-row">
                                <span>Комментарий:</span>
                                <span><input type="text" name="comment"></span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-cont">
                        <button class="btn-subm" type="submit"><i class="fa fa-spinner fa-spin"></i> Подать заявку</button>
                    </div>
                </form>
            </div>
            <div class="pop-result pop-window closed" data-popup="result">
                <div class="result-icon"></div>
                <div class="result-text"></div>
            </div>
        </div> 


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{URL::to('assets/js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
        <script src="{{URL::to('assets/js/plugins.js')}}"></script>
        <script src="{{URL::to('assets/js/main.js')}}"></script>

        @yield('script')

        <!-- Yandex.Metrika informer --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter22043605 = new Ya.Metrika({id:22043605, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><!-- /Yandex.Metrika counter -->

    </body>
</html>
