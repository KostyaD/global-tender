<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>"Глобал Тендер" CЕМИНАРЫ ПО ГОСУДАРСТВЕННЫМ ЗАКУПКАМ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=500px, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600&subset=cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::to('assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets/css/fotorama.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="{{URL::to('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container page">
            <div class="inside">
                <header class="menu menu-black">
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

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{URL::to('assets/js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
        <script src="{{URL::to('assets/js/vendor/fotorama.js')}}"></script>
        <script src="{{URL::to('assets/js/plugins.js')}}"></script>
        <script src="{{URL::to('assets/js/main.js')}}"></script>

        @yield('script')

        <!-- Yandex.Metrika informer --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter22043605 = new Ya.Metrika({id:22043605, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><!-- /Yandex.Metrika counter -->

    </body>
</html>
