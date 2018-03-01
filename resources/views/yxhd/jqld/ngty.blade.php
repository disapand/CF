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
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
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
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/jqld/ngty_z.png') }}" alt=""
                 style="width: 100%;margin-bottom: 50px;margin-top: 100px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/jqld/hsjy_dyz.png') }}" alt=""
                 style="margin-bottom: 50px;" class="center-block">
        </div>
    </div>

    <div class="row" style="margin-bottom: 80px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
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
            <div class="swiper-pagination fyq2"></div>

            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev prev2"></div>
            <div class="swiper-button-next next2"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/jqld/ngty_dez.png') }}" alt=""
                 style="margin-bottom: 50px;" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                高陵场畔位于高陵区通远古镇，目前拥有农耕文化展示区、农耕体验区、关中民俗游戏园、关中特色餐饮区、关中文化长廊、关中大戏楼等6大板块。其中农耕博文馆，占地4000平方米、收集30000余件农业生产工具，按照农耕、水利、加工、日常生活等相关内容，通过实体展示和泥塑场景相结合，生动地将农事活动和生活场景表现出来，能亲身感受到祖辈的勤劳与智慧。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 50px;">
            <p>
                走进高陵场畔农耕体验园，感受关中农耕文化魅力，亲身感受到祖辈的勤劳与智慧，体验农务的艰辛与劳累，更能在以后的学习生活中，培养节俭、珍惜的习惯。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 180px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ngty_dt2.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ngty_dt2.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ngty_dt2.jpg') }}" alt="" class="img-100">
                    </div>
                </div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination fyq2"></div>

            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev prev2"></div>
            <div class="swiper-button-next next2"></div>
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