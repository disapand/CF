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
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}" class="active">合作交流</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}">研学营地</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/yxhd/hzjl_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row" style="margin-top: 6%;">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2" style="margin-bottom: 2%;">
            <img src="{{ asset('images/yxhd/hzjl_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 6%;">
            <p>近年来，泾河新城以打造国内文化旅游新高地，大力发展文化旅游产业，加快旅游景区建设，完善旅游服务功能，打造精品旅游景点，全力构建大西安北部中心文化旅游目的地。随着发展，新城文化旅游产业已初具规模，实现了全域旅游立体化的转变。近年来，泾河新城以打造国内文化旅游新高地，大力发展文化旅游产业，加快旅游景区建设，完善旅游服务功能，打造精品旅游景点，全力构建大西安北部中心文化旅游目的地。随着发展，新城文化旅游产业已初具规模，实现了全域旅游立体化的转变。</p>
            <p>为加强在校学生实践教学，提高学生实践能力和科学研究的基本技能，达到资源共享、相互促进，发挥各自优势，泾河城服和西安科技大学达成共识，共同建立“特色鲜明、区位优势突出、国内领先、对国内外开放”的实习示范基地。</p>
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