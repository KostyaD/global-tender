@extends('layouts.main')

@section('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>"Глобал Тендер" CЕМИНАРЫ ПО ГОСУДАРСТВЕННЫМ ЗАКУПКАМ</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="{{URL::to('assets/css/jquery.fancybox-1.3.4.css')}}" type="text/css" media="screen" />
@stop

@section('content')
                <div class="spec-title feedb-title">
                    <div class="wrapper">
                        <h2>Отзывы</h2>
                    </div>
                </div>
                <main class="wrapper clearfix">
                    <!-- <a href="#" class="nav-next"><i class="fa fa-angle-right"></i></a>
                    <a href="#" class="nav-prev"><i class="fa fa-angle-left"></i></a> -->
                    <div class="feed-imgs">
                        <img src="assets/img/feedback/002.jpg"><!--
                        --><img src="assets/img/feedback/f34.jpg"><!--
                        --><img src="assets/img/feedback/001.jpg"><!--
                        --><img src="assets/img/feedback/f1.jpg"><!--
                        --><img src="assets/img/feedback/f2.jpg"><!--
                        --><img src="assets/img/feedback/f3.jpg"><!--
                        --><img src="assets/img/feedback/f4.jpg"><!--
                        --><img src="assets/img/feedback/f5.jpg"><!--
                        --><img src="assets/img/feedback/f6.jpg"><!--
                        --><img src="assets/img/feedback/f7.jpg"><!--
                        --><img src="assets/img/feedback/f8.jpg"><!--
                        --><img src="assets/img/feedback/f9.jpg"><!--
                        --><img src="assets/img/feedback/f10.png"><!--
                        --><img src="assets/img/feedback/f11.png"><!--
                        --><img src="assets/img/feedback/f12.jpg"><!--
                        --><img src="assets/img/feedback/f13.jpg"><!--
                        --><img src="assets/img/feedback/f14.jpg"><!--
                        --><img src="assets/img/feedback/f15.jpg"><!--
                        --><img src="assets/img/feedback/f16.jpg"><!--
                        --><img src="assets/img/feedback/f17.jpg"><!--
                        --><img src="assets/img/feedback/f18.jpg"><!--
                        --><img src="assets/img/feedback/f19.jpg"><!--
                        --><img src="assets/img/feedback/f20.jpg"><!--
                        --><img src="assets/img/feedback/f21.jpg"><!--
                        --><img src="assets/img/feedback/f22.jpg"><!--
                        --><img src="assets/img/feedback/f23.jpg"><!--
                        --><img src="assets/img/feedback/f24.jpg"><!--
                        --><img src="assets/img/feedback/f25.jpg"><!--
                        --><img src="assets/img/feedback/f26.jpg"><!--
                        --><img src="assets/img/feedback/f27.jpg"><!--
                        --><img src="assets/img/feedback/f28.jpg"><!--
                        --><img src="assets/img/feedback/f29.jpg"><!--
                        --><img src="assets/img/feedback/f30.jpg"><!--
                        --><img src="assets/img/feedback/f31.jpg"><!--
                        --><img src="assets/img/feedback/f32.jpg"><!--
                        --><img src="assets/img/feedback/f33.jpg">
                    </div>
                </main>
@stop

@section('script')
    <script type="text/javascript" src="{{URL::to('assets/js/vendor/jquery.fancybox-1.3.4.js')}}"></script>
    <script>
        $('img').each(function(){
            $(this).after('<a href="' + $(this).attr('src') + '" rel="gallery" style="background-image: url(' + $(this).attr('src') + ');" target="_blank" class="feedback-img"></a>');
            $(this).remove();
        });

        $(function(){
            $('.feedback-img').fancybox({
                width : 1287,
                   height : 720,
                   fitToView : false,
                   autoSize : false
            });
        });
    </script>
@stop