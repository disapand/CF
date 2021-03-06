@extends('layouts.header')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/swiper.custom.css') }}">
    <style>
        .prev2{
            margin-left: -95px;
            background-color: #eee;
            background-size: 60% 60%;
            width: 30px;
            height: 50px;
        }

        .next2{
            margin-right: -95px;
            background-color: #eee;
            background-size: 60% 60%;
            width: 30px;
            height: 50px;
        }

        .prev2:hover, .next2:hover {
            background-color: #008cd5;
        }
    </style>
@endsection

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}"  class="active">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wljl/cwtjq') }}">崇文塔景区</a></li>
    <li><a href="{{ url('/wljl/zbjq') }}">周边景区</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/wljl_dt.png') }}" alt="" class="center-block dbsxtp"
                 style="margin-top: 5%;margin-bottom: 5%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-0 col-sm-2 col-md-2 col-lg-2">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <img src="{{ asset('images/wyjl/wljl_t1.jpg') }}" alt="" style="width: 100%;">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-left: 2%;">
            <div class="row">
                <div class="col-xs-11 col-sm-11 col-md-12 col-lg-12">
                    <img src="{{ asset('images/wyjl/wljl_z.png') }}" alt="" style="width: 100%;">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-11 col-sm-11 col-md-12 col-lg-12 wzys">
                    <p style="margin-top: 20px;line-height: 1.8em">
                        泾河新城作为现代化大西安新中心文化旅游新高地，区域内建设了多个文化旅游项目，如乐华城、茯茶镇、崇文塔景区、泾河智慧农业园、寿平民宿小镇、崇文湖风景区等。其中崇文塔景区依托着高87.218m的中国第一高砖塔——崇文塔，建成陕商、秦腔、非遗、国学四个文化博览馆，是区域内重点文化旅游项目，致力于文化保护、文化传播、文化交流活动，营造全新的文化氛围，促进新城精神文明建设，加强交流，打造大西安北部新中心文化旅游高地。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-md-offset-2"
             style="background-color: #eeeeee;padding-top: 2%;padding-bottom: 2%;margin-bottom: 5%;margin-top: 5%;">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/wyjl/wljl_xt1.jpg') }}" alt="" class="img-100"  style="margin-bottom: 2%;">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/wyjl/wljl_xt2.jpg') }}" alt="" class="img-100"  style="margin-bottom: 2%;">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/wyjl/wljl_xt3.jpg') }}" alt="" class="img-100"  style="margin-bottom: 2%;">
                </div>
            </div>

            <div class="swiper-container"></div>
            <div class="swiper-button-prev prev2 visible-md-block visible-lg-block"></div>
            <div class="swiper-button-next next2 visible-md-block visible-lg-block"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center  visible-md-block visible-lg-block">
                    <p>4.16国际古迹遗址日崇文塔景区专场</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center  visible-md-block visible-lg-block">
                    <p>5.28泾河读书会</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center  visible-md-block visible-lg-block">
                    <p>国际古迹遗址日崇文塔景区专场</p>
                </div>
            </div>
        </div>
    </div>

@endsection
