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
            background-color: #008cd5;
        }

        .next2{
            margin-right: -85px;
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
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/yxhd/jqld/hsjy_z.png') }}" alt=""
                 style="width: 100%;margin-bottom: 50px;margin-top: 150px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/yxhd/jqld/hsjy_dyz.png') }}" alt=""
                 style="margin-bottom: 50px;" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-bottom: 50px;">
            <p style="text-align: justify;text-indent: 2em;line-height: 2.5em;">
                崇文塔景区位于西咸新区泾河新城，是大西安北部中心首席文化景区，中华优秀传统文化博览馆集群，占地面积20万平方米，打造以“崇文尚学·博览华夏”为主题的综合性文化旅游度假区，以高87.218米的中国第一高砖塔——崇文塔为核心，聚集了陕西丝路商旅文化发展研究基地——陕商文化博览馆、秦腔文化教育基地——国艺秦腔馆、汇集陕西省内2000余项非物质文化遗产——三秦非遗博览馆、西北地区大型国学主题博览馆——崇文国学馆、以太极养生为主题的培训基地——崇文尚武太极院以及生动还原数十项历史典故——文化雕塑园等文化展区，并设计有4.2万平方米的综合商业区、3000平方米运动健身区，是集文物保护、研学旅行、休闲度假、运动健身于一体的国家AAA级景区。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-bottom: 50px;">
            <p style="text-align: justify;text-indent: 2em;line-height: 2.5em;">
                走进崇文塔景区，接受崇文尚学的精神洗礼；身临其境、驻足文化雕塑园，历史典故真实再现；参观四个不同文化主题的展馆，进入科学、历史、文学、艺术等一身的传统知识宝库，传播了解国学、回味传统，这里将是塑造美好心灵的生动课堂。同学们通过多种体验活动，提高动手能力的同时深入了解传统技艺的魅力。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 80px;">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/blhx_dt1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/blhx_dt1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/blhx_dt1.jpg') }}" alt="">
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
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/yxhd/jqld/hsjy2_dez.png') }}" alt=""
                 style="margin-bottom: 50px;" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-bottom: 50px;">
            <p style="text-align: justify;text-indent: 2em;line-height: 2.5em;">
                安吴青训班旧址是第七批全国重点文物保护单位，陕西省重点文物保护单位。位于咸阳城北45公里处泾阳县安吴镇安吴堡村。是在中共中央青年工作委员会领导下，以西北青年救国联合会的名义，在当时的国民党统治区陕西省泾阳县安吴堡举办的培训青年干部的重要场所。它是抗日青年的旗帜、革命青年的熔炉、中国青运史上的丰碑。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-bottom: 50px;">
            <p style="text-align: justify;text-indent: 2em;line-height: 2.5em;">
                走进安吴青训班旧址，让学生们了解革命的历史，通过开展“红色旅游”活动，可以将革命历史知识、革命传统和革命精神以旅游的方式传输给广大青少年，提升当代中小学生对革命历史的尊重，对红色精神的正确认知。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 180px;">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/hsjy2_dt2.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/hsjy2_dt2.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/jqld/hsjy2_dt2.jpg') }}" alt="">
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