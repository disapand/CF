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

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/jqld/hsjy_z.png') }}" alt=""
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
            <img src="{{ asset('images/yxhd/jqld/hsjy2_dez.png') }}" alt=""
                 style="margin-bottom: 50px;" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                安吴青训班旧址是第七批全国重点文物保护单位，陕西省重点文物保护单位。位于咸阳城北45公里处泾阳县安吴镇安吴堡村。是在中共中央青年工作委员会领导下，以西北青年救国联合会的名义，在当时的国民党统治区陕西省泾阳县安吴堡举办的培训青年干部的重要场所。它是抗日青年的旗帜、革命青年的熔炉、中国青运史上的丰碑。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 50px;">
            <p>
                走进安吴青训班旧址，让学生们了解革命的历史，通过开展“红色旅游”活动，可以将革命历史知识、革命传统和革命精神以旅游的方式传输给广大青少年，提升当代中小学生对革命历史的尊重，对红色精神的正确认知。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 180px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/hsjy2_dt2.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/hsjy2_dt2.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/hsjy2_dt2.jpg') }}" alt="" class="img-100">
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