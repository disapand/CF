@extends('layouts.header')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/swiper.custom.css') }}">
    <style>
        .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3 {
            padding-right: 0px;
            padding-left: 0px;
        }

        .preview {
            background-color: #eee;
        }

        .preview ul {
            list-style: none;
            display: block;
            width: 225%;
            clear: both;
            overflow: hidden;
            -webkit-padding-start: 0;
        }

        .preview ul li {
            float: left;
            width: 11.1%;
            padding: 20px 7px;
        }

        .preview .arrow-left {
            background-color: #eee;
            background-image: url(" {{ asset('images/right.png') }}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 60% 60%;
            position: absolute;
            left: -30px;
            margin-top: 100px;
            width: 30px;
            height: 50px;
            z-index: 10;
        }

        .preview .arrow-right {
            background-color: #eee;
            background-image: url("{{ asset('images/left.png') }}");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 60% 60%;
            position: absolute;
            right: -30px;
            margin-top: 100px;
            width: 30px;
            height: 50px;
            z-index: 10;
        }

        .preview .arrow-left:hover, .preview .arrow-right:hover {
            background-color: #008cd5;
            cursor: pointer;
        }

        .preview img:hover {
            cursor: pointer;
        }

        .prev2 {
            margin-left: -85px;
            background-color: #eee;
            background-size: 60% 60%;
            width: 35px;
            height: 60px;
        }

        .next2 {
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
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}">合作交流</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}" class="active">研学营地</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/yxhd/yxyd_dt_n.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row" style="margin-top: 6%;">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2" style="margin-bottom: 2%;">
            <img src="{{ asset('images/yxhd/yxyd_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 2%;">
            <p>泾河新城研学旅行充分挖掘区内旅游资源，形成文化＋教育、文化＋体验、文化＋农业、文化＋民俗等多种综合研学旅游产品，已经吸引了数百家学校前来研学，更有学校多次组织不同阶段的学生前来。</p>
            <p>自从研学旅行启动以来，城服公司致力于将泾河新城研学旅行资源逐渐由西安推广至周边及省内学校市场，不断扩大崇文塔景区及泾河新城的文化影响力，大力推进了全域旅游。在以后的研学接待中，崇文塔景区将保量升质，力求将泾河新城打造成为研学旅行示范区，让同学们来泾河新城就能学知识、得实践、长阅历，在“行万里路”的征途中，也能收获星辰和大海。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 5%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_1.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_2.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_3.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_4.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_5.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_6.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_7.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_8.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/yxyd_lb_9.jpg') }}" alt="" class="img-100">
                    </div>
                </div>
            </div>

            <div class="row preview visible-md-block visible-lg-block" style="z-index: 3;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="overflow: hidden">
                	<ul>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_1.jpg') }}" alt="" class="img-100" id="sl1"></li>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_2.jpg') }}" alt="" class="img-100" id="sl2"></li>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_3.jpg') }}" alt="" class="img-100" id="sl3"></li>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_4.jpg') }}" alt="" class="img-100" id="sl4"></li>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_5.jpg') }}" alt="" class="img-100" id="sl5"></li>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_6.jpg') }}" alt="" class="img-100" id="sl6"></li>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_7.jpg') }}" alt="" class="img-100" id="sl7"></li>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_8.jpg') }}" alt="" class="img-100" id="sl8"></li>
                        <li><img src="{{ asset('images/yxhd/yxyd_lb_sl_9.jpg') }}" alt="" class="img-100" id="sl9"></li>
                    </ul>
                    <div></div>
                </div>

                <div class="arrow-left"></div>
                <div class="arrow-right"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 2%;">
            <p>研学旅行如火如荼，为了更加完善后续接待，崇文塔景区从研学教师、研学课程、研学基地、研学线路、安全管理等几个方面积极研究深化，将这种继承了中国传统儒家教育游学模式的“旅行”在泾河新城的发展日趋成熟化，让学生们体验到更丰富的学习方式。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/yxyd_dh.jpg') }}" alt="" class="img-100">
        </div>
    </div>

@endsection

@section('script')
    @parent
    <script src="{{ asset('js/swiper.custom.js') }}"></script>

    <script>
        $(document).ready(function () {
            var mySwiper1 = new Swiper('.swiper1', {
                autoplay: 5000,
                speed: 1500,
                direction: 'horizontal',
                loop: true,
                autoplayDisableOnInteraction: false,
            })

            $('.preview .arrow-left').click(function (e) {
                if (mySwiper1.activeIndex == 1) {
                    mySwiper1.slideTo(9, 1000)
                }
                mySwiper1.slidePrev()
            })
            $('.preview .arrow-left').click(function (e) {
                if (mySwiper1.activeIndex == 1) {
                    $('.preview ul').animate({
                        'margin-left': '0'
                    }, 1000)
                }
                mySwiper1.slidePrev()
            })
            $('.preview .arrow-left').click(function (e) {
                if (mySwiper1.activeIndex == 5) {
                    $('.preview ul').animate({
                        'margin-left': '-25%'
                    }, 1000)
                }
                mySwiper1.slidePrev()
            })
            $('.preview .arrow-left').click(function (e) {
                if (mySwiper1.activeIndex == 9) {
                    $('.preview ul').animate({
                        'margin-left': '-125%'
                    }, 1000)
                }
                mySwiper1.slidePrev()
            })

            $('.preview .arrow-right').click(function (e) {
                if (mySwiper1.activeIndex == 9) {
                    mySwiper1.slideTo(1, 1000)
                }
                mySwiper1.slideNext()
            })
            $('.preview .arrow-right').click(function (e) {
                if (mySwiper1.activeIndex == 1) {
                    $('.preview ul').animate({
                        'margin-left': '0'
                    }, 1000)
                }
                mySwiper1.slideNext()
            })

            $('.preview .arrow-right').click(function (e) {
                if (mySwiper1.activeIndex == 5) {
                    $('.preview ul').animate({
                        'margin-left': '-100%'
                    }, 1000)
                }
                mySwiper1.slideNext()
            })
            $('.preview .arrow-right').click(function (e) {
                if (mySwiper1.activeIndex == 9) {
                    $('.preview ul').animate({
                        'margin-left': '-125%'
                    }, 1000)
                }
                mySwiper1.slideNext()
            })

            $('#sl1').click(function () {
                mySwiper1.slideTo(1)
            })

            $('#sl2').click(function () {
                mySwiper1.slideTo(2)
            })

            $('#sl3').click(function () {
                mySwiper1.slideTo(3)
            })

            $('#sl4').click(function () {
                mySwiper1.slideTo(4)
            })

            $('#sl5').click(function () {
                mySwiper1.slideTo(5)
            })

            $('#sl6').click(function () {
                mySwiper1.slideTo(6)
            })

            $('#sl7').click(function () {
                mySwiper1.slideTo(7)
            })

            $('#sl8').click(function () {
                mySwiper1.slideTo(8)
            })

            $('#sl9').click(function () {
                mySwiper1.slideTo(9)
            })
        })
    </script>
@endsection