@extends('layouts.header')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/swiper.custom.css') }}">
    <style>
        .fyq2 {
            margin: 10px 0;
            width: 100%;
            text-align: center;
        }

        .fyq2 span {
            margin-right: 15px;
        }

        .prev2{
            margin-left: -85px;
            background-color: #eee;
            background-size: 60% 60%;
            width: 35px;
            height: 60px;
        }

        .next2{
            margin-right: -85px;
            background-color: #eee;
            background-size: 60% 60%;
            width: 35px;
            height: 60px;
        }

        .prev2:hover, .next2:hover {
            background-color: #008cd5;
        }

        a{
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: #008cd5;
        }

    </style>
@endsection

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}">合作交流</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}" class="active">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}">研学营地</a></li>
@endsection

@section('contents')

    <div class="row" style="margin-top: 50px">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <a href="{{ url('/yxhd/jqld') }}"><< 返回</a>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/jqld/spgd_z.png') }}" alt=""
                 style="width: 100%;margin-bottom: 6%;margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/jqld/hsjy_dyz.png') }}" alt=""
                 style="margin-bottom: 3%;" class="center-block">
        </div>
    </div>

    <div class="row" style="margin-bottom: 5%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/blhx_dt1.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/blhx_dt1.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/blhx_dt1.jpg') }}" alt="" class="img-100">
                    </div>
                </div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination fyq2 visible-md-block visible-lg-block"></div>

            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev prev2 visible-md-block visible-lg-block"></div>
            <div class="swiper-button-next next2 visible-md-block visible-lg-block"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/jqld/spgd_dez.png') }}" alt=""
                 style="margin-bottom: 3%;" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 2%;">
            <p>
                寿平民宿小镇是一极具民宿特色的精品田园小镇，千百年间，泾河水蜿蜒流淌，古渡口摆渡船往来穿梭于烟波之上，日出日落繁忙不息。时光荏苒，摆渡人早已收桨登岸。如今，一座极具古韵的寿平民宿小镇正走入大众视野，再次让人们感受到泾河水畔院落的独特韵味。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 3%;">
            <p>
                走进寿平民宿小镇，感受古渡文化，追溯千百年来渡口的历史变迁，寿平民宿小镇拓展区占地约25亩，由苹果、梨子、杏、李子等果树围合出5个不同的区域，区域内设置各种拓展器材，让学员在拓展体验的过程中，增强团队意识、培养团队协作能力、自我管理能力并体验田园风光。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 10%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/spgd_dt2.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/spgd_dt2.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/spgd_dt2.jpg') }}" alt="" class="img-100">
                    </div>
                </div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination fyq2 visible-md-block visible-lg-block"></div>

            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev prev2 visible-md-block visible-lg-block"></div>
            <div class="swiper-button-next next2 visible-md-block visible-lg-block"></div>
        </div>
    </div>

@endsection

@section('script')
    @parent
    <script src="{{ asset('js/swiper.custom.js') }}"></script>

    <script>
        $(document).ready(function () {
            var mySwiper = new Swiper('.swiper-container', {
                autoplay: 5000,
                speed: 1500,
                direction: 'horizontal',
                loop: true,
                autoplayDisableOnInteraction: false,

                // 如果需要分页器
                pagination: '.swiper-pagination',
                paginationClickable: true,

                // 如果需要前进后退按钮
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
            })

        })
    </script>
@endsection
