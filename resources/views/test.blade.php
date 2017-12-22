@extends('layouts.header')

@section('css')
    @parent
    <link rel="stylesheet" href="css/swiper.custom.css">

    <style>
        .swiper-slide img {
            width: 100%;
        }
    </style>

@endsection

@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>

                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    @parent
    <script src="js/swiper.custom.js"></script>

    <script>
        $(document).ready( function () {
            var mySwiper = new Swiper ('.swiper-container', {
                direction: 'horizontal',
                loop: true,

                // 如果需要分页器
                pagination:'.swiper-pagination',
                paginationClickable :true,

                // 如果需要前进后退按钮
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',

            })
        })
    </script>

@endsection