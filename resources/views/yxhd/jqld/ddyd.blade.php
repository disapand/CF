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
            <img src="{{ asset('images/yxhd/jqld/ddyd_z.png') }}" alt=""
                 style="width: 100%;margin-bottom: 50px;margin-top: 100px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/jqld/ddyd_dyz.png') }}" alt=""
                 style="margin-bottom: 50px;" class="center-block">
        </div>
    </div>

    <div class="row" style="margin-bottom: 80px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ddyd_dt1.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ddyd_dt1.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ddyd_dt1.jpg') }}" alt="" class="img-100">
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
            <img src="{{ asset('images/yxhd/jqld/ddyd_dez.png') }}" alt=""
                 style="margin-bottom: 50px;" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                亦称大地基准点，是国家地理坐标——经纬度的起算点和基准点。大地原点是人为界定的一个点，是利用高斯平面直角坐标的方法建立全国统一坐标系。20世纪70年代，中国决定建立自己独立的大地坐标系统。通过实地考察、综合分析，最后将中国的大地原点，确定在陕西省泾阳县永乐镇北横流村，具体位置在：北纬34°32′27.00″东经108°55′25.00″。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 50px;">
            <p>
                走进大地原点，让学生们大地原点在国家经济建设、国防建设和社会发展方面发挥的重要意义，了解大地原点的由来，测量方式以及设置在此地的原因。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 180px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ddyd_dt2.png') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ddyd_dt2.png') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/ddyd_dt2.png') }}" alt="" class="img-100">
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