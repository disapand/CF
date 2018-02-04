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
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}">一塔五馆</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}" class="active">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}">研学营地</a></li>
@endsection

@section('contents')

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

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                崇文塔景区位于西咸新区泾河新城，是大西安北部中心首席文化景区，中华优秀传统文化博览馆集群，占地面积20万平方米，打造以“崇文尚学·博览华夏”为主题的综合性文化旅游度假区，以高87.218米的中国第一高砖塔——崇文塔为核心，聚集了陕西丝路商旅文化发展研究基地——陕商文化博览馆、秦腔文化教育基地——国艺秦腔馆、汇集陕西省内2000余项非物质文化遗产——三秦非遗博览馆、西北地区大型国学主题博览馆——崇文国学馆、以太极养生为主题的培训基地——崇文尚武太极院以及生动还原数十项历史典故——文化雕塑园等文化展区，并设计有4.2万平方米的综合商业区、3000平方米运动健身区，是集文物保护、研学旅行、休闲度假、运动健身于一体的国家AAA级景区。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 50px;">
            <p>
                走进崇文塔景区，接受崇文尚学的精神洗礼；身临其境、驻足文化雕塑园，历史典故真实再现；参观四个不同文化主题的展馆，进入科学、历史、文学、艺术等一身的传统知识宝库，传播了解国学、回味传统，这里将是塑造美好心灵的生动课堂。同学们通过多种体验活动，提高动手能力的同时深入了解传统技艺的魅力。</p>
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