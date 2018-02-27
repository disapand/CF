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
            width: 100%;
            clear: both;
            overflow: hidden;
            -webkit-padding-start: 0;
        }

        .preview ul li {
            float: left;
            width: 25%;
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
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}" class="active">一塔五馆</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}">研学营地</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/yxhd/ytwg/ytwg_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-bottom: 30px;">
            <img src="{{ asset('images/yxhd/ytwg/ytwg_z1.png') }}" alt="" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p style="text-align: center">走进陕商文化博览馆，学习了解陕商文化、陕商发展历史及陕商精神，领略在茶马古道和盐马古道上驰骋的天下第一商帮的魄力。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 80px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container swiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_1.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_2.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_3.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_4.jpg') }}" alt="" class="img-100">
                    </div>
                </div>
            </div>

            <div class="row preview" style="z-index: 3;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<ul>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl1.jpg') }}" alt="" class="img-100" id="sl1"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_2.jpg') }}" alt=""  class="img-100" id="sl2"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_3.jpg') }}" alt=""  class="img-100" id="sl3"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl4.jpg') }}" alt=""  class="img-100" id="sl4"></li>
                    </ul>
                </div>

                <div class="arrow-left"></div>
                <div class="arrow-right"></div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-bottom: 30px;">
            <img src="{{ asset('images/yxhd/ytwg/ytwg_z2.png') }}" alt="" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p style="text-align: center">在国艺秦腔馆，学生们学习了解秦腔艺术的特色及发展历史，大俗大雅美秦腔大放其彩。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 80px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_5.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_6.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_7.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_8.jpg') }}" alt="" class="img-100">
                    </div>
                </div>
            </div>

            <div class="row preview" style="z-index: 3;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_5.jpg') }}" alt="" class="img-100" id="sl5"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_6.jpg') }}" alt=""  class="img-100" id="sl6"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_7.jpg') }}" alt=""  class="img-100" id="sl7"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_8.jpg') }}" alt=""  class="img-100" id="sl8"></li>
                    </ul>
                </div>

                <div class="arrow-left"></div>
                <div class="arrow-right"></div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-bottom: 30px;">
            <img src="{{ asset('images/yxhd/ytwg/ytwg_z3.png') }}" alt="" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>在三秦非遗博览馆，学习了解我省非物质文化遗产知识，观看合阳提线木偶戏、华县皮影戏、泾阳茯砖茶制作技艺等省内81项非物质文化遗产项目，学生们在享受传统文化艺术表演的同时，了解了中华民族的传统艺术知识，感受到了三秦大地灿烂的文化及悠久的历史。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 80px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container swiper3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_9.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_10.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_11.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_12.jpg') }}" alt="" class="img-100">
                    </div>
                </div>
            </div>

            <div class="row preview" style="z-index: 3;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_9.jpg') }}" alt="" class="img-100" id="sl9"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_10.jpg') }}" alt=""  class="img-100" id="sl10"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_11.jpg') }}" alt=""  class="img-100" id="sl11"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_12.jpg') }}" alt=""  class="img-100" id="sl12"></li>
                    </ul>
                </div>

                <div class="arrow-left"></div>
                <div class="arrow-right"></div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-bottom: 30px;">
            <img src="{{ asset('images/yxhd/ytwg/ytwg_z4.png') }}" alt="" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>走进崇文国学馆，学生们了解“礼、乐、射、御、书、数”六艺文化，领会中国在文字、建筑、医药、天文地理等方面的发展与成就，同学们纷纷表示受益良多。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 80px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="swiper-container swiper4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_13.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_14.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_15.jpg') }}" alt="" class="img-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/yxhd/ytwg/ytwg_lb_16.jpg') }}" alt="" class="img-100">
                    </div>
                </div>
            </div>

            <div class="row preview" style="z-index: 3; margin-bottom: 100px;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_13.jpg') }}" alt="" class="img-100" id="sl13"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_14.jpg') }}" alt=""  class="img-100" id="sl14"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_15.jpg') }}" alt=""  class="img-100" id="sl15"></li>
                        <li><img src="{{ asset('images/yxhd/ytwg/ytwg_sl_16.jpg') }}" alt=""  class="img-100" id="sl16"></li>
                    </ul>
                </div>

                <div class="arrow-left"></div>
                <div class="arrow-right"></div>
            </div>
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

            var mySwiper2 = new Swiper('.swiper2', {
                autoplay: 5000,
                speed: 1500,
                direction: 'horizontal',
                loop: true,
                autoplayDisableOnInteraction: false,
            })

            var mySwiper3 = new Swiper('.swiper3', {
                autoplay: 5000,
                speed: 1500,
                direction: 'horizontal',
                loop: true,
                autoplayDisableOnInteraction: false,
            })

            var mySwiper4 = new Swiper('.swiper4', {
                autoplay: 5000,
                speed: 1500,
                direction: 'horizontal',
                loop: true,
                autoplayDisableOnInteraction: false,
            })

            $('.preview .arrow-left').click(function (e) {
                if (mySwiper1.activeIndex == 1) {
                    mySwiper1.slideTo(4, 1000)
                }
                mySwiper1.slidePrev()

                if (mySwiper2.activeIndex == 1) {
                    mySwiper2.slideTo(4, 1000)
                }
                mySwiper2.slidePrev()

                if (mySwiper3.activeIndex == 1) {
                    mySwiper3.slideTo(4, 1000)
                }
                mySwiper3.slidePrev()

                if (mySwiper4.activeIndex == 1) {
                    mySwiper4.slideTo(4, 1000)
                }
                mySwiper4.slidePrev()
            })

            $('.preview .arrow-right').click(function (e) {
                if (mySwiper1.activeIndex == 4) {
                    mySwiper1.slideTo(1, 1000)
                }
                mySwiper1.slideNext()
                if (mySwiper2.activeIndex == 4) {
                    mySwiper2.slideTo(1, 1000)
                }
                mySwiper3.slideNext()
                if (mySwiper3.activeIndex == 4) {
                    mySwiper3.slideTo(1, 1000)
                }
                mySwiper4.slideNext()
                if (mySwiper4.activeIndex == 4) {
                    mySwiper4.slideTo(1, 1000)
                }
                mySwiper2.slideNext()
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
                mySwiper2.slideTo(1)
            })
            $('#sl6').click(function () {
                mySwiper2.slideTo(2)
            })
            $('#sl7').click(function () {
                mySwiper2.slideTo(3)
            })
            $('#sl8').click(function () {
                mySwiper2.slideTo(4)
            })

            $('#sl9').click(function () {
                mySwiper3.slideTo(1)
            })
            $('#sl10').click(function () {
                mySwiper3.slideTo(2)
            })
            $('#sl11').click(function () {
                mySwiper3.slideTo(3)
            })
            $('#sl12').click(function () {
                mySwiper3.slideTo(4)
            })

            $('#sl13').click(function () {
                mySwiper4.slideTo(1)
            })
            $('#sl14').click(function () {
                mySwiper4.slideTo(2)
            })
            $('#sl15').click(function () {
                mySwiper4.slideTo(3)
            })
            $('#sl16').click(function () {
                mySwiper4.slideTo(4)
            })

        })
    </script>
@endsection